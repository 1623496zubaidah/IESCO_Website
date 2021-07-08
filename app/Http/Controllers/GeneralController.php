<?php

namespace App\Http\Controllers;

use App\Project;
use App\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GeneralController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:general-list|general-create|general-edit|general-delete', ['only' => ['approScholarships', 'denyScholarships']]);
        // $this->middleware('permission:general-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:general-edit', ['only' => ['deny', 'approve', 'download', 'publishProject']]);
        $this->middleware('permission:general-delete', ['only' => ['delete']]);
    }

    public function approScholarships()
    {
        $approved = Scholarship::all()->where("approved", "approved");

        return view("admin.approScholarship")->with("approved", $approved);
    }



    public function denyScholarships()
    {
        $approved = Scholarship::all()->where("approved", "deny");
        return view("admin.denyScholarship")->with("approved", $approved);
    }

    // ----- Download file of scholarship application Route ----- //
    public function approve(Request $request, $id)
    {
        $status = Scholarship::find($id);


        $status->approved = "approved";
        $status->save();
        return redirect("admin/scholarships")->with("success", "This is scholarship has been approved");
    }

    public function deny(Request $request, $id)
    {
        $status = Scholarship::find($id);

        $status->approved = "deny";
        $status->save();
        return redirect("admin/scholarships")->with("success", "This is scholarship has been denied");
    }
    public function delete(Request $request, $id)
    {
        $scholarship = Scholarship::find($id);

        $scholarship->delete();


        return redirect("admin/approved-scholarships")->with("success", "This is scholarship has been deleted");
    }
    public function download(Request $request, $id)
    {
        $scholarships = Scholarship::find($id);
        // return view('admin.scholarship.index')->with("scholarships",  $scholarships);
        $zip_file = 'files.zip';
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        $path = public_path("files/" . $scholarships->email);

        if (!file_exists($path)) {
            return Redirect::back()->withErrors(['This application does not have any files to download']);
        } else {


            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
            foreach ($files as $name => $file) {
                // We're skipping all subfolders
                if (!$file->isDir()) {
                    $filePath     = $file->getRealPath();

                    // extracting filename with substr/strlen
                    $relativePath = "files/" . $scholarships->email . "/" . substr($filePath, strlen($path) + 1);

                    $zip->addFile($filePath, $relativePath);
                }
            }
            return response()->download($zip_file);
        }
    }

    public function publishProject(Request $request, $id)
    {
        $project = Project::find($id);

        $project->published = true;
        $project->save();
        return redirect('/admin/projects')->with('success', '* Project has been Published *');
    }
}

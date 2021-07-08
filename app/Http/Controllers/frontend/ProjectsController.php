<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;
use App\Scholarship;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;
use ZipArchive;

class ProjectsController extends Controller
{

    public function index()
    {

        // $projects = Project::orderBy('created_at', 'desc')->where("published", 1)->paginate(10);
        $projects = Project::orderBy('created_at', 'desc')->where("published", 1)->paginate(10);
        return view('frontend.pages.implemented')->with('projects', $projects);
    }

    public function show($id)
    {
        $project = Project::find($id);
        if (!$project->published) {
            return redirect('/projects')->with('success', '* Project has been created *');
        }
        return view('frontend.projects.show')->with('project', $project);
    }

    // public function create()
    // {
    //     return view('admin.projects.create');
    // }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'title' => 'required',
    //         'desc' => 'required',
    //         'targeted' => 'required',
    //         'type' => 'required',
    //         'dateToBeReady' => 'required',

    //         'photo' => 'image|nullable|max:1999'
    //     ]);

    //     if ($request->hasFile('photo')) {
    //         ///Get file name with Extensiom
    //         $filenameWithExt = $request->file('photo')->getClientOriginalName();

    //         ///get just a filename
    //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //         $extension = $request->file('photo')->getClientOriginalExtension();
    //         ///Save the image
    //         $fileNameToStore = $filename . '_' . time() . '.' . $extension;

    //         //upload the image to file
    //         $path = $request->file('photo')->storeAs('public/projects', $fileNameToStore);
    //     } else {
    //         $fileNameToStore = 'noimage.jpg';
    //     }

    //     $project = new Project;

    //     $project->title = $request->input('title');
    //     $project->desc = $request->input('desc');
    //     $project->targeted = $request->input('targeted');
    //     $project->type = $request->input('type');
    //     $project->dateToBeReady = $request->input('dateToBeReady');

    //     $project->photo = $fileNameToStore;
    //     $project->save();
    //     return redirect('/improjects');
    // }
}

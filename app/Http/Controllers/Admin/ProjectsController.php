<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Project;
use Carbon\Carbon;
use Image;

class ProjectsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:project-list|scholarship-create|project-edit|project-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:project-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);


        return view('admin.projects.index')->with('projects', $projects);
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'targeted' => 'required',
            'type' => 'required',
            'dateToBeReady' => 'required',
            'neededBudget' => 'required',

            'photo' => 'image|nullable|max:1999'
        ]);

        if ($request->hasFile('photo')) {
            ///Get file name with Extensiom
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            ///get just a filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            ///Save the image
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //upload the image to file
            $path = $request->file('photo')->storeAs('public\projects', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $project = new Project;

        $project->title = $request->input('title');
        $project->desc = $request->input('desc');
        $project->targeted = $request->input('targeted');
        $project->type = $request->input('type');
        $project->dateToBeReady = $request->input('dateToBeReady');
        $project->neededBudget = $request->input('neededBudget');

        $project->photo = $fileNameToStore;
        $project->save();

        return redirect('/admin/projects')->with('success', '* Project has been created *');
    }


    public function show($id)
    {
        $project = Project::find($id);

        return view('admin.projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit', compact('project'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'targeted' => 'required',
            'type' => 'required',
            'dateToBeReady' => 'required',
            'photo' => 'image|nullable|max:1999'
        ]);
        $project = Project::find($id);

        if ($request->hasFile('photo')) {
            ///Get file name with Extensiom
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            ///get just a filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            ///Save the image
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //upload the image to file
            $path = $request->file('photo')->storeAs('public\projects', $fileNameToStore);
            $project->photo = $fileNameToStore;
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        $project->title = $request->input('title');
        $project->desc = $request->input('desc');
        $project->targeted = $request->input('targeted');
        $project->type = $request->input('type');
        $project->dateToBeReady = $request->input('dateToBeReady');
        if ($request->input('published') == "true") {
            $project->published = true;
        } else {
            $project->published = false;
        }

        $project->save();

        return redirect('/admin/projects')->with('success', '* Project has been edited *');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/admin/projects')->with('success', '* Project has been deleted *');
    }
}

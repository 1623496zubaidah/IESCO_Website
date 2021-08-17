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

}

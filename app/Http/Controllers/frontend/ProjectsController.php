<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use Image;

class ProjectsController extends Controller
{
    
    public function index(){
        return view('frontend.pages.index', ['projects' => Project::orderBy('created_at', 'title')->get()]);
        $project = DB::table('projects')->value('title', 'desc', 'photo')->first();
         
     }
 
     public function show($id) {
         $project = Project::find($id); 
    
       return view('admin.projects.show', compact('project'));   
    }

}

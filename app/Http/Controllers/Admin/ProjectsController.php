<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Project;
use Image;

class ProjectsController extends Controller
{
    
    public function index(){
        // $projects = Project::all();
        // $projects = Project::paginate(5);
        $projects = Project::orderBy('id', 'desc')->paginate(5);
        return view('admin.projects.index', compact('projects'));
        
    }
    
        public function create (){
            return view('admin.projects.create');
        
        }
    
        public function store(Request $request){
             $project = $request->all();
             $request->validate([
                 'title' => 'required|max:200',
                 'targeted' => 'required|max:500',
                 'desc' => 'required|max:500',
                 'type' => 'required|max:50',
                 'photo' => 'required|image|max:2048',
    
             ]);
             if ($request->hasfile('photo')){
                 $file = $request->file('photo');
                 $ext = $file->getClientOriginalExtension();
                 $filename = 'photo' . '_' . time() . '.' .$ext;

                 $file->storeAs('public/photos' , $filename);
                 
             } else {
                $filename = 'nophoto.png'; 
             }
    
             /*  $path = $request->file('photo')->store('storage/app/public/projects');
             $photo = basename($path);
             $project["photo"] = $photo; */ 
             
             
           
             $project = new Project();
             $project->title = $request->title;
             $project->targeted = $request->targeted;
             $project->desc = $request->desc;
             $project->type = $request->type;
             $project->photo = $filename;
             
    
             $project->save();
    
             return redirect('/admin/projects')->with('status','* Project was created *');
    
        }
    
    
        public function show($id) {
            $project = Project::find($id); 
       
          return view('admin.projects.show', compact('project'));   
       }  
        
        public function edit($id){
            $project = Project::find($id);
            return view('admin.projects.edit', compact('project'));
    
        }
    
    
        public function update(Request $request, $id){
            $request->validate([
                'title' => 'required|max:200',
                'targeted' => 'required|max:500',
                'desc' => 'required|max:500',
                'type' => 'required|max:50',
                'photo' => 'required|image|max:2048',
    
    
            ]);
            $project = Project::find($id);
            $project->title = $request->title;
            $project->targeted = $request->targeted;
            $project->desc = $request->desc;
            $project->type = $request->type;
            $project->photo = $request->photo;
    
    
            $project->save();
    
            return redirect('/admin/projects')->with('status','* Project was updated *');
        }
    
    public function destroy($id){
        $project = Project::find($id);
        $project->delete();
        return redirect('/admin/projects/index')->with('status','* Project was deleted *');
    
    }

}

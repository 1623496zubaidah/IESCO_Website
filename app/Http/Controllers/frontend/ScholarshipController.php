<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Scholarship;

class ScholarshipController extends Controller
{
     public function index(){
        $scholarships = Scholarship::orderBy('id')->paginate(5);
        return view('frontend.pages.scholarship', compact('scholarship'));
        
    } 
    
        public function create (){
            return view('frontend.pages.scholarship');
        
        }
    
        public function store(Request $request){
             $scholarship = $request->all();
             $request->validate([
                 'first_name' => 'required|max:200',
                 'second_name' => 'required|max:500',
                 'last_name' => 'required|max:500',
                 'gender' => 'required|max:50',
                 'nationality' => 'required',
                 'place_of_birth' => 'required',
                 'birthday' => 'required',
                 'passport_no' => 'required',
                 'email' => 'required',
                 'address' => 'required',
                 'phone_no' => 'required',
                 'photo' => 'nullable',
                 'uni_name' => 'nullable',
                 'edu_level' => 'nullable',
                 'course' => 'nullable',
                 'major' => 'nullable',
                 'matric_no' => 'nullable',
                 'cgpa' => 'nullable',
                 'user_id' => 'nullable',
    
             ]);
    
             /* $path = $request->file('photo')->store('public/scholarship');
             $photo = basename($path);
             $scholarship["photo"] = $photo;  */

             if ($request->hasfile('photo')){
                $file = $request->file('photo');
                $ext = $file->getClientOriginalExtension();
                $filename = 'photo' . '_' . time() . '.' .$ext;

                $file->storeAs('public/photos' , $filename);
                
            } else {
               $filename = 'nophoto.png'; 
            }

           
             $scholarship = new Scholarship();
             $scholarship->first_name = $request->first_name;
             $scholarship->second_name = $request->second_name;
             $scholarship->last_name = $request->last_name;
             $scholarship->gender = $request->gender;
             $scholarship->nationality = $request->nationality;
             $scholarship->place_of_birth = $request->place_of_birth;
             $scholarship->birthday = $request->birthday;
             $scholarship->passport_no = $request->$passport_no;
             $scholarship->email = $request->email;
             $scholarship->address = $request->address;
             $scholarship->phone_no = $request->phone_no;
             $scholarship->photo = $request->photo;
             $scholarship->uni_name = $request->uni_name;
             $scholarship->edu_level = $request->edu_level;
             $scholarship->course = $request->course;
             $scholarship->major = $request->major;
             $scholarship->matric_no = $request->matric_no;
             $scholarship->cgpa = $request->cgpa;
             $scholarship->user_id = $request->user_id;

             
    
             $scholarship->save();
    
             return redirect('/frontend.home')->with('status','created ');
    
        }
    
  /*    
        public function show($id) {
            $scholarship = Scholarship::find($id); 
       
          return view('admin.scholarship.show', compact('project'));   
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
                'photo' => 'required',
    
    
            ]);
            $project = Project::find($id);
            $project->title = $request->title;
            $project->targeted = $request->targeted;
            $project->desc = $request->desc;
            $project->type = $request->type;
            $project->photo = $request->photo;
    
    
            $project->save();
    
            return redirect('/admin/projects/index')->with('status','Project was updated ');
        }
    
    public function destroy($id){
        $project = Project::find($id);
        $project->delete();
        return redirect('/admin/projects/index')->with('status','Project was deleted ');
    
    }

} */
}

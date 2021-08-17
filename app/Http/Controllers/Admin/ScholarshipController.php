<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Scholarship;
use Auth;
use Storage;
use App\DataTables\ScholarshipDataTable;


class ScholarshipController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:scholarship-list|scholarship-create|scholarship-edit|scholarship-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:scholarship-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:scholarship-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:scholarship-delete', ['only' => ['destroy']]);
    }
   public function index()
    {
        $scholarships = Scholarship::all();
        return view('admin.scholarship.index')->with("scholarships",  $scholarships);
    } 

    public function show($id)
    {
        $scholarship = Scholarship::find($id);

        

        return view('admin.scholarship.show')->with("scholarship", $scholarship);
    }

     public function edit($id)
    {
        $scholarship = Scholarship::find($id);
        return view('admin.scholarship.edit')->with("scholarship", $scholarship);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'second_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'nation' => 'required',
            'place_of_birth' => 'required',
            'birth' => 'required',
            'marital_status' => 'required',
            'passport' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'uni_name' => 'required',
            'edu_level' => 'required',
            'course' => 'required',
            'major' => 'required',
            'matric' => 'required',
            'cgpa' => 'required',
            'total_credit' => 'total_credit',
            'Total_years' =>'Total_years',
            'credit_hours_done' => 'credit_hours_done',
            'tuition_fee' =>'tuition_fee',
            'transport_cost' => 'transport_cost',
            'books_cost' => 'books_cost',
            'room_cost' => 'room_cost',
            'No_family_members' => 'No_family_members',
            'monthly_income' => 'monthly_income',
            'situation' => 'situation',

        ]);


        $post = Scholarship::find($id);
        $post->first_name = $request->input('first_name');
        $post->second_name = $request->input('second_name');
        $post->last_name = $request->input('last_name');
        $post->gender = $request->input('gender');
        $post->nationality = $request->input('nation');
        $post->place_of_birth = $request->input('place_of_birth');
        $post->birthday = $request->input('birth');
        $post->marital_status = $request->input('marital_status');
        $post->passport_no = $request->input('passport');
        $post->email = $request->input('email');
        $post->phone_no = $request->input('phone');
        $post->address = $request->input('address');
        $post->uni_name = $request->input('uni_name');
        $post->edu_level = $request->input('edu_level');
        $post->course = $request->input('course');
        $post->major = $request->input('major');
        $post->matric_no = $request->input('matric');
        $post->cgpa = $request->input('cgpa');
        $post->total_credit = $request->input('total_credit');
        $post->Total_years = $request->input('Total_years');
        $post->credit_hours_done = $request->input('credit_hours_done');
        $post->tuition_fee = $request->input('tuition_fee');
        $post->transport_cost = $request->input('transport_cost');
        $post->books_cost = $request->input('books_cost');
        $post->room_cost = $request->input('room_cost');
        $post->No_family_members = $request->input('No_family_members');
        $post->monthly_income = $request->input('monthly_income');
        $post->situation = $request->input('situation');



        $post->save();
        return redirect("admin/scholarships")->with('success', '* your application has been created *');
    } 

    public function destroy($id)
    {

    }
}

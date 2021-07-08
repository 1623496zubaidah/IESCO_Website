<?php

namespace App\Http\Controllers;

use App\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApplyScholarship extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend.pages.scholarship');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.scholarships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            'photo' => 'image|nullable|max:1999',
            'files.*' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg'
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
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $file) {
                $name = time() . '.' . $file->extension();
                $file->move(public_path() . "/files/" . $request->email, $name);
                $data[] = $name;
            }
        } else {
            $data[] = null;
        }
        $post = new Scholarship;
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
        $post->photo =   $fileNameToStore;
        $post->uni_name = $request->input('uni_name');
        $post->edu_level = $request->input('edu_level');
        $post->course = $request->input('course');
        $post->major = $request->input('major');
        $post->matric_no = $request->input('matric');
        $post->cgpa = $request->input('cgpa');
        $post->files = json_encode($data);

        $post->user_id = Auth::user()->id;

        // $post->files = $fileNameToStoreFile;

        $post->save();
        return redirect("apply/create")->with('success', '* your application has been created successfully*');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

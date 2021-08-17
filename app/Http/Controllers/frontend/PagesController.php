<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactUs;


use App\News;
use Illuminate\Http\Request;
use App\Project;
use App\User;

class PagesController extends Controller
{

    public function home()
    {
        
        $neededprojects = Project::orderBy('created_at','desc')->where('published',0)->take(6)->get();

         $projects = Project::orderBy('created_at')->take(3)->get();
        //  $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        // $projects = Project::all();
        $news = News::orderBy('created_at', 'desc')->take(2)->get();
        return view('frontend.pages.home')->with('projects', $projects)->with('news', $news)->with('neededprojects', $neededprojects);
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function chairman()
    {
        return view('frontend.pages.chairman');
    }

    public function trustees()
    {
        return view('frontend.pages.trustees');
    }

    public function advisors()
    {
        return view('frontend.pages.advisors');
    }

    public function ceo()
    {
        return view('frontend.pages.ceo');
    }

    public function chart()
    {
        return view('frontend.pages.chart');
    }

    public function news()
    {
        return view('frontend.pages.news');
    }

    public function implemented()
    {

    $projects = Project::orderBy('created_at', 'desc')->paginate(10);
    $neededprojects = Project::orderBy('created_at', 'desc')->where("published", 0)->get();
    $news = News::orderBy('created_at', 'desc')->paginate(10);
    return view('frontend.pages.implemented')->with('projects', $projects)->with('neededprojects', $neededprojects);

}

    public function scholarship1()
    {
        return view('frontend.pages.scholarship');
    }

    public function donate()
    {
        $users = User::all();
        return view('frontend.pages.donate');
    }

    public function index()
    {
       /* $projects = Project::orderBy('created_at', 'desc')->paginate(10);
         $neededprojects = Project::orderBy('created_at', 'desc')->where("published", 0)->get();
 */ 

$projects = Project::orderBy('created_at', 'desc')->where("published", false)->paginate(10);
    return view('frontend.pages.uncompletedProjects')->with('projects', $projects);

 return view('frontend.projects.index');
    }



    public function show($id){
        $project = Project::find($id);

        return view('frontend.projects.show', compact('project'));
    }

    public function projectslist() {
        $projects = Project::orderBy('created_at', 'desc')->where("published", false)->paginate(10);
        return view('frontend.pages.uncompletedProjects')->with('projects', $projects);
    }



    public function dosend(Request $request){

        $this->validate($request, [
                     'name' => 'required',
                     'email' => 'required|email',
                     'body' => 'required|min:10']);
        

            $name = $request->input('name');
            $email = $request->input('email');
            $body = $request->input('body');


            Mail::to('zubaida2009.ali@gmail.com')
            ->send(new ContactUs($name, $email, $body));

            return redirect('/')->with('success', 'We have received your message');


}

}



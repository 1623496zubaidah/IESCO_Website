<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use App\Project;
use App\User;

class PagesController extends Controller
{

    public function home()
    {
        // $projects = Project::orderBy('created_at')->take(3)->get();
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        // $projects = Project::all();
        $neededprojected = Project::orderBy('created_at', 'desc')->where("published", 0)->get();
        $news = News::orderBy('created_at', 'desc')->paginate(10);;
        return view('frontend.pages.home')->with('projects', $projects)->with('news', $news)->with('neededprojected', $neededprojected);
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
        return view('frontend.pages.implemented');
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
        return view('frontend.projects.index');
    }
}

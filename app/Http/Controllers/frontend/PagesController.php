<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\User;

class PagesController extends Controller
{
    
    public function home() {
        // $projects = Project::orderBy('created_at')->take(3)->get();
        $projects = Project::all();
            return view('frontend.pages.home', compact('projects'));
        }
    
        public function about() {
            return view('frontend.pages.about');
        }
    
        public function chairman() {
            return view('frontend.pages.chairman');
        }
    
        public function trustees() {
            return view('frontend.pages.trustees');
        }
    
        public function ceo() {
            return view('frontend.pages.ceo');
        }
    
        public function chart() {
            return view('frontend.pages.chart');
        }
    
        public function news() {
            return view('frontend.pages.news');
        }
    
        public function implemented() {
            return view('frontend.pages.implemented');
        }
    
        public function scholarship1() {
            return view('frontend.pages.scholarship');
        }

        public function donate() {
            $users = User::all();
            return view('frontend.pages.donate');
        }

        public function index() {
            return view('frontend.projects.index');
        }

}

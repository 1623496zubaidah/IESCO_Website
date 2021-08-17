<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Scholarship;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

}

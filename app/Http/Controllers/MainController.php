<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => "Mail from ISEO",
            "body" => "welcome duder"
        ];

        Mail::to("amer23zx@gmail.com")->send(new TestMail($details));
        return "sent";
    }
}

<?php

namespace App\Http\Controllers;

use App\Donation;
use App\General_Donation;
use App\Project;
use Illuminate\Http\Request;
use Payment;
use Session;

class PaymentController extends Controller
{
    /**
     * payment view
     */
    public function handleGet($id)
    {
        $project = Project::find($id);
        return view('payment')->with("project", $project);
    }


    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {

        $project = Project::find($request->id);
        $donor = new Donation();

        $project->paidBudget =  $project->paidBudget + $request->input("amount");
        $project->save();

        $donor->amount = $request->input("amount");
        $donor->donor_name = $request->input("name");
        $donor->donor_phone = $request->input("phone");
        $donor->projectId = $project->id;
        $donor->project_name = $project->title;
        $donor->save();

        Session::flash('success', 'Payment has been successfully processed.');

        return redirect('/');
    }

    public function viewGeneralPayment()
    {
        return view('frontend.pages.generalpayment');
    }
    public function general_donation(Request $request)
    {
        $donate = new General_Donation();


        $donate->amount = $request->input("amount");
        $donate->name = $request->input("name");
        $donate->phone = $request->input("phone");
        if ($request->input("comment") == null) {
            $donate->comment = "not metioned";
        } else {
            $donate->comment = $request->input("comment");
        }
        $donate->save();

        Session::flash('success', 'Payment has been successfully processed.');

        return redirect('/');
    }
}

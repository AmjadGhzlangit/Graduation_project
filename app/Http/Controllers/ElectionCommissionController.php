<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use App\Models\candidacy_application;
use App\Models\election_commission;
use App\Models\IdInformation;
use App\Models\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ElectionCommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidacy_applications =  candidacy_application::with(['id_information','images'])->get();
    //    dd($request);
        return view('election_commission.index',compact('candidacy_applications'));
    }

    public function finish_election()
    {
        $max_votes = candidacy_application::max('votes'); // Get the maximum number of votes

        $candidacy_applications = candidacy_application::where('votes', $max_votes)->get(); // Retrieve all candidacy applications with the maximum number of votes
        // $candidacy_applications =  candidacy_application::where('votes');
        return view('',compact('candidacy_applications'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function  create_election()
    {
       
        return view('election_commission.pages.create_election');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->start_election > $request->end_election)
        {
            // dd($request);
            return redirect()->route('create_election')->with('error','You Enter the date false');
        }
        election_commission::create([
            'start_election'=>$request->input('start_election'),
            'end_election'=>$request->input('end_election'),
        ]);
        return redirect()->route('index')->with('successful','Create election date successful ');

    }

    /**
     * Display the specified resource.
     */
    public function show(candidacy_application $candidacy_application)
    {
        // dd($candidacy_application);
        $images = image::all();
        return view('election_commission.pages.blank-page',compact(['candidacy_application','images']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(election_commission $election_commission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(candidacy_application $candidacy_application)
    {
        
        $candidacy_application->status = true;
        $candidacy_application->save();
        Mail::to('amjadghzlangit@gmail.com')->send(new TestEmail);
        return redirect()->route('index')->with(' ', 'تم قبول المرشح بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(candidacy_application $candidacy_application)
    {
        $candidacy_application->delete();
        return redirect()->route('index')->with('success', 'User has been deleted.');

    }
}

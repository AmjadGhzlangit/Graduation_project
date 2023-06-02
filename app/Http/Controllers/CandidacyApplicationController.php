<?php

namespace App\Http\Controllers;

use App\Models\candidacy_application;
use App\Models\image;
use Illuminate\Http\Request;

class CandidacyApplicationController extends Controller
{
   
    public function index()
    {
        return view('nomiation.form_one');
    }

    public function show()
    {
        $candidacy_applications =  candidacy_application::with(['id_information','images'])->get();
        return view('dashboard',compact('candidacy_applications'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request = candidacy_application::create([
            
            'education'=>$request->input('education'),
            'election_program'=>$request->input('election_program'),
            'phoneNumber'=>$request->input('phoneNumber'),
            'address'=>$request->input('address'),
            'category'=>$request->input('category'),
        ]);
        session(['form1_data' => $request]);
        return redirect()->route('id_form');
    }

    public function show_data(candidacy_application $candidacy_application)
    {
        // $candidacy_applications =  candidacy_application::with(['id_information','images'])->get();
        return view('election',compact('candidacy_application'));
    }

    public function update()
    {
        
    }
}

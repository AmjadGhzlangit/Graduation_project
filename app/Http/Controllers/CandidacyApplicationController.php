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

    public function store(Request $request)
    {
        $request = candidacy_application::create([
            'education'=>$request->input('education'),
            'phoneNumber'=>$request->input('phoneNumber'),
            'address'=>$request->input('address'),
            'category'=>$request->input('category'),
        ]);
        session(['form1_data' => $request]);
        return redirect()->route('form_two');
    }
}

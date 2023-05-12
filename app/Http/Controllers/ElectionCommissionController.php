<?php

namespace App\Http\Controllers;

use App\Models\candidacy_application;
use App\Models\election_commission;
use Illuminate\Http\Request;

class ElectionCommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $request =  candidacy_application::all();
    //    dd($request);
        return view('election_commission.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(election_commission $election_commission)
    {
        //
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
    public function update(Request $request, election_commission $election_commission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(election_commission $election_commission)
    {
        //
    }
}

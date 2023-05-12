<?php

namespace App\Http\Controllers;

use App\Models\candidacy_application;
use App\Models\IdInformation;
use Illuminate\Http\Request;

class IdInformationController extends Controller
{

    public function index()
    {
        return view('nomiation.id_form');
    }
    public function  store(Request $request)
    {

        dd($request);
        $form1Data = session('form1_data')->toArray();
        $request = IdInformation::create([
            'candidacy_applications_id' => $form1Data['id'],
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'father_name'=>$request->input('father_name'),
            'mother_name'=>$request->input('mother_name'),
            'birthday'=>$request->input('birthday'),
            'place_birth'=>$request->input('place_birth'),
            'gender'=>$request->input('gender'),
            'place_registration'=>$request->input('place_registration'),
            'number_registration'=>$request->input('number_registration'),
        ]);
        return redirect()->route('form_two');
    }
}











//     $request = IdInformation::create([
        //     'candidacy_applications_id'=>$request->input('candidacy_applications_id'),
        //     'first_name'=>$request->input('first_name'),
        //     'last_name'=>$request->input('last_name'),
        //     'father_name'=>$request->input('father_name'),
        //     'mother_name'=>$request->input('mother_name'),
        //     'birthday'=>$request->input('birthday'),
        //     'place_birth'=>$request->input('place_birth'),
        //     'gender'=>$request->input('gender'),
        //     'place_registration'=>$request->input('place_registration'),
        //     'number_registration'=>$request->input('number_registration'),
        // ]);
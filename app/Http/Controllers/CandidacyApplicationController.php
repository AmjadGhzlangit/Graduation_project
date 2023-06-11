<?php

namespace App\Http\Controllers;

use App\Models\candidacy_application;
use App\Models\image;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CandidacyApplicationController extends Controller
{
   
    public function index()
    {
        return view('nomiation.form_one');
    }

    public function show()
    {
        $candidacy_applications =  candidacy_application::with(['id_information','images'])->get();
        $news = News::all();
        if($candidacy_applications)
        {
        return view('dashboard',compact('candidacy_applications','news'));
        }
       
        return view('dashboard');
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

    public function update(candidacy_application $candidacy_application, Request $request)
    {
        
        if(Auth::user()->has_voted == 0){
            
       $candidacy_application->votes+=1;
       $user = Auth::user();
        $user->has_voted = true;
        $user->save();
       $candidacy_application->save();
       return Redirect()->route('show_dashboard',compact('candidacy_application'))
       ->with('massage','تم التصويت للمرشح , شكرا لك');
    }
       return Redirect()->route('show_dashboard',compact('candidacy_application'))
       ->with('massage',' نحن نعتذر و لكنك قمت بالتصويت من قبل' );
    }

    public function search(Request $request)
    {
    
    $query = $request->input('search');
    
    $candidacy_applications = candidacy_application::where('election_program', 'like', "%$query%")
        ->orWhere('education', 'like', "%$query%")
        ->orWhere('category', 'like', "%$query%")
        ->get();    

    return view('search_election',compact('candidacy_applications'));
    }
}

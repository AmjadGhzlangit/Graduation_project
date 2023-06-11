<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages= Message::all();   
        return view('admin.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.election_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'id_number'=>$request->input('id_number'),
            'phone_number'=>$request->input('phone_number'),
            'email'=>$request->input('email'),
            'is_admin' => $request->input('is_admin'),
            'password' => Hash::make($request->password),
        ]);
        $user->save() ; 
        return redirect()->route('adm.index');
    }
}

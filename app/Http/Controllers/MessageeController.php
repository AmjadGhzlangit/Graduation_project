<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageeController extends Controller
{
    public function store(Request $request)
{
   
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Message::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'message' => $validatedData['message'],
    ]);

    return redirect('/')->with('success', 'Message sent successfully!');
}
    public function delete(Message $message)
    {
        $message->delete();
        return redirect()->route('adm.index');
    }
}

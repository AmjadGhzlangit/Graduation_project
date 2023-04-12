<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserdata;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Rules\ValidPhoneNumber;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StoreUserdata $request): RedirectResponse
    {   
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        //     'id_number' => ['required', 'string',  'digits:10'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults(),],
        //     'phone_number' => ['required', 'digits:10', 'regex:/^09/'],
        //     // regex:/^09/ rule will ensure that the password field starts with 09. If the user enters a password that doesn't start with 09, a validation error will be thrown.
        // ],
        // [
        //     'id_number.digits' => 'You must enter a 10-digit ID number',
        //     'id_number.required' => 'Please enter your ID number.',
        //     'phone_number.regex' => 'The phone number must start with 09.',
        // ]);
        
        // dd($request);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'id_number' => $request->id_number,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            
        ]);
        event(new Registered($user));
        Auth::login($user);
        
        return redirect(RouteServiceProvider::HOME);


    }
}

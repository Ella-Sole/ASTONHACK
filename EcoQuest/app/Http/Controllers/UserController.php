<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use the user model
use App\Models\User;
//use authentication
use Illuminate\Support\Facades\Auth;
//use hash
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //validates login details
    public function login(Request $details){
        $a = $details->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if (Auth::attempt($a)){
            //create a session if logged in
            $details->session()->regenerate();

            //redirect to homepage if successful
            return redirect()->intended('/');

        }  
        return back()->withErrors([
            'Your login details are incorrect'
        ]);
    }

    public function signup(Request $details){
        //validates the info put into form
        $details->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name'=> $details->name,
            'email' => $details->email,
            'password' => Hash::make($details->password),
        ]);

        //redirect to login if successful
        return redirect()->intended('/login');

    }
}




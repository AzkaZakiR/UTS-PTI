<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    //

    public function masuk(){
        return view('auth.masuk');
    }
    public function index(){
        return view('auth.index');
    }
    public function registration()
    {
        return view('auth.registration');
    }
    
    public function customRegistration(Request $request)
    {
        //$request-
    }
    public function customLogin( Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials )){ 
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        };
        // if (Auth::attempt($credentials)) {
            // return redirect()->route('dashboard')->withSuccess('Signed in!');
        // }

        return redirect("login")->withSuccess('Login credential are not valid');
    }
}

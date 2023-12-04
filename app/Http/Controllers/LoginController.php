<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    //

    public function login(){
        if (Auth::check()){
            return redirect('home');
        }else{ 
         return view('auth.masuk');
        }
    }

    public function actionLogin(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($data) || 
        Auth::attempt(['username'=> $data['email'] , 'password' => $data['password']])){
            return redirect('home');
        } else {
            Session::flash('error', 'Email or password is incorrect');
            return redirect('/');
        }
    }

    public function actionLogout(){
        Auth::logout();
        return redirect('/');
    }

}

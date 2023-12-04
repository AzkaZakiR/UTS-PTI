<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    //

    public function register()
    {
        return view('auth.masuk');
    }

    public function actionRegister(Request $request)
    {
        $user = Users::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
            'active' => 1
        ]);

        Session::flash('message', 'Register Successful, Please login with your credentials.');
        return redirect('/');
    }
}

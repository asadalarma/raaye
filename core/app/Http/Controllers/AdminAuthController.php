<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{


    public function getLogin()
    {
        return view('auth.login');
    }


    public function postLogin(Request $request)
    {

        if (Auth::guard('user')->attempt([
            'username' => $request->email,
            'password' => $request->password,
            'type' => User::ADMIN
        ])
        ) {

            // Authentication passed...
            return redirect('/dashboard');
        }

       $request->session()->flash('message', 'Login incorrect!');
       return redirect()->back();
    }

    public function logout(Request $request){
        Auth::guard('user')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        session()->flash('message', 'Just Logged Out!');

        return redirect('/auth');
    }



}

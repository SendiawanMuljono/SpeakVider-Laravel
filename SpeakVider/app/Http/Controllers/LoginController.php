<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        return view('/login', [
            'title' => 'Login'
        ]);

    }

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'Email or Password is Invalid',
        ]);

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        alert() -> success('Success', 'Logout Successfully');

        return redirect('/login');
    }
}

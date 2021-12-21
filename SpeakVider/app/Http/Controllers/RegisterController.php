<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){

        return view('/register', [
            'title' => 'Register'
        ]);

    }

    public function store(Request $request){

        $validateData = $request -> validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'phoneNumber' => 'required|min:9',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        $validateData['role'] = 'user';

        User::create($validateData);

        return redirect('/login');
    }
}

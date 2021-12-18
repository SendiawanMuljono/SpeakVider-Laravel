<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewUsers(){
        $users = User::all();
        return view('listusers', [
            'users' => $users
        ]);
    }

    public function viewInsertUser(){
        return view('insertuser');
    }

    public function viewUpdateUser($userID){
        $user = User::where('id', $userID)->first();
        return view('updateuser', [
            'user' => $user
        ]);
    }

    public function deleteUser($userID){
        $user = User::where('id', $userID)->first();
        $user->delete();
        return redirect()->back();
    }
}

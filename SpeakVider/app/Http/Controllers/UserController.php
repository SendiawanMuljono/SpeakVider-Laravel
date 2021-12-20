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
            'title' => 'List Users',
            'users' => $users
        ]);
    }

    public function viewInsertUser(){
        return view('insertuser', [
            'title' => 'Insert User'
        ]);
    }

    public function insertUser(Request $request){
        return redirect()->to('/admin/users');
    }

    public function viewUpdateUser($userID){
        $user = User::where('id', $userID)->first();
        return view('updateuser', [
            'title' => 'Update User',
            'user' => $user
        ]);
    }

    public function deleteUser($userID){
        $user = User::where('id', $userID)->first();
        $user->delete();
        return redirect()->back();
    }
}

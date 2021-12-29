<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewUsers(){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $users = User::all();
        return view('listusers', [
            'title' => 'List Users',
            'users' => $users
        ]);
    }

    public function viewInsertUser(){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        return view('insertuser', [
            'title' => 'Insert User'
        ]);
    }

    public function insertUser(Request $request){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $validated = $request->validate([
            'email' => 'unique:users,email',
            'password' => 'min:8',
            'phoneNumber' => 'min:9'
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();
        return redirect()->to('/admin/users');
    }

    public function viewUpdateUser($userID){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $user = User::where('id', $userID)->first();
        return view('updateuser', [
            'title' => 'Update User',
            'user' => $user
        ]);
    }

    public function updateUser($userID, Request $request){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $validated = $request->validate([
            'email' => 'unique:users,email,'.$userID,
            'password' => 'min:8',
            'phoneNumber' => 'min:9'
        ]);
        $user = User::find($userID);
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();
        return redirect()->to('/admin/users');
    }

    public function deleteUser($userID){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $user = User::where('id', $userID)->first();
        $user->delete();
        return redirect()->back();
    }
}

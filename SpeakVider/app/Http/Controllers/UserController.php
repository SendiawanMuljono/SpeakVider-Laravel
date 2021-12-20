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
        $user = User::where('id', $userID)->first();
        return view('updateuser', [
            'title' => 'Update User',
            'user' => $user
        ]);
    }

    public function updateUser($userID, Request $request){
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
        $user = User::where('id', $userID)->first();
        $user->delete();
        return redirect()->back();
    }
}

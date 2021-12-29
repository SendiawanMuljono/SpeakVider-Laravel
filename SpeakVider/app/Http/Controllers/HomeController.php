<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function viewHome(){
        if(Auth::check()){
            if(auth()->user()->role == "admin"){
                return redirect()->to('/admin');
            }
        }
        $speakers = Speaker::simplePaginate(6);
        return view('home', [
            'title' => 'Home',
            'speakers' => $speakers
        ]);
    }

    public function viewHomeAdmin(){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $countUsers = User::count();
        $countSpeakers = Speaker::count();
        $countTransactions = Transaction::count();
        return view('homeadmin', [
            'title' => 'Home Admin',
            'countUsers' => $countUsers,
            'countSpeakers' => $countSpeakers,
            'countTransactions' => $countTransactions
        ]);
    }
}

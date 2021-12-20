<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome(){
        $speakers = Speaker::simplePaginate(6);
        return view('home', [
            'title' => 'Home',
            'speakers' => $speakers
        ]);
    }

    public function viewHomeAdmin(){
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

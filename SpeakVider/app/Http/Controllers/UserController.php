<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewHomeAdmin(){
        $countUsers = User::count();
        $countSpeakers = Speaker::count();
        $countTransactions = Transaction::count();
        return view('homeadmin', [
            'countUsers' => $countUsers,
            'countSpeakers' => $countSpeakers,
            'countTransactions' => $countTransactions
        ]);
    }
}

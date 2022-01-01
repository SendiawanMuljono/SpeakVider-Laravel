<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Speaker;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function viewTransactions(){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $transactions = Transaction::all();
        return view('listtransactions', [
            'title' => 'List Transactions',
            'transactions' => $transactions
        ]);
    }

    public function viewTransactionsByUser($userID){
        if(Auth::check()){
            if(auth()->user()->role == "admin"){
                return redirect()->to('/admin');
            }
        }
        $currentUser = User::where('id', $userID) -> first();
        $countTransactions = Transaction::where('userID', $userID) -> count();
        $transactions = Transaction::where('userID', $userID) -> simplePaginate(10);
        return view('listtransactionsuser', [
            'title' => 'Transactions',
            'currentUser' => $currentUser,
            'countTransactions' => $countTransactions,
            'transactions' => $transactions,
        ]);
    }

    public function updateTransactionStatusByUser($transactionID){
        if(Auth::check()){
            if(auth()->user()->role == "admin"){
                return redirect()->to('/admin');
            }
        }
        $transaction = Transaction::find($transactionID);

        $transaction->status = 'done';

        $transaction->save();

        return redirect()->back()->with('success', 'Payment success');

    }

    public function insertScheduleToTransaction($schedule){
        if(Auth::check()){
            if(auth()->user()->role == "admin"){
                return redirect()->to('/admin');
            }
        }
        $transaction = new Transaction();
        $transaction->userID = auth()->user()->id;
        $transaction->scheduleID = $schedule->id;
        $transaction->transactionDate = Carbon::now();
        $transaction->status = 'undone';
        $transaction->save();
    }
}

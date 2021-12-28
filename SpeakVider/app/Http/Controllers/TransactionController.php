<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Speaker;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function viewTransactions(){
        if(auth()->user()->role == "user"){
            return redirect()->to('/home');
        }
        $transactions = Transaction::all();
        return view('listtransactions', [
            'title' => 'List Transactions',
            'transactions' => $transactions
        ]);
    }

    public function viewTransactionsByUser($userID){
        if(auth()->user()->role == "admin"){
            return redirect()->to('/home');
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
        if(auth()->user()->role == "admin"){
            return redirect()->to('/home');
        }
        $transaction = Transaction::find($transactionID);

        $transaction->status = 'done';

        $transaction->save();

        return redirect()->back()->with('success', 'Payment success');

    }
}

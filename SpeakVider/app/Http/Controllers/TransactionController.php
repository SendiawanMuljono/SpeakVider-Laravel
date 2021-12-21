<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function viewTransactions(){
        $transactions = Transaction::all();
        return view('listtransactions', [
            'title' => 'List Transactions',
            'transactions' => $transactions
        ]);
    }

    public function viewTransactionsByUser($userID){
        $currentUser = User::where('id', $userID) -> first();
        $countTransactions = Transaction::where('userID', $userID) -> count();
        $transactions = Transaction::where('userID', $userID) -> get();
        return view('listtransactionsuser', [
            'title' => 'Transactions',
            'currentUser' => $currentUser,
            'countTransactions' => $countTransactions,
            'transactions' => $transactions,
        ]);
    }

    public function updateTransactionStatusByUser($transactionID){
        $transaction = Transaction::find($transactionID);
        
        $transaction->status = 'done';

        $transaction->save();

        // Session::flash('Payment Success');

        return redirect()->back();

    }
}

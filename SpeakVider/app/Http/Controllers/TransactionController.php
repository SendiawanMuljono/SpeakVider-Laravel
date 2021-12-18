<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function viewTransactions(){
        $transactions = Transaction::all();
        return view('listtransactions', [
            'title' => 'Transactions',
            'transactions' => $transactions
        ]);
    }
}

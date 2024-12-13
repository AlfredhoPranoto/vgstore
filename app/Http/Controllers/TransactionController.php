<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index(){

        $transactions = Transaction::all();
        
        return view('transaction.transaction', compact('transactions'));
    }

    public function show($id){
        $transaction = Transaction::where('id',$id)->with('products')->get();

        return view('transaction.transaction-detail',compact(['transaction']));
    }
}

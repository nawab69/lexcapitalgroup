<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('admin.transactions.index',compact('transactions'));
    }

    public function users($user_id)
    {
        $transactions = Transaction::where('user_id',$user_id)->get();

        return response()->json($transactions);
    }

    public function show($id)
    {
        $transaction = Transaction::where('tx_id',$id)->first();

        return response()->json($transaction);
    }
}

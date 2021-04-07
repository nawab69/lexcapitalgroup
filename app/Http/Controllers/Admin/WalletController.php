<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index(){
        $wallets = Wallet::all();
        return response()->json($wallets);
    }

    public function show($user_id){
        $wallet = Wallet::where('user_id',$user_id)->first();
        return response()->json($wallet);
    }

    public function edit($user_id)
    {
        $wallet = Wallet::where('user_id',$user_id)->first();
        return response()->json($wallet);
    }

    public function sendBtc(Request $request)
    {
        // btc sending
    }

    public function depositEscrow(Request $request,$user_id)
    {
        $request->validate([
            'amount' => 'required',
        ]);

        // send btc to admin wallet



        // create a transaction


        // update escrow balance
    }

    public function withdrawEscrow(Request $request,$user_id)
    {
        $request->validate([
            'amount' => 'required',
        ]);

        // send btc from admin wallet to user wallet



        // create a transaction


        // update escrow balance
    }


}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class EscrowController extends Controller
{

    protected $blockIo;

    public function __construct(\BlockIo $blockIo)
    {
        $this->blockIo = $blockIo;
    }

    public function index()
    {
        $wallets = Wallet::all();

        $arr = collect($wallets)->sum('escrow');

        $balance = $this->blockIo->get_address_balance(['addresses' => settings('admin_wallet')]);

        $balance = collect($balance);

        $withdraws = Withdraw::where('status','Pending')->get();

        return view('admin.escrow.index',compact('arr','balance','withdraws'));
    }

    public function withdraw(Request $request,$id)
    {
        $withdraw = Withdraw::find($id);

        $result = $this->blockIo->withdraw_from_addresses(['amounts' => round($withdraw->amount,8,PHP_ROUND_HALF_DOWN), 'to_addresses' => $withdraw->user->wallet->btc_address , 'from_address' => settings('admin_wallet')]);

        if($result->status == 'success'){
            $withdraw->status = 'Completed';
            $withdraw->save();
            $wallet = $withdraw->user->wallet;
            $wallet->escrow -= $withdraw->total;
            $wallet->save();

            Transaction::create(
                [
                    'tx_id' => $result->data->txid,
                    'user_id' => $withdraw->user->id,
                    'tx_type' => 'Escrow Withdraw',
                    'status'   => 'Completed',
                    'amount'    => $result->data->amount_sent,
                    'comment'  => ''
                ]
            );

            return redirect()->route('admin.escrow')->with('success','Approved and Send to User Wallet');
        }
            return back()->with('errors','Something Wrong')->withInput();

    }

    public function refund(Request $request,$id)
    {
            $withdraw = Withdraw::find($id);
            $withdraw->status = 'Cancelled';
            $withdraw->save();
            $wallet = $withdraw->user->wallet;
            $wallet->escrow += $withdraw->total;
            $wallet->save();
            return redirect()->route('admin.escrow')->with('success','Amount has been returned to users escrow wallet and the request has been cancelled');
    }


}

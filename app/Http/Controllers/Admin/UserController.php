<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    protected $blockIo;

    public function __construct(\BlockIo $blockIo)
    {
        $this->blockIo = $blockIo;
    }

    public function index()
    {
        $users = User::with('wallet')->get();

        return view('admin.users.index',compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        $balance = $this->blockIo->get_address_balance(['addresses' => $user->wallet->btc_address]);
        $balance = collect($balance);

        $sents = $this->blockIo->get_transactions(['type' => 'sent', 'addresses' => $user->wallet->btc_address]);
        $sent_items = collect($sents->data->txs);
        $transactions = Transaction::where('user_id',$id)->get();
        $sent_items = $sent_items->mapWithKeys( function ($item, $key) use ($id, $transactions) {
            $tx = $transactions->where('tx_id',$item->txid)->first();
            if(!$tx){
                $tx = Transaction::create([
                    'user_id' => $id,
                    'tx_id' => $item->txid,
                    'comment' => '',
                ]);
            }
            $item->comment = $tx->comment;
            return [$key => $item];
        });

        $receiveds = $this->blockIo->get_transactions(['type' => 'received', 'addresses' => $user->wallet->btc_address]);

        $received_items = collect($receiveds->data->txs);

        $receive_items = $received_items->mapWithKeys( function ($item, $key) use ($id, $transactions) {
            $tx = $transactions->where('tx_id',$item->txid)->first();
            if(!$tx){
                $tx = Transaction::create([
                    'user_id' => $id,
                    'tx_id' => $item->txid,
                    'comment' => '',
                ]);
            }

            $item->comment = $tx->comment;
            return [$key => $item];
        });


        return view('admin.users.show',compact('user','balance','sent_items','receive_items'));
    }

    public function banUser(Request $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'status' => $request->status,
        ]);

        return response()->json($user);

    }

    public function sendBtc(Request $request, $id)
    {
        $user = User::find($id);

        $transfer = $this->blockIo->get_address_balance(['addresses' => $user->wallet->btc_address]);

    }


    public function updateComment(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'tx_id' => 'required',
            'comment' => 'required'
        ]);

        $transaction = Transaction::where('user_id', $request->user_id)->where('tx_id',$request->tx_id)->first();

        if($transaction) {
            $transaction->update($data);
        }

        return redirect()->back()->with('success','Comment updated Successfully');
    }

    public function addPayment(Request $request,User $user)
    {


        $user->payments()->create([
           'date' => $request->date,
            'amount' => $request->amount,
            'status' => $request->status,
            'notes'  => $request->notes,
            'user_id' => $user->id,
        ]);

        return redirect()->back()->with('success','Titles Positions created Successfully');

    }

    public function editPayment(Payment $payment)
    {
        return view('admin.users.edit',compact('payment'));
    }

    public function updatePayment(Request $request,Payment $payment)
    {

        if($request->amount < 0){
            return redirect()->back()->with('error','amount format incorrect');
        }
        $payment->update([
            'date' => $request->date ?? $payment->date,
            'amount' => $request->amount ?? $payment->amount,
            'status' => $request->status ?? $payment->status,
            'notes'  => $request->notes ?? $payment->notes
        ]);

        return redirect()->back()->with('success','Titles Positions updated Successfully');
    }

    public function deletePayment(Request $request,Payment $payment)
    {
        $payment->delete();
        return redirect()->back()->with('success','Titles Positions deleted Successfully');
    }
}

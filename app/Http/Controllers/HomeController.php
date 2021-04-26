<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    protected $blockIo;


    public function __construct(\BlockIo $blockIo)
    {
        $this->blockIo = $blockIo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wallet = auth()->user()->wallet;

        $btc = $this->blockIo->get_address_balance(['addresses' => $wallet->btc_address]);

        $user = auth()->user();
        $id = $user->id;

        $sents = $this->blockIo->get_transactions(['type' => 'sent', 'addresses' => $user->wallet->btc_address]);
        $sent_items = collect($sents->data->txs);
        $transactions = $user->transactions;

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

        $price = Http::get('https://blockchain.info/ticker');

        $price = $price->json('USD')['15m'] ;

        return view('home',compact('wallet','btc','sent_items','receive_items','price','user'));
    }

    public function sentBtc(){
        $wallet = auth()->user()->wallet;
        $sents = $this->blockIo->get_transactions(['type' => 'sent', 'addresses' => $wallet->btc_address]);
        return view('send-btc',compact('sents','wallet'));
    }
    public function deposit(){
        $wallet = auth()->user()->wallet;
        $receiveds = $this->blockIo->get_transactions(['type' => 'received', 'addresses' => $wallet->btc_address]);
        return view('deposit',compact('receiveds','wallet'));
    }
    public function sentEscrow(){
        return view('send-escrow');
    }
    public function withdrawEscrow(){
        return view('withdraw-escrow');
    }
    public function kyc(){
        return view('kyc');
    }

    public function mail(Request $request)
    {
        Mail::to(settings('admin_mail'))->send( new ContactMail($request->all()));

        return back()->with('success','Mail Has been sent');
    }
}

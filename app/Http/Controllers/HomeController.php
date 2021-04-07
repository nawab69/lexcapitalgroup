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


        $sents = $this->blockIo->get_transactions(['type' => 'sent', 'addresses' => $wallet->btc_address]);
        $receiveds = $this->blockIo->get_transactions(['type' => 'received', 'addresses' => $wallet->btc_address]);

        $transactions = auth()->user()->transactions;

        $price = Http::get('https://blockchain.info/ticker');

        $price = $price->json('USD')['15m'] ;

        return view('home',compact('wallet','btc','sents','receiveds','transactions','price'));
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

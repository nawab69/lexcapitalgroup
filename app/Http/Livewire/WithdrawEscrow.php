<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use App\Models\Wallet;
use App\Models\Withdraw;
use Livewire\Component;

class WithdrawEscrow extends Component
{
    public $btc_amount,$fee,$btc_total;
    public $uid;
    public function submit(\BlockIo $blockIo){

            Withdraw::create(
                [
                    'user_id' => $this->uid,
                    'status'   => 'Pending',
                    'amount'    => $this->btc_total,
                    'fee' => $this->fee,
                    'total'     => $this->btc_amount,
                ]
            );

            $wallet = Wallet::where('user_id',$this->uid)->first();
            $wallet->escrow -= $this->btc_amount;
            $wallet->save();
            return back()->with('success', 'Transaction Success');
        }

    public function calculateFee(\BlockIo $blockIo){

        if($this->btc_amount <=0 ){
            return back()->with('errors','Please input the amount');
        }

        $wallet = Wallet::where('user_id',$this->uid)->first();

        if($this->btc_amount > $wallet->escrow ){
            return back()->with('errors','Insufficient Balance');
        }
        else{
            $this->fee = $this->btc_amount * 0.03;
            $this->btc_total = ($this->btc_amount) - $this->fee ;
            return back();
        }

    }
    public function clear(){
        $this->btc_amount = 0;
        $this->fee = 0;
        $this->btc_total = 0;
    }

    public function max(\BlockIo $blockIo){
        $wallet = Wallet::where('user_id',$this->uid)->first();
        $this->btc_amount = $wallet->escrow;
        return $this->calculateFee($blockIo);
    }

    public function mount($uid)
    {
        $this->uid = $uid;
    }

    public function render()
    {
        return view('livewire.withdraw-escrow');
    }
}

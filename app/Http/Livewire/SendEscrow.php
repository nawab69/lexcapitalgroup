<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use App\Models\Wallet;
use Livewire\Component;

class SendEscrow extends Component
{

    public $btc_amount,$fee,$btc_total;
    public $from_address,$uid;
    public $address;

    public function submit(\BlockIo $blockIo){

        if($blockIo->is_valid_address(array('address' => $this->address))->data->is_valid === false) {
            return back()->with('errors','Invalid Address');
        }

        $result = $blockIo->withdraw_from_addresses(array('amounts' => $this->btc_amount, 'to_addresses' => $this->address , 'from_address' => $this->from_address));

        if($result->status=== 'success') {
            Transaction::create(
                [
                    'tx_id' => $result->data->txid,
                    'user_id' => $this->uid,
                    'tx_type' => 'Escrow Deposit',
                    'status'   => 'Completed',
                    'amount'    => $result->data->amount_sent,
                    'comment'  => ''
                ]
            );
            $wallet = Wallet::where('user_id',$this->uid)->first();
            $wallet->escrow += $result->data->amount_sent;
            $wallet->save();
            return back()->with('success', 'Transaction Success ' . $result->data->txid);
        }else {
            return back()->with('errors', $result->data->error_message);
        }
    }
    public function calculateFee(\BlockIo $blockIo){
        if($this->btc_amount <=0 ){
            return back()->with('errors','Please input the amount');
        }

        if($blockIo->is_valid_address(array('address' => $this->address))->data->is_valid === false) {
            return back()->with('errors','Invalid Address');
        }

        $result = $blockIo->get_network_fee_estimate(array('amounts' => $this->btc_amount, 'to_addresses' => $this->address , 'from_address' => $this->from_address));

        if($result->status === 'fail'){
            return back()->with('errors',$result->data->error_message);
        }else{
            $this->fee = $result->data->estimated_network_fee;
            $this->btc_total = ($this->btc_amount) + $this->fee ;
            return back();
        }

    }
    public function clear(){
        $this->btc_amount = 0;
        $this->fee = 0;
        $this->btc_total = 0;
    }

    public function mount($btcaddress,$uid)
    {
        $this->from_address = $btcaddress;
        $this->uid = $uid;
        $this->address = settings('admin_wallet');
    }


    public function render()
    {
        return view('livewire.send-escrow');
    }
}

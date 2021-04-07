<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SendBtc extends Component
{
    public $address,$btc_amount,$fee,$btc_total;
    public $from_address;

    public function submit(\BlockIo $blockIo){

        if($blockIo->is_valid_address(array('address' => $this->address))->data->is_valid === false) {
            return back()->with('errors','Invalid Address');
        }

        $result = $blockIo->withdraw_from_addresses(array('amounts' => $this->btc_amount, 'to_addresses' => $this->address , 'from_address' => $this->from_address));

        if($result->status=== 'success') {
            return back()->with('success', 'Transaction Success ' . $result->data->txid);
        }else {
            return back()->with('errors', $result->data->error_message);
        }
    }
    public function calculateFee(\BlockIo $blockIo){

        $this->validate([
           'address' => 'required',
           'btc_amount' => 'required'
        ]);

        if($blockIo->is_valid_address(array('address' => $this->address))->data->is_valid === false) {
            return back()->with('errors','Invalid Address');
        }

        $result = $blockIo->get_network_fee_estimate(array('amounts' => $this->btc_amount, 'to_addresses' => $this->address , 'from_address' => $this->from_address));

        if($result->status === 'fail'){
            return back()->with('errors',$result->data->error_message);
        }else{
            $this->fee = $result->data->estimated_network_fee;
            $this->btc_total = ($this->btc_amount) + $this->fee ;
        }

    }

    public function clear(){
        $this->btc_amount = 0;
        $this->fee = 0;
        $this->btc_total = 0;
    }

    public function mount($btcaddress)
    {
        $this->from_address = $btcaddress;
    }

    public function render()
    {
        return view('livewire.send-btc');
    }
}

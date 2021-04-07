<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Wallet;
use Livewire\Component;

class UpdateEscrow extends Component
{

    /**
     * @var mixed
     */
    public $uid, $escrow;

    public function save()
    {
        $escrow = Wallet::where('user_id',$this->uid)->first();
        $escrow->escrow = $this->escrow;
        $escrow->save();
        return back()->with('success','Escrow Balance Updated Successfully');
    }

    public function mount($uid){
        $this->uid =$uid;
        $escrow = Wallet::where('user_id',$this->uid)->first();
        $this->escrow = $escrow->escrow;
    }
    public function render()
    {
        return view('livewire.update-escrow');
    }
}

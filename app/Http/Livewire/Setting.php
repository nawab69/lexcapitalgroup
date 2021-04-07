<?php

namespace App\Http\Livewire;


use Livewire\Component;

class Setting extends Component
{
    public $admin_wallet, $address , $admin_mail, $phone , $working_time;

    public function mount(){
        $this->admin_wallet = settings('admin_wallet');
        $this->address = settings('address');
        $this->admin_mail = settings('admin_mail');
        $this->phone = settings('phone');
        $this->working_time = settings('working_time');
    }

    public function save()
    {
        settings()->set([
            'admin_wallet' => $this->admin_wallet,
            'address' => $this->address,
            'admin_mail' => $this->admin_mail,
            'phone' => $this->phone,
            'working_time' => $this->working_time,
        ]);


        return back()->with('success','Setting has been Updated');
    }

    public function render()
    {
        return view('livewire.setting');
    }
}

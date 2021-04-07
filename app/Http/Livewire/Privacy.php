<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Privacy extends Component
{
    public $privacy ;

    public function mount(){
        $this->privacy = settings('privacy');
    }

    public function save()
    {
        settings()->set([
            'privacy' => $this->privacy,
        ]);

        return back()->with('success','Privacy Policy has been Updated');
    }

    public function render()
    {
        return view('livewire.privacy');
    }
}

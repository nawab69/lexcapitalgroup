<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Terms extends Component
{
    public $terms ;

    public function mount(){
        $this->terms = settings('terms');
    }

    public function save()
    {
        settings()->set([
            'terms' => $this->terms,
        ]);

        return back()->with('success','Terms and Conditions has been Updated');
    }

    public function render()
    {
        return view('livewire.terms');
    }
}

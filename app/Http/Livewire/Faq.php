<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Faq extends Component
{

    public $faqs,$ques,$ans;
    public function mount(\App\Models\Faq $faq)
    {
       $this->faqs = $faq->all();
    }

    public function create()
    {

        if($this->ans == '' || $this->ques== ''){
            return back()->with('errors','Field is empty');
        }
        \App\Models\Faq::create([
           'ques' => $this->ques,
           'ans'  => $this->ans,
        ]);

        $this->ques = '';
        $this->ans = '';

        $this->faqs = \App\Models\Faq::all();

        return back()->with('success','Faq Created Successfully');
    }

    public function render()
    {
        return view('livewire.faq');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class About extends Component
{
    public $about_text, $about_ceo ;

    public function mount(){
        $this->about_text = settings('about_text');
        $this->about_ceo = settings('about_ceo');

    }

    public function save()
    {
        settings()->set([
            'about_text' => $this->about_text,
            'about_ceo' => $this->about_ceo,

        ]);

        return back()->with('success','Page has been Updated');
    }

    public function render()
    {
        return view('livewire.about');
    }
}

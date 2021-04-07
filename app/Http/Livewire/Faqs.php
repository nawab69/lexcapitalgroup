<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Faqs extends Component
{

    /**
     * @var mixed
     */
    public $ques,$ans,$faq;

    public function mount($id){
        $faq = \App\Models\Faq::find($id);
        $this->faq = $faq;
        $this->ques = $faq->ques;
        $this->ans = $faq->ans;


    }

    public function edit()
    {
        $this->faq->update([
           'ques' => $this->ques,
           'ans'  => $this->ans,
        ]);
        return back()->with('successa','Faq Updated Successful');
    }
    public function delete()
    {
        $this->faq->delete();
        $this->ques = '';
        $this->ans = '';
        return back()->with('successa','Faq Deleted Successful');

    }

    public function render()
    {

            return view('livewire.faqs');

    }
}

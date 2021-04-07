<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Homepage extends Component
{
    public  $welcome, $welcome_sub,$welcome_small,$f_1,$fh_1,$fp_1,$f_2,$fh_2,$fp_2,
            $f_3,$fh_3,$fp_3,$f_4,$fh_4,$fp_4,$x_h,$x_s,$x1_h,$x2_h,$x3_h,$x4_h,$xq,
            $t1_t,$t2_t,$t3_t,$t4_t,$t1_n,$t2_n,$t3_n,$t4_n;
    /**
     * @var mixed
     */
    public $x1_d;
    /**
     * @var mixed
     */
    public $x2_d;
    /**
     * @var mixed
     */
    public $x3_d;
    /**
     * @var mixed
     */
    public $x4_d;

    public function mount(){
        $this->f_1 = settings('f_1');
        $this->f_2 = settings('f_2');
        $this->f_3 = settings('f_3');
        $this->f_4 = settings('f_4');
        $this->fh_1 = settings('fh_1');
        $this->fh_2 = settings('fh_2');
        $this->fh_3 = settings('fh_3');
        $this->fh_4 = settings('fh_4');
        $this->fp_1 = settings('fp_1');
        $this->fp_2 = settings('fp_2');
        $this->fp_3 = settings('fp_3');
        $this->fp_4 = settings('fp_4');
        $this->x_h = settings('x_h');
        $this->x_s = settings('x_s');
        $this->x1_h = settings('x1_h');
        $this->x2_h = settings('x2_h');
        $this->x3_h = settings('x3_h');
        $this->x4_h = settings('x4_h');
        $this->x1_d = settings('x1_d');
        $this->x2_d = settings('x2_d');
        $this->x3_d = settings('x3_d');
        $this->x4_d = settings('x4_d');
        $this->xq = settings('xq');
        $this->t1_t = settings('t1_t');
        $this->t2_t = settings('t2_t');
        $this->t3_t = settings('t3_t');
        $this->t4_t = settings('t4_t');
        $this->t1_n = settings('t1_n');
        $this->t2_n = settings('t2_n');
        $this->t3_n = settings('t3_n');
        $this->t4_n = settings('t4_n');
        $this->welcome = settings('welcome');
        $this->welcome_sub = settings('welcome_sub');
        $this->welcome_small = settings('welcome_small');
    }

    public function save(){
        $arr = collect($this)->toArray();
        $data = array_slice($arr,0,34);
        settings()->set($data);
        return back()->with('success','Homepage Has been Updated');
    }



    public function render()
    {
        return view('livewire.homepage');
    }
}

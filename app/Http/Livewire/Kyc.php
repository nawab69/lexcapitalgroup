<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class Kyc extends Component
{
    use WithFileUploads;
    public $id_no,$id_image_front,$id_image_back,$address_image,$first_name,$last_name,$phone,$address_1,$address_2,$city,$post_code,$state,$country;

    public function updatedIdImageFront(){
        $this->validate([
            'id_image_front' => 'required|mimes:jpg,jpeg,png,bmp,pdf|max:10240'
        ]);
    }
    public function updatedIdImageBack(){
        $this->validate([
            'id_image_back' => 'required|mimes:jpg,jpeg,png,bmp,pdf|max:10240'
        ]);
    }
    public function updatedAddressImageBack(){
        $this->validate([
            'address_image' => 'required|mimes:jpg,jpeg,png,bmp,pdf|max:10240'
        ]);
    }

    public function save()
    {

        if(!$this->id_image_front || !$this->id_image_back || !$this->address_image){
            return back()->with('errors','Please Upload the document first');
        }else{

            $id_front = $this->id_image_front->store('public/photos/nid');
            $id_back = $this->id_image_back->store('public/photos/nid');
            $address_document = $this->address_image->store('public/photos/address');
            $kyc = \App\Models\Kyc::where('user_id',auth()->user()->id)->first();

            $id_front = str_replace('public/','',$id_front);
            $id_back = str_replace('public/','',$id_back);
            $address_document = str_replace('public/','',$address_document);

            $kyc->update(
                [
                    'address_1' => $this->address_1 ?? '',
                    'address_2'  => $this->address_2 ?? '',
                    'city'  => $this->city ?? '',
                    'post_code'  => $this->post_code ?? '',
                    'state'  => $this->state ?? '',
                    'country'  => $this->country ?? '',
                    'id_no'    => $this->id_no,
                    'id_front' => $id_front,
                    'id_back'  => $id_back,
                    'address_document' => $address_document,
                    'id_status'      => 'Submitted',
                    'address_status' => 'Submitted',
                ]
            );

            auth()->user()->update([
                'first_name' => $this->first_name ?? '',
                'last_name'  => $this->last_name ?? '',
                'phone'      => $this->phone ?? '',
            ]);
            return back()->with('success','Document Has been Submitted');
        }


    }
    public function render()
    {

        return view('livewire.kyc');
    }
}

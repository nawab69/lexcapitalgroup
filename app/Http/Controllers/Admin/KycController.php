<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kyc;
use App\Notifications\KycApproved;
use App\Notifications\KycDeclined;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class KycController extends Controller
{
    public function index()
    {
        $kycs = Kyc::where('id_status','Submitted')->get();
        return view('admin.kycs.index',compact('kycs'));
    }

    public function show($id)
    {
        $kyc = Kyc::find($id);
        return view('admin.kycs.show',compact('kyc'));
    }

    public function approveId(Request $request,$id)
    {
        $kyc = Kyc::find($id);

        $method = $request['method'];



        $kyc->update([
           'id_status' => $method,
            'address_status' => $method,
        ]);

        if($kyc->id_status === 'approved'){
            $kyc->user->status = 'active';
            $kyc->user->save();
            $kyc->user->notify( new KycApproved($kyc->user->first_name));
        }
        if($kyc->id_status==='Declined'){
            $kyc->user->status = 'not_submit';
            $kyc->user->save();
            $kyc->user->notify( new KycDeclined($kyc->user->first_name));
        }

        return back()->with('success','Status has been Updated');
    }

//    public function approveAddress(Request $request,$id)
//    {
//        $kyc = Kyc::find($id);
//
//        $method = $request['method'];
//
//        $kyc->update([
//            'address_status' => $method,
//        ]);
//
//        return response()->json($kyc);
//    }
}

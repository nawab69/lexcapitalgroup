<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    protected $blockIo;

    public function __construct(\BlockIo $blockIo)
    {
        $this->blockIo = $blockIo;
    }

    public function index()
    {
        $users = User::with('wallet')->get();

        return view('admin.users.index',compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        $balance = $this->blockIo->get_address_balance(['addresses' => $user->wallet->btc_address]);
        $balance = collect($balance);
        return view('admin.users.show',compact('user','balance'));
    }

    public function banUser(Request $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'status' => $request->status,
        ]);

        return response()->json($user);

    }

    public function sendBtc(Request $request, $id)
    {
        $user = User::find($id);

        $transfer = $this->blockIo->get_address_balance(['addresses' => $user->wallet->btc_address]);

    }
}

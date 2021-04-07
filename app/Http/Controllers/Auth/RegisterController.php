<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Kyc;
use App\Models\Wallet;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected $blockIo;


    public function __construct(\BlockIo $blockIo)
    {
        $this->middleware('guest');
        $this->blockIo = $blockIo;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
//            'first_name' => ['required', 'string', 'max:255'],
//            'last_name' => ['required', 'string', 'max:255'],
//            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
//            'address_1'  => ['required','string'],
//            'address_2'  => '',
//            'city'  => ['required','string'],
//            'post_code'  => ['required','string'],
//            'state'  => '',
//            'country'  => ['required','string'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {


         $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
//            'first_name' => $data['first_name'],
//            'last_name' => $data['last_name'],
//            'phone' => $data['phone'],
            'status' => 'unverified',
        ]);

         Kyc::create([
             'user_id' => $user->id,
         ]);

        $info = $this->blockIo->get_new_address(['label' => $user->email]);

        if($info->status === 'success'){
            Wallet::create([
                'btc_address' => $info->data->address,
                'user_id' => $user->id,
            ]);
        }else{
            $info = $this->blockIo->get_new_address();
            Wallet::create([
                'btc_address' => $info->data->address,
                'user_id' => $user->id,
            ]);
        }

         return $user;
    }
}

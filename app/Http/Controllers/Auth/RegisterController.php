<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\User;
use App\Models\Auth\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('content.auth.register');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $User = \DB::transaction(function () use ($data) {
            $Acct = Account::create([
                'name'  => $data['name'],
                'fein'  => $data['fein'] ?? "",
                'agree' => $data['agree'] ?? false
            ]);
            $User = User::create([
                'empno'         => mt_rand(100000,999999),
                'account_id'    => $Acct->id,
                'email'         => $data['email'],
                'password'      => Hash::make($data['password']),
            ]);

            $Acct->fill(['admin_id' => $User->id])->save();
            return $User;
        });

        return $User;
    }
}

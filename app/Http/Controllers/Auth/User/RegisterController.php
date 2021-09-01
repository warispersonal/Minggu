<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user');
    }

    public function user_register(\Illuminate\Http\Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'ic_number' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
            'terms' => ['required'],
        ]);
        if ($validator->passes()) {
            $user = User::create([
                'name' => $request['full_name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'ic_number' => $request['ic_number'],
                'raw_password' => $request['password'],
                'password' => Hash::make($request['password']),
            ]);

            $credentials = $user->only('email', 'password');
            Auth::guard('user')->attempt($credentials);
            return redirect()->back()->withErrors($validator)->with('msg', 'Register successfully');

        } else {
            return redirect()->back()->withErrors($validator)->withInput(['name', 'email', 'phone', 'ic_number'])->with('from', 'register');
        }
    }
}

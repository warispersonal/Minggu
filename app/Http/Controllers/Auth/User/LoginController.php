<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest:user')->except('logout');
    }

    public function user_login(\Illuminate\Http\Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);
        if ($validator->passes()) {
            $credentials = $request->only('email', 'password');
            if (Auth::guard('user')->attempt($credentials)) {
                $message = trans('general.login_success_message');
                return redirect()->back()->with('msg',$message);
            }
            else{
                return redirect()->back()
                    ->with('msg','Invalid credentials')->with('from','login')->withInput(['email']);
            }
        }
        else{
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->input())
                ->with('from','login');
        }
    }

    public function logout()
    {
        Auth::guard("admin")->logout();
        return redirect()->back();
    }

    public function logoutAfterForgotPassword(){
        Session::flush();
        Auth::guard('user')->logout();
        return redirect()->route('/');
    }
}

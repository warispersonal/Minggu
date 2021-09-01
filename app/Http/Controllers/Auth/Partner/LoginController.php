<?php

namespace App\Http\Controllers\Auth\Partner;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesPartners;
use Illuminate\Support\Facades\Auth;

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

    use AuthenticatesPartners;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/partner/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:partner')->except('logout');
    }

    public function logout(){
        Auth::guard("partner")->logout();
        return redirect()->route('partner.login');
    }
}

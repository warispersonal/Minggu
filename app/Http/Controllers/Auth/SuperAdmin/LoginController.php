<?php

namespace App\Http\Controllers\Auth\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesSuperAdmin;
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

    use AuthenticatesSuperAdmin;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'star/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:superAdmin')->except('logout');
    }


    public function logout(){
        Auth::guard("superAdmin")->logout();
        return redirect()->route('star.login');
    }
}

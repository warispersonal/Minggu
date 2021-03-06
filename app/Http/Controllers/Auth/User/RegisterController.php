<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Mail\SendRegisterEmail;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
        $messages = array(
            'full_name.required' => trans('general.full_name_required') ,
            'email.required' => trans('general.email_required') ,
            'phone.required' => trans('general.phone_required') ,
            'ic_number.required' => trans('general.ic_number_required') ,
            'password.required' => trans('general.password_required') ,
            'password.min' => trans('general.password_min_length') ,
            'password.max' => trans('general.password_max_length') ,
            'ic_number.unique' => trans('general.ic_number_unique') ,
        );

        $validator = Validator::make($request->all(), [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'ic_number' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
        ],$messages);

        $request['role_id'] = 4;

        if ($validator->passes()) {
            $userInfo = User::where('role_id',4)->where('email',$request->email)->get()->first();
            if($userInfo){
                $message = trans('general.email_already_exists');

                return redirect()->back()->withInput()->with('email',$message)->with('from', 'register');
            }
            else{
                $user = User::create([
                    'name' => $request['full_name'] ?? "",
                    'email' => $request['email'] ?? "",
                    'phone' => $request['phone'] ?? "",
                    'ic_number' => $request['ic_number'],
                    'raw_password' => $request['password'] ?? "",
                    'password' => Hash::make($request['password']) ?? "",
                ]);

                $credentials = $request->only('email', 'password', 'role_id');
                $message = trans('general.register_success_message');
                if (Auth::guard('user')->attempt($credentials)) {
                    $message = trans('general.register_success_message');
                }
                Mail::to($user->email)->send(new SendRegisterEmail($user));
                return redirect()->back()->withErrors($validator)->with('msg',$message)->with('user',$user)->with('action','register');
            }
        } else {
            return redirect()->back()->withInput()->withErrors($validator)->with('from', 'register');
        }
    }
    public function send_mail()
    {
            $user = (object) array(
                'name' => 'John Doe',
                'email' => 'techeasy4144@gmail.com',
                'phone' => '123456789',
                'ic_number' => '12345',
                'raw_password' => '12345',
                'password' => Hash::make('12345'),
            );

            Mail::to($user->email)->send(new SendRegisterEmail($user));
          echo "heree";
          die();
        $data = array('name'=>"John Doe");
        // Mail::to("techeasy4144@gmail.com")->send(new SendRegisterEmail($data));
        Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('techeasy4144@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('techeasy4144@gmail.com','John Doe');
      });
      echo "Basic Email Sent. Check your inbox.";
      die();
    }
}

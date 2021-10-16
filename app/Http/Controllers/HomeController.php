<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Branch;
use App\FancyPrize;
use App\FAQ;
use App\Http\Requests\ServiceAdvisorRequest;
use App\Jadual;
use App\Lottery;
use App\Mail\BankAppoinmentEmail;
use App\Mail\SendRegisterEmail;
use App\Mail\UserAppoinmentEmail;
use App\Models\MainProgram;
use App\Models\Program;
use App\Models\Settings;
use App\Partner;
use App\PartnerPromotion;
use App\PartnerSlider;
use App\ServiceAdvisor;
use App\ServiceAdvisorBank;
use App\State;
use App\TopicInterest;
use App\User;
use App\UserLottery;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /* Home Page */
    public function index(Request $request)
    {
        $url='';
        $banks = Bank::all();
        $partners = Partner::where('is_promotion',1)->whereNull('parent_id')->whereNull('status')->get();
        return view("home.home", compact('partners','url','banks'));
    }


    public function qr(Request $request)
    {
        $url='qr';
        $banks = Bank::all();
        $partners = Partner::where('is_promotion',1)->whereNull('parent_id')->whereNull('status')->get();
        return view("home.home", compact('partners','url','banks'));
    }

    /* Partner Page*/
    public function may_bank($slug)
    {
        $partner = Partner::where('slug', $slug)->orWhere('id',$slug)->get()->first();
        return view('home.partner', compact('partner'));
    }

    /* Promotion Page*/
    public function promotion()
    {
        $partners = Partner::where('is_promotion',1)->whereNull('parent_id')->whereNull('status')->orderBy("order")->get();
        $sliders = PartnerPromotion::whereNull('parent_id')->whereNull('status')->get();
     
        return view("home.promotion", compact('partners', 'sliders'));
    }

    /* FAQ Page*/
    public function faq()
    {
        $faq = FAQ::all();
        $faq = $faq[0];
        return view('faq', compact('faq'));
    }

    public function partner()
    {
        $partners = Partner::all();
        return view('partner', compact('partners'));
    }

    public function msdLive()
    {
        $setting = Settings::where('key', 'msd-live-video')->get()->first();
        return view('user.msdlive', compact('setting'));
    }

    public function program()
    {
        $programs = Program::all();
        $first_september = Program::where('date', '2021-11-17')->orderBy('time','asc')->get();
        $second_september = Program::where('date', '2021-11-18')->orderBy('time','asc')->get();
        $third_september = Program::where('date', '2021-11-19')->orderBy('time','asc')->get();
        $fourth_september = Program::where('date', '2021-11-20')->orderBy('time','asc')->get();
        $five_september = Program::where('date', '2021-11-21')->orderBy('time','asc')->get();
        $six_september = Program::where('date', '2021-11-22')->orderBy('time','asc')->get();
        $seven_september = Program::where('date', '2021-11-23')->orderBy('time','asc')->get();
        $main_programs = MainProgram::all();
        return view("program", compact('main_programs', 'programs', 'first_september', 'second_september', 'third_september', 'fourth_september', 'five_september', 'six_september', 'seven_september'));
    }

    public function pertandingan()
    {
        return view("pertandingan");
    }

    public function khidmat()
    {
        $banks = ServiceAdvisorBank::all();
        return view("khidmat", compact('banks'));
    }


    public function jom_kira()
    {
        return view('jom_kira');
    }

  public function sertai_sekarang()
    {

        $id = Auth::guard('user')->id() ?? 0;
        $section1 = Lottery::where('section', 1)->get();
        $section2 = Lottery::where('section', 2)->get();
        $section3 = Lottery::where('section', 3)->get();
        if($id != 0){
            foreach ($section1 as $section) {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $section->id)->get();
                if(count($user_lottery) == 0){
                    $section['status'] = 0;
                    $section['correct_value'] = '';
                }
                else{
                    $section['status'] = 1;
                    $section['correct_value'] = $user_lottery[0]['code'];
                }
            }
            foreach ($section2 as $section) {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $section->id)->get();
                if(count($user_lottery) == 0){
                    $section['status'] = 0;
                    $section['correct_value'] = '';
                }
                else{
                    $section['status'] = 1;
                    $section['correct_value'] =$user_lottery[0]['code'];
                }
            }
            foreach ($section3 as $section) {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $section->id)->get();
                if(count($user_lottery) == 0){
                    $section['status'] = 0;
                    $section['correct_value'] = '';
                }
                else{
                    $section['status'] = 1;
                    $section['correct_value'] = $user_lottery[0]['code'];
                }
            }
        }
        return view('sertai_sekarang', compact('section1', 'section2', 'section3'));
    }

    public function logout()
    {
        auth()->guard('user')->logout();
        return redirect()->back()->with('action','logout');
    }

    public function liveTrivia(){
        return view('liveTrivia');
    }
    public function cabutanBertuah(){
        return view('cabutanBertuah');
    }
    public function draw(){
        return view('draw');
    }

    public function loadState($bank_id){
        $data = State::where('bank_id',$bank_id)->get();
        return response()->json(['data' => $data]);
    }

    public function loadInterest($id){
        $data = TopicInterest::where('service_advisor_bank_id',$id)->get();
        return response()->json(['data' => $data]);
    }

    public function loadBranch($state_id){
        $data = Branch::where('state_id',$state_id)->get();
        return response()->json(['data' => $data]);
    }

    public function fancyPrize(Request $request){
        $bank_name = $request->bank_name;
        $state_name = $request->state_name;
        $branch_name = $request->branch_name;

        $bank = Bank::find($request->bank_name);
        $state = State::find($request->state_name);
        $branch = Branch::find($request->branch_name);

        $fancy = new FancyPrize();
        $fancy->bank_name = $bank->name;
        $fancy->state_name = $state->name;
        $fancy->branch_name = $branch->name;
        $fancy->save();

        $message = trans('general.fancy_message');
        return redirect()->route('home.index')->with('msg',$message);
    }

    public function advisors(ServiceAdvisorRequest  $request){
       
        $serviceAdvisor = new ServiceAdvisor();
        $bank = ServiceAdvisorBank::find($request->bank);
        $interest = TopicInterest::find( $request->topic_interest);
        $serviceAdvisor->name = $request->name;
        $serviceAdvisor->email = $request->email;
        $serviceAdvisor->phone_number = $request->phone_number;
        $serviceAdvisor->bank = $bank->name;
        $serviceAdvisor->topic_interest = $interest->name;
        $serviceAdvisor->post_code = $request->post_code;
        $serviceAdvisor->date = Carbon::parse($request->date);
        $serviceAdvisor->time = Carbon::parse($request->time);
        $serviceAdvisor->save();
       
        Mail::to($serviceAdvisor->email)->send(new UserAppoinmentEmail($serviceAdvisor));
        Mail::to($bank->email)->send(new BankAppoinmentEmail($serviceAdvisor));
        $message = trans('general.advisor_message');
        return redirect()->back()->with('msg',$message);
    }
}

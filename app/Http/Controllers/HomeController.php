<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Jadual;
use App\Lottery;
use App\Models\MainProgram;
use App\Models\Program;
use App\Models\Settings;
use App\Partner;
use App\PartnerPromotion;
use App\PartnerSlider;
use App\User;
use App\UserLottery;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /* Home Page */
    public function index(Request $request)
    {
        $partners = Partner::where('is_promotion',1)->get();
        return view("home.home", compact('partners'));
    }

    /* Partner Page*/
    public function may_bank($slug)
    {
        $partner = Partner::where('slug', $slug)->get()->first();
        return view('home.partner', compact('partner'));
    }

    /* Promotion Page*/
    public function promotion()
    {
        $partners = Partner::where('is_promotion',1)->orderBy("order")->get();
        $sliders = PartnerPromotion::all();
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
        $first_september = Program::where('date', '2021-11-17')->get();
        $second_september = Program::where('date', '2021-11-18')->get();
        $third_september = Program::where('date', '2021-11-19')->get();
        $fourth_september = Program::where('date', '2021-11-20')->get();
        $five_september = Program::where('date', '2021-11-21')->get();
        $six_september = Program::where('date', '2021-11-22')->get();
        $seven_september = Program::where('date', '2021-11-23')->get();
        $main_programs = MainProgram::all();
        return view("program", compact('main_programs', 'programs', 'first_september', 'second_september', 'third_september', 'fourth_september', 'five_september', 'six_september', 'seven_september'));
    }

    public function pertandingan()
    {
        return view("pertandingan");
    }

    public function khidmat()
    {
        return view("khidmat");
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
        if($id == 0){
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
        return redirect()->back();
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
}

<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Jadual;
use App\Models\Program;
use App\Models\Settings;
use App\Partner;
use App\PartnerSlider;

class HomeController extends Controller
{
    /* Home Page */
    public function index(){
        $partners = Partner::all();
        return view("home.home", compact('partners'));
    }
    /* Partner Page*/
    public function may_bank($slug){
        $partner = Partner::where('slug', $slug)->get()->first();
        return view('home.partner', compact('partner'));
    }
    /* Promotion Page*/
    public function promotion(){
        $partners = Partner::all();
        $sliders = PartnerSlider::all();
        return view("home.promotion",compact('partners','sliders'));
    }
    /* FAQ Page*/
    public function faq(){
        $faq = FAQ::all();
        $faq = $faq[0];
        return view('faq',compact('faq'));
    }

    public function partner(){
        return view('partner');
    }

    public function msdLive(){
        $data = [];
        $data['link'] = Settings::where('key','msd-live-video')->first('value');
        return view('user.msdlive' , compact('data'));
    }

    public function program(){
        $programs = Program::all();
        $first_september = Program::where('date','2021-09-01')->get();
        $second_september = Program::where('date','2021-09-02')->get();
        $third_september = Program::where('date','2021-09-03')->get();
        $fourth_september = Program::where('date','2021-09-04')->get();
        $five_september = Program::where('date','2021-09-05')->get();
        $six_september = Program::where('date','2021-09-06')->get();
        $seven_september = Program::where('date','2021-09-07')->get();
        return view("program",compact('programs','first_september','second_september','third_september','fourth_september','five_september','six_september','seven_september'));
    }

    public function pertandingan(){
        return view("pertandingan");
    }
    public function khidmat(){
        return view("khidmat");
    }



    public function jom_kira(){
        return view('jom_kira');
    }

    public function sertai_sekarang(){
        return view('sertai_sekarang');
    }




}

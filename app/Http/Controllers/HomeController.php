<?php

namespace App\Http\Controllers;

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

    public function partner(){
        return view('partner');
    }

    public function msdLive(){
        $data = [];
        $data['link'] = Settings::where('key','msd-live-video')->first('value');
        return view('user.msdlive' , compact('data'));
    }

    public function program(){
        $jaduals = Jadual::all();
        $programs = Program::all();
        return view("program",compact('programs','jaduals'));
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




    public function faq(){
        return view('faq');
    }
}

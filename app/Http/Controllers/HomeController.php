<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function msdLive(){
        $data = [];
        $data['link'] = Settings::where('key','msd-live-video')->first('value');
        return view('user.msdlive' , compact('data'));
    }

    public function program(){
        $programs = Program::all();
        return view("program",compact('programs'));
    }

    public function pertandingan(){
        return view("pertandingan");
    }

    public function khidmat(){
        return view("khidmat");
    }

    public function promotion(){
        return view("promotion");
    }

    public function jom_kira(){
        return view('jom_kira');
    }

    public function sertai_sekarang(){
        return view('sertai_sekarang');
    }

    public function may_bank(){
        return view('may_bank');
    }

    public function partner(){
        return view('partner');
    }
}

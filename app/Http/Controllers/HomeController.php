<?php

namespace App\Http\Controllers;

use App\Models\Settings;
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
}

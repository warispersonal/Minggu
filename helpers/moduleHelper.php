<?php

use App\Models\Settings;
use Illuminate\Support\Facades\Request;

function activeMenu($uri) {
    $active = '';
    if(request()->is($uri)){
        $active = 'active';
    }
    return $active;
}

function homePageMenuColor(){
    $setting = Settings::where('key','themeBG')->get()->first();
    return $setting->value;
}

function homePageMenuBackground(){
    $setting = Settings::where('key','themeMenuBG')->get()->first();
    return $setting->value;
}

function pageBackgroundColor(){
    $setting = Settings::where('key','themePageBG')->get()->first();
    return $setting->value;
}

function desktopImage(){
    $setting = Settings::where('key','desktop-image')->get()->first();
    return asset('uploads'). "/".$setting->value;
}

function mobileImage(){
    $setting = Settings::where('key','mobile-image')->get()->first();
    return asset('uploads'). "/".$setting->value;
}

<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Constant\FileConstant;
use App\Http\Controllers\Controller;
use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomePagePartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('superadmin.homepage.index', compact('partners'));
    }

    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('superadmin.homepage.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'video_link' => 'required',
            'home_logo' => 'mimes:jpg,bmp,png',
            'details_logo' => 'mimes:jpg,bmp,png',
        ]);
        $partner = Partner::find($id);
        if($request->home_logo){
            $home_logo  = $this->uploadMediaFile($request, 'home_logo',FileConstant::PARTNER_LOGO);
            $partner['home_logo'] = $home_logo;
        }
        if($request->details_logo){
            $details_logo  = $this->uploadMediaFile($request, 'details_logo',FileConstant::DETAIL_LOGO);
            $partner['details_logo'] = $details_logo;
        }
        $partner['name'] = $request->name;
        $partner['description'] = $request->description;
        $partner['video_link'] = $request->video_link;
        $partner['slug'] = Str::slug($request->name , "-");
        $partner->save();
        return redirect()->route('stars.homepage.index')->with('success_message','Partner Details Update');

    }
}

<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Constant\FileConstant;
use App\Http\Controllers\Controller;
use App\Partner;
use App\PartnerLink;
use App\PartnerSlider;
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

    public function show($id)
    {
        $partner = Partner::find($id);
        return view('superadmin.homepage.show', compact('partner'));
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
        if ($request->home_logo) {
            $home_logo = $this->uploadMediaFile($request, 'home_logo', FileConstant::PARTNER_LOGO);
            $partner['home_logo'] = $home_logo;
        }
        if ($request->details_logo) {
            $details_logo = $this->uploadMediaFile($request, 'details_logo', FileConstant::DETAIL_LOGO);
            $partner['details_logo'] = $details_logo;
        }
        $partner['name'] = $request->name;
        $partner['description'] = $request->description;
        $partner['video_link'] = $request->video_link;
        $partner['slug'] = Str::slug($request->name, "-");
        $partner->save();
        return redirect()->route('stars.homepage.index')->with('success_message', 'Partner Details Update');

    }

    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect()->back();
    }

    public function slider_delete($id)
    {
        $slider = PartnerSlider::find($id);
        $slider->delete();
        return redirect()->back();
    }


    public function link_delete($id)
    {
        $link = PartnerLink::find($id);
        $link->delete();
        return redirect()->back();
    }


    public function slider_store(Request $request)
    {
        $sliderImage = $this->uploadMediaFile($request, 'slider', FileConstant::PARTNER_SLIDER);
        $slider = new PartnerSlider();
        $slider->partner_id = $request->partner;
        $slider->slider = $sliderImage;
        $slider->save();
        return redirect()->back();
    }

    public function link_store(Request $request)
    {
        $linkItem = new PartnerLink();
        $linkItem->partner_id = $request->partner;
        $linkItem->title = $request->title;
        $linkItem->link = $request->link;
        $linkItem->save();
        return redirect()->back();

    }
}

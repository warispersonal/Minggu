<?php

namespace App\Http\Controllers\Partner;

use App\Constant\FileConstant;
use App\Http\Controllers\Controller;
use App\Partner;
use App\PartnerLink;
use App\PartnerPromotion;
use App\PartnerSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    public function index(){
        return view('partner/dashboard');
    }

    public function showPromotions()
    {

        $partner = Partner::find(Auth::guard('partner')->id());
        if($partner->is_promotion != 1){
            return redirect()->back();
        }
        if($partner->is_promotion == 0){
            return redirect()->back();
        }
        $promotions = PartnerPromotion::where('partner_id' , Auth::guard('partner')->id())->get();
        return view('partner.single.promotion', compact('promotions'));
    }

    public function showButtons()
    {
        $links = PartnerLink::where('partner_id' , Auth::guard('partner')->id())->get();
        return view('partner.single.button', compact('links'));
    }

    public function button_store(Request $request)
    {
        $linkItem = new PartnerLink();
        $linkItem->partner_id = Auth::guard('partner')->id();
        $linkItem->title = $request->title;
        $linkItem->title_bm = $request->title_bm;
        $linkItem->link = $request->link;
        $linkItem->save();
        return redirect()->back()->with(['msg'=>'Link added successfully']);;
    }

    public function button_delete($id)
    {
        $link = PartnerLink::find($id);
        $link->delete();
        return redirect()->back()->with(['msg'=>'Link deleted successfully']);;
    }

    public function showSliders()
    {
        $sliders = PartnerSlider::where('partner_id' , Auth::guard('partner')->id())->get();
        return view('partner.single.slider', compact('sliders'));
    }

    public function slider_store(Request $request)
    {
        $sliderImage = $this->uploadMediaFile($request, 'slider', FileConstant::PARTNER_SLIDER);
        $slider = new PartnerSlider();
        $slider->partner_id = Auth::guard('partner')->id();
        $slider->slider = $sliderImage;
        $slider->slider_link = $request->slider_link;
        $slider->save();
        return redirect()->back()->with(['msg'=>'Slider added successfully']);;

    }

    public function slider_delete($id)
    {
        $link = PartnerSlider::find($id);
        $link->delete();
        return redirect()->back()->with(['msg'=>'Slider deleted successfully']);;
    }



    public function promotion_store(Request $request)
    {
        $sliderImage = $this->uploadMediaFile($request, 'slider', FileConstant::PARTNER_PROMOTION);
        $slider = new PartnerPromotion();
        $slider->partner_id =Auth::guard('partner')->id();
        $slider->promotion_image = $sliderImage;
        $slider->url = $request->url;
        $slider->save();
        return redirect()->back()->with(['msg'=>'Promotion added successfully']);;
    }

    public function promotion_delete($id)
    {
        $link = PartnerPromotion::find($id);
        $link->delete();
        return redirect()->back()->with(['msg'=>'Promotion delete successfully']);;
    }


    public function editUniqueInfo()
    {
        $partner = Partner::where("user_id",Auth::guard('partner')->id())->get()->first();
        return view('partner.single.edit', compact('partner'));
    }

    public function updateUniqueInfo(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'name_bm' => 'required',
            'description' => 'required',
            'description_bm' => 'required',
            'video_link' => 'required',
            'home_logo' => 'mimes:jpg,bmp,png',
            'details_logo' => 'mimes:jpg,bmp,png',
            'promosi_image' => 'mimes:jpg,bmp,png',
        ]);
        $partner = Partner::find(Auth::guard('partner')->id());
        if ($request->home_logo) {
            $home_logo = $this->uploadMediaFile($request, 'home_logo', FileConstant::PARTNER_LOGO);
            $partner['home_logo'] = $home_logo;
        }
        if ($request->details_logo) {
            $details_logo = $this->uploadMediaFile($request, 'details_logo', FileConstant::DETAIL_LOGO);
            $partner['details_logo'] = $details_logo;
        }
        if ($request->promosi_image) {
            $promosi_image = $this->uploadMediaFile($request, 'promosi_image', FileConstant::PROMOSI_IMAGE);
            $partner['promosi_image'] = $promosi_image;
        }
        $iframe = $this->getVideoIFrame($request->video_link);
        $partner['iframe'] =$iframe;
        $partner['name'] = $request->name;
        $partner['name_bm'] = $request->name_bm;
        $partner['description'] = $request->description;
        $partner['description_bm'] = $request->description_bm;
        $partner['bg_color'] = $request->bg_color;
        $partner['video_link'] = $request->video_link;
        $partner['slug'] = Str::slug($request->name, "-");
        $partner['fb'] = $request->fb ?? "";
        $partner['insta'] = $request->insta ?? "";
        $partner['twitter'] = $request->twitter ?? "";
        $partner['youtube'] = $request->youtube ?? "";
        $partner['website'] = $request->website ?? "";
        $partner['careers'] = $request->careers ?? "";
        $partner['contact_us'] = $request->contact_us ?? "";
        $partner['linkedin'] = $request->linkedin ?? "";
        $partner['mode'] = $request->mode;
        $partner->save();
        return redirect()->back()->with(['msg'=>'Partner updated successfully']);;

    }
}

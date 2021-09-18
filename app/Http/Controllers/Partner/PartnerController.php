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
        $linkItem->status = "add";
        $linkItem->save();
        return redirect()->back()->with(['msg'=>'Link added successfully']);;
    }

    public function button_delete($id)
    {
        $link = PartnerLink::find($id);
        $link->status = 'delete';
        $link->save();
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
        $slider->status = "add";
        $slider->save();
        return redirect()->back()->with(['msg'=>'Slider added successfully  & waiting for approve']);;

    }

    public function slider_delete($id)
    {
        $link = PartnerSlider::find($id);
        $link->status = 'delete';
        $link->save();
        return redirect()->back()->with(['msg'=>'Slider submitted for delete & waiting for approve']);;
    }

    public function promotion_store(Request $request)
    {
        $sliderImage = $this->uploadMediaFile($request, 'slider', FileConstant::PARTNER_PROMOTION);
        $slider = new PartnerPromotion();
        $slider->partner_id =Auth::guard('partner')->id();
        $slider->promotion_image = $sliderImage;
        $slider->url = $request->url;
        $slider->status = "add";
        $slider->save();
        return redirect()->back()->with(['msg'=>'Promotion added successfully & waiting for approve']);;
    }

    public function promotion_delete($id)
    {
        $link = PartnerPromotion::find($id);
        $link->status = 'delete';
        $link->save();
        return redirect()->back()->with(['msg'=>'Promotion delete successfully & waiting for approve']);;
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
        $partner1 = Partner::find(Auth::guard('partner')->id());
        $partner_appprove = Partner::where("parent_id", $partner1->id)->get()->first();
        if($partner_appprove){
            $partner = $partner_appprove;

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
            $partner['is_shown_program_tab'] = $request->is_shown_program_tab ?? 0;
            $partner->save();
        }
        else
        {
            $partner = new Partner();
            if ($request->home_logo) {
                $home_logo = $this->uploadMediaFile($request, 'home_logo', FileConstant::PARTNER_LOGO);
                $partner['home_logo'] = $home_logo;
            }
            else{
                $partner['home_logo'] = $partner1['home_logo'];
            }
            if ($request->details_logo) {
                $details_logo = $this->uploadMediaFile($request, 'details_logo', FileConstant::DETAIL_LOGO);
                $partner['details_logo'] = $details_logo;
            }
            else{
                $partner['details_logo'] = $partner1['details_logo'];
            }
            if ($request->promosi_image) {
                $promosi_image = $this->uploadMediaFile($request, 'promosi_image', FileConstant::PROMOSI_IMAGE);
                $partner['promosi_image'] = $promosi_image;
            }
            else{
                $partner['promosi_image'] = $partner1['promosi_image'];
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
            $partner['is_shown_program_tab'] = $request->is_shown_program_tab ?? 0;
            $partner['parent_id'] = $partner1->id;
            $partner['status'] = 'edit';
            $partner['id'] = null;
            $partner['user_id'] = Auth::guard('partner')->id();
            $partner->save();
        }
        return redirect()->back()->with(['msg'=>'Partner updated successfully & waiting for approve']);

    }
}

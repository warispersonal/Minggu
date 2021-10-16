<?php

namespace App\Http\Controllers\Partner;

use App\Constant\FileConstant;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerPromotionRequest;
use App\Partner;
use App\PartnerLink;
use App\PartnerPromotion;
use App\PartnerSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PartnerController extends Controller
{

    public function index()
    {
        return view('partner/dashboard');
    }

    public function showPromotions()
    {
        $userId = Auth::guard('partner')->id();
        $existingPartner = Partner::where('user_id', $userId)->get()->first();
        if ($existingPartner->is_promotion != 1) {
            return redirect()->back();
        }
        $promotions = PartnerPromotion::where('partner_id', $existingPartner->id)->orderBy('order_no')->get();
        return view('partner.single.promotion', compact('promotions'));
    }

    public function showButtons()
    {
        $userId = Auth::guard('partner')->id();
        $existingPartner = Partner::where('user_id', $userId)->get()->first();
        $links = PartnerLink::where('partner_id', $existingPartner->id)->get();
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
        return redirect()->back()->with(['msg' => 'Changes may take effect after admin approval']);
    }

    public function button_delete($id)
    {
        $link = PartnerLink::find($id);
        $link->status = 'delete';
        $link->save();
        return redirect()->back()->with(['msg' => 'Changes may take effect after admin approval']);
    }

    public function showSliders()
    {
        $userId = Auth::guard('partner')->id();
        $existingPartner = Partner::where('user_id', $userId)->get()->first();
        $sliders = PartnerSlider::where('partner_id', $existingPartner->id)->orderBy('order_no')->get();
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
        return redirect()->back()->with(['msg' => 'Changes may take effect after admin approval']);

    }

    public function slider_delete($id)
    {
        $link = PartnerSlider::find($id);
        $link->status = 'delete';
        $link->save();
        return redirect()->back()->with(['msg' => 'Changes may take effect after admin approval']);
    }

    public function promotion_store(Request $request)
    {
        $sliderImage = $this->uploadMediaFile($request, 'slider', FileConstant::PARTNER_PROMOTION);
        $slider = new PartnerPromotion();
        $slider->partner_id = Auth::guard('partner')->id();
        $slider->promotion_image = $sliderImage;
        $slider->url = $request->url;
        $slider->status = "add";
        $slider->save();
        return redirect()->back()->with(['msg' => 'Changes may take effect after admin approval']);
    }

    public function promotion_delete($id)
    {
        $link = PartnerPromotion::find($id);
        $link->status = 'delete';
        $link->save();
        return redirect()->back()->with(['msg' => 'Changes may take effect after admin approval']);
    }


    public function editUniqueInfo()
    {
        $partner = Partner::where("user_id", Auth::guard('partner')->id())->get()->first();
        $update_partner = Partner::where("parent_id", Auth::guard('partner')->id())->get()->last();
        if ($update_partner) {
            $partner = $update_partner;
        }
        return view('partner.single.edit', compact('partner'));
    }


    public function dashboard()
    {
        $partner = Partner::where("user_id", Auth::guard('partner')->id())->get()->first();
        return view('partner.single.dashboard', compact('partner'));
    }

    public function updateUniqueInfo(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'name_bm' => 'required',
            'description' => 'required',
            'description_bm' => 'required',
            'video_link' => 'required'

        ]);
        $partner = Partner::where("user_id", Auth::guard('partner')->id())->get()->first();
        $update_partner = Partner::where("parent_id", Auth::guard('partner')->id())->get()->last();
        if ($update_partner && $update_partner != $partner) {
            if ($request->home_logo) {
                $home_logo = $this->uploadMediaFile($request, 'home_logo', FileConstant::PARTNER_LOGO);
                $update_partner['home_logo'] = $home_logo;
            }
            if ($request->details_logo) {
                $details_logo = $this->uploadMediaFile($request, 'details_logo', FileConstant::DETAIL_LOGO);
                $update_partner['details_logo'] = $details_logo;
            }
            if ($request->promosi_image) {
                $promosi_image = $this->uploadMediaFile($request, 'promosi_image', FileConstant::PROMOSI_IMAGE);
                $update_partner['promosi_image'] = $promosi_image;
            }
            $iframe = $this->getVideoIFrame($request->video_link);
            $update_partner['iframe'] = $iframe;
            $update_partner['name'] = $request->name;
            $update_partner['name_bm'] = $request->name_bm;
            $update_partner['description'] = $request->description;
            $update_partner['description_bm'] = $request->description_bm;
            $update_partner['bg_color'] = $request->bg_color;
            $update_partner['video_link'] = $request->video_link;
            $update_partner['slug'] = Str::slug($request->name, "-");
            $update_partner['fb'] = $request->fb ?? "";
            $update_partner['insta'] = $request->insta ?? "";
            $update_partner['twitter'] = $request->twitter ?? "";
            $update_partner['youtube'] = $request->youtube ?? "";
            $update_partner['website'] = $request->website ?? "";
            $update_partner['careers'] = $request->careers ?? "";
            $update_partner['contact_us'] = $request->contact_us ?? "";
            $update_partner['linkedin'] = $request->linkedin ?? "";
            $update_partner['mode'] = $request->mode;
            $update_partner['parent_id'] = $partner->id;
            $update_partner['order'] = $partner->order;
            $update_partner['is_shown_program_tab'] = $partner->is_shown_program_tab;
            $update_partner['is_promotion'] = $partner->is_promotion;
            $update_partner['status'] = 'edit';
            $update_partner['user_id'] = $partner->user_id;
            $update_partner->save();
        } else {
            $update_partner = new Partner();
            if ($request->home_logo) {
                $home_logo = $this->uploadMediaFile($request, 'home_logo', FileConstant::PARTNER_LOGO);
                $update_partner['home_logo'] = $home_logo;
            } else {
                $update_partner['home_logo'] = $partner->home_logo;
            }
            if ($request->details_logo) {
                $details_logo = $this->uploadMediaFile($request, 'details_logo', FileConstant::DETAIL_LOGO);
                $update_partner['details_logo'] = $details_logo;
            } else {
                $update_partner['details_logo'] = $partner->details_logo;
            }
            if ($request->promosi_image) {
                $promosi_image = $this->uploadMediaFile($request, 'promosi_image', FileConstant::PROMOSI_IMAGE);
                $update_partner['promosi_image'] = $promosi_image;
            } else {
                $update_partner['promosi_image'] = $partner->promosi_image;
            }
            $iframe = $this->getVideoIFrame($request->video_link);
            $update_partner['iframe'] = $iframe;
            $update_partner['name'] = $request->name;
            $update_partner['name_bm'] = $request->name_bm;
            $update_partner['description'] = $request->description;
            $update_partner['description_bm'] = $request->description_bm;
            $update_partner['bg_color'] = $request->bg_color;
            $update_partner['video_link'] = $request->video_link;
            $update_partner['slug'] = Str::slug($request->name, "-");
            $update_partner['fb'] = $request->fb ?? "";
            $update_partner['insta'] = $request->insta ?? "";
            $update_partner['twitter'] = $request->twitter ?? "";
            $update_partner['youtube'] = $request->youtube ?? "";
            $update_partner['website'] = $request->website ?? "";
            $update_partner['careers'] = $request->careers ?? "";
            $update_partner['contact_us'] = $request->contact_us ?? "";
            $update_partner['linkedin'] = $request->linkedin ?? "";
            $update_partner['mode'] = $request->mode;
            $update_partner['parent_id'] = $partner->id;
            $update_partner['order'] = $partner->order;
            $update_partner['is_shown_program_tab'] = $partner->is_shown_program_tab;
            $update_partner['is_promotion'] = $partner->is_promotion;
            $update_partner['status'] = 'edit';
            $update_partner['user_id'] = Auth::guard('partner')->id();
            $update_partner->save();
        }
        return redirect()->route('partner.dashboard')->with(['msg' => 'Changes may take effect after admin approval']);
    }

    public function promotion_edit($id)
    {
        $partner = PartnerPromotion::find($id);
        return  view('partner.single.promotion.edit',compact('partner'));
    }

    public function promotion_update(PartnerPromotionRequest $request, $id)
    {

        $partner = PartnerPromotion::find($id);
        if($request->has('slider')){
            $sliderImage = $this->uploadMediaFile($request, 'slider', FileConstant::PARTNER_PROMOTION);
            $partner->promotion_image = $sliderImage;
        }
        $partner->url = $request->url;
        $partner->save();
        return redirect()->route('partner.show.promotion')->with(['msg' => 'Promotion updated successfully']);
    }

    public function slider_edit($id){
        $slider = PartnerSlider::find($id);
        return view('partner.single.slider.edit',compact('slider'));
    }

    public function slider_update(PartnerPromotionRequest $request, $id)
    {
        $slider = PartnerSlider::find($id);
        if($request->has('slider')){
            $sliderImage = $this->uploadMediaFile($request, 'slider', FileConstant::PARTNER_SLIDER);
            $slider->slider = $sliderImage;
        }
        $slider->slider_link = $request->slider_link;
        $slider->save();
        return redirect()->route('partner.show.slider')->with(['msg' => 'Slider updated successfully']);
    }

    public function link_edit($id)
    {
        $link = PartnerLink::find($id);
        return  view('partner.single.links.edit',compact('link'));
    }

    public function link_update(Request $request, $id)
    {
        $linkItem = PartnerLink::find($id);
        $linkItem->title = $request->title;
        $linkItem->title_bm = $request->title_bm;
        $linkItem->link = $request->link;
        $linkItem->save();
        return redirect()->route('partner.show.slider')->with(['msg' => 'Link updated successfully']);
    }
}

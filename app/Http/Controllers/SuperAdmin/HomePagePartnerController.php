<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Constant\FileConstant;
use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Partner;
use App\PartnerLink;
use App\PartnerProgram;
use App\PartnerPromotion;
use App\PartnerSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomePagePartnerController extends Controller
{
    public function index($id = 1)
    {
        $status = null;
        if($id == 1){
            $partners = Partner::whereNull('status')->get();
            $status = 'all';
        }
        else{
            $status = 'delete';
            $partners = Partner::whereNotNull('status')->get();
        }

        return view('superadmin.homepage.index', compact('partners', 'status'));
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

    public function showChanges($id)
    {
        $changes = Partner::find($id);
        $original = Partner::find($changes->parent_id);
        return view('superadmin.homepage.showChanges', compact('original','changes'));
    }

    public function update(Request $request, $id)
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
        $partner = Partner::find($id);
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
        $partner['video_link'] = $request->video_link;
        $partner['slug'] = Str::slug($request->name, "-");
        $partner['bg_color'] = $request->bg_color;
        $partner['fb'] = $request->fb ?? "";
        $partner['insta'] = $request->insta ?? "";
        $partner['twitter'] = $request->twitter ?? "";
        $partner['youtube'] = $request->youtube ?? "";
        $partner['website'] = $request->website ?? "";
        $partner['careers'] = $request->careers ?? "";
        $partner['linkedin'] = $request->linkedin ?? "";
        $partner['contact_us'] = $request->contact_us ?? "";
        $partner['mode'] = $request->mode;
        $partner['is_shown_program_tab'] = $request->is_shown_program_tab ?? 0;
        $partner->save();
        return redirect()->route('stars.homepage.index')->with(['msg' => 'Partner info updated successfully']);;

    }

    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect()->back()->with(['msg' => 'Partner delete successfully']);;
    }

    public function slider_delete($id)
    {
        $slider = PartnerSlider::find($id);
        $slider->delete();
        return redirect()->back()->with(['msg' => 'Slider delete successfully']);;
    }


    public function link_delete($id)
    {
        $link = PartnerLink::find($id);
        $link->delete();
        return redirect()->back()->with(['msg' => 'Link deleted successfully']);;
    }


    public function promotion_delete($id)
    {
        $link = PartnerPromotion::find($id);
        $link->delete();
        return redirect()->back()->with(['msg' => 'Promotion deleted successfully']);;
    }


    public function slider_store(Request $request)
    {
        $sliderImage = $this->uploadMediaFile($request, 'slider', FileConstant::PARTNER_SLIDER);
        $slider = new PartnerSlider();
        $slider->partner_id = $request->partner;
        $slider->slider = $sliderImage;
        $slider->slider_link = $request->slider_link;
        $slider->save();
        return redirect()->back()->with(['msg' => 'Slider added successfully']);;
    }

    public function promotion_store(Request $request)
    {
        $sliderImage = $this->uploadMediaFile($request, 'slider', FileConstant::PARTNER_PROMOTION);
        $slider = new PartnerPromotion();
        $slider->partner_id = $request->partner;
        $slider->promotion_image = $sliderImage;
        $slider->url = $request->url;
        $slider->save();
        return redirect()->back()->with(['msg' => 'Promotion added successfully']);;
    }

    public function link_store(Request $request)
    {
        $linkItem = new PartnerLink();
        $linkItem->partner_id = $request->partner;
        $linkItem->title = $request->title;
        $linkItem->title_bm = $request->title_bm;
        $linkItem->link = $request->link;
        $linkItem->save();
        return redirect()->back()->with(['msg' => 'Link added successfully']);;

    }
    public function sliderApprove($id,$status){
        $slider = PartnerSlider::find($id);
        if($status == 4 || $status == 1){
            $slider->delete();
        }
        if($status == 3 || $status == 2){
            $slider->status = null;
            $slider->save();
        }
        return redirect()->back()->with(['msg' => 'Action performed successfully']);;

    }

    public function promotionApprove($id,$status){
        $slider = PartnerPromotion::find($id);
        if($status == 4 || $status == 1){
            $slider->delete();
        }
        if($status == 3 || $status == 2){
            $slider->status = null;
            $slider->save();
        }
        return redirect()->back()->with(['msg' => 'Action performed successfully']);;

    }

    public function linkApprove($id,$status){
        $slider = PartnerLink::find($id);
        if($status == 4 || $status == 1){
            $slider->delete();
        }
        if($status == 3 || $status == 2){
            $slider->status = null;
            $slider->save();
        }
        return redirect()->back()->with(['msg' => 'Action performed successfully']);;

    }

    public function approvePartner($id , $status){
        $updated = Partner::find($id);
        echo "<pre>";
        print_r($updated->id);
        die();
        $original = Partner::find($updated->parent_id);
        if($status == "approve"){

            $promotions = PartnerPromotion::where('partner_id',$original->id)->get();
            $sliders = PartnerSlider::where('partner_id',$original->id)->get();
            $programs = Program::where('partner_id',$original->id)->get();

            foreach ($promotions as $promotion){
                $promotion->partner_id = $updated->id;
                $promotion->save();
            }
            foreach ($programs as $program){
                $program->partner_id = $updated->id;
                $program->save();
            }
            foreach ($sliders as $slider){
                $slider->partner_id = $slider->id;
                $slider->save();
            }


            $updated->status = null;
            $updated->parent_id = null;
            $updated->save();



            $original->delete();
        }
        else{
            $updated->delete();
        }
        return redirect()->route('stars.homepage.index')->with(['msg' => 'Action performed successfully']);
    }
}

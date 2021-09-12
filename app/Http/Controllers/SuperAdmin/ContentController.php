<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Settings;

class ContentController extends Controller
{
    public function menu(){
        return view('superadmin.content.menu');
    }

    public function theme(){

        $data = [];
        $data['themeBG'] = Settings::where('key' , 'themeBG')->get('value')[0]->value;
        $data['themeMenuBG'] = Settings::where('key' , 'themeMenuBG')->get('value')[0]->value;
        $data['themePageBG'] = Settings::where('key' , 'themePageBG')->get('value')[0]->value;
        $data['desktopImage'] = Settings::where('key' , 'desktop-image')->get('value')[0]->value;
        $data['mobileImage'] = Settings::where('key' , 'mobile-image')->get('value')[0]->value;

        return view('superadmin.content.theme' , compact('data'));
    }

    public function themeEdit(Request $request){

        $key = $request->key;
        $value = $request->value;

        if($request->image == 1){
            $input = $request->all();
            $validator = Validator::make($request->all(), [
                $request->key => 'required|image|mimes:jpeg,png,jpg,gif|max:3072',
            ]);
            if($validator->passes())
            {
                $image = $request->file($request->key);
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $new_name);

                $settings = Settings::where('key' , $key)->first();
                if($settings != NULL){
                    Settings::where('key', $key)->update(['value' => $new_name]);
                }else{
                    Settings::create(['key'=> $key, 'value' => $new_name]);
                }

                return response()->json(['success'=> asset('uploads/' . $new_name) , 'type' => $key]);
            }else{
                return response()->json(['error'=>$validator->errors()->all()]);
            }
        }else{
            $settings = Settings::where('key' , $key)->first();
            if($settings != NULL){
                Settings::where('key', $key)->update(['value' => $value]);
            }else{
                Settings::create(['key'=> $key, 'value' => $value]);
            }
        }

        echo $value;

    }

    public function tontonVideo(Request $request){
        $data = [];
        $data['link'] = Settings::where('key','msd-live-video')->first('value');
        return view('superadmin.content.msdlive' , compact('data'));
    }
    public function tonTonVideoSave(Request $request){

            $link = Settings::where('key','msd-live-video')->first();
            if($link == null){
                Settings::create(['key'=>'msd-live-video', 'value' => $request->link]);
                return redirect()->back()->with(['msg'=>'MSD Live Video Link Saved']);
            }else{
                Settings::where('key', 'msd-live-video')->update(['value' => $request->link]);
                return redirect()->back()->with(['msg'=>'MSD Live Video Link Updated']);
            }

    }
}

<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Validator;

use App\User;

use DataTables;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Cloner\Data;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin/partners/list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'type' => 'required',
        ]);
        if ($validator->passes()) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'raw_password' => $request->password,
                'type' => $request->type,
                'password' => Hash::make($request->password),
                'role_id' => '3'
            ]);
            $partner = new Partner();
            $partner['name'] = Str::random(15);
            $partner['name_bm'] = Str::random(15);
            $partner['description'] = Str::random(35);
            $partner['description_bm'] = Str::random(35);
            $partner['video_link'] = Str::random(15);
            $partner['slug'] = Str::random(15);
            $partner['home_logo'] = "home_logo.png";
            $partner['details_logo'] = "details_logo.png";
            $partner['promosi_image'] = "promosi.png";
            $partner['user_id'] = $user->id;
            $partner->save();
			return response()->json(['success'=>'Added New Partner.']);
        }else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }
    }

    /**
     * Show the specified resource.
     *
     * @param  int  $id
    */
    public function show($id){
        $user = User::where(['id' => $id, 'role_id' => 3])->get();
        return view('superadmin/partners/edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
       ]);
        if($validator->passes()){
            if($request->password == ""){
                User::where('id' , $id)
                ->update([
                    'name' => $request->name,
                    'type' => $request->type
                ]);
            }else{
                User::where('id' , $id)
                ->update([
                    'name' => $request->name,
                    'type' => $request->type,
                    'raw_password' => $request->password,
                    'password' => Hash::make($request->password)
                ]);
            }
            return redirect()->route('star.partners')->with(['msg'=>'Partner details has been updated']);
        }else{
         return redirect()->route('star.detailPartner', $id)->withErrors($validator)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->destroy($id);
        return redirect()->route('star.partners')->with('msg' , 'Partner has deleted successfully.');
    }


    // Get Partners for DataTable AJAX
    public function getPartners(Request $request){

        $partners = User::where('role_id' , 3)->orderBy('created_at','desc')->get();
        return Datatables::of($partners)
            ->addColumn('action', function($data){
                $dropdown = '<div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="' .route('star.detailPartner' , $data->id). '">Edit</a>
                    <a onclick="return confirm(\'Are you sure you want to delete?\')" class="dropdown-item" href="'. route('star.destroyPartner' , $data->id) .'">Delete</a>
                    </div>
                </div>';
                return $dropdown;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

}

<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

use App\User;

use DataTables;
use Symfony\Component\VarDumper\Cloner\Data;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin/admins/list');
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
        ]);
        if ($validator->passes()) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'raw_password' => $request->password,
                'password' => Hash::make($request->password),
                'role_id' => '2'
            ]);
			return response()->json(['success'=>'Added New Admin.']);
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
        $user = User::where(['id' => $id, 'role_id' => 2])->get();
        return view('superadmin/admins/edit' , compact('user'));
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
       ]);
        if($validator->passes()){
            if($request->password == ""){
                User::where('id' , $id)
                ->update([
                    'name' => $request->name,
                ]);
            }else{
                User::where('id' , $id)
                ->update([
                    'name' => $request->name,
                    'raw_password' => $request->password,
                    'password' => Hash::make($request->password)
                ]);
            }
            return redirect()->route('star.admins')->with(['msg'=>'Admin details has been updated']);
        }else{
         return redirect()->route('star.detailAdmin', $id)->withErrors($validator)->withInput();
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
        return redirect()->route('star.admins')->with('msg' , 'Admin has deleted successfully.');
    }


    // Get Admins for DataTable AJAX
    public function getAdmins(Request $request){

        $admins = User::where('role_id' , 2)->orderBy('created_at','desc')->get();
        return Datatables::of($admins)
            ->addColumn('action', function($data){
                $dropdown = '<div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="' .route('star.detailAdmin' , $data->id). '">Edit</a>
                    <a  onclick="return confirm(\'Are you sure you want to delete?\')" class="dropdown-item" href="'. route('star.destroyAdmin' , $data->id) .'">Delete</a>
                    </div>
                </div>';
                return $dropdown;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

}

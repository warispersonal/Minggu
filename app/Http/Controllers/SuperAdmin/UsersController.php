<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use DataTables;

class UsersController extends Controller
{
    public function index(){
        return view('superadmin.users.list');
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
        return redirect()->route('star.users')->with('msg' , 'User has deleted successfully.');
    }

    // Get Partners for DataTable AJAX
    public function getUsers(Request $request){

        $partners = User::where('role_id' , 4)->orderBy('created_at','desc')->get();
        return Datatables::of($partners)
            ->addColumn('action', function($data){
                $dropdown = '<div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a onclick="return confirm(\'Are you sure you want to delete?\')" class="dropdown-item" href="'. route('star.destroyPartner' , $data->id) .'">Delete</a>
                    </div>
                </div>';
                return $dropdown;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}

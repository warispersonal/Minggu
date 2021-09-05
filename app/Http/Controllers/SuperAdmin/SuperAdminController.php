<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\UserLottery;
use Illuminate\Http\Request;

use App\User;
use App\Models\Program;
use Yajra\DataTables\DataTables;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards=[];$data=[];

        $data['admins'] = User::where('role_id' , 2)->limit(5)->get();
        $data['partners'] = User::where('role_id' , 3)->limit(5)->get();
        $data['users'] = User::where('role_id' , 4)->limit(5)->get();
        $data['programs'] = Program::limit(5)->get();

        $cards['admin_count'] = User::where('role_id' , 2)->count();
        $cards['partner_count'] = User::where('role_id' , 3)->count();
        $cards['user_count'] = User::where('role_id' , 4)->count();
        $cards['program_count'] = Program::count();

        return view('superadmin/dashboard' , compact('cards','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function viewSubmission(){
        return view('superadmin.viewSubmission');
    }

    public function viewSubmissionAJAX(Request $request){

        $userLottery = UserLottery::select('*');
        return Datatables::of($userLottery)
            ->addColumn('name', function ($data) {
                return $data->user->name ?? "";
            })
            ->addColumn('email', function ($data) {
                return $data->user->email ?? "";
            })
            ->addColumn('ic_number', function ($data) {
                return $data->user->ic_number ?? "";
            })
            ->addColumn('title', function ($data) {
                return $data->lottery->title ?? "";
            })
            ->addColumn('section_no', function ($data) {
                return $data->lottery->section ?? "";
            })
            ->addColumn('correct_value', function ($data) {
                return $data->lottery->correct_value ?? "";
            })
            ->rawColumns(['id','name','email','ic_number','section_no','title','correct_value'])
            ->make(true);
    }

}

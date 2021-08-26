<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Jadual;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        $jaduals = Jadual::all();
        return  view('superadmin.program.index',compact('programs','jaduals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('superadmin.program.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thumbnail_image = $this->uploadMediaFile($request, 'thumbnail_image', 'thumbnail_image');
        $sponser_image = $this->uploadMediaFile($request, 'sponser_image', 'sponser_image');

        $program = new Program();
        $program->name = $request->name;
        $program->sponser_image = $sponser_image;
        $program->thumbnail_image = $thumbnail_image;
        $program->date = $request->date;
        $program->description = $request->description;
        $program->video_link = $request->video_link;
        $program->partner	 = 1;
        $program->save();
        return  redirect()->route('programs.index')->with('success_message', 'Program Added');

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
}

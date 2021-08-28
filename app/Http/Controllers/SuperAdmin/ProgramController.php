<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Jadual;
use App\Models\Program;
use App\Models\MainProgram;
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
        return view('superadmin.program.index', compact('programs', 'jaduals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_programs = MainProgram::all();
        return view('superadmin.program.create', compact("main_programs"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thumbnail_image = $this->uploadMediaFile($request, 'thumbnail_image', 'thumbnail_image');
        $sponser_image = $this->uploadMediaFile($request, 'sponser_image', 'sponser_image');
        $request->validate([
            'date' => 'required',
            'description' => 'required',
            'main_program' => 'required',
        ]);
        $program = new Program();
        $program->name = $request->name;
        $program->sponser_image = $sponser_image;
        $program->thumbnail_image = $thumbnail_image;
        $program->date = $request->date;
        $program->description = $request->description;
        $program->video_link = $request->video_link;
        $program->partner = 1;
        $program->main_program_id = $request->main_program;
        $program->save();
        return redirect()->route('programs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

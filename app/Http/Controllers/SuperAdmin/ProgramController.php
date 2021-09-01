<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Constant\FileConstant;
use App\Http\Controllers\Controller;
use App\Jadual;
use App\Models\Program;
use App\Models\MainProgram;
use App\Partner;
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

    public function adminIndex()
    {
        $programs = Program::all();
        $jaduals = Jadual::all();
        return view('admin.program.index', compact('programs', 'jaduals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_programs = MainProgram::all();
        $partners = Partner::all();
        return view('superadmin.program.create', compact("main_programs", 'partners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thumbnail_image = $this->uploadMediaFile($request, 'thumbnail_image', FileConstant::PROGRAM_THUMBNAIL);
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'main_program' => 'required',
        ]);
        $program = new Program();
        $program->name = $request->name;
        $program->name_bm = $request->name_bm;
        $program->thumbnail_image = $thumbnail_image;
        $program->date = $request->date;
        $program->time = $request->time;
        $program->description = $request->description;
        $program->description_bm = $request->description_bm;
        $program->video_link = $request->video_link;
        $program->main_program_id = $request->main_program;
        $program->partner_id = $request->partner_id;
        $program->save();
        return redirect()->route('programs.index')->with(['msg'=>'Program added successfully']);

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
        $program = Program::find($id);
        $main_programs = MainProgram::all();
        $partners = Partner::all();
        return view('superadmin.program.edit', compact("program", "main_programs", 'partners'));
    }
    public function adminEdit($id)
    {
        $program = Program::find($id);
        $main_programs = MainProgram::all();
        $partners = Partner::all();
        return view('admin.program.edit', compact("program", "main_programs", 'partners'));
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
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'description_bm' => 'required',
            'main_program' => 'required',
        ]);
        $program = Program::find($id);
        if ($request->thumbnail_image) {
            $thumbnail_image = $this->uploadMediaFile($request, 'thumbnail_image', FileConstant::PROGRAM_THUMBNAIL);
            $program->thumbnail_image = $thumbnail_image;
        }
        $program->name = $request->name;
        $program->name_bm = $request->name_bm;
        $program->date = $request->date;
        $program->time = $request->time;
        $program->description = $request->description;
        $program->description_bm = $request->description_bm;
        $program->video_link = $request->video_link;
        $program->main_program_id = $request->main_program;
        $program->partner_id = $request->partner_id;
        $program->save();
        return redirect()->route('programs.index')->with(['msg'=>'Program update successfully']);;
    }

    public function adminUpdate(Request $request, $id)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'description_bm' => 'required',
            'main_program' => 'required',
        ]);
        $program = Program::find($id);
        if ($request->thumbnail_image) {
            $thumbnail_image = $this->uploadMediaFile($request, 'thumbnail_image', FileConstant::PROGRAM_THUMBNAIL);
            $program->thumbnail_image = $thumbnail_image;
        }
        $program->name = $request->name;
        $program->name_bm = $request->name_bm;
        $program->date = $request->date;
        $program->time = $request->time;
        $program->description = $request->description;
        $program->description_bm = $request->description_bm;
        $program->video_link = $request->video_link;
        $program->main_program_id = $request->main_program;
        $program->partner_id = $request->partner_id;
        $program->save();
        return redirect()->route('admin.programs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect()->back();
    }
}

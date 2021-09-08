<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Constant\FileConstant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Validator;

use App\Models\MainProgram;

use DataTables;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Cloner\Data;

class MainProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin/mainprogram/list');
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
            'title' => 'required',
            'title_bm' => 'required',

        ]);
        $imageName = '';
        $image_64 = $request->logo;
        $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf
        if ($extension != "jpeg" || $extension != "jpg" || $extension != "png") {
            $replace = substr($image_64, 0, strpos($image_64, ',') + 1);
            $image = str_replace($replace, '', $image_64);
            $image = str_replace(' ', '+', $image);
            $imageName = Str::random(25) . '.' . $extension;
            Storage::disk('public')->put($imageName, base64_decode($image));
        }
        if ($validator->passes()) {
            MainProgram::create([
                'title' => $request->title,
                'description' => $request->description,
                'title_bm' => $request->title_bm,
                'description_bm' => $request->description_bm,
                'logo' => $imageName,
            ]);
			return response()->json(['success'=>'Added New Main Program.']);
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
        $program = MainProgram::find($id);
        return view('superadmin/mainprogram/edit' , compact('program'));
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
            'title' => 'required',
            'title_bm' => 'required',
       ]);
        $mainProgram = MainProgram::find($id);
        if($validator->passes()){
            if ($request->has('logo')) {
                $path = $this->uploadMediaFile($request, 'logo', FileConstant::MAIN_PROGRAM_LOGO);
                $mainProgram->logo = $path;
                $mainProgram->storage_type = 1;
            }
            $mainProgram->update([
                'title' => $request->title,
                'title_bm' => $request->title_bm,
                'description' => $request->description,
                'description_bm' => $request->description_bm,
            ]);

            return redirect()->route('star.MainDetail')->with(['msg'=>'Main program has been updated']);
        }else{
         return redirect()->route('star.detailMainDetail', $id)->withErrors($validator)->withInput();
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
        $mainProgram = MainProgram::findOrFail($id);
        $mainProgram->destroy($id);
        return redirect()->route('star.MainDetail')->with('msg' , 'Main program has deleted successfully.');
    }


    // Get Partners for DataTable AJAX
    public function getMainProgram(Request $request){

        $partners = MainProgram::all();
        return Datatables::of($partners)
            ->addColumn('description', function ($partner) {
                return  Str::limit($partner->description, 30);
            })
            ->addColumn('logo', function ($partner) {

                return '<img src='.$partner->main_logo.' class="main-logo-image" alt="No Image" />' ;
            })
            ->addColumn('action', function($data){
                $dropdown = '<div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="' .route('star.detailMainDetail' , $data->id). '">Edit</a>
                    <a onclick="return confirm(\'Are you sure you want to delete?\')" class="dropdown-item" href="'. route('star.destroyMainDetail' , $data->id) .'">Delete</a>
                    </div>
                </div>';

                return $dropdown;
            })
            ->rawColumns(['action','description','logo'])
            ->make(true);
    }

}

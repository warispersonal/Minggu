<?php

namespace App\Http\Controllers\SuperAdmin;

use App\User;

use DataTables;
use League\Csv\Reader;
use League\Csv\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\LotteryFilters;
use Illuminate\Database\Eloquent\Collection;

class CompititionController extends Controller
{
    public function filter(){
        return view('superadmin.compitition.filter');
    }

    public function uploadFilter(Request $request){

        if(!empty($request->file('csv_file'))){
            $file = $request->file('csv_file');

            $name = time().'-'.$file->getClientOriginalName();

            $destinationPath = 'uploads';
            $file->move($destinationPath,$name);

            // Uploading File
            $file = public_path($destinationPath . '/' . $name);

            $csv = Reader::createFromPath($destinationPath . '/' . $name, 'r');
            $csv->setHeaderOffset(0); //set the CSV header offset

            $stmt = Statement::create();

            $records = $stmt->process($csv);

            foreach ($records as $record) {
                LotteryFilters::firstOrCreate($record);
            }

            return redirect()->back()->with(['msg'=>'Successfully Added Filters']);

        }else{
            return redirect()->back()->with(['msg'=>'Something went wrong' , 'type'=>'error']);
        }

        // return view('superadmin.compitition.filter');
    }

    public function destroyFilter($id){

        $user = LotteryFilters::findOrFail($id);
        $user->destroy($id);
        return redirect()->back()->with('msg' , 'Deleted successfully.');

    }

    // Get Partners for DataTable AJAX
    public function getFilters(Request $request){
        $partners = LotteryFilters::get();
        return Datatables::of($partners)
            ->addColumn('action', function($data){
                $dropdown = '<div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a onclick="return confirm(\'Are you sure you want to delete?\')" class="dropdown-item" href="'. route('star.compitition.destroyFilter' , $data->id) .'">Delete</a>
                    </div>
                </div>';
                return $dropdown;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    // Generate Daily Winner
    public function dailyWinner(Request $request){
        return view('superadmin.compitition.dailywinner');
    }
    public function getDailyWinner(Request $request)
    {
        $data = [];
        $filters = LotteryFilters::select('ic_number')->get();
        $user = DB::table('users')
            ->where('role_id' , 4)
            ->whereNotIn('ic_number' , $filters)
            ->inRandomOrder()
            ->limit(1)
            ->get();

        $data['winner'] = $user;
        $data['status'] = 'success';

        // TODO: Getting Daily Winner Add this Winner into Winners Table

        return response()->json($data, 200);
    }

}

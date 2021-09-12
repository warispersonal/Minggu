<?php

namespace App\Http\Controllers\SuperAdmin;

use App\DailyWinner;
use App\RinggitEmas;
use App\User;

use DataTables;
use Illuminate\Support\Facades\Session;
use League\Csv\Reader;
use League\Csv\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\LotteryFilters;
use Illuminate\Database\Eloquent\Collection;

class RinggitEmasController extends Controller
{
    public function ringgitEmas()
    {
        return view('superadmin.ringgitEmas.ringgitEmas');
    }

    public function getRinggitEmasWinnerAJAX(Request $request)
    {

        $dailyWinner = RinggitEmas::all();
        return Datatables::of($dailyWinner)
            ->addColumn('name', function ($data) {
                return $data->user->name ?? "";
            })
            ->addColumn('email', function ($data) {
                return $data->user->email ?? "";
            })
            ->addColumn('ic', function ($data) {
                return $data->user->ic_number ?? "";
            })
            ->addColumn('title', function ($data) {
                return $data->lottery->title ?? "";
            })
            ->rawColumns(['name', 'email', 'ic', 'title'])
            ->addIndexColumn()
            ->make(true);
    }

    public function generateRinggitEmasWinnerList(Request $request)
    {
        $lottery_id_1 = 1;
        $lottery_id_2 = 2;
        $lottery_id_3 = 27;
        $lottery_id_4 = 28;
        $lottery_id_5 = 42;

        $this->getRinggitEmasWinnerBasedonLottery($lottery_id_1);
        $this->getRinggitEmasWinnerBasedonLottery($lottery_id_2);
        $this->getRinggitEmasWinnerBasedonLottery($lottery_id_3);
        $this->getRinggitEmasWinnerBasedonLottery($lottery_id_4);
        $this->getRinggitEmasWinnerBasedonLottery($lottery_id_5);

        return redirect()->route('star.compitition.ringgitEmasWinner');
    }

    public function getRinggitEmasWinnerBasedonLottery($lottery_id_1)
    {
        $filters = LotteryFilters::select('ic_number')->get();
        $record = DB::table('user_lotteries')
            ->where('lottery_id', $lottery_id_1)
            ->where('isCorrect', 1)
            ->whereNotIn('ic_number', $filters)
            ->limit(1)
            ->orderBy('created_at')
            ->get()
            ->first();
        $this->insertToLotteries($record);
    }

    public function insertToLotteries($record){
        if($record){
            $emas = RinggitEmas::where('lottery_id', $record->lottery_id)->get()->first();
            if(!$emas){
                RinggitEmas::create([
                    'user_id' => $record->user_id,
                    'lottery_id' => $record->lottery_id,
                    'date' => now(),
                    'updated_at' => now(),
                    'created_at' => now(),
                ]);
            }
        }
    }
}

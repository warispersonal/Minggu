<?php

namespace App\Http\Controllers\SuperAdmin;

use App\DailyWinner;
use App\LuckyDraw;
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

class LuckyDrawController extends Controller
{
    public function generateLuckyDraw()
    {
        return view('superadmin.luckDraw.luckyDraw');
    }

    public function generateLuckyDrawAJAX(Request $request)
    {
        $dailyWinner = LuckyDraw::all();
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
            ->rawColumns(['name', 'email', 'ic'])
            ->make(true);
    }

    public function generateLuckyDrawWinnerList(Request $request)
    {
        $noOfWinner = $request->daily_winner;
        $this->getLuckDraw($noOfWinner);
        return redirect()->route('star.compitition.getLuckyDrawWinnerList');
    }

    public function getLuckDraw($noOfWinner)
    {
        $filters = LotteryFilters::select('ic_number')->get();
        $records = DB::table('user_lotteries')
            ->where('isCorrect', 1)
            ->whereNotIn('ic_number', $filters)
            ->inRandomOrder()
            ->limit($noOfWinner)
            ->orderBy('created_at')
            ->get();
        $this->insertToLotteries($records);
    }

    public function insertToLotteries($records)
    {
        foreach ($records as $record){
            if ($record) {
                $luckyDraw = LuckyDraw::where('lottery_id', $record->lottery_id)->get()->first();
                if (!$luckyDraw) {
                    LuckyDraw::create([
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
}

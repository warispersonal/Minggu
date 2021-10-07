<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Lottery;
use App\UserLottery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function step1(Request $request)
    {
        return $this->storeDateToUserLotteries($request, 1, 26, 1);
    }

    public function step2(Request $request)
    {
        return $this->storeDateToUserLotteries($request, 27, 41, 2);
    }

    public function step3(Request $request)
    {
        return $this->storeDateToUserLotteries($request, 42, 111, 3);
    }

    public function storeDateToUserLotteries($request, $initial, $last, $step)
    {
        if (!Auth::guard('user')) {
            return redirect()->back();
        }
        $userLottery = [];
        $id = Auth::guard('user')->id();
        $ic_number = Auth::guard('user')->user()->ic_number;
        $name = Auth::guard('user')->user()->name;
        $email = Auth::guard('user')->user()->email;
        for ($i = $initial; $i <= $last; $i++) {
            $lottery = Lottery::find($i);
            $inputfield = 'step_' . $step . '_' . $i;
            if ($request->has($inputfield)) {
                $input = $_POST[$inputfield];
                if (!empty($input)) {
                    $userLotteries =  UserLottery::where('user_id', $id)->where('lottery_id',$i)->get()->first();
                    $count = Lottery::where('id', $id)->where('correct_value', $input)->count();
                    $isValueCorrect  = 0;
                    if ($count != 0) {
                        $isValueCorrect = 1;
                    }
                    if($userLotteries){
                        $userLotteries->code = $input;
                        $userLotteries->isCorrect = $isValueCorrect;
                        $userLotteries->save();
                    }
                    else{
                        $array = [
                            'user_id' => $id,
                            'lottery_id' => $i,
                            'code' => $input,
                            'isCorrect' => $isValueCorrect,
                            'created_at' => now(),
                            'updated_at' => now(),
                            'ic_number' => $ic_number ?? "",
                            'name' => $name,
                            'email' => $email,
                            'lottery_title' => $lottery->title
                        ];
                        $userLottery[] = $array;
                    }
                }
            }
        }
        UserLottery::insert($userLottery);
        $message = trans('general.competition_message');
        return redirect()->back()->with('action','submission')->with('msg', $message);

    }

}

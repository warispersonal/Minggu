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
        if(!Auth::guard('user')){
            return  redirect()->back();
        }
        $validator = Validator::make($request->all(), []);
        $userLottery = [];
        $id = Auth::guard('user')->id();
        $input1 = $request->step_1_1;
        $field1 = 'step_1_1';
        $counter = 1;
        if (!empty($input1)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input1)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field1, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input1];
                    $userLottery[] = $array;
                }
            }
        }


        $input2 = $request->step_1_2;
        $field2 = 'step_1_2';
        $counter = 2;
        if (!empty($input2)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input2)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field2, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input2];
                    $userLottery[] = $array;
                }
            }
        }

        $input3 = $request->step_1_3;
        $field3 = 'step_1_3';
        $counter = 3;
        if (!empty($input3)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input3)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field3, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input3];
                    $userLottery[] = $array;
                }
            }
        }


        $input4 = $request->step_1_4;
        $field4 = 'step_1_4';
        $counter = 4;
        if (!empty($input4)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input4)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field4, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input4];
                    $userLottery[] = $array;
                }
            }
        }

        $input5 = $request->step_1_5;
        $field5 = 'step_1_5';
        $counter = 5;
        if (!empty($input5)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input5)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field5, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input5];
                    $userLottery[] = $array;
                }
            }
        }

        $input6 = $request->step_1_6;
        $field6 = 'step_1_6';
        $counter = 6;
        if (!empty($input6)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input6)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field6, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input6];
                    $userLottery[] = $array;
                }
            }
        }
        $input6 = $request->step_1_6;
        $field6 = 'step_1_6';
        $counter = 6;
        if (!empty($input6)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input6)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field6, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input6];
                    $userLottery[] = $array;
                }
            }
        }
        $input7 = $request->step_1_7;
        $field7 = 'step_1_7';
        $counter = 7;
        if (!empty($input7)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input7)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field7, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input7];
                    $userLottery[] = $array;
                }
            }
        }
        $input8 = $request->step_1_8;
        $field8 = 'step_1_8';
        $counter = 8;
        if (!empty($input8)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input8)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field8, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input8];
                    $userLottery[] = $array;
                }
            }
        }
        $input9 = $request->step_1_9;
        $field9 = 'step_1_9';
        $counter = 9;
        if (!empty($input9)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input9)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field9, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input9];
                    $userLottery[] = $array;
                }
            }
        }
        $input10 = $request->step_1_10;
        $field10 = 'step_1_10';
        $counter = 10;
        if (!empty($input10)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input10)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field10, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input10];
                    $userLottery[] = $array;
                }
            }
        }
        $input11 = $request->step_1_11;
        $field11 = 'step_1_11';
        $counter = 11;
        if (!empty($input11)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input11)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field11, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input11];
                    $userLottery[] = $array;
                }
            }
        }
        $input12 = $request->step_1_12;
        $field12 = 'step_1_12';
        $counter = 12;
        if (!empty($input12)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input12)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field12, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input12];
                    $userLottery[] = $array;
                }
            }
        }
        $input13 = $request->step_1_13;
        $field13 = 'step_1_13';
        $counter = 13;
        if (!empty($input13)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input13)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field13, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input13];
                    $userLottery[] = $array;
                }
            }
        }
        $input14 = $request->step_1_14;
        $field14 = 'step_1_14';
        $counter = 14;
        if (!empty($input14)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input14)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field14, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input14];
                    $userLottery[] = $array;
                }
            }
        }
        $input15 = $request->step_1_15;
        $field15 = 'step_1_15';
        $counter = 15;
        if (!empty($input15)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input15)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field15, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input15];
                    $userLottery[] = $array;
                }
            }
        }
        $input16 = $request->step_1_16;
        $field16 = 'step_1_16';
        $counter = 16;
        if (!empty($input16)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input16)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field16, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input16];
                    $userLottery[] = $array;
                }
            }
        }
        $input17 = $request->step_1_17;
        $field17 = 'step_1_17';
        $counter = 17;
        if (!empty($input17)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input17)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field17, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input17];
                    $userLottery[] = $array;
                }
            }
        }
        $input18 = $request->step_1_18;
        $field18 = 'step_1_18';
        $counter = 18;
        if (!empty($input18)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input18)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field18, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input18];
                    $userLottery[] = $array;
                }
            }
        }
        $input19 = $request->step_1_19;
        $field19 = 'step_1_19';
        $counter = 19;
        if (!empty($input19)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input19)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field19, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input19];
                    $userLottery[] = $array;
                }
            }
        }
        $input20 = $request->step_1_20;
        $field20 = 'step_1_20';
        $counter = 20;
        if (!empty($input20)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input20)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field20, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input20];
                    $userLottery[] = $array;
                }
            }
        }
        $input21 = $request->step_1_21;
        $field21 = 'step_1_21';
        $counter = 21;
        if (!empty($input21)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input21)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field21, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input21];
                    $userLottery[] = $array;
                }
            }
        }
        $input22 = $request->step_1_22;
        $field22 = 'step_1_22';
        $counter = 22;
        if (!empty($input22)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input22)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field22, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input22];
                    $userLottery[] = $array;
                }
            }
        }
        $input23 = $request->step_1_23;
        $field23 = 'step_1_23';
        $counter = 23;
        if (!empty($input23)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input23)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field23, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input23];
                    $userLottery[] = $array;
                }
            }
        }
        $input24 = $request->step_1_24;
        $field24 = 'step_1_24';
        $counter = 24;
        if (!empty($input24)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input24)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field24, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input24];
                    $userLottery[] = $array;
                }
            }
        }
        $input25 = $request->step_1_25;
        $field25 = 'step_1_25';
        $counter = 25;
        if (!empty($input25)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input25)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field25, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input25];
                    $userLottery[] = $array;
                }
            }
        }
        $input26 = $request->step_1_26;
        $field26 = 'step_1_26';
        $counter = 26;
        if (!empty($input26)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input26)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field26, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input26];
                    $userLottery[] = $array;
                }
            }
        }


        if (count($validator->errors()) > 0) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            UserLottery::insert($userLottery);
            return redirect()->back();
        }

    }
}

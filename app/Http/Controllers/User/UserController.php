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
    public function step2(Request $request)
    {
        if(!Auth::guard('user')){
            return  redirect()->back();
        }
        $validator = Validator::make($request->all(), []);
        $userLottery = [];
        $id = Auth::guard('user')->id();
        $input1 = $request->step_2_27;
        $field1 = 'step_2_27';
        $counter = 27;
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
        $input2 = $request->step_2_28;
        $field2 = 'step_2_28';
        $counter = 28;
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
        $input3 = $request->step_2_29;
        $field3 = 'step_2_29';
        $counter = 29;
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
        $input4 = $request->step_2_30;
        $field4 = 'step_2_30';
        $counter = 30;
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
        $input5 = $request->step_2_31;
        $field5 = 'step_2_31';
        $counter = 31;
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
        $input6 = $request->step_2_32;
        $field6 = 'step_2_32';
        $counter = 32;
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
        $input6 = $request->step_2_33;
        $field6 = 'step_2_33';
        $counter = 33;
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
        $input7 = $request->step_2_34;
        $field7 = 'step_2_34';
        $counter = 34;
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
        $input8 = $request->step_2_35;
        $field8 = 'step_2_35';
        $counter = 35;
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
        $input9 = $request->step_2_36;
        $field9 = 'step_2_36';
        $counter = 36;
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
        $input10 = $request->step_2_37;
        $field10 = 'step_2_37';
        $counter = 37;
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
        $input11 = $request->step_2_38;
        $field11 = 'step_2_38';
        $counter = 38;
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
        $input12 = $request->step_2_39;
        $field12 = 'step_2_39';
        $counter = 39;
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
        $input13 = $request->step_2_40;
        $field13 = 'step_2_40';
        $counter = 40;
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
        $input14 = $request->step_2_41;
        $field14 = 'step_2_41';
        $counter = 41;
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

        if (count($validator->errors()) > 0) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->with('from_section',2)
                ->withInput();
        } else {
            UserLottery::insert($userLottery);
            return redirect()->back();
        }

    }

    public function step3(Request $request)
    {
        if (!Auth::guard('user')) {
            return redirect()->back();
        }
        $validator = Validator::make($request->all(), []);
        $userLottery = [];
        $id = Auth::guard('user')->id();


        $input1 = $request->step_3_42;
        $field1 = 'step_3_42';
        $counter = 42;
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


        $input3 = $request->step_3_43;
        $field3 = 'step_3_43';
        $counter = 43;
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
        $input4 = $request->step_3_44;
        $field4 = 'step_3_44';
        $counter = 44;
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
        $input5 = $request->step_3_45;
        $field5 = 'step_3_45';
        $counter = 45;
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
        $input6 = $request->step_3_46;
        $field6 = 'step_3_46';
        $counter = 46;
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
        $input6 = $request->step_3_47;
        $field6 = 'step_3_47';
        $counter = 47;
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
        $input7 = $request->step_3_48;
        $field7 = 'step_3_48';
        $counter = 48;
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
        $input8 = $request->step_3_49;
        $field8 = 'step_3_49';
        $counter = 49;
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
        $input9 = $request->step_3_50;
        $field9 = 'step_3_50';
        $counter = 50;
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
        $input10 = $request->step_3_51;
        $field10 = 'step_3_51';
        $counter = 51;
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
        $input11 = $request->step_3_52;
        $field11 = 'step_3_52';
        $counter = 52;
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
        $input12 = $request->step_3_53;
        $field12 = 'step_3_53';
        $counter = 53;
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
        $input13 = $request->step_3_54;
        $field13 = 'step_3_54';
        $counter = 54;
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
        $input14 = $request->step_3_55;
        $field14 = 'step_3_55';
        $counter = 55;
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
        $input15 = $request->step_3_56;
        $field15 = 'step_3_56';
        $counter = 56;
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
        $input16 = $request->step_3_57;
        $field16 = 'step_3_57';
        $counter = 57;
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
        $input17 = $request->step_3_58;
        $field17 = 'step_3_58';
        $counter = 58;
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
        $input18 = $request->step_3_59;
        $field18 = 'step_3_59';
        $counter = 59;
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
        $input19 = $request->step_3_60;
        $field19 = 'step_3_60';
        $counter = 60;
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
        $input20 = $request->step_3_61;
        $field20 = 'step_3_61';
        $counter = 61;
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
        $input21 = $request->step_3_62;
        $field21 = 'step_3_62';
        $counter = 62;
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
        $input22 = $request->step_3_63;
        $field22 = 'step_3_63';
        $counter = 63;
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
        $input23 = $request->step_3_64;
        $field23 = 'step_3_64';
        $counter = 64;
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
        $input24 = $request->step_3_65;
        $field24 = 'step_3_65';
        $counter = 65;
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
        $input25 = $request->step_3_66;
        $field25 = 'step_3_66';
        $counter = 66;
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
        $input26 = $request->step_3_67;
        $field26 = 'step_3_67';
        $counter = 67;
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
        $input27 = $request->step_3_68;
        $field27 = 'step_3_68';
        $counter = 68;
        if (!empty($input27)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input27)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field27, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input27];
                    $userLottery[] = $array;
                }
            }
        }
        $input28 = $request->step_3_69;
        $field28 = 'step_3_69';
        $counter = 69;
        if (!empty($input28)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input28)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field28, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input28];
                    $userLottery[] = $array;
                }
            }
        }
        $input29 = $request->step_3_70;
        $field29 = 'step_3_70';
        $counter = 70;
        if (!empty($input29)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input29)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field29, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input29];
                    $userLottery[] = $array;
                }
            }
        }
        $input30 = $request->step_3_71;
        $field30 = 'step_3_71';
        $counter = 71;
        if (!empty($input30)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input30)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field30, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input30];
                    $userLottery[] = $array;
                }
            }
        }
        $input31 = $request->step_3_72;
        $field31 = 'step_3_72';
        $counter = 72;
        if (!empty($input31)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input31)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field31, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input31];
                    $userLottery[] = $array;
                }
            }
        }
        $input32 = $request->step_3_73;
        $field32 = 'step_3_73';
        $counter = 73;
        if (!empty($input32)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input32)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field32, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input32];
                    $userLottery[] = $array;
                }
            }
        }
        $input33 = $request->step_3_74;
        $field33 = 'step_3_74';
        $counter = 74;
        if (!empty($input33)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input33)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field33, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input33];
                    $userLottery[] = $array;
                }
            }
        }
        $input34 = $request->step_3_75;
        $field34 = 'step_3_75';
        $counter = 75;
        if (!empty($input34)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input34)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field34, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input34];
                    $userLottery[] = $array;
                }
            }
        }
        $input35 = $request->step_3_76;
        $field35 = 'step_3_76';
        $counter = 76;
        if (!empty($input35)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input35)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field35, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input35];
                    $userLottery[] = $array;
                }
            }
        }
        $input36 = $request->step_3_77;
        $field36 = 'step_3_77';
        $counter = 77;
        if (!empty($input36)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input36)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field36, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input36];
                    $userLottery[] = $array;
                }
            }
        }
        $input37 = $request->step_3_78;
        $field37 = 'step_3_78';
        $counter = 78;
        if (!empty($input37)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input37)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field37, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input37];
                    $userLottery[] = $array;
                }
            }
        }
        $input38 = $request->step_3_79;
        $field38 = 'step_3_79';
        $counter = 79;
        if (!empty($input38)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input38)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field38, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input38];
                    $userLottery[] = $array;
                }
            }
        }
        $input39 = $request->step_3_80;
        $field39 = 'step_3_80';
        $counter = 80;
        if (!empty($input39)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input39)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field39, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input39];
                    $userLottery[] = $array;
                }
            }
        }
        $input40 = $request->step_3_81;
        $field40 = 'step_3_81';
        $counter = 81;
        if (!empty($input40)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input40)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field40, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input40];
                    $userLottery[] = $array;
                }
            }
        }
        $input41 = $request->step_3_82;
        $field41 = 'step_3_82';
        $counter = 82;
        if (!empty($input41)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input41)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field41, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input41];
                    $userLottery[] = $array;
                }
            }
        }
        $input42 = $request->step_3_83;
        $field42 = 'step_3_83';
        $counter = 83;
        if (!empty($input42)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input42)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field42, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input42];
                    $userLottery[] = $array;
                }
            }
        }
        $input43 = $request->step_3_84;
        $field43 = 'step_3_84';
        $counter = 84;
        if (!empty($input43)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input43)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field43, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input43];
                    $userLottery[] = $array;
                }
            }
        }
        $input44 = $request->step_3_85;
        $field44 = 'step_3_85';
        $counter = 85;
        if (!empty($input44)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input44)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field44, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input44];
                    $userLottery[] = $array;
                }
            }
        }
        $input45 = $request->step_3_86;
        $field45 = 'step_3_86';
        $counter = 86;
        if (!empty($input45)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input45)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field45, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input45];
                    $userLottery[] = $array;
                }
            }
        }
        $input46 = $request->step_3_87;
        $field46 = 'step_3_87';
        $counter = 87;
        if (!empty($input46)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input46)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field46, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input46];
                    $userLottery[] = $array;
                }
            }
        }
        $input47 = $request->step_3_88;
        $field47 = 'step_3_88';
        $counter = 88;
        if (!empty($input47)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input47)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field47, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input47];
                    $userLottery[] = $array;
                }
            }
        }
        $input48 = $request->step_3_89;
        $field48 = 'step_3_89';
        $counter = 89;
        if (!empty($input48)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input48)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field48, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input48];
                    $userLottery[] = $array;
                }
            }
        }
        $input49 = $request->step_3_90;
        $field49 = 'step_3_90';
        $counter = 90;
        if (!empty($input49)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input49)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field49, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input49];
                    $userLottery[] = $array;
                }
            }
        }
        $input50 = $request->step_3_91;
        $field50 = 'step_3_91';
        $counter = 91;
        if (!empty($input50)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input50)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field50, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input50];
                    $userLottery[] = $array;
                }
            }
        }
        $input51 = $request->step_3_92;
        $field51 = 'step_3_92';
        $counter = 92;
        if (!empty($input51)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input51)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field51, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input51];
                    $userLottery[] = $array;
                }
            }
        }
        $input52 = $request->step_3_93;
        $field52 = 'step_3_93';
        $counter = 93;
        if (!empty($input52)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input52)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field52, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input52];
                    $userLottery[] = $array;
                }
            }
        }
        $input53 = $request->step_3_94;
        $field53 = 'step_3_94';
        $counter = 94;
        if (!empty($input53)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input53)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field53, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input53];
                    $userLottery[] = $array;
                }
            }
        }
        $input54 = $request->step_3_95;
        $field54 = 'step_3_95';
        $counter = 95;
        if (!empty($input54)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input54)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field54, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input54];
                    $userLottery[] = $array;
                }
            }
        }
        $input55 = $request->step_3_96;
        $field55 = 'step_3_96';
        $counter = 96;
        if (!empty($input55)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input55)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field55, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input55];
                    $userLottery[] = $array;
                }
            }
        }
        $input56 = $request->step_3_97;
        $field56 = 'step_3_97';
        $counter = 97;
        if (!empty($input56)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input56)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field56, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input56];
                    $userLottery[] = $array;
                }
            }
        }
        $input57 = $request->step_3_98;
        $field57 = 'step_3_98';
        $counter = 98;
        if (!empty($input57)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input57)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field57, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input57];
                    $userLottery[] = $array;
                }
            }
        }
        $input58 = $request->step_3_99;
        $field58 = 'step_3_99';
        $counter = 99;
        if (!empty($input58)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input58)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field58, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input58];
                    $userLottery[] = $array;
                }
            }
        }
        $input59 = $request->step_3_100;
        $field59 = 'step_3_100';
        $counter = 100;
        if (!empty($input59)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input59)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field59, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input59];
                    $userLottery[] = $array;
                }
            }
        }
        $input60 = $request->step_3_101;
        $field60 = 'step_3_101';
        $counter = 101;
        if (!empty($input60)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input60)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field60, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input60];
                    $userLottery[] = $array;
                }
            }
        }
        $input61 = $request->step_3_102;
        $field61 = 'step_3_102';
        $counter = 102;
        if (!empty($input61)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input61)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field61, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input61];
                    $userLottery[] = $array;
                }
            }
        }
        $input62 = $request->step_3_103;
        $field62 = 'step_3_103';
        $counter = 103;
        if (!empty($input62)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input62)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field62, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input62];
                    $userLottery[] = $array;
                }
            }
        }
        $input63 = $request->step_3_104;
        $field63 = 'step_3_104';
        $counter = 104;
        if (!empty($input63)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input63)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field63, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input63];
                    $userLottery[] = $array;
                }
            }
        }
        $input64 = $request->step_3_105;
        $field64 = 'step_3_105';
        $counter = 105;
        if (!empty($input64)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input64)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field64, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input64];
                    $userLottery[] = $array;
                }
            }
        }
        $input65 = $request->step_3_106;
        $field65 = 'step_3_106';
        $counter = 106;
        if (!empty($input65)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input65)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field65, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input65];
                    $userLottery[] = $array;
                }
            }
        }
        $input66 = $request->step_3_107;
        $field66 = 'step_3_107';
        $counter = 107;
        if (!empty($input66)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input66)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field66, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input66];
                    $userLottery[] = $array;
                }
            }
        }
        $input67 = $request->step_3_108;
        $field67 = 'step_3_108';
        $counter = 108;
        if (!empty($input67)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input67)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field67, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input67];
                    $userLottery[] = $array;
                }
            }
        }
        $input68 = $request->step_3_109;
        $field68 = 'step_3_109';
        $counter = 109;
        if (!empty($input68)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input68)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field68, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input68];
                    $userLottery[] = $array;
                }
            }
        }
        $input69 = $request->step_3_110;
        $field69 = 'step_3_110';
        $counter = 110;
        if (!empty($input69)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input69)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field69, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input69];
                    $userLottery[] = $array;
                }
            }
        }
        $input70 = $request->step_3_111;
        $field70 = 'step_3_111';
        $counter = 111;
        if (!empty($input70)) {
            $count = Lottery::where('id', $id)->where('correct_value', $input70)->count();
            if ($count == 0) {
                $validator->getMessageBag()->add($field70, 'Invalid Code');
            } else {
                $user_lottery = UserLottery::where('user_id', $id)->where('lottery_id', $counter)->count();
                if ($user_lottery == 0) {
                    $array = ['user_id' => $id, 'lottery_id' => $counter, 'code' => $input70];
                    $userLottery[] = $array;
                }
            }
        }
        if (count($validator->errors()) > 0) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->with('from_section', 3)
                ->withInput();
        } else {
            UserLottery::insert($userLottery);
            return redirect()->back();
        }

    }


}

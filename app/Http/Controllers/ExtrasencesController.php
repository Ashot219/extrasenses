<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtrasencesController extends Controller
{
    public function getAnswers(Request $request){
        $number = $request->get('the_number');
        $count_wrong = 7-rand(1, 6);
        $wrongs = 0;
        $check_arr = array();
        $extrasences_obj = $request->session()->get('extrasences');
        if (!$extrasences_obj){
            $extrasences_arr = array();
        }else{
            $extrasences_arr = json_decode($extrasences_obj, true);
        }
        $extrasences_arr['number'][] = $number;
        for ($i = 0; $i < 7; $i++){
            if ($wrongs == $count_wrong){
                $check_arr[] = $number;
            }else {
                $is_true = rand(0, 1);
                if ($is_true) {
                    $check_arr[] = $number;
                }else{
                    $check_arr[] = rand(10, 999);
                    $wrongs++;
                }
            }

            if ($number == $check_arr[$i]){
                $extrasences_arr['check'][$i][] = 1;
            }else{
                $extrasences_arr['check'][$i][] = 0;
            }
            $extrasences_arr['answer'][$i][] = $check_arr[$i];

        }

        $request->session()->put('extrasences', json_encode($extrasences_arr));
        return json_encode($check_arr);
    }
}

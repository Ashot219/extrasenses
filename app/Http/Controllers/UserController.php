<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $extrasences_obj = $request->session()->get('extrasences');
        if (!$extrasences_obj){
            $extrasences_arr = array();
        }else{
            $extrasences_arr = json_decode($extrasences_obj, true);
        }

        return view('home', [
            'extrasences_arr' => $extrasences_arr
        ]);
    }
}

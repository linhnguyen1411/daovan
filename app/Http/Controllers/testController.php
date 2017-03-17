<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vndict;

class testController extends Controller
{
    //
    public function test(Request $request)
    {
        $dv1 = $request->txt1;
        $dv2 = $request->txt2;
        $arr1 = (explode(' ', $dv1));
        $arr2 = (explode(' ', $dv2));
        $i = 0;
        $j = 0;
        for ($i; $i <= count($arr1) - 1; $i++) {
            for ($j; $j <= count($arr2) - 1; $j++) {
                if ($arr1[$i] == $arr2[$j]) {
                    $dv1 = str_replace($arr1[$i], '<p>' . $arr1[$i] . '</p>', $dv1);
                }
            }
        }
//        foreach ($arr1 as $a1){
//            foreach ($arr2 as $a2){
//                if ($a1 == $a2){
//                    $dv1 = str_replace($a1, '__' .$a1. '__', $dv1);
//                }
//            }
//        }

        return view('front.test', ['dv1' => $dv1, 'dv2' => $dv2, 'arr1' => $arr1]);
    }
}

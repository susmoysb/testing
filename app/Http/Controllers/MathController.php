<?php

namespace App\Http\Controllers;


class MathController extends Controller
{
    function area($number_1=null, $number_2=null){

        if($number_1 == null and $number_2 == null){
            return 'please give a number';
        }
        elseif ($number_1 != null and $number_2 != null) {
            return "Area is " . $number_1 * $number_2 ;
        }
        else{
            return "Area is " . 3.1416 * ($number_1 * $number_1) ;
        }
        // return $number_1 . " and " . $number_2;
    }
}

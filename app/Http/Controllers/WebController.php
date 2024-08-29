<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function myshop()
    {
        $address = "IT cp KKU";
        $mobilephone = "08888888888";
        $location = "khon Khen";
                return view('myshop',[
                    'address'=>$address,
                    'mobilephone'=>$mobilephone,
                     'location'=>$location]);
    }
}

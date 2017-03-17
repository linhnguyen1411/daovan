<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    //
    public function getData(){

        return view('front.meeting');
    }
}

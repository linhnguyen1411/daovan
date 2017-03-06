<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nganhhoc;

class indexController extends Controller
{
    public function getData()
    {
        $nganh = Nganhhoc::all();
        return view('front.main', ['nganh' => $nganh]);
    }

    public function postData(Request $request){

        if($request->hasFile('docx')){
            $nganh = $request->nganh;
            $file = $request -> file('docx');
            $format= $file->getClientOriginalExtension();
            if($format != 'docx' && $format !='txt'){
                return view('front.main')->with('thongbao', 'up file docx với txt thôi');
            }
            $name = $file->getClientOriginalName();
            $address = str_random(4) . "_" .$name;
        }

    }
}

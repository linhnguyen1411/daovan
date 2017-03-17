<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Nganhhoc;
use App\Keywords;
use Illuminate\Support\Facades\Input;

class keywordsController extends Controller
{
    //
    public function getData()
    {
        $nganh = Nganhhoc::all();
        return view('front.keywords.keywords', ['nganh' => $nganh]);
    }

    public function postData(Request $request)
    {
        $this->validate($request,
            [
                'keywords'=>'required|unique:keywords'
            ],
             [
                'keywords.required'=>'Bạn chưa nhập vào keywords',
                'keywords.unique'=>'Từ này đã có trong CSDL'
             ]);
        $kw = new Keywords;

        $kw->keywords = $request->keywords;
        $kw->id_nganh = $request->nganh;
        $kw->save();
        $nganh = Nganhhoc::all();
        return redirect('keywords/add')->with(['thongbao' => 'key words ' . $kw->keywords . ' lưu thành công !']);
    }


    //get list
    public function getList(){
        $nganh = Nganhhoc::all();
        return view('front.keywords.list',['nganh'=>$nganh]);
    }

    public function ajaxList($nganh){
        $kw= Keywords::where('id_nganh',$nganh)->paginate(10);
        $c = Keywords::where('id_nganh',$nganh)->count();
        $rt="  <thead>
                <tr>
                    <th>ID</th>
                    <th>Keywords</th>
                    <th>Ngành</th>
                    <th>Created_at</th>
                    <th>Edit_ad</th>
                </tr>
                </thead>";
        foreach ($kw as $k) {
            $rt=$rt."<tr>";
            $rt=$rt."<td>$k->id</td>";
            $rt=$rt."<td>$k->keywords</td>";
            $rt=$rt."<td>$k->id_nganh</td>";
            $rt=$rt."<td>$k->created_at</td>";
            $rt=$rt."<td>$k->updated_at</td>";
            $rt=$rt."<td><a href='#'>Edit</a></td>";
            $rt=$rt."<td><a href='#'>Delete</a></td>";
            $rt=$rt."</tr>";
        }
        $aj = '[';
        foreach ($kw as $k){
            $aj=$aj.'["'.$k->id.'",' ;
            $aj=$aj.'"'.$k->keywords.'",' ;
            $aj=$aj.'"'.$k->nganhhoc->nganhhoc.'",' ;
            $aj=$aj.'"'.$k->created_at.'",' ;
            $aj=$aj.'"'.$k->updated_at.'"]' ;
        }
        $aj = $aj.'];';
        dd($aj);
            return response()->json([

            ]);
        //return redirect('keywords/list',['kw'=>$kw]);
    }
}

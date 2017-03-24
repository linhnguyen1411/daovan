<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
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
    public function getList(Request $request){
        $nganh = Nganhhoc::all();
        $id_nganh=$request->nganh;
        $kw = Keywords::where('id_nganh',$id_nganh)->paginate(10);
        return view('front.keywords.list',['nganh'=>$nganh,'kw'=>$kw,'request'=>$id_nganh]);
    }

    public function postList(Request $request){
        $nganh = Nganhhoc::all();
        $kw = Keywords::where('id_nganh',$request->nganh)->paginate(10);

        return view('front.keywords.list',compact($kw),['kw'=>$kw,'nganh'=>$nganh,'request'=>$request->nganh]);
    }

    public function delete($id){
        $ii= Keywords::where('id',$id)->get();
        $nganh = Nganhhoc::all();
        foreach ($ii as $i){
            $request = $i->id_nganh;
        }
        $kw = Keywords::where('id_nganh',$request)->paginate(10);
        $delete = Keywords::where('id',$id)->delete();
        //return redirect('keywords/list',['request'=>$page])->with('thongbao', 'xóa keyword thành công');
        return redirect('keywords/list',['kw'=>$kw,'request'=>$request,'nganh'=>$nganh])->with('thongbao','xóa thành công');
    }

}

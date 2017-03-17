<?php

namespace App\Http\Controllers;

use App\Keywords;
use Illuminate\Http\Request;
use App\Nganhhoc;
use App\Store;
use App\Vndict;
use App\Tudon;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function getData()
    {
        $nganh = Nganhhoc::all();
        return view('front.main', ['nganh' => $nganh]);
    }

    public function readdocx($filename)
    {
        $striped_content = '';
        $content = '';

        $zip = zip_open($filename);

        if (!$zip || is_numeric($zip)) return false;

        while ($zip_entry = zip_read($zip)) {

            if (zip_entry_open($zip, $zip_entry) == FALSE) continue;

            if (zip_entry_name($zip_entry) != "word/document.xml") continue;

            $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

            zip_entry_close($zip_entry);
        }// end while

        zip_close($zip);

        $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
        $content = str_replace('</w:r></w:p>', "\r\n", $content);
        $content = mb_strtolower($content, 'utf8');
        //$content = str_replace(' ','_',$content); //thay space bằng _
        $striped_content = strip_tags($content);
        return $striped_content;
    }

    public function keywords($a, $b)
    {
        if (strpos($a, $b) == true) {
            echo 'bằng đó';
        }
    }

    public function postData(Request $request)
    {

        $this->validate($request,
            [
                'docx' => 'required',
            ],
            [
                'docx.required' => 'Bạn chưa chọn tệp tin đính kèm',
            ]);
        if ($request->hasFile('docx')) {
            $up = new Store;
            $up->nganh = $request->nganh;
            $nganh = $request->nganh;
            $file = $request->file('docx');
            $format = $file->getClientOriginalExtension();
            if ($format != 'docx' && $format != 'txt') {
                return view('front.main')->with('thongbao', 'up file docx với txt thôi');
            }
            $name = $file->getClientOriginalName();
            $address = str_random(4) . "_" . $name;
            if ($request->nganh == 1) {
                $file->move("file/CNTT", $address);
                $up->address = "file/CNTT/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 2) {
                $file->move("file/XD", $address);
                $up->address = "file/XD/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 3) {
                $file->move("file/KTR", $address);
                $up->address = "file/KTR/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 4) {
                $file->move("file/DTVT", $address);
                $up->address = "file/DTVT/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 5) {
                $file->move("file/MT", $address);
                $up->address = "file/MT/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 6) {
                $file->move("file/CNTP", $address);
                $up->address = "file/CNTP/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 7) {
                $file->move("file/QTKD", $address);
                $up->address = "file/QTKD/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 8) {
                $file->move("file/QTKDQT", $address);
                $up->address = "file/QTKDQT/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 9) {
                $file->move("file/DL", $address);
                $up->address = "file/DL/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 10) {
                $file->move("file/KDTM", $address);
                $up->address = "file/KDTM/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 11) {
                $file->move("file/TCNH", $address);
                $up->address = "file/TCNH/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 12) {
                $file->move("file/KE", $address);
                $up->address = "file/KT/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 13) {
                $file->move("file/NN", $address);
                $up->address = "file/NN/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 14) {
                $file->move("file/XHNV", $address);
                $up->address = "file/XHNV/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 15) {
                $file->move("file/YD", $address);
                $up->address = "file/YD/" . $address;
                $up->keywords = "test";
                $up->save();
            } elseif ($request->nganh == 16) {
                $file->move("file/LKT", $address);
                $up->address = "file/LKT/" . $address;
                $up->keywords = "test";
                $up->save();
            }
            if ($up->save()) {
                $nganh = Nganhhoc::all();
                $file = Store::where('nganh', $request->nganh)->get();
                foreach ($file as $f) {
                    $content = $this->readdocx($f->address);
                }

                $keywords = Keywords::where('id_nganh', $request->nganh)->get();
                foreach ($keywords as $kw)
                $convert = $content;
                $dict = Vndict::all();
//                foreach ($dict as $d){
//                    $d->words = chop($d->words);
//                    if (strlen($d->words) ==1){
//                        $delete = DB::delete('delete from vndict WHERE words = ?',[$d->words]);
//                    }
//                    if (strpos($d->words,' ')!=true){
//                        $tudon = new Tudon;
//                        $tudon->tudon = $d->words;
//                        $delete = DB::delete('delete from vndict WHERE words = ?',[$d->words]);
//                        $tudon->save();
//                    }
//                    $d->save();
//                }

                $kws = "";
                foreach ($dict as $d) {
                    if (strpos($content, $d->words) == true) {
                        $convert = str_replace($d->words, '__' . $d->words . '__', $convert);
                        if ($kws == null) {
                            $kws = $d->words;
                        } else
                            $kws = $kws . ", " . $d->words;
                    }
                }
//                foreach ($keywords as $kw){
//                    if (strpos($content,$kw->keywords)==true){
//                        $convert = str_replace($kw->keywords,'__'.$kw->keywords.'__',$convert);
//                        if($kws == null){
//                            $kws =$kw->keywords ;
//                        }
//                        else
//                            $kws = $kws . ", " . $kw->keywords ;
//                    }
//                }
//                    $up->keywords = $kws;
//                    $up->save();
                }
        }
        return redirect('index')->with(['thongbao' => 'File của bạn: ','content' => $content,'convert' => $convert]);
    }
}

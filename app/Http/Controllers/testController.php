<?php

namespace App\Http\Controllers;

use App\Store;
use App\Tudon;
use Illuminate\Http\Request;
use App\Vndict;

class testController extends Controller
{
    //
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
    public function duplicate($id){
        $file = Store::where('nganh',$id)->get();
        $dem =0;
        $i=1;
        $arr[$i] = "";
        foreach ($file as $f){
            $dem++;
            $content = $this->readdocx($f->address);
        }
    }
    public function test(Request $request)
    {
        $dv1 = $request->txt1;
        $dv2 = $request->txt2;
        $arr1 = (explode(' ', $dv1));
        $arr2 = (explode(' ', $dv2));
        $content = $dv1;
        $txt1 = $dv1;
        $txt2 = $dv2;
        $keywords = Vndict::all();
        $tudon = Tudon::all();
        $test = $arr1;
        $arr3 = $dv1;
        $dem = 0;
        $arr4[] = "";
        for ($i = 0; $i < count($arr1); $i++) {
            for ($j = 0; $j < count($arr2); $j++) {

                    if (str_replace('.','',mb_strtolower($arr1[$i])) == str_replace('.','',mb_strtolower($arr2[$j]))) {
                        //$arr3 = str_replace($arr1[$i], '__' . $arr1[$i] . '__', $arr3);
                        $test[$i]= '<span style="color: red !important;">'.$arr1[$i]."</span>"." ";
                        array_push($arr4,$arr1[$i]);
                        $dem++;
                        break;
                    } else {
                        $test[$i] = '<span>'.$test[$i]."</span> ";
                       // $arr3 = str_replace($arr1[$i], ' ' . $arr1[$i] . ' ', $arr3);
                }
            }
        }
      //  $arr4 = array_unique( $arr4 );
        $daovan = ($dem / count($arr1)) * 100;


        if ($request->hasFile('docx1')){
            $file = $request->file('docx1');
            $filename1 = $file->getClientOriginalName();
            $content =  $this->readdocx($request->file('docx1'));
            $content = chop($content);
//            $handle = fopen("C:\\Users\\Mycomputer\\Desktop\\test1.docx");
            $arr1 = explode(' ',$content) ;

           // $arr2 = $this-> readdocx("C:/Users/My Computer/Desktop/test1.docx");
            $file2 = $request->file('docx2');
            $filename2 = $file->getClientOriginalName();
            $arr2 = $this->readdocx($request->file('docx2'));
            $arr2 = chop($arr2);
            $dv2 = $arr2;
            $arr2 = explode(' ',$arr2);
            $test= $arr1;
            for ($i = 0; $i < count($arr1); $i++) {
                for ($j = 0; $j < count($arr2); $j++) {
                    if (trim(str_replace('.','',mb_strtolower($arr1[$i]))) == trim(str_replace('.','',mb_strtolower($arr2[$j])))) {
                        //$arr3 = str_replace($arr1[$i], '__' . $arr1[$i] . '__', $arr3);
                        $test[$i]= '<span style="color: red !important;">'.$arr1[$i]."</span>"." ";
                        array_push($arr4,$arr1[$i]);
                        $dem++;
                        break;
                    } else {
                        $test[$i] = '<span>'.$test[$i]."</span> ";
                        // $arr3 = str_replace($arr1[$i], ' ' . $arr1[$i] . ' ', $arr3);
                    }
                }
            }
            $daovan = ($dem / count($arr1)) * 100;

        }


        return view('front.test', ['dv1' => $dv1, 'dv2' => $dv2, 'arr1' => $arr1, 'arr3' => $arr3, 'daovan' => $daovan,'test'=>$test]);
    }
}

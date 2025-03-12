<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViDuController extends Controller
{
    //
    function vidu2(){
        return view('vidu2');
        }
        function theloai($id)
        {
        $data = DB::select("select * from sach where the_loai = ?",[$id]);
        return view("vidusach.index", compact("data"));
        }
        function viduten()
        {
        $name = "Nana";
        return view("ten", compact("name"));
        }
        
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FIleUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload'); //memanggil blade file-upload yg berisi form
    }

    public function prosesFileUpload(Request $request){  //memproses hasil submit form
        return "Pemrosesan file upload di sini"; 
    }
}
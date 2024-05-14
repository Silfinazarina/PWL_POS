<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FIleUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload'); //memanggil blade file-upload yg berisi form
    }

    public function prosesFileUpload(Request $request){  //memproses hasil submit form
        // validasi inputan form
        $request->validate([
            'berkas'=>'required|file|image|max:500',]);  
            $textFile = $request->berkas->getClientOriginalName(); //mengambil extension file asal
            $namaFile = 'web-'.time().".".$textFile; //menyambung 3 string

            $path = $request->berkas->move('gambar', $namaFile);
            $path = str_replace("\\","//",$path);
            echo "Variabel path berisi:$path <br>";

            $pathBaru = asset('storage/'.$namaFile);
            echo "proses upload berhasil, data disimpan pada:$path";
            echo "<br>";
            echo "Tampilkan link:<a href='$pathBaru'>$pathBaru</a>";
    }
}

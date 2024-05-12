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
            'berkas'=>'required|file|image|max:500',]);     //file:memastikan file berhasil diupload
            echo $request->berkas->getClientOriginalName()."lolos validasi";

        // dump($request->berkas);                          -->langsung men-dump sesuai name dari input
        // return "Pemrosesan file upload di sini"; 

        // informasi file upload
        // if ($request->hasFile('berkas')) {
        //     echo "path(): ".$request->berkas->path();      //menampilkan alamat path file
        //     echo "<br>";
        //     echo "extension(): ".$request->berkas->extension();  //menampilkan extension file
        //     echo "<br>";
        //     echo "getClientOriginalExtension(): ".
        //         $request->berkas->getClientOriginalExtension();  //menampilkan extension yang diambil dari nama file
        //     echo "<br>";
        //     echo "getMimeType(): ".$request->berkas->getMimeType(); //menampilkan mimetype dri file yg diupload
        //     echo "<br>";
        //     echo "getClientOriginalName(): ". 
        //     $request->berkas->getClientOriginalName();  //menampilkan nama asli dari file yang diupload
        //     echo "<br>";
        //     echo "getSize(): " .$request->berkas->getSize();  //menampilkan ukuran file yang di upload (dalam satuan byte)
        // }else{
        //     echo "Tidak ada berkas yang diupload";
        // }
    }
}
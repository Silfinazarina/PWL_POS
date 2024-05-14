<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadRenameController extends Controller
{
    public function fileUploadRename(){
        return view('file-upload-rename'); 
    }

    public function prosesFileUploadRename(Request $request){
        $request->validate([
            'nama'=>'required|string',
            'berkas'=>'required|file|image|max:500'
        ]);
        $textFile = $request->berkas->getClientOriginalExtension(); //mengambil extension file asal
        $nama_File = $request->input('nama'); 
        $namaFile = 'web-'.time().".".$nama_File.".".$textFile;

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\","//",$path);

        $pathBaru = asset('gambar/'.$namaFile);
        echo "Gambar berhasil diupload di <a href='$pathBaru'>$nama_File.$textFile</a>";
        echo "<br><br>";
        echo "<img src='$pathBaru' alt=Gambar style='max-width: 300px; max-height:300px;'>";
        
    }
}
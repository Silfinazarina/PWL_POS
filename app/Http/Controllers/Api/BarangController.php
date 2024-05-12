<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{

    //jobsheet 10
    public function index(){
         return BarangModel::all();
     }

     public function store(Request $request){
        $barang = BarangModel::create($request->all());
         return response()->json($barang, 201);
     }

    public function show($id){
        $barang = BarangModel::find($id);
        if(!$barang) {
            return response()->json(['message' => 'Barang yang dicari tidak ditemukan'], 404);
        }
        return response()->json($barang);
    }
    
    public function update(Request $request, $id){
        $barang = BarangModel::find($id);
        if(!$barang) {
            return response()->json(['message' => 'Barang yang dicari tidak ditemukan'], 404);
        }
        
        $barang->update($request->all());
        
        return response()->json($barang);
    }
    
    public function destroy(BarangModel $user){
        $user->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Data terhapus',
        ]);
    }

    public function __invoke(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'kategori_id' => 'required',
            'barang_kode' => 'required',
            'barang_nama'=> 'required',
            'harga_beli' => 'required',
            'harga_jual'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        //if validations fails
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $image = $request->file('image');

        //create Barang
        $Barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli'=> $request->harga_beli,
            'harga_jual'=> $request->harga_jual,
            'image' => $image->hashName()
        ]);

        //return response JSON user is created
        if($Barang){
            return response()->json([
                'success' => true,
                'Barang' => $Barang,
            ], 201);
        }

        //return JSON process insert failed
        return response()->json([
            'success' => false,
        ], 409);
    }
}

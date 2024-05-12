<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenjualanController extends Controller
{
    public function index(){
        return PenjualanModel::all();
    }

    public function __invoke(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'pembeli' => 'required|string',
            'penjualan_kode'=> 'required|string',
            'penjualan_tanggal' => 'required|date',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        //if validations fails
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $image = $request->file('image');

        //create Beli
        $Beli = PenjualanModel::create([
            'user_id' => $request->user_id,
            'pembeli' => $request->pembeli,
            'penjualan_kode' => $request->penjualan_kode,
            'penjualan_tanggal'=> $request->penjualan_tanggal,
            'image' => $image->hashName()
        ]);

        //return response JSON user is created
        if($Beli){
            return response()->json([
                'success' => true,
                'Beli' => $Beli,
            ], 201);
        }

        //return JSON process insert failed
        return response()->json([
            'success' => false,
        ], 409);
    }
}
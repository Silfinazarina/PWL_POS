<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        //tambah data user dengan Eloquent Model
        $data = [
            'nama' => 'Pelanggan Pertama'
        ];
        UserModel::where('username', 'customer-1')->update($data);//tambahkan data ke tabel m_user

        //coba akses model userModel
        $user = UserModel::all();
        return view('user', ['data'=>$user]);
    }
}

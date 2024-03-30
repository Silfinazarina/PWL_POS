<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\LevelModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable){
        return $dataTable->render('user.index');
    }

    public function tambah(){
        $levelIds = LevelModel::pluck('level_id');
        return view('user.create', ['levelIds' => $levelIds]);
    }

    public function tambah_simpan(Request $request){
        $validated = $request->validate([
            'level_id' => 'required',
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
        ]); 

        UserModel::create([
            'username'=>$request->username,
            'nama'=>$request->nama,
            'password'=>Hash::make($request->password),
            'level_id'=>$request->levelID
        ]);
        return redirect ('/user');
    }

    public function edit_simpan($id, Request $request){
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        //apa ada password baru?
        if (!empty($request->password)) {
            // Jika ada, maka kita hash kata sandi baru
            $user->password = Hash::make($request->password);
        } else {
            // Jika tidak, maka kita biarkan kata sandi tetap sama
            $user->password = $user->password;
        }
        $user->level_id = $request->levelID;

        $user->save();
        return redirect('/user');
    }

    public function hapus($id){
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }

    public function edit($id)
    {
        $user = UserModel::find($id);
        $levelIds = LevelModel::pluck('level_id');
        return view('user.edit', ['data' => $user, 'levelIds' => $levelIds]);
    }

    //jobsheet4

    // public function index()
    // {
    //    $user = UserModel::all();
    //    return view('user', ['data'=> $user]);

    //    $user = UserModel::with('level')->get();
    //    return view('user.index', ['data'=> $user]);
    // }

    
    // public function ubah($id){
    //     $user = UserModel::find($id);
    //     return view('user.edit', ['data'=> $user]);
    // }

}
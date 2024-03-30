<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LevelModel;
use App\DataTables\LevelDataTable;
use Illuminate\Http\RedirectResponse;

class LevelController extends Controller
{

    public function index(LevelDataTable $dataTable){
        return $dataTable->render('level.index');
    }

    public function tambah()
    {
        return view('level.create');
    }

    public function tambah_simpan(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'levelKode' => 'required',
            'levelNama' => 'required',
        ]); 

        LevelModel::create([
            'level_kode'=>$request->levelKode,
            'level_nama'=>$request->levelNama,
        ]);

        return redirect ('/level');
    }


    public function edit($id){
        $level = LevelModel::find($id);
        return view('level.edit', ['data'=> $level]);
    }


    public function edit_simpan($id, Request $request){
        $level = LevelModel::find($id);

        $level->level_kode = $request->levelKode;
        $level->level_nama = $request->levelNama;

        $level->save();
        return redirect('/level')->with('success', 'Level berhasil diperbarui.');
    }

    
    public function hapus($id){
        $level = LevelModel::find($id);
        $level->delete();

        return redirect('/level');
    }
}


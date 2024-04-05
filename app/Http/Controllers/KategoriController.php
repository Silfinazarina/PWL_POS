<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title'=>'Kategori Barang',
            'list'=> ['Home', 'Kategori']
        ];

        $page = (object)[
            'title'=> 'Daftar kategori yang terdaftar dalam sistem'
        ];

        $activeMenu = 'kategori';       //set menu yang sedang aktif
        $kategori = KategoriModel::all(); //ambil data kategori untuk filter kategori
        return view('kategori.index', ['breadcrumb' => $breadcrumb, 'page'=>$page, 'kategori'=> $kategori, 
        'activeMenu' => $activeMenu]);
    }

    // Ambil data kategori dalam bentuk json untuk datatables
    public function list(Request $request)
    {
        $kategori = KategoriModel::select('kategori_id', 'kategori_kode', 'kategori_nama');

        return DataTables::of($kategori)
            ->addIndexColumn()                          // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addColumn('aksi', function ($kategori) {  // menambahkan kolom aksi
                $btn = '<a href="'.url('/kategori/' . $kategori->kategori_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/kategori/' . $kategori->kategori_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'. url('/kategori/'.$kategori->kategori_id).'">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })

            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }

    public function create(){
        $breadcrumb = (object)[
            'title'=>'Tambah Kategori',
            'list'=> ['Home', 'Kategori', 'Tambah']
        ];

        $page = (object)[
            'title'=> 'Tambah kategori baru'
        ];

        $activeMenu = 'kategori'; //set menu yang sedang aktif
        return view('kategori.create', ['breadcrumb' => $breadcrumb, 'page'=>$page, 'activeMenu' => $activeMenu]);
    }

    // Menyimpan data kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'kategoriKode' => 'required|string|min:3|max:5|unique:m_kategori,kategori_kode',
            'kategoriNama' => 'required|string|max:100',
        ]);

        KategoriModel::create([
            'kategori_kode' => $request->kategoriKode,
            'kategori_nama' => $request->kategoriNama,
        ]);

        return redirect('/kategori')->with('success', 'Data kategori berhasil disimpan');
    }

    //menampilkan detail kategori
    public function show(string $id)
    {
        $kategori = KategoriModel::find($id);

        $breadcrumb = (object)[
            'title'=>'Detail Kategori',
            'list'=> ['Home', 'Kategori', 'Detail']
        ];

        $page = (object)[
            'title'=> 'Detail kategori'
        ];

        $activeMenu = 'kategori'; //set menu yang sedang aktif
        return view('kategori.show', ['breadcrumb' => $breadcrumb, 'page'=>$page, 'kategori'=>$kategori, 'activeMenu' => $activeMenu]);
    }

    //Menampilkan halaman form edit kategori
    public function edit(String $id)
    {
        $kategori = KategoriModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Edit Kategori',
            'list'  => ['Home', 'Kategori', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit kategori'
        ];

        $activeMenu = 'kategori'; //set menu yang sedang aktif

        return view('kategori.edit', ['breadcrumb'=> $breadcrumb, 'page'=> $page, 
            'kategori'=> $kategori, 'activeMenu'=> $activeMenu
        ]);
    }

    // Menyimpan perubahan data kategori
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategoriKode' => 'required|string|min:3|max:5|unique:m_kategori,kategori_kode,' . $id . ',kategori_id',
            'kategoriNama' => 'required|string|max:100',
        ]);

        KategoriModel::find($id)->update([
            'kategori_kode' => $request->kategoriKode, 
            'kategori_nama' => $request->kategoriNama, 
        ]);

        return redirect('/kategori')->with('success', 'Data kategori berhasil diubah');
    }


    // Menghapus data kategori
    public function destroy(string $id)
    {
        $check = KategoriModel::find($id);
        if (!$check) {
            return redirect('/kategori')->with('error', 'Data kategori tidak ditemukan');
        }

        try {
            KategoriModel::destroy($id);
            return redirect('/kategori')->with('success', 'Data kategori berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/kategori')->with('error', 'Data kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }
}
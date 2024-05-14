<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FIleUploadController;
use App\Http\Controllers\FileUploadRenameController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StokController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Routing\RouteUri;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// //jobsheet 4
// Route::get('/user', [UserController::class, 'index'])->name('/user');

// //Praktikum 2.6
// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');

//jobsheet 7
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);          //menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      //menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);   //menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         //menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       //menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  //menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     //menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); //menghapus data user
});

Route::group(['prefix' => 'level'], function() {
    Route::get('/', [LevelController::class, 'index']);          //menampilkan halaman awal Level
    Route::post('/list', [LevelController::class, 'list']);      //menampilkan data Level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);   //menampilkan halaman form tambah Level
    Route::post('/', [LevelController::class, 'store']);         //menyimpan data Level baru
    Route::get('/{id}', [LevelController::class, 'show']);       //menampilkan detail Level
    Route::get('/{id}/edit', [LevelController::class, 'edit']);  //menampilkan halaman form edit Level
    Route::put('/{id}', [LevelController::class, 'update']);     //menyimpan perubahan data Level
    Route::delete('/{id}', [LevelController::class, 'destroy']); //menghapus data Level
});

Route::group(['prefix' => 'kategori'], function() {
    Route::get('/', [KategoriController::class, 'index']);          //menampilkan halaman awal Kategori
    Route::post('/list', [KategoriController::class, 'list']);      //menampilkan data Kategori dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']);   //menampilkan halaman form tambah Kategori
    Route::post('/', [KategoriController::class, 'store']);         //menyimpan data Kategori baru
    Route::get('/{id}', [KategoriController::class, 'show']);       //menampilkan detail Kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);  //menampilkan halaman form edit Kategori
    Route::put('/{id}', [KategoriController::class, 'update']);     //menyimpan perubahan data Kategori
    Route::delete('/{id}', [KategoriController::class, 'destroy']); //menghapus data Kategori
});

Route::group(['prefix' => 'barang'], function() {
    Route::get('/', [BarangController::class, 'index']);          //menampilkan halaman awal barang
    Route::post('/list', [BarangController::class, 'list']);      //menampilkan data barang dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']);   //menampilkan halaman form tambah barang
    Route::post('/', [BarangController::class, 'store']);         //menyimpan data barang baru
    Route::get('/{id}', [BarangController::class, 'show']);       //menampilkan detail barang
    Route::get('/{id}/edit', [BarangController::class, 'edit']);  //menampilkan halaman form edit barang
    Route::put('/{id}', [BarangController::class, 'update']);     //menyimpan perubahan data barang
    Route::delete('/{id}', [BarangController::class, 'destroy']); //menghapus data barang
});

Route::group(['prefix' => 'stok'], function() {
    Route::get('/', [StokController::class, 'index']);          //menampilkan halaman awal stok
    Route::post('/list', [StokController::class, 'list']);      //menampilkan data stok dalam bentuk json untuk datatables
    Route::get('/create', [StokController::class, 'create']);   //menampilkan halaman form tambah stok
    Route::post('/', [StokController::class, 'store']);         //menyimpan data stok baru
    Route::get('/{id}', [StokController::class, 'show']);       //menampilkan detail stok
    Route::get('/{id}/edit', [StokController::class, 'edit']);  //menampilkan halaman form edit stok
    Route::put('/{id}', [StokController::class, 'update']);     //menyimpan perubahan data stok
    Route::delete('/{id}', [StokController::class, 'destroy']); //menghapus data stok
});

Route::group(['prefix' => 'penjualan'], function() {
    Route::get('/', [PenjualanController::class, 'index']);          //menampilkan halaman awal penjualan
    Route::post('/list', [PenjualanController::class, 'list']);      //menampilkan data penjualan dalam bentuk json untuk datatables
    Route::get('/create', [PenjualanController::class, 'create']);   //menampilkan halaman form tambah penjualan
    Route::post('/', [PenjualanController::class, 'store']);         //menyimpan data penjualan baru
    Route::get('/{id}', [PenjualanController::class, 'show']);       //menampilkan detail penjualan
    Route::get('/{id}/edit', [PenjualanController::class, 'edit']);  //menampilkan halaman form edit penjualan
    Route::put('/{id}', [PenjualanController::class, 'update']);     //menyimpan perubahan data penjualan
    Route::delete('/{id}', [PenjualanController::class, 'destroy']); //menghapus data penjualan
});


//jobsheet 9
Route::get('login',[AuthController::class, 'index'])->name('login');
Route::get('register',[AuthController::class, 'register'])->name('register');
Route::post('proses_login',[AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');
Route::post('proses_register',[AuthController::class, 'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group para routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan manager akan diarahkan ke UserController

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['Cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['Cek_login:2']], function () {
        Route::resource('manager', ManagerController::class);
    });
});

//jobsheet12
//praktikum
//menampilkan form pada fiileUpload() :
Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);        
//pemrosesan form pada prosesFileUpload() :
Route::post('/file-upload', [FileUploadController::class, 'prosesFileUpload']); 
//method post digunakan karena menjadi tujuan saat form di submit //

//tugas
Route::get('/file-upload-rename', [FileUploadRenameController::class, 'fileUploadRename']);  
Route::post('/file-upload-rename', [FileUploadRenameController::class, 'prosesFileUploadRename']); 

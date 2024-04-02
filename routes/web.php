<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

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


//For user (jobsheet 5)
//pembenahan
// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
// //pembenahan
// Route::post('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
// //pembenahan
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->
//         name('/user/tambah_simpan');
//pembenahan
//Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
//pembenahan
//Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');


//for user (admin LTE)
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'tambah'])->name('user.create');
Route::post('/user', [UserController::class, 'tambah_simpan']);
Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('/user/edit');
Route::put('user/edit_simpan/{id}', [UserController::class, 'edit_simpan'])->name('/user/edit_simpan');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');

//For kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('kategori/edit_simpan/{id}', [KategoriController::class, 'edit_simpan'])->name('/kategori/edit_simpan');
Route::get('kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');


//For level
Route::get('/level/create', [LevelController::class, 'tambah'])->name('level.create');
Route::post('/level', [LevelController::class, 'tambah_simpan']);
Route::get('/level', [LevelController::class, 'tambah_simpan']);
Route::get('/level', [LevelController::class, 'index']);
Route::get('level/edit/{id}', [LevelController::class, 'edit'])->name('level.edit');
Route::put('level/edit_simpan/{id}', [LevelController::class, 'edit_simpan'])->name('level.edit_simpan');
Route::get('level/hapus/{id}', [LevelController::class, 'hapus'])->name('level.hapus');


//resource prak D js 6
Route::resource('m_user', POSController ::class);


//jobsheet 7
Route::get('/', [WelcomeController::class, 'index']);
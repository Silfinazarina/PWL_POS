<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


//Jobsheet 4
Route::get('/level', [LevelController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);//->name('/user');

//For user
//pembenahan
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
//pembenahan
Route::post('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
//pembenahan
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->
        name('/user/tambah_simpan');
//pembenahan
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
//pembenahan
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');
//pembenahan
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');


//For kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('kategori/edit/{id}', [KategoriController::class, 'edit'])->name('/kategori/edit');
Route::put('kategori/edit_simpan/{id}', [KategoriController::class, 'edit_simpan'])->name('/kategori/edit_simpan');
Route::get('/hapus/{id}', [KategoriController::class, 'hapus'])->name('/kategori/hapus');



//JOBSHEET 6 - for level
Route::get('level/tambah', [LevelController::class, 'tambah'])->name('/level/tambah');



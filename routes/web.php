<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

// Kamar [fasilitas, harga, detail]

Route::get('/detailKamar', function () {
    return view('kamar.detailKamar');
})->name('detailKamar');

Route::get('/hargaKamar', function () {
    return view('kamar.hargaKamar');
})->name('hargaKamar');

Route::get('/fasilitasKamar', function () {
    return view('kamar.fasilitasKamar');
})->name('fasilitasKamar');

// 

Route::get('/galeri',function(){
    return view('pages.galeri');
})->name('galeri');

Route::get('/profil',function(){
    return view('pages.profil');
})->name('profil');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Auth::routes();


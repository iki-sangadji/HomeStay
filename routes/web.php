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

Route::get('/tambahKamar',function(){
    return view('kamar.tambahKamar');
})->name('tambahKamar');

Route::get('/ubahKamar',function(){
    return view('kamar.ubahkamar');
})->name('ubahKamar');


Route::get('/hargaKamar', function () {
    return view('kamar.hargaKamar');
})->name('hargaKamar');

Route::get('/fasilitasKamar', function () {
    return view('kamar.fasilitasKamar');
})->name('fasilitasKamar');

// end kelola kamar

// Galeri Objek Wisata [CRUD] 
Route::get('/galeri',function(){
    return view('galeri.galeri');
})->name('galeri');

// end Galeri

Route::get('/profil',function(){
    return view('pages.profil');
})->name('profil');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/paketwisata', function () {
    return view('pages.paketwisata');
})->name('paketwisata');

Route::get('/tambah_paket_wisata', function () {
    return view('pages.tambah_paket_wisata');
})->name('tambah_paket_wisata');

Route::get('/fasilitashomestay', function () {
    return view('pages.fasilitashomestay');
})->name('fasilitashomestay');

Auth::routes();


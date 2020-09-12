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

Route::get('/tambahSpot',function(){
    return view('galeri.tambahSpot');
})->name('tambahSpot');

Route::get('/ubahSpot',function(){
    return view('galeri.ubahSpot');
})->name('ubahSpot');

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

Route::get('/edit_paket_wisata', function () {
    return view('pages.edit_paket_wisata');
})->name('edit_paket_wisata');

Route::get('/ubah_destinasi', function () {
    return view('pages.ubah_destinasi');
})->name('ubah_destinasi');

Route::get('/tambah_destinasi', function () {
    return view('pages.tambah_destinasi');
})->name('tambah_destinasi');

Route::get('/fasilitashomestay', function () {
    return view('pages.fasilitashomestay');
})->name('fasilitashomestay');

Route::get('/ubah_fasilitas', function () {
    return view('pages.ubah_fasilitas');
})->name('ubah_fasilitas');

Route::get('/tambah_fasilitas', function () {
    return view('pages.tambah_fasilitas');
})->name('tambah_fasilitas');

Auth::routes();

//Kamar
Route::get('/harga-kamar','InfoController@harga')->name('harga_kamar');
Route::post('/update-harga-kamar','InfoController@updateInfo')->name('update_info');
Route::get('/fasilitas-kamar','FasilitasKamarController@index')->name('fasilitas_kamar');
Route::post('/store-kamar','FasilitasKamarController@store')->name('store_fasilitas_kamar');
Route::post('/update-kamar/{id}','FasilitasKamarController@update')->name('update_fasilitas_kamar');
Route::get('/delete-kamar/{id}','FasilitasKamarController@destroy')->name('delete_fasilitas_kamar');
Route::get('/kamar','KamarController@index')->name('index_kamar');
Route::post('/kamar/store','KamarController@store')->name('store_kamar');
Route::get('/kamar/edit-kamar/{id}','KamarController@edit')->name('edit_kamar');
Route::post('/kamar/update-kamar/{id}','KamarController@update')->name('update_kamar');
Route::get('/kamar/delete-kamar/{id}','KamarController@destroy')->name('delete_kamar');
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

Route::get('/foo', function () {
    Artisan::call('storage:link');
    return redirect("/");
});

Route::get('/','GaleriController@home')->name('beranda');

// Kamar [fasilitas, harga, detail]

Route::get('/detailKamar', function () {
    return view('kamar.detailKamar');
})->name('detailKamar');

Route::get('/tambahKamar',function(){
    return view('kamar.tambahKamar');
})->name('tambahKamar');


// end kelola kamar

// end Galeri
Route::get('/tambah-galeri', function () {
    return view('galeri.tambahSpot');
})->name('tambahSpot');


Route::get('/profil',function(){
    return view('pages.profil');
})->name('profil');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

// paket Wisata

Route::get('/tambah_paket_wisata', function () {
    return view('pages.tambah_paket_wisata');
})->name('tambah_paket_wisata');



Route::get('/tambah_destinasi', function () {
    return view('pages.tambah_destinasi');
})->name('tambah_destinasi');
//end destinasi

// fasilitas homestay


Route::get('/tambah_fasilitas', function () {
    return view('pages.tambah_fasilitas');
})->name('tambah_fasilitas');
//end fasilitas homestay

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

//Fasilitas home stay
Route::get('/fasilitas-home-stay','FasilitasHomeStayController@index')->name('fasilitas_home_stay');
Route::post('/store-home-stay','FasilitasHomeStayController@store')->name('store_fasilitas_home_stay');
Route::post('/update-home-stay/{id}','FasilitasHomeStayController@update')->name('update_fasilitas_home_stay');
Route::get('/delete-home-stay/{id}','FasilitasHomeStayController@destroy')->name('delete_fasilitas_home_stay');
//Galri
Route::get('/galeri','GaleriController@index')->name('galeri');
Route::post('/store-galeri','GaleriController@store')->name('store_galeri');
Route::get('/edit-galeri/{id}','GaleriController@edit')->name('edit_galeri');
Route::post('/update-galeri/{id}','GaleriController@update')->name('update_galeri');
Route::get('/delete-galeri/{id}','GaleriController@destroy')->name('delete_galeri');

//Paket Wisata
Route::get('/paket-wisata','PaketWisataController@index')->name('paket_wisata');
Route::post('/store-paket','PaketWisataController@storePaket')->name('store_wisata');
Route::get('/edit-paket/{id}','PaketWisataController@editPaket')->name('edit_wisata');
Route::post('/update-paket/{id}','PaketWisataController@updatePaket')->name('update_wisata');
Route::get('/delete-paket/{id}','PaketWisataController@destroyPaket')->name('delete_wisata');
//Trip
ROute::get('/paket/{id}/tambah-trip','PaketWisataController@createTrip')->name('create_trip');
Route::post('/paket/{id}/store-trip','PaketWisataController@storeTrip')->name('store_trip');
Route::get('/edit-trip/{id}','PaketWisataController@editTrip')->name('edit_trip');
Route::post('/update-trip/{id}','PaketWisataController@updateTrip')->name('update_trip');
Route::get('/delete-trip/{id}','PaketWisataController@destroyTrip')->name('delete_trip');

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

Route::get('/kamar', function () {
    return view('pages.kamar');
})->name('kamar');

Route::get('/destinasi',function(){
    return view('pages.destinasi');
})->name('destinasi');

Route::get('/postingan',function(){
    return view('pages.postingan');
})->name('postingan');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Auth::routes();


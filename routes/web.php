<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return view('index');
});

Route::get('/Email', function () {
    return view('Email');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/input', function () {
    return view('input');
});
Route::get('/map-google', function () {
    return view('map-google');
});

Route::get('/search', function () {
    // dd('test');
    return view('Cari_Fasilitas_Kesehatan');
});
Route::get('/loged', function () {
    // dd('test');
    return view('login');
});
Route::get('/mahasiswa', function () {
    return view('mahasiswa.index',['Covid_19' => DB::table('pasien')->get()]);
});

// Route::get('/about', function () {
//     $nama = 'Anyip Pribumi';
//     return view('About',['nama' => $nama]);
// });
//  Route::get('/','PagesController@home');
//  Route::get('/about','PagesController@about');

// Route::get('/mahasiswa','mahasiswaController@index');






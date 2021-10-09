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
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/verifikasi', function () {
    return view('verifikasi', [
        "title" => "Verifikasi"
    ]);
});

Route::get('/kerjasama', function () {
    return view('kerjasama', [
        "title" => "Kerjasama"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/daftar', function () {
    return view('daftar', [
        "title" => "Buat Akun"
    ]);
});

Route::get('/detail_dashboard', function () {
    return view('detail_dashboard', [
        "title" => "Detail Petani"
    ]);
});

Route::get('/detail_verifikasi', function () {
    return view('detail_verifikasi', [
        "title" => "Detail Verifikasi"
    ]);
});

Route::get('/detail_kerjasama', function () {
    return view('detail_kerjasama', [
        "title" => "Detail Kerjasama"
    ]);
});
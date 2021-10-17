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

Route::get('/dashboard_petani', function () {
    return view('dashboard_petani', [
        "title" => "Dashboard Petani"
    ]);
});

Route::get('/lihat_profil_petani', function () {
    return view('lihat_profil_petani', [
        "title" => "Profil Saya"
    ]);
});

Route::get('/edit_profil_petani', function () {
    return view('edit_profil_petani', [
        "title" => "Edit Profil Saya"
    ]);
});

Route::get('/lihat_profil_mitra', function () {
    return view('lihat_profil_mitra', [
        "title" => "Profil Saya"
    ]);
});

Route::get('/edit_profil_mitra', function () {
    return view('edit_profil_mitra', [
        "title" => "Edit Profil Saya"
    ]);
});

Route::get('/detail_pengajuan_petani_before', function () {
    return view('detail_pengajuan_petani_before', [
        "title" => "Kerjasama Petani"
    ]);
});

Route::get('/detail_pengajuan_petani_after', function () {
    return view('detail_pengajuan_petani_after', [
        "title" => "Kerjasama Petani"
    ]);
});

Route::get('/tentang_kami', function () {
    return view('tentang_kami', [
        "title" => "Tentang Kami"
    ]);
});

Route::get('/tambah_pengajuan_petani', function () {
    return view('tambah_pengajuan_petani', [
        "title" => "Ajukan Kerjasama"
    ]);
});

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

Route::get('/detail_kerjasama_hasilpanen', function () {
    return view('detail_kerjasama_hasilpanen', [
        "title" => "Tambah Data Hasil Panen"
    ]);
});
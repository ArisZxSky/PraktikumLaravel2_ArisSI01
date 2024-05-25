<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berarti mengambil fungsi di dalam controller
//route menggunkan resources berarti mengambil class
//route menggunakan namne atau by name
Route::get('/admin', [AdminController::class, 'index']);

// Praktikum Laravel ke 1
Route::get('/pegawai', [PegawaiController::class, 'index']);

// Praktikum Laravel ke 3
Route::get('/admin/kelurahan', [KelurahanController::class, 'index']);

//Tugas Praktikum Laravel 3
Route::get('/admin/pasien', [PasienController::class, 'index']);

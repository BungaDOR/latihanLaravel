<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World dari Laravel";
});

Route::get('/nama', function () {
    return "Hello, nama saya Bungaaa";
});

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

use App\Http\Controllers\RuanganController;

Route::get('/ruangan', [RuanganController::class, 'index']);
Route::post('/ruangan', [RuanganController::class, 'store']);

use App\Http\Controllers\MataKuliahController;

Route::get('/mataKuliah', [MataKuliahController::class, 'index']);
Route::post('/mataKuliah', [MataKuliahController::class, 'store']);

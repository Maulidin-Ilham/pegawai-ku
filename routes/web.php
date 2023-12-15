<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

// routing
Route::get('/', [DashboardController::class,"index"]);
Route::get('/kriteria', [DashboardController::class, "kriteria"]);
Route::get('/pegawai', [DashboardController::class, "pegawai"]);
Route::get('/perhitungan', [DashboardController::class, "perhitungan"]);
Route::get('/hasil', [DashboardController::class, "hasil"]);
Route::resource('pegawai', PegawaiController::class);



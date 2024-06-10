<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
    return "Halaman About";
});

Route::get('profile', function() {
    return view('profile');
});
route::get('dashboard', [dashboard::class,'index']{

Route::get('dashboard', [dashboard::class,'index']);
Route::resource('fakultas', FakultasController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('mahasiswa', MahasiswaController::class);

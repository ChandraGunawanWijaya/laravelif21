<?php


use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

route::get('about', function(){
    return view('welcome');
});

route::get('profile',function(){
    return view('profile');
});
route::get('dashboard', [dashboard::class,'index']{

route::resource('fakultas', FakultasController::class);
route::resource('prodi', ProdiController::class);

route::resource('mahasiswa', MahasiswaController::class);



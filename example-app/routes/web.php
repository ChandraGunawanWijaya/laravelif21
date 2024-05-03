<?php


use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('about', function(){
    return view('welcome');
});

route::get('profile',function(){
    return view('profile');
});

route::resource('fakultas', FakultasController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[HomeController::class,'home']);
Route::get('tambah/siswa',[HomeController::class,'tambah']);
Route::get('/siswa/{nama}',[HomeController::class,'detail_siswa']);
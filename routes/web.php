<?php

use Illuminate\Support\Facades\Route;

use App\Https\Controllers\MahasiswaControllers;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


Route::get('/about', function () {
    return view('halaman-about');
});

Route : get ('/about', function () {
    return view ('halaman-about');
});

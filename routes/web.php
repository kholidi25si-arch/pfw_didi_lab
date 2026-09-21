<?php

use Illuminate\Support\Facades\Route;

use App\Https\Controllers\MahasiswaControllers;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di kampus PCR!';
});

//Route::get('/mahasiswa',function ()) {
   // return 'Halo mahasiswa';
//});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


Route::get('/about', function () {
    return view('halaman-about');
});

// Route : get ('/about', function () {
//     return view ('halaman-about');
// });

Route ::get('/home',[HomeController::class, 'index']);

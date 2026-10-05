<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
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

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/question', [QuestionController::class, 'index'])
		->name('question.index');


Route::get('/dashboard', [DashboardController::class, 'index'])
		->name('dashboard.index');

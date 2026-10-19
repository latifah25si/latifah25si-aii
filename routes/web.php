<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MahasiswaController;

// Jika menggunakan controller dan butuh parameter ID:
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

// Atau jika hanya rute biasa tanpa controller (untuk latihan/tes saja):
Route::get('/mahasiswa', function () {
    return 'Halaman Mahasiswa';
})->name('mahasiswa.show');


Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/home',[HomeController::class, 'index']);

Route::get('/home-question-respon', function () {
    return view('home-question-respon');
})->name('home-question-respon');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);



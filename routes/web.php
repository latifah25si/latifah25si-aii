<?php

use Illuminate\Support\Facades\Route;

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

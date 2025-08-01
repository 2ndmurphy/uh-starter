<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return view('placeholder');
});

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

Route::get('/kelas', function() {
    return view('kelas');
})->name('kelas');

Route::get('/nilai', function() {
    return view('nilai');
})->name('nilai');

Route::get('/laporan', function() {
    return view('laporan');
})->name('laporan');
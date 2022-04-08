<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::resource('mahasiswa', MahasiswaController::class);
Route::get('mahasiswas/nilai/{nim}',[MahasiswaController::class, 'nilai'])
    ->name('mahasiswa.nilai');

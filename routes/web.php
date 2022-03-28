<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::resource('mahasiswa', MahasiswaController::class);

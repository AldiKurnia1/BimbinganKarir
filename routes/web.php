<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\PatientController;

// Route untuk menampilkan form registrasi pasien
Route::get('/register/patient', [PatientController::class, 'create'])->name('register.pasien');

// Route untuk menyimpan data registrasi pasien
Route::post('/register/patient', [PatientController::class, 'store']);

Route::get('/logindokter', function () {
    return view('logindokter');
})->name('logindokter');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
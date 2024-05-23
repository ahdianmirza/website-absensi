<?php

use App\Http\Controllers\DataKehadiranController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [KehadiranController::class, 'index'])->middleware('auth');
Route::get('/karyawan', [KaryawanController::class, 'index'])->middleware('auth');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->middleware('auth');
Route::post('/karyawan/create', [KaryawanController::class, 'store']);
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->middleware('auth');
Route::put('/karyawan/{id}/update', [KaryawanController::class, 'update']);
Route::delete('/karyawan/destroy/{id}', [KaryawanController::class, 'destroy'])->name('destroy.karyawan');
Route::get('/data-kehadiran', [DataKehadiranController::class, 'index'])->middleware('auth');
Route::delete('/kehadiran/destroy', [KehadiranController::class, 'destroy'])->name('destroy.kehadiran');
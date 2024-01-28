<?php

use App\Http\Controllers\DataKehadiranController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KehadiranController;
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

Route::get('/', [KehadiranController::class, 'index']);
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan/create', [KaryawanController::class, 'store']);
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::put('/karyawan/{id}/update', [KaryawanController::class, 'update']);
Route::delete('/karyawan/destroy/{id}', [KaryawanController::class, 'destroy'])->name('destroy.karyawan');
Route::get('/data-kehadiran', [DataKehadiranController::class, 'index']);
Route::delete('/kehadiran/destroy', [KehadiranController::class, 'destroy'])->name('destroy.kehadiran');
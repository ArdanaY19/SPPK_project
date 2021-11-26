<?php

use App\Http\Controllers\H_KriteriaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KriteriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('mahasiswa', [MahasiswaController::class, 'store']);
Route::get('mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::post('mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

Route::get('kriteria', [KriteriaController::class, 'index'])->name('kriteria');
Route::get('kriteria/create', [KriteriaController::class, 'create']);
Route::post('kriteria', [KriteriaController::class, 'store']);
Route::get('kriteria/{id}', [KriteriaController::class, 'show']);
Route::post('kriteria/{id}', [KriteriaController::class, 'update']);
Route::delete('kriteria/{id}', [KriteriaController::class, 'destroy']);

Route::get('h_kriteria', [H_KriteriaController::class, 'index'])->name('h_kriteria');
Route::get('h_kriteria/create', [H_KriteriaController::class, 'create']);
Route::post('h_kriteria', [H_KriteriaController::class, 'store']);
Route::get('h_kriteria/{id}', [H_KriteriaController::class, 'show']);
Route::post('h_kriteria/{id}', [H_KriteriaController::class, 'update']);
Route::delete('h_kriteria/{id}', [H_KriteriaController::class, 'destroy']);

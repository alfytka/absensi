<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/test', function () {
    return view('layouts.kerangka');
});

Route::resource('/siswa', SiswaController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/pengajar', PengajarController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/mata-pelajaran', MapelController::class);
Route::resource('/jadwal-pembelajaran', JadwalController::class);

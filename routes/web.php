<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stmikController;
use App\Http\Controllers\pegawaiController;
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


Route::get('/stmik',[stmikController::class, 'index']);

Route::get('/registrasi',[stmikController::class, 'login']);

Route::resource('pegawai',pegawaiController::class);
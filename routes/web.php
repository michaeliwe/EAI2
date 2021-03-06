<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovidAPIController;
use App\Http\Controllers\PegawaiAPIController;

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

Route::get('covid', [CovidAPIController::class, 'index']);
Route::get('pegawai', [PegawaiAPIController::class, 'index']);
Route::get('pegawai/api', [PegawaiAPIController::class, 'api']);

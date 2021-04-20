<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;


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
Route::get('/hp', [PegawaiController::class, 'index']);
Route::get('/hp/tambah', [PegawaiController::class, 'tambah']);
Route::post('/hp/store', [PegawaiController::class, 'store']);
Route::get('/hp/edit/{id}', [PegawaiController::class, 'edit']);
Route::put('/hp/update/{id}', [PegawaiController::class, 'update']);
Route::get('/hp/hapus/{id}', [PegawaiController::class, 'delete']);
// Route::get('/pegawai', 'PegawaiController@index');
Route::get('/', function () {
    return view('welcome');
});

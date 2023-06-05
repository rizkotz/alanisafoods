<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

//ROUTE CRUD

//ROUTE HALAMAN
Route::get('/',                 [ProjectController::class,'index']);
Route::get('/barangKeluar',                 [ProjectController::class,'keluar']);
Route::get('/barangMasuk',                 [ProjectController::class,'masuk']);
Route::get('/dashboard',                 [ProjectController::class,'dashboard']);
Route::get('/tambahBarang',                 [ProjectController::class,'tambah']);
Route::get('/totalBarang',                 [ProjectController::class,'total']);



Route::get('/welcome', function () {
    return view('welcome');
});

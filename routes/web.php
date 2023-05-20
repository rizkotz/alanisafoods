<?php

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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/totalBarang', function () {
    return view('totalBarang');
});Route::get('/totalBarang', function () {
    return view('totalBarang');
});
Route::get('/barangMasuk', function () {
    return view('barangMasuk');
});
Route::get('/barangKeluar', function () {
    return view('barangKeluar');
});
Route::get('/dataTransaksi', function () {
    return view('dataTransaksi');
});
Route::get('/tambahBarang', function () {
    return view('tambahBarang');
});

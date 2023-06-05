<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;

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

//ROUTE LOGIN
Route::get('/',                            [LoginController::class,'index']);
Route::get('/login',                            [LoginController::class,'login']);
Route::post('/loginPost',                            [LoginController::class,'loginPost']);
Route::get('/logout',                            [LoginController::class,'logout']);

/*
Route::get('/', 'UserController@index');
Route::get('/login', 'UserController@login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');
*/

//ROUTE HALAMAN
Route::get('/dashboard',                    [ProjectController::class,'dashboard']);
Route::get('/barangKeluar',                 [ProjectController::class,'keluar']);
Route::get('/barangMasuk',                  [ProjectController::class,'masuk']);
Route::get('/tambahBarang',                 [ProjectController::class,'tambah']);
Route::get('/totalBarang',                  [ProjectController::class,'total']);



Route::get('/welcome', function () {
    return view('welcome');
});

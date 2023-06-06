<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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
Route::resource('/posts', PostController::class);


//ROUTE LOGIN
Route::get('/',                            [LoginController::class,'index']);
Route::get('/login',                            [LoginController::class,'login']);
Route::post('/loginPost',                            [LoginController::class,'loginPost']);
Route::get('/logout',                            [LoginController::class,'logout']);
Route::get('/register',                     [LoginController::class,'register']);
Route::post('/registerPost',                 [LoginController::class,'registerPost']);
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
Route::get('/totalBarang',                  [ProjectController::class,'total']);
Route::get('/dataTransaksi',                [ProjectController::class,'transaksi']);



Route::get('/welcome', function () {
    return view('welcome');
});

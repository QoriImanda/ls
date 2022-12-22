<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/post', [LoginController::class, 'post'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register/store', [LoginController::class, 'store'])->name('register.store');

Route::group(['middleware' =>'auth'],function(){
    Route::get('/', function () {
        return view('home.index');
    });
    Route::get('/Home', function () {
        return view('Home.Home');
    });
    Route::get('/welcome', function () {
        return view('welcome');
    });
    Route::get('/tiket' ,[TiketController::class, 'index'])->name('tiket');
    Route::get('/Transaksi', function () {
        return view('Transaksi.index');
    });
    
    Route::get('/Login', function () {
        return view('Login.index');
    });
    Route::get('/Data', function () {
        return view('Data.index');
    });
    Route::post('/simpan', [TiketController::class, 'simpan'])->name('simpan') ;
    
    Route::get('/edit/{id}', [TiketController::class, 'edit'])->name('edit') ;
        
    Route::post('/tiket/update/{id}', [TiketController::class, 'update'])->name('tiket.update');
    
    Route::get('/delete/{id}' ,[TiketController::class, 'delete'])->name('tiket.delete');

    // Users
    Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    
    
});


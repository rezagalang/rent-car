<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [FrontController::class, 'index'])->middleware('guest')->name('home');
Route::get('/sewa', [FrontController::class, 'sewa'])->middleware('guest')->name('sewa');
Route::get('/tentang', [FrontController::class, 'tentang'])->middleware('guest')->name('tentang');
Route::get('/kontak', [FrontController::class, 'kontak'])->middleware('guest')->name('kontak');
Route::get('/{car}/detail', [FrontController::class, 'detail'])->middleware('guest')->name('detail');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');

Route::group(['middleware' => 'auth'], function () {
    
    Route::group(['prefix' => 'admin' , 'as' => 'admin.'] , function() {
        Route::get('/dashboard', [AdmController::class, 'dashboard'])->name('dashboard');
    });

    Route::group(['prefix' => 'admin/car' , 'as' => 'car.'] , function() {
        Route::get('/', [CarController::class, 'index'])->name('index');
        Route::get('/add', [CarController::class, 'create'])->name('add');
        Route::post('/add', [CarController::class, 'store'])->name('added');
        Route::get('/{car}/edit', [CarController::class, 'edit'])->name('edit');
        Route::patch('/{car}/edit', [CarController::class, 'update'])->name('update');
        Route::get('/{car}/delete', [CarController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => 'admin/user' , 'as' => 'user.'] , function() {
        Route::get('/list', [AdmController::class, 'user'])->name('index');
        Route::get('/add', [AdmController::class, 'create'])->name('add');
        Route::post('/add', [AdmController::class, 'store'])->name('added');
        Route::get('/{user}/edit', [AdmController::class, 'edit'])->name('edit');
        Route::patch('/{user}/edit', [AdmController::class, 'update'])->name('update');
        Route::get('/{user}/delete', [AdmController::class, 'destroy'])->name('delete');
        Route::get('/pass', [ResetPassword::class, 'show'])->name('reset');
		Route::post('/pass', [ResetPassword::class, 'change'])->name('change');
    });

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
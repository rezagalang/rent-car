<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdmController, CarController, EmailController, ResetPassword, FrontController, LoginController
};

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [FrontController::class, 'index'])->name('home');
    Route::get('/sewa', [FrontController::class, 'sewa'])->name('sewa');
    Route::get('/tentang', [FrontController::class, 'tentang'])->name('tentang');
    Route::get('/kontak', [FrontController::class, 'kontak'])->name('kontak');
    Route::get('/{car}/detail', [FrontController::class, 'detail'])->name('detail');
    Route::post('/send', [EmailController::class, 'send'])->name('send.email');
    Route::post('/wa', [EmailController::class, 'wa'])->name('wa');

    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
});

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

    Route::group(['prefix' => 'admin/order' , 'as' => 'order.'] , function() {
        Route::get('/', [CarController::class, 'order'])->name('index');
        Route::get('/{order}/edit', [CarController::class, 'editOrder'])->name('edit');
        Route::patch('/{order}/edit', [CarController::class, 'updateOrder'])->name('update');
        Route::get('/{order}/delete', [CarController::class, 'orderDestroy'])->name('delete');
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
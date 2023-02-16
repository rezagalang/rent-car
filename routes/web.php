<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserProfileController;

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
    return redirect('/dashboard');
})->middleware('auth');


Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
Route::get('/dashboard', [AdmController::class, 'dashboard'])->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

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
    });

    Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
    Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
    Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
    Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
    Route::get('/{page}', [PageController::class, 'index'])->name('page');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Service\ServiceController;

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

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('forgot-password', [LoginController::class, 'forgot'])->middleware('guest')->name('password.request');
Route::post('forgot/send-email', [LoginController::class, 'sendEmailForgot'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [LoginController::class, 'resetPassword'])->middleware('guest')->name('password.reset');
Route::post('/reset-password/{token}', [LoginController::class, 'resetPasswordUpdate'])->middleware('guest')->name('password.update');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('index');
    })->name('home');

    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/create', [UserController::class, 'store'])->name('users.store');
    Route::get('users/delete/{email}', [UserController::class, 'delete'])->name('users.delete');
    Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/edit/{id}', [UserController::class, 'update'])->name('users.update');

    Route::get('customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('customers/create', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('customers/delete/{email}', [CustomerController::class, 'delete'])->name('customers.delete');
    Route::get('customers/edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('customers/edit/{id}', [CustomerController::class, 'update'])->name('customers.update');

    Route::get('services', [ServiceController::class, 'index'])->name('services');

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');


});






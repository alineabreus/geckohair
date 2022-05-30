<?php

use Illuminate\Support\Facades\Route;
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

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('forgot-password', [LoginController::class, 'forgot'])->middleware('guest')->name('password.request');
Route::post('forgot/send-email', [LoginController::class, 'sendEmailForgot'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [LoginController::class, 'resetPassword'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [LoginController::class, 'resetPasswordUpdate'])->middleware('guest')->name('password.update');


Route::get('/', function () {
    return view('welcome');
});


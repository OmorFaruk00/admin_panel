<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TestMiddlewere;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['redirect_to_apps']], function () {
    Route::view('/', 'admin.login')->name('home');
    Route::post('auth/login', [AuthController::class, 'authenticate']);
});


Route::get('/mail',[MailController::class,'mailSend'])->middleware('token.auth');

Route::group(['middleware' => ['logged_in']], function () {

    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('user', [UserController::class, 'index'])->name('user');

});

Route::group(['middleware' => ['token.auth']], function () {

    Route::get('/mail',[MailController::class,'mailSend']);

});



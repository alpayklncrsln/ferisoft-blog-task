<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
\Illuminate\Auth\Middleware\Authenticate::redirectUsing(function () {
    return \route('admin.login');
});
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::middleware('auth')->get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');
    Route::middleware('auth')->resource('blogs', BlogController::class);

    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'postLogin'])->name('login.post');

    Route::middleware('auth')->post('/logout',[AuthController::class,'logout'])->name('logout');
});

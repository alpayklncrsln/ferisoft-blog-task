<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
    'as' => 'admin.',
], function () {
    Route::resource('blogs', BlogController::class);
});

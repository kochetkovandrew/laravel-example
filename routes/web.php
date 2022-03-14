<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::controller(\App\Http\Controllers\AirportController::class)->group(function () {
    Route::get('/airports', 'index');
    Route::get('/airports/new', 'create');
    Route::get('/airports/{id}', 'show');
    Route::post('/airports', 'store');
});
//Route::get('/airports', [\App\Http\Controllers\AirportController::class, 'index']);

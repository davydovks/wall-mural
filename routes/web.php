<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quiz1', function() {
    return view('quiz1');
});

Route::get('/quiz4', function() {
    return view('quiz4');
});

Route::get('/request', function() {
    return view('request');
});

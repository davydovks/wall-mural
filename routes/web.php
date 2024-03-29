<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RoomController;
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
})->name('home');

Route::get('/quiz1', [RoomController::class, 'create'])
    ->name('quiz1.create');

Route::post('/quiz1', [RoomController::class, 'store'])
    ->name('quiz1.store');

Route::get('/quiz4', [PositionController::class, 'create'])
    ->name('quiz4.create');

Route::post('/quiz4', [PositionController::class, 'store'])
    ->name('quiz4.store');

Route::get('/request', [InquiryController::class, 'create'])
    ->name('inquiries.create');

Route::post('/request', [InquiryController::class, 'store'])
    ->name('inquiries.store');

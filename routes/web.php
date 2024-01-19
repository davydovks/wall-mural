<?php

use App\Http\Controllers\InquiryController;
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

Route::get('/quiz1', [InquiryController::class, 'createStep1'])
    ->name('inquiries.create1');

Route::post('/quiz1', [InquiryController::class, 'storeStep1'])
    ->name('inquiries.store1');

Route::get('/quiz4', [InquiryController::class, 'createStep4'])
    ->name('inquiries.create4');

Route::post('/quiz4', [InquiryController::class, 'storeStep4'])
    ->name('inquiries.store4');

Route::get('/request', [InquiryController::class, 'create'])
    ->name('inquiries.create');

Route::post('/request', [InquiryController::class, 'store'])
    ->name('inquiries.store');

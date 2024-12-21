<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/ceo', [IndexController::class, 'show'])->name('show');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::get('/contact/confirm', [ContactController::class, 'show'])->name('contact.confirm.show');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

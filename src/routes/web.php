<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


Route::middleware('clear_session_for_non_contact')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/ceo', [IndexController::class, 'show'])->name('ceo.show');
    Route::get('/jobs', [JobController::class, 'show'])->name('job.show');
    Route::get('/contact/complete', [ContactController::class, 'complete'])->name('contact.complete');
});
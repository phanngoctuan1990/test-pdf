<?php

use App\Http\Controllers\TestController;
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

Route::get('/', [TestController::class, 'index'])->name('index');
Route::get('/print', [TestController::class, 'getPrint'])->name('getprint');
Route::post('/print', [TestController::class, 'postPrint'])->name('postPrint');
Route::post('/complete', [TestController::class, 'complete'])->name('complete');

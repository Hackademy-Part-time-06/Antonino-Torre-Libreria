<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/libri/crea', [PageController::class, 'create'])->name('create')->middleware('auth');

Route::POST('/libri/salva', [PageController::class, 'send'])->name('send');

Route::get('/libri/{libro}/dettagli', [PageController::class, 'show'])->name('show');

<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Models\Category;
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

Route::get('/libri', [PageController::class, 'index'])->name('book.index');

Route::get('/libri/crea', [PageController::class, 'create'])->name('book.create')->middleware('auth');

Route::POST('/libri/salva', [PageController::class, 'send'])->name('book.send');

Route::get('/libri/{libro}/dettagli', [PageController::class, 'show'])->name('book.show');

Route::get('/categorie', [CategoryController::class, 'index'])->name('category.index');

Route::get('/categorie/crea', [CategoryController::class, 'create'])->name('category.create');

Route::POST('/categorie/salva', [CategoryController::class, 'send'])->name('category.send');

Route::get('/categorie/{categoria}/dettagli', [CategoryController::class, 'show'])->name('category.show');

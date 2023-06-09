<?php

use App\Http\Controllers\AuthorController;
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

Route::POST('/libri/search', [PageController::class, 'search'])->name('book.search');

Route::get('/libri/crea', [PageController::class, 'create'])->name('book.create')->middleware('auth');

Route::POST('/libri/salva', [PageController::class, 'send'])->name('book.send');

Route::get('/libri/{libro}/dettagli', [PageController::class, 'show'])->name('book.show');

Route::get('/libri/{libro}/modifica', [PageController::class, 'edit'])->name('book.edit')->middleware('auth');

Route::PUT('/libri/{libro}/modificato', [PageController::class, 'update'])->name('book.update');

Route::delete('/libri/{libro}/cancella', [PageController::class, 'destroy'])->name('book.destroy');

Route::get('/libri/{user}/utente', [PageController::class, 'user'])->name('book.user');

Route::get('/categorie', [CategoryController::class, 'index'])->name('category.index');

Route::get('/categorie/crea', [CategoryController::class, 'create'])->name('category.create')->middleware('auth');

Route::POST('/categorie/salva', [CategoryController::class, 'send'])->name('category.send');

Route::get('/categorie/{categoria}/dettagli', [CategoryController::class, 'show'])->name('category.show');

Route::get('/categorie/{categoria}/modifica', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth');

Route::PUT('/categorie/{categoria}/modificato', [CategoryController::class, 'update'])->name('category.update');

Route::delete('/categorie/{categoria}/cancella', [CategoryController::class, 'destroy'])->name('Category.destroy');

Route::resource('author', AuthorController::class, [
    'names'=> [
        'index'=>'author.index',
        'store'=>'author.store',
        'create'=>'author.create',
        'show'=>'author.show',
        'edit'=>'author.edit',
        'update'=>'author.update',
        'destroy'=>'author.destroy',
    ]
]);
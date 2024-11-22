<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth')->name('products.create');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->middleware('auth')->name('products.edit');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products', [ProductController::class, 'store'])->middleware('auth')->name('products.store');
Route::put('/products/update/{id}', [ProductController::class, 'update'])->middleware('auth')->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->middleware('auth')->name('products.destroy');

Route::get('/categorias', [CategoryController::class, 'index'])->middleware('auth')->name('categories.index');
Route::get('/categorias/create', [CategoryController::class, 'create'])->middleware('auth')->name('categories.create');
Route::get('/categorias/{id}/edit', [CategoryController::class, 'edit'])->middleware('auth')->name('categories.edit');
Route::post('/categorias/store', [CategoryController::class, 'store'])->middleware('auth')->name('categories.store');
Route::put('/categorias/update/{id}', [CategoryController::class, 'update'])->middleware('auth')->name('categories.update');
Route::delete('/categorias/{id}', [CategoryController::class, 'destroy'])->middleware('auth')->name('categories.destroy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

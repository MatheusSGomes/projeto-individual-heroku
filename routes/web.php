<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    CategoryController,
    ProductController
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categorias/novo', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categoria', [CategoryController::class, 'store'])->name('categories.store');


Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/novo', [ProductController::class, 'create'])->name('products.create');
Route::post('/produto', [ProductController::class, 'store'])->name('products.store');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

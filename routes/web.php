<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    CategoryController,
    ProductController,
    UserController
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categorias/novo', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categoria', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categoria/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categoria/{id}/editar', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categoria/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categoria/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/novo', [ProductController::class, 'create'])->name('products.create');
Route::post('/produto', [ProductController::class, 'store'])->name('products.store');
Route::get('/produto/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produto/{id}/editar', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/produto/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/produto/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
Route::get('/usuario/{id}', [UserController::class, 'show'])->name('users.show');;
Route::get('/usuario/{id}/editar', [UserController::class, 'edit'])->name('users.edit');
Route::put('/usuario/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/usuario/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

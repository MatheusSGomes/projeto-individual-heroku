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


Route::get('/produtos', [ProductController::class, 'index'])->name('products.index');
Route::get('/produtos/novo', [ProductController::class, 'create'])->name('products.create');
Route::post('/produto', [ProductController::class, 'store'])->name('products.store');
Route::get('/produto/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produto/{id}/editar', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/produto/{id}', [ProductController::class, 'update'])->name('products.update');


Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
Route::get('/usuario/{id}', [UserController::class, 'show'])->name('user.show');;
Route::get('/usuario/{id}/editar', [UserController::class, 'edit'])->name('user.edit');
Route::put('/usuario/{id}', [UserController::class, 'update'])->name('user.update');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;



Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/category', [PageController::class, 'category'])->name('category');
Route::get('/article/{article}', [PageController::class, 'article'])->name('article');



Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::middleware('auth')->group(function () {
    Route::get('/journalist', [PageController::class, 'journalist'])->name('journalist');
    Route::post('/journalist', [ArticleController::class, 'store'])->name('journalist.store');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/category', [PageController::class, 'category'])->name('category');
Route::get('/article/{text}', [PageController::class, 'article'])->name('article');


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware('auth')->group(function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
});

  

Route::middleware(['auth', 'journalist'])->group(function () {
    Route::get('/journalist', [PageController::class, 'journalist'])->name('journalist');
    Route::post('/journalist', [TextController::class, 'store'])->name('journalist.store');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
});

 

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/texts/{text}/edit', [AdminController::class, 'editText'])->name('admin.texts.edit');
    Route::put('/texts/{text}', [AdminController::class, 'updateText'])->name('admin.texts.update');
    Route::post('/texts/{text}/block', [AdminController::class, 'blockText'])->name('admin.texts.block');
    Route::delete('/texts/{text}', [AdminController::class, 'deleteText'])->name('admin.texts.delete');
    Route::post('/users/{user}/ban', [AdminController::class, 'toggleBan'])->name('admin.users.ban');
    Route::post('/users/{user}/role', [AdminController::class, 'changeRole'])->name('admin.users.role');
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('main'))->name('home');
Route::get('/category', fn() => view('category'))->name('category');
Route::get('/journalist', fn() => view('journalist'))->name('journalist');
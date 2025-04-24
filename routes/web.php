<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books',BookController::class);
Route::resource('categories',CategoryController::class);
Route::resource('authors',AuthorController::class);
Route::resource('languages',LanguageController::class);
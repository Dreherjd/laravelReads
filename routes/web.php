<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\IndexController;

Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/index', 'index');
});

Route::controller(PostController::class)->group(function(){
    Route::get('view_post/{book_review_id}','view_post');
});

Route::controller(BookController::class)->group(function () {
    Route::get('/books', 'bookIndex');
    Route::get('/create', 'create');
    Route::get('/{book_id}', 'show')->name('books')->whereNumber('book_id');
    Route::post('/books', 'store');
});

<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\IndexController;

Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/index', 'index');
});

Route::controller(AuthorController::class)->group(function(){
    Route::get('/view_author/{author_id}', 'show')->whereNumber('author_id');
});

Route::controller(PostController::class)->group(function(){
    Route::get('view_post/{book_review_id}','view_post')->whereNumber('book_review_id');
    Route::post('/', 'store')->name('create_post');
});

Route::controller(BookController::class)->group(function () {
    Route::get('/books', 'bookIndex');
    Route::get('/create', 'create');
    Route::get('/view_book/{book_id}', 'show')->whereNumber('book_id');
    Route::post('/books', 'store');
});

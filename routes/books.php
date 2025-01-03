<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::controller(BookController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{book_id}', 'show')->name('books')->whereNumber('book_id');
    Route::post('/', 'store');
});

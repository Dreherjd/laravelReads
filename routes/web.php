<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
// # Book Routes #
// Route::prefix('books')->group(function () {
//     Route::controller(BookController::class)->group(function () {
//         Route::get('/', 'index');
//         Route::get('/create', 'create');
//         Route::get('/{book_id}', 'show')->name('book')->whereNumber('book_id');
//         Route::post('/', 'store');
//     });
// });
## Route Examples ##
// #route with parameters example
// Route::get('/users/{user_id}', function($user_id){
//     return 'user_id= ' . $user_id;
// });

// #optional paramters
// Route::get('/report/{year}/{month?}', function($year, $month = null){
//     return 'report for ' . $year . $month;
// });

// #dependency injection with routes
// Route::get('/report/{report_id}', function(Request $request, $report_id){
//     $year = $request->get('year');
//     $month = $request->get('month');
//     return 'report ' . $report_id . ' for ' . $year . ' and ' . $month;
// });

// #route with constraints
// Route::get('/users/{user_id}', function($user_id){
//     return 'user_id= ' . $user_id;
// })->where('user_id', '[0-9]+');
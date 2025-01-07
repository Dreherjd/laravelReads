<?php

namespace App\Http\Controllers;
use App\Models\Book_review;

abstract class Controller
{
    
    // public static function getAvgRatingByBookId($book_id){
    //     $avg = Book_review::where('book_review_id', $book_id)->avg('book_review_score');
    //     return $avg;
    // }
}

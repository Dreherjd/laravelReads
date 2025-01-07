<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Book_review;

class bookController extends Controller
{
    // <---------------------------------------------Routes---------------------------------------------------------------------->
    public function bookIndex()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function show($book_id): String
    {
        $book = Book::find($book_id);
        // return dd($book);
        return view('view_book', compact('book'));
    }

    public function create(): String
    {
        return view('review_form');
    }

    public function store(Request $request): String
    {
        return 'book created';
    }
    //<-------------------------------------------------End Routes------------------------------------------------------------------->

    public function getAuthorById($id)
    {
        $author = Author::find($id);
        if ($author) {
            return $author;
        } else {
            return null;
        }
    }

    /**
     * Checks if there are any reviews for a book
     * @param int $book_id
     * @return bool
     */
    public function getHasReviews($book_id){
        $isExist = Book_review::select('*')->where('book_id', $book_id)->exists();
        if($isExist){
            // return var_dump($isExist);
            return true;
        } else {
            // return var_dump($isExist);
            return false;
        }
    }

    /**
     * Gets the average rating of a book by book_id
     * @param int $book_id
     * @return float
     */
    public function getAvgRatingByBookId($book_id){
        $avg = round(Book_review::where('book_id', $book_id)->avg('book_review_score'), 1);
        return $avg;
    }
}

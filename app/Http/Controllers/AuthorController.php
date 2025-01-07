<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use App\Models\Book_review;

class AuthorController extends Controller
{
    public function show($author_id){
        $author = Author::findOrFail($author_id);
        $books = Book::where('author_id', $author->author_id)->get();
        return view("view_author", compact("author", 'books'));
    }

    public function getBookAuthorById($id)
    {
        $author = Author::find($id);
        if ($author) {
            return $author;
        } else {
            return null;
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

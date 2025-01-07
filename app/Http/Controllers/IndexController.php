<?php

namespace App\Http\Controllers;
use App\Models\Book_review;
use App\Models\User;
use App\Models\Author;
use App\Models\Book;

class IndexController extends Controller
{

    public function index()
    {
        $posts = Book_review::all();
        return view('index', compact('posts'));
    }

    public function getBookByBookId($book_id){
        $book = Book::find($book_id);
        if($book){
            return $book;
        } else {
            return null;
        }
    }

    public function getPostAuthorById($id)
    {
        $author = User::find($id);
        if ($author) {
            return $author;
        } else {
            return null;
        }
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


}

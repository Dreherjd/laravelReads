<?php

namespace App\Http\Controllers;

use App\Models\Book_review;
use App\Models\User;
use App\Models\Comment;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view_post($book_review_id)
    {
        $post = Book_review::find($book_review_id);
        $post_author = User::find($post->book_review_user_id);
        $comments = Comment::where('post_id', $post->book_review_id)->get();
        $book = Book::find($book_review_id);
        return view('view_post', compact('post', 'post_author', 'comments', 'book'));
    }

    public function store(Request $request)
    {
        $request->validate( [
            'book_review_title' => 'required',
            'book_review_content' => 'max:4000',
            'book_review_score' => 'required',
            'complete_or_dnf' => 'required'
        ]);
        Book_review::create($request->all());
        return redirect('/');
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

    /**
     * Gets the average rating of a book by book_id
     * @param int $book_id
     * @return float
     */
    public function getAvgRatingByBookId($book_id)
    {
        $avg = round(Book_review::where('book_id', $book_id)->avg('book_review_score'), 1);
        return $avg;
    }

}

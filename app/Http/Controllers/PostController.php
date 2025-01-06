<?php

namespace App\Http\Controllers;

use App\Models\Book_review;
use App\Models\User;
use App\Models\Comment;

class PostController extends Controller
{
    public function view_post($book_review_id){
        $post = Book_review::find($book_review_id);
        $post_author = User::find($post->book_review_user_id);
        $comments = Comment::where('post_id', $post->book_review_id)->get();
        return view('view_post',compact('post', 'post_author', 'comments'));
    }
}

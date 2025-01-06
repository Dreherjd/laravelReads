<?php

namespace App\Http\Controllers;
use App\Models\Book_review;

class IndexController extends Controller
{

    public function index()
    {
        $posts = Book_review::all();
        return view('index', compact('posts'));
    }


}

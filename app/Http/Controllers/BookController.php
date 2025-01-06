<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
    public function bookIndex()
    {
        return view('books');
    }

    public function show($book_id): String
    {
        return 'show book page';
    }

    public function create(): String
    {
        return 'create book form';
    }

    public function store(Request $request): String
    {
        return 'book created';
    }
}

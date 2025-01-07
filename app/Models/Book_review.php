<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book_review extends Model
{

    protected $table ="book_reviews";
    protected $primaryKey = 'book_review_id';
    protected $fillable = [
        'book_review_score',
        'book_review_title',
        'book_review_content',
        'complete_or_dnf'
    ];


    
}

@inject('bookController', 'App\Http\Controllers\BookController')
@include('includes/header')

<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">{{ $book->book_title }}</p>
        <p class="subtitle">Written by: {{ $bookController->getAuthorById($book->author_id)->author_name }}</p>
        <p class="subtitle"><i>Avg Rating: </i>{{$bookController->getAvgRatingByBookId($book->book_id)}} <i>out of 5</i></p>
    </div>
</section>
<br /><br />
<div class="content">
    {!! nl2br($book->brief_synops) !!}
</div>
<br /><br />
<a href="/create" class="button is-primary">Write a Review</a>

@include('includes/footer')
@inject('bookController', 'App\Http\Controllers\BookController')
@include('includes/header')
<div class="columns is-multiline">
    @foreach ($books as $book)
        <div class="column">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">{{ $book->book_title }}</p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <i>Written by:</i> {{ $bookController->getAuthorById($book->author_id)->author_name }}
                        <br />
                        {{ str($book->brief_synops)->limit(200) }}
                        @if ($bookController->getHasReviews($book->book_id))
                            <br />
                            <small><i>Avg Rating:</i> {{ $bookController->getAvgRatingByBookId($book->book_id) }} <i>out
                                    of 5</i></small>
                        @else
                            <br />
                            <i>No reviews yet</i>
                        @endif
                        <br />
                        <time datetime="2016-1-1">Published:
                            {{ \Carbon\Carbon::createFromTimestamp(strtotime($book->published_date))->format('m/d/Y') }}</time>
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="/view_book/{{ $book->book_id }}" class="card-footer-item">View Book</a>
                </footer>
            </div>
        </div>
    @endforeach
</div>



@include('includes/footer')

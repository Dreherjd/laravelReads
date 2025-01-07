@inject('authorController', 'App\Http\Controllers\AuthorController')
@include('includes/header')

<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">{{ $authorController->getBookAuthorById($author->author_id)->author_name }}</p>
    </div>
</section>
<br /><br />
<div class="content">
    {!! nl2br($author->about_the_author) !!}
</div>

@if ($books)
    <nav class="level">
        <p class="level-item has-text-centered">
            <a class="link is-info"></a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info"></a>
        </p>
        <h2 class="level-item has-text-centered">
            They've Written:
        </h2>
        <p class="level-item has-text-centered">
            <a class="link is-info"></a>
        </p>
        <p class="level-item has-text-centered">
            <a class="link is-info"></a>
        </p>
    </nav>
    <br /><br />
    <div class="columns is-multiline">
        @foreach ($books as $book)
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">{{ $book->book_title }}</p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            {{ str($book->brief_synops)->limit(200) }}
                            <br />
                            <small><i>Avg Rating:</i> {{$authorController->getAvgRatingByBookId($book->book_id)}}</small>
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
@endif

@include('includes/footer')

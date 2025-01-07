@inject('indexController', 'App\Http\Controllers\IndexController')
@include('includes/header')


<div class="columns is-multiline">
    @foreach ($posts as $post)
        <div class="column">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">{{$post->book_review_title}}</p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <a href="/view_book/{{$post->book_id}}">{{$indexController->getBookByBookId($post->book_id)->book_title}}</a> - <a href="/view_author/{{$indexController->getBookByBookId($post->book_id)->author_id}}">{{$indexController->getBookAuthorById($indexController->getBookByBookId($post->book_id)->author_id)->author_name}}</a>
                        <br />
                        {{ str($post->book_review_content)->limit(200)}}
                        <br />
                        <time datetime="2016-1-1">Written {{ \Carbon\Carbon::createFromTimestamp(strtotime($post->book_review_created))->format('m/d/Y')}}</time>
                        <br />
                        <i>Rated: </i> {{$post->book_review_score}} <i>out of 5</i>
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="/view_post/{{$post->book_review_id}}" class="card-footer-item">View More</a>
                    <a href="#" class="card-footer-item">Edit</a>
                </footer>
            </div>
        </div>
    @endforeach
</div>


@include('includes/footer')

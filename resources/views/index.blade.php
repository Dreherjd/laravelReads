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
                        {{ str($post->book_review_content)->limit(200)}}
                        <br />
                        <time datetime="2016-1-1">Written {{ \Carbon\Carbon::createFromTimestamp(strtotime($post->book_review_created))->format('m/d/Y')}}</time>
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

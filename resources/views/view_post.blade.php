@inject('postController', 'App\Http\Controllers\PostController')
@include('includes/header')

<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">{{ $post->book_review_title }}</p>
        <p class="subtitle">{{$book->book_title}} - {{$postController->getBookAuthorById($book->book_id)->author_name}}</p>
        <p class="subtitle">Written by: {{ $post_author->name }}</p>
    </div>
</section>
<br />
<div class="content">
    <p class="subtitle">Rated {{ $post->book_review_score }} out of 5</p>
    {!! nl2br($post->book_review_content) !!}
    {{-- {{$post->book_review_content}} --}}
</div>


@foreach ($comments as $comment)
    <ariticle class="message is-primary">
        <div class="message-header">
            {{$postController->getPostAuthorById($comment->author)->name}} - {{ \Carbon\Carbon::createFromTimestamp(strtotime($comment->created))->format('m/d/Y')}}
        </div>
        <div class="message-body has-background-primary-70">
            {{$comment->comment_content}}
        </div>
    </ariticle>
    <br />
@endforeach


@include('includes/footer')

@include('includes/header')

<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">{{ $post->book_review_title }}</p>
        <p class="subtitle">Written by: {{ $post_author->name }}</p>
        <p class="subtitle">Rated {{ $post->book_review_score }} out of 5</p>
    </div>
</section>
<br /><br />


@foreach ($comments as $comment)
    <ariticle class="is-primary message">
        <div class="message-header">
             - {{ \Carbon\Carbon::createFromTimestamp(strtotime($comment->created))->format('m/d/Y')}}
        </div>
    </ariticle>
    <br />
@endforeach


@include('includes/footer')

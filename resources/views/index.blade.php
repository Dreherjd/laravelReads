
@include('includes/header')

@foreach ($posts as $post)
    {{$post}}
@endforeach

{{-- @isset($posts)
    hello
@endisset --}}



@include('includes/footer')
{{--use layout for client side--}}
@extends('layouts.master')

{{--insert content that applies main page--}}
@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">Sport news!</p>
        </div>
    </div>


    @foreach($sports as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">{{ $post->title }}</h1>
            <img src="{{$post->image}}" alt="">
            <p>{{ $post->content }}</p>
            <p><a href="{{ route('blog.post', ['id' => $post->category_id]) }}">Read more...</a></p>
        </div>
    </div>
    <hr>
    @endforeach

@endsection
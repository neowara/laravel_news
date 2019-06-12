@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">{{ $post->title }}</p>
        </div>
    </div>
    <div class="row">
    <img src="{{$post->image}}" alt="">
        <div class="col-md-12">
            <p>{{ $post->content }}</p>
        </div>
    </div>
    <button onclick="goBack()">Go Back</button>
@endsection
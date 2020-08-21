@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beatutiful Laravel</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Learning Laravel</h1>
            <p>This blog post will get you right on track with Laravel!</p>
            <p><a href="{{ route('blog.post', ['id' => 1]) }}">Read more...</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">The Next Steps</h1>
            <p>This blog post will get you right on track with Laravel!</p>
            <p><a href="{{ route('blog.post', ['id' => 2]) }}">Read more...</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">Laravel 7</h1>
            <p>This blog post will get you right on track with Laravel!</p>
            <p><a href="{{ route('blog.post', ['id' => 3]) }}">Read more...</a></p>
        </div>
    </div>
@endsection

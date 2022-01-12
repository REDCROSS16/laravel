@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">{{ $article->title }}</h1>
        <p>{{ $article->body }}</p>
    </div>

    <ul class="list-group">
        @foreach($comments as $comment)
        <li class="list-group-item">{{$comment->body}}</li>
        @endforeach
    </ul>
@endsection

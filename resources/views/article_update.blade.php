@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <form action="article" class="mb-4" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$article->title}}">
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea name="body" id="body"  class="form-control" cols="30" rows="10" >{{$article->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add article</button>
        </form>
    </div>
@endsection

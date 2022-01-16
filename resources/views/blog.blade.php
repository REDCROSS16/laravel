@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Articles</h1>

        <form action="article" class="mb-4" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea name="body" id="body"  class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" onclick="event.preventDefault(); addArticle()">Add article</button>
        </form>

    </div>

    <script>


        function addArticle() {
            const title = document.querySelector('input[name="title"]').value;
            const body = document.querySelector('textarea[name="body"]').value;

            let formData =  new FormData();
            formData.append('title', title);
            formData.append('body', body);

            console.log(formData)
            fetch('article', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf"]').getAttribute('content'),
                }
            }).then(
                response => {
                    if (response.status === 200) {
                        location.reload();
                    }
                }
            )

        }
    </script>

    <div class="list-group">
        @foreach ($articles as $article)
        <a href="blog/article/{{$article->id}}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $article->title }}</h5>
                <small>{{ $article->created_at->format('d.m.Y') }}</small>
            </div>
            <p class="mb-1">{{$article->body}}</p>
        </a>
        <div class="d-flex ">
            <a href="article/{{ $article->id }}/update" class="btn btn-warning mt-3 mb-3 mr-4" style="width: 100px;"> Update </a>

            <form action="article/delete" method="post" >
                @csrf
                <input type="hidden" name="id" value="{{$article->id}}">
                <button type="submit" class="btn btn-danger mt-3 mb-3" style="width: 100px;"> Delete </button>
            </form>
        </div>
        @endforeach
    </div>
@endsection

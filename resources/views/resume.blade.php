@extends('layouts.app')

@section('content')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid doloremque error exercitationem necessitatibus non quae reprehenderit velit. Minima nostrum quibusdam similique? Architecto atque culpa cum dicta distinctio earum excepturi exercitationem fugiat, itaque libero nesciunt nisi porro, quaerat quibusdam, quo sint voluptas? Doloribus esse omnis, qui repellat sed temporibus unde.</p>
    <fieldset>
        <div id="time"></div>



        <form method="post" action="{{ route('upload_resume') }}" enctype="multipart/form-data" >
            <div class="form-group">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <label for="exampleFormControlFile1">Добавьте файл</label>
                <input type="file" class="form-control-file" name="file[]">
                <button type="submit" class="btn btn-dark mb-4">Загрузить файл</button>
            </div>

        </form>
    </fieldset>

@endsection




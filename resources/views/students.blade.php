
@extends('layouts.app')


@section('content')
<div class="list-group">

<h2>Студенты</h2>
@foreach($students as $student)
        <button type="button" class="list-group-item list-group-item-action">
            Имя: {{$student->first_name}} Фамилия: {{$student->last_name}} Возраст: {{$student->age}} Группа: {{ $student->group_number }}
            специальность: {{$student->specialty}}
        </button>
@endforeach
</div>
@endsection

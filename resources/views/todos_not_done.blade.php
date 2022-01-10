@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    <a href="done">Выполнено</a>
    <a href="not-done">Не выполнено</a>
    <ul class="list-group">
      @foreach( $todos as $todo)

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{ $todo->title }}
                    <p style="font-size: 12px;color: #b0b6b8">
                        {{$todo->note}}
                    </p>
                </div>

                @if ( $todo->status === 1 )
                    <span class="badge bg-success rounded-pill">Выполнено</span>
                @else
                    <span class="badge bg-danger rounded-pill">Не выполнено</span>
                @endif
            </li>
      @endforeach


    </ul>
@endsection

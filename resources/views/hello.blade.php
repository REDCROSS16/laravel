@extends('layouts.app')

@section('content')
    @if(count($skills) > 0)
        <h2 class="mt-2">My skills</h2>
        <ul class="list-group">
            @foreach( $skills  as $skill)
            <li class="list-group-item"> {{ $skill }}</li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-warning" role="alert">
            You have not skills
        </div>
    @endif
@endsection



{{--{{ dd('123') }}-- vardump and die}}--}}

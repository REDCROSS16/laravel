@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4 ">Result of Test {{ $test }}</h1>
        <p> {{ $result }} concurrency </p>
    </div>
@endsection

@extends('layout')

@section('content')

    <h1>Welcome!!!</h1>
    @foreach($tasks as $task)
    <p> {{ $task }}</p>
    @endforeach

@endsection
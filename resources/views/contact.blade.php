@extends('layout')

@section('title','Contact Page')

@section('content')

    <h1>Contact Page!!</h1>

    @foreach($projects as $project)

    <p>{{ $project -> title }}</p>

    @endforeach

@endsection
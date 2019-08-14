@extends('project.layout')

@section('content')

<h1>Projects!!</h1>

@if(count($projects) > 0)
<ul>
    
    @foreach($projects as $project)
    <li>
        <a href="/project/{{ $project -> id }}">{{ $project -> id }} {{ $project -> title }} </a>
    </li>
    @endforeach

    <a href="/project/create">Crea un nuevo proyecto</a>

</ul>

@else
<h3>
    <a href="/project/create">Crea un nuevo proyecto</a>
</h3>



@endif

@endsection
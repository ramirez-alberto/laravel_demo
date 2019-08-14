@section('title',$project -> title)
@extends('project.layout')
<div class="row">
    <div class="col-sm-12">

        @section('content')

        <h1>{{ $project -> title}}</h1>

        <p>{{ $project -> description }} </p>

        <a href="/project/{{ $project -> id}}/edit"> Edit</a>


        @if($project->tasks->count())
        <div>

                    @foreach($project->tasks as $task)
                    <form action="/tasks/{{ $task-> id}}" method="post">
                    @method('PATCH')
                    @csrf
                    <label for="completed" class='checkbox {{ $task -> completed ? "is_complete" : ""}}'>
                        <input type="checkbox" name="completed" onChange= 'this.form.submit();' {{ $task -> completed ? 'checked' : ''}}>
                        {{ $task->description }}</label>
                    </form>
                    @endforeach

        </div>

        @endif

        @endsection
    </div>
</div>
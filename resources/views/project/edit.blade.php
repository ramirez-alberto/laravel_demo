@extends('project.layout')

@section('content')

<h1>Edit!</h1>

<div class="row">
    <div class="col-sm-12">
        <form method='POST' action='/project/{{$project->id}}'>
            @method('PATCH')
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" aria-describedby="helpId" value='{{ $project->title}}'>
                <div class="form-group">
                    <label for="description">Description</label>
                    <div class="form-group">
                        <label for="description"></label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{ $project->description}}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-left">Update</button>


            </div>
        </form>


        <form method='POST' action='/project/{{$project->id}}'>
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger float-left">Delete</button>


    </div>

</div>



@endsection
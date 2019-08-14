@extends('project.layout')

@section('title','Create')

@section('content')

<div class="row">
            <div class="col-sm-12 text-center">

                <h1>Nuevo proyecto</h1>

            </div>
        </div>

<div class="row text-center">
    <div class="col-xs-12 col-sm-12">
        <form action="/project" method="post">
        {{ csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" aria-describedby="helpId" placeholder="Type a title" value="{{ old('title') }}">
                <div class="form-group">
                    <label for="description">Description</label>
                    <div class="form-group">
                      <label for="description"></label>
                      <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-left">Submit</button>

            </div>
        </form>
    </div>
</div>

<div class="alert alert-danger" role="alert">
    
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach

</div>

@endsection
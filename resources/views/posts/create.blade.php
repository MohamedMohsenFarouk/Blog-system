@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{action('PostsController@store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" placeholder="Body Text" ></textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary" />
    </form>
@endsection

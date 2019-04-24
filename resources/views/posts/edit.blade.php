@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" value="{{$post->title}}" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" placeholder="Body Text" >{{$post->body}}</textarea>
        </div>
        <input name="_method" type="hidden" value="PUT">
        <input type="submit" value="Edit" class="btn btn-primary" />
    </form>
@endsection

@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>{{$post->title}}</h1>
    <hr>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    <form action="/posts/{{$post->id}}" class="float-right" method="POST">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete" class="btn btn-danger" />
    </form>
@endsection

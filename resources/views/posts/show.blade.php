@extends('layouts.app')
    @section('content')
    <a href="/posts" class="btn btn-link">Go Back</a>
        <h1>{{$post->title}}</h1>
        <h3>{{$post->body}}</h3>
    @endsection()

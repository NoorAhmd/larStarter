@extends('layouts.app')
    @section('content')
        <h1>Create Posts</h1>
        {!! Form::open(['action' => 'PostsController@store','method' => 'Post']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Titel')}}
                </div>
        {!! Form::close() !!}

    @endsection()

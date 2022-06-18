@extends('layouts.app')


@section('content')

    <h1>Create Post</h1>
    
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div style="max-width: 800px" class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>


        <div>
            {{Form::file('cover_image')}}
        </div>
        <br>
        {{Form::submit('Submit', ['class' => 'xxx'])}}



    {!! Form::close() !!}

@endsection
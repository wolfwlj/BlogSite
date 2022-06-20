@extends('layouts.app')


@section('content')
<a href="/dashboard">Back</a>

    <h1>Edit Post</h1>
    
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div style="max-width: 800px" class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>


        <div>
            {{Form::file('cover_image')}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'xxx'])}}



    {!! Form::close() !!}

@endsection
@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{asset('css/create.css')}}">

<a href="/dashboard">Back</a>

    <h1 class="title">Edit Post</h1>
    
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="formTitle">
            {{Form::text('title', $post->title, ['class' => 'titelInput', 'placeholder' => 'Title'])}}
        </div>
        <div class="formBody">
            {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class' => 'bodyInput', 'placeholder' => 'Body'])}}
        </div>


        <div class="formImage">
            {{Form::file('cover_image')}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit Edit', ['class' => 'navButt choosefileButt'])}}



    {!! Form::close() !!}

@endsection
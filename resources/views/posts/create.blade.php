@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{asset('css/create.css')}}">

    <h1 class="title">Create Post</h1>
    
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="formTitle">
            {{Form::text('title', '', ['class' => 'titelInput', 'placeholder' => 'Title'])}}
        </div>
        <div  class="formBody">
            {{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class' => 'bodyInput', 'placeholder' => 'asdasdasdsa'])}}
        </div>


        <div class="formImage">
            {{Form::file('cover_image')}}
        </div>
        <br>
        {{Form::submit('Create Post', ['class' => 'navButt choosefileButt'])}}



    {!! Form::close() !!}

@endsection
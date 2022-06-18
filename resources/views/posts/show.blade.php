@extends('layouts.app')


@section('content')
    <a href="/posts">Back</a>
    <h1>{{$post->title}}</h1>
    <img style="max-width:300px" src="/storage/cover_images/{{$post->cover_image}}" alt="image">
    <br>
    <br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())

        @if(Auth::user()->id == $post->user_id)
            
        <a href="/posts/{{$post->id}}/edit">Edit</a>


        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'xxx'])}}


        {!! Form::close() !!}
        @endif
    @endif
@endsection
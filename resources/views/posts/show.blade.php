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
        <div class="editDiv">
            <a href="/posts/{{$post->id}}/edit"><button class="navButt postButt edit">Edit</button></a>

        </div>


        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'navButt postButt delete'])}}


        {!! Form::close() !!}
        @endif
    @endif
@endsection
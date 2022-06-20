@extends('layouts.app')

<link rel="stylesheet" href="{{asset('css/posts.css')}}">

@section('content')

    <h1 class="title">Recent posts from all users</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
                <div class="topGrid">
                    <div class="gridRow">
                        <img class="img" src="/storage/cover_images/{{$post->cover_image}}" alt="image">
                    </div>
                    <div class="gridRow">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>

        @endforeach
        {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif


@endsection
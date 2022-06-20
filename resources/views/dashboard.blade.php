@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

    <div class="">


            <div class="topSection">
                <h1 class="title">Your Blog's Dashboard</h1>
                <div class="centerFlex">
                    <a href="/posts/create"><button class="navButt">Create post</button></a> 

                </div>
            </div>
            <div class="mainSection">
                <h2>
                    Your posts : 
                </h2>
                
                @if(count($posts) > 0)

                <ul class="responsive-table">

                    @foreach($posts as $post)


                        <li class="table-row">
                            <div class="titleGrid">
                                <div class="col col-1" data-label="Title">{{$post->title}}</div>
                            </div>
                            <div class="buttonGrid">
                                <div class="editDiv" data-label="Edit"><a href="/posts/{{$post->id}}/edit">
                                    
                                    
                                    <button class="navButt postButt edit">Edit</button>
                                
                                
                                </a></div>
                                <div class="deleteDiv" data-label="Delete"> 
                                    <form action="/posts/{{$post->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="navButt postButt delete" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>

                        </li>

                    @endforeach
                </ul>


                    @else
                    <p>No posts found</p>
                    @endif   
            </div>

    </div>
@endsection

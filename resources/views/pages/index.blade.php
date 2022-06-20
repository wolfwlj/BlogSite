@extends('layouts.app')

@section('content')


<h1 class="title">{{$title}}</h1>

<p style="text-align: center; color:red;">
    <b>
        !IMPORTANT: If you do not wish to make an account, you can use this test account :

    </b>
</p>

    <div style="display: flex; justify-content:center;">
        
        <div style="margin-right: 2rem">
            <b>Email:</b>
            <p>test@test.com</p>
        </div>

        <div>
            <b>Password:</b>
            <p>test1234</p>
        </div>

        
    </div>

    


@endsection
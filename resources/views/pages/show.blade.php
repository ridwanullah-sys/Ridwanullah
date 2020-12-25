@extends('layouts.app')

@section('content')
        <a href="http:/" class="btn btn-secondary">Go Back</a>

        <h1>{{$posts->title}}</h1>

        <div>
            {!!$posts->description!!}
        </div>
        <hr>
        <small>written on {{$posts->created_at}} by {{$posts->user->name}}</small>
        <hr>
        @if (!Auth::guest())
                 @if (Auth::user()->id == $posts->user_id)
                        <a href="/post/{{$posts->id}}/edit" class="btn btn-primary">EDIT</a> 
                        {!! Form::open(['action' => ['App\Http\Controllers\postscontroller@destroy', $posts->id], 'method' => 'POST', 'class'=> 'float-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!! Form::close() !!}
                        @endif

        @endif




    
@endsection
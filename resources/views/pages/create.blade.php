@extends('layouts.dashboard')

@section('content')
      <h1>Create Post</h1>
      {!! Form::open(['action' => 'App\Http\Controllers\postscontroller@store', 'method' => 'POST']) !!}
      <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'your title'])}}
      </div>
      <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Describe your title'])}}
        </div>
        {{Form::submit('submit', ['class' => 'btn btn-success'])}}
      {!! Form::close() !!}
      @endsection
@extends('layouts.dashboard')

@section('content')

      <h1>EDIT</h1>
      {!! Form::open(['action' => ['App\Http\Controllers\postscontroller@update', $posts->id], 'method' => 'POST']) !!}
      <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', $posts->title, ['class' => 'form-control', 'placeholder' => 'your title'])}}
      </div>
      <div class="form-group">
        {{Form::label('Description', 'Description')}}
        {{Form::textarea('description', $posts->description, ['class' => 'form-control', 'placeholder' => 'Describe your title'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('submit', ['class' => 'btn btn-success'])}}
      {!! Form::close() !!}
      
@endsection
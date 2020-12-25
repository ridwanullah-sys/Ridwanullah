@extends('layouts.dashboard')

@section('content')

                
                
                    <table class="table table-striped">
                        <tr>
                            <th>DASHBOARD</th>
                        </tr>
                        <tr>
                            <th><strong> id</strong></th>
                            <th><strong> title </strong></th>
                            <th><strong> description </strong></th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td> {!! $post->id !!} </td>
                            <td> {!! $post->title !!} </td>
                            <td> {!! $post->description !!} </td>
                            <td> <a href="/post/{{$post->id}}/edit" class="btn btn-primary">EDIT</a> </td>
                            <td>{!! Form::open(['action' => ['App\Http\Controllers\postscontroller@destroy', $post->id], 'method' => 'POST', 'class'=> 'float-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                           <td><small> <a href="/post/create" class="btn btn-primary">create new post</a></small> </td>
                        </tr>
                    </table>
                
@endsection

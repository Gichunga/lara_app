@extends('layouts.app')

@section('content')
<div class="card m-3">
    <div class="card-header">
        <a href="/posts" class="btn btn-sm btn-primary">Go back</a>
        <h2>{{$post->title}}</h2>
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
                <div class="d-inline">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary btn-sm">Edit</a>
                    {!! Form::open(['class'=>'d-inline', 'action'=>['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST']) !!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete', ['class'=>'btn btn-danger btn-sm'])}}
                    {!!Form::close()!!}
                </div>
            @endif        
        @endif
       
    </div>
    <div class="card-body">
        {{-- To parse the html use {!! $variable !!} --}}
        <p>{!!$post->body!!}</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">Writen {{ $post->created_at->diffForHumans()}} by {{$post->user->name}}</small>
    </div>
</div>

@endsection
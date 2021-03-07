@extends('layouts.app')

@section('content')
<div class="card m-3">
    <div class="card-header">
        <a href="/posts" class="btn btn-small btn-primary">Go back</a>
        <h2>{{$post->title}}</h2>
    </div>
    <div class="card-body">
        <p>{{$post->body}}</p>
    </div>
    <div class="card-footer">
        <small class="text-muted">Writen on {{ $post->created_at}}</small>
    </div>
</div>

@endsection
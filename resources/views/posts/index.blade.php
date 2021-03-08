@extends('layouts.app')

@section('content')
    <h1 class="border-bottom">Posts Available</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3">
                <h3 class="card-header"><a class="text-decoration-none" href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                <div class="card-body">
                    <p>{!!$post->body!!}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Writen {{$post->created_at->diffForHumans()}} by {{ $post->user->name}}</small>
                </div>
            </div>
        @endforeach
        {{ $posts->links("inc.pagination") }}
    @else
        <p>No post available</p>
    @endif
@endsection
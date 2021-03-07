@extends('layouts.app')

@section('content')
    <h1 class="border-bottom">Posts Available</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3">
                <h3 class="card-header"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                <div class="card-body">
                    <p>{{$post->body}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Writen on {{ $post->created_at}}</small>
                </div>
            </div>
        @endforeach
        <p>{{$posts->links()}}</p>
    @else
        <p>No post available</p>
    @endif
@endsection
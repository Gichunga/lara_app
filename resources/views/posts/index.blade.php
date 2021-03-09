@extends('layouts.app')

@section('content')
    <h1 class="border-bottom">Posts Available</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-4 col-sm-4 m-0 p-0">
                        <img class="img-responsive rounded" src="/storage/cover_images/{{ $post->cover_image }}" alt="cover-image" style="width:100%; height:100%">
                    </div>
                    <div class="col-md-8 col-sm-4" style="height: 100%;">
                        <h3 class="card-header"><a class="text-decoration-none" href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                        <div class="card-body">
                            <p>{!!$post->body!!}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Writen {{$post->created_at->diffForHumans()}} by {{ $post->user->name}}</small>
                        </div>
                    </div> 
                </div>   
            </div>
        @endforeach
        {{ $posts->links("inc.pagination") }}
    @else
        <p>No post available</p>
    @endif
@endsection
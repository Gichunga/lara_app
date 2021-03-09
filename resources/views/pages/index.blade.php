@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
                <h1>{{$title}}</h1>
                <p>Welcome to the "Lara_App Blog" from <strong>Stegplus Media Group</strong> </p>
                <p><a href={{ route ('login') }} role="button" class="btn btn-primary btn-lg mr-2">Login</a><a href={{ route ('register') }} role="button" class="btn btn-success btn-lg">Register</a></p>
        </div>
        
@endsection

@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-4 offset-4">
                    <a href="/profile/{{$post->user->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-4 offset-4">
                    <p>
                        <span><strong><a href="/profile/{{$post->user->id}}"><span
                                        class="text-dark"> {{$post->user->username}}</span></a></strong></span>
                        {{$post->caption}}</p>

                    <hr>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection

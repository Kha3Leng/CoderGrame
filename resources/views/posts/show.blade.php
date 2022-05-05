@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4 mt-5">
                <img src="/storage/{{$post->image}}" class="w-100">
            </div>
            <div class="col-4 mt-5">
                <div class="d-flex align-items-center">
                    <div style="margin-right: 20px;">
                        <img class="rounded-circle" src="{{$post->user->profile->profileImage()}}" style="max-width: 40px;">
                    </div>
                    <div>
                        <div><strong>
                                <a href="/profile/{{$post->user->id}}"><span class="text-dark"> {{$post->user->username}}</span></a>    |
                                <a href="#" style="padding-left: 3px;">follow</a>
                            </strong></div>
                    </div>
                </div>
                <hr>
                <p>
                    <span><strong><a href="/profile/{{$post->user->id}}"><span class="text-dark"> {{$post->user->username}}</span></a></strong></span>
                {{$post->caption}}</p>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <h1>Edit Profile</h1>
        </div>
        <div class="row">
            <div class="row mb-3">
                <label for="title" class="col-md-6 col-form-label">title</label>

                <input id="title" type="text" class="form-control
             @error('title') is-invalid @enderror" name="title"
                       value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                @error('title')
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="row mb-3">
                <label for="description" class="col-md-6 col-form-label">description</label>

                <input id="description" type="text" class="form-control
             @error('description') is-invalid @enderror" name="description"
                       value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

                @error('description')
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="row mb-3">
                <label for="url" class="col-md-6 col-form-label">url</label>

                <input id="url" type="text" class="form-control
             @error('url') is-invalid @enderror" name="url"
                       value="{{ old('url') ?? $user->profile->url}}" autocomplete="url" autofocus>

                @error('url')
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <label for="image" class="col-md-6 col-form-label">Post Image</label>
            <input type="file" id="image" name="image" class="form-control">
            @error('image')
            <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="row mt-3">
            <button class="btn btn-primary">Save Profile</button>
        </div>
    </form>

</div>
@endsection

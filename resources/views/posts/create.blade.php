@extends('layouts.app')

@section('content')
<div class="container">
<form action="/p" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <h1>Add New Post</h1>
    </div>
    <div class="row">
        <div class="row mb-3">
            <label for="caption" class="col-md-6 col-form-label">Post Caption</label>

            <input id="caption" type="text" class="form-control
             @error('caption') is-invalid @enderror" name="caption"
                   value="{{ old('caption') }}" autocomplete="caption" autofocus>

            @error('caption')
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
            @enderror
        </div>
    </div>

    <div class="row">
    <label for="image" class="col-md-6 col-form-label">Profile Image</label>
        <input type="file" id="image" name="image" class="form-control">
        @error('image')
        <strong>{{ $message }}</strong>
        @enderror
    </div>

    <div class="row mt-3">
        <button class="btn btn-primary">Add Post</button>
    </div>
</form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">

        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')

                <div class="row">
                        <div class="col-8 offset-2">

                            <div class="row">
                                <h1>Edit Profile</h1>
                            </div>

                                <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label">
                                            Title
                                        </label>

                                            <input id="title"
                                            type="text"
                                            class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                            name="title"
                                            value="{{ old('title') ?? $user->profile->title }}"
                                            autocomplete="title" autofocus>

                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group row">
                                                <label for="description" class="col-md-4 col-form-label">
                                                    Description
                                                </label>

                                                    <input id="description"
                                                    type="text"
                                                    class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                    name="description"
                                                    value="{{ old('description') ?? $user->profile->description }}"
                                                    autocomplete="description" autofocus>

                                                    @if ($errors->has('description'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="form-group row">
                                                        <label for="Url" class="col-md-4 col-form-label">
                                                            Url
                                                        </label>

                                                            <input id="Url"
                                                            type="text"
                                                            class="form-control{{ $errors->has('Url') ? ' is-invalid' : '' }}"
                                                            name="Url"
                                                            value="{{ old('Url') ?? $user->profile->url }}"
                                                            autocomplete="Url" autofocus>

                                                            @if ($errors->has('Url'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('Url') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>

                                        <div class="row">
                                            <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                                            <input type="file" class="form-control-file" id="image" name="image">

                                            @if ($errors->has('image'))
                                                    <strong>{{ $errors->first('image') }}</strong>
                                            @endif

                                        </div>

                                        <div class="row pt-4">
                                            <button class="btn btn-primary">Save Profile</button>
                                        </div>

                        </div>
                    </div>
        </form>
</div>
@endsection

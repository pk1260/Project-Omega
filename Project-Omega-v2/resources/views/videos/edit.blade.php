@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ Auth::user()->name }}{{ __("'s Video Dashboard") }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-right" style="float: right">
                                    <a class="btn btn-primary" href="{{ route('videos.index') }}" title="Go back">Return to Dashboard</a>
                                </div>
                                <div class="pull-left">
                                    <h2>Edit Product</h2>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('videos.update', $video->id) }}" method="POST">
                            {{-- SCRF token is used as security messure. to add a hidden field that sends a token to authenticate if they request came from this form.--}}
                            {{-- @method('PUT') is a action handler in laravel for the resource controller that updates the files if edited.--}}

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" value="{{ $video->name }}" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>File:</strong>
                                        <input type="file" class="form-control @error('video') is-invalid @enderror" name="video">
                                        @error('video')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                @csrf
                                @method('PUT')
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary" style="float: left">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

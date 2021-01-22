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
                                    <h4>Uploaded by: {{ Auth::user()->name }}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Video Title:</strong>
                                    {{ $video->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <video width="100%" height="auto" controls>
                                        <source src="{{ $video->video_path }}">
                                    </video>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="float: left">
                                    <strong>Date Created:</strong>
                                    {{ date_format($video->created_at, 'jS M Y') }}
                                    <strong>Publisher:</strong>
                                    {{ $video->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

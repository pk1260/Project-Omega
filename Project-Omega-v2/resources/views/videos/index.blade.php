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
                                <div class="pull-right">
                                    <a class="btn btn-success" href="{{ route('videos.create') }}" title="Create a video">Upload Video Post</a>
                                </div><br>
                            </div>
                        </div>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered table-responsive-lg">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Date Created</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($videos as $video)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $video->name }}</td>
                                    <td>{{ date_format($video->created_at, 'jS M Y') }}</td>
                                    <td>
                                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST">
                                            {{-- SCRF token is used as security messure. to add a hidden field that sends a token to authenticate if they request came from this form.--}}
                                            {{-- @method('DELETE') is a action handler in laravel for the resource controller that Deletes the files if deleted.--}}

                                            <a href="{{ route('videos.show', $video->id) }}" title="show" style="text-decoration: none">
                                                <div class="btn btn-light">View</div>
                                            </a>
                                            <a href="{{ route('videos.edit', $video->id) }}" title="edit" style="text-decoration: none">
                                                <div class="btn btn-primary">Edit</div>
                                            </a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"     title="delete" style="text-decoration: none">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $videos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

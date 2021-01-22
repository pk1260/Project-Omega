@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __("Video Dashboard") }}</div>
                    <div class="card-body">
                        <table class="table table-bordered table-responsive-lg">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Date Created</th>
                                <th width="280px">Action</th>
                            </tr>
{{--                            @foreach ($videos as $item)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ ++$i }}</td>--}}
{{--                                    <td>{{ $item->name }}</td>--}}
{{--                                    <td>{{ $item->video }}</td>--}}
{{--                                    <td>{{ date_format($item->created_at, 'jS M Y') }}</td>--}}
{{--                                </tr>--}}

{{--                                <td>--}}
{{--                                    <form action="{{ route('videos.show', $video->id) }}" method="POST">--}}
{{--                                         SCRF token is used as security messure. to add a hidden field that sends a token to authenticate if they request came from this form.--}}
{{--                                         @method('DELETE') is a action handler in laravel for the resource controller that Deletes the files if deleted.--}}
{{--                                        @csrf--}}
{{--                                        <button type="submit" title="show" class="btn btn-light">View</button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            @endforeach--}}
                        </table>
{{--                        {!! $videos->links() !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

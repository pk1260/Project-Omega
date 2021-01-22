<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::latest()->paginate(5);

        return view('videos.index', compact('videos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request to see if the upload has a name and is a string.
        // And validate if the upload is the specific video tyle: Mp4 Webm Oog.
        $request->validate([
            'name' => 'required|string',
            'video' => 'required|mimes:mp4,oog,webm',
        ]);

        $file = request()->file('video');
        $path = '/video';
        $file->store($path, ['disk' => 'public_files']);

        $video = new Video();
        $video->name = $request->name;
        $video->video_path = $path . '/' . $file->hashName();
        $video->user_id = Auth::id();
        $video->save();

        return redirect()->route('videos.index')
            ->with('success', 'Video has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return view('videos.show', compact('video'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'name' => 'required|string',
            'video' => 'required',
        ]);

        $video->update($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Video Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('videos.index')
            ->with('success', 'Video Item deleted successfully');
    }
}

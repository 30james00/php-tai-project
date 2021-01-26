<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Mockery\Undefined;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $public = Photo::where('public', 1)->get();
        $private = Photo::where('public', 0)->where('user', auth()->user()->id)->get();
        return view('view-uploads', ['public' => $public, 'private' => $private]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check if file was 
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                //validation
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                    'public' => '',
                ]);
                //checkbox to boolean
                $public = isset($validated['public']) ? true : false;
                //create uuid
                $id = Str::orderedUuid();
                //create filename
                $extension = $request->image->extension();
                $url = $id . "." . $extension;
                $request->image->storeAs('/images', $url);
                $file = Photo::create([
                    'id' => $id,
                    'name' => $validated['name'],
                    'user' => auth()->user()->id,
                    'url' => $url,
                    'public' => $public,
                ]);
                Session::flash('success', "Success!");
                return \Redirect::back();
            }
        }
        abort(500, 'Could not upload image :(');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('view-photo', [
            'photo' => $photo,
        ]);
    }

    public function showImage(string $path)
    {
        if (Storage::disk('local')->exists('images/' . $path)) {

            return response()->file(storage_path('app/images/' . $path));
        }
        abort(500, 'Could not upload image :(');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('edit-photo')->with('photo', $photo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $validated = $request->validate([
            'name' => 'string|max:40',
        ]);
        $photo->name = $validated['name'];
        $photo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //delete file
        Storage::delete('/images/'.$photo->url);
        //delete form database
        $photo->delete();
        //redirect to the same page
        return back();
    }
}

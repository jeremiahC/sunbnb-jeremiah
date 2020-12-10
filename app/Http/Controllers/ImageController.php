<?php

namespace App\Http\Controllers;

use App\User;
use App\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        // $profImg = User::find(1)->gravatar();
        return view('images.upload', compact('images'));
    }

    public function upload(Request $request)
    {
        foreach ($request->file('photo') as $photo) {
            // Save to Folder
            $filename = $photo->getClientOriginalName();
            $path = $photo->storeAs("public/photos", $filename);
            $publicPath = Storage::url($path);

            Image::create([
                'file_location' => $publicPath,
            ]);
        }

        return response()->json(['success']);
    }

    public function destroy(Request $request, Image $image)
    {
        $image->delete();
        return response()->json(['message' => 'success', 'id' => $image->id]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\media;
use Illuminate\Support\Facades\Storage;



class ImageController extends Controller
{
    public function generateThumbnailindex(){
        return view('dev.thumbnail');
    }
    
    public function generateThumbnail(Request $request)
    {
        $url = $request->input('url');

        try {
            // Open the image from the URL
            $image = Image::make($url);

            // Resize the image to create a thumbnail
            $thumbnail = $image->resize(125, 170);

            // return response()->json(['thumbnail_url' => $thumbnail->encode('data-url')]);
            // Storage::disk('public')->put($filename, $thumbnail->encode());
            
            // Save the thumbnail (optional)
            $thumbnailPath = storage_path('thumbnails/' . basename($url));
            $filename = 'thumbnails/' . basename($url);
            $thumbnail->save($thumbnailPath);

            
            // $db_record = ['original_file_name' => $url,'thumbnail_path' => asset('thumbnails/' . basename($url))];
            // media::create($db_record);
            
            
            // Return the thumbnail URL
            return response()->json(['thumbnail_url' => asset('thumbnails/' . basename($url))]);
        } catch (\Exception $e) {
            // Handle any exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ImageKit\ImageKit;
use Illuminate\Support\Facades\Log;

class ImageKitController extends Controller
{
    private $imageKit;

    public function __construct()
    {
        $this->imageKit = new ImageKit(
            env('IMAGEKIT_PUBLIC_KEY'),
            env('IMAGEKIT_PRIVATE_KEY'),
            env('IMAGEKIT_URL_ENDPOINT')
        );
    }

    public function showUploadForm()
    {
        return view('admin.upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'caption' => 'required|string|max:255'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Upload to ImageKit
            try {
                $uploadFile = $this->imageKit->uploadFile([
                    'file' => base64_encode(file_get_contents($file->getRealPath())),
                    'fileName' => $file->getClientOriginalName(),
                    'folder' => 'portfolio_uploads' // Enforce specific folder
                ]);

                if ($uploadFile->error) {
                    return back()->with('error', 'Upload Failed: ' . $uploadFile->error->message);
                }

                // Save to Database
                \App\Models\Portfolio::create([
                    'name' => $request->input('caption'), // Use user caption
                    'url' => $uploadFile->result->url,
                    'thumbnail_url' => $uploadFile->result->thumbnailUrl,
                    'file_id' => $uploadFile->result->fileId
                ]);

                return back()->with('success', 'Image Uploaded & Saved to Database Successfully!')
                    ->with('url', $uploadFile->result->url)
                    ->with('thumbnail', $uploadFile->result->thumbnailUrl);
            } catch (\Exception $e) {
                Log::error('ImageKit Upload Error: ' . $e->getMessage());
                return back()->with('error', 'Something went wrong: ' . $e->getMessage());
            }
        }

        return back()->with('error', 'No file selected.');
    }
}

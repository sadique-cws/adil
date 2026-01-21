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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480', // 20MB Max
            'folder' => 'nullable|string',
            'password' => 'required'
        ]);

        if ($request->input('password') !== 'Dildar@123') {
            return back()->with('error', 'Invalid Password! Access Denied.');
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Upload to ImageKit
            try {
                $uploadFile = $this->imageKit->uploadFile([
                    'file' => base64_encode(file_get_contents($file->getRealPath())),
                    'fileName' => $file->getClientOriginalName(),
                    'folder' => $request->input('folder', 'portfolio_uploads')
                ]);

                if ($uploadFile->error) {
                    return back()->with('error', 'Upload Failed: ' . $uploadFile->error->message);
                }

                return back()->with('success', 'Image Uploaded Successfully!')
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

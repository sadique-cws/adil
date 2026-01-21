<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ImageKit\ImageKit;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
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

    public function index()
    {
        // specific: Fetch from local database instead of API
        // This is faster and uses the stored data from uploads
        $images = \App\Models\Portfolio::latest()->get();

        return view('portfolio', ['images' => $images]);
    }

    public function delete($id)
    {
        try {
            $portfolio = \App\Models\Portfolio::findOrFail($id);

            // Delete from ImageKit if file_id exists
            if ($portfolio->file_id) {
                try {
                    $this->imageKit->deleteFile($portfolio->file_id);
                } catch (\Exception $e) {
                    Log::warning('ImageKit deletion failed: ' . $e->getMessage());
                    // Continue anyway to delete from database
                }
            }

            // Delete from database
            $portfolio->delete();

            return redirect()->route('portfolio')->with('success', 'Portfolio item deleted successfully!');
        } catch (\Exception $e) {
            Log::error('Portfolio deletion error: ' . $e->getMessage());
            return redirect()->route('portfolio')->with('error', 'Failed to delete portfolio item.');
        }
    }
}

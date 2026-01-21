<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $enquiries = Enquiry::latest()->get();
        // Also fetch recent portfolios for summary?
        $portfolios = Portfolio::latest()->take(5)->get();

        return view('admin.dashboard', compact('enquiries', 'portfolios'));
    }
}

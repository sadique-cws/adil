<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Mail\EnquiryReceived;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:10',
            'email' => 'nullable|email',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
            'type' => 'required|in:contact,quick,quote'
        ]);

        // Create Enquiry
        $enquiry = Enquiry::create($validated);

        // Send Email
        try {
            Mail::to('dildarh330@gmail.com')->send(new EnquiryReceived($enquiry));
        } catch (\Exception $e) {
            // Log error but don't fail the request
            Log::error('Mail send failed: ' . $e->getMessage());
        }

        return response()->json(['success' => true, 'message' => 'Enquiry submitted successfully!']);
    }
}

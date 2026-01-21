@extends('layouts.main')

@section('title', 'Admin Dashboard')

@section('content')
<section class="section" style="padding-top: 150px; min-height: 80vh;">
    <div class="container">
        <!-- Header -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; flex-wrap: wrap; gap: 20px;">
            <div>
                <h2>Hello, {{ Auth::user()->name }}</h2>
                <p style="color: var(--text-secondary);">Admin Dashboard</p>
            </div>
            <div style="display: flex; gap: 10px;">
                <a href="{{ route('admin.upload') }}" class="btn-primary" style="text-decoration: none; padding: 10px 20px; border-radius: 50px; background: var(--accent-color); color: white;">
                    <i class="fas fa-image"></i> Add Portfolio
                </a>
                <a href="{{ route('logout') }}" style="text-decoration: none; padding: 10px 20px; border-radius: 50px; background: rgba(255,50,50,0.1); color: #ff6b6b; border: 1px solid rgba(255,50,50,0.3);">
                    Logout
                </a>
            </div>
        </div>

        <!-- Enquiries Table -->
        <div class="glass-enquiry-card" style="padding: 30px; overflow-x: auto;">
            <h3 style="margin-bottom: 20px;"><i class="fas fa-envelope-open-text"></i> Recent Enquiries</h3>

            @if($enquiries->count() > 0)
            <table style="width: 100%; border-collapse: collapse; min-width: 600px;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--accent-color);">
                        <th style="padding: 15px; text-align: left;">Type</th>
                        <th style="padding: 15px; text-align: left;">Name</th>
                        <th style="padding: 15px; text-align: left;">Contact</th>
                        <th style="padding: 15px; text-align: left;">Message/Subject</th>
                        <th style="padding: 15px; text-align: left;">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enquiries as $enquiry)
                    <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                        <td style="padding: 15px;">
                            <span style="background: rgba(255,255,255,0.1); padding: 5px 10px; border-radius: 4px; font-size: 0.8em;">
                                {{ ucfirst($enquiry->type) }}
                            </span>
                        </td>
                        <td style="padding: 15px; font-weight: bold;">{{ $enquiry->name }}</td>
                        <td style="padding: 15px;">
                            <div>{{ $enquiry->phone }}</div>
                            <div style="font-size: 0.85em; color: var(--text-secondary);">{{ $enquiry->email }}</div>
                        </td>
                        <td style="padding: 15px;">
                            @if($enquiry->subject)
                            <strong>{{ $enquiry->subject }}</strong><br>
                            @endif
                            <span style="font-size: 0.9em; color: var(--text-secondary);">{{ Str::limit($enquiry->message, 50) }}</span>
                        </td>
                        <td style="padding: 15px; white-space: nowrap;">{{ $enquiry->created_at->format('d M, h:i A') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p style="text-align: center; color: var(--text-secondary); padding: 40px;">No enquiries received yet.</p>
            @endif
        </div>
    </div>
</section>
@endsection
@extends('layouts.main')

@section('title', 'Upload Images to ImageKit')

@section('content')
<section class="section" style="padding-top: 150px; min-height: 80vh;">
    <div class="container">
        <div class="glass-enquiry-card" style="max-width: 600px; margin: 0 auto;">
            <div class="row">
                <div class="col-12" style="text-align: center; margin-bottom: 30px;">
                    <h2>Upload Image</h2>
                    <p>Upload new project images directly to ImageKit CDN.</p>
                </div>
            </div>

            @if(session('success'))
            <div style="background: #dcfce7; color: #166534; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <strong><i class="fas fa-check-circle"></i> {{ session('success') }}</strong>
                <div style="margin-top: 10px;">
                    <p style="font-size: 0.9rem; margin-bottom: 5px;">Image URL:</p>
                    <input type="text" value="{{ session('url') }}" readonly style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" onclick="this.select()">
                </div>
                <div style="margin-top: 10px;">
                    <img src="{{ session('url') }}" alt="Uploaded" style="max-height: 150px; border-radius: 4px;">
                </div>
            </div>
            @endif

            @if(session('error'))
            <div style="background: #fee2e2; color: #991b1b; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                <strong><i class="fas fa-exclamation-circle"></i> {{ session('error') }}</strong>
            </div>
            @endif

            <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data" class="quick-form" style="flex-direction: column;">
                @csrf

                <div class="input-group" style="width: 100%; margin-bottom: 20px;">
                    <i class="fas fa-image"></i>
                    <input type="file" name="image" required accept="image/*" style="padding-left: 50px;">
                </div>

                <div class="input-group" style="width: 100%; margin-bottom: 20px;">
                    <i class="fas fa-folder"></i>
                    <input type="text" name="folder" placeholder="Folder Name (Optional, e.g. /services)" style="padding-left: 50px;">
                </div>

                <div class="input-group" style="width: 100%; margin-bottom: 20px;">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" required placeholder="Admin Password" style="padding-left: 50px;">
                </div>

                <button type="submit" class="btn-submit" style="width: 100%; justify-content: center;">
                    <i class="fas fa-cloud-upload-alt"></i> Upload Now
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
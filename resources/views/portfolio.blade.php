@extends('layouts.main')

@section('title', 'Our Portfolio | Adil Steels & Glasses')

@section('content')
<!-- Page Header -->
<div style="position: relative; padding: 180px 0 100px; text-align: center; overflow: hidden;">
    <!-- Background Image -->
    <div style="position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2000&auto=format&fit=crop') center/cover; opacity: 0.3; z-index: -2;"></div>
    <!-- Gradient Overlay -->
    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent, var(--primary-solid)); z-index: -1;"></div>

    <div class="container">
        <h1 style="font-size: 3.5rem; margin-bottom: 20px;">Portfolio</h1>
        <p style="font-size: 1.25rem; color: var(--text-secondary); max-width: 600px; margin: 0 auto;">A Showcase of Excellence in Glass & Steel</p>
    </div>
</div>

<section class="section">
    <div class="container">

        {{-- Success/Error Messages --}}
        @if(session('success'))
        <div style="background: linear-gradient(135deg, #dcfce7, #d1fae5); border-left: 4px solid #22c55e; color: #166534; padding: 18px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 12px rgba(34, 197, 94, 0.15);">
            <div style="display: flex; align-items: center; gap: 12px;">
                <i class="fas fa-check-circle" style="font-size: 22px; color: #22c55e;"></i>
                <strong>{{ session('success') }}</strong>
            </div>
        </div>
        @endif

        @if(session('error'))
        <div style="background: linear-gradient(135deg, #fee2e2, #fecaca); border-left: 4px solid #ef4444; color: #991b1b; padding: 18px; border-radius: 12px; margin-bottom: 30px; box-shadow: 0 4px 12px rgba(239, 68, 68, 0.15);">
            <div style="display: flex; align-items: center; gap: 12px;">
                <i class="fas fa-exclamation-triangle" style="font-size: 22px;"></i>
                <strong>{{ session('error') }}</strong>
            </div>
        </div>
        @endif

        <div class="gallery-grid">
            {{-- Dynamic Images from ImageKit --}}
            @if(isset($images) && count($images) > 0)
            @foreach($images as $img)
            <div class="gallery-item" style="position: relative;">
                <img src="{{ $img->url }}" alt="{{ $img->name }}" loading="lazy">
                <div class="gallery-overlay">
                    <h4>{{ $img->name }}</h4>
                    <p>Project</p>
                </div>

                {{-- Delete Button (Admin Only) --}}
                @auth
                <form action="{{ route('admin.portfolio.delete', $img->id) }}" method="POST" style="position: absolute; top: 10px; right: 10px; z-index: 10;" onsubmit="return confirm('Are you sure you want to delete this item?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #ef4444, #dc2626); border: 2px solid white; color: white; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4); transition: all 0.3s ease;">
                        <i class="fas fa-trash-alt" style="font-size: 16px;"></i>
                    </button>
                </form>
                @endauth
            </div>
            @endforeach
            @else
            <div style="grid-column: 1 / -1; text-align: center; color: var(--text-secondary); padding: 50px;">
                <p>No projects uploaded yet.</p>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Video Showcase Section -->
<section class="section" style="background: var(--secondary-solid); padding: 80px 0;">
    <div class="container">
        <div class="section-title">
            <span>Live Work</span>
            <h2>Video Showcase</h2>
        </div>

        <div class="video-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <!-- Video 1 -->
            <div class="video-wrapper">
                <video poster="" preload="metadata">
                    <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="play-button"><i class="fas fa-play"></i></div>
                <div class="video-progress-container">
                    <div class="video-progress-filled"></div>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-wrapper">
                <video poster="" preload="metadata">
                    <source src="{{ asset('videos/2.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="play-button"><i class="fas fa-play"></i></div>
                <div class="video-progress-container">
                    <div class="video-progress-filled"></div>
                </div>
            </div>

            <!-- Video 3 -->
            <div class="video-wrapper">
                <video poster="" preload="metadata">
                    <source src="{{ asset('videos/3.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="play-button"><i class="fas fa-play"></i></div>
                <div class="video-progress-container">
                    <div class="video-progress-filled"></div>
                </div>
            </div>

            <!-- Video 4 -->
            <div class="video-wrapper">
                <video poster="" preload="metadata">
                    <source src="{{ asset('videos/4.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="play-button"><i class="fas fa-play"></i></div>
                <div class="video-progress-container">
                    <div class="video-progress-filled"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
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

        <div class="gallery-grid">
            <!-- Commercial / Office -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=800&auto=format&fit=crop" alt="Office Glass Sliders">
                <div class="gallery-overlay">
                    <h4>Office Glass Sliders</h4>
                    <p>Commercial</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1577412647305-991150c7d163?q=80&w=800&auto=format&fit=crop" alt="Glass Partitions">
                <div class="gallery-overlay">
                    <h4>Glass Cabin Partitions</h4>
                    <p>Commercial</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=800&auto=format&fit=crop" alt="Mall Facade">
                <div class="gallery-overlay">
                    <h4>Mall Glass Facade</h4>
                    <p>Commercial</p>
                </div>
            </div>

            <!-- Doors & Windows (PVC/Aluminum) -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1503708928676-1cb796a0891e?q=80&w=800&auto=format&fit=crop" alt="PVC Window Fitting">
                <div class="gallery-overlay">
                    <h4>PVC Window Fitting</h4>
                    <p>Residential</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1489171078254-c3365d6e3dc3?q=80&w=800&auto=format&fit=crop" alt="Modern Door">
                <div class="gallery-overlay">
                    <h4>Aluminum Entrance Door</h4>
                    <p>Residential</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=800&auto=format&fit=crop" alt="Sliding Windows">
                <div class="gallery-overlay">
                    <h4>UPVC Sliding Windows</h4>
                    <p>Residential</p>
                </div>
            </div>

            <!-- Custom / Heavy Work -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800&auto=format&fit=crop" alt="Steel Staircase">
                <div class="gallery-overlay">
                    <h4>Steel Staircase</h4>
                    <p>Custom Work</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1595846723223-96b42b6a7a0b?q=80&w=800&auto=format&fit=crop" alt="Glass Railing">
                <div class="gallery-overlay">
                    <h4>Balcony Glass Railing</h4>
                    <p>Residential</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1615529182904-14819c35db37?q=80&w=800&auto=format&fit=crop" alt="Decorative Gate">
                <div class="gallery-overlay">
                    <h4>Decorative Steel Gate</h4>
                    <p>Custom Work</p>
                </div>
            </div>
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

        <div class="video-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            <!-- Video 1 -->
            <div class="video-item" style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative;">
                <video controls width="100%" height="auto" style="display: block; width: 100%; height: 100%; object-fit: cover;" poster="">
                    <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Video 2 -->
            <div class="video-item" style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative;">
                <video controls width="100%" height="auto" style="display: block; width: 100%; height: 100%; object-fit: cover;" poster="">
                    <source src="{{ asset('videos/2.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Video 3 -->
            <div class="video-item" style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative;">
                <video controls width="100%" height="auto" style="display: block; width: 100%; height: 100%; object-fit: cover;" poster="">
                    <source src="{{ asset('videos/3.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Video 4 -->
            <div class="video-item" style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); position: relative;">
                <video controls width="100%" height="auto" style="display: block; width: 100%; height: 100%; object-fit: cover;" poster="">
                    <source src="{{ asset('videos/4.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>
@endsection
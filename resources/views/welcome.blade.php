@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-glass-card">
            <h1>Crafting Excellence in <br><span>Glass & Steel</span></h1>
            <p>Premium fabrication solutions for modern architectural projects. We specialize in Aluminum, PVC, and Custom Iron work with precision engineering.</p>
            <div class="hero-btns">
                <a href="{{ route('portfolio') }}" class="btn-primary">View Projects</a>
                <a href="{{ route('contact') }}" class="btn-secondary">Get Quote</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>What We Do</span>
            <h2>Our Core Services</h2>
        </div>

        <div class="services-grid">
            <!-- Featured Service 1: Structure Glazing -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop" alt="Structure Glazing" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 30px;">
                    <div class="icon-box" style="margin-top: -60px; background: white; border: 2px solid #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <i class="fas fa-city"></i>
                    </div>
                    <h3>Structure Glazing</h3>
                    <p>Modern glass facades for commercial buildings.</p>
                </div>
            </div>

            <!-- Featured Service 2: Modular Kitchen -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=800&auto=format&fit=crop" alt="Modular Kitchen" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 30px;">
                    <div class="icon-box" style="margin-top: -60px; background: white; border: 2px solid #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Modular Kitchen</h3>
                    <p>Sleek, functional, and modern kitchen designs.</p>
                </div>
            </div>

            <!-- Featured Service 3: UPVC Solutions -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1503708928676-1cb796a0891e?q=80&w=800&auto=format&fit=crop" alt="UPVC Windows" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 30px;">
                    <div class="icon-box" style="margin-top: -60px; background: white; border: 2px solid #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        <i class="fas fa-door-open"></i>
                    </div>
                    <h3>UPVC Windows & Doors</h3>
                    <p>Soundproof and energy-efficient home solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Recent Work</span>
            <h2>Project Showcase</h2>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=800&auto=format&fit=crop" alt="Mall Glass Facade">
                <div class="gallery-overlay">
                    <h4>Mall Glass Facade</h4>
                    <p>Commercial</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=800&auto=format&fit=crop" alt="Modern Home Windows">
                <div class="gallery-overlay">
                    <h4>Modern Home Windows</h4>
                    <p>Residential</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800&auto=format&fit=crop" alt="Steel Staircase">
                <div class="gallery-overlay">
                    <h4>Steel Staircase</h4>
                    <p>Custom Work</p>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 60px;">
            <a href="{{ route('portfolio') }}" class="btn-secondary">View Full Portfolio</a>
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
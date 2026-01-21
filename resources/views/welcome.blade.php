@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1>Crafting Excellence in <br><span>Glass & Steel</span></h1>
        <p>Premium fabrication solutions for modern architectural projects. We specialize in Aluminum, PVC, and Custom Iron work with precision engineering.</p>
        <div class="hero-btns">
            <a href="{{ route('portfolio') }}" class="btn-primary">View Projects</a>
            <a href="{{ route('contact') }}" class="btn-secondary">Get Quote</a>
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
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 20px; transition: all 0.4s ease;">
                <div style="height: 200px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop" alt="Structure Glazing" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                </div>
                <div style="padding: 30px;">
                    <div class="icon-box" style="margin-top: -65px; background: linear-gradient(135deg, #3b82f6, #1d4ed8); border: 3px solid #fff; box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4); position: relative; z-index: 1;">
                        <i class="fas fa-building" style="color: white;"></i>
                    </div>
                    <h3 style="margin-top: 20px;">Structure Glazing</h3>
                    <p>Modern glass facades for commercial buildings.</p>
                </div>
            </div>

            <!-- Featured Service 2: Modular Kitchen -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 20px; transition: all 0.4s ease;">
                <div style="height: 200px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=800&auto=format&fit=crop" alt="Modular Kitchen" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                </div>
                <div style="padding: 30px;">
                    <div class="icon-box" style="margin-top: -65px; background: linear-gradient(135deg, #f59e0b, #d97706); border: 3px solid #fff; box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4); position: relative; z-index: 1;">
                        <i class="fas fa-blender" style="color: white;"></i>
                    </div>
                    <h3 style="margin-top: 20px;">Modular Kitchen</h3>
                    <p>Sleek, functional, and modern kitchen designs.</p>
                </div>
            </div>

            <!-- Featured Service 3: UPVC Solutions -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 20px; transition: all 0.4s ease;">
                <div style="height: 200px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1503708928676-1cb796a0891e?q=80&w=800&auto=format&fit=crop" alt="UPVC Windows" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                </div>
                <div style="padding: 30px;">
                    <div class="icon-box" style="margin-top: -65px; background: linear-gradient(135deg, #10b981, #059669); border: 3px solid #fff; box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4); position: relative; z-index: 1;">
                        <i class="fas fa-th-large" style="color: white;"></i>
                    </div>
                    <h3 style="margin-top: 20px;">UPVC Windows & Doors</h3>
                    <p>Soundproof and energy-efficient home solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
    }

    .service-card:hover img {
        transform: scale(1.1);
    }

    .service-card .icon-box {
        transition: all 0.3s ease;
    }

    .service-card:hover .icon-box {
        transform: scale(1.1) rotate(5deg);
    }
</style>

<!-- Portfolio Preview -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>Recent Work</span>
            <h2>Project Showcase</h2>
        </div>

        <div class="gallery-grid">
            @if(isset($portfolioItems) && count($portfolioItems) > 0)
            @foreach($portfolioItems as $item)
            <div class="gallery-item">
                <img src="{{ $item->url }}" alt="{{ $item->name }}" loading="lazy">
                <div class="gallery-overlay">
                    <h4>{{ $item->name }}</h4>
                    <p>Project</p>
                </div>
            </div>
            @endforeach
            @else
            <div style="grid-column: 1 / -1; text-align: center; color: var(--text-secondary); padding: 60px 20px;">
                <i class="fas fa-images" style="font-size: 60px; opacity: 0.3; margin-bottom: 20px;"></i>
                <h3 style="margin-bottom: 10px;">No Projects Yet</h3>
                <p>Upload your first project to showcase your work!</p>
                @auth
                <a href="{{ route('admin.upload') }}" class="btn-primary" style="margin-top: 20px; display: inline-block; text-decoration: none;">
                    <i class="fas fa-plus-circle"></i> Add Project
                </a>
                @endauth
            </div>
            @endif
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
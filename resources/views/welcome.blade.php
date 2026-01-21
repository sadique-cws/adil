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
            <span>Our Expertise</span>
            <h2>Precision Engineering</h2>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-hammer"></i>
                </div>
                <h3>Aluminum Fabrication</h3>
                <p>High-grade aluminum systems for windows, doors, and commercial facades designed for durability and aesthetics.</p>
            </div>
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-layer-group"></i>
                </div>
                <h3>Architectural Glass</h3>
                <p>Toughened glass fittings, structural glazing, railings, and custom mirror works for modern spaces.</p>
            </div>
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-door-open"></i>
                </div>
                <h3>PVC Solutions</h3>
                <p>Advanced UPVC windows and doors offering superior insulation, soundproofing, and weather resistance.</p>
            </div>
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-dungeon"></i>
                </div>
                <h3>Heavy Steel Works</h3>
                <p>Industrial-grade steel gates, grills, railings, and custom iron structures for maximum security.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 60px;">
            <a href="{{ route('services') }}" class="cta-btn">View All Services</a>
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
@endsection
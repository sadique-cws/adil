@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero">
    <div class="container hero-content animate">
        <h1>Crafting Excellence in <br><span>Glass & Steel</span></h1>
        <p>Premium fabrication solutions for modern homes, commercial malls, and office spaces. We specialize in Aluminum, PVC, and Custom Iron work.</p>
        <div class="hero-btns">
            <a href="{{ route('portfolio') }}" class="btn-hero primary">View Our Work</a>
            <a href="{{ route('contact') }}" class="btn-hero">Contact Us</a>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <span>What We Do</span>
            <h2>Our Premium Services</h2>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-hammer"></i>
                </div>
                <h3>Aluminum Fabrication</h3>
                <p>High-quality aluminum windows, doors, and partitions designed for durability and modern aesthetics.</p>
            </div>
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-layer-group"></i>
                </div>
                <h3>Glass Works</h3>
                <p>Toughened glass fittings, commercial facades, glass railings, and custom mirror works for shops and malls.</p>
            </div>
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-door-open"></i>
                </div>
                <h3>PVC Solutions</h3>
                <p>Modern UPVC windows and doors that offer excellent insulation, soundproofing, and a sleek look for your home.</p>
            </div>
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-dungeon"></i>
                </div>
                <h3>Iron & Steel</h3>
                <p>Heavy-duty steel gates, grills, railings, and custom iron structures for security and safety.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('services') }}" class="cta-btn">View All Services</a>
        </div>
    </div>
</section>

<!-- Portfolio Preview -->
<section class="section portfolio">
    <div class="container">
        <div class="section-title">
            <span>Our Work</span>
            <h2>Featured Projects</h2>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=800&auto=format&fit=crop" alt="Mall Glass Facade">
                <div class="overlay">
                    <h4>Mall Glass Facade</h4>
                    <p>Commercial</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=800&auto=format&fit=crop" alt="Modern Home Windows">
                <div class="overlay">
                    <h4>Modern Home Windows</h4>
                    <p>Residential</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800&auto=format&fit=crop" alt="Steel Staircase">
                <div class="overlay">
                    <h4>Steel Staircase</h4>
                    <p>Custom Work</p>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('portfolio') }}" class="cta-btn">View Full Portfolio</a>
        </div>
    </div>
</section>
@endsection
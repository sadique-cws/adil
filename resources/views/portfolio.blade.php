@extends('layouts.main')

@section('title', 'Our Portfolio | Adil Steels & Glasses')

@section('content')
<!-- Page Header -->
<div style="position: relative; padding: 180px 0 100px; text-align: center; overflow: hidden;">
    <!-- Background Image -->
    <div style="position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1486326658981-512aa1225484?q=80&w=2000&auto=format&fit=crop') center/cover; opacity: 0.3; z-index: -2;"></div>
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
            <!-- Commercial -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=800&auto=format&fit=crop" alt="Mall Glass Facade">
                <div class="gallery-overlay">
                    <h4>Mall Glass Facade</h4>
                    <p>Commercial</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop" alt="Office Partitions">
                <div class="gallery-overlay">
                    <h4>Office Partitions</h4>
                    <p>Commercial</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1486326658981-512aa1225484?q=80&w=800&auto=format&fit=crop" alt="Shop Front">
                <div class="gallery-overlay">
                    <h4>Shop Front</h4>
                    <p>Retail</p>
                </div>
            </div>

            <!-- Residential -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=800&auto=format&fit=crop" alt="Modern Home Windows">
                <div class="gallery-overlay">
                    <h4>Modern Home Windows</h4>
                    <p>Residential</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1590333250917-87e354cb7b94?q=80&w=800&auto=format&fit=crop" alt="PVC Installation">
                <div class="gallery-overlay">
                    <h4>PVC Installation</h4>
                    <p>Residential</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://plus.unsplash.com/premium_photo-1678752717095-08cd0bd1d7e7?q=80&w=800&auto=format&fit=crop" alt="Glass Railing">
                <div class="gallery-overlay">
                    <h4>Glass Railing</h4>
                    <p>Residential</p>
                </div>
            </div>

            <!-- Custom / Industrial -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800&auto=format&fit=crop" alt="Steel Staircase">
                <div class="gallery-overlay">
                    <h4>Steel Staircase</h4>
                    <p>Custom Work</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=800&auto=format&fit=crop" alt="Industrial Shed">
                <div class="gallery-overlay">
                    <h4>Industrial Shed</h4>
                    <p>Industrial</p>
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
@endsection
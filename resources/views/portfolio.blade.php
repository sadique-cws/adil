@extends('layouts.main')

@section('title', 'Our Portfolio | Adil Steels & Glasses')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background: var(--gradient-hero); padding: 120px 0 60px; text-align: center; color: white;">
    <div class="container">
        <h1>Our Portfolio</h1>
        <p>A Showcase of Excellence in Glass, Steel, and Aluminum</p>
    </div>
</div>

<section class="section portfolio">
    <div class="container">

        <div class="gallery-grid">
            <!-- Commercial -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=800&auto=format&fit=crop" alt="Mall Glass Facade">
                <div class="overlay">
                    <h4>Mall Glass Facade</h4>
                    <p>Commercial</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop" alt="Office Partitions">
                <div class="overlay">
                    <h4>Office Partitions</h4>
                    <p>Commercial</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1486326658981-512aa1225484?q=80&w=800&auto=format&fit=crop" alt="Shop Front">
                <div class="overlay">
                    <h4>Shop Front</h4>
                    <p>Retail</p>
                </div>
            </div>

            <!-- Residential -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=800&auto=format&fit=crop" alt="Modern Home Windows">
                <div class="overlay">
                    <h4>Modern Home Windows</h4>
                    <p>Residential</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1590333250917-87e354cb7b94?q=80&w=800&auto=format&fit=crop" alt="PVC Installation">
                <div class="overlay">
                    <h4>PVC Installation</h4>
                    <p>Residential</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://plus.unsplash.com/premium_photo-1678752717095-08cd0bd1d7e7?q=80&w=800&auto=format&fit=crop" alt="Glass Railing">
                <div class="overlay">
                    <h4>Glass Railing</h4>
                    <p>Residential</p>
                </div>
            </div>

            <!-- Custom / Industrial -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800&auto=format&fit=crop" alt="Steel Staircase">
                <div class="overlay">
                    <h4>Steel Staircase</h4>
                    <p>Custom Work</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=800&auto=format&fit=crop" alt="Industrial Shed">
                <div class="overlay">
                    <h4>Industrial Shed</h4>
                    <p>Industrial</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1615529182904-14819c35db37?q=80&w=800&auto=format&fit=crop" alt="Decorative Gate">
                <div class="overlay">
                    <h4>Decorative Steel Gate</h4>
                    <p>Custom Work</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.main')

@section('title', 'Our Services | Adil Steels & Glasses')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background: var(--gradient-hero); padding: 120px 0 60px; text-align: center; color: white;">
    <div class="container">
        <h1>Our Services</h1>
        <p>Comprehensive Glass, Aluminum, and Steel Fabrication Solutions</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-hammer"></i>
                </div>
                <h3>Aluminum Fabrication</h3>
                <p>We provide high-quality aluminum windows, doors, office partitions, and shop fronts. Key features include:</p>
                <ul style="margin-top: 15px; list-style: disc; padding-left: 20px; color: var(--secondary-color);">
                    <li>Sliding Windows & Doors</li>
                    <li>Office Cabins & Partitions</li>
                    <li>Aluminum Composite Panels (ACP)</li>
                    <li>Casement Windows</li>
                </ul>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-layer-group"></i>
                </div>
                <h3>Glass Works</h3>
                <p>From structural glazing to interior decor, our glass solutions are designed to impress.</p>
                <ul style="margin-top: 15px; list-style: disc; padding-left: 20px; color: var(--secondary-color);">
                    <li>Toughened Glass Fittings</li>
                    <li>Glass Railings & Balconies</li>
                    <li>Shower Cubicles</li>
                    <li>Commercial Glass Facades</li>
                    <li>Designer Mirrors</li>
                </ul>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-door-open"></i>
                </div>
                <h3>PVC & UPVC Solutions</h3>
                <p>Energy-efficient and durable solutions for modern homes.</p>
                <ul style="margin-top: 15px; list-style: disc; padding-left: 20px; color: var(--secondary-color);">
                    <li>Soundproof UPVC Windows</li>
                    <li>Bathroom Doors</li>
                    <li>Foldable PVC Doors</li>
                    <li>False Ceilings</li>
                </ul>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-dungeon"></i>
                </div>
                <h3>Iron & Steel Fabrication</h3>
                <p>Heavy-duty fabrication for safety, security, and industrial needs.</p>
                <ul style="margin-top: 15px; list-style: disc; padding-left: 20px; color: var(--secondary-color);">
                    <li>Main Gates (Sliding & Swing)</li>
                    <li>Safety Grills & Railings</li>
                    <li>Spiral Staircases</li>
                    <li>Industrial Sheds & Roofing</li>
                </ul>
            </div>

            <!-- Service 5 -->
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Repair & Maintenance</h3>
                <p>We don't just build; we maintain. Contact us for repairs of:</p>
                <ul style="margin-top: 15px; list-style: disc; padding-left: 20px; color: var(--secondary-color);">
                    <li>Damaged Glass Replacement</li>
                    <li>Window Hinge & Lock Repair</li>
                    <li>Door Alignment</li>
                    <li>Gate Welding & Polishing</li>
                </ul>
            </div>

            <!-- Service 6 -->
            <div class="service-card">
                <div class="icon-box">
                    <i class="fas fa-store"></i>
                </div>
                <h3>Shop Fitting</h3>
                <p>Complete fabrication solutions for new shops and showrooms.</p>
                <ul style="margin-top: 15px; list-style: disc; padding-left: 20px; color: var(--secondary-color);">
                    <li>Display Racks & Shelves</li>
                    <li>Counter Tables</li>
                    <li>Showcase Units</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section style="background-color: var(--primary-color); padding: 80px 0; text-align: center; color: white;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Need a Custom Solution?</h2>
        <p style="margin-bottom: 40px; font-size: 1.2rem; opacity: 0.9;">Contact us today for a free consultation and quote for your fabrication project.</p>
        <a href="{{ route('contact') }}" class="cta-btn" style="background-color: white; color: var(--primary-color);">Get a Quote</a>
    </div>
</section>
@endsection
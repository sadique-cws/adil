@extends('layouts.main')

@section('title', 'About Us | Adil Steels & Glasses')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background: var(--gradient-hero); padding: 120px 0 60px; text-align: center; color: white;">
    <div class="container">
        <h1>About Us</h1>
        <p>Building Trust with Steel & Glass Since 2010</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="about-content" style="display: flex; gap: 50px; align-items: center; flex-wrap: wrap;">
            <div class="about-text" style="flex: 1; min-width: 300px;">
                <h2 style="color: var(--primary-color); margin-bottom: 20px; font-size: 2rem;">Who We Are</h2>
                <p style="margin-bottom: 20px;">Adil Steels & Glasses is a premier fabrication company dedicated to providing high-quality aluminum, glass, steel, and PVC solutions. With over 15 years of experience in the industry, we have established ourselves as a trusted name for both residential and commercial projects.</p>
                <p style="margin-bottom: 20px;">Our mission is to combine craftsmanship with modern technology to deliver durable and aesthetically pleasing results. Whether it's a simple window installation or a complex mall facade, we approach every project with the same level of precision and dedication.</p>

                <div class="stats" style="display: flex; gap: 30px; margin-top: 30px;">
                    <div>
                        <h3 style="color: var(--highlight-color); font-size: 2.5rem;">15+</h3>
                        <p>Years Experience</p>
                    </div>
                    <div>
                        <h3 style="color: var(--highlight-color); font-size: 2.5rem;">500+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div>
                        <h3 style="color: var(--highlight-color); font-size: 2.5rem;">100%</h3>
                        <p>Client Satisfaction</p>
                    </div>
                </div>
            </div>
            <div class="about-image" style="flex: 1; min-width: 300px;">
                <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=1000&auto=format&fit=crop" alt="Workshop" style="border-radius: 15px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="section" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-title">
            <span>Expertise</span>
            <h2>Meet Our Dedicated Team</h2>
        </div>
        <div class="team-grid">
            <div class="team-card">
                <div class="team-img">
                    <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?q=80&w=800&auto=format&fit=crop" alt="Expert Welders">
                </div>
                <h3>Expert Welders</h3>
                <p>Specialists in heavy structurals</p>
            </div>
            <div class="team-card">
                <div class="team-img">
                    <img src="https://images.unsplash.com/photo-1542385151-efd9000785a0?q=80&w=800&auto=format&fit=crop" alt="Glass Fitters">
                </div>
                <h3>Glass Fitters</h3>
                <p>Precision finishing team</p>
            </div>
            <div class="team-card">
                <div class="team-img">
                    <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=800&auto=format&fit=crop" alt="Fabricators">
                </div>
                <h3>Fabricators</h3>
                <p>Aluminum & PVC Experts</p>
            </div>
        </div>
    </div>
</section>
@endsection
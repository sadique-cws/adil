@extends('layouts.main')

@section('title', 'About Us | Adil Steels & Glasses - 15+ Years of Fabrication Excellence')
@section('meta_description', 'Learn about Adil Steels & Glasses, a premier fabrication company in Purnia, Bihar with 15+ years of experience in aluminum, glass, steel, and PVC solutions for residential and commercial projects.')
@section('meta_keywords', 'about Adil Steels, fabrication company Purnia, glass steel work Bihar, 15 years experience, team')
@section('content')
<!-- Page Header -->
<div style="position: relative; padding: 180px 0 100px; text-align: center; overflow: hidden;">
    <!-- Background Image -->
    <div style="position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=1000&auto=format&fit=crop') center/cover; opacity: 0.3; z-index: -2;"></div>
    <!-- Gradient Overlay -->
    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent, var(--primary-solid)); z-index: -1;"></div>

    <div class="container">
        <h1 style="font-size: 4rem; margin-bottom: 20px;">About Us</h1>
        <p style="font-size: 1.25rem; color: var(--text-secondary); max-width: 600px; margin: 0 auto;">Building Trust with Steel & Glass Since 2010</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="about-content" style="display: flex; gap: 60px; align-items: center; flex-wrap: wrap;">
            <div class="about-text" style="flex: 1; min-width: 300px;">
                <div class="section-title" style="text-align: left; margin-bottom: 40px;">
                    <span>Our Story</span>
                    <h2>Engineering Excellence</h2>
                </div>
                <p style="margin-bottom: 20px; color: var(--text-secondary);">Adil Steels & Glasses is a premier fabrication company dedicated to providing high-quality aluminum, glass, steel, and PVC solutions. With over 15 years of experience in the industry, we have established ourselves as a trusted name for both residential and commercial projects.</p>
                <p style="margin-bottom: 40px; color: var(--text-secondary);">Our mission is to combine craftsmanship with modern technology to deliver durable and aesthetically pleasing results. Whether it's a simple window installation or a complex mall facade, we approach every project with the same level of precision and dedication.</p>

                <!-- Stats Grid -->
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                    <div style="background: rgba(255,255,255,0.03); border: 1px solid var(--glass-border); padding: 20px; border-radius: 8px; text-align: center;">
                        <h3 style="color: var(--accent-color); font-size: 2rem;">15+</h3>
                        <p style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--text-secondary);">Years</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.03); border: 1px solid var(--glass-border); padding: 20px; border-radius: 8px; text-align: center;">
                        <h3 style="color: var(--accent-color); font-size: 2rem;">500+</h3>
                        <p style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--text-secondary);">Projects</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.03); border: 1px solid var(--glass-border); padding: 20px; border-radius: 8px; text-align: center;">
                        <h3 style="color: var(--accent-color); font-size: 2rem;">100%</h3>
                        <p style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--text-secondary);">Satisfaction</p>
                    </div>
                </div>
            </div>
            <div class="about-image" style="flex: 1; min-width: 300px;">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1000&auto=format&fit=crop" alt="Workshop" style="border-radius: 12px; border: 1px solid var(--glass-border);">
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="section">
    <div class="container">
        <div class="section-title">
            <span>Our People</span>
            <h2>Meet The Team</h2>
        </div>
        <div class="team-grid">
            <!-- Team Member 1: Hasim -->
            <!-- Team Member 4: Sameer -->
            <div class="team-card">
                <div class="team-img">
                    <img src="{{ asset('team/sameer.png') }}" alt="Sameer">
                </div>
                <h3>Sameer</h3>
                <p>Welding Specialist</p>
            </div>
            <div class="team-card">
                <div class="team-img">
                    <img src="{{ asset('team/hasim.png') }}" alt="Hasim">
                </div>
                <h3>Hasim</h3>
                <p>Glass Installation Expert</p>
            </div>

            <!-- Team Member 2: Mujib -->
            <div class="team-card">
                <div class="team-img">
                    <img src="{{ asset('team/mujib.png') }}" alt="Mujib">
                </div>
                <h3>Mujib</h3>
                <p>Glass Installation Expert</p>
            </div>

            <!-- Team Member 3: Raza Ali -->
            <div class="team-card">
                <div class="team-img">
                    <img src="{{ asset('team/raza ali.png') }}" alt="Raza Ali">
                </div>
                <h3>Raza Ali</h3>
                <p>Glass Installation Expert</p>
            </div>



            <!-- Team Member 5: Suhaan -->
            <div class="team-card">
                <div class="team-img">
                    <img src="{{ asset('team/suhaan.png') }}" alt="Suhaan">
                </div>
                <h3>Suhaan</h3>
                <p>Glass Installation Expert</p>
            </div>
        </div>
    </div>
</section>
@endsection
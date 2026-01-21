@extends('layouts.main')

@section('title', 'Contact Us | Adil Steels & Glasses')

@section('content')
<!-- Page Header -->
<div style="position: relative; padding: 180px 0 100px; text-align: center; overflow: hidden;">
    <!-- Background Image -->
    <div style="position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1423666639041-f140881c18db?q=80&w=2000&auto=format&fit=crop') center/cover; opacity: 0.3; z-index: -2;"></div>
    <!-- Gradient Overlay -->
    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent, var(--primary-solid)); z-index: -1;"></div>

    <div class="container">
        <h1 style="font-size: 3.5rem; margin-bottom: 20px;">Contact Us</h1>
        <p style="font-size: 1.25rem; color: var(--text-secondary); max-width: 600px; margin: 0 auto;">Get in Touch for Quotes, Queries, and Consultations</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="contact-wrapper" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 60px;">

            <!-- Contact Info -->
            <div class="contact-info">
                <div class="section-title" style="text-align: left; margin-bottom: 40px;">
                    <span>Reach Out</span>
                    <h2>Contact Information</h2>
                </div>

                <div class="info-item" style="display: flex; gap: 24px; margin-bottom: 40px;">
                    <div style="width: 50px; height: 50px; background: rgba(56, 189, 248, 0.1); color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; border: 1px solid var(--glass-border);">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 8px; font-size: 1.2rem;">Visit Our Workshop</h4>
                        <p style="color: var(--text-secondary); line-height: 1.6;">Shop No. 5, Commercial Area,<br>Main Market, City Name, 123456</p>
                    </div>
                </div>

                <div class="info-item" style="display: flex; gap: 24px; margin-bottom: 40px;">
                    <div style="width: 50px; height: 50px; background: rgba(56, 189, 248, 0.1); color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; border: 1px solid var(--glass-border);">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 8px; font-size: 1.2rem;">Call Us</h4>
                        <p style="color: var(--text-secondary); margin-bottom: 5px;">+91 98765 43210</p>
                        <p style="color: var(--text-secondary);">+91 98765 43211</p>
                    </div>
                </div>

                <div class="info-item" style="display: flex; gap: 24px; margin-bottom: 40px;">
                    <div style="width: 50px; height: 50px; background: rgba(56, 189, 248, 0.1); color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; border: 1px solid var(--glass-border);">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 8px; font-size: 1.2rem;">Email Us</h4>
                        <p style="color: var(--text-secondary); margin-bottom: 5px;">contact@adilsteels.com</p>
                        <p style="color: var(--text-secondary);">support@adilsteels.com</p>
                    </div>
                </div>

                <div class="info-item" style="display: flex; gap: 24px;">
                    <div style="width: 50px; height: 50px; background: rgba(56, 189, 248, 0.1); color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; border: 1px solid var(--glass-border);">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 8px; font-size: 1.2rem;">Opening Hours</h4>
                        <p style="color: var(--text-secondary); margin-bottom: 5px;">Monday - Saturday: 9:00 AM - 8:00 PM</p>
                        <p style="color: var(--text-secondary);">Sunday: Closed</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form" style="background: var(--secondary-glass); padding: 40px; border-radius: 12px; border: 1px solid var(--glass-border); backdrop-filter: blur(20px);">
                <h2 style="color: var(--text-primary); margin-bottom: 30px; font-size: 1.8rem;">Send a Message</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject">
                            <option value="">Select a Service</option>
                            <option value="aluminum">Aluminum Fabrication</option>
                            <option value="glass">Architectural Glass</option>
                            <option value="pvc">PVC Solutions</option>
                            <option value="steel">Heavy Steel Works</option>
                            <option value="other">Other Inquiry</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Describe your project requirement..."></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="width: 100%; border: none; cursor: pointer;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Placeholder) -->
<div style="height: 400px; background-color: #0f172a; display: flex; align-items: center; justify-content: center; color: var(--text-secondary); border-top: 1px solid var(--glass-border);">
    <p>Google Map Integration</p>
</div>
@endsection
@extends('layouts.main')

@section('title', 'Contact Us | Adil Steels & Glasses - Get a Free Quote')
@section('meta_description', 'Contact Adil Steels & Glasses for free quotes and consultations. Visit us at Naka Chowk, Purnia City, Bihar. Call +91 82350 89500 or +91 94300 39254.')
@section('meta_keywords', 'contact Adil Steels, fabrication quote Purnia, glass work contact, phone number Adil Steels, Naka Chowk Purnia')

@section('content')
<!-- Page Header -->
<div style="position: relative; padding: 180px 0 100px; text-align: center; overflow: hidden;">
    <!-- Background Image -->
    <div style="position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1516387938699-a93567ec168e?q=80&w=2000&auto=format&fit=crop') center/cover; opacity: 0.3; z-index: -2;"></div>
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
                        <p style="color: var(--text-secondary); line-height: 1.6;">Naka Chowk, Purnia City<br>Bihar, India</p>
                    </div>
                </div>

                <div class="info-item" style="display: flex; gap: 24px; margin-bottom: 40px;">
                    <div style="width: 50px; height: 50px; background: rgba(56, 189, 248, 0.1); color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; border: 1px solid var(--glass-border);">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 8px; font-size: 1.2rem;">Call Us</h4>
                        <p style="color: var(--text-secondary); margin-bottom: 5px;">+91 82350 89500</p>
                        <p style="color: var(--text-secondary);">+91 94300 39254</p>
                    </div>
                </div>

                <div class="info-item" style="display: flex; gap: 24px; margin-bottom: 40px;">
                    <div style="width: 50px; height: 50px; background: rgba(56, 189, 248, 0.1); color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; border: 1px solid var(--glass-border);">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 8px; font-size: 1.2rem;">Email Us</h4>
                        <p style="color: var(--text-secondary); margin-bottom: 5px;">contact@adilsteels.com</p>
                    </div>
                </div>

                <div class="info-item" style="display: flex; gap: 24px;">
                    <div style="width: 50px; height: 50px; background: rgba(56, 189, 248, 0.1); color: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; border: 1px solid var(--glass-border);">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 8px; font-size: 1.2rem;">Proprietor</h4>
                        <p style="color: var(--text-secondary); margin-bottom: 5px;">Syed Dildar Hussain</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form" style="background: var(--secondary-glass); padding: 40px; border-radius: 12px; border: 1px solid var(--glass-border); backdrop-filter: blur(20px);">
                <h2 style="color: var(--text-primary); margin-bottom: 30px; font-size: 1.8rem;">Send a Message</h2>
                <form action="{{ route('contact.submit') }}" method="POST" class="contact-page-form">
                    @csrf
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Your Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="subject">Interested In</label>
                        <select id="subject" name="subject">
                            <option value="">Select a Service</option>
                            <option value="structure_glazing">Structure Glazing</option>
                            <option value="tuffen">12mm Tuffen Partition</option>
                            <option value="aluminum_partition">Aluminium Partition</option>
                            <option value="acp">ACP Glazing / Elevation</option>
                            <option value="glass">Glass Glazing Work</option>
                            <option value="steel">Steel Railing & Works</option>
                            <option value="iron">Iron Gates & Grills</option>
                            <option value="luxury">Luxury Profile / Interiors</option>
                            <option value="kitchen">Modular Kitchen</option>
                            <option value="upvc_window">UPVC Windows & Doors</option>
                            <option value="domal">Domal Windows & Doors</option>
                            <option value="pvc_door">PVC Door</option>
                            <option value="upvc_door">UPVC Door</option>
                            <option value="wpc_door">WPC Door</option>
                            <option value="flush_door">Flush Door</option>
                            <option value="luxury_door">Luxury Designer Door</option>
                            <option value="bathroom_glass">Bathroom Glass Work</option>
                            <option value="other">Other Inquiry</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 30px;">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Describe your requirement..."></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="width: 100%; border: none; cursor: pointer;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<div style="height: 450px; border-top: 1px solid var(--glass-border);">
    <iframe
        src="https://maps.google.com/maps?q=25.8084696,87.5150972&hl=en;z=17&output=embed"
        width="100%"
        height="100%"
        style="border:0; filter: grayscale(1) contrast(1.2) opacity(0.8);"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
@endsection
@extends('layouts.main')

@section('title', 'Contact Us | Adil Steels & Glasses')

@section('content')
<!-- Page Header -->
<div class="page-header" style="background: var(--gradient-hero); padding: 120px 0 60px; text-align: center; color: white;">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in Touch for Quotes, Queries, and Consultations</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="contact-wrapper" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 50px;">

            <!-- Contact Info -->
            <div class="contact-info">
                <h2 style="color: var(--primary-color); margin-bottom: 30px;">Get In Touch</h2>

                <div class="info-item" style="display: flex; gap: 20px; margin-bottom: 30px; margin-bottom: 25px;">
                    <div style="width: 50px; height: 50px; background: rgba(0, 180, 216, 0.1); color: var(--highlight-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 5px;">Visit Our Workshop</h4>
                        <p style="color: var(--secondary-color);">Shop No. 5, Commercial Area,<br>Main Market, City Name, 123456</p>
                    </div>
                </div>

                <div class="info-item" style="display: flex; gap: 20px; margin-bottom: 30px; margin-bottom: 25px;">
                    <div style="width: 50px; height: 50px; background: rgba(0, 180, 216, 0.1); color: var(--highlight-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 5px;">Call Us</h4>
                        <p style="color: var(--secondary-color);">+91 98765 43210</p>
                        <p style="color: var(--secondary-color);">+91 98765 43211</p>
                    </div>
                </div>

                <div class="info-item" style="display: flex; gap: 20px; margin-bottom: 30px; margin-bottom: 25px;">
                    <div style="width: 50px; height: 50px; background: rgba(0, 180, 216, 0.1); color: var(--highlight-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 5px;">Email Us</h4>
                        <p style="color: var(--secondary-color);">contact@adilsteels.com</p>
                        <p style="color: var(--secondary-color);">support@adilsteels.com</p>
                    </div>
                </div>

                <div class="info-item" style="display: flex; gap: 20px; margin-bottom: 30px; margin-bottom: 25px;">
                    <div style="width: 50px; height: 50px; background: rgba(0, 180, 216, 0.1); color: var(--highlight-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 5px;">Opening Hours</h4>
                        <p style="color: var(--secondary-color);">Monday - Saturday: 9:00 AM - 8:00 PM</p>
                        <p style="color: var(--secondary-color);">Sunday: Closed</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <h2 style="color: var(--primary-color); margin-bottom: 30px;">Send a Message</h2>
                <form action="#" method="POST">
                    <div style="margin-bottom: 20px;">
                        <label for="name" style="display: block; margin-bottom: 8px; font-weight: 500;">Your Name</label>
                        <input type="text" id="name" name="name" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; outline: none;" placeholder="Full Name">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="email" style="display: block; margin-bottom: 8px; font-weight: 500;">Your Email</label>
                        <input type="email" id="email" name="email" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; outline: none;" placeholder="email@example.com">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="subject" style="display: block; margin-bottom: 8px; font-weight: 500;">Subject</label>
                        <select id="subject" name="subject" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; outline: none;">
                            <option value="">Select a Service</option>
                            <option value="aluminum">Aluminum Fabrication</option>
                            <option value="glass">Glass Work</option>
                            <option value="pvc">PVC Solutions</option>
                            <option value="steel">Iron & Steel</option>
                            <option value="other">Other Inquiry</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 30px;">
                        <label for="message" style="display: block; margin-bottom: 8px; font-weight: 500;">Message</label>
                        <textarea id="message" name="message" rows="5" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; outline: none;" placeholder="Describe your project requirement..."></textarea>
                    </div>
                    <button type="submit" class="cta-btn" style="width: 100%; border: none; cursor: pointer; font-size: 1rem;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Placeholder) -->
<div style="height: 400px; background-color: #e9ecef; display: flex; align-items: center; justify-content: center; color: #6c757d;">
    <p>Google Map Integration</p>
    <!-- <iframe src="..." width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
</div>
@endsection
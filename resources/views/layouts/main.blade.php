<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Adil Steels & Glasses | Premium Fabrication Services')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="{{ Route::currentRouteName() == 'home' ? 'home-page' : 'inner-page' }}">
    <!-- Header -->
    <header>
        <div class="container nav-bar">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('logo.png') }}" alt="Adil Steels Logo" style="height: 60px; width: auto;">
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('services') }}" class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}" class="{{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>
            <a href="javascript:void(0)" id="openQuoteModal" class="cta-btn">Get a Quote</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Quote Modal -->
    <div id="quoteModal" class="modal-overlay">
        <div class="glass-enquiry-card modal-content" style="max-width: 900px; width: 90%; margin: 0; position: relative; animation: slideUp 0.4s ease;">
            <button class="close-modal">&times;</button>
            <div class="enquiry-text">
                <h3>Request a Quote</h3>
                <p>Tell us about your project requirements and we'll get back to you with a competitive price.</p>
            </div>
            <form action="#" class="quick-form quote-form">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input type="tel" placeholder="Mobile Number" required>
                </div>
                <div class="input-group" style="flex-basis: 100%;">
                    <i class="fas fa-tools"></i>
                    <select required>
                        <option value="" disabled selected>Service Needed</option>
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
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="input-group" style="flex-basis: 100%;">
                    <i class="fas fa-comment-alt"></i>
                    <input type="text" placeholder="Brief Description (Optional)" style="border-radius: 20px;">
                </div>
                <button type="submit" class="btn-submit" style="width: 100%; justify-content: center;">
                    <span>Send Request</span> <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>

    @if(Route::currentRouteName() != 'contact')
    <!-- Quick Business Enquiry Section -->
    <section class="quick-enquiry-section">
        <div class="container">
            <div class="glass-enquiry-card">
                <div class="enquiry-text">
                    <h3>Fast Business Enquiry</h3>
                    <p>Looking for a quote? Share your details for a quick callback.</p>
                </div>
                <form action="#" class="quick-form">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-phone"></i>
                        <input type="tel" placeholder="Mobile Number" required>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-tools"></i>
                        <select>
                            <option value="" disabled selected>Service Needed</option>
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
                        </select>
                    </div>
                    <button type="submit" class="btn-submit">
                        <span>Submit</span> <i class="fas fa-paper-plane"></i>
                    </button>
                    <!-- Success/Loading state placeholders can be added here -->
                </form>
            </div>
        </div>
    </section>
    @endif

    <!-- Lightbox for Gallery -->
    <div id="lightbox" class="lightbox-overlay">
        <span class="lightbox-close">&times;</span>
        <button class="lightbox-prev"><i class="fas fa-chevron-left"></i></button>
        <img id="lightbox-img" src="" alt="Fullscreen Image">
        <button class="lightbox-next"><i class="fas fa-chevron-right"></i></button>
    </div>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>Adil Steels & Glasses</h3>
                    <p>Your trusted partner for all fabrication needs. We deliver quality, durability, and aesthetics in every project.</p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li>
                            @auth
                            <a href="{{ route('admin.dashboard') }}" style="color: var(--accent-color);">Admin Dashboard</a>
                            @else
                            <a href="{{ route('auth.google') }}" style="opacity: 0.5; font-size: 0.9em;">Admin Login</a>
                            @endauth
                        </li>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Naka Chowk, Purnia City,<br>Bihar, India</li>
                        <li><i class="fas fa-phone"></i> +91 82350 89500</li>
                        <li><i class="fas fa-phone"></i> +91 94300 39254</li>
                        <li><i class="fas fa-envelope"></i> contact@adilsteels.com</li>
                        <li><i class="fas fa-clock"></i> Mon - Sat: 9:00 AM - 8:00 PM</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; {{ date('Y') }} Adil Steels & Glasses. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/918235089500" target="_blank" class="whatsapp-float" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</body>

</html>
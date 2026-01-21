<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <a href="{{ route('home') }}" class="logo">Adil <span>Steels</span></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('services') }}" class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}" class="{{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>
            <a href="{{ route('contact') }}" class="cta-btn">Get a Quote</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

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
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Shop No. 5, Commercial Area, Main Market</li>
                        <li><i class="fas fa-phone"></i> +91 98765 43210</li>
                        <li><i class="fas fa-envelope"></i> contact@adilsteels.com</li>
                        <li><i class="fas fa-clock"></i> Mon - Sat: 9:00 AM - 8:00 PM</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2026 Adil Steels & Glasses. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
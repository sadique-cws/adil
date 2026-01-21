@extends('layouts.main')

@section('title', 'Our Services | Adil Steels & Glasses')

@section('content')
<!-- Page Header -->
<div style="position: relative; padding: 180px 0 100px; text-align: center; overflow: hidden;">
    <!-- Background Image -->
    <div style="position: absolute; inset: 0; background: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=2000&auto=format&fit=crop') center/cover; opacity: 0.3; z-index: -2;"></div>
    <!-- Gradient Overlay -->
    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, transparent, var(--primary-solid)); z-index: -1;"></div>

    <div class="container">
        <h1 style="font-size: 3.5rem; margin-bottom: 20px;">Services</h1>
        <p style="font-size: 1.25rem; color: var(--text-secondary); max-width: 600px; margin: 0 auto;">Comprehensive Fabrication Solutions</p>
    </div>
</div>

<section class="section service-page-section">
    <div class="container">

        <!-- Service Grid -->
        <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">

            <!-- 1. Structure Glazing -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop" alt="Structure Glazing" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Structure Glazing</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Premium full-glass facades for commercial buildings and showrooms, providing a seamless modern look.</p>
                </div>
            </div>

            <!-- 2. 12mm Tuffen Partition -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop" alt="12mm Tuffen Partition" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">12mm Tuffen Partition</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">High-strength toughened glass partitions ideal for corporate offices, cabins, and malls.</p>
                </div>
            </div>

            <!-- 3. Aluminium Partition -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=800&auto=format&fit=crop" alt="Aluminium Partition" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Aluminium Partition</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Durable and cost-effective aluminium framing solutions for office divisions and industrial spaces.</p>
                </div>
            </div>

            <!-- 4. ACP Glazing -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1464938050520-ef2270bb8ce8?q=80&w=800&auto=format&fit=crop" alt="ACP Glazing" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">ACP Glazing / Elevation</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Modern Exterior front designs using Aluminium Composite Panels (ACP) for a sleek building appearance.</p>
                </div>
            </div>

            <!-- 5. Glass Glazing -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1506126279646-a697353d3166?q=80&w=800&auto=format&fit=crop" alt="Glass Glazing" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Glass Glazing Work</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Expert installation of glass panes for windows, skylights, and custom architectural features.</p>
                </div>
            </div>

            <!-- 6. Steel Railing & Works -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1510526084940-276ceb6fa487?q=80&w=800&auto=format&fit=crop" alt="Steel Railing" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Steel Railing & Works</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Stainless steel railings for balconies, stairs, and windows. Strong, rust-free, and elegant.</p>
                </div>
            </div>

            <!-- 7. Iron Gate & Works -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1615529182904-14819c35db37?q=80&w=800&auto=format&fit=crop" alt="Iron Gate" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Iron Gates & Grills</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Custom wrought iron gates, window grills, and heavy-duty safety railings.</p>
                </div>
            </div>

            <!-- 8. Luxury Profile -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?q=80&w=800&auto=format&fit=crop" alt="Luxury Profile" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Luxury Profile / Interiors</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">High-end aluminum profile shutters for wardrobes, kitchens, and premium interior lighting.</p>
                </div>
            </div>

            <!-- 9. Modular Kitchen -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?q=80&w=800&auto=format&fit=crop" alt="Modular Kitchen" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Modular Kitchen</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Modern, functional, and sleek modular kitchen designs utilizing glass, aluminum, and acrylic.</p>
                </div>
            </div>

            <!-- 10. UPVC Window & Doors -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1503708928676-1cb796a0891e?q=80&w=800&auto=format&fit=crop" alt="UPVC Window" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">UPVC Windows & Doors</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Energy-efficient, soundproof, and weather-resistant UPVC solutions for modern homes.</p>
                </div>
            </div>

            <!-- 11. Domal Windows & Doors -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=800&auto=format&fit=crop" alt="Domal Windows" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Domal Windows & Doors</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Premium Domal (Aluminium) sliding systems offering superior aesthetics and smooth operation.</p>
                </div>
            </div>

            <!-- 12. PVC Door -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1622372738946-a2e1d00c3c86?q=80&w=800&auto=format&fit=crop" alt="PVC Door" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">PVC Door</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Durable, water-resistant PVC doors perfect for bathrooms and utility areas.</p>
                </div>
            </div>

            <!-- 13. UPVC Door -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1595846519845-68e298c2edd8?q=80&w=800&auto=format&fit=crop" alt="UPVC Door" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">UPVC Door</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Modern UPVC doors offering excellent insulation, security, and noise reduction.</p>
                </div>
            </div>

            <!-- 14. WPC Door -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1534970486001-c88f98c87994?q=80&w=800&auto=format&fit=crop" alt="WPC Door" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">WPC Door (Wood Plastic Composite)</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Eco-friendly, termite-proof, and waterproof doors combining the look of wood with modern durability.</p>
                </div>
            </div>

            <!-- 15. Flush Door -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1506377630900-dd19f92717ce?q=80&w=800&auto=format&fit=crop" alt="Flush Door" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Flush Door</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Simple, elegant, and sturdy flush doors suitable for interiors and bedrooms.</p>
                </div>
            </div>

            <!-- 16. Luxury Door -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1520608421741-68228b76b6df?q=80&w=800&auto=format&fit=crop" alt="Luxury Door" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Luxury Designer Door</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Bespoke luxury doors intended to make a grand statement for main entrances and premium spaces.</p>
                </div>
            </div>

            <!-- 17. Bathroom Glass Work -->
            <div class="service-card" style="padding: 0; overflow: hidden; border-radius: 16px;">
                <div style="height: 220px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1631679706909-1844bbd07221?q=80&w=800&auto=format&fit=crop" alt="Bathroom Glass" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="padding: 30px;">
                    <h3 style="margin-bottom: 15px; font-size: 1.5rem; color: var(--text-primary);">Bathroom Glass Work (Shower Cubicles)</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">Custom glass shower enclosures and partitions to create a spacious, modern bathroom feel.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action -->
<section style="padding: 100px 0; background: linear-gradient(to right, var(--secondary-solid), var(--primary-solid)); border-top: 1px solid var(--glass-border); text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--text-primary);">Need a Custom Solution?</h2>
        <p style="margin-bottom: 40px; font-size: 1.2rem; color: var(--text-secondary);">Contact us today for a free consultation and quote for your fabrication project.</p>
        <a href="{{ route('contact') }}" class="cta-btn" style="background: var(--accent-color); color: var(--primary-solid);">Get a Quote</a>
    </div>
</section>
@endsection
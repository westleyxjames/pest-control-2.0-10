<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Pest Control - Professional Pest Removal & Prevention Services</title>
    <meta name="description" content="Apex Pest Control provides professional pest removal and prevention services for homes and businesses. Fast response, eco-friendly treatments, and 100% satisfaction guarantee.">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <!-- Top bar -->
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-content">
                    <div class="top-bar-left">
                        <a href="tel:+19026522985" class="contact-link">
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>+1-902-652-2985</span>
                        </a>
                        <a href="mailto:help@apexpestcontrol.site" class="contact-link desktop-only">
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>help@apexpestcontrol.site</span>
                        </a>
                    </div>
                    <div class="top-bar-badge">
                        ⚡ Fast Response • Same Day Service Available
                    </div>
                </div>
            </div>
        </div>

        <!-- Main header -->
        <div class="main-header">
            <div class="container">
                <div class="header-content">
                    <a href="index.html" class="logo-link">
                        <div class="logo-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div class="logo-text">
                            <span class="logo-title">Apex Pest Control</span>
                            <div class="logo-subtitle">Professional Pest Solutions</div>
                        </div>
                    </a>

                    <!-- Desktop navigation -->
                    <nav class="desktop-nav">
                        <a href="index.html" class="nav-link active">Home</a>
                        <a href="about.html" class="nav-link">About</a>
                        <a href="services.html" class="nav-link">Services</a>
                        <a href="contact.html" class="nav-link">Contact</a>
                    </nav>

                    <!-- Mobile menu button -->
                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg class="close-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Mobile navigation -->
                <nav class="mobile-nav" id="mobileNav">
                    <a href="index.html" class="mobile-nav-link active">Home</a>
                    <a href="about.html" class="mobile-nav-link">About</a>
                    <a href="services.html" class="mobile-nav-link">Services</a>
                    <a href="contact.html" class="mobile-nav-link">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-pattern"></div>
        <div class="container hero-container">
            <div class="hero-grid">
                <div class="hero-content fade-in-left">
                    <div class="hero-badge">
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                        <span>Trusted by 10,000+ homeowners</span>
                    </div>
                    
                    <h1 class="hero-title">Protect Your Home From Pests – Fast, Safe & Reliable Pest Control</h1>
                    
                    <p class="hero-description">
                        Apex Pest Control provides professional pest removal and prevention services for homes and businesses across the United States. Our certified technicians deliver safe and effective pest treatments that keep your property protected year-round.
                    </p>
                    
                    <div class="hero-buttons">
                        <button class="btn btn-primary" onclick="openLeadForm()">
                            Get Free Inspection
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </button>
                        <button class="btn btn-secondary" onclick="openLeadForm()">Request Service</button>
                    </div>
                    
                    <div class="trust-indicators">
                        <div class="trust-item">
                            <svg class="icon" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                            </svg>
                            <span>4.9/5 Rating</span>
                        </div>
                        <div class="trust-item">
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <span>Licensed & Insured</span>
                        </div>
                        <div class="trust-item">
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                            <span>20+ Years Experience</span>
                        </div>
                    </div>
                </div>
                
                <div class="hero-image fade-in-right">
                    <img src="https://images.unsplash.com/photo-1717281234297-3def5ae3eee1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwZXN0JTIwY29udHJvbCUyMHRlY2huaWNpYW4lMjBpbnNwZWN0aW5nJTIwaG91c2V8ZW58MXx8fHwxNzczMjI4ODE5fDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Professional pest control technician inspecting a house">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section bg-gradient-light">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title gradient-text">Why Choose Apex Pest Control</h2>
                <p class="section-description">We're committed to delivering exceptional pest control services with integrity and professionalism.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card scroll-fade">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Certified & Experienced Technicians</h3>
                        <p class="feature-description">Our team is fully licensed and trained in the latest pest control methods.</p>
                    </div>
                </div>

                <div class="feature-card scroll-fade">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Eco-Friendly Treatment Options</h3>
                        <p class="feature-description">Safe solutions for your family, pets, and the environment.</p>
                    </div>
                </div>

                <div class="feature-card scroll-fade">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Fast Response & Same Day Service</h3>
                        <p class="feature-description">We understand urgency - get help when you need it most.</p>
                    </div>
                </div>

                <div class="feature-card scroll-fade">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Affordable & Transparent Pricing</h3>
                        <p class="feature-description">No hidden fees - know exactly what you're paying for.</p>
                    </div>
                </div>

                <div class="feature-card scroll-fade">
                    <div class="feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">100% Satisfaction Guarantee</h3>
                        <p class="feature-description">We stand behind our work with a complete satisfaction promise.</p>
                    </div>
                </div>
            </div>

            <div class="service-image scroll-fade">
                <img src="https://images.unsplash.com/photo-1661455368483-e4404d6bbbc5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxleHRlcm1pbmF0b3IlMjBzcHJheWluZyUyMGhvdXNlJTIwZXh0ZXJpb3J8ZW58MXx8fHwxNzczMjI4ODI1fDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Pest technician spraying perimeter of home">
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section class="section bg-gradient-reverse">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title gradient-text">Our Services</h2>
                <p class="section-description">Comprehensive pest control solutions tailored to your specific needs.</p>
            </div>

            <div class="services-grid">
                <div class="service-card scroll-fade">
                    <div class="service-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1756150050485-a80b04255748?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyZXNpZGVudGlhbCUyMHBlc3QlMjBjb250cm9sJTIwc2VydmljZXxlbnwxfHx8fDE3NzMyMjg4MjJ8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="General Pest Control">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">General Pest Control</h3>
                        <p class="service-description">Treatment for ants, spiders, cockroaches, and other common pests.</p>
                    </div>
                </div>

                <div class="service-card scroll-fade">
                    <div class="service-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1744997343938-c8c61429e463?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0ZXJtaXRlJTIwZGFtYWdlJTIwd29vZCUyMGluc3BlY3Rpb258ZW58MXx8fHwxNzczMjI4ODIwfDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Termite Inspection & Treatment">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Termite Inspection & Treatment</h3>
                        <p class="service-description">Advanced termite detection and prevention solutions.</p>
                    </div>
                </div>

                <div class="service-card scroll-fade">
                    <div class="service-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1770470641602-0e75c258ebed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyb2RlbnQlMjBwZXN0JTIwY29udHJvbHxlbnwxfHx8fDE3NzMyMjg4MjV8MA&ixlib=rb-4.1.0&q=80&w=1080" alt="Rodent Control">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Rodent Control</h3>
                        <p class="service-description">Safe and effective removal of rats and mice from homes and businesses.</p>
                    </div>
                </div>

                <div class="service-card scroll-fade">
                    <div class="service-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1669047057325-18b868cf50cf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxiZWQlMjBidWclMjB0cmVhdG1lbnQlMjBwcm9mZXNzaW9uYWx8ZW58MXx8fHwxNzczMjI4ODIwfDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Bed Bug Treatment">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Bed Bug Treatment</h3>
                        <p class="service-description">Professional heat and chemical treatments to eliminate bed bugs.</p>
                    </div>
                </div>

                <div class="service-card scroll-fade">
                    <div class="service-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1770827693157-e7cc4179ebf5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb3NxdWl0byUyMHlhcmQlMjBzcHJheWluZyUyMG91dGRvb3J8ZW58MXx8fHwxNzczMjI4ODIxfDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Mosquito Control">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Mosquito Control</h3>
                        <p class="service-description">Outdoor mosquito reduction services to protect your family and guests.</p>
                    </div>
                </div>

                <div class="service-card scroll-fade">
                    <div class="service-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1739204618173-3e89def7140f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb21tZXJjaWFsJTIwcGVzdCUyMGNvbnRyb2wlMjB3YXJlaG91c2V8ZW58MXx8fHwxNzczMjI4ODIxfDA&ixlib=rb-4.1.0&q=80&w=1080" alt="Commercial Pest Control">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Commercial Pest Control</h3>
                        <p class="service-description">Reliable pest management for offices, restaurants, warehouses, and other businesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-pattern"></div>
        <div class="container cta-container">
            <div class="fade-in">
                <h2 class="cta-title">Stop Pests Before They Take Over Your Home</h2>
                <p class="cta-description">Don't wait until the problem gets worse. Get a free inspection today.</p>
                <button class="btn btn-white" onclick="openLeadForm()">Schedule Your Free Inspection</button>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="section bg-gradient-light">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title gradient-text">Transparent Pricing</h2>
                <p class="section-description">Choose the plan that's right for your home or business.</p>
            </div>

            <div class="pricing-grid">
                <div class="pricing-card scroll-fade">
                    <h3 class="pricing-name">Basic Pest Protection Plan</h3>
                    <div class="pricing-price">$89</div>
                    <ul class="pricing-features">
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>One-time treatment for common household pests</span>
                        </li>
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Inspection included</span>
                        </li>
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>30-day service warranty</span>
                        </li>
                    </ul>
                    <button class="btn btn-outline" onclick="openLeadForm()">Book Service Now</button>
                </div>

                <div class="pricing-card pricing-card-popular scroll-fade">
                    <div class="popular-badge">
                        <svg class="icon" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                        Most Popular
                    </div>
                    <h3 class="pricing-name">Standard Protection Plan</h3>
                    <div class="pricing-price">$149</div>
                    <ul class="pricing-features">
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Interior and exterior pest treatment</span>
                        </li>
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Covers ants, spiders, roaches, and rodents</span>
                        </li>
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>60-day protection guarantee</span>
                        </li>
                    </ul>
                    <button class="btn btn-primary" onclick="openLeadForm()">Book Service Now</button>
                </div>

                <div class="pricing-card scroll-fade">
                    <h3 class="pricing-name">Premium Year-Round Plan</h3>
                    <div class="pricing-price">$299</div>
                    <ul class="pricing-features">
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Quarterly pest control service</span>
                        </li>
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Termite inspection included</span>
                        </li>
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Priority service scheduling</span>
                        </li>
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Full year pest protection</span>
                        </li>
                    </ul>
                    <button class="btn btn-outline" onclick="openLeadForm()">Book Service Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Areas -->
    <section class="service-areas">
        <div class="container">
            <div class="fade-in">
                <h2 class="service-areas-title">Service Areas</h2>
                <p class="service-areas-description">Apex Pest Control proudly serves residential and commercial clients across the United States with reliable pest control services and fast response times.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section">
        <div class="container">
            <div class="section-header fade-in">
                <h2 class="section-title gradient-text">Customer Testimonials</h2>
                <p class="section-description">See what our satisfied customers have to say about our services.</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card scroll-fade">
                    <div class="testimonial-stars">
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <p class="testimonial-quote">"Apex Pest Control saved our home from a termite infestation. The team was professional, thorough, and explained everything clearly. Highly recommend their services!"</p>
                    <div class="testimonial-author">
                        <div class="testimonial-author-image">SM</div>
                        <div>
                            <div class="testimonial-author-name">Sarah Martinez</div>
                            <div class="testimonial-author-location">Dallas, TX</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card scroll-fade">
                    <div class="testimonial-stars">
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <p class="testimonial-quote">"Fast response time and excellent customer service. They eliminated our rodent problem in no time. The technician was knowledgeable and friendly."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-author-image">JT</div>
                        <div>
                            <div class="testimonial-author-name">John Thompson</div>
                            <div class="testimonial-author-location">Phoenix, AZ</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card scroll-fade">
                    <div class="testimonial-stars">
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <svg class="star" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <p class="testimonial-quote">"We use Apex for our restaurant's monthly pest control. They're reliable, discreet, and always professional. Great value for the quality of service."</p>
                    <div class="testimonial-author">
                        <div class="testimonial-author-image">LC</div>
                        <div>
                            <div class="testimonial-author-name">Lisa Chen</div>
                            <div class="testimonial-author-location">Los Angeles, CA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="final-cta-pattern"></div>
        <div class="container final-cta-container">
            <div class="fade-in">
                <h2 class="final-cta-title">Ready to Get Started?</h2>
                <p class="final-cta-description">Contact us today for a free inspection and quote.</p>
                <div class="final-cta-buttons">
                    <a href="tel:+19026522985" class="btn btn-primary">
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +1-902-652-2985
                    </a>
                    <button class="btn btn-white" onclick="openLeadForm()">Request Free Quote</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <div class="logo-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span>Apex Pest Control</span>
                    </div>
                    <p class="footer-description">Professional pest control services for homes and businesses. Licensed, insured, and committed to your satisfaction.</p>
                </div>

                <div class="footer-col">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4 class="footer-title">Legal</h4>
                    <ul class="footer-links">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                        <li><a href="disclaimer.html">Disclaimer</a></li>
                        <li><a href="cookie-policy.html">Cookie Policy</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4 class="footer-title">Contact Us</h4>
                    <ul class="footer-contact">
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:+19026522985">+1-902-652-2985</a>
                        </li>
                        <li>
                            <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:help@apexpestcontrol.site">help@apexpestcontrol.site</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 Apex Pest Control. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Lead Form Popup -->
    <div class="modal-overlay" id="leadFormModal">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h3 class="modal-title">Request Free Quote</h3>
                    <p class="modal-subtitle">We'll get back to you within 24 hours</p>
                </div>
                <button class="modal-close" onclick="closeLeadForm()">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <form class="lead-form" id="leadForm">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required placeholder="John Doe">
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" required placeholder="+1-XXX-XXX-XXXX">
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required placeholder="john@example.com">
                </div>

                <div class="form-group">
                    <label for="service">Service Needed *</label>
                    <select id="service" name="service" required>
                        <option value="">Select a service</option>
                        <option value="general">General Pest Control</option>
                        <option value="termite">Termite Inspection & Treatment</option>
                        <option value="rodent">Rodent Control</option>
                        <option value="bedbug">Bed Bug Treatment</option>
                        <option value="mosquito">Mosquito Control</option>
                        <option value="commercial">Commercial Pest Control</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="3" placeholder="Tell us about your pest problem..."></textarea>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent">
                        I agree to the <a href="privacy-policy.html" target="_blank">Privacy Policy</a> and <a href="terms-conditions.html" target="_blank">Terms & Conditions</a>.
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Request Free Quote</button>
            </form>
        </div>
    </div>

    <!-- Cookie Consent Banner -->
    <div class="cookie-banner" id="cookieBanner">
        <div class="cookie-content">
            <p>We use cookies to enhance your browsing experience and analyze our traffic. By clicking "Accept All", you consent to our use of cookies. <a href="cookie-policy.html">Learn more</a></p>
            <div class="cookie-buttons">
                <button class="btn btn-outline-white" onclick="rejectCookies()">Reject</button>
                <button class="btn btn-white" onclick="acceptCookies()">Accept All</button>
            </div>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>

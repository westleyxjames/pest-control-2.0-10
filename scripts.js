// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileNav = document.getElementById('mobileNav');

if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenuBtn.classList.toggle('active');
        mobileNav.classList.toggle('active');
    });
}

// Lead Form Popup
function openLeadForm() {
    const modal = document.getElementById('leadFormModal');
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeLeadForm() {
    const modal = document.getElementById('leadFormModal');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// Close modal when clicking outside
const leadFormModal = document.getElementById('leadFormModal');
if (leadFormModal) {
    leadFormModal.addEventListener('click', (e) => {
        if (e.target === leadFormModal) {
            closeLeadForm();
        }
    });
}

// Lead Form Submission
const leadForm = document.getElementById('leadForm');
if (leadForm) {
    leadForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const formData = new FormData(leadForm);
        const data = Object.fromEntries(formData);
        
        console.log('Form submitted:', data);
        
        // Show success message
        alert('Thank you for your request! We will contact you within 24 hours.');
        
        // Reset form and close modal
        leadForm.reset();
        closeLeadForm();
    });
}

// Cookie Consent
function showCookieBanner() {
    const cookieConsent = localStorage.getItem('cookieConsent');
    const cookieBanner = document.getElementById('cookieBanner');
    
    if (!cookieConsent && cookieBanner) {
        cookieBanner.classList.add('active');
    }
}

function acceptCookies() {
    localStorage.setItem('cookieConsent', 'accepted');
    const cookieBanner = document.getElementById('cookieBanner');
    if (cookieBanner) {
        cookieBanner.classList.remove('active');
    }
}

function rejectCookies() {
    localStorage.setItem('cookieConsent', 'rejected');
    const cookieBanner = document.getElementById('cookieBanner');
    if (cookieBanner) {
        cookieBanner.classList.remove('active');
    }
}

// Scroll Fade Animation
function handleScrollFade() {
    const scrollFadeElements = document.querySelectorAll('.scroll-fade');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, index * 100);
            }
        });
    }, {
        threshold: 0.1
    });
    
    scrollFadeElements.forEach(element => {
        observer.observe(element);
    });
}

// Active Navigation Link
function setActiveNavLink() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
    
    navLinks.forEach(link => {
        const linkPath = new URL(link.href).pathname;
        
        if (linkPath === currentPath || 
            (currentPath === '/' && linkPath.endsWith('index.html')) ||
            (currentPath.endsWith('.html') && linkPath === currentPath)) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && document.querySelector(href)) {
            e.preventDefault();
            document.querySelector(href).scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    showCookieBanner();
    handleScrollFade();
    setActiveNavLink();
    
    // Add animation delays to feature cards
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });
    
    // Add animation delays to service cards
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });
});

// Contact Form Submission (for contact page)
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);
        
        console.log('Contact form submitted:', data);
        
        // Show success message
        alert('Thank you for contacting us! We will get back to you soon.');
        
        // Reset form
        contactForm.reset();
    });
}

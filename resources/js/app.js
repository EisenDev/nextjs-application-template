// Initialize ScrollReveal
const sr = ScrollReveal({
    origin: 'bottom',
    distance: '50px',
    duration: 1000,
    delay: 200,
    reset: true
});

// Reveal elements on scroll
document.addEventListener('DOMContentLoaded', () => {
    // Hero section animations
    sr.reveal('.reveal-left', {
        origin: 'left',
        distance: '100px',
        duration: 1000,
        delay: 200
    });

    sr.reveal('.reveal-right', {
        origin: 'right',
        distance: '100px',
        duration: 1000,
        delay: 400
    });

    // Project cards animation
    sr.reveal('.reveal-up', {
        interval: 200
    });

    // Add smooth scrolling to navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Add navbar background on scroll
window.addEventListener('scroll', () => {
    const nav = document.querySelector('nav');
    if (window.scrollY > 50) {
        nav.classList.add('shadow-sm');
    } else {
        nav.classList.remove('shadow-sm');
    }
});

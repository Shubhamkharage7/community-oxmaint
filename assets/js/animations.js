// Scroll animations and interactive elements
document.addEventListener('DOMContentLoaded', function() {
    // Initialize particle system for hero section
    createParticles();

    // Fade in elements on scroll
    const fadeElements = document.querySelectorAll('.fade-in');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    });
    
    fadeElements.forEach(element => observer.observe(element));

    // Add hover effects to cyber cards
    const cards = document.querySelectorAll('.cyber-card');
    cards.forEach(card => {
        // Add hover animation
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });

        // Add hover state class
        card.addEventListener('mouseenter', () => {
            card.classList.add('card-hover');
            const icon = card.querySelector('.icon-animate');
            if (icon) {
                icon.classList.add('pulse');
            }
        });

        card.addEventListener('mouseleave', () => {
            card.classList.remove('card-hover');
            const icon = card.querySelector('.icon-animate');
            if (icon) {
                icon.classList.remove('pulse');
            }
        });
    });

    // Animate icons
    const icons = document.querySelectorAll('.icon-animate');
    icons.forEach(icon => {
        icon.addEventListener('mouseenter', () => {
            icon.classList.add('pulse');
        });
        icon.addEventListener('mouseleave', () => {
            icon.classList.remove('pulse');
        });
    });
});

// Create particle effect in hero section
function createParticles() {
    const heroSection = document.querySelector('.wrapper');
    if (!heroSection) return;

    const particleContainer = document.createElement('div');
    particleContainer.className = 'particle-container';
    
    // Create particles
    for (let i = 0; i < 50; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        setParticlePosition(particle);
        particleContainer.appendChild(particle);
    }
    
    heroSection.appendChild(particleContainer);
}

// Utility function to set random particle positions
function setParticlePosition(particle) {
    const x = Math.random() * 100;
    const y = Math.random() * 100;
    const delay = Math.random() * 2;
    particle.style.left = `${x}%`;
    particle.style.top = `${y}%`;
    particle.style.animationDelay = `${delay}s`;
}

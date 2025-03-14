document.addEventListener('DOMContentLoaded', function() {
    // Add entry animation to the title
    const title = document.querySelector('.main-title');
    if (title) {
        title.classList.add('animate-fade-in');
    }
    
    // Counter animation for statistics
    animateCounters();
    
    // Animation for elements that come into view
    setupScrollAnimations();
    
    // Apply animation delays
    applyAnimationDelays();
    
    // Add card hover effects
    setupCardHoverEffects();
});

// Function to animate counter elements
function animateCounters() {
    // Year counter (fixed at 1981)
    const yearCounter = document.getElementById('yearCounter');
    if (yearCounter) {
        animateCounter('yearCounter', 1970, 1981, 1500);
    }
    
    // Employee counter (from 0 to 2000+)
    animateCounter('employeeCounter', 0, 2000, 2000, '+');
    
    // Experience counter (from 0 to 20+)
    animateCounter('experienceCounter', 0, 20, 1500, '+');
}

// Generic counter animation function
function animateCounter(elementId, start, end, duration, suffix = '') {
    const element = document.getElementById(elementId);
    if (!element) return;
    
    // Add animation to the parent card
    const parentCard = element.closest('.stat-box');
    if (parentCard) {
        parentCard.classList.add('animate-pulse');
        
        // Stop pulsing after counter is done
        setTimeout(() => {
            parentCard.classList.remove('animate-pulse');
        }, duration + 500);
    }
    
    let startTime = null;
    const step = timestamp => {
        if (!startTime) startTime = timestamp;
        const progress = Math.min((timestamp - startTime) / duration, 1);
        const value = Math.floor(progress * (end - start) + start);
        element.textContent = value + suffix;
        
        if (progress < 1) {
            window.requestAnimationFrame(step);
        } else {
            // Add a final highlight effect when counter finishes
            element.style.animation = 'none';
            element.offsetHeight; // Trigger reflow
            element.style.animation = 'pulse 0.5s ease-out';
            
            // Add glow effect to the number when done
            element.style.textShadow = '0 0 15px rgba(245, 215, 66, 0.8)';
            setTimeout(() => {
                element.style.textShadow = '0 0 10px rgba(245, 215, 66, 0.5)';
            }, 500);
        }
    };
    
    window.requestAnimationFrame(step);
}

// Apply animation delays based on data-delay attribute
function applyAnimationDelays() {
    const elements = document.querySelectorAll('[data-delay]');
    elements.forEach(element => {
        const delay = element.getAttribute('data-delay');
        element.style.animationDelay = `${delay}ms`;
    });
}

// Setup scroll-based animations
function setupScrollAnimations() {
    const elements = document.querySelectorAll('.animate-fade-in, .animate-slide-up');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add a class to animate the card when it comes into view
                entry.target.classList.add('in-view');
                
                // For stat boxes, add an extra entrance animation
                if (entry.target.classList.contains('stat-box')) {
                    entry.target.style.animation = 'slideUp 0.8s ease forwards, pulse 2s 1s ease-in-out';
                }
                
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    elements.forEach(element => {
        observer.observe(element);
    });
}

// Setup hover effects for stat cards
function setupCardHoverEffects() {
    const statBoxes = document.querySelectorAll('.stat-box');
    
    statBoxes.forEach(box => {
        box.addEventListener('mouseenter', function() {
            // Add 3D tilt effect on hover
            this.addEventListener('mousemove', handleTilt);
        });
        
        box.addEventListener('mouseleave', function() {
            // Remove tilt effect and reset transform
            this.removeEventListener('mousemove', handleTilt);
            this.style.transform = 'translateY(-10px)';
            
            // Reset any children that were transformed
            const statNumber = this.querySelector('.stat-number');
            if (statNumber) {
                statNumber.style.transform = 'translateZ(0)';
            }
        });
    });
}

// Function to handle tilt effect
function handleTilt(e) {
    const box = this;
    const boxRect = box.getBoundingClientRect();
    const boxCenterX = boxRect.left + boxRect.width / 2;
    const boxCenterY = boxRect.top + boxRect.height / 2;
    
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    
    const tiltX = (boxCenterY - mouseY) / 10;
    const tiltY = (mouseX - boxCenterX) / 10;
    
    // Apply the tilt effect
    box.style.transform = `translateY(-10px) rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
    
    // Push the number forward for a 3D effect
    const statNumber = box.querySelector('.stat-number');
    if (statNumber) {
        statNumber.style.transform = 'translateZ(20px)';
    }
}

// Handle window resize events for responsive adjustments
window.addEventListener('resize', function() {
    // Add any specific resize handling code here if needed
});
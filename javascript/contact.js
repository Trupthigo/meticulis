// Form submission handler
document.addEventListener('DOMContentLoaded', function() {
    // Add animation class to body after page loads
    document.body.classList.add('page-loaded');
    
    // Form submission
    document.getElementById('submitBtn').addEventListener('click', function() {
        handleFormSubmission();
    });
    
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        handleFormSubmission();
    });
    
    // Add focus animations for form fields
    const formInputs = document.querySelectorAll('input, select, textarea');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('input-focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('input-focused');
        });
    });
});

function handleFormSubmission() {
    // Get form data
    const formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        service: document.getElementById('service').value,
        message: document.getElementById('message').value
    };
    
    // Frontend validation
    if (!formData.name || !formData.email || !formData.message) {
        showNotification('Please fill in all required fields.', 'error');
        shakeElement(document.querySelector('.form-body'));
        return;
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(formData.email)) {
        showNotification('Please enter a valid email address.', 'error');
        shakeElement(document.getElementById('email'));
        return;
    }
    
    // In a real application, you would send this data to your server using Ajax/fetch
    // For demonstration, we'll simulate a successful submission
    
    // Simulate processing time
    const submitBtn = document.querySelector('.submit-btn');
    
    // Add loading animation
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;
    submitBtn.classList.add('loading');
    
    // Add ripple effect on button
    createRippleEffect(submitBtn);
    
    setTimeout(() => {
        // Simulate successful submission
        showNotification('Thank you for your message! We will get back to you soon.', 'success');
        document.getElementById('contactForm').reset();
        submitBtn.innerHTML = '<i class="fas fa-check"></i> Message Sent';
        submitBtn.classList.remove('loading');
        submitBtn.classList.add('success');
        
        // Add success animation to the form
        document.querySelector('.contact-form-wrapper').classList.add('submission-success');
        
        setTimeout(() => {
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
            submitBtn.disabled = false;
            submitBtn.classList.remove('success');
            document.querySelector('.contact-form-wrapper').classList.remove('submission-success');
        }, 3000);
    }, 1500);
}

// Function to show notifications with animation
function showNotification(message, type) {
    const notification = document.getElementById('notification');
    
    // Remove any existing notifications first
    notification.style.display = 'none';
    
    // Set the new notification
    notification.textContent = message;
    notification.className = 'notification ' + type;
    
    // Trigger reflow to restart animation
    void notification.offsetWidth;
    
    // Show with animation
    notification.style.display = 'block';
    
    // Auto hide after 5 seconds with fade-out animation
    setTimeout(() => {
        notification.classList.add('fade-out');
        setTimeout(() => {
            notification.style.display = 'none';
            notification.classList.remove('fade-out');
        }, 500);
    }, 5000);
}

// Popup functions
function showPopup(message) {
    const popup = document.getElementById('popup-message');
    document.getElementById('popup-text').innerHTML = message;
    
    // Reset animation
    popup.style.animation = 'none';
    void popup.offsetWidth; // Trigger reflow
    popup.style.animation = 'popup-appear 0.4s cubic-bezier(0.19, 1, 0.22, 1)';
    
    popup.style.display = "block";
}

function closePopup() {
    const popup = document.getElementById('popup-message');
    popup.style.animation = 'fade-out 0.4s forwards';
    
    setTimeout(() => {
        popup.style.display = "none";
    }, 400);
}

// Add ripple effect for buttons
function createRippleEffect(button) {
    const ripple = document.createElement('span');
    ripple.classList.add('ripple');
    
    const diameter = Math.max(button.clientWidth, button.clientHeight);
    const radius = diameter / 2;
    
    ripple.style.width = ripple.style.height = `${diameter}px`;
    ripple.style.left = '0';
    ripple.style.top = '0';
    
    button.appendChild(ripple);
    
    setTimeout(() => {
        ripple.remove();
    }, 600);
}

// Add shake animation for validation errors
function shakeElement(element) {
    element.classList.add('shake-animation');
    
    // Remove class after animation completes
    setTimeout(() => {
        element.classList.remove('shake-animation');
    }, 600);
}

// Additional CSS for these new JS animations
const styleSheet = document.createElement('style');
styleSheet.innerHTML = `
    @keyframes shake-animation {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
        20%, 40%, 60%, 80% { transform: translateX(5px); }
    }
    
    .shake-animation {
        animation: shake-animation 0.6s cubic-bezier(.36,.07,.19,.97) both;
    }
    
    .input-focused label {
        color: var(--gold-primary);
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }
    
    .loading {
        position: relative;
        overflow: hidden;
    }
    
    .loading::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 200%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        animation: loading-animation 1.5s infinite;
    }
    
    @keyframes loading-animation {
        0% { left: -100%; }
        100% { left: 100%; }
    }
    
    .success {
        background: var(--success) !important;
    }
    
    .submission-success {
        box-shadow: 0 0 20px rgba(76, 175, 80, 0.3);
    }
    
    .ripple {
        position: absolute;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
    
    .page-loaded .contact-form-wrapper,
    .page-loaded .info-section,
    .page-loaded .map-section {
        animation-play-state: running;
    }
`;
document.head.appendChild(styleSheet);
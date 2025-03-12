document.addEventListener('DOMContentLoaded', function() {
    // Form submission handler
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        
        // Frontend validation
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const message = document.getElementById('message').value.trim();
        
        if (!name || !email || !phone || !message) {
            showAlert('error', 'Validation Error', 'Please fill in all required fields.');
            return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            showAlert('error', 'Invalid Email', 'Please enter a valid email address.');
            return;
        }
        
        // Phone validation (allows digits, spaces, dashes, and optional + at the start)
        const phoneRegex = /^\+?[\d\s-]{10,}$/;
        if (!phoneRegex.test(phone)) {
            showAlert('error', 'Invalid Phone Number', 'Please enter a valid phone number.');
            return;
        }
        
        // Update button state
        const submitBtn = document.querySelector('.submit-btn');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        submitBtn.disabled = true;
        
        // Send form data to server
        fetch(window.location.href, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                showAlert('success', 'Message Sent!', data.message);
                document.getElementById('contactForm').reset();
            } else {
                showAlert('error', 'Error', data.message || 'An error occurred. Please try again.');
            }
        })
        .catch(error => {
            showAlert('error', 'Error', 'An error occurred while sending your message. Please try again later.');
            console.error('Error:', error);
        })
        .finally(() => {
            // Reset button state after 1.5 seconds
            setTimeout(() => {
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
            }, 1500);
        });
    });
    
    // Function to show SweetAlert notifications
    function showAlert(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text,
            confirmButtonColor: '#d4af37'
        });
    }
    
    // Animation enhancements
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0
        );
    }
    
    function handleScrollAnimations() {
        const mapSection = document.querySelector('.map-section');
        
        if (mapSection && isInViewport(mapSection) && !mapSection.classList.contains('animated')) {
            mapSection.style.opacity = '1';
            mapSection.classList.add('animated');
        }
    }
    
    // Add scroll event listener for map section animation
    window.addEventListener('scroll', handleScrollAnimations);
    
    // Initial check for elements in viewport
    handleScrollAnimations();
    
    // Add subtle animations for form fields
    const formInputs = document.querySelectorAll('.form-group input, .form-group select, .form-group textarea');
    
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.transition = 'all 0.3s ease';
            this.parentElement.style.transition = 'all 0.3s ease';
            this.parentElement.style.transform = 'translateX(5px)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateX(0)'
        });
    });
    
    // Add animation to social links
    const socialLinks = document.querySelectorAll('.social-link');
    socialLinks.forEach((link, index) => {
        link.style.animationDelay = (0.7 + (index * 0.1)) + 's';
        link.style.opacity = '0';
        link.style.animation = 'fadeIn 0.5s ease-out forwards';
    });
});
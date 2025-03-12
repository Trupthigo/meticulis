// Form submission handler
 document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
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
        return;
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(formData.email)) {
        showNotification('Please enter a valid email address.', 'error');
        return;
    }
    // Phone validation (allows digits, spaces, dashes, and optional + at the start)
    const phoneRegex = /^\+?[\d\s-]{10,}$/;
    if (!phoneRegex.test(formData.phone)) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Phone Number',
            text: 'Please enter a valid phone number.',
        });
        return;
    }
    
    // In a real application, you would send this data to your server using Ajax/fetch
    // For demonstration, we'll simulate a successful submission
    
    // Simulate processing time
    const submitBtn = document.querySelector('.submit-btn');
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;
    
    setTimeout(() => {
        // Simulate successful submission
        showNotification('Thank you for your message! We will get back to you soon.', 'success');
        document.getElementById('contactForm').reset();
        submitBtn.innerHTML = '<i class="fas fa-check"></i> Message Sent';
        
        setTimeout(() => {
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
            submitBtn.disabled = false;
        }, 3000);
    }, 1500);
// Function to show popup message
function showPopup(message) {
    document.getElementById('popup-text').innerHTML = message;
    document.getElementById('popup-message').style.display = "block";
}

// Function to close popup
function closePopup() {
    document.getElementById('popup-message').style.display = "none";
}

// Attach event listener to the contact form
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    let formData = new FormData(this);

    // Disable submit button and show loading animation
    const submitBtn = document.querySelector('.submit-btn');
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;

    fetch("contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())  // Expect JSON response from PHP
    .then(data => {
        if (data.status === "success") {
            showPopup(data.message); // Show success message
            document.getElementById("contactForm").reset(); // Reset form
        } else {
            showPopup("Failed to send message. Please try again.");
        }
    })
    .catch(error => {
        showPopup("An error occurred. Please try again.");
    })
    .finally(() => {
        // Re-enable submit button after 3 seconds
        setTimeout(() => {
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
            submitBtn.disabled = false;
        }, 3000);
    });
});

    
    // In a real application, the PHP code would handle the form submission
    // Example of how you would process this in PHP:
    /*
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $service = htmlspecialchars($_POST['service']);
        $message = htmlspecialchars($_POST['message']);
        
        $to = "info@yourcompany.com";
        $subject = "New Contact Form Submission";
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n";
        $email_content .= "Service: $service\n\n";
        $email_content .= "Message:\n$message\n";
        
        $headers = "From: $name <$email>";
        
        if (mail($to, $subject, $email_content, $headers)) {
            echo json_encode(["status" => "success", "message" => "Thank you for your message!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to send message. Please try again."]);
        }
    }
    ?>
    */
});

// Function to show notifications
function showNotification(message, type) {
    const notification = document.getElementById('notification');
    notification.textContent = message;
    notification.className = 'notification ' + type;
    notification.style.display = 'block';
    
    // Auto hide after 5 seconds
    setTimeout(() => {
        notification.style.display = 'none';
    }, 5000);
}

// Animation enhancement script - add this to your existing contact.js file
document.addEventListener('DOMContentLoaded', function() {
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0
        );
    }

    // Function to handle scroll animations for map section
    function handleScrollAnimations() {
        const mapSection = document.querySelector('.map-section');
        
        if (isInViewport(mapSection) && !mapSection.classList.contains('animated')) {
            mapSection.style.opacity = '1';
            mapSection.classList.add('animated');
        }
    }

    // Add scroll event listener for map section animation
    window.addEventListener('scroll', handleScrollAnimations);
    
    // Initial check for elements in viewport
    handleScrollAnimations();
    
    // Subtle animation for form fields when focused
    const formInputs = document.querySelectorAll('.form-group input, .form-group select, .form-group textarea');
    
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.transition = 'all 0.3s ease';
            this.parentElement.style.transition = 'all 0.3s ease';
            this.parentElement.style.transform = 'translateX(5px)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateX(0)';
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
// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get form and submit button elements
    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    
    // Add click event listener to the submit button
    submitBtn.addEventListener('click', function() {
        // Perform validation
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        
        // Basic validation
        if (!name || !email || !message) {
            showNotification('Please fill in all required fields.', 'error');
            return;
        }
        
        // Email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            showNotification('Please enter a valid email address.', 'error');
            return;
        }
        
        // Create FormData object from the form
        const formData = new FormData(contactForm);
        
        // Change button state
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        submitBtn.disabled = true;
        
        // Send the form data using fetch API
            
            fetch('send_email.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Create and show popup
                const popup = document.createElement('div');
                popup.className = 'popup-message';
                popup.textContent = data.message;
                
                // Add success/error class
                if (data.success) {
                    popup.classList.add('success');
                } else {
                    popup.classList.add('error');
                }
                
                document.body.appendChild(popup);
                
                // Remove popup after 3 seconds
                setTimeout(() => {
                    popup.classList.add('fade-out');
                    setTimeout(() => {
                        popup.remove();
                    }, 1000);
                }, 3000);
                
                // Reset form if successful
                if (data.success) {
                    this.reset();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });

// Function to show notification messages
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

// Popup functions
function showPopup(message) {
    document.getElementById('popup-text').innerHTML = message;
    document.getElementById('popup-message').style.display = 'block';
}

function closePopup() {
    document.getElementById('popup-message').style.display = 'none';
}
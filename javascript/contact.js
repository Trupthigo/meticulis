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
    function showPopup(message) {
        document.getElementById('popup-text').innerHTML = message;
        document.getElementById('popup-message').style.display = "block";
    }

    function closePopup() {
        document.getElementById('popup-message').style.display = "none";
    }

    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        let formData = new FormData(this);

        fetch("send_email.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            showPopup(data); // Show success/error message in popup
            document.getElementById("contactForm").reset(); // Reset form after submission
        })
        .catch(error => {
            showPopup("An error occurred. Please try again.");
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


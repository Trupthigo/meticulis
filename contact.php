 
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs and sanitize
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'mstrupthi@gmail.com'; // Use environment variables
        $mail->Password = 'zdvy lkog rhpw tjiv'; // NEVER hardcode passwords
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and Recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('mstrupthi@gmail.com', 'Trupthi'); 

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: $service";
        $mail->Body = "
            <h3>Contact Details</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Service Interested In:</strong> $service</p>
            <p><strong>Message:</strong> $message</p>
        ";

        // Send Email
        $mail->send();
        $alertMessage = "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Message Sent!',
                    text: 'Your message has been sent successfully.',
                    confirmButtonText: 'OK'
                });
            });
        </script>";
    } catch (Exception $e) {
        $alertMessage = "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Message Not Sent',
                    text: 'Error: {$mail->ErrorInfo}',
                    confirmButtonText: 'Try Again'
                });
            });
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Company Name</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css"><!-- Local CSS in same folder -->
</head>
<style>
    /* Popup Modal Styling */
/* Popup Modal Styling */
.popup {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    align-items: center;
    justify-content: center;
}

.popup-content {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.close-btn {
    float: right;
    font-size: 24px;
    cursor: pointer;
}

    </style>
<body>
    <?php include 'includes/header.php'; ?> 
    <div class="container">
        <!-- <header>
            <a href="index.html" class="logo">Contact US</a>
        </header> -->
        
        <div class="page-content">
            <!-- Left column - Contact form -->
            <div class="contact-form-wrapper">
                <div class="form-header">
                    <h1>Get in Touch</h1>
                    <p>We're here to help with all your consulting and contract solution needs.</p>
                </div>
                
                <div class="form-body">
                    <div class="notification" id="notification"></div>
                    
                    <form id="contactForm" action="contact.php" method="post">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" placeholder="Your name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Your email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Your phone number" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="service">Service You're Interested In</label>
                            <select id="service" name="service">
                                <option value="">Select a service</option> 
                                <option value="business-consulting">Business Consulting</option>
                                <option value="contract-solutions">Contract Solutions</option>
                                <option value="project-management">Project Management</option>
                                <option value="strategic-planning">Strategic Planning</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" placeholder="How can we help you?" required></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
<!-- Popup Modal -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span id="close-popup" class="close-btn">&times;</span>
        <p id="popup-message">Your message has been sent successfully!</p>
    </div>
</div>

                </div>
            </div>
            
            <!-- Right column - Contact info -->
            <div class="contact-info">
                <div class="info-section">
                    <h2 class="section-title">Contact Information</h2>
                    
                    <div class="info-items">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Our Location</h3>
                                <p>
                                    <a href="https://maps.app.goo.gl/LhyRU53XNSQQ1jxM9" target="_blank" style="color: inherit; text-decoration: none;">
                                    24 Austin House, King Street, Norwich<br>United Kingdom, NR11FW
                                </p>
                            </div>
                        </div>
                        
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h3>Email Us</h3>
                                <p><a href="mailto:admin@meticulis.co.uk" style="color: inherit; text-decoration: none;">admin@meticulis.co.uk</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h3>Business Hours</h3>
                                <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="info-section social-section">
                    <h2 class="section-title">Connect With Us</h2>
                    
                    <div class="social-links">
                        <a href="https://www.linkedin.com/company/meticulis" class="social-link" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.facebook.com/meticulisltd" class="social-link" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/meticulisltd/" class="social-link" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>

                </div>
            </div>
            
            <!-- Full width map section -->
            <div class="map-section">
                <h2 class="map-title">Find Us</h2>
                <iframe class="map-container"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9686.816886520059!2d1.2881289721715994!3d52.62918895880931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9e3906320296f%3A0xa8c6afe3666be6a5!2sAustin%20House!5e0!3m2!1sen!2sin!4v1741680206918!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
    <script src="javascript/contact.js"></script>
    <!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Your Custom Script -->
<script src="javascript/contact.js" defer></script>
<?php include 'includes/footer.php'; ?>
</body>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'vendor/autoload.php';

// Initialize response array
$response = [
    'status' => 'error',
    'message' => 'An unknown error occurred'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs and sanitize
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Validate inputs
    if (!$name || !$email || !$phone || !$message) {
        $response = [
            'status' => 'error',
            'message' => 'All fields are required'
        ];
        echo json_encode($response);
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response = [
            'status' => 'error',
            'message' => 'Invalid email format'
        ];
        echo json_encode($response);
        exit;
    }
    
    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration for Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = getenv('SMTP_USERNAME') ?: 'mstrupthi@gmail.com'; // Set environment variable with your Gmail
        $mail->Password = getenv('SMTP_PASSWORD') ?: 'zdvy lkog rhpw tjiv'; // Set environment variable with app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and Recipient
        $mail->setFrom('mstrupthi@gmail.com', 'Meticulis Contact Form');
        $mail->addAddress('mstrupthi@gmail.com', 'Meticulis'); 
        $mail->addReplyTo($email, $name);

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
        $mail->AltBody = "Contact Details\n\nName: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage: $message";

        // Send Email
        $mail->send();
        $response = [
            'status' => 'success',
            'message' => 'Your message has been sent successfully. We will get back to you soon!'
        ];
    } catch (Exception $e) {
        // Log error (don't expose details to user)
        error_log("Mailer Error: " . $mail->ErrorInfo);
        $response = [
            'status' => 'error',
            'message' => 'Unable to send your message. Please try again later.'
        ];
    }
    
    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Meticulis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <?php include 'includes/header.php'; ?> 
    <div class="container">
        <div class="page-content">
            <!-- Left column - Contact form -->
            <div class="contact-form-wrapper">
                <div class="form-header">
                    <h1>Get in Touch</h1>
                    <p>We're here to help with all your consulting and contract solution needs.</p>
                </div>
                
                <div class="form-body">
                    <form id="contactForm" method="post">
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
                            <select id="service" name="service" required>
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
                                    </a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h3>Email Us</h3>
                                <p>
                                    <a href="mailto:admin@meticulis.co.uk" style="color: inherit; text-decoration: none;">
                                        admin@meticulis.co.uk
                                    </a>
                                </p>
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
    
    <!-- SweetAlert2 for notifications -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="javascript/contact.js"></script>
    <?php include 'includes/footer.php'; ?>
</body>
</html>




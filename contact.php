<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Your Company Name</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/contact.css"> <!-- Local CSS in same folder -->
</head>
<body>
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
                    
                    <form id="contactForm" action="send_email.php" method="post">
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
                            <input type="tel" id="phone" name="phone" placeholder="Your phone number">
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
                        <div id="popup-message" class="popup">
        <span id="popup-text"></span>
        <button onclick="closePopup()">OK</button>
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
                                <p>123 Business Avenue, Suite 200<br>New York, NY 10001</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Call Us</h3>
                                <p>+1 (555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h3>Email Us</h3>
                                <p>info@yourcompany.com</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h3>Business Hours</h3>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 2:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="info-section social-section">
                    <h2 class="section-title">Connect With Us</h2>
                    
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Full width map section -->
            <div class="map-section">
                <h2 class="map-title">Find Us</h2>
                <iframe class="map-container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.746318586604!2d-74.00580018696228!3d40.7112564864201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a165bedccab%3A0x2cb2ddf003b5ae01!2sWall%20Street%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1646999089612!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <script src="contact.js"></script>
    
<?php include 'includes/footer.php'; ?>
</body>
</html>
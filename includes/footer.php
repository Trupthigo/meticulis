<?php
// Base URL configuration - adjust as needed for your site structure
$base_url = '/'; // Change this to your site's root directory path, e.g., '/meticulis/' if in a subdirectory
?>
<link rel="stylesheet" href="../css/footer.css">
<footer class="footer-section">
    <div class="footer-top">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column footer-about">
                    <div class="footer-logo">
                        <a href="index.php">
                            <img src="images/logo2.jpg" alt="Meticulis Logo">
                        </a>
                    </div>
                </div>
                <div class="footer-column footer-links">
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-menu">
                        <li><a href="index.php">Home</a></li>
                        <!-- <li><a href="aboutus.php">About Us</a></li> -->
                        <li><a href="index.php#ourservices">Services</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-column footer-services">
                    <h3 class="footer-heading">Our Services</h3>
                    <ul class="footer-menu">
                        <li><a href="index.php#ourservices">Skilled Technical Resources</a></li>
                        <li><a href="index.php#ourservices">Project Management</a></li>
                        <li><a href="index.php#ourservices">Software Development</a></li>
                    </ul>
                </div>
                <div class="footer-column footer-contact">
                    <h3 class="footer-heading">Contact Us</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> <a href="https://www.google.com/maps?q=24+Austin+House,+King+Street,+Norwich,+NR1+1FW,+United+Kingdom" style="color: inherit; text-decoration: none;">24 Austin House, King Street, Norwich, NR1 1FW, United Kingdom</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:admin@meticulis.co.uk" style="color: inherit; text-decoration: none;">info@meticulis.co.uk</a></li>
                    </ul>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/company/meticulis" class="social-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/meticulisltd" class="social-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/meticulisltd/" class="social-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>All Rights Reserved &copy; <?php echo date('Y'); ?> <a href="index.php">Meticulis.</a></p>
            </div>
            <div class="footer-legal">
                <p>Developed and maintained by <a href="https://optimumsync.com/">OptimumSync.</a></p>
            </div>
        </div>
    </div>
    <div class="footer-shape"></div>
</footer>
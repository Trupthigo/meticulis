<!-- header.php -->
<link rel="stylesheet" href="../css/header.css">

<style>
    /* Additional styles for transparent header functionality */
    .header {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1000;
        transition: background-color 0.5s ease;
    }
    
    .header.transparent {
        background-color: transparent;
        box-shadow: none;
    }
    
    .header:not(.transparent) {
        background-color: #000000; /* Same as your body background */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    /* Adjust for the fixed header by adding padding to the body */
    /* body {
        padding-top: 80px; /* Adjust this value based on your header height */
    
</style>

<header class="header" id="main-header">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php" class="logo">
                <img src="logo.jpg" alt="Meticulis">
                METICULIS
            </a>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#aboutus">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</header>

<script>
    // Hamburger toggle and header transparency control
    document.addEventListener('DOMContentLoaded', () => {
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        const header = document.getElementById('main-header');
        
        // Check if we're on the home page with hero section
        const heroSection = document.querySelector('.hero-section');
        
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
        
        document.addEventListener('click', (e) => {
            if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
        
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        });
        
        // Handle header transparency - only apply if hero section exists
        if (heroSection) {
            // Initially set the header as transparent if at the top of the page
            if (window.scrollY < 100) {
                header.classList.add('transparent');
            }
            
            // Add scroll event listener
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    header.classList.remove('transparent');
                } else {
                    header.classList.add('transparent');
                }
            });
        }
    });
</script>
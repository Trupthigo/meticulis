<!-- header.php -->
<link rel="stylesheet" href="../css/header.css">

<style>
    /* Header styles with transparency removed */
    .header {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1000;
        background-color: #000000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        height: 80px; /* Set a consistent height */
        display: flex;
        align-items: center;
    }
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
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="index.php#ourservices">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</header>

<script>
    // Hamburger toggle functionality
    document.addEventListener('DOMContentLoaded', () => {
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        
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
    });
</script>
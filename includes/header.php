<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meticulis</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #121212;
            color: #f1f1f1;
        }
        
        /* Header Styles */
        .header {
            background-color: #000000;
            padding: 20px 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            position: fixed;
            z-index: 100;
            width: 100%;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff; /* Purple accent color */
            text-decoration: none;
        }
        
        /* Navigation Menu */
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            margin-left: 30px;
        }
        
        .nav-menu a {
            color: #e1e1e1;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
            padding-bottom: 5px;
        }
        
        .nav-menu a:hover {
            color: #ffd700;
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #ffd700;
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }
        
        .nav-menu a:hover::after {
            width: 100%;
        }
        
        /* Hamburger Menu */
        .hamburger {
            display: none;
            cursor: pointer;
            width: 30px;
            height: 20px;
            position: relative;
        }
        
        .hamburger span {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: #e1e1e1;
            border-radius: 3px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }
        
        .hamburger span:nth-child(1) {
            top: 0px;
        }
        
        .hamburger span:nth-child(2) {
            top: 8px;
        }
        
        .hamburger span:nth-child(3) {
            top: 16px;
        }
        
        .hamburger.active span:nth-child(1) {
            top: 8px;
            transform: rotate(45deg);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:nth-child(3) {
            top: 8px;
            transform: rotate(-45deg);
        }
        
        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .hamburger {
                display: block;
                z-index: 101;
            }
            
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 250px;
                height: 100vh;
                background-color: #1a1a1a;
                flex-direction: column;
                padding-top: 80px;
                transition: 0.3s ease;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.3);
            }
            
            .nav-menu.active {
                right: 0;
            }
            
            .nav-menu li {
                margin: 0;
                padding: 15px 30px;
                width: 100%;
                border-bottom: 1px solid #333;
            }
            
            .nav-menu a {
                font-size: 18px;
                width: 100%;
                display: block;
            }
            
            .header {
                padding: 15px 20px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.php" class="logo">METICULIS</a>
                
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <script>
        // JavaScript for toggle menu
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.querySelector('.hamburger');
            const navMenu = document.querySelector('.nav-menu');
            
            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideNav = navMenu.contains(event.target);
                const isClickInsideHamburger = hamburger.contains(event.target);
                
                if (!isClickInsideNav && !isClickInsideHamburger && navMenu.classList.contains('active')) {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                }
            });
            
            // Close menu when window is resized to desktop size
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768 && navMenu.classList.contains('active')) {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
<?php
// header.php - Include this file at the top of your pages
// Get current page name
$current_page = basename($_SERVER['PHP_SELF']);

// Function to check if link is active
function isActive($pageName) {
    global $current_page;
    return $current_page === $pageName ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Link external CSS -->
</head>
<body>
    <header class="header">
        <div class="header-container">
            <a href="index.php" class="logo">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#4f46e5" stroke-width="2"/>
                    <path d="M2 17L12 22L22 17" stroke="#4f46e5" stroke-width="2"/>
                    <path d="M2 12L12 17L22 12" stroke="#4f46e5" stroke-width="2"/>
                </svg>
                <span class="logo-text">YourBrand</span>
            </a>
            
            <nav class="nav">
                <button class="menu-toggle">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M3 6H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
                
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'active' : ''; ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <script src="script.js"></script> <!-- Link external JavaScript -->

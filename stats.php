<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meticulis - Our Story</title>
    <link rel="stylesheet" href="../css/stats.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="hero-section">
        <div class="container">
            <h1 class="main-title animate-slide-left-to-right">WHY METICULIS?!!</h1>
        </div>
    </header>

    <section class="stats-section">
        <div class="container">
            <div class="stats-container">
                <div class="stat-box animate-slide-up" data-delay="0">
                    <div class="stat-number" id="yearCounter">1981</div>
                    <div class="stat-label">Year founded</div>
                </div>
                
                <div class="stat-box animate-slide-up" data-delay="200">
                    <div class="stat-number" id="employeeCounter">0</div>
                    <div class="stat-label">Number of employees</div>
                </div>
                
                <div class="stat-box animate-slide-up" data-delay="400">
                    <div class="stat-number" id="experienceCounter">0</div>
                    <div class="stat-label">years of experience</div>
                </div>
            </div>
        </div>
    </section>
    <?php
    // This PHP section could be used to dynamically load content from a database
    // For example:
    // $stats = getCompanyStats(); // Function to fetch stats from database
    // echo '<script>';
    // echo 'const companyStats = ' . json_encode($stats) . ';';
    // echo '</script>';
    ?>

    <script src="../javascript/stats.js"></script>
</body>
</html>
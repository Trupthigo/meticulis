<?php include 'first.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meticulis</title>
  <link rel="stylesheet" href="../css/aboutus.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet"> -->

</head>
<body>
  <?php include 'includes/header.php'; ?>
 
  
  <section class="diagonal-section">
    <div class="diagonal-bg"></div>
    <div class="container">
      <div class="diagonal-content">
        <div class="diagonal-text">
          <h2 class="section-title fade-in">Our <span class="highlight">Mission</span></h2>
          <p class="section-description fade-in">
            Our mission is to empower businesses with expert consulting and contracting solutions that drive efficiency, innovation, and sustainable growth. We strive to provide tailored strategies and cutting-edge solutions that enhance operational performance, streamline processes, and foster long-term success. By leveraging industry expertise and a commitment to excellence, we help organizations navigate challenges, seize opportunities, and achieve their full potential in a rapidly evolving marketplace.
          </p>
        </div>
        <img src="images/mission.jpg" alt="Meticulis mission" class="diagonal-image slide-in-right">
      </div>
    </div>
  </section>
  
  <section class="values-section">
    <div class="floating-dots" id="floatingDots"></div>
    <div class="container">
      <div class="values-intro">
        <h2 class="section-title fade-in">Core <span class="highlight">Values</span></h2>
        <p class="fade-in">Our values guide everything we do and form the foundation of our organization's culture.</p>
      </div>
      <?php 
      if (file_exists('slider.php')) {
        include 'slider.php';
      } else {
        echo '<div class="fade-in">Values slider content will be loaded here.</div>';
      }
      ?>
    </div>
  </section>
  
  <section class="expertise-section">
    <div class="expertise-bg" id="expertiseBg"></div>
    <div class="expertise-glow"></div>
    <div class="container">
      <div class="expertise-content">
        <h2 class="expertise-title fade-in">Team <span class="highlight">Expertise</span></h2>
        <p class="expertise-text fade-in">
          Our team consists of seasoned IT professionals with extensive industry knowledge and certifications. 
          We deliver comprehensive solutions through deep technical expertise and strategic insight.
        </p>
        <img src="images/people.jpg" alt="Meticulis team" class="expertise-image rotate-in">
      </div>
    </div>
  </section>
  
  <section class="global-section">
    <div class="global-dots" id="globalDots"></div>
    <div class="container">
      <h2 class="section-title slide-in-right">Global <span class="highlight">Presence</span></h2>
      <div class="location-cards">
        <div class="location-card slide-in-right" data-delay="0.2">
          <h3 class="location-title">UK Headquarters</h3>
          <img src="images/hq.webp" alt="Meticulis UK Headquarters" class="location-image">
          <p>Our HQ operates from the UK, ensuring seamless collaboration across time zones and enabling round-the-clock productivity for our international clients. This strategic location allows us to provide efficient support, maintain clear communication, and deliver consistent results across global markets.</p>
        </div>
        <div class="location-card slide-in-right" data-delay="0.4">
          <h3 class="location-title">India Talent Pool</h3>
          <img src="images/talentpool.webp" alt="Meticulis India talent pool" class="location-image">
          <p>We have access to a strong IT and business talent pool based in India, with skilled professionals in strategy, technology, and operations. This diverse expertise enables us to offer innovative solutions, drive efficiency, and support businesses in achieving their goals with agility and precision.</p>
        </div>
      </div>
    </div>
  </section>
  <script src="javascript/aboutus.js"></script>
  <?php include 'includes/footer.php'; ?>

</body>
</html>
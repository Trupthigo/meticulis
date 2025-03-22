<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>METICULIS</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :after,
    :before,
    * {
      box-sizing: border-box;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    body {
      margin: 0;
      /* font-family: 'Avenir Heavy'; */
    }

    h2 {
      line-height: 1.1;
      font-family: 'Signika Bold'; 
    }

    /*--------------------------------------------------------------
      # Hero Slider
    --------------------------------------------------------------*/
    .hero-slider {
      width: 100%;
      height: 700px;
      display: flex;
      position: relative;
      z-index: 0;
    }

    .hero-slider .swiper-slide {
      overflow: hidden;
      color: #fff;
    }

    .hero-slider .swiper-container {
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0;
    }

    .hero-slider .slide-inner {
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0;
      z-index: 1;
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: left;
    }

    .hero-slider .swiper-button-prev,
    .hero-slider .swiper-button-next {
      background: transparent;
      width: 55px;
      height: 55px;
      line-height: 53px;
      margin-top: -30px;
      text-align: center;
      border: 2px solid #d4d3d3;
      border-radius: 55px;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .hero-slider:hover .swiper-button-prev,
    .hero-slider:hover .swiper-button-next {
      transform: translateX(0);
      opacity: 1;
      visibility: visible;
    }

    .hero-slider .swiper-button-prev {
      left: 25px;
      transform: translateX(50px);
    }

    .hero-slider .swiper-button-prev:before {
      font-family: "Font Awesome 5 Free";
      content: "\f060";
      font-size: 15px;
      color: #d4d3d3;
      font-style: normal;
      display: inline-block;
      vertical-align: middle;
      font-weight: 900;
    }

    .hero-slider .swiper-button-next {
      right: 25px;
      transform: translateX(-50px);
    }

    .hero-slider .swiper-button-next:before {
      font-family: "Font Awesome 5 Free";
      content: "\f061";
      font-size: 15px;
      color: #d4d3d3;
      font-style: normal;
      display: inline-block;
      vertical-align: middle;
      font-weight: 900;
    }

    .hero-slider .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      text-align: left;
      line-height: 12px;
      font-size: 12px;
      color: #ffffff;
      opacity: 0.3;
      background: #fff;
      transition: all 0.2s ease;
    }

    .hero-slider .swiper-pagination-bullet-active {
      opacity: 1;
    }

    .hero-slider .swiper-container-horizontal > .swiper-pagination-bullets,
    .hero-slider .swiper-pagination-custom,
    .hero-slider .swiper-pagination-fraction {
      bottom: 30px;
    }

    .swiper-pagination {
      text-align: left;
    }

    .hero-slider .swiper-container-horizontal > .swiper-pagination-bullets {
      bottom: 50px;
      max-width: 1200px;
      padding: 0 15px;
      margin: 0 auto;
      left: 50%;
      transform: translateX(-50%);
    }

    /*--------------------------------------------------------------
      # Hero Style
    --------------------------------------------------------------*/
    .hero-style {
      height: 850px;
      transition: all 0.4s ease;
    }

    .hero-style .slide-title,
    .hero-style .slide-text,
    .hero-style .slide-btns {
      max-width: 90%;
    }

    .hero-style .slide-title h2 {
      font-size: 6rem;
      font-weight: 600;
      line-height: 1;
      color: #ffffff;
      margin: 0 0 40px;
      text-transform: capitalize;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
      transition: all 0.4s ease;
    }

    .hero-style .slide-text p {
      opacity: 0.8;
      font-family: "Avenir Heavy";
      font-size: 2rem;
      font-weight: 700;
      line-height: 1.25;
      color: #ffffff;
      margin: 0 0 40px;
      transition: all 0.4s ease;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .hero-style .slide-btns > a:first-child {
      margin-right: 10px;
      margin-bottom: 10px;
    }

    .hero-style .slide-btns {
      display: flex;
      flex-wrap: wrap;
    }

    /*--------------------------------------------------------------
      # Button Style
    --------------------------------------------------------------*/
    .theme-btn,
    .theme-btn-s2 {
      background-color: #ffffff;
      font-size: 1.25rem;
      font-weight: 500;
      line-height: 1.4;
      text-align: center;
      color: #2b3b95;
      padding: 9px 32px;
      border: 0;
      border-radius: 3px;
      text-transform: uppercase;
      display: inline-block;
      transition: all 0.4s ease;
    }

    a {
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .theme-btn-s2 {
      background-color: rgba(255, 255, 255, 0.9);
      color: #131e4a;
    }

    .theme-btn:hover,
    .theme-btn-s2:hover,
    .theme-btn:focus,
    .theme-btn-s2:focus,
    .theme-btn:active,
    .theme-btn-s2:active {
      background-color: #ffd700;
      color: #fff;
    }

    .theme-btn-s3 {
      font-size: 1rem;
      font-weight: 500;
      line-height: 1.5;
      color: #ffffff;
      text-transform: uppercase;
      padding: 9px 20px;
      display: inline-block;
    }

    .theme-btn-s3:hover {
      color: #000000;
      opacity: 50%;
      background-color: #ffffff;
      padding: 9px 20px;
      border-radius: 3px;
    }

    i.fa-chevron-circle-right {
      height: 22px;
      width: 22px;
    }

    a:hover {
      text-decoration: none;
    }

    /* Responsive styles */
    /* Tablet View (768px - 991px) */
    @media (max-width: 991px) {
      .hero-slider, .hero-style {
        height: 600px;
      }

      .hero-style .slide-title h2 {
        font-size: 3.5rem;
        margin: 0 0 35px;
      }

      .hero-style .slide-text p {
        font-size: 1.5rem;
        margin: 0 0 30px;
      }

      .theme-btn,
      .theme-btn-s2,
      .theme-btn-s3 {
        font-size: 0.9rem;
        padding: 8px 20px;
      }

      .hero-slider .swiper-container-horizontal > .swiper-pagination-bullets {
        bottom: 30px;
      }
    }

    /* Mobile View (320px - 767px) */
    @media (max-width: 767px) {
      .hero-slider, .hero-style {
        height: 500px;
      }

      .hero-style .slide-title h2 {
        font-size: 2.2rem;
        margin: 0 0 20px;
      }

      .hero-style .slide-text p {
        font-size: 1rem;
        font-weight: 600;
        margin: 0 0 25px;
      }

      .theme-btn,
      .theme-btn-s2 {
        padding: 8px 15px;
        font-size: 0.8rem;
      }

      .theme-btn-s3 {
        font-size: 0.8rem;
        padding: 8px 15px;
      }

      .hero-slider .swiper-button-prev,
      .hero-slider .swiper-button-next {
        display: none;
      }
      
      .hero-style .slide-btns {
        flex-direction: column;
      }
      
      .hero-style .slide-btns > a {
        margin-bottom: 10px;
        text-align: center;
      }
      
      .hero-style .slide-btns > a:first-child {
        margin-right: 0;
      }
    }

    /* Small Mobile View (320px - 480px) */
    @media (max-width: 480px) {
      .hero-style .slide-title h2 {
        font-size: 1.8rem;
        margin-bottom: 15px;
      }
      
      .hero-style .slide-text p {
        font-size: 0.9rem;
        margin-bottom: 20px;
      }
      
      .theme-btn, .theme-btn-s2, .theme-btn-s3 {
        padding: 6px 12px;
        font-size: 0.75rem;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>
  <!-- Header would be included here -->

  <!-- Start of Hero Slider -->
  <section class="hero-slider hero-style">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!-- Example slide 1 -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/laptop.jpg">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2>METICULIS</h2>
              </div>
              <div data-swiper-parallax="400" class="slide-text">
                <p>Diligent minds driving sustainable growth</p>
              </div>
              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <a href="contact.php" class="theme-btn-s2">Contact now</a>
                <a href="index.php#ourservices" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i> Get Info</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Example slide 2 -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/u.jpg">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2>METICULIS</h2>
              </div>
              <div data-swiper-parallax="400" class="slide-text">
                <p>Diligent minds driving sustainable growth</p>
              </div>
              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <a href="contact.php" class="theme-btn-s2">Contact now</a>
                <a href="index.php#ourservices" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i> Get Info</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Example slide 3 -->
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image" data-background="images/pro.jpg">
            <div class="container">
              <div data-swiper-parallax="300" class="slide-title">
                <h2>METICULIS</h2>
              </div>
              <div data-swiper-parallax="400" class="slide-text">
                <p>Diligent minds driving sustainable growth</p>
              </div>
              <div class="clearfix"></div>
              <div data-swiper-parallax="500" class="slide-btns">
                <a href="contact.php" class="theme-btn-s2">Contact now</a>
                <a href="index.php#ourservices" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i> Get Info</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Swiper Navigation Controls -->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>
    // Set background images from data-background attribute
    document.querySelectorAll(".slide-bg-image").forEach(function(el) {
      const bg = el.getAttribute("data-background");
      if (bg) {
        el.style.backgroundImage = "url('" + bg + "')";
      }
    });

    // Initialize Swiper
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      speed: 1000,
      parallax: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      }
    });
  </script>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const hash = window.location.hash;
      if (hash) {
        const target = document.querySelector(hash);
        if (target) {
          target.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  </script>

  <!-- Services and footer would be included here -->

  <?php include 'services.php'; ?>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
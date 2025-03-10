<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Swiper Slider - PHP Version</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="../css/index.css"> <!-- Local CSS in same folder -->
  <link rel="stylesheet" href="../css/aboutus.css"> <!-- Local CSS in same folder -->
  <link rel="stylesheet" href="../css/slider2.css"> <!-- Local CSS in same folder -->
  <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
  <style>
    /* Optional fallback style if JS fails */
    .slide-bg-image {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      width: 100%;
    }
  </style>
</head>
<body>

<!-- Start of Hero Slider -->
<section class="hero-slider hero-style">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      
      <?php
        // Define slide data (local images are in same folder as this index.php)
        $slides = [
          [
            "background" => "background.jpeg",  // Local image
            "title" => "METICULIS",
            "text" => "Deligent minds driving sustainable growth"
          ],
          [
            "background" => "slide2.jpg", // Another local image
            "title" => "METICULIS",
            "text" => "Deligent minds driving sustainable growth"
          ],
          [
            "background" => "slide2.jpg", // Another local image
            "title" => "METICULIS",
            "text" => "Deligent minds driving sustainable growth"
          ]
        ];

        foreach ($slides as $slide) {
      ?>
      <div class="swiper-slide">
        <div class="slide-inner slide-bg-image" data-background="<?php echo $slide['background']; ?>">
          <div class="container">
            <div data-swiper-parallax="300" class="slide-title">
              <h2><?php echo $slide['title']; ?></h2>
            </div>
            <div data-swiper-parallax="400" class="slide-text">
              <p><?php echo $slide['text']; ?></p>
            </div>
            <div class="clearfix"></div>
            <div data-swiper-parallax="500" class="slide-btns">
              <a href="#" class="theme-btn-s2">Contact now</a>
              <a href="#" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i> Get Info</a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
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

<!-- section 2 -->
    <div class="header">
        <h1>WHY METICULIS</h1>
    </div>
    
    <div class="container">
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-number">1981</div>
                <div class="stat-label">Year founded</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">2,000+</div>
                <div class="stat-label">Number of employees</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">20+</div>
                <div class="stat-label">years of experience</div>
            </div>
        </div>
    </div>

<!-- About US -->
    <section class="story-section">
        <div class="story-content">
            <h1 class="story-heading">OUR<br>STORY</h1>
            <p class="story-text">
                With over 20 years of experience in software development
                across diverse industries, we have experience building
                high-performing teams that deliver quality software at
                speed. We carry that same mentality into Meticulis, we are
                passionate about hiring the right people—those whose
                values and attitudes align with ours and drive the same
                success to our clients.
            </p>
        </div>
        <div class="story-image">
            <img src="background.jpeg" alt="Team collaboration in office space">
        </div>
    </section>

<!-- slider -->
  <!-- Content Source: https://www.farmflavor.com/at-home/cooking/10-fun-facts-about-apples/  -->
  <!-- <div class="slider__wrapper">
  
    <div class="slider">
      <div class="slider__content">
        <div class="slider__text">
          <span>1</span>
          <h3>The Producers</h3>
          <p>The top apple producers around the world are China, United States, Turkey, Poland and Italy.</p>
        </div>
        <figure class="slider__image">

          <img src="https://images.unsplash.com/photo-1458011170811-0c83ce240f99?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8b4e45d40741267302ef75900c03b756&auto=format&fit=crop&w=800&q=90">

        </figure>

      </div>
      <div class="slider__content">
        <div class="slider__text">
          <span>2</span>
          <h3>The Size</h3>
          <p>Apple varieties range in size from a little larger than a cherry to as large as a grapefruit.</p>
        </div>
        <figure class="slider__image">
          <img src="https://images.unsplash.com/photo-1506277548624-5d9498cde122?ixlib=rb-0.3.5&s=9a53092137398e7219bbfc3acb936073&auto=format&fit=crop&w=800&q=90">

        </figure>

      </div>
      <div class="slider__content">
        <div class="slider__text">
          <span>3</span>
          <h3>The Time</h3>
          <p>Apple trees take four to five years to produce their first fruit.</p>
        </div>
        <figure class="slider__image">

          <img src="https://images.unsplash.com/photo-1503327655231-9a047d4772b6?ixlib=rb-0.3.5&s=4164f11f73a7f46defa0da9db7e76443&auto=format&fit=crop&w=800&q=90">

        </figure>

      </div>
      <div class="slider__content">
        <div class="slider__text">
          <span>4</span>
          <h3>The advantages</h3>
          <p>Apples contain no fat, sodium or cholesterol and are a good source of fiber.</p>
        </div>
        <figure class="slider__image">

          <img src="https://images.unsplash.com/photo-1513677785800-9df79ae4b10b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3bc74c728882a8c3d2ee704fc06e55f3&auto=format&fit=crop&w=800&q=90">

        </figure>

      </div>
      <div class="slider__content">
        <div class="slider__text">
          <span>5</span>
          <h3>The Surprise</h3>
          <p>Apples ripen six to 10 times faster at room temperature than if they are refrigerated.</p>
        </div>
        <figure class="slider__image">

          <img src="https://images.unsplash.com/photo-1506808541308-577f3be75bb7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5c86cf46bfb1e521d127021cf52d6187&auto=format&fit=crop&w=800&q=90">

        </figure>

      </div>
    </div>

  </div>

  <script>
    $('.slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true
    });
  </script> -->





</body>
</html>

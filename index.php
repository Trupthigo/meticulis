<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>METICULIS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="../css/index.css"> <!-- Local CSS in same folder -->
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
            "background" => "pen.jpg",  // Local image
            "title" => "METICULIS",
            "text" => "Deligent minds driving sustainable growth"
          ],
          [
            "background" => "pro.jpg", // Another local image
            "title" => "METICULIS",
            "text" => "Deligent minds driving sustainable growth"
          ],
          [
            "background" => "laptop.jpg", // Another local image
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
              <a href="contact.php" class="theme-btn-s2">Contact now</a>
              <a href="services.php" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i> Get Info</a>
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

<?php include 'aboutus.php'; ?>
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


<?php include 'slider.php'; ?>
<?php include 'includes/footer.php'; ?>


</body>
</html>

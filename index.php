<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Swiper Slider - PHP Version</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="<?php echo '../css/index.css'; ?>">
  <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>

<!-- start of hero -->
<section class="hero-slider hero-style">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      
      <?php
        // Define an array of slides
        $slides = [
          [
            "background" => "https://images.unsplash.com/photo-1578934191836-ff5f608c2228?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80",
            "title" => "GUITAR CLASSES<br>FOR KIDS",
            "text" => "Want to see your kid become more expressive?"
          ],
          [
            "background" => "https://images.unsplash.com/photo-1579003087287-997fd4d18771?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80",
            "title" => "GUITAR CLASSES<br>FOR KIDS",
            "text" => "Want to see your kid become more expressive?"
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
              <a href="#" class="theme-btn-s2">Register now</a>
              <a href="#" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i> Get Info</a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

    <!-- swiper controls -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<!-- scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo '../javascript/contact.js'; ?>"></script>

</body>
</html>

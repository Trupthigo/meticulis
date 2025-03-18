<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apple Fun Facts Slider</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: rgb(19, 19, 19);
    }

    /* Enhanced Slider Styles */
    .slider__wrapper {
      max-width: 1300px;
      width: 100%;
      margin: 30px auto;
      position: relative;
      overflow: hidden;
      padding: 30px 0;
    }

    .slider {
      display: flex;
      transition: transform 0.7s cubic-bezier(0.25, 0.1, 0.25, 1);
      padding: 0 60px;
      box-sizing: border-box;
    }

    .slider__content {
      flex: 0 0 calc(100% - 40px);
      max-width: 1000px;
      margin-right: 20px;
      background: #323131;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      padding: 20px;
      min-height: 360px;
      color: #fff;
      transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
      transform-origin: center;
      position: relative;
      cursor: pointer;
      opacity: 0.7;
      overflow: hidden;
    }

    .slider__content:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, transparent, #ffd700, transparent);
      transform: scaleX(0);
      transition: transform 0.6s ease-out;
    }

    .slider__content:hover {
      transform: translateY(-7px) scale(1.02);
      box-shadow: 0 15px 30px rgba(0,0,0,0.3);
      opacity: 0.9;
    }
    
    .slider__content:hover:before {
      transform: scaleX(1);
    }
    
    .slider__content.active {
      transform: scale(1.05);
      z-index: 10;
      background: #3a3939;
      box-shadow: 0 15px 35px rgba(0,0,0,0.4), 
                  0 0 25px rgba(255, 215, 0, 0.3);
      opacity: 1;
    }
    
    .slider__content.active:before {
      transform: scaleX(1);
      background: linear-gradient(90deg, transparent, #ffd700 70%, transparent);
    }

    .slider__text span {
      font-size: 28px;
      font-weight: bold;
      color: #ffd700;
      display: block;
      margin-bottom: 5px;
      transform: translateY(5px);
      opacity: 0;
      animation: fadeInDown 0.5s 0.2s forwards;
    }

    .slider__text h3 {
      margin: 10px 0 15px;
      font-size: 20px;
      color: #fff;
      transform: translateY(10px);
      opacity: 0;
      animation: fadeInDown 0.5s 0.4s forwards;
    }

    .slider__text p {
      font-size: 15px;
      line-height: 1.5;
      transform: translateY(15px);
      opacity: 0;
      animation: fadeInDown 0.5s 0.6s forwards;
    }

    .slider__image {
      margin: 0;
      overflow: hidden;
      border-radius: 10px;
      margin-top: 15px;
      transform: translateY(20px);
      opacity: 0;
      animation: fadeInUp 0.6s 0.7s forwards;
      position: relative;
    }
    
    .slider__image:after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(255,215,0,0.2) 0%, transparent 100%);
      opacity: 0;
      transition: opacity 0.5s ease;
    }
    
    .slider__content:hover .slider__image:after,
    .slider__content.active .slider__image:after {
      opacity: 1;
    }
    
    .slider__image img {
      width: 100%;
      border-radius: 10px;
      transition: transform 0.7s cubic-bezier(0.34, 1.56, 0.64, 1);
      height: 160px;
      object-fit: cover;
      filter: brightness(0.9);
    }
    
    .slider__content:hover .slider__image img {
      transform: scale(1.1) rotate(1deg);
      filter: brightness(1.1);
    }
    
    .slider__content.active .slider__image img {
      transform: scale(1.15);
      filter: brightness(1.2);
    }

    /* Arrow Buttons */
    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(255, 215, 0, 0.15);
      border: none;
      color: #fff;
      font-size: 24px;
      height: 45px;
      width: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 10;
      border-radius: 50%;
      transition: all 0.4s ease;
      opacity: 0.7;
    }

    .arrow:hover {
      background-color: rgba(255, 215, 0, 0.4);
      transform: translateY(-50%) scale(1.1);
      opacity: 1;
    }

    .arrow:active {
      transform: translateY(-50%) scale(0.95);
    }

    .arrow-left {
      left: 10px;
    }

    .arrow-right {
      right: 10px;
    }
    
    /* Indicators */
    .slider__indicators {
      display: flex;
      justify-content: center;
      margin-top: 60px;
      gap: 8px;
    }
    
    .slider__indicator {
      width: 8px;
      height: 8px;
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
      position: relative;
      overflow: hidden;
    }
    
    .slider__indicator:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(255, 215, 0, 0.5);
      transform: scale(0);
      border-radius: 50%;
      transition: transform 0.3s ease;
    }
    
    .slider__indicator:hover:before {
      transform: scale(1);
    }
    
    .slider__indicator.active {
      background-color: #ffd700;
      width: 22px;
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(255, 215, 0, 0.5);
    }

    /* Animations */
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-15px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(15px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    /* Reset animations when slide becomes active */
    .slider__content.active .slider__text span,
    .slider__content.active .slider__text h3,
    .slider__content.active .slider__text p,
    .slider__content.active .slider__image {
      animation: none;
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Add animation delay when slide becomes active */
    .slider__content.active .slider__text span {
      animation: pulse 2s infinite alternate;
    }
    
    @keyframes pulse {
      0% {
        opacity: 0.9;
      }
      100% {
        opacity: 1;
        transform: translateY(-2px);
      }
    }

    /* Responsive Styles */
    /* Mobile (320px minimum) */
    @media (min-width: 320px) and (max-width: 575px) {
      .slider__wrapper {
        padding: 20px 0;
      }
      
      .slider {
        padding: 0 40px;
      }
      
      .slider__content {
        flex: 0 0 calc(100% - 20px);
        min-height: 320px;
        padding: 15px;
        margin-right: 10px;
      }
      
      .slider__text span {
        font-size: 24px;
      }
      
      .slider__text h3 {
        font-size: 18px;
        margin: 8px 0 10px;
      }
      
      .slider__text p {
        font-size: 14px;
      }
      
      .slider__image img {
        height: 130px;
      }
      
      .arrow {
        font-size: 20px;
        height: 35px;
        width: 35px;
      }
      
      .slider__indicator {
        width: 6px;
        height: 6px;
      }
      
      .slider__indicator.active {
        width: 15px;
      }
      
      .slider__content.active {
        transform: scale(1.03);
      }
    }
    
    /* Tablet */
    @media (min-width: 576px) and (max-width: 991px) {
      .slider__wrapper {
        max-width: 800px;
      }
      
      .slider__content {
        flex: 0 0 calc(50% - 30px);
        max-width: 250px;
      }
    }
    
    /* Desktop */
    @media (min-width: 992px) {
      .slider__content {
        flex: 0 0 calc(33.333% - 40px);
        max-width: 300px;
      }
      
      .slider__content.active {
        transform: scale(1.08);
      }
    }
    
    /* Large Desktop */
    @media (min-width: 1200px) {
      .slider__content {
        flex: 0 0 calc(25% - 40px);
        max-width: 300px;
      }
    }
  </style>
</head>
<body>

<div class="slider__wrapper">
  <button class="arrow arrow-left" id="prevBtn">&#8249;</button>
  <button class="arrow arrow-right" id="nextBtn">&#8250;</button>
  
  <div class="slider" id="slider">
    <?php
    $apple_facts = [
      [
        "number" => 1,
        "title" => "Excellence",
        "text" => "Strive for excellence in everything we do, setting high standards and consistently delivering superior results..",
        "image" => "excellence.webp"
      ],
      [
        "number" => 2,
        "title" => "Innovation",
        "text" => "Embrace change and continuously seek new and better ways to solve problems and create value.",
        "image" => "core.jpg"
      ],
      [
        "number" => 3,
        "title" => "Intigrity",
        "text" => "Conduct business with honesty, transparency, and ethical practices that foster trust and long-term relationships.",
        "image" => "intigrity.webp"
      ],
      [
        "number" => 4,
        "title" => "Client Centricity",
        "text" => "We put our clients at the center of everything we do, focusing on their needs and exceeding their expectations.",
        "image" => "globe.jpg"
      ],
      [
        "number" => 5,
        "title" => "Sustainable Growth",
        "text" => "We pursue growth that benefits all stakeholders while contributing positively to society and the environment.",
        "image" => "sustainable.webp"
      ],
    ];

    foreach ($apple_facts as $index => $fact) {
      echo '
      <div class="slider__content '.($index === 0 ? 'active' : '').'" data-index="'.$index.'">
        <div class="slider__text">
          <span>' . $fact["number"] . '</span>
          <h3>' . $fact["title"] . '</h3>
          <p>' . $fact["text"] . '</p>
        </div>
        <figure class="slider__image">
          <img src="' . $fact["image"] . '" alt="'.$fact["title"].'">
        </figure>
      </div>';
    }
    ?>
  </div>
  
  <div class="slider__indicators" id="sliderIndicators">
    <?php
    for ($i = 0; $i < count($apple_facts); $i++) {
      echo '<div class="slider__indicator '.($i === 0 ? 'active' : '').'" data-index="'.$i.'"></div>';
    }
    ?>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('slider');
    const slides = document.querySelectorAll('.slider__content');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const indicators = document.querySelectorAll('.slider__indicator');
    
    let currentIndex = 0;
    let autoScrollInterval;
    let slideWidth;
    
    // Set up slide width calculation based on viewport
    function calculateSlideWidth() {
      const firstSlide = slides[0];
      // Include the margin-right in the calculation
      slideWidth = firstSlide.offsetWidth + parseInt(window.getComputedStyle(firstSlide).marginRight);
      return slideWidth;
    }
    
    // Initialize
    calculateSlideWidth();
    updateSlider();
    startAutoScroll();
    
    // Recalculate on window resize
    window.addEventListener('resize', function() {
      calculateSlideWidth();
      updateSlider(false); // Update without animation on resize
    });
    
    // Set up event listeners
    prevBtn.addEventListener('click', () => {
      goToSlide(currentIndex - 1);
      resetAutoScroll();
    });
    
    nextBtn.addEventListener('click', () => {
      goToSlide(currentIndex + 1);
      resetAutoScroll();
    });
    
    // Add click events to indicators
    indicators.forEach(indicator => {
      indicator.addEventListener('click', () => {
        const index = parseInt(indicator.getAttribute('data-index'));
        goToSlide(index);
        resetAutoScroll();
      });
    });
    
    // Add click events to slides
    slides.forEach(slide => {
      slide.addEventListener('click', () => {
        const index = parseInt(slide.getAttribute('data-index'));
        goToSlide(index);
        resetAutoScroll();
      });
    });
    
    // Pause auto-scroll on hover
    slider.addEventListener('mouseenter', () => {
      clearInterval(autoScrollInterval);
    });
    
    slider.addEventListener('mouseleave', () => {
      startAutoScroll();
    });
    
    // Touch events for mobile swipe
    let touchStartX = 0;
    let touchEndX = 0;
    
    slider.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    });
    
    slider.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    });
    
    function handleSwipe() {
      const swipeThreshold = 50; // Minimum distance for swipe detection
      
      if (touchEndX < touchStartX - swipeThreshold) {
        // Swipe left - go to next slide
        goToSlide(currentIndex + 1);
        resetAutoScroll();
      }
      
      if (touchEndX > touchStartX + swipeThreshold) {
        // Swipe right - go to previous slide
        goToSlide(currentIndex - 1);
        resetAutoScroll();
      }
    }
    
    // Functions
    function goToSlide(index) {
      // Handle wrapping
      if (index < 0) {
        index = slides.length - 1;
      } else if (index >= slides.length) {
        index = 0;
      }
      
      currentIndex = index;
      updateSlider();
      
      // Reset and restart animations on the active slide
      slides.forEach((slide) => {
        // Force DOM reflow to restart animations
        void slide.offsetWidth;
      });
    }
    
    function updateSlider(animate = true) {
      // Calculate visible slides based on screen width
      const viewportWidth = window.innerWidth;
      let visibleSlidesCount = 1;
      
      if (viewportWidth >= 1200) {
        visibleSlidesCount = 4; // Large desktop
      } else if (viewportWidth >= 992) {
        visibleSlidesCount = 3; // Desktop
      } else if (viewportWidth >= 576) {
        visibleSlidesCount = 2; // Tablet
      }
      
      // Adjust for smaller screens to center the active slide
      let translateX = -currentIndex * slideWidth;
      
      // Center the active slide for large screens
      if (visibleSlidesCount > 1) {
        const centerOffset = (visibleSlidesCount - 1) * slideWidth / 2;
        translateX = Math.max(-((slides.length - visibleSlidesCount) * slideWidth), Math.min(0, translateX + centerOffset));
      }
      
      // Apply transition
      if (!animate) {
        slider.style.transition = 'none';
      } else {
        slider.style.transition = 'transform 0.7s cubic-bezier(0.25, 0.1, 0.25, 1)';
      }
      
      slider.style.transform = `translateX(${translateX}px)`;
      
      // Force a reflow to make sure the transition gets applied properly
      if (!animate) {
        slider.offsetHeight; 
        slider.style.transition = 'transform 0.7s cubic-bezier(0.25, 0.1, 0.25, 1)';
      }
      
      // Update active classes
      slides.forEach((slide, i) => {
        if (i === currentIndex) {
          slide.classList.add('active');
        } else {
          slide.classList.remove('active');
        }
      });
      
      // Update indicators
      indicators.forEach((indicator, i) => {
        if (i === currentIndex) {
          indicator.classList.add('active');
        } else {
          indicator.classList.remove('active');
        }
      });
    }
    
    function startAutoScroll() {
      autoScrollInterval = setInterval(() => {
        goToSlide(currentIndex + 1);
      }, 5000);
    }
    
    function resetAutoScroll() {
      clearInterval(autoScrollInterval);
      startAutoScroll();
    }
  });
</script>

</body>
</html>
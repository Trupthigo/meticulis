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
      transition: transform 0.5s ease;
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
      transition: all 0.4s ease;
      transform-origin: center;
      position: relative;
      cursor: pointer;
    }

    .slider__content:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
    
    .slider__content.active {
      transform: scale(1.05);
      z-index: 10;
      background: #3a3939;
      box-shadow: 0 10px 25px rgba(0,0,0,0.4), 
                  0 0 15px rgba(255, 215, 0, 0.2);
    }
    
    .slider__content:not(.active) {
      opacity: 0.7;
    }

    .slider__text span {
      font-size: 28px;
      font-weight: bold;
      color: #ffd700;
      display: block;
      margin-bottom: 5px;
    }

    .slider__text h3 {
      margin: 10px 0 15px;
      font-size: 20px;
      color: #fff;
    }

    .slider__text p {
      font-size: 15px;
      line-height: 1.5;
    }

    .slider__image {
      margin: 0;
      overflow: hidden;
      border-radius: 10px;
      margin-top: 15px;
    }
    
    .slider__image img {
      width: 100%;
      border-radius: 10px;
      transition: transform 0.5s ease;
      height: 160px;
      object-fit: cover;
    }
    
    .slider__content:hover .slider__image img,
    .slider__content.active .slider__image img {
      transform: scale(1.1);
    }

    /* Arrow Buttons */
    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(255, 215, 0, 0.2);
      border: none;
      color: #fff;
      font-size: 24px;
      height: 40px;
      width: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 10;
      border-radius: 50%;
      transition: all 0.3s ease;
    }

    .arrow:hover {
      background-color: rgba(255, 215, 0, 0.4);
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
      background-color: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .slider__indicator.active {
      background-color: #ffd700;
      width: 20px;
      border-radius: 10px;
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
        "title" => "Our Mission",
        "text" => "Empower businesses with expert consulting and contracting solutions, driving efficiency, innovation, and sustainable growth.",
        "image" => "mission.jpg"
      ],
      [
        "number" => 2,
        "title" => "Core Values",
        "text" => "Excellence, Innovation, Integrity, Client-Centricity, and Sustainable Growth.",
        "image" => "core.jpg"
      ],
      [
        "number" => 3,
        "title" => "Team Expertise",
        "text" => "Seasoned IT professionals with extensive industry knowledge and certifications.",
        "image" => "Team.jpg"
      ],
      [
        "number" => 4,
        "title" => "Global Presence",
        "text" => "We have access to a strong IT and business talent pool based in India, with skilled professionals in strategy, technology, and operations.",
        "image" => "globe.jpg"
      ],
      [
        "number" => 5,
        "title" => "HQ Office",
        "text" => "Our HQ operates from the UK to ensure seamless collaboration across time zones, enabling round-the-clock productivity for international clients.",
        "image" => "hq.jpg"
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
        slider.style.transition = 'transform 0.5s ease';
      }
      
      slider.style.transform = `translateX(${translateX}px)`;
      
      // Force a reflow to make sure the transition gets applied properly
      if (!animate) {
        slider.offsetHeight; 
        slider.style.transition = 'transform 0.5s ease';
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
      }, 4000);
    }
    
    function resetAutoScroll() {
      clearInterval(autoScrollInterval);
      startAutoScroll();
    }
  });
</script>

</body>
</html>
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
      max-width: 1200px;
      margin: 50px auto;
      position: relative;
      overflow: hidden;
      padding: 30px 0;
    }

    .slider {
      display: flex;
      transition: transform 0.5s ease;
      margin-left: 60px;
      margin-right: 60px;
    }

    .slider__content {
      flex: 0 0 300px;
      margin-right: 20px;
      background: #323131;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      padding: 20px;
      min-height: 400px;
      color: #fff;
      transition: all 0.4s ease;
      transform-origin: center;
      position: relative;
      cursor: pointer;
    }

    .slider__content:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
    
    .slider__content.active {
      transform: scale(1.08);
      z-index: 10;
      background: #3a3939;
      box-shadow: 0 15px 30px rgba(0,0,0,0.4), 
                  0 0 15px rgba(255, 215, 0, 0.2);
    }
    
    .slider__content:not(.active) {
      opacity: 0.7;
    }

    .slider__text span {
      font-size: 32px;
      font-weight: bold;
      color: #ffd700;
      display: block;
      margin-bottom: 5px;
    }

    .slider__text h3 {
      margin: 10px 0 15px;
      font-size: 22px;
      color: #fff;
    }

    .slider__text p {
      font-size: 16px;
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
      height: 180px;
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
      font-size: 30px;
      height: 50px;
      width: 50px;
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
      transform: translateY(-50%) scale(1.1);
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
      margin-top: 20px;
      gap: 8px;
    }
    
    .slider__indicator {
      width: 10px;
      height: 10px;
      background-color: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .slider__indicator.active {
      background-color: #ffd700;
      width: 25px;
      border-radius: 10px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .slider__content {
        flex: 0 0 260px;
        min-height: 380px;
      }
      
      .slider__content.active {
        transform: scale(1.05);
      }
    }
    
    @media (max-width: 500px) {
      .arrow {
        font-size: 24px;
        height: 40px;
        width: 40px;
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
        "image" => "https://images.unsplash.com/photo-1458011170811-0c83ce240f99?ixlib=rb-0.3.5&auto=format&fit=crop&w=800&q=90"
      ],
      [
        "number" => 2,
        "title" => "Core Values",
        "text" => "Excellence, Innovation, Integrity, Client-Centricity, and Sustainable Growth.",
        "image" => "https://images.unsplash.com/photo-1506277548624-5d9498cde122?ixlib=rb-0.3.5&auto=format&fit=crop&w=800&q=90"
      ],
      [
        "number" => 3,
        "title" => "Team Expertise",
        "text" => "Seasoned IT professionals with extensive industry knowledge and certifications.",
        "image" => "https://images.unsplash.com/photo-1503327655231-9a047d4772b6?ixlib=rb-0.3.5&auto=format&fit=crop&w=800&q=90"
      ],
      [
        "number" => 4,
        "title" => "Global Presence",
        "text" => "We have access to a strong IT and business talent pool based in India, with skilled professionals in strategy, technology, and operations.",
        "image" => "https://images.unsplash.com/photo-1513677785800-9df79ae4b10b?ixlib=rb-0.3.5&auto=format&fit=crop&w=800&q=90"
      ],
      [
        "number" => 5,
        "title" => "HQ Office",
        "text" => "Our HQ operates from the UK to ensure seamless collaboration across time zones, enabling round-the-clock productivity for international clients.",
        "image" => "https://images.unsplash.com/photo-1506808541308-577f3be75bb7?ixlib=rb-0.3.5&auto=format&fit=crop&w=800&q=90"
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
    const slideWidth = slides[0].offsetWidth + 20; // Width + margin
    
    // Initialize
    updateSlider();
    startAutoScroll();
    
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
    
    function updateSlider() {
      // Update transform
      slider.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
      
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
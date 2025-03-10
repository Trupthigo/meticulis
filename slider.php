<!-- index.php -->
<?php
// Optional: Add any PHP logic here
?>
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
      background-color:rgb(19, 19, 19);
    }

    .slider__wrapper {
      max-width: 1200px;
      margin: 50px auto;
      position: relative;
      overflow: hidden;
    }

    .slider {
      display: flex;
      transition: all 0.3s ease;
      overflow-x: auto;
      scroll-behavior: smooth;
      scroll-snap-type: x mandatory;
    }

    .slider__content {
      flex: 0 0 300px;
      margin-right: 20px;
      scroll-snap-align: start;
      background: #323131;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      padding: 16px;
      min-height: 400px;
      color: #fff;
    }

    .slider__text span {
      font-size: 24px;
      font-weight: bold;
      color: #ffd700;
    }

    .slider__text h3 {
      margin: 10px 0 5px;
      font-size: 20px;
    }

    .slider__text p {
      font-size: 16px;
    }

    .slider__image img {
      width: 100%;
      border-radius: 10px;
      margin-top: 10px;
    }

    /* Arrow Buttons */
    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.6);
      border: none;
      color: #fff;
      font-size: 30px;
      padding: 10px 15px;
      cursor: pointer;
      z-index: 10;
      border-radius: 50%;
    }

    .arrow:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .arrow-left {
      left: 10px;
    }

    .arrow-right {
      right: 10px;
    }

    /* Hide arrows on small screens if needed */
    @media (max-width: 500px) {
      .arrow {
        font-size: 24px;
        padding: 6px 10px;
      }
    }
  </style>
</head>
<body>

<div class="slider__wrapper">
  <button class="arrow arrow-left" onclick="scrollSlider(-1)">&#8249;</button>
  <button class="arrow arrow-right" onclick="scrollSlider(1)">&#8250;</button>
  
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

    foreach ($apple_facts as $fact) {
      echo '
      <div class="slider__content">
        <div class="slider__text">
          <span>' . $fact["number"] . '</span>
          <h3>' . $fact["title"] . '</h3>
          <p>' . $fact["text"] . '</p>
        </div>
        <figure class="slider__image">
          <img src="' . $fact["image"] . '" alt="Apple Fact Image">
        </figure>
      </div>';
    }
    ?>
  </div>
</div>

<script>
  const slider = document.getElementById('slider');

  function scrollSlider(direction) {
    const cardWidth = document.querySelector('.slider__content').offsetWidth + 20; // card width + gap
    slider.scrollBy({
      left: direction * cardWidth,
      behavior: 'smooth'
    });
  }
</script>

</body>
</html>

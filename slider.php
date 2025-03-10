<!-- index.php -->
<?php
// You can use this section to include a header or any dynamic logic
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apple Fun Facts Slider</title>
  <style>
    .slider__wrapper {
      max-width: 1000px;
      margin: auto;
      overflow: hidden;
    }
    .slider {
      display: flex;
      gap: 20px;
      flex-wrap: nowrap;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
    }
    .slider__content {
      flex: 0 0 300px;
      scroll-snap-align: start;
      background:rgb(50, 49, 49);
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      padding: 16px;
      min-height: 400px;
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
  </style>
</head>
<body>

<div class="slider__wrapper">
  <div class="slider">
    <?php
    // Apple facts array
    $apple_facts = [
      [
        "number" => 1,
        "title" => "Our Mission",
        "text" => "Empower businesses with expert 
                    consulting and contracting solutions, 
                    driving efficiency, innovation, and 
                    sustainable growth.",
        "image" => "https://images.unsplash.com/photo-1458011170811-0c83ce240f99?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8b4e45d40741267302ef75900c03b756&auto=format&fit=crop&w=800&q=90"
      ],
      [
        "number" => 2,
        "title" => " Core Values",
        "text" => "Excellence, Innovation, 
                    Integrity, Client-Centricity, 
                    and Sustainable Growth.",
        "image" => "https://images.unsplash.com/photo-1506277548624-5d9498cde122?ixlib=rb-0.3.5&s=9a53092137398e7219bbfc3acb936073&auto=format&fit=crop&w=800&q=90"
      ],
      [
        "number" => 3,
        "title" => "Team Expertise",
        "text" => " Seasoned IT professionals 
                    with extensive industry 
                    knowledge and certifications.",
        "image" => "https://images.unsplash.com/photo-1503327655231-9a047d4772b6?ixlib=rb-0.3.5&s=4164f11f73a7f46defa0da9db7e76443&auto=format&fit=crop&w=800&q=90"
      ],
      [
        "number" => 4,
        "title" => "Global Presence",
        "text" => " We have access to a strong IT and 
                    business talent pool based in India, 
                    with skilled professionals in strategy, 
                    technology, and operations.",
        "image" => "https://images.unsplash.com/photo-1513677785800-9df79ae4b10b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=3bc74c728882a8c3d2ee704fc06e55f3&auto=format&fit=crop&w=800&q=90"
      ],
      [
        "number" => 5,
        "title" => " HQ Office",
        "text" => " Our HQ operates from the UK to 
                    ensure seamless collaboration across 
                    time zones, enabling round-the-clock 
                    productivity for international clients.",
        "image" => "https://images.unsplash.com/photo-1506808541308-577f3be75bb7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5c86cf46bfb1e521d127021cf52d6187&auto=format&fit=crop&w=800&q=90"
      ],
    ];

    // Loop through each fact and render HTML
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
    $('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    });
</script>

</body>
</html>

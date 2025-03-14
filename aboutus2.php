
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meticulis</title>

<link rel="stylesheet" href="../css/aboutus2.css">

</head>
<body>
<?php include 'first.php'; ?>
  <!-- <section class="hero">
    <div class="hero-bg-elements">
      <div class="hero-bg-circle circle-1"></div>
      <div class="hero-bg-circle circle-2"></div>
      <div class="hex-grid"></div>
    </div>
    
    <div class="hero-left">
      <h1 class="hero-title slide-in-left">
        About
        <span class="highlight">Meticulis</span>
      </h1>
      <div class="hero-description slide-in-left">
      With over 20 years of experience in software development across diverse industries, we have consistently built high-performing teams that deliver quality software with speed and efficiency.
      Our expertise spans various domains, allowing us to adapt to evolving technologies while maintaining a strong focus on excellence and innovation.
      At Meticulis, we bring that same mindset to hiring, ensuring we select the right people—those whose values, skills, and attitudes align with ours. By fostering a culture of collaboration and integrity,
      we empower our clients with expert teams that drive success and deliver lasting impact.
      </div>
    </div>
    
    <div class="hero-right">
    <img src="background.jpeg" alt="Meticulis team" class="hero-image-placeholder scale-in">
    </div>
  </section> -->
  
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
        <img src="mission.jpg" alt="Meticulis mission" class="diagonal-image slide-in-right">
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

<?php include 'slider.php'; ?>
  
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
        <img src="people.jpg" alt="Meticulis team" class="expertise-image rotate-in">
      </div>
    </div>
  </section>
  
  <section class="global-section">
    <div class="global-dots"></div>
    <div class="container">
    <h2 class="section-title slide-in-right">Global <span class="highlight">Presence</span></h2>
      <!-- <div class="global-content"> -->
        <!-- <div class="global-map flip-in">
            <img src="map.jpeg" alt="Global Map" class="global-map-image">
            <div class="location-marker uk-marker"></div>
            <div class="location-marker india-marker"></div>
        </div> -->
        <div class="location-cards">
            
            <div class="location-card slide-in-right" data-delay="0.2">
                <h3 class="location-title">UK Headquarters</h3>
                <img src="hq.webp" alt="Meticulis mission" class="location-image">
                <p>Our HQ operates from the UK, ensuring seamless collaboration across time zones and enabling round-the-clock productivity for our international clients. This strategic location allows us to provide efficient support, maintain clear communication, and deliver consistent results across global markets.</p>
            </div>
            <div class="location-card slide-in-right" data-delay="0.4">
                <h3 class="location-title">India Talent Pool</h3>
                <img src="talentpool.webp" alt="Meticulis india" class="location-image">
                <p>We have access to a strong IT and business talent pool based in India, with skilled professionals in strategy, technology, and operations. This diverse expertise enables us to offer innovative solutions, drive efficiency, and support businesses in achieving their goals with agility and precision.</p>
            </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Create floating dots
    const dotsContainer = document.getElementById('floatingDots');
    const dotCount = 50;
    
    for (let i = 0; i < dotCount; i++) {
      const dot = document.createElement('div');
      dot.classList.add('dot');
      
      // Random positioning
      const x = Math.random() * 100;
      const y = Math.random() * 100;
      dot.style.left = `${x}%`;
      dot.style.top = `${y}%`;
      
      // Random size
      const size = Math.random() * 3 + 2;
      dot.style.width = `${size}px`;
      dot.style.height = `${size}px`;
      
      // Random opacity
      dot.style.opacity = Math.random() * 0.3;
      
      // Animation
      const duration = 5 + Math.random() * 15;
      const xMove = Math.random() * 20 - 10;
      const yMove = Math.random() * 20 - 10;
      
      dot.style.animation = `floating ${duration}s infinite alternate ease-in-out`;
      dot.style.animationDelay = `${Math.random() * 5}s`;
      
      // Add keyframe animation dynamically
      const styleSheet = document.styleSheets[0];
      const keyframes = `@keyframes floating { 
        0% { transform: translate(0, 0); } 
        100% { transform: translate(${xMove}px, ${yMove}px); }
      }`;
      
      styleSheet.insertRule(keyframes, styleSheet.cssRules.length);
      
      dotsContainer.appendChild(dot);
    }
    
    // Create expertise background lines
    const expertiseBg = document.getElementById('expertiseBg');
    const lineCount = 12;
    
    for (let i = 0; i < lineCount; i++) {
      const line = document.createElement('div');
      line.classList.add('expertise-bg-line');
      
      // Positioning
      const yPos = (i / lineCount) * 100;
      line.style.top = `${yPos}%`;
      
      // Animation
      const direction = i % 2 === 0 ? 1 : -1;
      const duration = 20 + Math.random() * 10;
      const styleSheet = document.styleSheets[0];
      const keyframes = `@keyframes line-move-${i} { 
        0% { transform: scaleX(1) translateX(0); } 
        50% { transform: scaleX(0.8) translateX(${direction * 10}px); } 
        100% { transform: scaleX(1) translateX(0); }
      }`;
      
      styleSheet.insertRule(keyframes, styleSheet.cssRules.length);
      line.style.animation = `line-move-${i} ${duration}s infinite alternate ease-in-out`;
      
      expertiseBg.appendChild(line);
    }
    
    // Intersection Observer for animations
    const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in, .rotate-in, .flip-in');
    
    const observerOptions = {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const delay = el.dataset.delay || 0;
          
          setTimeout(() => {
            el.classList.add('active');
          }, delay * 1000);
          
          observer.unobserve(el);
        }
      });
    }, observerOptions);
    
    animatedElements.forEach(el => {
      observer.observe(el);
    });
    
    // Immediately activate hero elements
    setTimeout(() => {
      document.querySelectorAll('.hero .slide-in-left, .hero .scale-in').forEach(el => {
        el.classList.add('active');
      });
    }, 500);
    
    // 3D tilt effect for cards
    const cards = document.querySelectorAll('.value-card, .location-card');
    
    cards.forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 20 * -1;
        const rotateY = (x - centerX) / 20;
        
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
      });
      
      card.addEventListener('mouseleave', () => {
        card.style.transform = '';
      });
    });
    
    // Parallax effect on mouse movement
    document.addEventListener('mousemove', (e) => {
      const mouseX = e.clientX / window.innerWidth;
      const mouseY = e.clientY / window.innerHeight;
      
      // Move hero background elements
      const heroCircles = document.querySelectorAll('.hero-bg-circle');
      heroCircles.forEach((circle, index) => {
        const depth = (index + 1) * 30;
        const moveX = (mouseX - 0.5) * depth;
        const moveY = (mouseY - 0.5) * depth;
        
        circle.style.transform = `translate(${moveX}px, ${moveY}px)`;
      });
      
      // Move hexagon grid background
      const hexGrid = document.querySelector('.hex-grid');
      if (hexGrid) {
        const moveX = (mouseX - 0.5) * 15;
        const moveY = (mouseY - 0.5) * 15;
        
        hexGrid.style.transform = `rotate(45deg) scale(2) translate(${moveX}px, ${moveY}px)`;
      }
      
      // Parallax effect for other elements
      const expertiseImage = document.querySelector('.expertise-image');
      if (expertiseImage && isInViewport(expertiseImage)) {
        const moveX = (mouseX - 0.5) * 20;
        const moveY = (mouseY - 0.5) * 20;
        expertiseImage.style.transform = `translateX(${moveX}px) translateY(${moveY}px)`;
      }
    });
    
    // Helper function to check if element is in viewport
    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  </script>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
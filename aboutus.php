<?php include 'first.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meticulis</title>
  <style>
    :root {
      --dark-bg: #121212;
      --dark-secondary: #1e1e1e;
      --dark-tertiary: #242424;
      --gold: #ffd700;
      --gold-glow: rgba(255, 215, 0, 0.3);
      --gold-dark: #d4af37;
      --text: #e0e0e0;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }
    
    body {
      background-color: var(--dark-bg);
      color: var(--text);
      overflow-x: hidden;
      font-size: 16px;
      line-height: 1.6;
    }
    
    .container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 20px;
      width: 100%;
    }
    
    /* Diagonal Sections */
    .diagonal-section {
      position: relative;
      padding: 100px 0;
      margin-top: 60px;
      overflow: hidden;
    }
    
    .diagonal-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: var(--dark-secondary);
      z-index: -1;
      transform: skewY(-6deg);
      transform-origin: top left;
    }
    
    .diagonal-content {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      align-items: center;
    }
    
    .diagonal-text {
      flex: 1 1 300px;
      max-width: 600px;
    }
    .diagonal-image {
      flex: 1 1 300px;
      height: 400px;
      border-radius: 10px;
      overflow: hidden;
      background: var(--dark-tertiary);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      animation: tilt 5s infinite alternate ease-in-out;
      object-fit: cover;
    }
    
    .section-title {
      font-size: clamp(2rem, 5vw, 3rem);
      font-weight: 700;
      margin-bottom: 30px;
      position: relative;
      overflow: hidden;
      display: inline-block;
    }
    
    .section-title .highlight {
      color: var(--gold);
      position: relative;
      animation: shimmer 3s infinite;
    }
    
    @keyframes shimmer {
      0% { color: var(--gold); }
      50% { color: var(--gold-dark); }
      100% { color: var(--gold); }
    }
    
    .section-title .highlight::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 10px;
      background: var(--gold-glow);
      left: 0;
      bottom: 0;
      transform: translateY(5px);
      z-index: -1;
      opacity: 0.4;
      animation: wave 3s infinite ease-in-out;
    }
    
    @keyframes wave {
      0% { transform: translateY(5px) scaleX(1); }
      50% { transform: translateY(5px) scaleX(1.1); }
      100% { transform: translateY(5px) scaleX(1); }
    }
    
    .section-description {
      font-size: 1.1rem;
      margin-bottom: 30px;
    }
    @keyframes tilt {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(2deg); }
    }
    
    /* .diagonal-image {
      flex: 1;
      min-width: 300px;
      height: 400px;
      border-radius: 10px;
      overflow: hidden;
      background: var(--dark-tertiary);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      animation: tilt 5s infinite alternate ease-in-out;
      object-fit: cover;
    } */
    
    @keyframes tilt {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(2deg); }
    }
    
    /* Values Section */
    .values-section {
      position: relative;
      padding: 100px 0;
      overflow: hidden;
    }
    
    .values-intro {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 60px;
      padding: 0 20px;
    }
    
    /* Expertise Section */
    .expertise-section {
      position: relative;
      padding: 100px 0;
      overflow: hidden;
      background: var(--dark-secondary);
    }
    
    .expertise-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
    }
    
    .expertise-bg-line {
      position: absolute;
      height: 1px;
      background: var(--gold);
      opacity: 0.1;
      width: 100%;
      transform-origin: left;
    }
    
    .expertise-glow {
      position: absolute;
      width: 80%;
      height: 50%;
      top: 25%;
      left: 10%;
      background: radial-gradient(ellipse at center, var(--gold-glow) 0%, transparent 70%);
      opacity: 0.2;
      filter: blur(50px);
      z-index: 0;
      animation: expertise-pulse 12s infinite alternate ease-in-out;
    }
    
    @keyframes expertise-pulse {
      0% { opacity: 0.1; transform: scale(1) translate(0, 0); }
      50% { opacity: 0.3; transform: scale(1.1) translate(2%, -2%); }
      100% { opacity: 0.1; transform: scale(1) translate(0, 0); }
    }
    
    .expertise-content {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 0 20px;
    }
    
    .expertise-title {
      font-size: clamp(2rem, 5vw, 3rem);
      color: var(--text);
      margin-bottom: 40px;
    }
    
    .expertise-title .highlight {
      animation: text-shine 3s infinite linear;
      background: linear-gradient(90deg, var(--gold) 0%, var(--gold-dark) 50%, var(--gold) 100%);
      background-size: 200% auto;
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: inline-block;
    }
    
    @keyframes text-shine {
      0% { background-position: 0% center; }
      100% { background-position: 200% center; }
    }
    
    .expertise-text {
      max-width: 800px;
      margin: 0 auto 40px;
      font-size: 1.1rem;
    }
    
    .expertise-image {
      width: 100%;
      max-width: 600px;
      height: auto;
      aspect-ratio: 2/1;
      background: var(--dark-tertiary);
      border-radius: 10px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      object-fit: cover;
    }
    
    /* Global Presence Section */
    .global-section {
      padding: 100px 0;
      position: relative;
    }
    
    /* Location Cards */
    .location-cards {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
      padding: 20px 0;
    }
    
    .location-card {
      flex: 1;
      min-width: 280px;
      max-width: 450px;
      background: linear-gradient(125deg, var(--dark-secondary) 0%, var(--dark-tertiary) 100%);
      border-radius: 16px;
      padding: 25px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .location-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }
    
    .location-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at top right, var(--gold-glow), transparent 70%);
      opacity: 0.1;
      transition: opacity 0.3s ease;
    }
    
    .location-card:hover::before {
      opacity: 0.2;
    }
    
    .location-title {
      font-size: 1.5rem;
      color: var(--gold);
      margin-bottom: 25px;
      position: relative;
    }
    
    .location-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 60px;
      height: 3px;
      background: var(--gold);
      opacity: 0.7;
      transition: width 0.3s ease;
    }
    
    .location-card:hover .location-title::after {
      width: 100px;
    }
    
    .location-image {
      width: 100%;
      height: auto;
      aspect-ratio: 16/9;
      background: var(--dark-tertiary);
      border-radius: 10px;
      margin-bottom: 20px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      object-fit: cover;
    }
    
    .location-card p {
      font-size: 1rem;
      line-height: 1.6;
      color: var(--text);
    }
    
    /* Animation Classes */
    .fade-in {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .fade-in.active {
      opacity: 1;
      transform: translateY(0);
    }
    
    .slide-in-left {
      opacity: 0;
      transform: translateX(-60px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .slide-in-left.active {
      opacity: 1;
      transform: translateX(0);
    }
    
    .slide-in-right {
      opacity: 0;
      transform: translateX(60px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .slide-in-right.active {
      opacity: 1;
      transform: translateX(0);
    }
    
    .rotate-in {
      opacity: 0;
      transform: rotate(-10deg) scale(0.8);
      transition: opacity 0.8s ease, transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .rotate-in.active {
      opacity: 1;
      transform: rotate(0) scale(1);
    }
    
    /* Floating Elements
    .floating-dots {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      overflow: hidden;
      z-index: 0;
    }
    
    .dot {
      position: absolute;
      width: 4px;
      height: 4px;
      background: var(--gold);
      border-radius: 50%;
      opacity: 0.2;
    } */
    
    /* Responsive adjustments */
    @media (max-width: 1200px) {
      .diagonal-content {
        gap: 30px;
      }
      
      .diagonal-image {
        height: 350px;
      }
    }
    
    @media (max-width: 992px) {
      .diagonal-content {
        flex-direction: column;
        align-items: center;
      }
      
      .diagonal-text {
        max-width: 100%;
        text-align: center;
      }
      
      .section-title {
        margin-top: 50px;
        margin-left: 0;
        text-align: center;
      }
      
      .expertise-image {
        max-width: 100%;
      }
    }
    
    @media (max-width: 768px) {
      .diagonal-section,
      .values-section,
      .expertise-section,
      .global-section {
        padding: 80px 0;
      }
      
      .diagonal-image {
        height: 300px;
        min-width: 250px;
      }
      
      .section-description {
        font-size: 1rem;
      }
      
      .location-cards {
        gap: 20px;
      }
      
      .location-card {
        min-width: 260px;
        padding: 20px;
      }
    }
    
    @media (max-width: 576px) {
      .diagonal-section,
      .values-section,
      .expertise-section,
      .global-section {
        padding: 60px 0;
      }
      
      .diagonal-image {
        height: 250px;
        min-width: 220px;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
      
      .expertise-title {
        font-size: 1.8rem;
      }
      
      .expertise-text {
        font-size: 1rem;
      }
      
      .location-card {
        padding: 15px;
      }
      
      .location-title {
        font-size: 1.4rem;
      }
    }
    @media (max-width: 992px) {
      .diagonal-content {
        flex-direction: column;
        justify-content: center;
      }
      
      .diagonal-text {
        max-width: 100%;
        text-align: center;
        order: 1;
      }
      
      .diagonal-image {
        order: 2;
        width: 100%;
        max-width: 500px;
        height: 300px;
      }
      
      .section-title {
        margin-left: 0;
        text-align: center;
        width: 100%;
        display: block;
      }
    }
    
    @media (max-width: 768px) {
      .diagonal-section {
        padding: 80px 0;
      }
      
      .diagonal-text {
        padding: 0px 10px;
      }
      
      .diagonal-image {
        height: 250px;
      }
      
      .section-description {
        font-size: 1rem;
      }
    }
    
    @media (max-width: 576px) {
      .diagonal-section {
        padding: 60px 0;
      }
      
      .diagonal-image {
        height: 200px;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
      
      .section-description {
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php'; ?>
 
  <!-- Header would be included here -->
  
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
      <!-- Slider content would be included here -->
      <!-- This is a placeholder for the slider.php include -->
    </div>
  </section>
  
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
      <div class="location-cards">
        <div class="location-card slide-in-right" data-delay="0.2">
          <h3 class="location-title">UK Headquarters</h3>
          <img src="hq.webp" alt="Meticulis UK Headquarters" class="location-image">
          <p>Our HQ operates from the UK, ensuring seamless collaboration across time zones and enabling round-the-clock productivity for our international clients. This strategic location allows us to provide efficient support, maintain clear communication, and deliver consistent results across global markets.</p>
        </div>
        <div class="location-card slide-in-right" data-delay="0.4">
          <h3 class="location-title">India Talent Pool</h3>
          <img src="talentpool.webp" alt="Meticulis India talent pool" class="location-image">
          <p>We have access to a strong IT and business talent pool based in India, with skilled professionals in strategy, technology, and operations. This diverse expertise enables us to offer innovative solutions, drive efficiency, and support businesses in achieving their goals with agility and precision.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer would be included here -->

  <script>
    // Create floating dots
    const dotsContainer = document.getElementById('floatingDots');
    const dotCount = 40; // Reduced for better performance
    
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
      
      // Simplified animation
      const duration = 5 + Math.random() * 10;
      dot.style.animation = `floating ${duration}s infinite alternate ease-in-out`;
      dot.style.animationDelay = `${Math.random() * 5}s`;
      
      dotsContainer.appendChild(dot);
    }
    
    // Create expertise background lines
    const expertiseBg = document.getElementById('expertiseBg');
    const lineCount = 8; // Reduced for better performance
    
    for (let i = 0; i < lineCount; i++) {
      const line = document.createElement('div');
      line.classList.add('expertise-bg-line');
      
      // Positioning
      const yPos = (i / lineCount) * 100;
      line.style.top = `${yPos}%`;
      
      expertiseBg.appendChild(line);
    }
    
    // Animation with Intersection Observer
    document.addEventListener('DOMContentLoaded', function() {
      // Add keyframe for floating animation
      const styleSheet = document.styleSheets[0];
      styleSheet.insertRule(`
        @keyframes floating { 
          0% { transform: translate(0, 0); } 
          100% { transform: translate(10px, 10px); }
        }
      `, styleSheet.cssRules.length);
      
      // Intersection Observer for animations
      const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .rotate-in');
      
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
      
      // 3D tilt effect for cards (simplified for performance)
      const cards = document.querySelectorAll('.location-card');
      
      cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
          if (window.innerWidth > 768) { // Only apply effect on larger screens
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 30 * -1;
            const rotateY = (x - centerX) / 30;
            
            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(5px)`;
          }
        });
        
        card.addEventListener('mouseleave', function() {
          this.style.transform = '';
        });
      });
      
      // Simplified parallax effect for better performance
      let lastScrollY = window.scrollY;
      let ticking = false;
      
      window.addEventListener('scroll', function() {
        lastScrollY = window.scrollY;
        if (!ticking) {
          window.requestAnimationFrame(function() {
            // Simple parallax effect based on scroll position
            const expertiseImage = document.querySelector('.expertise-image');
            if (expertiseImage) {
              const rect = expertiseImage.getBoundingClientRect();
              const windowHeight = window.innerHeight;
              if (rect.top < windowHeight && rect.bottom > 0) {
                const scrollProgress = (windowHeight - rect.top) / (windowHeight + rect.height);
                expertiseImage.style.transform = `translateY(${scrollProgress * 20}px)`;
              }
            }
            ticking = false;
          });
          ticking = true;
        }
      });
    });
    document.addEventListener('DOMContentLoaded', function() {
      const animatedElements = document.querySelectorAll('.fade-in, .slide-in-right');
      
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
    });
  </script>
  <?php include 'includes/footer.php'; ?>
</body>
</html>
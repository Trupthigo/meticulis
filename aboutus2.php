
<?php include 'includes/header.php'; ?>
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
    }
    
    /* Split Hero Section */
    .hero {
      min-height: 100vh;
      display: grid;
      grid-template-columns: 1fr 1fr;
      position: relative;
      overflow: hidden;
    }
    
    .hero-bg-elements {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      overflow: hidden;
    }
    
    .hero-bg-circle {
      position: absolute;
      border-radius: 50%;
      background: var(--gold);
      opacity: 0.03;
      filter: blur(30px);
    }
    
    .circle-1 {
      width: 600px;
      height: 600px;
      top: -200px;
      right: -100px;
      animation: orbit 25s infinite linear;
    }
    
    .circle-2 {
      width: 400px;
      height: 400px;
      bottom: -150px;
      left: -150px;
      animation: orbit 20s infinite linear reverse;
    }
    
    @keyframes orbit {
      0% { transform: rotate(0) translate(-50px) rotate(0); }
      100% { transform: rotate(360deg) translate(-50px) rotate(-360deg); }
    }
    
    .hex-grid {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: 60px 104px;
      background-image: 
        linear-gradient(to right, rgba(30, 30, 30, 0.1) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(30, 30, 30, 0.1) 1px, transparent 1px);
      transform: rotate(45deg) scale(2);
      transform-origin: center;
      z-index: -1;
      animation: hexPulse 15s infinite alternate ease-in-out;
    }
    
    @keyframes hexPulse {
      0% { opacity: 0.3; transform: rotate(45deg) scale(2); }
      50% { opacity: 0.5; transform: rotate(45deg) scale(2.2); }
      100% { opacity: 0.3; transform: rotate(45deg) scale(2); }
    }
    
    .hero-left {
      margin-top: 120px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 80px;
      position: relative;
      z-index: 1;
    }
    
    .hero-right {
      margin-top: 290px;
      padding: 40px;
      position: relative;
      overflow: hidden;
      /* background: var(--gold-glow); */
      display: flex;
      align-items: center;
      justify-content: center;
      height: 500px;
    }
    
    .hero-image-placeholder {
      width: calc(100% - 80px);
      height: calc(100% - 80px);
      background: var(--dark-tertiary);
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
      animation: float 6s infinite ease-in-out;
    }
    
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0px); }
    }
    
    .hero-image-placeholder::after {
      content: 'Hero Image';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: rgba(255, 255, 255, 0.2);
      font-size: 1.5rem;
      font-weight: 300;
    }
    
    .hero-image-placeholder::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, var(--gold-glow) 0%, transparent 50%);
      opacity: 0.3;
      animation: gradientMove 10s infinite alternate;
    }
    
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    
    .hero-title {
      font-size: 6rem;
      font-weight: 900;
      line-height: 1;
      margin-bottom: 30px;
      position: relative;
    }
    
    .hero-title .highlight {
      color: var(--gold);
      display: block;
      transform: translateX(60px);
      text-shadow: 0 0 20px var(--gold-glow);
      animation: glow 3s infinite alternate;
    }
    
    @keyframes glow {
      0% { text-shadow: 0 0 5px var(--gold-glow); }
      100% { text-shadow: 0 0 20px var(--gold-glow), 0 0 30px var(--gold-glow); }
    }
    
    .hero-description {
      font-size: 1.2rem;
      max-width: 500px;
      position: relative;
      padding-left: 20px;
      margin-bottom: 40px;
    }
    
    .hero-description::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 4px;
      height: 0%;
      background: var(--gold);
      animation: line-grow 1.5s ease forwards 0.5s;
    }
    
    @keyframes line-grow {
      0% { height: 0; }
      100% { height: 100%; }
    }
    
    /* Diagonal Sections */
    .diagonal-section {
      position: relative;
      padding: 150px 0;
      margin: 100px 0;
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
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }
    
    .diagonal-text {
      max-width: 600px;
    }
    
    .section-title {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 30px;
      margin-left: 60px;
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
    
    .diagonal-image {
      position: relative;
      height: 400px;
      border-radius: 10px;
      overflow: hidden;
      background: var(--dark-tertiary);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      animation: tilt 5s infinite alternate ease-in-out;
    }
    
    @keyframes tilt {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(2deg); }
    }
    
    .diagonal-image::after {
      content: 'Image';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: rgba(255, 255, 255, 0.2);
      font-size: 1.5rem;
      font-weight: 300;
    }
    
    /* Values Section with Redesigned Cards */
   
    
    .values-intro {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 80px;
    }
    
    /* Expertise Section with Dynamic Background */
    .expertise-section {
      position: relative;
      padding: 150px 0;
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
    }
    
    .expertise-title {
      font-size: 3rem;
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
      margin: 0 auto 60px;
      font-size: 1.2rem;
    }
    
    .expertise-image {
      width: 100%;
      max-width: 800px;
      height: 400px;
      background: var(--dark-tertiary);
      border-radius: 10px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      transform-style: preserve-3d;
      perspective: 1000px;
    }
    
    .expertise-image::after {
      content: 'Expertise Image';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: rgba(255, 255, 255, 0.2);
      font-size: 1.5rem;
      font-weight: 300;
    }
    
    /* Global Presence Section */
    .global-section {
      padding: 150px 0;
      position: relative;
    }
    
    .global-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      align-items: center;
    }
/* Redesigned Location Cards */
.location-cards {
  display: flex;
  justify-content: center;
  align-items: stretch; /* Ensures even height */
  padding: 20px;
  gap: 40px;
  flex-wrap: wrap; /* Allows wrapping on smaller screens */
}

.location-card {
  flex: 1; /* Equal width for both cards */
  min-width: 320px; /* Slightly increased for better responsiveness */
  max-width: 450px;
  background: linear-gradient(125deg, var(--dark-secondary) 0%, var(--dark-tertiary) 100%);
  border-radius: 16px;
  padding: 30px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
  transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.5s ease;
}

.location-card:hover {
  transform: scale(1.02) translateY(-5px);
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
  transition: opacity 0.5s ease;
}

.location-card:hover::before {
  opacity: 0.2;
}

.location-title {
  font-size: 1.8rem;
  color: var(--gold);
  margin-bottom: 20px;
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
  height: 180px;
  background: var(--dark-tertiary);
  border-radius: 10px;
  margin-bottom: 25px;
  position: relative;
  transform: translateZ(20px);
  overflow: hidden;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  transition: transform 0.5s ease;
}

.location-card:hover .location-image {
  transform: scale(1.05);
}

.location-image::after {
  content: 'Location Image';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: rgba(255, 255, 255, 0.2);
  font-size: 1rem;
  font-weight: 300;
}

.location-card p {
  font-size: 1.05rem;
  line-height: 1.7;
  color: var(--text);
}

/* Responsive Fix */
@media (max-width: 900px) {
  .location-cards {
    flex-direction: column;
    align-items: center;
  }

  .location-card {
    max-width: 100%;
  }
}

    
    /* Floating Elements */
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
    }
    
    /* Animation Classes */
    .fade-in {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 1s ease, transform 1s ease;
    }
    
    .fade-in.active {
      opacity: 1;
      transform: translateY(0);
    }
    
    .slide-in-left {
      opacity: 0;
      transform: translateX(-80px);
      transition: opacity 1s ease, transform 1s ease;
    }
    
    .slide-in-left.active {
      opacity: 1;
      transform: translateX(0);
    }
    
    .slide-in-right {
      opacity: 0;
      transform: translateX(80px);
      transition: opacity 1s ease, transform 1s ease;
    }
    
    .slide-in-right.active {
      opacity: 1;
      transform: translateX(0);
    }
    
    .scale-in {
      opacity: 0;
      transform: scale(0.7);
      transition: opacity 1s ease, transform 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .scale-in.active {
      opacity: 1;
      transform: scale(1);
    }
    
    .rotate-in {
      opacity: 0;
      transform: rotate(-10deg) scale(0.8);
      transition: opacity 1s ease, transform 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .rotate-in.active {
      opacity: 1;
      transform: rotate(0) scale(1);
    }
    
    .flip-in {
      opacity: 0;
      transform: perspective(1000px) rotateY(-90deg);
      transition: opacity 1s ease, transform 1s ease;
    }
    
    .flip-in.active {
      opacity: 1;
      transform: perspective(1000px) rotateY(0);
    }
    
    /* Responsive Design */
    @media (max-width: 1200px) {
      .hero-title {
        font-size: 5rem;
      }
      
      .hero-left {
        padding: 60px;
      }
    }
    
    @media (max-width: 992px) {
      .hero {
        grid-template-columns: 1fr;
        grid-template-rows: auto auto;
      }
      
      .hero-right {
        height: 50vh;
      }
      
      .diagonal-content,
      .global-content {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      
      .values-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .section-title {
        font-size: 2.8rem;
      }
    }
    
    @media (max-width: 768px) {
      .hero-title {
        font-size: 4rem;
      }
      
      .hero-left {
        padding: 40px 20px;
      }
      
      .hero-title .highlight {
        transform: translateX(30px);
      }
      
      .section-title {
        font-size: 2.5rem;
      }
      
      .diagonal-section,
      .values-section,
      .expertise-section,
      .global-section {
        padding: 100px 0;
      }
      
      .diagonal-image,
      .expertise-image {
        height: 300px;
      }
    }
    
    @media (max-width: 576px) {
      .hero-title {
        font-size: 3rem;
      }
      
      .hero-title .highlight {
        transform: translateX(20px);
      }
      
      .values-grid {
        grid-template-columns: 1fr;
      }
      
      .section-title {
        font-size: 2.2rem;
      }
      
      .global-map {
        height: 300px;
      }
      
      .location-image {
        height: 150px;
      }
    }
  </style>
</head>
<body>
  <section class="hero">
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
  </section>
  
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
        <img src="job.jpg" alt="Meticulis team" class="expertise-image rotate-in">
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
                <div class="location-image"></div>
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
</body>
</html>
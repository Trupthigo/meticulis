<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Services</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* CSS Reset and Global Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    :root {
      --bg-primary: #0a0a0a;
      --bg-secondary: #141414;
      --gold-primary: #d4af37;
      --gold-light: #f5deb3;
      --gold-dark: #b8860b;
      --text-light: #f8f8f8;
      --text-muted: #a0a0a0;
      --animation-speed: 0.3s;
    }

    body {
      background-color: var(--bg-primary);
      color: var(--text-light);
      line-height: 1.6;
      position: relative;
      overflow-x: hidden;
    }

    /* Decorative elements with animation */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      right: 0;
      width: 40vw;
      height: 40vw;
      background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, transparent 70%);
      z-index: -1;
      animation: pulse 15s infinite alternate;
    }

    body::after {
      content: '';
      position: fixed;
      bottom: 0;
      left: 0;
      width: 40vw;
      height: 40vw;
      background: radial-gradient(circle, rgba(212, 175, 55, 0.05) 0%, transparent 70%);
      z-index: -1;
      animation: pulse 15s infinite alternate-reverse;
    }

    @keyframes pulse {
      0% { opacity: 0.5; transform: scale(1); }
      100% { opacity: 1; transform: scale(1.05); }
    }

    .container {
      max-width: 1300px;
      margin: 0 auto;
      padding: 40px 20px;
    }

    /* Header Section */
    .services-header {
      text-align: center;
      margin-bottom: 60px;
      opacity: 0;
      animation: fadeIn 0.8s ease-out 0.2s forwards;
    }

    .services-header h1 {
      font-size: 42px;
      color: var(--gold-primary);
      margin-bottom: 15px;
      position: relative;
      display: inline-block;
    }

    .services-header h1::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: linear-gradient(90deg, transparent, var(--gold-primary), transparent);
    }

    .services-header p {
      max-width: 700px;
      margin: 0 auto;
      color: var(--text-muted);
      font-size: 16px;
      margin-top: 25px;
    }

    /* Services Grid */
    .services-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 30px;
      margin-bottom: 60px;
    }

    @media (min-width: 768px) {
      .services-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .services-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    /* Service Card */
    .service-card {
      background-color: var(--bg-secondary);
      border-radius: 16px;
      overflow: hidden;
      position: relative;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      opacity: 0;
      animation: cardAppear 0.8s ease-out forwards;
    }

    .service-card:nth-child(1) { animation-delay: 0.3s; }
    .service-card:nth-child(2) { animation-delay: 0.5s; }
    .service-card:nth-child(3) { animation-delay: 0.7s; }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(212, 175, 55, 0.2);
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, var(--gold-dark), var(--gold-primary));
      z-index: 1;
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .service-card:hover::before {
      opacity: 1;
    }

    .service-icon {
      background: linear-gradient(135deg, var(--gold-dark), var(--gold-primary));
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: -40px auto 20px;
      position: relative;
      z-index: 2;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      transition: transform 0.4s ease;
    }

    .service-card:hover .service-icon {
      transform: rotateY(180deg);
    }

    .service-icon i {
    font-size: 32px;
    color: var(--bg-primary);
    transition: transform 0.4s ease, margin-top 0.4s ease;
    display: inline-block;
    }

    .service-card:hover .service-icon i {
    transform: translateY(10px); /* Move down */
    }


    .service-content {
      padding: 0 30px 30px;
      text-align: center;
    }

    .service-title {
      color: var(--gold-light);
      font-size: 22px;
      margin-bottom: 15px;
      position: relative;
      display: inline-block;
    }

    .service-title::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--gold-primary);
      transition: width 0.4s ease;
    }

    .service-card:hover .service-title::after {
      width: 100%;
    }

    .service-description {
      color: var(--text-muted);
      font-size: 15px;
      line-height: 1.7;
      margin-bottom: 25px;
    }

    .service-features {
      text-align: left;
      margin-bottom: 25px;
    }

    .feature-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 12px;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .service-card:hover .feature-item {
      opacity: 1;
      transform: translateY(0);
    }

    .service-card:hover .feature-item:nth-child(1) { transition-delay: 0.1s; }
    .service-card:hover .feature-item:nth-child(2) { transition-delay: 0.2s; }
    .service-card:hover .feature-item:nth-child(3) { transition-delay: 0.3s; }

    .feature-icon {
      color: var(--gold-primary);
      margin-right: 10px;
      font-size: 14px;
      margin-top: 5px;
    }

    .feature-text {
      color: var(--text-light);
      font-size: 14px;
    }

    .service-btn {
      background: transparent;
      color: var(--gold-primary);
      border: 1px solid var(--gold-primary);
      padding: 10px 24px;
      font-size: 14px;
      font-weight: 500;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: inline-block;
      text-decoration: none;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .service-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 100%;
      background: linear-gradient(135deg, var(--gold-dark), var(--gold-primary));
      transition: width 0.4s ease;
      z-index: -1;
    }

    .service-btn:hover::before {
      width: 100%;
    }

    .service-btn:hover {
      color: var(--bg-primary);
      border-color: transparent;
    }

    /* Process Section */
    .process-section {
      margin-top: 80px;
      opacity: 0;
      animation: fadeUp 0.8s ease-out 0.9s forwards;
    }

    .section-title {
      text-align: center;
      color: var(--gold-primary);
      font-size: 32px;
      margin-bottom: 50px;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 3px;
      background: linear-gradient(90deg, transparent, var(--gold-primary), transparent);
    }

    .process-wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      position: relative;
    }

    .process-wrapper::before {
      content: '';
      position: absolute;
      top: 50px;
      left: 30px;
      width: calc(100% - 60px);
      height: 3px;
      background: linear-gradient(90deg, var(--gold-dark), var(--gold-primary), var(--gold-dark));
      z-index: 0;
      opacity: 0.3;
    }

    @media (max-width: 767px) {
      .process-wrapper::before {
        display: none;
      }
    }

    .process-step {
      flex: 1 1 300px;
      max-width: 300px;
      margin: 0 20px 40px;
      position: relative;
      z-index: 1;
      text-align: center;
    }

    .step-number {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background-color: var(--bg-secondary);
      border: 3px solid var(--gold-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 24px;
      font-weight: 700;
      color: var(--gold-primary);
      position: relative;
      transition: all 0.4s ease;
    }

    .process-step:hover .step-number {
      transform: scale(1.1);
      box-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
    }

    .step-title {
      color: var(--gold-light);
      font-size: 18px;
      margin-bottom: 15px;
      position: relative;
      display: inline-block;
    }

    .step-title::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: var(--gold-primary);
      transition: width 0.4s ease;
    }

    .process-step:hover .step-title::after {
      width: 100%;
    }

    .step-description {
      color: var(--text-muted);
      font-size: 14px;
      line-height: 1.7;
    }

    /* CTA Section */
    .cta-section {
      margin-top: 80px;
      background: linear-gradient(135deg, rgba(20, 20, 20, 0.9), rgba(10, 10, 10, 0.9)), 
                  url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover;
      padding: 80px 0;
      border-radius: 16px;
      text-align: center;
      position: relative;
      overflow: hidden;
      opacity: 0;
      animation: fadeUp 0.8s ease-out 1.1s forwards;
    }

    .cta-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, var(--gold-dark), var(--gold-primary), var(--gold-dark));
    }

    .cta-title {
      color: var(--gold-primary);
      font-size: 32px;
      margin-bottom: 20px;
    }

    .cta-description {
      color: var(--text-light);
      max-width: 700px;
      margin: 0 auto 30px;
      font-size: 16px;
    }

    .cta-btn {
      background: linear-gradient(135deg, var(--gold-dark), var(--gold-primary));
      color: var(--bg-primary);
      border: none;
      padding: 15px 40px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.4s ease;
      display: inline-block;
      text-decoration: none;
      position: relative;
      overflow: hidden;
    }

    .cta-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.2);
      transition: 0.5s;
    }

    .cta-btn:hover::before {
      left: 100%;
    }

    .cta-btn:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
      .services-header h1 {
        font-size: 32px;
      }
      
      .service-content {
        padding: 0 20px 25px;
      }
      
      .service-title {
        font-size: 20px;
      }
      
      .section-title {
        font-size: 28px;
      }
      
      .cta-title {
        font-size: 28px;
      }
      
      .process-step {
        margin: 0 10px 30px;
      }
    }

    @media (max-width: 480px) {
      .container {
        padding: 30px 15px;
      }
      
      .services-header h1 {
        font-size: 28px;
      }
      
      .services-header p {
        font-size: 14px;
      }
      
      .service-icon {
        width: 70px;
        height: 70px;
        margin: -35px auto 15px;
      }
      
      .service-icon i {
        font-size: 28px;
      }
      
      .service-title {
        font-size: 18px;
      }
      
      .service-description {
        font-size: 14px;
      }
      
      .cta-section {
        padding: 60px 0;
      }
      
      .cta-title {
        font-size: 24px;
      }
      
      .cta-description {
        font-size: 14px;
      }
      
      .cta-btn {
        padding: 12px 30px;
        font-size: 14px;
      }
    }

    /* Animation keyframes */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes cardAppear {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Header Section -->
    <div class="services-header">
      <h1>Our Services</h1>
      <p>We deliver innovative and tailored services to help businesses transform and thrive in today's competitive landscape. Our team of experts is committed to ensuring your success through our comprehensive service offerings.</p>
    </div>

    <!-- Services Grid -->
    <div class="services-grid">
      <!-- Skilled Technical Resources -->
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-users-cog"></i>
        </div>
        <div class="service-content">
          <h2 class="service-title">Skilled Technical Resources</h2>
          <p class="service-description">Our experienced IT professionals seamlessly integrate with your team to enhance productivity and deliver exceptional results.</p>
          <div class="service-features">
            <div class="feature-item">
              <i class="fas fa-check-circle feature-icon"></i>
              <p class="feature-text">Expert developers in multiple technologies</p>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle feature-icon"></i>
              <p class="feature-text">Flexible resource allocation</p>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle feature-icon"></i>
              <p class="feature-text">Skilled system administrators and architects</p>
            </div>
          </div>
          <a href="#" class="service-btn">Learn More</a>
        </div>
      </div>

      <!-- Project Management -->
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-tasks"></i>
        </div>
        <div class="service-content">
          <h2 class="service-title">Project Management</h2>
          <p class="service-description">End-to-end project management services to ensure timely delivery and successful outcomes for your business initiatives.</p>
          <div class="service-features">
            <div class="feature-item">
              <i class="fas fa-check-circle feature-icon"></i>
              <p class="feature-text">Agile and traditional methodologies</p>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle feature-icon"></i>
              <p class="feature-text">Clear communication and reporting</p>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle feature-icon"></i>
              <p class="feature-text">Risk management and mitigation</p>
            </div>
          </div>
          <a href="#" class="service-btn">Learn More</a>
        </div>
      </div>

      <!-- Software Development -->
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-code"></i>
        </div>
        <div class="service-content">
          <h2 class="service-title">Software Development</h2>
          <p class="service-description">Custom software solutions tailored to your specific business needs and objectives, designed to drive growth and efficiency.</p>
          <div class="service-features">
            <div class="feature-item">
              <i class="fas fa-check-circle feature-icon"></i>
              <p class="feature-text">Bespoke application development</p>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle feature-icon"></i>
              <p class="feature-text">Web and mobile solutions</p>
            </div>
            <div class="feature-item">
              <i class="fas fa-check-circle feature-icon"></i>
              <p class="feature-text">Legacy system modernization</p>
            </div>
          </div>
          <a href="#" class="service-btn">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Process Section -->
    <div class="process-section">
      <h2 class="section-title">Our Process</h2>
      <div class="process-wrapper">
        <div class="process-step">
          <div class="step-number">1</div>
          <h3 class="step-title">Consultation</h3>
          <p class="step-description">We begin by understanding your business needs, challenges, and objectives through in-depth discussions.</p>
        </div>
        <div class="process-step">
          <div class="step-number">2</div>
          <h3 class="step-title">Planning</h3>
          <p class="step-description">Our experts develop a comprehensive strategy and roadmap tailored to your specific requirements.</p>
        </div>
        <div class="process-step">
          <div class="step-number">3</div>
          <h3 class="step-title">Execution</h3>
          <p class="step-description">We implement the solution with meticulous attention to detail, quality, and timelines.</p>
        </div>
        <div class="process-step">
          <div class="step-number">4</div>
          <h3 class="step-title">Support</h3>
          <p class="step-description">Our relationship continues with ongoing support, maintenance, and optimization.</p>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
      <h2 class="cta-title">Ready to Transform Your Business?</h2>
      <p class="cta-description">Contact us today to discuss how our services can help you achieve your business goals and stay ahead of the competition.</p>
      <a href="#" class="cta-btn">Get Started</a>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Add animation class to body after page loads
      document.body.classList.add('page-loaded');
      
      // Animate service cards on scroll
      const serviceCards = document.querySelectorAll('.service-card');
      const processSection = document.querySelector('.process-section');
      const ctaSection = document.querySelector('.cta-section');
      
      // Check if element is in viewport
      function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
          rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.bottom >= 0
        );
      }
      
      // Add scroll animation
      function animateOnScroll() {
        serviceCards.forEach(card => {
          if (isInViewport(card) && !card.classList.contains('animated')) {
            card.style.animationPlayState = 'running';
            card.classList.add('animated');
          }
        });
        
        if (isInViewport(processSection) && !processSection.classList.contains('animated')) {
          processSection.style.animationPlayState = 'running';
          processSection.classList.add('animated');
        }
        
        if (isInViewport(ctaSection) && !ctaSection.classList.contains('animated')) {
          ctaSection.style.animationPlayState = 'running';
          ctaSection.classList.add('animated');
        }
      }
      
      // Run on load
      animateOnScroll();
      
      // Add scroll event listener
      window.addEventListener('scroll', animateOnScroll);
      
      // Add ripple effect for buttons
      const buttons = document.querySelectorAll('.service-btn, .cta-btn');
      
      buttons.forEach(button => {
        button.addEventListener('click', function(e) {
          const x = e.clientX - e.target.getBoundingClientRect().left;
          const y = e.clientY - e.target.getBoundingClientRect().top;
          
          const ripple = document.createElement('span');
          ripple.style.position = 'absolute';
          ripple.style.backgroundColor = 'rgba(255, 255, 255, 0.7)';
          ripple.style.borderRadius = '50%';
          ripple.style.width = '0';
          ripple.style.height = '0';
          ripple.style.left = x + 'px';
          ripple.style.top = y + 'px';
          ripple.style.transform = 'translate(-50%, -50%)';
          ripple.style.animation = 'ripple 0.6s linear';
          
          button.appendChild(ripple);
          
          setTimeout(() => {
            ripple.remove();
          }, 600);
        });
      });
      
      // Add keyframes for ripple effect
      const styleSheet = document.createElement('style');
      styleSheet.innerHTML = `
        @keyframes ripple {
          0% {
            width: 0;
            height: 0;
            opacity: 0.8;
          }
          100% {
            width: 200px;
            height: 200px;
            opacity: 0;
          }
        }
      `;
      document.head.appendChild(styleSheet);
    });
  </script>


<?php include 'includes/footer.php'; ?>
</body>
</html>
<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Services</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/services.css">
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
      <div class="service-card" id="skilled-resources"> 
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
      </div>

      <!-- Project Management -->
        <div class="service-card" id="project-management">
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
        </div>  
    

      <!-- Software Development -->
      <div class="service-card" id="software-development">
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
      <a href="contact.php" class="cta-btn">Get Started</a>
    </div>
  </div>
  <script src="services.js"></script>
<?php include 'includes/footer.php'; ?>
</body>
</html>
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
   // Create floating dots
   document.addEventListener('DOMContentLoaded', function() {
    // Create dots for the values section
    const dotsContainer = document.getElementById('floatingDots');
    if (dotsContainer) {
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
        
        // Animation
        const duration = 5 + Math.random() * 10;
        dot.style.animation = `floating ${duration}s infinite alternate ease-in-out`;
        dot.style.animationDelay = `${Math.random() * 5}s`;
        
        dotsContainer.appendChild(dot);
      }
    }
    
    // Create dots for the global section
    const globalDotsContainer = document.getElementById('globalDots');
    if (globalDotsContainer) {
      const dotCount = 30; // Reduced for better performance
      
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
        const duration = 5 + Math.random() * 10;
        dot.style.animation = `floating ${duration}s infinite alternate ease-in-out`;
        dot.style.animationDelay = `${Math.random() * 5}s`;
        
        globalDotsContainer.appendChild(dot);
      }
    }
    
    // Create expertise background lines
    const expertiseBg = document.getElementById('expertiseBg');
    if (expertiseBg) {
      const lineCount = 8; // Reduced for better performance
      
      for (let i = 0; i < lineCount; i++) {
        const line = document.createElement('div');
        line.classList.add('expertise-bg-line');
        
        // Positioning
        const yPos = (i / lineCount) * 100;
        line.style.top = `${yPos}%`;
        
        expertiseBg.appendChild(line);
      }
    }
    
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
    
    // 3D tilt effect for cards
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
    
    // Simplified parallax effect
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
<!-- Meticulis About Component -->
<style>
  @import url("https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap");

  .meticulis-about {
    font-family: Arial, Helvetica, sans-serif;
    color: #ffffff;
    overflow-x: hidden;
  }

  .meticulis-about__heading {
    width: 100%;
    height: 100%;
    position: relative;
    margin-top: 0;
    padding: 0 40px;
    padding-bottom: 60px;
    background-image: linear-gradient(to bottom, #000000 0%, #121212 100%);
  }

  .meticulis-about__content {
    max-width: 1110px;
    min-height: 600px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
  }

  .meticulis-about__text {
    z-index: 1;
    color: #ffffff;
    background-color: rgba(18, 18, 18, 0.7);
    padding: 40px;
    max-width: 620px;
    margin-top: 160px;
    width: 100%;
    backdrop-filter: blur(8px);
    animation: meticulis-text 0.8s 0.6s ease backwards;
    position: relative;
  }

  .meticulis-about__text:before {
    content: "";
    position: absolute;
    width: 5px;
    height: 100%;
    background-color: #d4af37;
    top: 0;
    left: 0;
    animation: meticulis-line 0.8s 0.6s ease backwards;
  }

  @keyframes meticulis-line {
    0% {
      right: 0;
      width: 100%;
      opacity: 0;
    }
  }

  @keyframes meticulis-text {
    0% {
      opacity: 0;
      transform: translateX(200px);
    }
  }

  .meticulis-about__preTitle {
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 2px;
    margin-bottom: 16px;
    color: #d4af37;
  }

  .meticulis-about__title {
    text-transform: uppercase;
    font-weight: 200;
    letter-spacing: 2px;
    margin-bottom: 24px;
    font-size: 40px;
    color: #ffffff;
  }

  .meticulis-about__description {
    letter-spacing: 0.5px;
    font-size: 16px;
    line-height: 26px;
    color: #e0e0e0;
  }

  .meticulis-about__image {
    position: absolute;
    right: 0;
    max-width: 600px;
    width: 60%;
    height: 600px;
    transform: translateY(100px);
    overflow: hidden;
    animation: meticulis-image 0.6s 0.2s ease backwards;
  }

  @keyframes meticulis-image {
    0% {
      opacity: 0;
      transform: translateY(200px);
    }
  }

  .meticulis-about__image:before, .meticulis-about__image:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 0%;
    top: 100%;
    background-image: linear-gradient(to top, #121212 0%, #1e1e1e 100%);
    opacity: 1;
    left: 0;
  }

  .meticulis-about__image:before {
    animation: meticulis-imageBefore 1s 0.2s ease backwards;
  }

  @keyframes meticulis-imageBefore {
    0% {
      height: 100%;
      top: 0;
    }
  }

  .meticulis-about__image:after {
    background-image: linear-gradient(to top, #121212 0%, #1e1e1e 100%);
    height: 100%;
    top: 0;
    opacity: 0.2;
  }

  .meticulis-about__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .meticulis-about__cta {
    padding: 16px 32px;
    color: #d4af37;
    background-color: transparent;
    border: 1px solid #d4af37;
    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
    margin-top: 32px;
    cursor: pointer;
    box-shadow: inset 0px 0px 0px rgba(212, 175, 55, 0.2);
    transition: all 0.4s ease;
  }

  .meticulis-about__cta:hover {
    border: 1px solid rgba(212, 175, 55, 0.1) !important;
    box-shadow: inset 0px -80px 0px #d4af37 !important;
    transform: translateY(-5px) !important;
    color: #121212 !important;
  }

  /* Responsive styles */
  @media screen and (max-width: 992px) {
    .meticulis-about__content {
      flex-direction: column;
      min-height: auto;
    }
    
    .meticulis-about__text {
      margin-top: 100px;
      width: 100%;
      max-width: 100%;
    }
    
    .meticulis-about__image {
      position: relative;
      width: 100%;
      max-width: 100%;
      height: 400px;
      transform: translateY(0);
      margin-top: 40px;
    }
  }

  @media screen and (max-width: 768px) {
    .meticulis-about__heading {
      padding: 0 20px;
    }
    
    .meticulis-about__text {
      padding: 20px;
      margin-top: 80px;
    }
    
    .meticulis-about__title {
      margin-bottom: 16px;
      font-size: 28px;
    }
    
    .meticulis-about__description {
      font-size: 14px;
      line-height: 24px;
    }
    
    .meticulis-about__image {
      height: 350px;
    }
    
    .meticulis-about__cta {
      padding: 12px 24px;
      margin-top: 20px;
      font-size: 14px;
    }
  }

  @media screen and (max-width: 480px) {
    .meticulis-about__text {
      margin-top: 60px;
      padding: 15px;
    }
    
    .meticulis-about__title {
      font-size: 24px;
    }
    
    .meticulis-about__image {
      height: 300px;
    }
  }
  
  /* Added extra breakpoint for smaller devices */
  @media screen and (max-width: 320px) {
    .meticulis-about__heading {
      padding: 0 10px;
    }
    
    .meticulis-about__text {
      padding: 10px;
      margin-top: 40px;
    }
    
    .meticulis-about__title {
      font-size: 20px;
    }
    
    .meticulis-about__preTitle {
      font-size: 12px;
    }
    
    .meticulis-about__image {
      height: 250px;
    }
    
    .meticulis-about__cta {
      padding: 10px 20px;
      font-size: 12px;
    }
  }
</style>

<div class="meticulis-about">
  <section class="meticulis-about__heading">
    <div class="meticulis-about__content">
      <article class="meticulis-about__text">
        <p class="meticulis-about__preTitle">About Us</p>
        <h2 class="meticulis-about__title">METICULIS</h2>
        <p class="meticulis-about__description">
          With over 20 years of experience in software development across diverse industries, we have experience building high-performing teams that deliver quality software at speed. 
          We carry that same mentality into Meticulis, we are passionate about hiring the right people—those whose values and attitudes align with ours and drive the same success to our clients.
        </p>
        <a href="contact.php">
          <button class="meticulis-about__cta">know more</button> 
        </a>
      </article>

      <figure class="meticulis-about__image" id="meticulis-scene">
        <img src="main.webp" alt="Meticulis Team" />
      </figure>
    </div>
  </section>
</div>

<script>
  // Check if the parallax library is loaded
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof Parallax !== 'undefined') {
      var scene = document.getElementById('meticulis-scene');
      if (scene) {
        var parallaxInstance = new Parallax(scene);
      }
    }
  });
</script>
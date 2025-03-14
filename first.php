<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>METICULIS</title>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap");

    * {
      margin: 0;
      padding: 0;
      list-style: none;
      border: 0;
      outline: 0;
      -webkit-tap-highlight-color: transparent;
      text-decoration: none;
      color: inherit;
      box-sizing: border-box;
    }
    *:focus {
      outline: 0;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #121212;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .mainNav {
      padding: 0 40px;
    }

    .mainHeading {
      width: 100%;
      height: 100%;
      position: relative;
      margin-top: 0;
      padding: 0 40px;
      padding-bottom: 60px;
      background-image: linear-gradient(to bottom, #000000 0%, #121212 100%);
    }

    .mainHeading__content {
      max-width: 1110px;
      min-height: 600px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
    }

    .mainHeading__text {
      z-index: 1;
      color: #ffffff;
      background-color: rgba(18, 18, 18, 0.7);
      padding: 40px;
      max-width: 620px;
      margin-top: 160px;
      width: 100%;
      backdrop-filter: blur(8px);
      animation: text 0.8s 0.6s ease backwards;
      position: relative;
    }

    .mainHeading__text:before {
      content: "";
      position: absolute;
      width: 5px;
      height: 100%;
      background-color: #d4af37;
      top: 0;
      left: 0;
      animation: line 0.8s 0.6s ease backwards;
    }

    @keyframes line {
      0% {
        right: 0;
        width: 100%;
        opacity: 0;
      }
    }

    @keyframes text {
      0% {
        opacity: 0;
        transform: translateX(200px);
      }
    }

    .mainHeading__preTitle {
      text-transform: uppercase;
      font-weight: 600;
      letter-spacing: 2px;
      margin-bottom: 16px;
      color: #d4af37;
    }

    .mainHeading__title {
      text-transform: uppercase;
      font-weight: 200;
      letter-spacing: 2px;
      margin-bottom: 24px;
      font-size: 40px;
      color: #ffffff;
    }

    .mainHeading__description {
      letter-spacing: 0.5px;
      font-size: 16px;
      line-height: 26px;
      color: #e0e0e0;
    }

    .mainHeading__image {
      position: absolute;
      right: 0;
      max-width: 600px;
      width: 60%;
      height: 600px;
      transform: translateY(100px);
      overflow: hidden;
      animation: image 0.6s 0.2s ease backwards;
    }

    @keyframes image {
      0% {
        opacity: 0;
        transform: translateY(200px);
      }
    }

    .mainHeading__image:before, .mainHeading__image:after {
      content: "";
      position: absolute;
      width: 100%;
      height: 0%;
      top: 100%;
      background-image: linear-gradient(to top, #121212 0%, #1e1e1e 100%);
      opacity: 1;
      left: 0;
    }

    .mainHeading__image:before {
      animation: imageBefore 1s 0.2s ease backwards;
    }

    @keyframes imageBefore {
      0% {
        height: 100%;
        top: 0;
      }
    }

    .mainHeading__image:after {
      background-image: linear-gradient(to top, #121212 0%, #1e1e1e 100%);
      height: 100%;
      top: 0;
      opacity: 0.2;
    }

    .mainHeading__image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .cta {
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

    .cta:hover {
      border: 1px solid rgba(212, 175, 55, 0.1) !important;
      box-shadow: inset 0px -80px 0px #d4af37 !important;
      transform: translateY(-5px) !important;
      color: #121212 !important;
    }

    /* Responsive styles */
    @media screen and (max-width: 992px) {
      .mainHeading__content {
        flex-direction: column;
        min-height: auto;
      }
      
      .mainHeading__text {
        margin-top: 100px;
        width: 100%;
        max-width: 100%;
      }
      
      .mainHeading__image {
        position: relative;
        width: 100%;
        max-width: 100%;
        height: 400px;
        transform: translateY(0);
        margin-top: 40px;
      }
    }

    @media screen and (max-width: 768px) {
      .mainNav, .mainHeading {
        padding: 0 20px;
      }
      
      .mainHeading__text {
        padding: 20px;
        margin-top: 80px;
      }
      
      .mainHeading__title {
        margin-bottom: 16px;
        font-size: 28px;
      }
      
      .mainHeading__description {
        font-size: 14px;
        line-height: 24px;
      }
      
      .mainHeading__image {
        height: 350px;
      }
      
      .cta {
        padding: 12px 24px;
        margin-top: 20px;
        font-size: 14px;
      }
    }

    @media screen and (max-width: 480px) {
      .mainHeading__text {
        margin-top: 60px;
        padding: 15px;
      }
      
      .mainHeading__title {
        font-size: 24px;
      }
      
      .mainHeading__image {
        height: 300px;
      }
    }
  </style>
</head>
<body>
  <!-- Header can be included here -->
  <!-- PHP include equivalent: <?php include 'includes/header.php'; ?> -->
  
  <header class="mainHeading">
    <div class="mainHeading__content">
      <article class="mainHeading__text">
        <p class="mainHeading__preTitle">About Us</p>
        <h2 class="mainHeading__title">METICULIS</h2>
        <p class="mainHeading__description">
          With over 20 years of experience in software development across diverse industries, we have experience building high-performing teams that deliver quality software at speed. 
          We carry that same mentality into Meticulis, we are passionate about hiring the right people—those whose values and attitudes align with ours and drive the same success to our clients.
        </p>
        <a href="contact.php">
          <button class="cta">know more</button> 
        </a>
      </article>

      <figure class="mainHeading__image" id="scene">
        <img src="main.webp" alt="Meticulis Team" />
      </figure>
    </div>
  </header>

  <script>
    // Check if the parallax library is loaded
    document.addEventListener('DOMContentLoaded', function() {
      if (typeof Parallax !== 'undefined') {
        var scene = document.getElementById('scene');
        if (scene) {
          var parallaxInstance = new Parallax(scene);
        }
      }
    });
  </script>
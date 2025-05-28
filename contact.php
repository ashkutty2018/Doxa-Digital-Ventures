<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="DRU8eyfIcu6t90ONsQbZRF9plKAojjX2n1Rub3pMwBI" />
  <title>DOXA Digital Ventures</title>
  <!-- Bootstrap CSS -->
  <link href="assets/img/doxa.png" rel="icon" />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
  <!-- EmailJS -->
   <style>
  body
    {
      cursor:default;
    }
    
</style>
  <script>
    (function() {
      emailjs.init("YOUR_USER_ID"); // Replace with your EmailJS User ID
    })();
  </script>
 
</head>
<body>
  <!-- Menu Toggle Button -->
  <header>
    <div>
    <a href="index.php">   <img src="assets/img/white.png" alt="Logo" class="img-fluid" height="150px" width="100px"/></a>
    </div>
    <div class="menu-toggle" id="menuToggle">
      <i class="fas fa-bars"></i>
    </div>
  </header>

  <div id="wrapper">
    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="package.php">SERVICES</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        <li><a href="#" onclick="openPopup()">GET QUOTE</a></li>
      </ul>
    </nav>

    <!-- Contact Banner -->
    <section class="banner">
      <div class="banner-background"></div>
      <div class="container">
        <div class="banner-content">
          <h1 class="banner-title">CONTACT US</h1>
          <p class="banner-subtitle">Let’s Connect and Create Something Amazing</p>
        </div>
      </div>
    </section>
  </div>

  <!-- Contact Section -->
  <section class="contact-section">
    <!-- Contact Form (Centered) -->
   <div class="contact-form">
  <h2>SEND US A MESSAGE</h2>
 <form id="contactForm" action="/insert.php" method="POST">
  <label for="name">Name</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email</label>
  <input type="email" id="email" name="email" required>

  <label for="phone">Phone No</label>
  <input type="number" id="phone" name="phone" required>

  <label for="message">Message</label>
  <textarea id="message" name="message" required></textarea>

  <button type="submit">Send Message</button>
</form>

</div>


  
    <div class="contact-info">
      <h2>GET IN TOUCH</h2>
      <p><i class="fas fa-map-marker-alt"></i> Melbourne, Australia</p>
      <p><i class="fas fa-phone"></i> +61438139784</p>
      <p><i class="fas fa-envelope"></i> <a href="mailto:info@doxaconnect.au" class="text-salmon">info@doxaconnect.au</a></p>
       <div class="social-icons">
        <a href="https://www.instagram.com/doxadigitalventures?igsh=MTRkajVvNnZpeWtqeQ==" target="_blank" class="social-icon">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://wa.me/message/TYS3R2ONAMVIA1" target="_blank" class="social-icon">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.facebook.com/share/1RHvz95efv/?mibextid=qi2Omg" target="_blank" class="social-icon">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.youtube.com" target="_blank" class="social-icon">
          <i class="fab fa-youtube"></i>
        </a>
         <a href="https://www.linkedin.com" target="_blank" class="social-icon">
          <i class="fab fa-linkedin"></i>
        </a>
         
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="combined-footer">
    <h2><img src="assets/img/white.png" height="50px" width="150px"></h2>
    <div class="footer-flex">
      <!-- Company Info -->
      <div class="footer-section">
        <h5>Company</h5>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="privacy.php" target="_blank">Privacy Policy</a></li>
          <li><a href="refund.php" target="_blank">Refund Policy</a></li>
          <li><a href="terms.php" target="_blank">Terms & Conditions</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="footer-section">
        <h5>Main Services</h5>
        <ul>
          <li><a href="package.php">Website Design & Development</a></li>
          <li><a href="package.php">Content Creation</a></li>
          <li><a href="package.php">Branding</a></li>
          <li><a href="package.php">SEO</a></li>
          <li><a href="package.php">Strategic Business Consultation</a></li>
          <li><a href="package.php">Neuro Marketing</a></li>
          <li><a href="package.php">Social Media Marketing</a></li>
          <li><a href="package.php">Whatsapp Marketing</a></li>
          <li><a href="package.php">PPC Advertising</a></li>
          <li><a href="package.php">AI Powered Marketing</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="footer-section">
        <h5>Contact</h5>
        <ul>
          <li><i class="fas fa-home"></i> Melbourne, Australia</li>
          <li><i class="fas fa-envelope"></i> info@doxaconnect.au</li>
          <li><i class="fas fa-phone"></i> +61438139784</li>
        </ul>
      </div>
    </div>
   <div class="footer-bottom">
      <p>© 2025 DOXA Digital Ventures. All Rights Reserved.</p>
      <div class="social-icons">
        <a href="https://www.instagram.com/doxadigitalventures?igsh=MTRkajVvNnZpeWtqeQ==" target="_blank" class="social-icon">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://wa.me/message/TYS3R2ONAMVIA1" target="_blank" class="social-icon">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.facebook.com/share/1RHvz95efv/?mibextid=qi2Omg" target="_blank" class="social-icon">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.youtube.com" target="_blank" class="social-icon">
          <i class="fab fa-youtube"></i>
        </a>
         <a href="https://www.linkedin.com" target="_blank" class="social-icon">
          <i class="fab fa-linkedin"></i>
        </a>
         
      </div>
    </div>
  </footer>

  <!-- Popup -->
   <div class="popup-overlay" id="popupForm">
    <div class="popup-box">
      <span class="close-btn" onclick="closePopup()">×</span>
      <h2>Get a Quote</h2>
       <form method="post" id="quoteform" action="quoteinsert.php">
      <input type="text" id="name" name="name" placeholder="Your Name" required />
      <input type="number" id="phone" name="phone" placeholder="Your Phone No" required />
      <input type="email" id="email" name="email" placeholder="Your Email" required />
      <select id="subject" name="subject" required>
        <option value="" disabled selected>Select a Service</option>
        <option value="Website Design & Development">Website Design & Development</option>
        <option value="Content Creation">Content Creation</option>
        <option value="Branding">Branding</option>
        <option value="SEO">SEO</option>
        <option value="Strategic Business Consultation">Strategic Business Consultation</option>
        <option value="Neuro Marketing">Neuro Marketing</option>
        <option value="Social Media Marketing">Social Media Marketing</option>
        <option value="Whatsapp Marketing">Whatsapp Marketing</option>
        <option value="PPC Advertising">PPC Advertising</option>
        <option value="AI Powered Marketing">AI Powered Marketing</option>
      </select>
      <textarea rows="4" id="message" name="message" placeholder="Your Message" required></textarea>
      <button type="submit">Submit</button>
    </form>
    </div>
  </div>

 
  <script src="assets/js/bootstrap.min.js"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const menuToggle = document.getElementById('menuToggle');
      const sidebar = document.querySelector('.sidebar');
      const wrapper = document.getElementById('wrapper');
      const header = document.querySelector('header');
      const form = document.getElementById('contactForm');

      function toggleSidebar() {
        sidebar.classList.toggle('menuon');
        wrapper.classList.toggle('menu-open');
        if (window.scrollY > 0) {
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        }
      }

      menuToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleSidebar();
      });

      document.addEventListener('click', (e) => {
        if (
          !sidebar.contains(e.target) &&
          e.target !== menuToggle &&
          sidebar.classList.contains('menuon')
        ) {
          sidebar.classList.remove('menuon');
          wrapper.classList.remove('menu-open');
        }
      });

      window.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      });

    });

    function openPopup() {
      document.getElementById('popupForm').style.display = 'flex';
    }

    function closePopup() {
    document.getElementById("popupForm").style.display = "none";
  }
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DOXA Digital Ventures</title>
  <!-- Favicon -->
  <link href="assets/img/doxa.png" rel="icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Additional Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Boldonse&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

  <!-- Custom Styles -->
  <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
  <!-- Inline Styles for Popup -->
 <style>
    .popup-box ul {
      list-style-type: disc;
      padding-left: 20px;
      margin-bottom: 15px;
      text-align: left;
    }

    .popup-box ul li {
      font-size: 14px;
      color: #ddd;
      margin-bottom: 5px;
    }

    .popup-box .delivery-info {
      font-size: 14px;
      color: #aaa;
      font-style: italic;
      text-align: center;
    }

    /* Ensure cursor visibility in popup */
    .popup-overlay {
      cursor: auto; /* Default cursor for the overlay */
    }

    .popup-box {
      cursor: default; /* Default for the popup box */
    }

    .popup-box .close-btn {
      cursor: pointer; /* Pointer for the close button */
    }

    .popup-box input,
    .popup-box textarea {
      cursor: text; /* Text cursor for inputs and textarea */
    }

    .popup-box select {
      cursor: pointer; /* Pointer for select dropdown */
    }

    .popup-box button {
      cursor: pointer; /* Pointer for buttons */
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div>
      <a href="index.php"><img src="assets/img/white.png" alt="Logo" class="img-fluid" height="150px" width="100px"/></a>
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

    <!-- Banner Section -->
    <section class="banner">
      <div class="banner-background"></div>
      <div class="container">
        <div class="banner-content">
          <h1 class="banner-title">SERVICES</h1>
          <p class="banner-subtitle">Choose the perfect plan that fits your journey</p>
        </div>
      </div>
    </section>
  </div>

  <!-- Package Section -->
  <section class="package-section py-5">
    <div class="container">
      <div class="row" id="package-container">
        <!-- Web Design -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="Web Design">
            <img src="https://cdn-icons-png.flaticon.com/512/1006/1006771.png" alt="Web Design" class="inimg">
            <h4>Web Design</h4>
            <p>Clean and responsive website designs.<br>Tailored for your brand identity.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>

        <!-- SEO -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="SEO">
            <img src="assets/img/bag 1.png" alt="SEO">
            <h4>SEO</h4>
            <p>Boost your visibility on search engines.<br>Attract more organic traffic.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>

        <!-- Neuromarketing -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="Neuromarketing">
            <img src="https://cdn-icons-png.flaticon.com/512/2622/2622806.png" alt="Neuromarketing" class="inimg">
            <h4>Neuromarketing</h4>
            <p>Understand consumer psychology.<br>Trigger emotional engagement effectively.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>

        <!-- Social Media -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="Social Media Handling">
            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384031.png" alt="Social Media" class="inimg">
            <h4>Social Media</h4>
            <p>Grow your presence on all platforms.<br>Engage your audience consistently.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>

        <!-- Content Creation -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="Content Creation">
            <img src="assets/img/3062634.png" alt="Content Creation">
            <h4>Content Creation</h4>
            <p>Engaging text, image, and video content.<br>Designed to resonate with your audience.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>

        <!-- Branding -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="Branding">
            <img src="assets/img/3135715.png" alt="Branding">
            <h4>Branding</h4>
            <p>Define your unique identity.<br>Logo, color scheme & brand voice strategy.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>

        <!-- Strategic Business Consultation -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="Strategic Business Consultation">
            <img src="assets/img/3771496.png" alt="Consultation" class="inimg">
            <h4>Business Consultation</h4>
            <p>Custom strategies to grow your business.<br>Data-driven insights and action plans.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>

        <!-- WhatsApp Marketing -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="WhatsApp Marketing">
            <img src="assets/img/733585.png" alt="WhatsApp Marketing">
            <h4>WhatsApp Marketing</h4>
            <p>Instant reach through messaging campaigns.<br>High open-rate communication strategy.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>

        <!-- PPC Advertising -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="PPC Advertising">
            <img src="assets/img/684908.png" alt="PPC">
            <h4>PPC Advertising</h4>
            "Drive traffic with paid ads.<br>ROI-focused campaign management.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>

        <!-- AI Powered Marketing -->
        <div class="col-md-3 mb-4">
          <div class="package-card" data-package="AI Powered Marketing">
            <img src="assets/img/3039389.png" alt="AI Marketing">
            <h4>AI Marketing</h4>
            <p>Leverage artificial intelligence to automate,<br>personalize and optimize campaigns.</p>
            <div class="tier-buttons">
              <button onclick="showTier(event, 'basic', this)">Basic</button>
              <button onclick="showTier(event, 'standard', this)">Standard</button>
              <button onclick="showTier(event, 'premium', this)">Premium</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Combined Footer -->
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

      <!-- Contact -->
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

  <!-- Get a Quote Popup -->
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
  <script>
  function closePopup() {
    document.getElementById("popupForm").style.display = "none";
  }
</script>
  <!-- Tier Details Popup -->
  <div class="popup-overlay" id="tierPopup">
    <div class="popup-box">
      <span class="close-btn" onclick="closeTierPopup()">×</span>
      <div id="tierPopupContent"></div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Get a Quote Popup Script -->
  <script>
    function openPopup() {
      document.getElementById('popupForm').style.display = 'flex';
    }
   
  </script>

  <!-- Tier Details Popup Script -->
  <script>
    // Updated Tier Descriptions Data with Features and Delivery/Duration
    const tierDetails = {
      "Web Design": {
        basic: {
          features: [
            "Up to 3 pages",
            "Mobile-friendly design",
            "Template-based design",
            "Basic HTML contact form",
            "Social media links",
            "1 revision",
            "Support: Email only"
          ],
          delivery: "9-12 Days"
        },
        standard: {
          features: [
            "Up to 7 pages",
            "Tablet + Mobile responsive",
            "Semi-custom design",
            "Basic backend (e.g., form storage)",
            "Dynamic form (backend save/email)",
            "WordPress CMS integration",
            "Basic SEO optimization",
            "Social media links",
            "Basic database setup (MySQL/MongoDB)",
            "Basic security (form validation)",
            "Hosting (1 year)",
            "2-3 revisions",
            "Support: Email + Chat"
          ],
          delivery: "15-20 Days"
        },
        premium: {
          features: [
            "Up to 15 pages",
            "Full-device support (desktop too)",
            "Fully custom UI/UX design",
            "Full backend (CRUD, admin panel, etc.)",
            "Validated form with backend DB",
            "WordPress or Custom CMS",
            "Admin panel (product/blog/user control)",
            "Advanced SEO with schema, sitemap",
            "Full e-commerce (cart, checkout, orders)",
            "Social media links",
            "Live Chat / WhatsApp integration",
            "Structured + secure DB design",
            "Advanced security (auth, input sanitization)",
            "Domain + Hosting (1 year)",
            "Unlimited revisions (within scope)",
            "Support: Full (Email, Chat, Phone)",
            "Note: No product images or mockups created by DOXA"
          ],
          delivery: "22-25 Days"
        }
      },
     "SEO": {
  "basic": {
    "features": [
      "NAP confirmation & consistency check",
      "Local business profiles (Google, Bing, Yelp)",
      "GPS listing",
      "Keyword research (Home Page)",
      "Meta content creation & implementation",
      "Content optimization",
      "Canonical optimization",
      "Sitemap.xml creation & submission",
      "Google Analytics setup",
      "Google Webmaster Tool optimization",
      "Robots.txt optimization",
     
      "404 & 301 redirects",
      "Mobile responsiveness",
      "Website health analysis",
      "Niche citations (3)",
     
    ],
    "duration": "Monthly"
  },
  "standard": {
    "features": [
      
      "Includes all Basic features",
      "Keyword research (Home Page + 2 Pages)",
      "DMOZ listing",
      "Conversion audit",
      "Google Page Speed optimization (Home Page)",
      "HTML schema implementation (Home Page + 2 Pages)",
      "Geo & KML sitemap integration",
      "Niche citations (5)",
      "Hyper-local citations (5)",
      "Press release distribution (20)",
      "Business profile setup (15)",
     
      "Social bookmarking (10)",
      "Google Local updates with images (4)",
      "Enhanced social media branding (3)",
      "Review & local sites (5)",
      "Blog posting (2)"
    ],
    "duration": "Monthly"
  },
  "premium": {
    "features": [
      
      "Includes all Standard features",
      "Keyword research (Home Page + 5 Pages)",
      "Algorithmic impact analysis",
      "Google Page Speed optimization (Home Page + 2 Pages)",
      "HTML schema implementation (Home Page + 5 Pages)",
      "Niche citations (7)",
      "Hyper-local citations (7)",
      "Business profile setup",
      "Multimedia content distribution (20)",
      "Local classified ad creation & posting (15)",
      "Social bookmarking (15)",
      "Google Local updates with images (8)",
      "Enhanced social media branding (5)",
      "Review & local sites (7)",
      "Blog posting (4)",
      "Adding industry-specific people to FB"
    ],
    "duration": "Monthly"
  }
}
,
      "Neuromarketing": {
        basic: {
          features: [
            "Emotional color mapping",
            "Psychological triggers analysis",
            "Report PDF with suggestions"
          ],
          delivery: "2 Days"
        },
        standard: {
          features: [
            "Eye-tracking based landing page suggestions",
            "Emotional targeting for ads",
            "Website UX behavior analysis"
          ],
          delivery: "5 Days"
        },
        premium: {
          features: [
            "Full Neuromarketing audit",
            "Brain-optimized ad design",
            "Strategy for brand positioning using psychology",
            "Persona mapping"
          ],
          delivery: "7–10 Days"
        }
      },
      "Social Media Handling": {
        basic: {
          features: [
            "5 posts/week on 1 platform",
            "Caption writing",
            "Hashtag strategy",
            "Weekly calendar"
          ],
          duration: "Monthly"
        },
        standard: {
          features: [
            "10 posts/week on 2 platforms (e.g., Instagram + Facebook)",
            "Story templates",
            "Monthly insights report",
            "Ad boosting guidance"
          ],
          duration: "Monthly"
        },
        premium: {
          features: [
            "Daily posts (Incl. Reels, Stories, Carousels)",
            "3+ platforms (Incl. LinkedIn/Twitter)",
            "Influencer collaboration plan",
            "Monthly strategy meeting"
          ],
          duration: "Monthly"
        }
      },
      "Content Creation": {
        basic: {
          features: [
            "4 social media graphic designs",
            "1 blog post (500–800 words)",
            "2 captions"
          ],
          delivery: "3 Days"
        },
        standard: {
          features: [
            "8 graphics",
            "2 blogs (up to 1000 words each)",
            "1 video script",
            "Proofreading and keyword insertion"
          ],
          delivery: "5 Days"
        },
        premium: {
          features: [
            "12+ graphics",
            "4 blog articles",
            "2 video scripts + voiceover",
            "Content calendar + SEO keyword mapping",
            "Content audit"
          ],
          delivery: "7–10 Days"
        }
      },
      "Branding": {
        basic: {
          features: [
            "Logo (2 concepts)",
            "Basic color scheme",
            "Typography selection"
          ],
          delivery: "2 Days"
        },
        standard: {
          features: [
            "Logo + Business card + Letterhead",
            "Brand tone & moodboard",
            "Social profile branding (DP, banners)"
          ],
          delivery: "5 Days"
        },
        premium: {
          features: [
            "Full branding kit (logo, colors, fonts, icons)",
            "Voice & messaging guide",
            "Stationery, packaging mockups",
            "Branding usage guide (PDF)"
          ],
          delivery: "7–10 Days"
        }
      },
      "Strategic Business Consultation": {
        basic: {
          features: [
            "1-hour one-on-one session",
            "SWOT analysis",
            "Summary report (PDF)"
          ],
          delivery: "1 Day"
        },
        standard: {
          features: [
            "2 strategy sessions (1 hour each)",
            "Goal planning template",
            "Basic marketing roadmap"
          ],
          delivery: "3 Days"
        },
        premium: {
          features: [
            "Full business plan review",
            "Weekly mentorship calls (x4)",
            "Sales funnel planning",
            "Custom marketing strategies"
          ],
          delivery: "30 Days"
        }
      },
      "WhatsApp Marketing": {
  "basic": {
    "features": [
      "Bulk message sending (up to 100 contacts/month)",
      "Text & image support",
      "One-time campaign setup",
      "Basic template design",
      "Delivery report summary",
      "Manual contact upload (Excel or CSV)"
    ],
    "duration": "Monthly"
  },
  "standard": {
    "features": [
    
      "Includes all Basic features",
      "Bulk message sending (up to 300 contacts/month)",
      "Multiple campaign support",
      "Interactive message templates (CTA buttons)",
      "Scheduling messages",
      "Contact group segmentation",
      "Basic analytics dashboard",
      "Auto-reply setup"
    ],
    "duration": "Monthly"
  },
  "premium": {
    "features": [
     
      "Includes all Standard features",
      "Bulk message sending (up to 700 contacts/month)",
      "Personalized messaging (Name, Location, etc.)",
      "Advanced analytics & tracking (click/open rate)",
      "Chatbot integration (FAQs, lead capture)",
      "CRM Integration (Optional)",
      "Campaign A/B testing",
      "24/7 support"
    ],
    "duration": "Monthly"
  }
}
,
      "PPC Advertising": {
        basic: {
          features: [
            "Google Ads setup + 1 campaign",
          ],
          duration: "One Time"
        },
        standard: {
          features: [
            "Google + Facebook Ads, A/B testing",
          ],
          duration: "One Time"
        },
        premium: {
          features: [
            "Multi-platform strategy, retargeting, daily optimization",
          ],
          duration: "Monthly"
        }
      },
      "AI Powered Marketing": {
        basic: {
          features: [
            "AI content suggestions & audience targeting",
          ],
          duration: "One Time"
        },
        standard: {
          features: [
            "AI-driven email & content marketing",
          ],
          duration: "One Time"
        },
        premium: {
          features: [
            "Full AI automation, predictive analytics & chatbot integration",
          ],
          duration: "Monthly"
        }
      }
    };

    // Function to Show Tier Details in Popup
    function showTier(event, tier, btn) {
      event.stopPropagation();
      const card = btn.closest('.package-card');
      const service = card.getAttribute('data-package');
      const tierCapitalized = tier.charAt(0).toUpperCase() + tier.slice(1);

      // Generate the features list as HTML
      const featuresList = tierDetails[service][tier].features.map(feature => `<li>${feature}</li>`).join('');
      const deliveryLabel = (service === "SEO" || service === "Social Media Handling" || service === "WhatsApp Marketing" || service === "PPC Advertising" || service === "AI Powered Marketing") ? "Duration" : "Delivery Time";
      const deliveryInfo = tierDetails[service][tier].duration || tierDetails[service][tier].delivery;

      const tierContent = `
        <h2>${tierCapitalized}</h2>
        <p><strong>${service}</strong></p>
        <ul>${featuresList}</ul>
        <p class="delivery-info"><strong>${deliveryLabel}:</strong> ${deliveryInfo}</p>
      `;

      document.getElementById('tierPopupContent').innerHTML = tierContent;
      document.getElementById('tierPopup').style.display = 'flex';
    }

    function closeTierPopup() {
      document.getElementById('tierPopup').style.display = 'none';
    }

    window.showTier = showTier;
    window.closeTierPopup = closeTierPopup;
  </script>

  <!-- Sidebar and Header Scroll Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const menuToggle = document.getElementById('menuToggle');
      const sidebar = document.querySelector('.sidebar');
      const wrapper = document.getElementById('wrapper');
      const header = document.querySelector('header');

      // Function to toggle sidebar and handle scroll
      function toggleSidebar() {
        // Toggle sidebar visibility
        sidebar.classList.toggle('menuon');
        // Toggle wrapper's 3D effect
        wrapper.classList.toggle('menu-open');
        // If page is scrolled, scroll to top
        if (window.scrollY > 0) {
          window.scrollTo({
            top: 0,
            behavior: 'smooth' // Smooth scroll to top
          });
        }
      }

      // Menu toggle click event
      menuToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleSidebar();
      });

      // Close sidebar when clicking outside
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

      // Add scrolled class to header when scrolling
      window.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      });
    });
  </script>
</body>
</html>
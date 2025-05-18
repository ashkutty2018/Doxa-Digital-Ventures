<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>DOXA Digital Ventures</title>
  <!-- Bootstrap CSS -->
  <link href="assets/img/doxa.png" rel="icon" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      line-height: 1.8;
      color: #e0e0e0;
      background: linear-gradient(135deg, #1a1a1a 0%, #2c2c2c 100%);
      margin: 0;
      padding: 0;
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
    }

    /* Background Particles Animation */
    .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
      pointer-events: none;
    }

    .particle {
      position: absolute;
      width: 4px;
      height: 4px;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      animation: float 10s infinite ease-in-out;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0) scale(1); opacity: 0.3; }
      50% { transform: translateY(-100vh) scale(1.5); opacity: 0.8; }
    }

    .container {
      max-width: 900px;
      margin: 60px auto;
      padding: 30px;
      background: rgba(40, 40, 40, 0.9);
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      position: relative;
      z-index: 1;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    h1 {
      font-size: 3rem;
      font-weight: 900;
      text-transform: uppercase;
      color: #fff;
      text-align: center;
      margin-bottom: 10px;
      background: linear-gradient(90deg, #d27707, #ff9800);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: fadeIn 1s ease-in-out;
    }

    h2 {
      font-size: 1.6rem;
      font-weight: 700;
      color: #fff;
      margin-top: 40px;
      margin-bottom: 15px;
      position: relative;
      padding-bottom: 10px;
      border-bottom: 2px solid #d27707;
      animation: slideIn 0.8s ease-in-out;
    }

    p, ul {
      font-size: 1rem;
      color: #b0b0b0;
      margin-bottom: 15px;
      animation: fadeIn 1s ease-in-out;
    }

    ul {
      padding-left: 25px;
      list-style-type: none;
    }

    ul li {
      position: relative;
      padding-left: 25px;
      margin-bottom: 10px;
    }

    ul li:before {
      content: '•';
      position: absolute;
      left: 0;
      color: #d27707;
      font-size: 1.2rem;
    }

    .highlight {
      font-weight: 700;
      color: #ff9800;
      transition: color 0.3s ease;
    }

    .highlight:hover {
      color: #d27707;
    }

    .effective-date {
      font-style: italic;
      color: #888;
      text-align: center;
      margin-bottom: 30px;
      animation: fadeIn 1s ease-in-out;
    }

    .contact-info {
      background: rgba(255, 255, 255, 0.05);
      padding: 25px;
      border-radius: 10px;
      margin-top: 40px;
      box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.1);
      animation: slideIn 0.8s ease-in-out;
    }

    .contact-info p {
      margin: 8px 0;
      color: #b0b0b0;
    }

    .contact-info a {
      color: #ff9800;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .contact-info a:hover {
      color: #d27707;
      text-decoration: underline;
    }

    /* Animations */
    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideIn {
      0% { opacity: 0; transform: translateX(-20px); }
      100% { opacity: 1; transform: translateX(0); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .container {
        margin: 40px 15px;
        padding: 20px;
      }

      h1 {
        font-size: 2.2rem;
      }

      h2 {
        font-size: 1.4rem;
      }

      p, ul {
        font-size: 0.95rem;
      }

      .contact-info {
        padding: 20px;
      }
    }

    @media (max-width: 576px) {
      .container {
        margin: 30px 10px;
        padding: 15px;
      }

      h1 {
        font-size: 1.8rem;
      }

      h2 {
        font-size: 1.2rem;
      }

      p, ul {
        font-size: 0.9rem;
      }

      .contact-info {
        padding: 15px;
      }

      .particle {
        width: 3px;
        height: 3px;
      }
    }
  </style>
</head>
<body>
  <!-- Background Particles -->
  <div class="particles">
    <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
    <div class="particle" style="left: 20%; animation-delay: 2s;"></div>
    <div class="particle" style="left: 30%; animation-delay: 4s;"></div>
    <div class="particle" style="left: 40%; animation-delay: 6s;"></div>
    <div class="particle" style="left: 50%; animation-delay: 1s;"></div>
    <div class="particle" style="left: 60%; animation-delay: 3s;"></div>
    <div class="particle" style="left: 70%; animation-delay: 5s;"></div>
    <div class="particle" style="left: 80%; animation-delay: 7s;"></div>
    <div class="particle" style="left: 90%; animation-delay: 9s;"></div>
  </div>

  <div class="container">
    <h1>Terms and Conditions</h1>
    <p class="effective-date">Effective Date: 28/01/2025</p>

    <p>
      These Terms and Conditions ("Terms") govern the use of services provided by DOXA Digital Ventures, a digital marketing agency operating in Melbourne, Australia. By engaging with our services, you ("Client") agree to these Terms.
    </p>

    <h2>1. Services</h2>
    <p>We provide digital marketing services including but not limited to:</p>
    <ul>
      <li>SEO (Search Engine Optimization)</li>
      <li>PPC (Pay Per Click) advertising</li>
      <li>Social media marketing</li>
      <li>Content creation</li>
      <li>Email marketing</li>
      <li>Branding and strategy</li>
      <li>Website design and analytics</li>
    </ul>
    <p>Details of the specific services to be delivered will be outlined in individual proposals or service agreements.</p>

    <h2>2. Client Obligations</h2>
    <p>The Client agrees to:</p>
    <ul>
      <li>Provide accurate and complete information required for service delivery.</li>
      <li>Grant access to necessary platforms, tools, or accounts (e.g., website, social media).</li>
      <li>Review and approve deliverables in a timely manner.</li>
    </ul>

    <h2>3. Fees and Payment</h2>
    <ul>
      <li>All fees are outlined in our service agreement or quote.</li>
      <li>Payment terms are 50% upfront and 50% upon completion.</li>
      <li>Late payments may incur an interest charge of 2% per month and result in paused services.</li>
    </ul>

    <h2>4. Intellectual Property</h2>
    <ul>
      <li>The Client retains ownership of their brand assets.</li>
      <li>Upon full payment, the Client will own all final deliverables created by DOXA Digital Ventures, unless otherwise agreed in writing.</li>
      <li>We retain the right to showcase work in our portfolio and marketing unless the Client requests confidentiality in writing.</li>
    </ul>

    <h2>5. Confidentiality</h2>
    <p>
      Both parties agree to maintain confidentiality regarding sensitive business, technical, and strategic information obtained during the course of the engagement.
    </p>

    <h2>6. Cancellations and Refunds</h2>
    <ul>
      <li>DOXA Digital Ventures may terminate this agreement at any time with 14 days' written notice.</li>
      <li>Clients may only request termination of the agreement, which must be approved in writing by DOXA Digital Ventures.</li>
      <li>All work completed up to the effective date of termination will be billed accordingly.</li>
      <li>Any refunds are solely at the discretion of DOXA Digital Ventures and will be assessed on a case-by-case basis.</li>
    </ul>

    <h2>7. Limitation of Liability</h2>
    <p>
      To the extent permitted by law, DOXA Digital Ventures shall not be liable for any indirect, incidental, special, or consequential damages, including but not limited to loss of revenue, profits, or data.
    </p>

    <h2>8. Consumer Law Compliance</h2>
    <p>
      These Terms comply with the <span class="highlight">Australian Consumer Law</span>. Nothing in this document excludes or modifies any rights that cannot be excluded under the ACL.
    </p>

    <h2>9. Dispute Resolution</h2>
    <p>
      In the event of a dispute, both parties agree to attempt resolution via mediation before taking legal action. This agreement is governed by the laws of Victoria, Australia.
    </p>

    <h2>10. Changes to Terms</h2>
    <p>
      We may update these Terms at any time. Clients will be notified of material changes and continued use of services constitutes acceptance of the updated Terms.
    </p>

    <h2>Contact</h2>
    <div class="contact-info">
      <p>For any queries regarding these Terms, please contact:</p>
      <p><strong>DOXA Digital Ventures Pty Ltd</strong></p>
      <p><strong>ABN:</strong> 72 684 005 847</p>
      <p><strong>Email:</strong> <a href="mailto:info@doxaconnect.au">info@doxaconnect.au</a></p>
      <p><strong>Phone number:</strong> +61 438139784</p>
    </div>
  </div>

  <!-- Bootstrap JS (optional, for future enhancements) -->
  <script src="assets/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
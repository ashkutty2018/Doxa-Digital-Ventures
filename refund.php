<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Refund Policy - DOXA Digital Ventures</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Fonts -->
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
    <h1>Refund Policy</h1>
    <p class="effective-date">Effective Date: 28/01/2025</p>

    <h2>Introduction</h2>
    <p>
      At DOXA Digital Ventures ("we", "our", "us"), we strive to deliver high-quality digital marketing services that help you achieve your business goals. However, we understand that in certain circumstances, a refund or cancellation may be requested. This Refund Policy outlines the terms under which refunds are provided.
    </p>

    <h2>1. Applicability</h2>
    <p>This policy applies to all services provided by us, including but not limited to:</p>
    <ul>
      <li>SEO and SEM campaigns</li>
      <li>PPC (Pay Per Click) advertising</li>
      <li>Social media marketing</li>
      <li>Content creation</li>
      <li>Email marketing</li>
      <li>Branding and strategy</li>
      <li>Website design and analytics</li>
    </ul>

    <h2>2. Australian Consumer Law</h2>
    <p>
      Nothing in this policy excludes, restricts, or modifies any rights you may have under the <span class="highlight">Australian Consumer Law (ACL)</span>. You are entitled to a refund, repair, or replacement if services:
    </p>
    <ul>
      <li>Are not delivered with due care and skill</li>
      <li>Are not fit for the intended purpose</li>
      <li>Do not match the description or agreed scope</li>
    </ul>

    <h2>3. Refund Eligibility</h2>
    <p>You may be eligible for a partial or full refund if:</p>
    <ul>
      <li>You cancel the service in writing within 48 hours of payment and before any work has commenced.</li>
      <li>A clear and significant failure has occurred on our part to deliver the agreed service.</li>
      <li>You’ve raised a written dispute within 7 days of deliverable receipt and attempts at resolution have failed.</li>
    </ul>

    <h2>4. Non-Refundable Situations</h2>
    <p>Refunds will not be issued if:</p>
    <ul>
      <li>Work has commenced or been delivered as agreed.</li>
      <li>Dissatisfaction is based on subjective preferences after service delivery (e.g., not liking design, copy, or engagement rate).</li>
      <li>The Client failed to provide required access, information, or approvals in a timely manner.</li>
    </ul>

    <h2>5. Cancellation Policy</h2>
    <p>
      Project cancellations must be submitted in writing. Work completed up to the cancellation date will be billed accordingly. Any unspent portion of a prepaid amount (after deducting work already done) may be refunded at our discretion.
    </p>

    <h2>6. Dispute Resolution</h2>
    <p>
      We encourage open communication and will make reasonable efforts to resolve any concerns. If an agreement cannot be reached, the matter may be escalated to external mediation in accordance with Victorian laws.
    </p>

    <h2>7. Contact Us</h2>
    <div class="contact-info">
      <p>If you have questions regarding this Refund Policy or would like to request a refund, please contact:</p>
      <p><strong>DOXA Digital Ventures Pty Ltd</strong></p>
      <p><strong>ABN:</strong> 72 684 005 847</p>
      <p><strong>Email:</strong> <a href="mailto:info@doxaconnect.au">info@doxaconnect.au</a></p>
      <p><strong>Phone number:</strong> +61 438139784</p>
    </div>
  </div>

  <!-- Bootstrap JS (optional, for future enhancements) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdlZxMi5huY5X5f7" crossorigin="anonymous"></script>
</body>
</html>
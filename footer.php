<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>True Jobs – Footer</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

body {
  font-family: 'Poppins', sans-serif;
}

    /* ── FOOTER ─────────────────────────────────────────────── */
footer {
  background: #0f172a;  
  color: #cbd5e1;
  padding: 56px 80px 0;
}

    .footer-top {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      gap: 48px;
      padding-bottom: 48px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
    }

    /* Brand column */
    .footer-brand .logo {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 18px;
    }
    .footer-brand .logo-icon {
      width: 36px;
      height: 36px;
      background: #22c55e;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      font-weight: 800;
      color: #0f172a;
    }
    .footer-brand .logo-text {
      font-size: 18px;
      font-weight: 700;
      color: #f8fafc;
      letter-spacing: -0.3px;
    }
    .footer-brand p {
      font-size: 13px;
      line-height: 1.75;
      color: #94a3b8;
      max-width: 200px;
    }
    .footer-brand .tagline {
      margin-top: 18px;
      font-size: 12.5px;
      line-height: 1.6;
      color: #94a3b8;
    }
    .footer-brand .tagline strong {
      color: #a78bfa;
      font-weight: 600;
    }
    .footer-brand .tagline span {
      color: #f8fafc;
      font-weight: 600;
      font-size: 11px;
      letter-spacing: 0.5px;
      display: block;
    }

    /* Link columns */
    .footer-col h4 {
      font-size: 14px;
      font-weight: 600;
      color: #f8fafc;
      margin-bottom: 20px;
      letter-spacing: 0.2px;
    }
    .footer-col ul { list-style: none; }
    .footer-col ul li { margin-bottom: 12px; }
    .footer-col ul li a {
      font-size: 13.5px;
      color: #94a3b8;
      text-decoration: none;
      transition: color 0.2s;
    }
    .footer-col ul li a:hover { color: #22c55e; }

    /* Connect column */
    .footer-connect h4 {
      font-size: 14px;
      font-weight: 600;
      color: #f8fafc;
      margin-bottom: 20px;
    }
    .footer-connect .phone {
      font-size: 14px;
      color: #cbd5e1;
      margin-bottom: 20px;
      font-weight: 500;
    }
    .footer-connect .socials {
      display: flex;
      gap: 14px;
    }
    .footer-connect .socials a {
      width: 36px;
      height: 36px;
      border-radius: 8px;
      background: rgba(255,255,255,0.07);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #cbd5e1;
      text-decoration: none;
      font-size: 17px;
      transition: background 0.2s, color 0.2s;
    }
    .footer-connect .socials a:hover {
      background: #22c55e;
      color: #0f172a;
    }

    /* Bottom bar */
    .footer-bottom {
      padding: 18px 0;
      text-align: center;
      font-size: 12.5px;
      color: #475569;
    }

    /* Responsive */
    @media (max-width: 900px) {
      footer { padding: 40px 32px 0; }
      .footer-top { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 560px) {
      .footer-top { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<footer>
  <div class="footer-top">

    <!-- Brand -->
    <div class="footer-brand">
      <div class="logo">
        <div class="logo-icon">✓</div>
        <div class="logo-text">True Jobs</div>
      </div>
      <p>India's inclusive job portal connecting talent with opportunity.</p>
      <p class="tagline" style="margin-top:18px">
        <strong>True Jobs</strong> is one of the products of<br>
        <span>SMART GLOBAL SOLUTIONS</span>
      </p>
    </div>

    <!-- Quick Links -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Browse Jobs</a></li>
        <li><a href="#">Post a Job</a></li>
        <li><a href="#">Pricing Plans</a></li>
      </ul>
    </div>

    <!-- Legal -->
    <div class="footer-col">
      <h4>Legal</h4>
      <ul>
        <li><a href="#">Terms &amp; Conditions</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Support &amp; FAQs</a></li>
      </ul>
    </div>

    <!-- Connect -->
    <div class="footer-connect">
      <h4>Connect With Us</h4>
      <p class="phone">+91 98765 43210</p>
      <div class="socials">
        <a href="#" title="Facebook">
          <!-- Facebook icon -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
          </svg>
        </a>
        <a href="#" title="Instagram">
          <!-- Instagram icon -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
          </svg>
        </a>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    © True Jobs. All Rights Reserved.
  </div>
</footer>

</body>
</html>
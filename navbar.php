<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>True Jobs – Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Poppins', sans-serif; }

    /* ══════ NAVBAR ══════ */
    .navbar-wrap {
      background: #ffffff;
      border-bottom: 2.5px solid #6A0DAD;
      padding: 0 40px;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    /* Logo — purple border pill */
    .nav-logo {
      display: flex;
      align-items: center;
      gap: 6px;
      text-decoration: none;
      border: 2px solid #6A0DAD;
      border-radius: 50px;
      padding: 5px 14px 5px 8px;
    }
    .nav-logo .logo-icon { color: #28a745; font-size: 16px; line-height: 1; }
    .nav-logo .logo-text {
      font-size: 11.5px;
      font-weight: 800;
      color: #1a1a2e;
      letter-spacing: 1.4px;
      text-transform: uppercase;
    }

    /* Right nav links */
    .nav-right {
      display: flex;
      align-items: center;
      gap: 40px;
    }

    .nav-link-item {
      font-size: 14px;
      font-weight: 500;
      color: #1a1a2e;
      text-decoration: none;
      white-space: nowrap;
      transition: color 0.18s;
    }
    .nav-link-item:hover { color: #6A0DAD; }

    /* Sign In As dropdown trigger */
    .signin-wrap { position: relative; }
    .signin-trigger {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 14px;
      font-weight: 500;
      color: #1a1a2e;
      cursor: pointer;
      text-decoration: none;
      white-space: nowrap;
      background: none;
      border: none;
      font-family: 'Poppins', sans-serif;
      padding: 0;
    }
    .signin-trigger i { font-size: 11px; }
    .signin-trigger:hover { color: #6A0DAD; }

    /* Dropdown */
    .signin-dropdown {
      position: absolute;
      top: calc(100% + 10px);
      right: 0;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.12);
      min-width: 155px;
      display: none;
      z-index: 9999;
      border: 1px solid #f0f0f0;
      overflow: hidden;
    }
    .signin-dropdown.open {
      display: block;
      animation: fadeDown 0.18s ease;
    }
    @keyframes fadeDown {
      from { opacity: 0; transform: translateY(-6px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .signin-dropdown a {
      display: block;
      padding: 12px 20px;
      font-size: 13.5px;
      font-weight: 500;
      color: #333;
      text-decoration: none;
      transition: background 0.14s;
    }
    .signin-dropdown a:hover { background: #f5eaff; color: #6A0DAD; }

    /* Start Hiring button */
    .btn-start-hiring {
      background: #6A0DAD;
      color: #fff;
      font-size: 14px;
      font-weight: 600;
      padding: 10px 22px;
      border: none;
      border-radius: 7px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      white-space: nowrap;
      font-family: 'Poppins', sans-serif;
      transition: background 0.2s;
    }
    .btn-start-hiring:hover { background: #5a0b90; color: #fff; }

    /* Mobile hamburger */
    .nav-tog {
      display: none;
      background: none;
      border: none;
      font-size: 26px;
      color: #1a1a2e;
      cursor: pointer;
      padding: 4px;
    }

    /* Mobile drawer */
    .mob-nav {
      display: none;
      flex-direction: column;
      background: #fff;
      padding: 14px 20px;
      border-bottom: 1px solid #eee;
    }
    .mob-nav.open { display: flex; }
    .mob-nav a {
      font-size: 14px;
      font-weight: 500;
      color: #1a1a2e;
      text-decoration: none;
      padding: 12px 0;
      border-bottom: 1px solid #f0f0f5;
    }
    .mob-nav a:last-child { border-bottom: none; color: #6A0DAD; font-weight: 700; }

    /* ══ RESPONSIVE ══ */
    @media (max-width: 991px) {
      .navbar-wrap { padding: 0 20px; }
      .nav-right { display: none; }
      .nav-tog { display: block; }
    }
    @media (max-width: 480px) {
      .navbar-wrap { padding: 0 14px; }
      .nav-logo .logo-text { font-size: 10px; letter-spacing: 1px; }
    }
  </style>
</head>
<body>

  <!-- ══════ NAVBAR ══════ -->
  <nav class="navbar-wrap">
    <!-- Logo -->
    <a href="#" class="nav-logo">
      <i class="bi bi-check-circle-fill logo-icon"></i>
      <span class="logo-text">True Jobs</span>
    </a>

    <!-- Desktop Right -->
    <div class="nav-right">
      <a href="#" class="nav-link-item">Pricing Plans</a>

      <div class="signin-wrap">
        <button class="signin-trigger" onclick="toggleSignin(event)">
          Sign In As <i class="bi bi-chevron-down"></i>
        </button>
        <div class="signin-dropdown" id="signinDropdown">
          <a href="#">Job Seeker</a>
          <a href="#">Employer</a>
          <a href="#">Admin</a>
        </div>
      </div>

      <a href="#" class="btn-start-hiring">Start Hiring</a>
    </div>

    <!-- Mobile Hamburger -->
    <button class="nav-tog" onclick="toggleMob()">
      <i class="bi bi-list" id="togIcon"></i>
    </button>
  </nav>

  <!-- Mobile Drawer -->
  <div class="mob-nav" id="mobNav">
    <a href="#">Pricing Plans</a>
    <a href="#">Sign In As Job Seeker</a>
    <a href="#">Sign In As Employer</a>
    <a href="#">Start Hiring</a>
  </div>

  <script>
    function toggleSignin(e) {
      e.preventDefault();
      e.stopPropagation();
      document.getElementById('signinDropdown').classList.toggle('open');
    }
    document.addEventListener('click', function(e) {
      const dd = document.getElementById('signinDropdown');
      if (dd && !e.target.closest('.signin-wrap')) {
        dd.classList.remove('open');
      }
    });
    function toggleMob() {
      const nav  = document.getElementById('mobNav');
      const icon = document.getElementById('togIcon');
      nav.classList.toggle('open');
      icon.className = nav.classList.contains('open') ? 'bi bi-x-lg' : 'bi bi-list';
    }
  </script>
</body>
</html>
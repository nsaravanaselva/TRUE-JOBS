<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>True Jobs - Login / Register</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --purple-deep:   #3a0060;
      --purple-mid:    #6A0DAD;
      --purple-panel:  #4a0070;
      --purple-darker: #2e0050;
      --purple-grad:   linear-gradient(180deg, #4a0070 0%, #2e0050 100%);
      --green-main:    #28a745;
      --green-logo:    #2ecc71;
      --text-dark:     #1a1a1a;
      --text-muted:    #555;
      --border-col:    #ccc;
      --input-bg:      rgba(255,255,255,0.08);
      --input-border:  rgba(255,255,255,0.25);
    }

    html, body {
      height: 100%;
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }

    /* ───── LAYOUT ───── */
    .page-wrapper {
      display: flex;
      min-height: 100vh;
    }

    /* ── LEFT PANEL ── */
    .left-panel {
      flex: 0 0 48%;
      background: #fff;
      display: flex;
      flex-direction: column;
      padding: 28px 48px 48px;
      position: relative;
    }

    /* ── RIGHT PANEL ── */
    .right-panel {
      flex: 1;
      background: linear-gradient(180deg, #4a0070 0%, #2e0050 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 80px 40px 48px;
      position: relative;
      min-height: 100vh;
    }

    /* ───── NAVBAR (inside left panel) ───── */
    .logo-wrap {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .logo-wrap .logo-box {
      border: 2px solid var(--purple-mid);
      border-radius: 50px;
      padding: 4px 14px;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .logo-wrap .logo-box .logo-icon {
      color: var(--green-main);
      font-size: 18px;
    }
    .logo-wrap .logo-box .logo-text {
      font-size: 13px;
      font-weight: 700;
      color: var(--purple-mid);
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    /* ───── TOP NAV (right panel) ───── */
    .right-top-nav {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 16px;
      padding: 18px 28px;
      background: transparent;
    }
    .right-top-nav .nav-label {
      color: rgba(255,255,255,0.80);
      font-size: 12.5px;
      font-weight: 400;
    }
    .btn-hire {
      border: 2px solid #fff;
      background: transparent;
      color: #fff;
      font-size: 13px;
      font-weight: 700;
      padding: 8px 22px;
      border-radius: 6px;
      letter-spacing: 0.2px;
      cursor: pointer;
      transition: background 0.22s, color 0.22s;
    }
    .btn-hire:hover {
      background: #fff;
      color: var(--purple-panel);
    }

    /* ───── HERO TEXT ───── */
    .hero-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding-top: 40px;
    }

    .hero-title {
      font-size: clamp(2.8rem, 5vw, 4.2rem);
      font-weight: 800;
      line-height: 1.05;
      margin-bottom: 32px;
      letter-spacing: -1px;
    }
    .hero-title .word-true  { color: var(--purple-mid); }
    .hero-title .word-jobs  { color: var(--green-main); }

    /* Sub-text + illustration row */
    .hero-body-row {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      gap: 12px;
    }

    .hero-sub {
      font-size: 13.5px;
      color: var(--text-muted);
      line-height: 1.75;
      flex: 1;
    }

    /* ───── ILLUSTRATION ───── */
    .illustration-wrap {
      flex-shrink: 0;
      display: flex;
      align-items: flex-end;
    }
    .illustration-wrap img {
      width: 158px;
      height: auto;
      object-fit: contain;
      filter: drop-shadow(2px 6px 14px rgba(100,0,160,0.13));
    }

    .hero-divider {
      border: none;
      border-top: 2px solid #c9a0e8;
      width: 180px;
      margin: 28px 0 16px;
    }

    .hero-tagline {
      font-size: 13px;
      color: var(--purple-mid);
      font-weight: 500;
      letter-spacing: 0.1px;
    }

    /* ───── LOGIN CARD ───── */
    .login-card {
      background: transparent;
      border: none;
      backdrop-filter: none;
      border-radius: 0;
      padding: 0;
      width: 100%;
      max-width: 380px;
      box-shadow: none;
    }

    .login-card h2 {
      font-size: 21px;
      font-weight: 600;
      color: #fff;
      text-align: center;
      margin-bottom: 10px;
      letter-spacing: 0.2px;
    }

    .login-card .otp-note {
      font-size: 13px;
      color: rgba(255,255,255,0.80);
      text-align: center;
      margin-bottom: 26px;
      font-weight: 400;
    }

    /* Phone input group */
    .phone-group {
      display: flex;
      border: 1.5px solid rgba(255,255,255,0.35);
      border-radius: 7px;
      overflow: hidden;
      background: rgba(255,255,255,0.07);
      margin-bottom: 18px;
    }

    .country-select {
      display: flex;
      align-items: center;
      gap: 5px;
      padding: 0 12px;
      border-right: 1.5px solid rgba(255,255,255,0.25);
      cursor: pointer;
      background: transparent;
      position: relative;
      min-width: 80px;
    }
    .country-flag { font-size: 17px; }
    .country-code {
      font-size: 13px;
      font-weight: 600;
      color: #fff;
    }
    .country-caret {
      font-size: 9px;
      color: rgba(255,255,255,0.7);
    }

    /* Hidden native select */
    .country-select select {
      position: absolute;
      inset: 0;
      opacity: 0;
      cursor: pointer;
      width: 100%;
    }

    .phone-input {
      flex: 1;
      border: none;
      outline: none;
      padding: 14px 14px;
      font-size: 14px;
      font-family: 'Poppins', sans-serif;
      color: #fff;
      background: transparent;
    }
    .phone-input::placeholder { color: rgba(255,255,255,0.45); }

    /* Continue button */
    .btn-continue {
      width: 100%;
      padding: 14px;
      background: #fff;
      color: #6A0DAD;
      font-size: 15px;
      font-weight: 700;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      letter-spacing: 0.3px;
      transition: background 0.2s, color 0.2s, transform 0.15s;
    }
    .btn-continue:hover {
      background: #f5eaff;
      transform: translateY(-1px);
    }
    .btn-continue:active {
      transform: translateY(0);
    }

    /* Terms */
    .terms-text {
      font-size: 11.5px;
      color: rgba(255,255,255,0.55);
      text-align: center;
      margin-top: 18px;
      line-height: 1.75;
    }
    .terms-text a {
      color: rgba(255,255,255,0.85);
      text-decoration: underline;
      text-underline-offset: 2px;
    }

    /* OTP Step */
    .otp-section { display: none; }
    .otp-inputs {
      display: flex;
      gap: 10px;
      justify-content: center;
      margin-bottom: 20px;
    }
    .otp-box {
      width: 48px;
      height: 52px;
      text-align: center;
      font-size: 20px;
      font-weight: 700;
      border: 2px solid rgba(255,255,255,0.4);
      border-radius: 8px;
      background: rgba(255,255,255,0.12);
      color: #fff;
      outline: none;
      transition: border 0.2s;
    }
    .otp-box:focus { border-color: #fff; }

    .resend-link {
      background: none;
      border: none;
      color: rgba(255,255,255,0.75);
      font-size: 12px;
      cursor: pointer;
      text-decoration: underline;
      display: block;
      text-align: center;
      margin-bottom: 20px;
    }

    .back-btn {
      background: none;
      border: none;
      color: rgba(255,255,255,0.7);
      font-size: 13px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 5px;
      margin-bottom: 20px;
    }
    .back-btn:hover { color: #fff; }

    /* ── Success toast ── */
    .toast-success {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background: #28a745;
      color: #fff;
      padding: 14px 24px;
      border-radius: 10px;
      font-size: 14px;
      font-weight: 600;
      display: none;
      z-index: 999;
      box-shadow: 0 8px 24px rgba(0,0,0,0.3);
    }

    /* ═══════════════════════════════
       RESPONSIVE
    ═══════════════════════════════ */

    /* Tablet  ≤ 991px */
    @media (max-width: 991.98px) {
      .page-wrapper { flex-direction: column; }

      .left-panel {
        flex: unset;
        padding: 24px 28px 36px;
      }

      .illustration-wrap img { width: 125px; }

      .right-panel {
        padding: 70px 36px 56px;
        min-height: 70vh;
      }
      .login-card {
        max-width: 100%;
      }
    }

    /* Mobile ≤ 575px */
    @media (max-width: 575.98px) {
      .left-panel { padding: 20px 22px 28px; }

      .hero-section { padding-top: 32px; }

      .hero-title {
        font-size: 3rem;
        margin-bottom: 24px;
      }

      .hero-sub { font-size: 13px; }

      .illustration-wrap img { width: 105px; }

      .hero-divider { width: 150px; margin: 22px 0 14px; }

      .hero-tagline { font-size: 12.5px; }

      .right-top-nav .nav-label { display: none; }
      .btn-hire { font-size: 11px; padding: 6px 14px; }

      .right-panel { padding: 65px 24px 48px; min-height: 70vh; }

      .otp-box { width: 40px; height: 44px; font-size: 17px; }
    }

    /* ── Entry animations ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .anim-1 { animation: fadeUp 0.6s ease both; }
    .anim-2 { animation: fadeUp 0.6s 0.15s ease both; }
    .anim-3 { animation: fadeUp 0.6s 0.3s ease both; }
    .anim-4 { animation: fadeUp 0.6s 0.45s ease both; }
    .card-anim { animation: fadeUp 0.7s 0.2s ease both; }
  </style>
</head>
<body>

<div class="page-wrapper">

  <!-- ══════════ LEFT PANEL ══════════ -->
  <div class="left-panel">

    <!-- Logo -->
    <div class="logo-wrap anim-1">
      <div class="logo-box">
        <i class="bi bi-check-circle-fill logo-icon"></i>
        <span class="logo-text">True Jobs</span>
      </div>
    </div>

    <!-- Hero -->
    <div class="hero-section">
      <h1 class="hero-title anim-2">
        <span class="word-true">True</span> <span class="word-jobs">Jobs</span>
      </h1>

      <!-- Sub-text + Illustration side by side (Figma layout) -->
      <div class="hero-body-row anim-3">
        <p class="hero-sub">
          Explore Opportunities with a<br>
          Trusted Network.
          <br><br>
          Find Jobs Across Industries<br>
          &nbsp;&nbsp;&nbsp;&mdash; All In One Place.
        </p>

        <!-- Illustration -->
        <div class="illustration-wrap">
          <img src="images/hiring.jpg" alt="Hiring Illustration"/>
        </div>
      </div>

      <hr class="hero-divider anim-3"/>

      <p class="hero-tagline anim-4">
        True Jobs. True Growth. Every Dream, Within Reach.
      </p>
    </div>

  </div><!-- /left-panel -->

  <!-- ══════════ RIGHT PANEL ══════════ -->
  <div class="right-panel">

    <!-- Top nav -->
    <div class="right-top-nav">
      <span class="nav-label">Seeking passionate professionals</span>
      <button class="btn-hire">Hire Candidates</button>
    </div>

    <!-- Login Card -->
    <div class="login-card card-anim">

      <!-- ── STEP 1 : Phone ── -->
      <div id="phoneSection">
        <h2>Login/Register</h2>
        <p class="otp-note">OTP (One Time Password) will be sent to this number</p>

        <div class="phone-group">
          <div class="country-select" id="countrySelect">
            <span class="country-flag" id="selectedFlag">🇮🇳</span>
            <span class="country-code" id="selectedCode">+91</span>
            <span class="country-caret">▼</span>
            <select id="countryDropdown" aria-label="Select country code">
              <option value="+91" data-flag="🇮🇳">India (+91)</option>
              <option value="+1"  data-flag="🇺🇸">USA (+1)</option>
              <option value="+44" data-flag="🇬🇧">UK (+44)</option>
              <option value="+971" data-flag="🇦🇪">UAE (+971)</option>
              <option value="+61" data-flag="🇦🇺">Australia (+61)</option>
              <option value="+49" data-flag="🇩🇪">Germany (+49)</option>
              <option value="+65" data-flag="🇸🇬">Singapore (+65)</option>
              <option value="+81" data-flag="🇯🇵">Japan (+81)</option>
            </select>
          </div>
          <input
            type="tel"
            class="phone-input"
            id="phoneInput"
            placeholder="Enter your number"
            maxlength="15"
            inputmode="numeric"
            aria-label="Phone number"
          />
        </div>

        <button class="btn-continue" id="continueBtn" onclick="sendOtp()">Continue</button>

        <p class="terms-text">
          By clicking Continue, you agree to True Jobs
          <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy Policy.</a>
        </p>
      </div>

      <!-- ── STEP 2 : OTP ── -->
      <div id="otpSection" class="otp-section">
        <button class="back-btn" onclick="goBack()">
          <i class="bi bi-arrow-left"></i> Back
        </button>
        <h2>Verify OTP</h2>
        <p class="otp-note" id="otpSentMsg">OTP sent to <span id="otpPhone"></span></p>

        <div class="otp-inputs">
          <input class="otp-box" maxlength="1" inputmode="numeric" id="o1" aria-label="OTP digit 1"/>
          <input class="otp-box" maxlength="1" inputmode="numeric" id="o2" aria-label="OTP digit 2"/>
          <input class="otp-box" maxlength="1" inputmode="numeric" id="o3" aria-label="OTP digit 3"/>
          <input class="otp-box" maxlength="1" inputmode="numeric" id="o4" aria-label="OTP digit 4"/>
          <input class="otp-box" maxlength="1" inputmode="numeric" id="o5" aria-label="OTP digit 5"/>
          <input class="otp-box" maxlength="1" inputmode="numeric" id="o6" aria-label="OTP digit 6"/>
        </div>

        <button class="resend-link" id="resendBtn" onclick="resendOtp()" disabled>
          Resend OTP (<span id="timer">30</span>s)
        </button>

        <button class="btn-continue" onclick="verifyOtp()">Verify &amp; Login</button>

        <p class="terms-text">
          By clicking Verify, you agree to True Jobs
          <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy Policy.</a>
        </p>
      </div>

    </div><!-- /login-card -->

  </div><!-- /right-panel -->

</div><!-- /page-wrapper -->

<div class="toast-success" id="toast">
  <i class="bi bi-check-circle-fill me-2"></i><span id="toastMsg"></span>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  /* ── Country selector ── */
  const dropdown = document.getElementById('countryDropdown');
  dropdown.addEventListener('change', () => {
    const opt = dropdown.options[dropdown.selectedIndex];
    document.getElementById('selectedFlag').textContent = opt.dataset.flag;
    document.getElementById('selectedCode').textContent = dropdown.value;
  });

  /* ── Phone number: digits only ── */
  document.getElementById('phoneInput').addEventListener('input', function () {
    this.value = this.value.replace(/\D/g, '');
  });

  /* ── Send OTP ── */
  function sendOtp() {
    const phone = document.getElementById('phoneInput').value.trim();
    if (!phone || phone.length < 7) {
      shakeInput();
      return;
    }
    document.getElementById('otpPhone').textContent =
      document.getElementById('selectedCode').textContent + ' ' + phone;

    document.getElementById('phoneSection').style.display = 'none';
    document.getElementById('otpSection').style.display   = 'block';

    startTimer();
    document.getElementById('o1').focus();
    showToast('OTP sent successfully!');
  }

  /* ── Go back ── */
  function goBack() {
    document.getElementById('otpSection').style.display   = 'none';
    document.getElementById('phoneSection').style.display = 'block';
    clearOtp();
    clearInterval(timerInterval);
  }

  /* ── Verify OTP ── */
  function verifyOtp() {
    const otp = ['o1','o2','o3','o4','o5','o6'].map(id => document.getElementById(id).value).join('');
    if (otp.length < 6) { shakeotp(); return; }
    showToast('Login Successful! Welcome to True Jobs 🎉');
    setTimeout(() => {
      document.getElementById('otpSection').style.display   = 'none';
      document.getElementById('phoneSection').style.display = 'block';
      document.getElementById('phoneInput').value = '';
      clearOtp();
    }, 2000);
  }

  /* ── OTP auto-advance ── */
  document.querySelectorAll('.otp-box').forEach((box, i, boxes) => {
    box.addEventListener('input', () => {
      box.value = box.value.replace(/\D/g, '');
      if (box.value && i < boxes.length - 1) boxes[i + 1].focus();
    });
    box.addEventListener('keydown', e => {
      if (e.key === 'Backspace' && !box.value && i > 0) boxes[i - 1].focus();
    });
  });

  function clearOtp() {
    document.querySelectorAll('.otp-box').forEach(b => b.value = '');
  }

  /* ── Timer ── */
  let timerInterval;
  function startTimer() {
    let sec = 30;
    const resendBtn = document.getElementById('resendBtn');
    const timerEl  = document.getElementById('timer');
    resendBtn.disabled = true;
    timerEl.textContent = sec;
    clearInterval(timerInterval);
    timerInterval = setInterval(() => {
      sec--;
      timerEl.textContent = sec;
      if (sec <= 0) {
        clearInterval(timerInterval);
        resendBtn.disabled = false;
        resendBtn.textContent = 'Resend OTP';
      }
    }, 1000);
  }

  function resendOtp() {
    clearOtp();
    startTimer();
    document.getElementById('resendBtn').innerHTML = 'Resend OTP (<span id="timer">30</span>s)';
    showToast('OTP resent!');
  }

  /* ── Toast ── */
  function showToast(msg) {
    const t = document.getElementById('toast');
    document.getElementById('toastMsg').textContent = msg;
    t.style.display = 'block';
    setTimeout(() => t.style.display = 'none', 3000);
  }

  /* ── Shake animation ── */
  function shakeInput() {
    const el = document.querySelector('.phone-group');
    el.style.animation = 'none';
    el.offsetHeight;
    el.style.animation = 'shake 0.4s ease';
  }
  function shakeotp() {
    const el = document.querySelector('.otp-inputs');
    el.style.animation = 'none';
    el.offsetHeight;
    el.style.animation = 'shake 0.4s ease';
  }
</script>

<style>
  @keyframes shake {
    0%,100%{transform:translateX(0)}
    20%{transform:translateX(-8px)}
    40%{transform:translateX(8px)}
    60%{transform:translateX(-6px)}
    80%{transform:translateX(6px)}
  }
</style>

</body>
</html>
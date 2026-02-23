<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>True Jobs – Profile Setup</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --purple-dark:  #2e0050;
      --purple-mid:   #4a0070;
      --purple-light: #6A0DAD;
      --green-main:   #28a745;
      --white:        #ffffff;
      --input-border: #c8c8d0;
      --label-color:  #888;
      --text-dark:    #1a1a1a;
      --text-muted:   #666;
    }

    html, body {
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(160deg, #4a0070 0%, #2e0050 55%, #1a0035 100%);
      overflow-x: hidden;
    }

    /* ══════ NAVBAR ══════ */
    .top-navbar {
      display: flex;
      align-items: center;
      gap: 22px;
      padding: 18px 40px;
      background: transparent;
    }

    .logo-box {
      display: flex;
      align-items: center;
      gap: 7px;
      border: 2px solid var(--white);
      border-radius: 50px;
      padding: 5px 16px;
      text-decoration: none;
    }
    .logo-box .logo-icon { color: var(--green-main); font-size: 17px; }
    .logo-box .logo-text {
      font-size: 12px;
      font-weight: 700;
      color: var(--white);
      letter-spacing: 1.2px;
      text-transform: uppercase;
    }

    .navbar-title {
      font-size: 22px;
      font-weight: 700;
      color: var(--white);
      letter-spacing: 0.2px;
    }

    /* ══════ STEPPER ══════ */
    .stepper-wrap {
      padding: 0 40px;
      margin-bottom: 32px;
    }

    .steps-row {
      display: flex;
      align-items: center;
      gap: 0;
      flex-wrap: wrap;
      row-gap: 8px;
    }

    .step-item {
      font-size: 12.5px;
      font-weight: 500;
      color: rgba(255,255,255,0.55);
      white-space: nowrap;
      cursor: pointer;
      padding: 4px 10px 4px 0;
      transition: color 0.2s;
      position: relative;
    }
    .step-item.active {
      color: #fff;
      font-weight: 600;
    }
    .step-item + .step-item::before {
      content: '';
      display: inline-block;
      width: 1px;
      height: 12px;
      background: rgba(255,255,255,0.25);
      margin-right: 10px;
      vertical-align: middle;
    }

    /* Progress bar */
    .progress-wrap {
      margin-top: 10px;
      height: 5px;
      background: rgba(255,255,255,0.18);
      border-radius: 10px;
      overflow: hidden;
    }
    .progress-fill {
      height: 100%;
      background: linear-gradient(90deg, #9b59b6, #6A0DAD);
      border-radius: 10px;
      transition: width 0.5s cubic-bezier(.4,0,.2,1);
    }

    /* ══════ FORM CARD ══════ */
    .form-card {
      background: #fff;
      border-radius: 16px;
      padding: 36px 40px 40px;
      margin: 0 40px 48px;
      box-shadow: 0 24px 64px rgba(0,0,0,0.25);
      animation: slideUp 0.4s ease both;
    }

    @keyframes slideUp {
      from { opacity: 0; transform: translateY(22px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .form-card-title {
      font-size: 20px;
      font-weight: 700;
      color: var(--purple-light);
      margin-bottom: 28px;
      letter-spacing: 0.1px;
    }

    /* ══════ FLOATING LABEL FIELDS ══════ */
    .field-group {
      position: relative;
      margin-bottom: 24px;
    }

    .field-group label {
      position: absolute;
      top: -9px;
      left: 13px;
      font-size: 11.5px;
      font-weight: 500;
      color: var(--label-color);
      background: #fff;
      padding: 0 4px;
      z-index: 1;
      letter-spacing: 0.2px;
    }

    .field-group .form-control,
    .field-group .form-select {
      width: 100%;
      border: 1.5px solid var(--input-border);
      border-radius: 8px;
      padding: 13px 16px;
      font-size: 14px;
      font-family: 'Poppins', sans-serif;
      color: var(--text-dark);
      outline: none;
      transition: border-color 0.2s, box-shadow 0.2s;
      background: #fff;
      appearance: none;
      -webkit-appearance: none;
    }

    .field-group .form-control:focus,
    .field-group .form-select:focus {
      border-color: var(--purple-light);
      box-shadow: 0 0 0 3px rgba(106,13,173,0.08);
    }

    .field-group .form-control::placeholder { color: #aaa; }
    .field-group .form-select { color: #aaa; }
    .field-group .form-select.selected { color: var(--text-dark); }

    /* Custom caret for select */
    .select-wrap { position: relative; }
    .select-wrap .caret-icon {
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--purple-light);
      font-size: 14px;
      pointer-events: none;
    }

    /* Date of Birth field */
    .dob-wrap { position: relative; }
    .dob-input { padding-right: 42px !important; cursor: pointer; }
    .dob-input::-webkit-calendar-picker-indicator {
      opacity: 0; position: absolute; right: 0; width: 40px; height: 100%; cursor: pointer;
    }
    .dob-cal-icon {
      position: absolute; right: 13px; top: 50%; transform: translateY(-50%);
      color: var(--purple-light); font-size: 17px; pointer-events: none;
    }

    #step1 .row { margin-bottom: 0; }
    #step1 .row + .row { margin-top: 0; }

    /* ══════ NEXT BUTTON ══════ */
    .btn-next {
      background: var(--purple-light);
      color: #fff;
      font-size: 15px;
      font-weight: 600;
      padding: 12px 48px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      letter-spacing: 0.3px;
      transition: background 0.22s, transform 0.15s, box-shadow 0.2s;
      float: right;
    }
    .btn-next:hover {
      background: #5a0b90;
      transform: translateY(-1px);
      box-shadow: 0 6px 20px rgba(106,13,173,0.3);
    }
    .btn-next:active { transform: translateY(0); }

    .btn-prev {
      background: transparent;
      color: var(--purple-light);
      font-size: 14px;
      font-weight: 600;
      padding: 12px 28px;
      border: 2px solid var(--purple-light);
      border-radius: 8px;
      cursor: pointer;
      letter-spacing: 0.2px;
      transition: background 0.2s, color 0.2s;
    }
    .btn-prev:hover { background: var(--purple-light); color: #fff; }

    .btn-footer {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      gap: 12px;
      margin-top: 12px;
      padding-top: 20px;
      border-top: 1px solid #f0f0f5;
      clear: both;
    }

    /* ══════ STEP PANELS ══════ */
    .step-panel { display: none; }
    .step-panel.active { display: block; animation: slideUp 0.35s ease both; }

    /* ══════ JOB ROLE SEARCH (Step 3) ══════ */
    .jobrole-search-wrap {
      position: relative;
    }
    .jobrole-search-input {
      padding-right: 42px !important;
    }
    .jobrole-search-icon {
      position: absolute; right: 14px; top: 50%; transform: translateY(-50%);
      color: #aaa; font-size: 16px; pointer-events: none;
    }
    .jobrole-info {
      font-size: 12.5px; color: var(--text-muted); margin-top: -12px;
      margin-bottom: 18px; display: flex; align-items: center; gap: 6px;
    }
    .jobrole-info i { color: var(--purple-light); font-size: 14px; }

    .jobrole-dropdown {
      border: 1.5px solid var(--input-border); border-radius: 8px;
      background: #fff; max-height: 200px; overflow-y: auto;
      margin-top: -10px; margin-bottom: 16px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }
    .jobrole-dropdown-item {
      padding: 11px 16px; font-size: 13.5px; color: var(--text-dark);
      cursor: pointer; transition: background 0.15s;
      font-family: 'Poppins', sans-serif;
    }
    .jobrole-dropdown-item:hover { background: #f5eaff; color: var(--purple-light); }
    .jobrole-dropdown-item.disabled { color: #bbb; cursor: not-allowed; }
    .jobrole-dropdown-item.disabled:hover { background: #fff; color: #bbb; }

    .jobrole-tags-area {
      background: #f5f5f5; border-radius: 8px; min-height: 52px;
      padding: 12px 14px; display: flex; flex-wrap: wrap; gap: 10px;
      margin-bottom: 8px;
    }
    .jobrole-tag {
      display: inline-flex; align-items: center; gap: 8px;
      border: 1.5px solid var(--purple-light); border-radius: 50px;
      padding: 5px 14px; font-size: 13px; font-weight: 500;
      color: var(--purple-light); background: #fff;
      font-family: 'Poppins', sans-serif;
    }
    .jobrole-tag .jtag-remove {
      cursor: pointer; font-size: 13px; font-weight: 700;
      color: var(--purple-light); line-height: 1;
      transition: opacity 0.15s;
    }
    .jobrole-tag .jtag-remove:hover { opacity: 0.6; }

    /* ══════ SKILLS / TAGS (Step 4) ══════ */
    .tags-wrap {
      display: flex; flex-wrap: wrap; gap: 8px; padding: 12px;
      border: 1.5px solid var(--input-border); border-radius: 8px;
      min-height: 52px; cursor: text;
    }
    .tags-wrap:focus-within { border-color: var(--purple-light); }
    .tag-item {
      background: #f0e6ff; color: var(--purple-light); font-size: 12px;
      font-weight: 600; padding: 4px 10px; border-radius: 20px;
      display: flex; align-items: center; gap: 6px;
    }
    .tag-item .tag-remove { cursor: pointer; font-size: 11px; color: var(--purple-light); opacity: 0.7; }
    .tag-item .tag-remove:hover { opacity: 1; }
    .tag-input {
      border: none; outline: none; font-family: 'Poppins', sans-serif;
      font-size: 13.5px; color: var(--text-dark); flex: 1; min-width: 120px; background: transparent;
    }
    .tag-input::placeholder { color: #aaa; }

    /* ══════ FIGMA CHECKBOXES & RADIO (Step 5) ══════ */
    .figma-check-group {
      margin-bottom: 22px;
    }
    .figma-check-label {
      font-size: 13.5px; font-weight: 500; color: var(--text-dark);
      margin-bottom: 10px;
    }
    .figma-checks {
      display: flex; flex-wrap: wrap; gap: 24px; align-items: center;
    }

    /* Checkbox */
    .figma-check {
      display: flex; align-items: center; gap: 8px;
      font-size: 13.5px; color: var(--text-dark); cursor: pointer;
      user-select: none; font-family: 'Poppins', sans-serif;
    }
    .figma-check input[type="checkbox"] { display: none; }
    .fcheck-box {
      width: 18px; height: 18px; border: 2px solid #bbb;
      border-radius: 4px; display: inline-flex; align-items: center;
      justify-content: center; transition: all 0.18s; flex-shrink: 0;
    }
    .figma-check input:checked ~ .fcheck-box {
      background: var(--purple-light); border-color: var(--purple-light);
    }
    .figma-check input:checked ~ .fcheck-box::after {
      content: ''; width: 5px; height: 9px;
      border: 2px solid #fff; border-top: none; border-left: none;
      transform: rotate(45deg) translateY(-1px); display: block;
    }

    /* Radio */
    .figma-radio {
      display: flex; align-items: center; gap: 8px;
      font-size: 13.5px; color: var(--text-dark); cursor: pointer;
      user-select: none; font-family: 'Poppins', sans-serif;
    }
    .figma-radio input[type="radio"] { display: none; }
    .fradio-dot {
      width: 18px; height: 18px; border: 2px solid #bbb;
      border-radius: 50%; display: inline-flex; align-items: center;
      justify-content: center; transition: all 0.18s; flex-shrink: 0;
    }
    .figma-radio input:checked ~ .fradio-dot {
      border-color: var(--purple-light);
    }
    .figma-radio input:checked ~ .fradio-dot::after {
      content: ''; width: 8px; height: 8px;
      background: var(--purple-light); border-radius: 50%; display: block;
    }

    .figma-check-group.has-error .field-error { display: block; }
    .figma-check-group .field-error { font-size: 11px; color: #dc3545; margin-top: 6px; display: none; }

    /* ══════ CHECKBOX STYLE (old - kept for compatibility) ══════ */
    .check-group { display: flex; flex-wrap: wrap; gap: 10px; }
    .check-chip {
      display: flex; align-items: center; gap: 7px; padding: 9px 16px;
      border: 1.5px solid var(--input-border); border-radius: 8px; cursor: pointer;
      transition: border-color 0.2s, background 0.2s; font-size: 13px;
      color: var(--text-muted); font-weight: 500; user-select: none;
    }
    .check-chip input { display: none; }
    .check-chip.checked { border-color: var(--purple-light); background: #f5eaff; color: var(--purple-light); }
    .check-chip .chip-dot {
      width: 14px; height: 14px; border: 2px solid var(--input-border);
      border-radius: 50%; transition: all 0.2s;
    }
    .check-chip.checked .chip-dot { background: var(--purple-light); border-color: var(--purple-light); }

    /* ══════ FIGMA UPLOAD (Step 6) ══════ */
    .figma-upload-wrap {
      display: flex;
      align-items: flex-start;
      gap: 32px;
      margin-bottom: 8px;
    }
    .figma-upload-box {
      width: 110px;
      height: 110px;
      border: 2px dashed #bbb;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      flex-shrink: 0;
      transition: border-color 0.2s, background 0.2s;
      gap: 8px;
    }
    .figma-upload-box:hover {
      border-color: var(--purple-light);
      background: #f9f5ff;
    }
    .figma-upload-icon {
      font-size: 22px;
      color: var(--text-dark);
    }
    .figma-upload-text {
      font-size: 13px;
      font-weight: 500;
      color: var(--text-dark);
    }
    .figma-upload-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .figma-upload-img {
      width: 90px;
      margin-bottom: 10px;
      object-fit: contain;
    }
    .figma-upload-formats {
      font-size: 13px;
      color: var(--text-dark);
      font-weight: 500;
    }
    .figma-upload-size {
      font-size: 12.5px;
      color: var(--text-muted);
      margin-top: 2px;
    }
    .resume-file-name {
      font-size: 12px;
      color: var(--green-main);
      margin-top: 6px;
      font-weight: 500;
    }
    .figma-upload-wrap.has-error .figma-upload-box { border-color: #dc3545; }

    /* ══════ SOCIAL LINKS ══════ */
    .social-link-row {
      display: flex; align-items: center; gap: 10px;
      border: 1.5px solid var(--input-border); border-radius: 8px;
      padding: 0 14px; transition: border-color 0.2s;
    }
    .social-link-row:focus-within { border-color: var(--purple-light); }
    .social-link-row .soc-icon { font-size: 18px; color: #aaa; }
    .social-link-row input {
      flex: 1; border: none; outline: none; font-family: 'Poppins', sans-serif;
      font-size: 13.5px; color: var(--text-dark); padding: 13px 0; background: transparent;
    }
    .social-link-row input::placeholder { color: #bbb; }

    /* Resume upload */
    .resume-upload {
      border: 2px dashed var(--input-border); border-radius: 10px;
      padding: 28px; text-align: center; cursor: pointer;
      transition: border-color 0.2s, background 0.2s;
    }
    .resume-upload:hover { border-color: var(--purple-light); background: #f9f5ff; }
    .resume-upload i { font-size: 28px; color: var(--purple-light); margin-bottom: 8px; }
    .resume-upload p { font-size: 13px; color: var(--text-muted); }
    .resume-upload span { color: var(--purple-light); font-weight: 600; }
    .resume-upload input[type="file"] { display: none; }
    .resume-file-name { font-size: 12px; color: var(--green-main); margin-top: 8px; font-weight: 500; }

    /* ══════ SUCCESS ══════ */
    .success-wrap { text-align: center; padding: 30px 0 10px; }
    .success-wrap .success-icon {
      font-size: 64px; color: var(--green-main); margin-bottom: 16px;
      animation: popIn 0.5s cubic-bezier(.34,1.56,.64,1) both;
    }
    @keyframes popIn { from { transform: scale(0); opacity: 0; } to { transform: scale(1); opacity: 1; } }
    .success-wrap h3 { font-size: 22px; font-weight: 700; color: var(--purple-light); }
    .success-wrap p  { font-size: 14px; color: var(--text-muted); margin-top: 8px; }

    /* ══════ CONDITION TYPE POPUP ══════ */
    .popup-overlay {
      display: none;
      position: fixed; inset: 0;
      background: rgba(0,0,0,0.45);
      z-index: 9999;
      align-items: center;
      justify-content: center;
    }
    .popup-overlay.open { display: flex; }

    .popup-modal {
      background: #fff;
      border-radius: 14px;
      width: 100%;
      max-width: 420px;
      max-height: 85vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0,0,0,0.25);
      animation: slideUp 0.25s ease both;
      margin: 16px;
    }

    .popup-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 20px 14px;
      border-bottom: 1px solid #f0f0f5;
    }
    .popup-title {
      font-size: 15px;
      font-weight: 600;
      color: var(--text-dark);
      font-family: 'Poppins', sans-serif;
    }
    .popup-close {
      background: none; border: none; cursor: pointer;
      font-size: 20px; color: #999; padding: 0; line-height: 1;
      transition: color 0.15s;
    }
    .popup-close:hover { color: #333; }

    .popup-body {
      overflow-y: auto;
      flex: 1;
      padding: 4px 0;
    }

    .popup-check-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 20px;
      border-bottom: 1px solid #f5f5f5;
      cursor: pointer;
      transition: background 0.12s;
      font-family: 'Poppins', sans-serif;
      font-size: 13.5px;
      color: var(--text-dark);
    }
    .popup-check-row:hover { background: #faf5ff; }
    .popup-check-row input[type="checkbox"] { display: none; }

    .popup-box {
      width: 20px; height: 20px;
      border: 2px solid #ccc;
      border-radius: 4px;
      flex-shrink: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: all 0.18s;
    }
    .popup-check-row input:checked ~ .popup-box {
      background: var(--purple-light);
      border-color: var(--purple-light);
    }
    .popup-check-row input:checked ~ .popup-box::after {
      content: '';
      width: 5px; height: 10px;
      border: 2px solid #fff;
      border-top: none; border-left: none;
      transform: rotate(45deg) translateY(-1px);
      display: block;
    }

    .popup-footer {
      display: flex;
      gap: 10px;
      padding: 16px 20px;
      border-top: 1px solid #f0f0f5;
    }
    .popup-btn-cancel {
      flex: 1; padding: 12px;
      background: #f0f0f5; color: var(--text-dark);
      border: none; border-radius: 8px;
      font-family: 'Poppins', sans-serif;
      font-size: 14px; font-weight: 600;
      cursor: pointer; transition: background 0.2s;
    }
    .popup-btn-cancel:hover { background: #e0e0ea; }
    .popup-btn-save {
      flex: 1; padding: 12px;
      background: var(--purple-light); color: #fff;
      border: none; border-radius: 8px;
      font-family: 'Poppins', sans-serif;
      font-size: 14px; font-weight: 600;
      cursor: pointer; transition: background 0.2s;
    }
    .popup-btn-save:hover { background: #5a0b90; }

    .popup-trigger {
      cursor: pointer;
      color: #aaa;
    }
    .popup-trigger.has-value { color: var(--text-dark); }

    /* ══════ PHYSICALLY CHALLENGED CONDITIONAL ══════ */
    .physical-extra-wrap {
      overflow: hidden; max-height: 0; opacity: 0;
      transition: max-height 0.5s cubic-bezier(0.4,0,0.2,1), opacity 0.4s ease, padding 0.4s ease;
      padding-top: 0; padding-bottom: 0;
    }
    .physical-extra-wrap.visible { max-height: 160px; opacity: 1; padding-top: 24px; padding-bottom: 4px; }
    .physical-extra-wrap .field-group { margin-bottom: 0; }

    /* ══════ VALIDATION ══════ */
    .field-error { font-size: 11px; color: #dc3545; margin-top: 5px; display: none; }
    .field-group.has-error .form-control,
    .field-group.has-error .form-select { border-color: #dc3545; }
    .field-group.has-error .field-error { display: block; }

    /* ══════ RESPONSIVE ══════ */
    @media (max-width: 991px) {
      .top-navbar { padding: 16px 24px; gap: 14px; }
      .navbar-title { font-size: 18px; }
      .stepper-wrap { padding: 0 24px; }
      .form-card { margin: 0 24px 40px; padding: 28px 24px 32px; }
    }
    @media (max-width: 767px) {
      .top-navbar { padding: 14px 18px; gap: 10px; }
      .navbar-title { font-size: 16px; }
      .stepper-wrap { padding: 0 18px; }
      .step-item { font-size: 11px; padding: 3px 6px 3px 0; }
      .form-card { margin: 0 16px 32px; padding: 22px 18px 26px; }
      .form-card-title { font-size: 17px; margin-bottom: 20px; }
      .btn-next { padding: 11px 32px; font-size: 14px; }
    }
    @media (max-width: 575px) {
      .step-item + .step-item::before { display: none; }
      .steps-row { gap: 4px; }
      .step-item { font-size: 10px; }
    }
  </style>
</head>
<body>

  <!-- ══════ NAVBAR ══════ -->
  <nav class="top-navbar">
    <a href="#" class="logo-box">
      <i class="bi bi-check-circle-fill logo-icon"></i>
      <span class="logo-text">True Jobs</span>
    </a>
    <span class="navbar-title">Let's Get You Started!</span>
  </nav>

  <!-- ══════ STEPPER ══════ -->
  <div class="stepper-wrap">
    <div class="steps-row" id="stepsRow">
      <div class="step-item active" data-step="1">1. Basic Details</div>
      <div class="step-item" data-step="2">2. Education</div>
      <div class="step-item" data-step="3">3. Preferred Job Role</div>
      <div class="step-item" data-step="4">4. Skills/Expertise</div>
      <div class="step-item" data-step="5">5. Job Type &amp; Language</div>
      <div class="step-item" data-step="6">6. Social Links &amp; Resume</div>
    </div>
    <div class="progress-wrap">
      <div class="progress-fill" id="progressFill" style="width:16.66%"></div>
    </div>
  </div>

  <!-- ══════ FORM CARD ══════ -->
  <div class="form-card">

    <!-- ─── STEP 1: Basic Details ─── -->
    <div class="step-panel active" id="step1">
      <div class="form-card-title">Basic Details</div>

      <div class="row g-4 mb-0">
        <div class="col-md-6">
          <div class="field-group" id="fg-name">
            <label>Name*</label>
            <input type="text" class="form-control" id="inp-name" placeholder="Enter your name"/>
            <div class="field-error">Please enter your name</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="field-group" id="fg-email">
            <label>Mail Id*</label>
            <input type="email" class="form-control" id="inp-email" placeholder="Enter mail id"/>
            <div class="field-error">Please enter a valid email</div>
          </div>
        </div>
      </div>

      <div class="row g-4 mb-0 mt-0">
        <div class="col-md-6">
          <div class="field-group" id="fg-gender">
            <label>Gender*</label>
            <div class="select-wrap">
              <select class="form-select" id="inp-gender">
                <option value="" disabled selected>Select your gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Prefer not to say</option>
              </select>
              <i class="bi bi-chevron-down caret-icon"></i>
            </div>
            <div class="field-error">Please select gender</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="field-group" id="fg-dob">
            <label>Date of Birth*</label>
            <div class="dob-wrap">
              <input type="text" class="form-control dob-input" id="inp-dob"
                     placeholder="Select"
                     onfocus="this.type='date'"
                     onblur="if(!this.value) this.type='text'"
              />
              <i class="bi bi-calendar3 dob-cal-icon"></i>
            </div>
            <div class="field-error">Please select date of birth</div>
          </div>
        </div>
      </div>

      <div class="row g-4 mb-0 mt-0">
        <div class="col-md-6">
          <div class="field-group" id="fg-physical">
            <label>Physically Challenged*</label>
            <div class="select-wrap">
              <select class="form-select" id="inp-physical" onchange="togglePhysicalFields(this.value)">
                <option value="" disabled selected>Are you physically disable candidate?</option>
                <option value="no">No</option>
                <option value="yes">Yes</option>
              </select>
              <i class="bi bi-chevron-down caret-icon"></i>
            </div>
            <div class="field-error">Please select an option</div>
          </div>
        </div>
      </div>

      <div class="physical-extra-wrap" id="physicalExtraFields">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="field-group" id="fg-condition">
              <label>Condition Type*</label>
              <div class="select-wrap" onclick="openConditionPopup()">
                <div class="form-control popup-trigger" id="conditionDisplay">Select here</div>
                <i class="bi bi-chevron-down caret-icon"></i>
              </div>
              <div class="field-error">Please select condition type</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="field-group" id="fg-affected">
              <label>Affected Area*</label>
              <div class="select-wrap" onclick="openAffectedPopup()">
                <div class="form-control popup-trigger" id="affectedDisplay">Select here</div>
                <i class="bi bi-chevron-down caret-icon"></i>
              </div>
              <div class="field-error">Please select affected area</div>
            </div>
          </div>
        </div>
      </div>

      <div class="btn-footer">
        <button class="btn-next" onclick="nextStep(1)">Next</button>
      </div>
    </div>

    <!-- ─── STEP 2: Education ─── -->
    <div class="step-panel" id="step2">
      <div class="form-card-title">Education</div>
      <div class="row g-4">

        <!-- Highest Qualification -->
        <div class="col-md-6">
          <div class="field-group" id="fg-qualification">
            <label>Your Highest Qualification*</label>
            <div class="select-wrap">
              <select class="form-select" id="inp-qualification" onchange="onQualificationChange(this.value)">
                <option value="" disabled selected>Select qualification</option>
                <option value="below10th">Below 10th</option>
                <option value="10th">10th</option>
                <option value="12th">12th</option>
                <option value="iti">ITI</option>
                <option value="diploma">Diploma</option>
                <option value="ug">UG</option>
                <option value="pg">PG</option>
                <option value="phd">PhD</option>
              </select>
              <i class="bi bi-chevron-down caret-icon"></i>
            </div>
            <div class="field-error">Please select qualification</div>
          </div>
        </div>
      </div>

      <!-- Dynamic fields rendered by JS -->
      <div id="eduExtraFields" style="display:none;">
        <!-- Row 1: two fields side by side -->
        <div class="row g-4" id="eduDynamicRow1"></div>
        <!-- Row 2: remaining fields -->
        <div class="row g-4" id="eduDynamicRow2"></div>
      </div>

      <div class="btn-footer">
        <button class="btn-prev" onclick="prevStep(2)">Back</button>
        <button class="btn-next" onclick="nextStep(2)">Next</button>
      </div>
    </div>

    <!-- ─── STEP 3: Preferred Job Role ─── -->
    <div class="step-panel" id="step3">
      <div class="form-card-title">Preferred Job Role</div>

      <div class="field-group" id="fg-jobrole">
        <label>Search Roles*</label>
        <div class="jobrole-search-wrap">
          <input type="text" class="form-control jobrole-search-input" id="jobroleSearch"
                 placeholder="Search here" autocomplete="off"
                 oninput="filterJobRoles(this.value)"/>
          <i class="bi bi-search jobrole-search-icon"></i>
        </div>
        <div class="field-error">Please select at least one job role</div>
      </div>

      <div class="jobrole-info">
        <i class="bi bi-info-circle"></i> Select up to 5 jobs
      </div>

      <div class="jobrole-dropdown" id="jobroleDropdown" style="display:none;"></div>
      <div class="jobrole-tags-area" id="jobroleTagsArea"></div>

      <div class="btn-footer">
        <button class="btn-prev" onclick="prevStep(3)">Back</button>
        <button class="btn-next" onclick="nextStep(3)">Next</button>
      </div>
    </div>

    <!-- ─── STEP 4: Skills / Expertise ─── -->
    <div class="step-panel" id="step4">
      <div class="form-card-title">Skills / Expertise</div>

      <div class="field-group" id="fg-skills">
        <label>Skills*</label>
        <div class="jobrole-search-wrap">
          <input type="text" class="form-control jobrole-search-input" id="skillSearch"
                 placeholder="Search here" autocomplete="off"
                 oninput="filterSkills(this.value)"/>
          <i class="bi bi-search jobrole-search-icon"></i>
        </div>
        <div class="field-error">Please select at least one skill</div>
      </div>

      <div class="jobrole-info">
        <i class="bi bi-info-circle"></i> Select multiple skills
      </div>

      <div class="jobrole-dropdown" id="skillDropdown" style="display:none;"></div>
      <div class="jobrole-tags-area" id="skillTagsArea"></div>

      <div class="btn-footer">
        <button class="btn-prev" onclick="prevStep(4)">Back</button>
        <button class="btn-next" onclick="nextStep(4)">Next</button>
      </div>
    </div>

    <!-- ─── STEP 5: Job Type & Language ─── -->
    <div class="step-panel" id="step5">

      <div class="form-card-title">Job Type</div>

      <div class="figma-check-group" id="fg-shift">
        <div class="figma-check-label">Preferred Shift*</div>
        <div class="figma-checks">
          <label class="figma-check"><input type="checkbox" value="Day"/><span class="fcheck-box"></span> Day</label>
          <label class="figma-check"><input type="checkbox" value="Night"/><span class="fcheck-box"></span> Night</label>
          <label class="figma-check"><input type="checkbox" value="Rotational"/><span class="fcheck-box"></span> Rotational</label>
        </div>
        <div class="field-error">Please select preferred shift</div>
      </div>

      <div class="figma-check-group" id="fg-workmode">
        <div class="figma-check-label">Work Mode*</div>
        <div class="figma-checks">
          <label class="figma-check"><input type="checkbox" value="In-office"/><span class="fcheck-box"></span> In-office</label>
          <label class="figma-check"><input type="checkbox" value="Work From Home"/><span class="fcheck-box"></span> Work From Home</label>
          <label class="figma-check"><input type="checkbox" value="Hybrid"/><span class="fcheck-box"></span> Hybrid</label>
          <label class="figma-check"><input type="checkbox" value="Field Work"/><span class="fcheck-box"></span> Field Work</label>
        </div>
        <div class="field-error">Please select work mode</div>
      </div>

      <div class="figma-check-group" id="fg-jobtype">
        <div class="figma-check-label">Job Type*</div>
        <div class="figma-checks">
          <label class="figma-check"><input type="checkbox" value="Full Time"/><span class="fcheck-box"></span> Full Time</label>
          <label class="figma-check"><input type="checkbox" value="Part Time"/><span class="fcheck-box"></span> Part Time</label>
          <label class="figma-check"><input type="checkbox" value="Internship"/><span class="fcheck-box"></span> Internship</label>
        </div>
        <div class="field-error">Please select job type</div>
      </div>

      <div class="form-card-title" style="margin-top: 32px;">Language</div>

      <div class="figma-check-group" id="fg-english">
        <div class="figma-check-label">English Proficiency*</div>
        <div class="figma-checks">
          <label class="figma-radio"><input type="radio" name="english" value="Basic"/><span class="fradio-dot"></span> Basic</label>
          <label class="figma-radio"><input type="radio" name="english" value="Intermediate"/><span class="fradio-dot"></span> Intermediate</label>
          <label class="figma-radio"><input type="radio" name="english" value="Advanced"/><span class="fradio-dot"></span> Advanced</label>
        </div>
        <div class="field-error">Please select English proficiency</div>
      </div>

      <div class="field-group" id="fg-lang">
        <label>Add Languages*</label>
        <div class="jobrole-search-wrap">
          <input type="text" class="form-control jobrole-search-input" id="langSearch"
                 placeholder="Search languages" autocomplete="off"
                 oninput="filterLanguages(this.value)"/>
          <i class="bi bi-search jobrole-search-icon"></i>
        </div>
        <div class="field-error">Please add at least one language</div>
      </div>

      <div class="jobrole-dropdown" id="langDropdown" style="display:none;"></div>
      <div class="jobrole-tags-area" id="langTagsArea"></div>

      <div class="btn-footer">
        <button class="btn-prev" onclick="prevStep(5)">Back</button>
        <button class="btn-next" onclick="nextStep(5)">Next</button>
      </div>
    </div>

    <!-- ─── STEP 6: Social Links & Resume ─── -->
    <div class="step-panel" id="step6">

      <div class="form-card-title">Social Links</div>

      <div class="field-group">
        <label>LinkedIn (optional)</label>
        <input type="url" class="form-control" id="inp-linkedin" placeholder="Select here"/>
      </div>

      <div class="field-group">
        <label>Portfolio (optional)</label>
        <input type="url" class="form-control" id="inp-portfolio" placeholder="Select here"/>
      </div>

      <div class="jobrole-info" style="margin-top:-12px; margin-bottom:28px;">
        <i class="bi bi-info-circle"></i> For tech &amp; design roles
      </div>

      <div class="form-card-title">Upload Your Updated Resume</div>

      <div class="figma-upload-wrap" id="fg-resume">
        <div class="figma-upload-box" onclick="document.getElementById('resumeFile').click()">
          <i class="bi bi-upload figma-upload-icon"></i>
          <span class="figma-upload-text">Upload</span>
          <input type="file" id="resumeFile" accept=".pdf,.doc,.docx,.jpg,.png" onchange="handleResume(this)" style="display:none;"/>
        </div>
        <div class="figma-upload-info">
          <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" class="figma-upload-img" alt="upload illustration"/>
          <p class="figma-upload-formats"><strong>pdf, docx, jpg or png format only</strong></p>
          <p class="figma-upload-size">(10 MB maximum file size)</p>
          <p class="resume-file-name" id="resumeFileName"></p>
        </div>
        <div class="field-error" style="margin-top:8px;">Please upload your resume</div>
      </div>

      <div class="btn-footer">
        <button class="btn-prev" onclick="prevStep(6)">Back</button>
        <button class="btn-next" onclick="submitForm()">Submit</button>
      </div>
    </div>

    <!-- ─── SUCCESS ─── -->
    <div class="step-panel" id="stepSuccess">
      <div class="success-wrap">
        <div class="success-icon"><i class="bi bi-check-circle-fill"></i></div>
        <h3>Profile Submitted Successfully!</h3>
        <p>Thank you for completing your profile.<br>Our team will reach out to you with matching opportunities.</p>
        <button class="btn-next mt-4" style="float:none;" onclick="resetForm()">Go to Home</button>
      </div>
    </div>

  </div><!-- /form-card -->

  <!-- ══════ AFFECTED AREA POPUP ══════ -->
  <div class="popup-overlay" id="affectedOverlay" onclick="closeAffectedPopup(event)">
    <div class="popup-modal">
      <div class="popup-header">
        <span class="popup-title">Affected Area</span>
        <button class="popup-close" onclick="closeAffectedPopup(null, true)">
          <i class="bi bi-x-circle"></i>
        </button>
      </div>
      <div class="popup-body">
        <label class="popup-check-row"><span>Chest</span><input type="checkbox" value="Chest"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Ears</span><input type="checkbox" value="Ears"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Head</span><input type="checkbox" value="Head"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Left Eye</span><input type="checkbox" value="Left Eye"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Left Hand</span><input type="checkbox" value="Left Hand"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Left Leg</span><input type="checkbox" value="Left Leg"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Mouth</span><input type="checkbox" value="Mouth"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Nose</span><input type="checkbox" value="Nose"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Shoulder</span><input type="checkbox" value="Shoulder"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Right Eye</span><input type="checkbox" value="Right Eye"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Right Hand</span><input type="checkbox" value="Right Hand"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Right Leg</span><input type="checkbox" value="Right Leg"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Spine / Back</span><input type="checkbox" value="Spine / Back"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Full Body</span><input type="checkbox" value="Full Body"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Brain</span><input type="checkbox" value="Brain"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Other</span><input type="checkbox" value="Other"/><span class="popup-box"></span></label>
      </div>
      <div class="popup-footer">
        <button class="popup-btn-cancel" onclick="closeAffectedPopup(null, true)">Cancel</button>
        <button class="popup-btn-save" onclick="saveAffectedArea()">Save</button>
      </div>
    </div>
  </div>

  <!-- ══════ CONDITION TYPE POPUP ══════ -->
  <div class="popup-overlay" id="conditionOverlay" onclick="closeConditionPopup(event)">
    <div class="popup-modal">
      <div class="popup-header">
        <span class="popup-title">Condition Type</span>
        <button class="popup-close" onclick="closeConditionPopup(null, true)">
          <i class="bi bi-x-circle"></i>
        </button>
      </div>
      <div class="popup-body">
        <label class="popup-check-row"><span>Physical Disability</span><input type="checkbox" value="Physical Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Visual Disability</span><input type="checkbox" value="Visual Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Hearing Disability</span><input type="checkbox" value="Hearing Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Speech and Language Disability</span><input type="checkbox" value="Speech and Language Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Intellectual Disability</span><input type="checkbox" value="Intellectual Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Learning Disability</span><input type="checkbox" value="Learning Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Neurological Disability</span><input type="checkbox" value="Neurological Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Psychosocial Disability</span><input type="checkbox" value="Psychosocial Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Multiple Disabilities</span><input type="checkbox" value="Multiple Disabilities"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Autism Spectrum Disorder (ASD)</span><input type="checkbox" value="Autism Spectrum Disorder (ASD)"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Developmental Disability</span><input type="checkbox" value="Developmental Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Cognitive Disability</span><input type="checkbox" value="Cognitive Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Locomotor Disability</span><input type="checkbox" value="Locomotor Disability"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Cerebral Palsy</span><input type="checkbox" value="Cerebral Palsy"/><span class="popup-box"></span></label>
        <label class="popup-check-row"><span>Other</span><input type="checkbox" value="Other"/><span class="popup-box"></span></label>
      </div>
      <div class="popup-footer">
        <button class="popup-btn-cancel" onclick="closeConditionPopup(null, true)">Cancel</button>
        <button class="popup-btn-save" onclick="saveConditionType()">Save</button>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    /* ══════ AFFECTED AREA POPUP ══════ */
    let savedAffectedAreas = [];

    function openAffectedPopup() {
      const overlay = document.getElementById('affectedOverlay');
      overlay.classList.add('open');
      overlay.querySelectorAll('input[type="checkbox"]').forEach(cb => {
        cb.checked = savedAffectedAreas.includes(cb.value);
      });
    }

    function closeAffectedPopup(event, force) {
      if (force || (event && event.target === document.getElementById('affectedOverlay'))) {
        document.getElementById('affectedOverlay').classList.remove('open');
      }
    }

    function saveAffectedArea() {
      const checked = document.querySelectorAll('#affectedOverlay input[type="checkbox"]:checked');
      savedAffectedAreas = Array.from(checked).map(cb => cb.value);
      const display = document.getElementById('affectedDisplay');
      if (savedAffectedAreas.length) {
        display.textContent = savedAffectedAreas.join(', ');
        display.classList.add('has-value');
        document.getElementById('fg-affected').classList.remove('has-error');
      } else {
        display.textContent = 'Select here';
        display.classList.remove('has-value');
      }
      document.getElementById('affectedOverlay').classList.remove('open');
    }

    /* ══════ CONDITION TYPE POPUP ══════ */
    let savedConditions = [];

    function openConditionPopup() {
      const overlay = document.getElementById('conditionOverlay');
      overlay.classList.add('open');
      overlay.querySelectorAll('input[type="checkbox"]').forEach(cb => {
        cb.checked = savedConditions.includes(cb.value);
      });
    }

    function closeConditionPopup(event, force) {
      if (force || (event && event.target === document.getElementById('conditionOverlay'))) {
        document.getElementById('conditionOverlay').classList.remove('open');
      }
    }

    function saveConditionType() {
      const checked = document.querySelectorAll('#conditionOverlay input[type="checkbox"]:checked');
      savedConditions = Array.from(checked).map(cb => cb.value);
      const display = document.getElementById('conditionDisplay');
      if (savedConditions.length) {
        display.textContent = savedConditions.join(', ');
        display.classList.add('has-value');
        document.getElementById('fg-condition').classList.remove('has-error');
      } else {
        display.textContent = 'Select here';
        display.classList.remove('has-value');
      }
      document.getElementById('conditionOverlay').classList.remove('open');
    }

    /* ══════ PHYSICALLY CHALLENGED TOGGLE ══════ */
    function togglePhysicalFields(val) {
      const wrap = document.getElementById('physicalExtraFields');
      if (val === 'yes') {
        wrap.classList.add('visible');
      } else {
        wrap.classList.remove('visible');
        savedConditions = [];
        document.getElementById('conditionDisplay').textContent = 'Select here';
        document.getElementById('conditionDisplay').classList.remove('has-value');
        document.getElementById('fg-condition').classList.remove('has-error');
        savedAffectedAreas = [];
        document.getElementById('affectedDisplay').textContent = 'Select here';
        document.getElementById('affectedDisplay').classList.remove('has-value');
        document.getElementById('fg-affected').classList.remove('has-error');
      }
    }

    /* ══════ STEP NAVIGATION ══════ */
    let currentStep = 1;
    const totalSteps = 6;

    function goToStep(n) {
      document.querySelectorAll('.step-panel').forEach(p => p.classList.remove('active'));
      document.getElementById('step' + (n <= totalSteps ? n : 'Success')).classList.add('active');
      document.querySelectorAll('.step-item').forEach(el => {
        el.classList.remove('active');
        if (parseInt(el.dataset.step) === n) el.classList.add('active');
      });
      const pct = n > totalSteps ? 100 : (n / totalSteps) * 100;
      document.getElementById('progressFill').style.width = pct + '%';
      currentStep = n;
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    /* ══════ VALIDATION ══════ */
    const stepValidations = {
      1: [
        { id: 'fg-name',      inputId: 'inp-name',      type: 'text' },
        { id: 'fg-email',     inputId: 'inp-email',      type: 'email' },
        { id: 'fg-gender',    inputId: 'inp-gender',     type: 'select' },
        { id: 'fg-dob',       inputId: 'inp-dob',        type: 'dob' },
        { id: 'fg-physical',  inputId: 'inp-physical',   type: 'select' },
        { id: 'fg-condition', inputId: 'inp-condition',  type: 'select-conditional', conditionId: 'inp-physical', conditionVal: 'yes' },
        { id: 'fg-affected',  inputId: 'inp-affected',   type: 'select-conditional', conditionId: 'inp-physical', conditionVal: 'yes' },
      ],
      2: [
        { id: 'fg-qualification', inputId: 'inp-qualification', type: 'select' },
        { id: 'fg-edu-dynamic', type: 'edu-dynamic' },
      ],
      3: [
        { id: 'fg-jobrole', inputId: null, type: 'jobroles' },
      ],
      4: [
        { id: 'fg-skills', inputId: null, type: 'skilltags' },
      ],
      5: [
        { id: 'fg-shift',   type: 'fcheck', groupSelector: '#fg-shift input[type="checkbox"]' },
        { id: 'fg-workmode',type: 'fcheck', groupSelector: '#fg-workmode input[type="checkbox"]' },
        { id: 'fg-jobtype', type: 'fcheck', groupSelector: '#fg-jobtype input[type="checkbox"]' },
        { id: 'fg-english', type: 'fradio', groupSelector: '#fg-english input[type="radio"]' },
        { id: 'fg-lang',    type: 'langtags' },
      ],
      6: [
        { id: 'fg-resume', inputId: 'resumeFile', type: 'file' },
      ],
    };

    function validateStep(stepNum) {
      const rules = stepValidations[stepNum] || [];
      let valid = true;
      rules.forEach(rule => {
        const fg = document.getElementById(rule.id);
        if (!fg) return;
        fg.classList.remove('has-error');
        if (rule.type === 'text' || rule.type === 'email') {
          const val = document.getElementById(rule.inputId).value.trim();
          if (!val || (rule.type === 'email' && !/\S+@\S+\.\S+/.test(val))) {
            fg.classList.add('has-error'); valid = false;
          }
        } else if (rule.type === 'dob') {
          const val = document.getElementById(rule.inputId).value.trim();
          if (!val) { fg.classList.add('has-error'); valid = false; }
        } else if (rule.type === 'select') {
          const val = document.getElementById(rule.inputId).value;
          if (!val) { fg.classList.add('has-error'); valid = false; }
        } else if (rule.type === 'select-conditional') {
          const condEl = document.getElementById(rule.conditionId);
          if (condEl && condEl.value === rule.conditionVal) {
            if (rule.id === 'fg-condition') {
              if (!savedConditions.length) { fg.classList.add('has-error'); valid = false; }
            } else if (rule.id === 'fg-affected') {
              if (!savedAffectedAreas.length) { fg.classList.add('has-error'); valid = false; }
            } else {
              const val = document.getElementById(rule.inputId).value;
              if (!val) { fg.classList.add('has-error'); valid = false; }
            }
          }
        } else if (rule.type === 'edu-dynamic') {
          const qual = document.getElementById('inp-qualification').value;
          if (!qual) return;
          const checkMap = {
            'below10th': [['fg-sub-qualification','inp-sub-qualification'],['fg-passyear','inp-passyear'],['fg-school','inp-school']],
            '10th':      [['fg-school','inp-school'],['fg-passyear','inp-passyear']],
            '12th':      [['fg-board','inp-board'],['fg-school','inp-school'],['fg-passyear','inp-passyear']],
            'iti':       [['fg-board','inp-board'],['fg-iti-course','inp-iti-course'],['fg-institution','inp-institution'],['fg-passyear','inp-passyear']],
            'diploma':   [['fg-board-text','inp-board-text'],['fg-specialization','inp-specialization'],['fg-college','inp-college'],['fg-passyear','inp-passyear']],
            'ug':        [['fg-edu-degree','inp-edu-degree'],['fg-specialization','inp-specialization'],['fg-college','inp-college'],['fg-passyear','inp-passyear']],
            'pg':        [['fg-edu-degree','inp-edu-degree'],['fg-specialization','inp-specialization'],['fg-college','inp-college'],['fg-passyear','inp-passyear']],
            'phd':       [['fg-edu-degree','inp-edu-degree'],['fg-specialization','inp-specialization'],['fg-college','inp-college'],['fg-passyear','inp-passyear']],
          };
          (checkMap[qual] || []).forEach(([fgId, inpId]) => {
            const f = document.getElementById(fgId);
            const i = document.getElementById(inpId);
            if (!f || !i) return;
            f.classList.remove('has-error');
            const v = i.value.trim ? i.value.trim() : i.value;
            if (!v) { f.classList.add('has-error'); valid = false; }
          });
        } else if (rule.type === 'fcheck') {
          const checked = document.querySelectorAll(rule.groupSelector + ':checked');
          if (!checked.length) { fg.classList.add('has-error'); valid = false; }
        } else if (rule.type === 'fradio') {
          const checked = document.querySelectorAll(rule.groupSelector + ':checked');
          if (!checked.length) { fg.classList.add('has-error'); valid = false; }
        } else if (rule.type === 'langtags') {
          const tags = document.querySelectorAll('#langTagsArea .jobrole-tag');
          if (!tags.length) { fg.classList.add('has-error'); valid = false; }
        } else if (rule.type === 'skilltags') {
          const tags = document.querySelectorAll('#skillTagsArea .jobrole-tag');
          if (!tags.length) { fg.classList.add('has-error'); valid = false; }
        } else if (rule.type === 'jobroles') {
          const tags = document.querySelectorAll('#jobroleTagsArea .jobrole-tag');
          if (!tags.length) { fg.classList.add('has-error'); valid = false; }
        } else if (rule.type === 'file') {
          const f = document.getElementById(rule.inputId);
          if (!f || !f.files.length) { fg.classList.add('has-error'); valid = false; }
        }
      });
      return valid;
    }

    function nextStep(from) {
      if (!validateStep(from)) return;
      goToStep(from + 1);
    }
    function prevStep(from) { goToStep(from - 1); }
    function submitForm() {
      if (!validateStep(6)) return;
      goToStep(7);
    }
    function resetForm() { goToStep(1); }

    /* ══════ LANGUAGE SEARCH ══════ */
    const allLanguages = [
      'Tamil', 'English', 'Hindi', 'Telugu', 'Kannada', 'Malayalam',
      'Marathi', 'Bengali', 'Gujarati', 'Punjabi', 'Odia', 'Urdu',
      'Sanskrit', 'Assamese', 'Maithili', 'Konkani', 'Sindhi',
      'Japanese', 'Chinese', 'French', 'German', 'Spanish', 'Arabic',
      'Korean', 'Russian', 'Portuguese', 'Italian', 'Dutch', 'Turkish'
    ];
    let selectedLanguages = [];

    function filterLanguages(query) {
      const dropdown = document.getElementById('langDropdown');
      const q = query.trim().toLowerCase();
      if (!q) { dropdown.style.display = 'none'; return; }
      const filtered = allLanguages.filter(l => l.toLowerCase().includes(q));
      if (!filtered.length) { dropdown.style.display = 'none'; return; }
      dropdown.innerHTML = filtered.map(lang => {
        const already = selectedLanguages.includes(lang);
        return `<div class="jobrole-dropdown-item ${already ? 'disabled' : ''}"
                     onclick="${already ? '' : `selectLanguage('${lang}')`}">
                  ${lang} ${already ? '✓' : ''}
                </div>`;
      }).join('');
      dropdown.style.display = 'block';
    }

    function selectLanguage(lang) {
      if (selectedLanguages.includes(lang)) return;
      selectedLanguages.push(lang);
      renderLangTags();
      document.getElementById('langSearch').value = '';
      document.getElementById('langDropdown').style.display = 'none';
      document.getElementById('fg-lang').classList.remove('has-error');
    }

    function removeLanguage(lang) {
      selectedLanguages = selectedLanguages.filter(l => l !== lang);
      renderLangTags();
    }

    function renderLangTags() {
      const area = document.getElementById('langTagsArea');
      area.innerHTML = selectedLanguages.map(lang =>
        `<span class="jobrole-tag">
          ${lang}
          <span class="jtag-remove" onclick="removeLanguage('${lang}')">×</span>
        </span>`
      ).join('');
    }

    document.addEventListener('click', function(e) {
      const dropdown = document.getElementById('langDropdown');
      const search   = document.getElementById('langSearch');
      if (dropdown && !dropdown.contains(e.target) && e.target !== search) {
        dropdown.style.display = 'none';
      }
    });

    /* ══════ RESUME UPLOAD ══════ */
    function handleResume(input) {
      if (input.files && input.files[0]) {
        const file = input.files[0];
        if (file.size > 10 * 1024 * 1024) {
          alert('File size exceeds 10MB. Please upload a smaller file.');
          input.value = '';
          return;
        }
        document.getElementById('resumeFileName').textContent = '✓ ' + file.name;
        document.getElementById('fg-resume').classList.remove('has-error');
      }
    }

    /* ══════ JOB ROLE SEARCH ══════ */
    const allJobRoles = [
      'UI/UX Designer', 'UI Designer', 'UX Designer', 'UX Researcher',
      'Software Developer', 'Frontend Developer', 'Backend Developer', 'Full Stack Developer',
      'Mobile Developer', 'Android Developer', 'iOS Developer',
      'Data Analyst', 'Data Scientist', 'Data Engineer', 'Business Analyst',
      'Product Manager', 'Project Manager', 'Scrum Master',
      'DevOps Engineer', 'Cloud Engineer', 'QA Engineer', 'Test Engineer',
      'Marketing Executive', 'Digital Marketer', 'Content Writer', 'SEO Specialist',
      'Sales Executive', 'HR Executive', 'Graphic Designer', 'Other'
    ];
    let selectedJobRoles = [];
    const MAX_ROLES = 5;

    function filterJobRoles(query) {
      const dropdown = document.getElementById('jobroleDropdown');
      const q = query.trim().toLowerCase();
      if (!q) { dropdown.style.display = 'none'; return; }
      const filtered = allJobRoles.filter(r => r.toLowerCase().includes(q));
      if (!filtered.length) { dropdown.style.display = 'none'; return; }
      dropdown.innerHTML = filtered.map(role => {
        const alreadySelected = selectedJobRoles.includes(role);
        const limitReached = selectedJobRoles.length >= MAX_ROLES;
        const disabled = alreadySelected || limitReached;
        return `<div class="jobrole-dropdown-item ${disabled ? 'disabled' : ''}"
                     onclick="${disabled ? '' : `selectJobRole('${role}')`}">
                  ${role} ${alreadySelected ? '✓' : ''}
                </div>`;
      }).join('');
      dropdown.style.display = 'block';
    }

    function selectJobRole(role) {
      if (selectedJobRoles.includes(role) || selectedJobRoles.length >= MAX_ROLES) return;
      selectedJobRoles.push(role);
      renderJobRoleTags();
      document.getElementById('jobroleSearch').value = '';
      document.getElementById('jobroleDropdown').style.display = 'none';
      document.getElementById('fg-jobrole').classList.remove('has-error');
    }

    function removeJobRole(role) {
      selectedJobRoles = selectedJobRoles.filter(r => r !== role);
      renderJobRoleTags();
    }

    function renderJobRoleTags() {
      const area = document.getElementById('jobroleTagsArea');
      area.innerHTML = selectedJobRoles.map(role =>
        `<span class="jobrole-tag">
          ${role}
          <span class="jtag-remove" onclick="removeJobRole('${role}')">×</span>
        </span>`
      ).join('');
    }

    document.addEventListener('click', function(e) {
      const dropdown = document.getElementById('jobroleDropdown');
      const search   = document.getElementById('jobroleSearch');
      if (dropdown && !dropdown.contains(e.target) && e.target !== search) {
        dropdown.style.display = 'none';
      }
    });

    /* ══════ SKILLS SEARCH ══════ */
    const allSkills = [
      'HTML', 'CSS', 'JavaScript', 'TypeScript', 'React', 'Vue.js', 'Angular',
      'Node.js', 'Express.js', 'Python', 'Django', 'Flask', 'Java', 'Spring Boot',
      'PHP', 'Laravel', 'C', 'C++', 'C#', '.NET', 'Ruby on Rails',
      'SQL', 'MySQL', 'PostgreSQL', 'MongoDB', 'Firebase', 'Redis',
      'Git', 'GitHub', 'Docker', 'Kubernetes', 'AWS', 'Azure', 'GCP',
      'Figma', 'Adobe XD', 'Photoshop', 'Illustrator', 'Sketch',
      'UI Design', 'UX Design', 'Wireframing', 'Prototyping',
      'Data Analysis', 'Machine Learning', 'Deep Learning', 'TensorFlow', 'PyTorch',
      'Excel', 'Power BI', 'Tableau', 'SEO', 'Google Ads', 'Content Writing',
      'Communication', 'Leadership', 'Problem Solving', 'Teamwork'
    ];
    let selectedSkills = [];

    function filterSkills(query) {
      const dropdown = document.getElementById('skillDropdown');
      const q = query.trim().toLowerCase();
      if (!q) { dropdown.style.display = 'none'; return; }
      const filtered = allSkills.filter(s => s.toLowerCase().includes(q));
      if (!filtered.length) { dropdown.style.display = 'none'; return; }
      dropdown.innerHTML = filtered.map(skill => {
        const already = selectedSkills.includes(skill);
        return `<div class="jobrole-dropdown-item ${already ? 'disabled' : ''}"
                     onclick="${already ? '' : `selectSkill('${skill}')`}">
                  ${skill} ${already ? '✓' : ''}
                </div>`;
      }).join('');
      dropdown.style.display = 'block';
    }

    function selectSkill(skill) {
      if (selectedSkills.includes(skill)) return;
      selectedSkills.push(skill);
      renderSkillTags();
      document.getElementById('skillSearch').value = '';
      document.getElementById('skillDropdown').style.display = 'none';
      document.getElementById('fg-skills').classList.remove('has-error');
    }

    function removeSkill(skill) {
      selectedSkills = selectedSkills.filter(s => s !== skill);
      renderSkillTags();
    }

    function renderSkillTags() {
      const area = document.getElementById('skillTagsArea');
      area.innerHTML = selectedSkills.map(skill =>
        `<span class="jobrole-tag">
          ${skill}
          <span class="jtag-remove" onclick="removeSkill('${skill}')">×</span>
        </span>`
      ).join('');
    }

    document.addEventListener('click', function(e) {
      const dropdown = document.getElementById('skillDropdown');
      const search   = document.getElementById('skillSearch');
      if (dropdown && !dropdown.contains(e.target) && e.target !== search) {
        dropdown.style.display = 'none';
      }
    });

    /* ══════ EDUCATION DYNAMIC FIELDS ══════ */
    const degreeOptions = {
      ug:  ['B.E / B.Tech','B.Sc','B.Com','B.A','BBA','BCA','B.Arch','B.Pharm','B.Ed','LLB','MBBS','Other'],
      pg:  ['M.E / M.Tech','M.Sc','M.Com','M.A','MBA','MCA','M.Arch','M.Pharm','M.Ed','LLM','MD','Other'],
      phd: ['PhD in Engineering','PhD in Science','PhD in Arts','PhD in Commerce','PhD in Medicine','Other'],
    };
    const boardOpts = ['CBSE','ICSE','State Board','IB','Other'];

    function makeSelect(id, fgId, label, options, placeholder) {
      const opts = options.map(o => `<option value="${o}">${o}</option>`).join('');
      return `<div class="col-md-6"><div class="field-group" id="${fgId}">
        <label>${label}</label>
        <div class="select-wrap">
          <select class="form-select" id="${id}" onchange="this.style.color='#1a1a1a'">
            <option value="" disabled selected>${placeholder}</option>${opts}
          </select>
          <i class="bi bi-chevron-down caret-icon"></i>
        </div>
        <div class="field-error">Please select ${label.replace('*','').toLowerCase()}</div>
      </div></div>`;
    }

    function makeText(id, fgId, label, placeholder) {
      return `<div class="col-md-6"><div class="field-group" id="${fgId}">
        <label>${label}</label>
        <input type="text" class="form-control" id="${id}" placeholder="${placeholder}"/>
        <div class="field-error">Please enter ${label.replace('*','').toLowerCase()}</div>
      </div></div>`;
    }

    function makeYearSelect() {
      const cur = new Date().getFullYear();
      let opts = '<option value="" disabled selected>Select year</option>';
      for (let y = cur; y >= 1990; y--) opts += `<option value="${y}">${y}</option>`;
      return `<div class="col-md-6"><div class="field-group" id="fg-passyear">
        <label>Year of Passing/Passed Out*</label>
        <div class="select-wrap">
          <select class="form-select" id="inp-passyear" onchange="this.style.color='#1a1a1a'">${opts}</select>
          <i class="bi bi-chevron-down caret-icon"></i>
        </div>
        <div class="field-error">Please select year</div>
      </div></div>`;
    }

    /*
      Below 10th layout (Figma exact):
        Row1: Qualification (col-md-6) | Year of Passing (col-md-6)
        Row2: School Name (col-md-6)
    */
    function onQualificationChange(val) {
      const extra = document.getElementById('eduExtraFields');
      const row1  = document.getElementById('eduDynamicRow1');
      const row2  = document.getElementById('eduDynamicRow2');

      row1.innerHTML = '';
      row2.innerHTML = '';

      if (!val) { extra.style.display = 'none'; return; }

      if (val === 'below10th') {
        // Row1: Qualification dropdown only
        row1.innerHTML =
          makeSelect('inp-sub-qualification','fg-sub-qualification','Qualification*',
            ['1st Grade','2nd Grade','3rd Grade','4th Grade','5th Grade',
             '6th Grade','7th Grade','8th Grade','9th Grade','Not Applicable'],
            'Select qualification');
        // Row2: School Name + Year of Passing
        row2.innerHTML =
          makeText('inp-school','fg-school','School Name*','Enter school name') +
          makeYearSelect();

      } else if (val === '10th') {
        row1.innerHTML = makeText('inp-school','fg-school','School Name*','Enter school name') + makeYearSelect();

      } else if (val === '12th') {
        row1.innerHTML =
          makeSelect('inp-board','fg-board','Board*', boardOpts, 'Select board') +
          makeText('inp-school','fg-school','School Name*','Enter school name');
        row2.innerHTML = makeYearSelect();

      } else if (val === 'iti') {
        row1.innerHTML =
          makeSelect('inp-board','fg-board','Board*', boardOpts, 'Select board') +
          makeText('inp-iti-course','fg-iti-course','ITI Course*','Enter course name');
        row2.innerHTML =
          makeText('inp-institution','fg-institution','Institution Name*','Enter institution name') +
          makeYearSelect();

      } else if (val === 'diploma') {
        row1.innerHTML =
          makeText('inp-board-text','fg-board-text','Board*','Enter board of diploma') +
          makeText('inp-specialization','fg-specialization','Specialization*','Enter specialization');
        row2.innerHTML =
          makeText('inp-college','fg-college','College/University*','Enter college/university name') +
          makeYearSelect();

      } else if (val === 'ug' || val === 'pg' || val === 'phd') {
        row1.innerHTML =
          makeSelect('inp-edu-degree','fg-edu-degree','Degree*', degreeOptions[val]||[], 'Select degree') +
          makeText('inp-specialization','fg-specialization','Specialization*','Enter specialization');
        row2.innerHTML =
          makeText('inp-college','fg-college','College/University*','Enter college/university name') +
          makeYearSelect();
      }

      extra.style.display = 'block';
    }

    /* ══════ SELECT STYLE ══════ */
    document.querySelectorAll('.form-select').forEach(sel => {
      sel.addEventListener('change', function() { this.style.color = '#1a1a1a'; });
    });

    /* ══════ STEPPER CLICK ══════ */
    document.querySelectorAll('.step-item').forEach(el => {
      el.addEventListener('click', function() {
        const target = parseInt(this.dataset.step);
        if (target < currentStep) goToStep(target);
      });
    });
  </script>
</body>
</html>
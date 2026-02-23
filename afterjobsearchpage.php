<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TrueJobs - Search Results</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
  <style>
    :root {
      --primary: #7c3aed;
      --primary-light: #ede9fe;
      --primary-dark: #5b21b6;
      --text-dark: #1f2937;
      --text-muted: #6b7280;
      --text-light: #9ca3af;
      --border: #e5e7eb;
      --bg: #f3f4f6;
      --white: #ffffff;
      --green: #16a34a;
      --orange: #ea580c;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
      background: var(--bg);
      color: var(--text-dark);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* ══════════════════════════════
       NAVBAR
    ══════════════════════════════ */
    .navbar-top {
      background: var(--primary);
      padding: 12px 0;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }
    .navbar-inner {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
    }
    /* Brand Logo */
    .brand {
      display: flex;
      align-items: center;
      gap: 6px;
      text-decoration: none;
      flex-shrink: 0;
    }
    .brand-icon {
      background: white;
      color: var(--primary);
      font-weight: 900;
      font-size: 11px;
      padding: 4px 7px;
      border-radius: 5px;
      letter-spacing: 0.5px;
    }
    .brand-text {
      color: white;
      font-weight: 800;
      font-size: 17px;
      letter-spacing: 0.3px;
    }
    /* Nav links */
    .nav-links {
      display: flex;
      align-items: center;
      gap: 24px;
    }
    .nav-links a {
      color: rgba(255,255,255,0.88);
      text-decoration: none;
      font-size: 13px;
      font-weight: 500;
      transition: color 0.15s;
    }
    .nav-links a:hover { color: white; }
    .btn-trial {
      background: white;
      color: var(--primary);
      border: none;
      border-radius: 7px;
      padding: 7px 18px;
      font-size: 13px;
      font-weight: 700;
      cursor: pointer;
      transition: background 0.15s;
      white-space: nowrap;
    }
    .btn-trial:hover { background: #f3f0ff; }

    /* ══════════════════════════════
       SEARCH BAR SECTION
    ══════════════════════════════ */
    .search-section {
      background: linear-gradient(135deg, #4c1d95 0%, #6d28d9 40%, #3b0764 100%);
      padding: 28px 0 32px;
    }
    .search-inner {
      max-width: 780px;
      margin: 0 auto;
      padding: 0 16px;
    }
    .search-box {
      background: white;
      border-radius: 50px;
      display: flex;
      align-items: center;
      overflow: hidden;
      box-shadow: 0 6px 28px rgba(0,0,0,0.25);
      padding: 5px 5px 5px 0;
    }
    .search-field {
      flex: 1;
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 20px;
      border-right: 1.5px solid #e5e7eb;
    }
    .search-field:last-of-type { border-right: none; }
    .search-field i { color: #9ca3af; font-size: 15px; flex-shrink: 0; }
    .search-field input {
      border: none;
      outline: none;
      font-size: 13.5px;
      color: var(--text-dark);
      width: 100%;
      background: transparent;
    }
    .search-field input::placeholder { color: #9ca3af; }
    .btn-find {
      background: var(--primary);
      color: white;
      border: none;
      padding: 11px 28px;
      font-size: 14px;
      font-weight: 700;
      cursor: pointer;
      white-space: nowrap;
      transition: background 0.15s;
      flex-shrink: 0;
      border-radius: 50px;
      margin-right: 2px;
    }
    .btn-find:hover { background: var(--primary-dark); }

    /* ══════════════════════════════
       MAIN CONTENT
    ══════════════════════════════ */
    .page-wrapper {
      max-width: 1100px;
      margin: 0 auto;
      padding: 24px 16px 48px;
      flex: 1;
      width: 100%;
    }
    .page-title {
      font-size: 20px;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 18px;
    }

    /* ── GRID ── */
    .layout-grid {
      display: grid;
      grid-template-columns: 210px 1fr 160px;
      gap: 16px;
      align-items: start;
    }
    @media (max-width: 991px) {
      .layout-grid { grid-template-columns: 180px 1fr; }
      .ad-col { display: none; }
    }
    @media (max-width: 650px) {
      .layout-grid { grid-template-columns: 1fr; }
      .filter-col { display: none; }
    }

    /* ══════════════════════════════
       FILTER PANEL
    ══════════════════════════════ */
    .filter-panel {
      background: transparent;
      position: sticky;
      top: 72px;
      width: 100%;
    }
    .filter-panel .fp-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
      padding: 0 2px;
    }
    .filter-panel .fp-header span {
      font-size: 15px;
      font-weight: 800;
      color: #111827;
    }
    .filter-panel .fp-header a {
      font-size: 12px;
      color: var(--primary);
      text-decoration: none;
      font-weight: 600;
    }
    .filter-panel .fp-header a:hover { text-decoration: underline; }

    .filter-list {
      display: flex;
      flex-direction: column;
      width: 100%;
    }
    .filter-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 14px;
      background: #f3f4f6;
      border-radius: 10px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 5px;
      transition: background 0.12s;
    }
    .filter-item:last-child { margin-bottom: 0; }
    .filter-item:hover { background: #ede9fe; }
    .filter-item span {
      font-size: 13px;
      color: #4b5563;
      font-weight: 500;
      flex: 1;
      text-align: left;
    }
    .filter-item .fi-icon {
      color: #6b7280;
      font-size: 11px;
      flex-shrink: 0;
      margin-left: 8px;
    }
    .filter-item:hover .fi-icon { color: var(--primary); }

    /* ══════════════════════════════
       JOB CARDS
    ══════════════════════════════ */
    .results-col { display: flex; flex-direction: column; gap: 10px; }

    .job-card {
      background: var(--white);
      border-radius: 14px;
      padding: 16px 18px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.07);
      border: 1.5px solid #f0f0f0;
      transition: border-color 0.2s, box-shadow 0.2s;
      position: relative;
    }
    .job-card:hover {
      border-color: #ddd6fe;
      box-shadow: 0 4px 14px rgba(124,58,237,0.1);
    }

    .urgency-banner {
      background: #fffbeb;
      border: 1px solid #fde68a;
      border-radius: 8px;
      padding: 9px 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      margin-top: 12px;
      font-size: 13px;
      font-weight: 600;
      color: #d97706;
    }

    .card-top {
      display: flex;
      align-items: flex-start;
      gap: 13px;
    }
    .co-logo {
      width: 46px;
      height: 46px;
      border-radius: 10px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 13px;
      letter-spacing: 0.5px;
      overflow: hidden;
    }
    .co-logo img { width: 100%; height: 100%; object-fit: cover; border-radius: 10px; }

    .card-body-inner { flex: 1; min-width: 0; }

    .job-title-row {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 8px;
    }
    .job-title {
      font-size: 15px;
      font-weight: 700;
      color: #111827;
      line-height: 1.3;
    }
    .bookmark-btn {
      background: none;
      border: none;
      cursor: pointer;
      color: #d1d5db;
      font-size: 18px;
      padding: 0;
      flex-shrink: 0;
      line-height: 1;
      transition: color 0.15s;
      margin-top: 1px;
    }
    .bookmark-btn:hover { color: var(--primary); }
    .bookmark-btn.active { color: var(--primary); }

    .company-sub {
      font-size: 12px;
      color: #6b7280;
      margin-top: 3px;
    }

    .tags-row {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 8px;
      margin-top: 10px;
    }
    .salary-tag {
      display: flex;
      align-items: center;
      gap: 3px;
      font-size: 12.5px;
      font-weight: 700;
      color: var(--primary);
    }
    .salary-tag .ico { font-size: 11.5px; }
    .salary-tag .amt { font-weight: 700; }
    .salary-tag .per { font-size: 11px; font-weight: 400; color: #9ca3af; }

    .pill {
      font-size: 11.5px;
      font-weight: 600;
      padding: 3px 12px;
      border-radius: 20px;
      white-space: nowrap;
    }
    .pill-fulltime   { background: #ede9fe; color: #6d28d9; }
    .pill-parttime   { background: #fef3c7; color: #b45309; }
    .pill-internship { background: #d1fae5; color: #065f46; }
    .pill-contract   { background: #fee2e2; color: #dc2626; }

    .loc-row {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 8px;
      flex-wrap: wrap;
    }
    .loc-tag {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 12px;
      color: #4b5563;
      font-weight: 500;
    }
    .loc-tag i { font-size: 11px; color: #6b7280; }

    .interview-tag {
      display: flex;
      align-items: center;
      gap: 5px;
      background: #f1f5f9;
      border-radius: 6px;
      padding: 3px 10px;
      font-size: 12px;
      color: #374151;
      font-weight: 500;
    }
    .interview-tag i { font-size: 11px; color: #6b7280; }

    .card-footer-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 12px;
    }
    .posted-text { font-size: 11.5px; color: #9ca3af; }
    .status-right { display: flex; align-items: center; gap: 10px; }

    .badge-viewed {
      font-size: 11.5px;
      color: #6b7280;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .badge-viewed i { font-size: 10px; color: #9ca3af; }

    .badge-applied {
      font-size: 12px;
      color: #16a34a;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .badge-applied i { font-size: 13px; }

    /* ── AD BOX ── */
    .ad-box {
      background: var(--white);
      border-radius: 12px;
      padding: 24px 16px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.07);
      text-align: center;
      color: var(--text-light);
      font-size: 13px;
      border: 2px dashed #e5e7eb;
      position: sticky;
      top: 72px;
      min-height: 200px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* ── PAGINATION ── */
    .pagination-wrap {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 4px;
      margin-top: 8px;
    }
    .pg-btn {
      width: 32px;
      height: 32px;
      border-radius: 8px;
      border: 1px solid var(--border);
      background: var(--white);
      color: var(--text-dark);
      font-size: 13px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.15s;
      font-weight: 500;
    }
    .pg-btn:hover { background: var(--primary-light); color: var(--primary); border-color: #ddd6fe; }
    .pg-btn.active { background: var(--primary); color: white; border-color: var(--primary); }
    .pg-btn.arrow { font-size: 14px; }

    /* ══════════════════════════════
       FOOTER
    ══════════════════════════════ */
    footer {
      background: #1e1b4b;
      color: rgba(255,255,255,0.75);
      padding: 40px 0 0;
      margin-top: auto;
    }
    .footer-inner {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 16px;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1.5fr;
      gap: 32px;
      padding-bottom: 32px;
    }
    /* Brand col */
    .footer-brand .fb-logo {
      display: flex;
      align-items: center;
      gap: 6px;
      margin-bottom: 12px;
      text-decoration: none;
    }
    .footer-brand .fb-icon {
      background: var(--primary);
      color: white;
      font-weight: 900;
      font-size: 11px;
      padding: 4px 7px;
      border-radius: 5px;
    }
    .footer-brand .fb-text {
      color: white;
      font-weight: 800;
      font-size: 17px;
    }
    .footer-brand p {
      font-size: 12.5px;
      color: rgba(255,255,255,0.55);
      line-height: 1.7;
      margin-bottom: 16px;
    }
    .footer-brand .powered {
      font-size: 11.5px;
      color: rgba(255,255,255,0.4);
    }
    .social-icons { display: flex; gap: 12px; margin-top: 14px; }
    .social-icons a {
      width: 32px;
      height: 32px;
      background: rgba(255,255,255,0.1);
      border-radius: 7px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: rgba(255,255,255,0.7);
      text-decoration: none;
      font-size: 14px;
      transition: background 0.15s, color 0.15s;
    }
    .social-icons a:hover { background: var(--primary); color: white; }

    /* Footer columns */
    .footer-col h6 {
      color: white;
      font-weight: 700;
      font-size: 13.5px;
      margin-bottom: 14px;
    }
    .footer-col ul { list-style: none; }
    .footer-col ul li { margin-bottom: 9px; }
    .footer-col ul li a {
      color: rgba(255,255,255,0.58);
      text-decoration: none;
      font-size: 13px;
      transition: color 0.15s;
    }
    .footer-col ul li a:hover { color: white; }

    /* Contact col */
    .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 12px;
    }
    .contact-item i {
      color: var(--primary-light);
      font-size: 13px;
      margin-top: 2px;
      flex-shrink: 0;
    }
    .contact-item span {
      font-size: 12.5px;
      color: rgba(255,255,255,0.65);
      line-height: 1.5;
    }

    /* Footer bottom bar */
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.08);
      padding: 16px 0;
      text-align: center;
      font-size: 12px;
      color: rgba(255,255,255,0.35);
    }

    /* ══════════════════════════════
       RESPONSIVE
    ══════════════════════════════ */
    @media (max-width: 900px) {
      .footer-grid { grid-template-columns: 1fr 1fr; gap: 24px; }
    }
    @media (max-width: 600px) {
      .footer-grid { grid-template-columns: 1fr; }
      .search-box { flex-direction: column; }
      .search-field { border-right: none; border-bottom: 1px solid #e5e7eb; width: 100%; }
      .btn-find { width: 100%; border-radius: 0 0 12px 12px; }
      .nav-links { display: none; }
    }
    @media (max-width: 480px) {
      .job-title { font-size: 13px; }
      .tags-row { gap: 4px; }
    }
  </style>
</head>
<body>
 <?php include 'navbar.php'; ?>
<!-- ══════════════════════════════
     NAVBAR
══════════════════════════════ -->

 -->
    <!-- Mobile: show only trial button -->
    <button class="btn-trial d-md-none" style="display:none!important;">Sign In</button>
  </div>
</nav>

<!-- ══════════════════════════════
     SEARCH BAR
══════════════════════════════ -->
<div class="search-section">
  <div class="search-inner">
    <div class="search-box">
      <div class="search-field">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Job title or keywords"/>
      </div>
      <div class="search-field">
        <i class="fas fa-location-dot"></i>
        <input type="text" placeholder="City or pincode"/>
      </div>
      <button class="btn-find">Find Jobs</button>
    </div>
  </div>
</div>

<!-- ══════════════════════════════
     MAIN CONTENT
══════════════════════════════ -->
<div class="page-wrapper">
  <div class="page-title">Search Results: 29</div>

  <div class="layout-grid">

    <!-- ── FILTER COLUMN ── -->
    <div class="filter-col">
      <div class="filter-panel">
        <div class="fp-header">
          <span>Filter</span>
          <a href="#">Clear All</a>
        </div>
        <div class="filter-list">
          <div class="filter-item"><span>Sort By</span><i class="fas fa-chevron-down fi-icon"></i></div>
          <div class="filter-item"><span>Date Posted</span><i class="fas fa-chevron-down fi-icon"></i></div>
          <div class="filter-item"><span>Experience</span><i class="fas fa-chevron-down fi-icon"></i></div>
          <div class="filter-item"><span>Salary</span><i class="fas fa-chevron-down fi-icon"></i></div>
          <div class="filter-item"><span>Work Mode</span><i class="fas fa-chevron-down fi-icon"></i></div>
          <div class="filter-item"><span>Job Type</span><i class="fas fa-chevron-down fi-icon"></i></div>
          <div class="filter-item"><span>Shift</span><i class="fas fa-chevron-down fi-icon"></i></div>
          <div class="filter-item"><span>Location</span><i class="fas fa-chevron-down fi-icon"></i></div>
          <div class="filter-item"><span>Role</span><i class="fas fa-chevron-down fi-icon"></i></div>
          <div class="filter-item"><span>Education</span><i class="fas fa-chevron-down fi-icon"></i></div>
        </div>
      </div>
    </div>

    <!-- ── RESULTS COLUMN ── -->
    <div class="results-col">

      <!-- Card 1: Flutter Developer - Viewed -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#ede9fe;color:#6d28d9;">SG</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">Flutter Developer</div>
              <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-fulltime">Full Time</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-person-walking"></i> Walk-In Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
          <span class="badge-viewed"><i class="fas fa-caret-up"></i> Viewed</span>
        </div>
      </div>

      <!-- Card 2: UI/UX Designer - Viewed + Urgently Hiring + Disability -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#ede9fe;color:#6d28d9;">SG</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">UI/UX Designer</div>
              <button class="bookmark-btn active"><i class="fas fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-fulltime">Full Time</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-display"></i> Online Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
          <div class="status-right">
            <span class="badge-viewed"><i class="fas fa-caret-up"></i> Viewed</span>
            <span style="color:#a78bfa;font-size:16px;"><i class="fas fa-wheelchair"></i></span>
          </div>
        </div>
        <div class="urgency-banner">
          <i class="fas fa-fire" style="color:#f97316;"></i>
          Urgently Hiring
          <i class="fas fa-fire" style="color:#f97316;"></i>
        </div>
      </div>

      <!-- Card 3: Data Entry - Applied -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#ede9fe;color:#6d28d9;">DE</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">Data Entry</div>
              <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-fulltime">Full Time</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-person-walking"></i> Walk-In Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
          <span class="badge-applied"><i class="fas fa-check-circle"></i> Applied</span>
        </div>
      </div>

      <!-- Card 4: Flutter Developer - Part Time -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#ede9fe;color:#6d28d9;">SG</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">Flutter Developer</div>
              <button class="bookmark-btn active"><i class="fas fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-parttime">Part Time</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-person-walking"></i> Walk-In Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
        </div>
      </div>

      <!-- Card 5: ANC Machine Operator - Internship -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#d1fae5;color:#065f46;">SG</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">ANC Machine Operator</div>
              <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-internship">Internship</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-display"></i> Online Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
          <span class="badge-applied"><i class="fas fa-check-circle"></i> Applied</span>
        </div>
      </div>

      <!-- Card 6: UI/UX Designer - Full Time - Applied -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#ede9fe;color:#6d28d9;">SG</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">UI/UX Designer</div>
              <button class="bookmark-btn active"><i class="fas fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-fulltime">Full Time</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-person-walking"></i> Walk-In Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
          <span class="badge-applied"><i class="fas fa-check-circle"></i> Applied</span>
        </div>
      </div>

      <!-- Card 7: Flutter Developer - Full Time -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#ede9fe;color:#6d28d9;">SG</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">Flutter Developer</div>
              <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-fulltime">Full Time</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-person-walking"></i> Walk-In Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
        </div>
      </div>

      <!-- Card 8: ANC Machine Operator - Full Time - Applied -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#d1fae5;color:#065f46;">SG</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">ANC Machine Operator</div>
              <button class="bookmark-btn active"><i class="fas fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-fulltime">Full Time</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-display"></i> Online Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
          <span class="badge-applied"><i class="fas fa-check-circle"></i> Applied</span>
        </div>
      </div>

      <!-- Card 9: UI/UX Designer - Applied -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#ede9fe;color:#6d28d9;">SG</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">UI/UX Designer</div>
              <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-fulltime">Full Time</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-person-walking"></i> Walk-In Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
          <span class="badge-applied"><i class="fas fa-check-circle"></i> Applied</span>
        </div>
      </div>

      <!-- Card 10: Data Entry - Full Time - Applied -->
      <div class="job-card">
        <div class="card-top">
          <div class="co-logo" style="background:#ede9fe;color:#6d28d9;">SG</div>
          <div class="card-body-inner">
            <div class="job-title-row">
              <div class="job-title">Data Entry</div>
              <button class="bookmark-btn active"><i class="fas fa-bookmark"></i></button>
            </div>
            <div class="company-sub">Smart Global Solutions</div>
            <div class="tags-row">
              <span class="salary-tag"><i class="fas fa-indian-rupee-sign ico"></i><span class="amt"> 8,000 - 10,000</span><span class="per">/monthly</span></span>
              <span class="pill pill-fulltime">Full Time</span>
            </div>
            <div class="loc-row">
              <span class="loc-tag"><i class="fas fa-map-marker-alt"></i> Tiruppur</span>
              <span class="interview-tag"><i class="fas fa-person-walking"></i> Walk-In Interview</span>
            </div>
          </div>
        </div>
        <div class="card-footer-row">
          <span class="posted-text">Posted: 5 days ago</span>
          <span class="badge-applied"><i class="fas fa-check-circle"></i> Applied</span>
        </div>
      </div>

      <!-- Pagination -->
      <div class="pagination-wrap">
        <a href="#" class="pg-btn arrow">&#8592;</a>
        <a href="#" class="pg-btn active">1</a>
        <a href="#" class="pg-btn">2</a>
        <a href="#" class="pg-btn">3</a>
        <span class="pg-btn" style="border:none;background:none;cursor:default;color:var(--text-muted);">...</span>
        <a href="#" class="pg-btn">67</a>
        <a href="#" class="pg-btn">68</a>
        <a href="#" class="pg-btn arrow">&#8594;</a>
      </div>

    </div><!-- end results-col -->

    <!-- ── AD COLUMN ── -->
    <div class="ad-col">
      <div class="ad-box"><span>Ads</span></div>
    </div>

  </div><!-- end layout-grid -->
</div><!-- end page-wrapper -->

<!-- ══════════════════════════════
     FOOTER
══════════════════════════════ -->
<footer>
  <div class="footer-inner">
    </div><!-- end footer-grid -->
  <?php include 'footer.php'; ?>
    <div class="footer-bottom">
      © 2024 TrueJobs — All Rights Reserved. Smart Global Solutions.
    </div>
    
  </div>
</footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
 
  document.querySelectorAll('.bookmark-btn').forEach(btn => {
    btn.addEventListener('click',() =>{
        btn.classList.toggle('active');
})

    }
)
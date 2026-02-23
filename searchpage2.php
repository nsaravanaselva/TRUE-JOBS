<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Flutter Developer - Smart Global Solutions</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
  <style>
    * { font-family: 'Poppins', sans-serif; }

    body { background: #f0f0f5; min-height: 100vh; }

    /* ── TOP NAVBAR ── */
    .top-navbar {
      background: linear-gradient(135deg, #1a0a3c 0%, #2d1b6b 40%, #3a2080 60%, #1e3a7a 100%);
      padding: 18px 0;
      border-bottom: 2px solid rgba(100, 180, 255, 0.3);
    }
    .search-bar-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    /* Single combined search bar */
    .search-combined {
      display: flex;
      align-items: center;
      background: rgba(255,255,255,0.12);
      border: 1px solid rgba(255,255,255,0.25);
      border-radius: 10px;
      overflow: hidden;
      width: 100%;
      max-width: 560px;
    }
    .search-field {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 16px;
      flex: 1;
    }
    .search-field i { color: rgba(255,255,255,0.6); font-size: 14px; flex-shrink: 0; }
    .search-field input {
      border: none; outline: none; background: transparent;
      font-size: 13px; color: #fff; width: 100%;
    }
    .search-field input::placeholder { color: rgba(255,255,255,0.55); }
    .search-divider {
      width: 1px; height: 28px;
      background: rgba(255,255,255,0.3);
      flex-shrink: 0;
    }
    .btn-find {
      background: #4a2a8a;
      color: #fff;
      border: none;
      border-left: 1px solid rgba(255,255,255,0.2);
      padding: 11px 24px;
      font-size: 13px;
      font-weight: 600;
      white-space: nowrap;
      cursor: pointer;
      transition: background 0.2s;
      flex-shrink: 0;
    }
    .btn-find:hover { background: #5c38a8; }

    @media (max-width: 576px) {
      .search-combined { max-width: 95%; }
      .btn-find { padding: 11px 16px; font-size: 12px; }
    }

    /* ── MAIN LAYOUT ── */
    .main-wrapper { padding: 24px 0 40px; }

    /* ── JOB DETAIL CARD ── */
    .job-detail-card {
      background: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    }

    /* ── JOB HEADER SECTION ── */
    .job-header-section {
      padding: 16px 20px 0;
      border-bottom: 1px solid #eee;
    }

    /* Row 1: logo + title/company  |  location + date + icons */
    .job-header-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }
    .job-header-left {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .company-logo-img {
      width: 52px; height: 52px;
      border-radius: 10px;
      object-fit: cover;
      border: 1.5px solid #e8e8e8;
      flex-shrink: 0;
    }
    .company-logo-placeholder {
      width: 52px; height: 52px; border-radius: 10px;
      background: linear-gradient(135deg, #6c3fc5, #9b6de0);
      display: flex; align-items: center; justify-content: center;
      color: #fff; font-weight: 700; font-size: 18px;
      flex-shrink: 0;
      border: 1.5px solid #e8e8e8;
    }
    .job-title-text {
      font-size: 15px; font-weight: 700; color: #1a1a2e; margin: 0 0 2px;
    }
    .company-name-text {
      font-size: 12px; color: #888; margin: 0;
    }

    .job-header-right {
      display: flex;
      align-items: center;
      gap: 14px;
      flex-wrap: wrap;
    }
    .job-meta-right {
      display: flex; align-items: center; gap: 6px;
    }
    .job-meta-right .loc-icon {
      color: #38bdf8; font-size: 13px;
    }
    .job-meta-right span {
      font-size: 12px; color: #555;
    }
    .job-meta-right .divider {
      color: #ccc; font-size: 12px;
    }
    .job-header-actions {
      display: flex; gap: 8px; align-items: center;
    }
    .icon-btn {
      width: 30px; height: 30px; border-radius: 7px;
      border: 1.5px solid #e0e0e0;
      background: #fff; display: flex; align-items: center; justify-content: center;
      cursor: pointer; color: #888; font-size: 13px;
      transition: all 0.2s; text-decoration: none;
    }
    .icon-btn:hover { border-color: #6c3fc5; color: #6c3fc5; }

    /* Row 2: tabs left + apply button right */
    .job-header-bottom {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      margin-top: 14px;
      gap: 12px;
      flex-wrap: wrap;
    }
    .job-tabs {
      display: flex;
      gap: 0;
    }
    .job-tab {
      padding: 10px 18px;
      font-size: 13px;
      font-weight: 500;
      color: #888;
      cursor: pointer;
      border-bottom: 2px solid transparent;
      margin-bottom: -1px;
      transition: all 0.2s;
    }
    .job-tab.active {
      color: #22a86e;
      border-bottom-color: #22a86e;
      font-weight: 600;
    }
    .job-tab:hover:not(.active) { color: #333; }

    .btn-apply {
      background: #b89fd8;
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 9px 28px;
      font-size: 13px;
      font-weight: 600;
      margin-bottom: 6px;
      transition: background 0.2s;
      white-space: nowrap;
    }
    .btn-apply:hover { background: #9b7fc5; color: #fff; }

    /* Company tab content */
    .company-content { padding: 0 20px 24px; }
    .company-header-row {
      display: flex; align-items: center; gap: 12px;
      padding: 16px 0 14px;
      border-bottom: 1px solid #f0f0f5;
    }
    .company-logo-lg {
      width: 52px; height: 52px; border-radius: 12px;
      background: linear-gradient(135deg, #6c3fc5, #9b6de0);
      display: flex; align-items: center; justify-content: center;
      color: #fff; font-weight: 700; font-size: 18px;
    }
    .company-name-lg { font-size: 15px; font-weight: 700; color: #1a1a2e; margin: 0; }

    .section-title { font-size: 14px; font-weight: 700; color: #1a1a2e; margin: 18px 0 12px; }

    /* Details grid */
    /* ── Company Details Box ── */
    .details-box {
      border: 1.5px solid #e0daf0;
      border-radius: 12px;
      overflow: hidden;
    }
    .details-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      padding: 18px 20px 6px;
      gap: 18px 10px;
    }
    @media(max-width: 576px) { .details-grid { grid-template-columns: repeat(2, 1fr); } }
    .detail-item label {
      font-size: 11px; color: #7c5cbf;
      display: block; margin-bottom: 4px; font-weight: 500;
    }
    .detail-item .val {
      font-size: 13px; font-weight: 400; color: #2a2a2a;
    }
    .detail-item .val a {
      color: #2a2a2a; text-decoration: underline; font-size: 13px; font-weight: 400;
    }
    .detail-item .val a:hover { color: #6c3fc5; }
    .details-location-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 20px 16px;
      border-top: 1.5px solid #e0daf0;
      margin-top: 10px;
      gap: 10px;
      flex-wrap: wrap;
    }
    .details-location-row .loc-label {
      font-size: 11px; color: #7c5cbf;
      font-weight: 500; display: block; margin-bottom: 4px;
    }
    .details-location-row .loc-val {
      font-size: 13px; color: #2a2a2a;
    }
    .map-link {
      font-size: 13px; color: #22a86e;
      text-decoration: none; white-space: nowrap;
      font-weight: 600; display: flex; align-items: center; gap: 6px;
    }
    .map-link:hover { text-decoration: underline; }

    /* What we do */
    /* ── What We Do Box ── */
    .what-we-do-box {
      border: 1.5px solid #e0daf0;
      border-radius: 12px;
      padding: 18px 20px 0;
      overflow: hidden;
    }
    .what-we-do { margin-top: 0; }
    .what-we-do .intro-text {
      font-size: 13px; color: #333; line-height: 1.75; margin-bottom: 12px;
    }
    .what-we-do .service-item {
      display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px;
    }
    .what-we-do .service-item .check {
      font-size: 15px; margin-top: 1px; flex-shrink: 0; line-height: 1.6;
    }
    .what-we-do .service-item p { margin: 0; font-size: 13px; color: #333; line-height: 1.65; }
    .service-title {
      font-size: 13px; font-weight: 700; color: #1a1a2e;
      display: inline; margin-bottom: 0 !important;
    }
    .service-desc { font-size: 13px; color: #444; margin-top: 1px !important; }
    /* Show more row - right aligned, inside box bottom */
    .show-more-row {
      display: flex;
      justify-content: flex-end;
      padding: 10px 0 14px;
      border-top: 1px solid #f0ecf8;
      margin-top: 10px;
    }
    .show-more-btn {
      background: none; border: none; color: #22a86e;
      font-size: 13px; font-weight: 600; padding: 0; cursor: pointer;
    }
    .show-more-btn:hover { text-decoration: underline; }

    /* ── Job Postings Section ── */
    .job-postings-section { padding: 6px 20px 24px; }
    .job-postings-title { font-size: 14px; font-weight: 700; color: #1a1a2e; margin-bottom: 12px; }

    /* Each card: border box, no inner padding bottom (urgently banner flush) */
    .posting-card {
      border: 1.5px solid #e8e8f0;
      border-radius: 14px;
      margin-bottom: 14px;
      overflow: hidden;
      transition: box-shadow 0.2s, border-color 0.2s;
    }
    .posting-card:hover { box-shadow: 0 4px 18px rgba(108,63,197,0.1); border-color: #d4beff; }

    /* Card inner padding area */
    .posting-card-inner { padding: 14px 16px 12px; }

    .posting-card-header { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; }

    /* Logo: round image style */
    .posting-card-logo {
      width: 44px; height: 44px; border-radius: 50%;
      background: #e8e4f3;
      display: flex; align-items: center; justify-content: center;
      color: #6c3fc5; font-weight: 700; font-size: 13px; flex-shrink: 0;
      overflow: hidden; border: 1.5px solid #e0daf0;
    }
    .posting-card-logo img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; }

    .posting-title { font-size: 14px; font-weight: 700; color: #1a1a2e; margin: 0; }
    .posting-company { font-size: 12px; color: #888; margin: 2px 0 0; }

    /* Bookmark icon - purple outline style */
    .bookmark-btn {
      background: none; border: none; padding: 0; cursor: pointer;
      font-size: 18px; color: #9b7fd4; line-height: 1;
    }
    .bookmark-btn:hover { color: #6c3fc5; }
    .bookmark-btn.saved { color: #6c3fc5; }

    /* Tags row */
    .posting-tags { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; margin-top: 10px; }
    .tag-salary {
      display: flex; align-items: center; gap: 4px;
      font-size: 12px; color: #3a3a3a; font-weight: 600;
    }
    .tag-salary i { color: #6c3fc5; font-size: 12px; }
    .tag-salary .sal-monthly { color: #aaa; font-weight: 400; font-size: 11px; margin-left: 2px; }
    .tag-pill {
      background: #ede8f7; color: #6c3fc5;
      border-radius: 20px; padding: 3px 12px; font-size: 11px; font-weight: 500;
    }
    .tag-pill-outline {
      border: 1.5px solid #d8d8d8; color: #555; background: #fff;
      border-radius: 20px; padding: 3px 12px; font-size: 11px; font-weight: 400;
    }
    .disability-icon { color: #4a90e2; font-size: 16px; }

    /* Location + date + viewed row */
    .posting-meta-row {
      display: flex; align-items: center; justify-content: space-between;
      margin-top: 10px; gap: 6px; flex-wrap: wrap;
    }
    .posting-location { display: flex; align-items: center; gap: 5px; font-size: 12px; color: #666; }
    .posting-location i { font-size: 12px; color: #666; }
    .posting-date { font-size: 11px; color: #aaa; }
    .viewed-text { font-size: 11px; color: #aaa; display: flex; align-items: center; gap: 3px; }
    .viewed-dot { width: 5px; height: 5px; border-radius: 50%; background: #ccc; display: inline-block; }

    .applied-badge {
      display: flex; align-items: center; gap: 4px;
      font-size: 11px; color: #22c55e; font-weight: 500;
    }

    /* Urgently Hiring - full width banner at bottom of card */
    .urgently-banner {
      background: #fff0ee;
      color: #e8502a;
      font-size: 12px; font-weight: 700;
      padding: 8px 16px;
      text-align: center;
      border-top: 1px solid #fdddd6;
      display: flex; align-items: center; justify-content: center; gap: 6px;
    }

    /* View All Posts */
    .view-all-btn {
      display: block; text-align: right;
      color: #6c3fc5; font-size: 13px; font-weight: 600;
      text-decoration: none; margin-top: 4px;
    }
    .view-all-btn:hover { text-decoration: underline; }

    /* ── SIMILAR JOBS SIDEBAR ── */
    .similar-jobs-card {
      background: #fff;
      border-radius: 14px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
      overflow: hidden;
    }
    .similar-jobs-title {
      font-size: 14px; font-weight: 700; color: #1a1a2e;
      padding: 16px 16px 12px;
      border-bottom: 1px solid #f0f0f5;
      text-align: center;
    }
    /* Each SJ item = its own card with border */
    .similar-job-item {
      margin: 10px 10px 0;
      border: 1.5px solid #e8e8f0;
      border-radius: 12px;
      padding: 12px 14px;
      overflow: hidden;
      transition: box-shadow 0.2s, border-color 0.2s;
      cursor: pointer;
    }
    .similar-job-item:last-child { margin-bottom: 10px; }
    .similar-job-item:hover { box-shadow: 0 3px 12px rgba(108,63,197,0.1); border-color: #c8b8f0; }
    .similar-job-item.active { border-color: #38bdf8; box-shadow: 0 0 0 1.5px #38bdf8; }

    .sj-header { display: flex; align-items: center; gap: 10px; margin-bottom: 8px; }

    /* Round logo - same style as posting-card-logo */
    .sj-logo {
      width: 42px; height: 42px; border-radius: 50%;
      background: #e8e4f3;
      display: flex; align-items: center; justify-content: center;
      color: #6c3fc5; font-weight: 700; font-size: 12px; flex-shrink: 0;
      overflow: hidden; border: 1.5px solid #e0daf0;
    }
    .sj-logo img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; }

    .sj-title { font-size: 13px; font-weight: 700; color: #1a1a2e; margin: 0; }
    .sj-company { font-size: 11px; color: #888; margin: 2px 0 0; }

    /* Salary row */
    .sj-salary {
      display: flex; align-items: center; gap: 4px;
      font-size: 12px; color: #3a3a3a; font-weight: 600; margin-bottom: 6px;
    }
    .sj-salary i { color: #6c3fc5; font-size: 12px; }
    .sj-salary .sal-unit { color: #aaa; font-weight: 400; font-size: 11px; }

    /* Location + date row */
    .sj-footer {
      display: flex; align-items: center; justify-content: space-between;
      gap: 4px;
    }
    .sj-location { font-size: 12px; color: #666; display: flex; align-items: center; gap: 4px; }
    .sj-location i { font-size: 12px; }
    .sj-date { font-size: 11px; color: #aaa; }

    /* Disability icon */
    .sj-disability { color: #4a90e2; font-size: 15px; margin-left: 4px; }

    /* Urgently Hiring banner inside sj card */
    .sj-urgently {
      background: #fff0ee;
      color: #e8502a;
      font-size: 12px; font-weight: 700;
      padding: 7px 10px;
      text-align: center;
      border-top: 1px solid #fdddd6;
      margin: 8px -14px -12px;
      display: flex; align-items: center; justify-content: center; gap: 5px;
    }

    /* Responsive tweaks */
    @media (max-width: 991px) {
      .similar-jobs-col { margin-top: 20px; }
    }
    @media (max-width: 576px) {
      .job-header { flex-direction: column; }
      .apply-btn-row { justify-content: stretch; }
      .btn-apply { width: 100%; }
      .details-grid { grid-template-columns: 1fr 1fr; }
    }

    /* Tab content visibility */
    .tab-content-panel { display: none; }
    .tab-content-panel.active { display: block; }
  </style>
</head>
<body>
 <?php include 'navbar.php'; ?>
<!-- TOP NAVBAR -->
<nav class="top-navbar">
  <div class="container">
    <div class="search-bar-wrapper">
      <div class="search-combined">
        <div class="search-field">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Job title or keywords"/>
        </div>
        <div class="search-divider"></div>
        <div class="search-field">
          <i class="fas fa-location-dot"></i>
          <input type="text" placeholder="City or pincode"/>
        </div>
        <button class="btn-find">Find Jobs</button>
      </div>
    </div>
  </div>
</nav>

<!-- MAIN -->
<div class="main-wrapper">
  <div class="container">
    <div class="row g-4">

      <!-- LEFT: JOB DETAIL -->
      <div class="col-lg-8">
        <div class="job-detail-card">

          <!-- Header Section -->
          <div class="job-header-section">
            <!-- Row 1: Logo+Title LEFT | Location+Date+Icons RIGHT -->
            <div class="job-header-top">
              <div class="job-header-left">
                <div class="company-logo-placeholder">S</div>
                <div>
                  <p class="job-title-text">Flutter Developer</p>
                  <p class="company-name-text">Smart Global Solutions</p>
                </div>
              </div>
              <div class="job-header-right">
                <div class="job-meta-right">
                  <i class="fas fa-location-dot loc-icon"></i>
                  <span>Tiruppur</span>
                  <span class="divider">|</span>
                  <span>Job posted on: 25/02/2025</span>
                </div>
                <div class="job-header-actions">
                  <div class="icon-btn"><i class="fas fa-share-nodes"></i></div>
                  <div class="icon-btn"><i class="far fa-bookmark"></i></div>
                </div>
              </div>
            </div>

            <!-- Row 2: Tabs LEFT | Apply Button RIGHT -->
            <div class="job-header-bottom">
              <div class="job-tabs">
                <div class="job-tab"><a href="searchpage1.php">Job details</a></div>
                <div class="job-tab active">About company</div>
              </div>
              <button class="btn-apply">Apply Job</button>
            </div>
          </div>

          <!-- TAB: Job Details -->
          <div id="tab-details" class="tab-content-panel">
            <div class="company-content">
              <p style="font-size:13px;color:#555;line-height:1.8;">
                We are looking for a skilled <strong>Flutter Developer</strong> to join our dynamic team at Smart Global Solutions. The ideal candidate will have hands-on experience in building cross-platform mobile applications using Flutter and Dart.
              </p>
              <div class="section-title">Requirements</div>
              <div class="what-we-do">
                <div class="service-item"><span class="check">✅</span><p>1+ years of experience in Flutter development</p></div>
                <div class="service-item"><span class="check">✅</span><p>Proficient in Dart programming language</p></div>
                <div class="service-item"><span class="check">✅</span><p>Experience with REST APIs and third-party integrations</p></div>
                <div class="service-item"><span class="check">✅</span><p>Strong understanding of UI/UX principles</p></div>
                <div class="service-item"><span class="check">✅</span><p>Knowledge of state management (Provider, Bloc, GetX)</p></div>
              </div>
            </div>
          </div>

          <!-- TAB: About Company -->
          <div id="tab-company" class="tab-content-panel active">
            <div class="company-content">
              <!-- Company header -->
              <div class="company-header-row">
                <div class="company-logo-lg">S</div>
                <div>
                  <p class="company-name-lg">Smart Global Solutions</p>
                </div>
              </div>

              <!-- Company Details -->
              <div class="section-title">Company Details</div>
              <div class="details-box">
                <div class="details-grid">
                  <div class="detail-item">
                    <label>Industry/domain</label>
                    <div class="val">IT Servicing &amp; Consulting</div>
                  </div>
                  <div class="detail-item">
                    <label>Company size</label>
                    <div class="val">20 - 35 Members</div>
                  </div>
                  <div class="detail-item">
                    <label>Year of establishment</label>
                    <div class="val">2017</div>
                  </div>
                  <div class="detail-item">
                    <label>Mail id</label>
                    <div class="val">hrmsmartglobalsolutions.in</div>
                  </div>
                  <div class="detail-item">
                    <label>Website</label>
                    <div class="val"><a href="https://smartglobalsolutions.in" target="_blank">https://smartglobalsolutions.in</a></div>
                  </div>
                  <div class="detail-item">
                    <label>GST no.</label>
                    <div class="val">33ADWFS21640128</div>
                  </div>
                </div>
                <!-- Location row inside the box -->
                <div class="details-location-row">
                  <div>
                    <span class="loc-label">Location</span>
                    <span class="loc-val">9th Street, Sri Krishna Nagar, Tiruppur, Tamil Nadu 641 103</span>
                  </div>
                  <a href="#" class="map-link">Show on Map &nbsp;→</a>
                </div>
              </div>

              <!-- What We Do -->
              <div class="section-title">What We Do</div>
              <div class="what-we-do-box">
                <div class="what-we-do">
                  <p class="intro-text">At <strong>Smart Global Solutions</strong>, we specialize in delivering cutting-edge IT solutions that drive business growth and efficiency. Our expert team harnesses the power of technology and innovation to meet the unique needs of our clients.</p>
                  <div class="service-item">
                    <span class="check">✅</span>
                    <div>
                      <p><span class="service-title">Custom Software Development:</span><br>
                      We design and develop tailored software solutions that streamline operations and enhance productivity.</p>
                    </div>
                  </div>
                  <div class="service-item">
                    <span class="check">✅</span>
                    <div>
                      <p><span class="service-title">Web &amp; Mobile App Development:</span><br>
                      Our skilled developers create user-friendly, high-performance apps that offer seamless experiences across platforms.</p>
                    </div>
                  </div>
                  <div class="service-item">
                    <span class="check">✅</span>
                    <div>
                      <p><span class="service-title">Cloud Solutions:</span><br>
                      We help businesses transition to the cloud, ensuring scalability, security, and flexibility.</p>
                    </div>
                  </div>
                  <div id="more-content" style="display:none;">
                    <div class="service-item">
                      <span class="check">✅</span>
                      <div>
                        <p><span class="service-title">IT Consulting &amp; Support:</span><br>
                        We provide expert consulting and ongoing support, helping you make informed tech decisions.</p>
                      </div>
                    </div>
                    <div class="service-item">
                      <span class="check">✅</span>
                      <div>
                        <p><span class="service-title">Data Analytics &amp; AI:</span><br>
                        Transforming raw data into actionable insights to drive smarter business decisions.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="show-more-row">
                  <button class="show-more-btn" onclick="toggleMore(this)">Show more</button>
                </div>
              </div>
            </div>

            <!-- Job Postings -->
            <div class="job-postings-section">
              <div class="job-postings-title">Job Postings</div>

              <!-- Posting 1: Flutter Developer -->
              <div class="posting-card">
                <div class="posting-card-inner">
                  <div class="posting-card-header">
                    <div style="display:flex;gap:12px;align-items:center;">
                      <div class="posting-card-logo">
                        <span style="font-size:13px;font-weight:700;color:#6c3fc5;">FL</span>
                      </div>
                      <div>
                        <p class="posting-title">Flutter Developer</p>
                        <p class="posting-company">Smart Global Solutions</p>
                      </div>
                    </div>
                    <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
                  </div>
                  <div class="posting-tags">
                    <span class="tag-salary"><i class="fas fa-indian-rupee-sign"></i> 8,000 - 10,000 <span class="sal-monthly">/monthly</span></span>
                    <span class="tag-pill">Full Time</span>
                  </div>
                  <div class="posting-meta-row">
                    <span class="posting-location"><i class="fas fa-location-dot"></i> Tiruppur</span>
                    <span class="tag-pill-outline" style="font-size:11px;">Walk-In Interview</span>
                  </div>
                  <div class="posting-meta-row" style="margin-top:6px;">
                    <span class="posting-date">Posted: 5 days ago</span>
                    <span class="viewed-text"><span class="viewed-dot"></span> Viewed</span>
                  </div>
                </div>
              </div>

              <!-- Posting 2: UI/UX Designer -->
              <div class="posting-card">
                <div class="posting-card-inner">
                  <div class="posting-card-header">
                    <div style="display:flex;gap:12px;align-items:center;">
                      <div class="posting-card-logo" style="background:#ede0f7;">
                        <span style="font-size:12px;font-weight:700;color:#7c3fc5;">UI</span>
                      </div>
                      <div>
                        <p class="posting-title">UI/UX Designer</p>
                        <p class="posting-company">Smart Global Solutions</p>
                      </div>
                    </div>
                    <button class="bookmark-btn saved"><i class="fas fa-bookmark"></i></button>
                  </div>
                  <div class="posting-tags">
                    <span class="tag-salary"><i class="fas fa-indian-rupee-sign"></i> 8,000 - 10,000 <span class="sal-monthly">/monthly</span></span>
                    <span class="tag-pill">Full Time</span>
                    <i class="fas fa-wheelchair disability-icon"></i>
                  </div>
                  <div class="posting-meta-row">
                    <span class="posting-location"><i class="fas fa-location-dot"></i> Tiruppur</span>
                    <span class="tag-pill-outline" style="font-size:11px;">Online Interview</span>
                  </div>
                  <div class="posting-meta-row" style="margin-top:6px;">
                    <span class="posting-date">Posted: 5 days ago</span>
                    <span class="viewed-text"><span class="viewed-dot"></span> Viewed</span>
                  </div>
                </div>
                <!-- Full-width Urgently Hiring banner -->
                <div class="urgently-banner">
                  Urgently Hiring &nbsp;🔥
                </div>
              </div>

              <!-- Posting 3: Data Entry -->
              <div class="posting-card">
                <div class="posting-card-inner">
                  <div class="posting-card-header">
                    <div style="display:flex;gap:12px;align-items:center;">
                      <div class="posting-card-logo" style="background:#e8e8e8;">
                        <span style="font-size:10px;font-weight:600;color:#777;">Logo</span>
                      </div>
                      <div>
                        <p class="posting-title">Data Entry</p>
                        <p class="posting-company">Smart Global Solutions</p>
                      </div>
                    </div>
                    <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
                  </div>
                  <div class="posting-tags">
                    <span class="tag-salary"><i class="fas fa-indian-rupee-sign"></i> 8,000 - 10,000 <span class="sal-monthly">/monthly</span></span>
                    <span class="tag-pill">Full Time</span>
                  </div>
                  <div class="posting-meta-row">
                    <span class="posting-location"><i class="fas fa-location-dot"></i> Tiruppur</span>
                    <span class="tag-pill-outline" style="font-size:11px;">Walk-In Interview</span>
                  </div>
                  <div class="posting-meta-row" style="margin-top:6px;">
                    <span class="posting-date">Posted: 5 days ago</span>
                    <span class="applied-badge"><i class="fas fa-check-circle"></i> Applied</span>
                  </div>
                </div>
              </div>

              <a href="#" class="view-all-btn">View All Posts</a>
            </div>
          </div>
          <!-- end tab-company -->

        </div>
      </div>
      <!-- end left col -->

      <!-- RIGHT: SIMILAR JOBS -->
      <div class="col-lg-4 similar-jobs-col">
        <div class="similar-jobs-card">
          <div class="similar-jobs-title">Similar Jobs</div>

          <!-- SJ 1: Flutter Developer -->
          <div class="similar-job-item" onclick="selectSJ(this)">
            <div class="sj-header">
              <div class="sj-logo" style="background:#ede8f7;">
                <span style="font-size:11px;font-weight:700;color:#6c3fc5;">FL</span>
              </div>
              <div>
                <p class="sj-title">Flutter Developer</p>
                <p class="sj-company">Smart Global Solutions</p>
              </div>
            </div>
            <div class="sj-salary">
              <i class="fas fa-indian-rupee-sign"></i> 8,000 - 10,000
              <span class="sal-unit">monthly</span>
            </div>
            <div class="sj-footer">
              <span class="sj-location"><i class="fas fa-location-dot"></i> Tiruppur</span>
              <span class="sj-date">Posted: 5 days ago</span>
            </div>
          </div>

          <!-- SJ 2: UI/UX Designer -->
          <div class="similar-job-item" onclick="selectSJ(this)">
            <div class="sj-header">
              <div class="sj-logo" style="background:#ede0f7;">
                <span style="font-size:11px;font-weight:700;color:#7c3fc5;">UI</span>
              </div>
              <div style="display:flex;align-items:flex-start;justify-content:space-between;flex:1;">
                <div>
                  <p class="sj-title">UI/UX Designer</p>
                  <p class="sj-company">Smart Global Solutions</p>
                </div>
                <i class="fas fa-wheelchair sj-disability"></i>
              </div>
            </div>
            <div class="sj-salary">
              <i class="fas fa-indian-rupee-sign"></i> 8,000 - 10,000
              <span class="sal-unit">monthly</span>
            </div>
            <div class="sj-footer">
              <span class="sj-location"><i class="fas fa-location-dot"></i> Tiruppur</span>
              <span class="sj-date">Posted: 5 days ago</span>
            </div>
            <div class="sj-urgently">Urgently Hiring 🔥</div>
          </div>

          <!-- SJ 3: UI/UX & Graphic Designer -->
          <div class="similar-job-item" onclick="selectSJ(this)">
            <div class="sj-header">
              <div class="sj-logo" style="background:#e8e8e8;">
                <span style="font-size:10px;font-weight:600;color:#777;">Logo</span>
              </div>
              <div>
                <p class="sj-title">UI/UX &amp; Graphic D...</p>
                <p class="sj-company">Smart Global Solutions</p>
              </div>
            </div>
            <div class="sj-salary">
              <i class="fas fa-indian-rupee-sign"></i> 8,000 - 10,000
              <span class="sal-unit">monthly</span>
            </div>
            <div class="sj-footer">
              <span class="sj-location"><i class="fas fa-location-dot"></i> Tiruppur</span>
              <span class="sj-date">Posted: 5 days ago</span>
            </div>
          </div>

          <!-- SJ 4: Flutter Developer -->
          <div class="similar-job-item" onclick="selectSJ(this)">
            <div class="sj-header">
              <div class="sj-logo" style="background:#ede8f7;">
                <span style="font-size:11px;font-weight:700;color:#6c3fc5;">FL</span>
              </div>
              <div>
                <p class="sj-title">Flutter Developer</p>
                <p class="sj-company">Smart Global Solutions</p>
              </div>
            </div>
            <div class="sj-salary">
              <i class="fas fa-indian-rupee-sign"></i> 8,000 - 10,000
              <span class="sal-unit">monthly</span>
            </div>
            <div class="sj-footer">
              <span class="sj-location"><i class="fas fa-location-dot"></i> Tiruppur</span>
              <span class="sj-date">Posted: 5 days ago</span>
            </div>
          </div>

        </div>
      </div>
      <!-- end right col -->

    </div>
  </div>
</div>
 <?php include 'footer.php'; ?>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function selectSJ(el) {
    document.querySelectorAll('.similar-job-item').forEach(i => i.classList.remove('active'));
    el.classList.add('active');
  }

  function switchTab(tab, el) {
    document.querySelectorAll('.job-tab').forEach(t => t.classList.remove('active'));
    el.classList.add('active');
    document.querySelectorAll('.tab-content-panel').forEach(p => p.classList.remove('active'));
    document.getElementById('tab-' + tab).classList.add('active');
  }

  function toggleMore(btn) {}
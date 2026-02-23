<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flutter Developer - Smart Global Solutions</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --purple:       #6b21c8;
    --purple-dark:  #4a0d8f;
    --purple-mid:   #7c3aed;
    --purple-light: #9b59e8;
    --purple-bg:    #f3e8ff;
    --green-bg:     #f0fdf4;
    --green-border: #bbf7d0;
    --green-title:  #15803d;
    --orange-bg:    #fff7ed;
    --orange-bdr:   #fed7aa;
    --yellow-bg:    #fefce8;
    --yellow-bdr:   #fde68a;
    --yellow-text:  #92400e;
    --border:       #e5e7eb;
    --text:         #111827;
    --text-sub:     #6b7280;
    --text-light:   #9ca3af;
    --white:        #ffffff;
    --bg:           #f4f4f7;
  }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
  }

  /* ══════════════════════════════════════
     NAVBAR
  ══════════════════════════════════════ */
  nav {
    background: linear-gradient(
      90deg,
      #1e0640 0%,
      #3d0d6e 20%,
      #6b22c4 50%,
      #3d0d6e 78%,
      #12032a 100%
    );
    padding: 16px 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: sticky;
    top: 0;
    z-index: 100;
    border-bottom: 2px solid rgba(120, 180, 255, 0.28);
  }

  .search-bar {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    overflow: hidden;
    width: 100%;
    max-width: 660px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.28);
  }

  .search-field {
    display: flex;
    align-items: center;
    padding: 0 20px;
    height: 50px;
    flex: 1;
    gap: 10px;
    border-right: 1px solid var(--border);
  }

  .search-field svg { color: #9ca3af; flex-shrink: 0; }

  .search-field input {
    border: none; outline: none;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px; color: var(--text);
    width: 100%; background: transparent;
  }

  .search-field input::placeholder { color: #b0b7c3; }

  .location-field {
    display: flex;
    align-items: center;
    padding: 0 20px;
    height: 50px;
    gap: 10px;
    min-width: 200px;
  }

  .location-field svg { color: #9ca3af; flex-shrink: 0; }

  .location-field input {
    border: none; outline: none;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px; color: var(--text);
    background: transparent; width: 100%;
  }

  .location-field input::placeholder { color: #b0b7c3; }

  .find-btn {
    background: var(--purple);
    color: white; border: none;
    height: 50px; padding: 0 30px;
    border-radius: 50px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px; font-weight: 600;
    cursor: pointer; white-space: nowrap;
    flex-shrink: 0; letter-spacing: 0.1px;
    transition: background 0.2s, transform 0.1s;
  }

  .find-btn:hover { background: var(--purple-dark); transform: translateY(-1px); }

  /* ══════════════════════════════════════
     PAGE LAYOUT
  ══════════════════════════════════════ */
  .page-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 28px 20px;
    display: grid;
    grid-template-columns: 1fr 320px;
    gap: 24px;
    align-items: start;
  }

  /* ══════════════════════════════════════
     MAIN JOB CARD
  ══════════════════════════════════════ */
  .job-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 2px 16px rgba(0,0,0,0.07);
  }

  /* ── Job Header ── */
  .job-header {
    padding: 18px 20px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
  }

  /* Left side: logo + title/company */
  .header-left {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
  }

  /* Circular logo — building illustration style */
  .company-logo {
    width: 56px; height: 56px;
    border-radius: 50%;
    flex-shrink: 0;
    border: 2px solid #e5e7eb;
    overflow: hidden;
    position: relative;
    background: linear-gradient(180deg, #87ceeb 0%, #87ceeb 40%, #c97b4b 40%, #c97b4b 100%);
  }

  /* Building SVG inside logo */
  .logo-scene {
    width: 100%; height: 100%;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    padding-bottom: 2px;
  }

  .logo-building-svg {
    width: 38px; height: 34px;
  }

  .header-title-wrap { min-width: 0; }

  .job-title {
    font-family: 'DM Sans', sans-serif;
    font-size: 16px; font-weight: 700;
    color: var(--text); line-height: 1.25;
  }

  .company-name {
    font-size: 12px; color: var(--text-sub); margin-top: 2px;
  }

  /* Center: location + posted date */
  .header-center {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12.5px;
    color: var(--text-sub);
    white-space: nowrap;
    flex: 1;
    justify-content: center;
  }

  .header-center svg { color: var(--purple-mid); flex-shrink: 0; }
  .header-center .sep { color: #d1d5db; margin: 0 4px; }

  /* Right: share + bookmark icons */
  .header-right {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
  }

  .icon-btn {
    background: none; border: none; cursor: pointer;
    color: var(--text-sub); display: flex;
    align-items: center; padding: 4px;
    transition: color 0.18s;
    border-radius: 6px;
  }

  .icon-btn:hover { color: var(--purple); }

  /* ── Tabs ── */
  .tabs-row {
    display: flex; align-items: center;
    padding: 0 20px; margin-top: 14px;
    border-bottom: 1.5px solid var(--border);
  }

  .tab {
    padding: 11px 0; margin-right: 24px;
    font-size: 13.5px; font-weight: 500;
    color: var(--text-sub); cursor: pointer;
    border: none; background: none;
    font-family: 'DM Sans', sans-serif;
    position: relative; white-space: nowrap;
    transition: color 0.18s;
  }

  .tab.active { color: var(--purple); font-weight: 700; }

  .tab.active::after {
    content: '';
    position: absolute;
    bottom: -1.5px; left: 0; right: 0;
    height: 2.5px; border-radius: 2px 2px 0 0;
    background: var(--purple);
  }

  .tabs-right {
    margin-left: auto;
    display: flex; align-items: center;
    gap: 14px; padding: 8px 0;
  }

  .urgently-badge {
    display: inline-flex; align-items: center; gap: 5px;
    color: #c2410c; font-size: 12.5px; font-weight: 700;
    white-space: nowrap;
  }

  .apply-btn {
    background: var(--purple); color: white; border: none;
    border-radius: 8px; padding: 10px 26px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px; font-weight: 700;
    cursor: pointer; transition: background 0.18s;
    letter-spacing: 0.1px;
  }

  .apply-btn:hover { background: var(--purple-dark); }

  /* ── Job Body ── */
  .job-body { padding: 0; }

  /* ══════════════════════════════════════
     ABOUT THE JOB — CORRECTED SECTION
  ══════════════════════════════════════ */
  .about-job-wrap {
    padding: 16px 20px 16px;
  }

  /* Header: label left, contact right */
  .about-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 14px;
  }

  .section-label {
    font-family: 'Syne', sans-serif;
    font-size: 14.5px;
    font-weight: 700;
    color: var(--text);
  }

  /* Contact buttons */
  .contact-btns {
    display: flex;
    align-items: center;
  }

  .contact-btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 13px;
    font-weight: 500;
    color: var(--text-sub);
    background: none;
    border: none;
    cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    padding: 0 12px;
    transition: color 0.15s;
  }

  .contact-btn:hover { color: var(--text); }
  .contact-btn:first-child {
    padding-left: 0;
    border-right: 1.5px solid #d1d5db;
  }

  /* 3-column grid — NO borders, clean flat layout */
  .info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 0;
    border: 1px solid var(--border);
    border-radius: 10px;
    overflow: hidden;
    padding: 4px 0;
  }

  .info-col {
    display: flex;
    flex-direction: column;
    gap: 0;
  }

  /* Each item — no border, just padding */
  .info-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    min-height: 44px;
  }

  /* Purple icon box */
  .cell-icon {
    width: 28px;
    height: 28px;
    border-radius: 7px;
    background: var(--purple-bg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: var(--purple);
  }

  .cell-val {
    font-size: 12.5px;
    font-weight: 600;
    color: var(--text);
    line-height: 1.4;
  }

  .cell-val.purple { color: var(--purple); }

  /* Fixed salary — green small text like Figma */
  .cell-sub {
    font-size: 10.5px;
    color: #16a34a;
    font-weight: 500;
    display: inline;
    margin-left: 4px;
  }

  /* Salary row: value + "· Fixed salary" on same line */
  .salary-line {
    font-size: 12.5px;
    font-weight: 700;
    color: var(--purple);
    line-height: 1.4;
  }

  .salary-meta {
    font-size: 11px;
    color: var(--text-light);
    display: block;
    margin-top: 1px;
  }

  /* Right column plain text — no border */
  .cell-plain {
    font-size: 12px;
    color: var(--text-sub);
    line-height: 1.6;
    padding: 10px 14px;
    min-height: 44px;
    display: flex;
    align-items: flex-start;
    flex-direction: column;
    justify-content: center;
  }

  .cell-plain .highlight { color: var(--purple); font-weight: 600; }
  .cell-plain .plain-label { color: var(--text-sub); margin-right: 4px; }

  /* Empty filler */
  .cell-empty { min-height: 44px; }

  /* ── Walk-In ── */
  .section-wrap { padding: 0 20px; margin-bottom: 16px; }

  .walkin-box {
    margin: 0 20px 16px;
    border: 1px solid var(--border);
    border-radius: 10px; padding: 13px 16px;
  }

  .walkin-title { font-size: 13px; font-weight: 700; color: var(--text); margin-bottom: 8px; }

  .walkin-main {
    display: flex; align-items: flex-start;
    justify-content: space-between; gap: 10px;
  }

  .walkin-dates { font-size: 12.5px; color: var(--text-sub); line-height: 1.75; }

  .show-map-link {
    color: #16a34a; font-size: 13px; font-weight: 700;
    display: inline-flex; align-items: center; gap: 4px;
    cursor: pointer; text-decoration: none;
    white-space: nowrap; flex-shrink: 0;
  }

  .walkin-addr {
    display: flex; align-items: flex-start;
    gap: 5px; margin-top: 8px;
    font-size: 12px; color: var(--text-sub); line-height: 1.5;
  }

  .walkin-addr svg { flex-shrink: 0; margin-top: 2px; color: var(--text-light); }

  /* ── Skills ── */
  .skills-box {
    border: 1px solid var(--border);
    border-radius: 10px; padding: 13px 16px;
  }

  .skills-text { font-size: 12.5px; color: var(--text-sub); line-height: 1.85; }

  /* ── Job Description ── */
  .desc-box {
    border: 1px solid var(--border);
    border-radius: 10px; padding: 15px;
  }

  .desc-para { font-size: 12.5px; line-height: 1.75; color: #374151; margin-bottom: 10px; }
  .resp-title { font-size: 12.5px; font-weight: 600; color: var(--text); margin-bottom: 7px; }

  .resp-list { padding-left: 18px; display: flex; flex-direction: column; gap: 5px; }
  .resp-list li { font-size: 12.5px; line-height: 1.65; color: #374151; }
  .resp-list li.faded { color: var(--text-light); }

  .show-more-btn {
    background: none; border: none;
    color: var(--purple-mid); font-size: 13px; font-weight: 600;
    cursor: pointer; font-family: 'DM Sans', sans-serif;
    padding: 8px 0 0; display: block;
    text-align: right; width: 100%;
  }

  /* ── Benefits ── */
  .benefits-box {
    background: var(--green-bg);
    border: 1px solid var(--green-border);
    border-radius: 10px; padding: 15px;
  }

  .benefits-title {
    font-family: 'Syne', sans-serif;
    font-size: 14px; font-weight: 700;
    color: var(--green-title); margin-bottom: 10px;
  }

  .benefits-list { padding-left: 18px; display: flex; flex-direction: column; gap: 3px; }
  .benefits-list li { font-size: 12.5px; line-height: 1.75; color: #374151; }

  /* ── Disclaimer ── */
  .disclaimer {
    margin: 0 20px 16px;
    background: var(--yellow-bg);
    border: 1px solid var(--yellow-bdr);
    border-radius: 8px; padding: 10px 14px;
    font-size: 11px; color: var(--yellow-text); line-height: 1.65;
  }

  .disclaimer strong { font-weight: 700; }

  /* ── Apply Bottom ── */
  .apply-bottom {
    padding: 14px 20px;
    border-top: 1px solid var(--border);
    background: #fafafa;
  }

  .apply-bottom-btn {
    width: 100%; background: var(--purple);
    color: white; border: none; border-radius: 10px;
    padding: 14px; font-family: 'DM Sans', sans-serif;
    font-size: 15px; font-weight: 700; cursor: pointer;
    transition: background 0.2s;
  }

  .apply-bottom-btn:hover { background: var(--purple-dark); }

  /* ══════════════════════════════════════
     SIDEBAR — SIMILAR JOBS
  ══════════════════════════════════════ */
  .sidebar { display: flex; flex-direction: column; }

  .similar-card {
    background: white;
    border-radius: 16px; overflow: hidden;
    box-shadow: 0 2px 16px rgba(0,0,0,0.07);
    position: sticky; top: 88px;
  }

  .similar-header-row {
    text-align: center;
    padding: 14px 16px 12px;
    border-bottom: 2.5px dashed #c4b5fd;
    font-family: 'Syne', sans-serif;
    font-size: 14.5px; font-weight: 700;
    color: var(--text);
  }

  /* ── Each similar job item ── */
  .sim-item {
    padding: 16px 16px 14px;
    border-bottom: 1px solid var(--border);
    cursor: pointer;
    transition: background 0.15s;
    position: relative;
    background: #fff;
  }

  .sim-item:last-child { border-bottom: none; }
  .sim-item:hover { background: #f5f0ff; }

  /* First card active/selected — light purple bg like Figma */
  .sim-item.active-card { background: #f0ebff; }

  /* Top row: logo + title/company */
  .sim-top {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 10px;
  }

  /* Circular logo */
  .sim-logo {
    width: 52px; height: 52px;
    border-radius: 50%;
    flex-shrink: 0;
    overflow: hidden;
    border: 1.5px solid #e5e7eb;
  }

  .sim-logo svg {
    width: 100%; height: 100%;
    display: block;
  }

  .sim-info { flex: 1; min-width: 0; }

  .sim-title {
    font-size: 14.5px;
    font-weight: 700;
    color: var(--text);
    line-height: 1.3;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-right: 28px;
  }

  .sim-company {
    font-size: 11.5px;
    color: var(--text-sub);
    margin-top: 2px;
  }

  /* Accessibility badge — blue rounded square button (Figma style) */
  .sim-access-badge {
    position: absolute;
    top: 14px; right: 14px;
    width: 28px; height: 28px;
    border-radius: 8px;
    background: #eff6ff;
    border: 1px solid #bfdbfe;
    display: flex; align-items: center; justify-content: center;
    color: #1d4ed8;
    font-size: 15px;
    line-height: 1;
  }

  /* Detail rows: salary, location */
  .sim-detail {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12.5px;
    color: var(--text-sub);
    margin-top: 7px;
  }

  .sim-detail svg { color: var(--purple-mid); flex-shrink: 0; }

  /* Rupee symbol */
  .sim-rupee {
    font-size: 13px;
    color: var(--purple-mid);
    font-weight: 600;
    line-height: 1;
  }

  .sim-salary-val {
    font-size: 13px;
    font-weight: 700;
    color: var(--text);
  }

  .sim-salary-unit {
    font-size: 12px;
    color: var(--text-light);
    font-weight: 400;
  }

  .sim-loc-val {
    font-size: 12.5px;
    color: var(--text-sub);
  }

  .sim-posted {
    font-size: 11.5px;
    color: var(--text-light);
    margin-top: 7px;
  }

  /* Urgently Hiring — outlined orange pill (Figma style) */
  .urgently-tag {
    display: inline-flex; align-items: center; gap: 5px;
    background: #fff;
    border: 1.5px solid #fb923c;
    border-radius: 50px;
    padding: 5px 14px;
    font-size: 11.5px; font-weight: 600; color: #ea580c;
    margin-top: 10px;
    letter-spacing: 0.1px;
  }

  /* ══════════════════════════════════════
     RESPONSIVE
  ══════════════════════════════════════ */
  @media (max-width: 860px) {
    .page-container { grid-template-columns: 1fr; padding: 16px; }
    .similar-card { position: static; }
    nav { padding: 14px 16px; }
    .location-field { display: none; }
    .search-bar { max-width: 100%; }
    .header-center { display: none; }
  }

  @media (max-width: 580px) {
    .info-grid { grid-template-columns: 1fr 1fr; }
    .info-col:nth-child(2) { border-right: none; }
    .info-col.col-right {
      grid-column: 1 / -1;
      border-right: none;
      border-top: 1px solid var(--border);
      flex-direction: row;
      flex-wrap: wrap;
    }
    .info-col.col-right .cell-plain {
      flex: 1 1 50%;
      border-right: 1px solid var(--border);
      border-bottom: none;
    }
    .info-col.col-right .cell-plain:last-child { border-right: none; }
    .tabs-right { flex-wrap: wrap; gap: 6px; }
    .job-header { flex-wrap: wrap; gap: 10px; }
    .about-header { flex-wrap: wrap; gap: 8px; }
  }
</style>
</head>
<body>
 <?php include 'navbar.php'; ?>
<!-- ══════════ NAVBAR ══════════ -->
<nav>
  <div class="search-bar">
    <div class="search-field">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
      </svg>
      <input type="text" placeholder="Job title or keywords">
    </div>
    <div class="location-field">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
      </svg>
      <input type="text" placeholder="City or pincode">
    </div>
    <button class="find-btn">Find Jobs</button>
  </div>
</nav>

<!-- ══════════ PAGE ══════════ -->
<div class="page-container">

  <!-- ════ MAIN JOB CARD ════ -->
  <div class="job-card">

    <!-- Header -->
    <div class="job-header">

      <!-- LEFT: logo + title -->
      <div class="header-left">
        <div class="company-logo">
          <svg class="logo-building-svg" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Sky -->
            <rect width="60" height="60" fill="#87CEEB"/>
            <!-- Ground -->
            <rect y="36" width="60" height="24" fill="#c97b4b"/>
            <!-- Main building body -->
            <rect x="10" y="14" width="40" height="30" fill="#e8773a"/>
            <!-- Building top detail -->
            <rect x="15" y="10" width="30" height="6" fill="#d4621f"/>
            <!-- Roof cap -->
            <rect x="20" y="7" width="20" height="5" fill="#bf5215"/>
            <!-- Windows row 1 -->
            <rect x="16" y="18" width="7" height="6" rx="1" fill="#fde68a" opacity="0.9"/>
            <rect x="27" y="18" width="7" height="6" rx="1" fill="#fde68a" opacity="0.9"/>
            <rect x="38" y="18" width="7" height="6" rx="1" fill="#fde68a" opacity="0.9"/>
            <!-- Windows row 2 -->
            <rect x="16" y="27" width="7" height="6" rx="1" fill="#fde68a" opacity="0.7"/>
            <rect x="38" y="27" width="7" height="6" rx="1" fill="#fde68a" opacity="0.7"/>
            <!-- Door -->
            <rect x="25" y="30" width="11" height="14" rx="2" fill="#7c3aed" opacity="0.8"/>
            <!-- Door knob -->
            <circle cx="33" cy="37" r="1.2" fill="#fde68a"/>
            <!-- Small tree left -->
            <rect x="4" y="36" width="3" height="8" fill="#5c3d11"/>
            <ellipse cx="5.5" cy="34" rx="5" ry="6" fill="#22c55e"/>
            <!-- Small tree right -->
            <rect x="53" y="36" width="3" height="8" fill="#5c3d11"/>
            <ellipse cx="54.5" cy="34" rx="5" ry="6" fill="#22c55e"/>
          </svg>
        </div>
        <div class="header-title-wrap">
          <div class="job-title">Flutter Developer</div>
          <div class="company-name">Smart Global Solutions</div>
        </div>
      </div>

      <!-- CENTER: location + date -->
      <div class="header-center">
        <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
        </svg>
        Tiruppur
        <span class="sep">|</span>
        Job posted on: 25/02/2025
      </div>

      <!-- RIGHT: share + bookmark -->
      <div class="header-right">
        <button class="icon-btn" title="Share">
          <svg width="19" height="19" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/>
            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>
            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
          </svg>
        </button>
        <button class="icon-btn" title="Bookmark">
          <svg width="19" height="19" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path d="m19 21-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
          </svg>
        </button>
      </div>

    </div>

    <!-- Tabs -->
    <div class="tabs-row">
      <button class="tab active"><a href="searchpage1.php">Job details</a></button>
      <button class="tab"> <a href="searchpage2.php">About company </a></button>
      <div class="tabs-right">
        <div class="urgently-badge">Urgently Hiring 🔥</div>
        <button class="apply-btn">Apply Job</button>
      </div>
    </div>

    <!-- Body -->
    <div class="job-body">

      <!-- ════ ABOUT THE JOB — CORRECTED SECTION ════ -->
      <div class="about-job-wrap">

        <!-- Header row: label + contact buttons -->
        <div class="about-header">
          <div class="section-label">About the Job</div>
          <div class="contact-btns">
            <button class="contact-btn">
              <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
              Call
            </button>
            <button class="contact-btn">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#25d366">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm.029 18.88a9.896 9.896 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.889 9.884z"/>
              </svg>
              WhatsApp
            </button>
          </div>
        </div>

        <!-- 3-column info grid -->
        <div class="info-grid">

          <!-- COL 1: Salary | Experience | Work from office -->
          <div class="info-col">

            <div class="info-item">
              <div class="cell-icon">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <line x1="12" y1="1" x2="12" y2="23"/>
                  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                </svg>
              </div>
              <div>
                <div class="salary-line">8,000 – 10,000 <span style="font-size:10.5px;font-weight:400;color:var(--text-light)">/monthly</span> <span style="font-size:10.5px;font-weight:500;color:#16a34a;">· Fixed salary</span></div>
              </div>
            </div>

            <div class="info-item">
              <div class="cell-icon">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <rect x="2" y="7" width="20" height="14" rx="2"/>
                  <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                </svg>
              </div>
              <div class="cell-val">1-2 yr Exp</div>
            </div>

            <div class="info-item">
              <div class="cell-icon">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                  <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
              </div>
              <div class="cell-val">Work from office</div>
            </div>

          </div>

          <!-- COL 2: Day shift | Full time | UG -->
          <div class="info-col">

            <div class="info-item">
              <div class="cell-icon">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12 6 12 12 16 14"/>
                </svg>
              </div>
              <div class="cell-val">Day shift</div>
            </div>

            <div class="info-item">
              <div class="cell-icon">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <polyline points="9 11 12 14 22 4"/>
                  <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>
                </svg>
              </div>
              <div class="cell-val">Full time</div>
            </div>

            <div class="info-item">
              <div class="cell-icon">
                <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                  <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
              </div>
              <div class="cell-val">UG</div>
            </div>

          </div>

          <!-- COL 3: Plain text — no icon, no border -->
          <div class="info-col col-right">
            <div class="cell-plain">
              <span>Looking For: Male &amp; Female</span>
            </div>
            <div class="cell-plain">
              <span>Should Speak: <span class="highlight">English (Intermediate)</span> Tamil</span>
            </div>
            <div class="cell-empty"></div>
          </div>

        </div><!-- /info-grid -->

      </div><!-- /about-job-wrap -->

      <!-- Walk-In Interview -->
      <div class="walkin-box">
        <div class="walkin-title">Walk-In Interview</div>
        <div class="walkin-main">
          <div>
            <div class="walkin-dates">25/02/2025 &nbsp;To&nbsp; 15/03/2025</div>
            <div class="walkin-dates">Timing: 10:00 AM To 04:00 PM</div>
          </div>
          <a class="show-map-link" href="#">
            Show on Map
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <line x1="5" y1="12" x2="19" y2="12"/>
              <polyline points="12 5 19 12 12 19"/>
            </svg>
          </a>
        </div>
        <div class="walkin-addr">
          <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          9th Street, Sri Krishna Nagar, Tiruppur, Tamil Nadu 641 103
        </div>
      </div>

      <!-- Skills Required -->
      <div class="section-wrap">
        <div class="section-label" style="margin-bottom:10px;">Skills Required</div>
        <div class="skills-box">
          <div class="skills-text">
            User research | Wireframing | Prototyping | Visual design | Design thinking | Figma | Responsive design | Usability testing | Information architecture | User journey mapping
          </div>
        </div>
      </div>

      <!-- Job Description -->
      <div class="section-wrap">
        <div class="section-label" style="margin-bottom:10px;">Job Description</div>
        <div class="desc-box">
          <div class="desc-para">We are seeking a skilled Flutter Developer to join our team and contribute to building high-performance, scalable, and cross-platform mobile applications. The ideal candidate should have a strong understanding of Flutter, Dart, and mobile app development practices.</div>
          <div class="resp-title">Responsibilities:</div>
          <ul class="resp-list">
            <li>Develop and maintain cross-platform mobile applications using Flutter.</li>
            <li>Write clean, efficient, and reusable code.</li>
            <li>Implement responsive UIs and ensure smooth performance on both Android and iOS.</li>
            <li>Integrate RESTful APIs, third-party services, and libraries.</li>
            <li class="faded">Use state management tools (Provider, BLoC, Riverpod, or GetX).</li>
          </ul>
          <button class="show-more-btn" id="showMoreBtn">Show more</button>
        </div>
      </div>

      <!-- Benefits -->
      <div class="section-wrap">
        <div class="benefits-box">
          <div class="benefits-title">Benefits</div>
          <ol class="benefits-list">
            <li>High Demand: Flutter developers are highly sought after.</li>
            <li>Cross-Platform: Build iOS &amp; Android apps with one codebase.</li>
            <li>Competitive Salary: Attractive packages in the IT industry.</li>
            <li>Creative Freedom: Design dynamic UIs and custom widgets.</li>
            <li>Flexible Work: Enjoy remote or hybrid options.</li>
            <li>Future-Proof: Growing demand ensures career stability.</li>
          </ol>
        </div>
      </div>

      <!-- Disclaimer -->
      <div class="disclaimer">
        <strong>Note:</strong> True Jobs never guarantees job interviews in exchange for money. Beware of fraudsters demanding payments under the guise of registration, refundable fees, or other charges.
      </div>

    </div><!-- end job-body -->

    <!-- Apply Bottom -->
    <div class="apply-bottom">
      <button class="apply-bottom-btn">Apply Job</button>
    </div>

  </div><!-- end job-card -->

  <!-- ════ SIDEBAR — SIMILAR JOBS ════ -->
  <div class="sidebar">
    <div class="similar-card">
      <div class="similar-header-row">Similar Jobs</div>

      <!-- Card 1: Flutter Developer — active/selected -->
      <div class="sim-item active-card">
        <div class="sim-top">
          <div class="sim-logo">
            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="60" height="60" fill="#87CEEB"/>
              <rect y="38" width="60" height="22" fill="#c97b4b"/>
              <rect x="10" y="15" width="40" height="28" fill="#e8773a"/>
              <rect x="15" y="11" width="30" height="6" fill="#d4621f"/>
              <rect x="21" y="8" width="18" height="5" fill="#bf5215"/>
              <rect x="15" y="19" width="7" height="6" rx="1" fill="#fde68a" opacity="0.9"/>
              <rect x="27" y="19" width="7" height="6" rx="1" fill="#fde68a" opacity="0.9"/>
              <rect x="39" y="19" width="7" height="6" rx="1" fill="#fde68a" opacity="0.9"/>
              <rect x="15" y="28" width="7" height="5" rx="1" fill="#fde68a" opacity="0.7"/>
              <rect x="39" y="28" width="7" height="5" rx="1" fill="#fde68a" opacity="0.7"/>
              <rect x="25" y="31" width="11" height="12" rx="2" fill="#7c3aed" opacity="0.85"/>
              <circle cx="33" cy="37" r="1.2" fill="#fde68a"/>
              <rect x="4" y="38" width="3" height="7" fill="#5c3d11"/>
              <ellipse cx="5.5" cy="36" rx="5" ry="5" fill="#22c55e"/>
              <rect x="53" y="38" width="3" height="7" fill="#5c3d11"/>
              <ellipse cx="54.5" cy="36" rx="5" ry="5" fill="#22c55e"/>
            </svg>
          </div>
          <div class="sim-info">
            <div class="sim-title">Flutter Developer</div>
            <div class="sim-company">Smart Global Solutions</div>
          </div>
        </div>
        <div class="sim-detail">
          <span class="sim-rupee">₹</span>
          <span class="sim-salary-val">8,000 - 10,000</span>
          <span class="sim-salary-unit">monthly</span>
        </div>
        <div class="sim-detail">
          <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          <span class="sim-loc-val">Tiruppur</span>
        </div>
        <div class="sim-posted">Posted: 5 days ago</div>
      </div>

      <!-- Card 2: UI/UX Designer — Urgently Hiring + accessibility -->
      <div class="sim-item">
        <div class="sim-access-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="5" r="1.5" fill="currentColor" stroke="none"/>
            <path d="M8 8h8M12 10v5M9 20l3-5 3 5"/>
          </svg>
        </div>
        <div class="sim-top">
          <div class="sim-logo">
            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="60" height="60" fill="#b0d0e8"/>
              <rect y="38" width="60" height="22" fill="#78909c"/>
              <rect x="8" y="12" width="44" height="30" fill="#90a4ae"/>
              <rect x="13" y="8" width="34" height="6" fill="#78909c"/>
              <rect x="19" y="5" width="22" height="5" fill="#607d8b"/>
              <rect x="13" y="16" width="8" height="7" rx="1" fill="#e0f2fe" opacity="0.9"/>
              <rect x="26" y="16" width="8" height="7" rx="1" fill="#e0f2fe" opacity="0.9"/>
              <rect x="39" y="16" width="8" height="7" rx="1" fill="#e0f2fe" opacity="0.9"/>
              <rect x="13" y="26" width="8" height="6" rx="1" fill="#e0f2fe" opacity="0.7"/>
              <rect x="39" y="26" width="8" height="6" rx="1" fill="#e0f2fe" opacity="0.7"/>
              <rect x="24" y="30" width="12" height="12" rx="2" fill="#7c3aed" opacity="0.85"/>
              <circle cx="33" cy="36" r="1.2" fill="#e0f2fe"/>
              <rect x="3" y="38" width="3" height="7" fill="#4a5568"/>
              <ellipse cx="4.5" cy="36" rx="5" ry="5" fill="#4ade80"/>
              <rect x="54" y="38" width="3" height="7" fill="#4a5568"/>
              <ellipse cx="55.5" cy="36" rx="5" ry="5" fill="#4ade80"/>
            </svg>
          </div>
          <div class="sim-info">
            <div class="sim-title">UI/UX Designer</div>
            <div class="sim-company">Smart Global Solutions</div>
          </div>
        </div>
        <div class="sim-detail">
          <span class="sim-rupee">₹</span>
          <span class="sim-salary-val">8,000 - 10,000</span>
          <span class="sim-salary-unit">monthly</span>
        </div>
        <div class="sim-detail">
          <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          <span class="sim-loc-val">Tiruppur</span>
        </div>
        <div class="sim-posted">Posted: 5 days ago</div>
        <div class="urgently-tag">Urgently Hiring 🔥</div>
      </div>

      <!-- Card 3: UI/UX & Graphic Designer -->
      <div class="sim-item">
        <div class="sim-top">
          <div class="sim-logo">
            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="60" height="60" fill="#e8e8f0"/>
              <rect y="38" width="60" height="22" fill="#bdbdbd"/>
              <rect x="10" y="14" width="40" height="28" fill="#d0d0d8"/>
              <rect x="15" y="10" width="30" height="6" fill="#bdbdbd"/>
              <rect x="21" y="7" width="18" height="5" fill="#9e9e9e"/>
              <rect x="15" y="18" width="7" height="6" rx="1" fill="#fff" opacity="0.8"/>
              <rect x="27" y="18" width="7" height="6" rx="1" fill="#fff" opacity="0.8"/>
              <rect x="39" y="18" width="7" height="6" rx="1" fill="#fff" opacity="0.8"/>
              <rect x="15" y="27" width="7" height="5" rx="1" fill="#fff" opacity="0.6"/>
              <rect x="39" y="27" width="7" height="5" rx="1" fill="#fff" opacity="0.6"/>
              <rect x="25" y="31" width="11" height="11" rx="2" fill="#7c3aed" opacity="0.75"/>
              <circle cx="33" cy="37" r="1.2" fill="#fff"/>
              <rect x="4" y="38" width="3" height="7" fill="#757575"/>
              <ellipse cx="5.5" cy="36" rx="5" ry="5" fill="#66bb6a"/>
              <rect x="53" y="38" width="3" height="7" fill="#757575"/>
              <ellipse cx="54.5" cy="36" rx="5" ry="5" fill="#66bb6a"/>
            </svg>
          </div>
          <div class="sim-info">
            <div class="sim-title">UI/UX &amp; Graphic D...</div>
            <div class="sim-company">Smart Global Solutions</div>
          </div>
        </div>
        <div class="sim-detail">
          <span class="sim-rupee">₹</span>
          <span class="sim-salary-val">8,000 - 10,000</span>
          <span class="sim-salary-unit">monthly</span>
        </div>
        <div class="sim-detail">
          <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          <span class="sim-loc-val">Tiruppur</span>
        </div>
        <div class="sim-posted">Posted: 5 days ago</div>
      </div>

      <!-- Card 4: Flutter Developer -->
      <div class="sim-item">
        <div class="sim-top">
          <div class="sim-logo">
            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="60" height="60" fill="#87CEEB"/>
              <rect y="38" width="60" height="22" fill="#c97b4b"/>
              <rect x="10" y="15" width="40" height="28" fill="#e8773a"/>
              <rect x="15" y="11" width="30" height="6" fill="#d4621f"/>
              <rect x="21" y="8" width="18" height="5" fill="#bf5215"/>
              <rect x="15" y="19" width="7" height="6" rx="1" fill="#fde68a" opacity="0.9"/>
              <rect x="27" y="19" width="7" height="6" rx="1" fill="#fde68a" opacity="0.9"/>
              <rect x="39" y="19" width="7" height="6" rx="1" fill="#fde68a" opacity="0.9"/>
              <rect x="15" y="28" width="7" height="5" rx="1" fill="#fde68a" opacity="0.7"/>
              <rect x="39" y="28" width="7" height="5" rx="1" fill="#fde68a" opacity="0.7"/>
              <rect x="25" y="31" width="11" height="12" rx="2" fill="#7c3aed" opacity="0.85"/>
              <circle cx="33" cy="37" r="1.2" fill="#fde68a"/>
              <rect x="4" y="38" width="3" height="7" fill="#5c3d11"/>
              <ellipse cx="5.5" cy="36" rx="5" ry="5" fill="#22c55e"/>
              <rect x="53" y="38" width="3" height="7" fill="#5c3d11"/>
              <ellipse cx="54.5" cy="36" rx="5" ry="5" fill="#22c55e"/>
            </svg>
          </div>
          <div class="sim-info">
            <div class="sim-title">Flutter Developer</div>
            <div class="sim-company">Smart Global Solutions</div>
          </div>
        </div>
        <div class="sim-detail">
          <span class="sim-rupee">₹</span>
          <span class="sim-salary-val">6,000 - 10,000</span>
          <span class="sim-salary-unit">monthly</span>
        </div>
        <div class="sim-detail">
          <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          <span class="sim-loc-val">Tiruppur</span>
        </div>
        <div class="sim-posted">Posted: 5 days ago</div>
      </div>

      <!-- Card 5: UI/UX Designer — Urgently Hiring + accessibility -->
      <div class="sim-item">
        <div class="sim-access-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="5" r="1.5" fill="currentColor" stroke="none"/>
            <path d="M8 8h8M12 10v5M9 20l3-5 3 5"/>
          </svg>
        </div>
        <div class="sim-top">
          <div class="sim-logo">
            <svg viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="60" height="60" fill="#b0d0e8"/>
              <rect y="38" width="60" height="22" fill="#78909c"/>
              <rect x="8" y="12" width="44" height="30" fill="#90a4ae"/>
              <rect x="13" y="8" width="34" height="6" fill="#78909c"/>
              <rect x="19" y="5" width="22" height="5" fill="#607d8b"/>
              <rect x="13" y="16" width="8" height="7" rx="1" fill="#e0f2fe" opacity="0.9"/>
              <rect x="26" y="16" width="8" height="7" rx="1" fill="#e0f2fe" opacity="0.9"/>
              <rect x="39" y="16" width="8" height="7" rx="1" fill="#e0f2fe" opacity="0.9"/>
              <rect x="13" y="26" width="8" height="6" rx="1" fill="#e0f2fe" opacity="0.7"/>
              <rect x="39" y="26" width="8" height="6" rx="1" fill="#e0f2fe" opacity="0.7"/>
              <rect x="24" y="30" width="12" height="12" rx="2" fill="#7c3aed" opacity="0.85"/>
              <circle cx="33" cy="36" r="1.2" fill="#e0f2fe"/>
              <rect x="3" y="38" width="3" height="7" fill="#4a5568"/>
              <ellipse cx="4.5" cy="36" rx="5" ry="5" fill="#4ade80"/>
              <rect x="54" y="38" width="3" height="7" fill="#4a5568"/>
              <ellipse cx="55.5" cy="36" rx="5" ry="5" fill="#4ade80"/>
            </svg>
          </div>
          <div class="sim-info">
            <div class="sim-title">UI/UX Designer</div>
            <div class="sim-company">Smart Global </div>
          </div>
        </div>
        <div class="sim-detail">
          <span class="sim-rupee">₹</span>
          <span class="sim-salary-val">8,000 - 10,000</span>
          <span class="sim-salary-unit">monthly</span>
        </div>
        <div class="sim-detail">
          <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          <span class="sim-loc-val">Tiruppur</span>
        </div>
        <div class="sim-posted">Posted: 5 days ago</div>
        <div class="urgently-tag">Urgently Hiring 🔥</div>
      </div>

    </div><!-- end similar-card -->
  </div><!-- end sidebar -->

 
</div><!-- end page-container -->
 <?php include 'footer.php'; ?>
<script>
  // Tab switching
  document.querySelectorAll('.tab').forEach(t => {
    t.addEventListener('click', function() {
      document.querySelectorAll('.tab').forEach(x => x.classList.remove('active'));
      this.classList.add('active');
    });
  });

  // Show more toggle
  let expanded = false;
  document.getElementById('showMoreBtn').addEventListener('click', function() {
    expanded = !expanded;
    this.textContent = expanded ? 'Show less' : 'Show more';
    document.querySelectorAll('.resp-list li.faded').forEach(li => {
      li.style.color = expanded ? '#374151' : '';
    });
  });
</script>

</body>
</html>
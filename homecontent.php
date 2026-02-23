<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>True Jobs – Your Next Chapter Starts Here</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  
  <style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    :root{
      --purple:#6A0DAD;--purple-dark:#2e0050;--green:#28a745;
      --teal:#1db88a;--orange:#e67e22;--text:#1a1a2e;--muted:#666;--light:#f7f7fc;
      --how-green:#2e8b3a;
    }
    html{scroll-behavior:smooth}
    body{font-family:'Poppins',sans-serif;overflow-x:hidden;color:var(--text)}

    /* ── NAVBAR ── */
    .navbar-wrap{background:#fff;border-bottom:2.5px solid var(--purple);padding:0 40px;height:60px;display:flex;align-items:center;justify-content:space-between;position:sticky;top:0;z-index:1000}
    .nav-logo{display:flex;align-items:center;gap:6px;text-decoration:none;border:2px solid var(--purple);border-radius:50px;padding:5px 14px 5px 8px}
    .nav-logo .li{color:var(--green);font-size:16px;line-height:1}
    .nav-logo .lt{font-size:11.5px;font-weight:800;color:var(--text);letter-spacing:1.4px;text-transform:uppercase}
    .nav-ul{display:flex;align-items:center;gap:40px;list-style:none;margin:0;padding:0}
    .nav-ul a{font-size:14px;font-weight:500;color:var(--text);text-decoration:none;white-space:nowrap}
    .nav-ul a:hover{color:var(--purple)}
    .nav-signin-wrap{position:relative}
    .nav-signin{display:flex;align-items:center;gap:5px;font-size:14px;font-weight:500;color:var(--text);cursor:pointer;text-decoration:none;white-space:nowrap}
    .btn-hire{background:var(--purple);color:#fff;font-size:14px;font-weight:600;padding:10px 22px;border:none;border-radius:7px;cursor:pointer;text-decoration:none;display:inline-block;white-space:nowrap;transition:background .2s}
    .btn-hire:hover{background:#5a0b90;color:#fff}
    .nav-tog{display:none;background:none;border:none;font-size:26px;color:var(--text);cursor:pointer;padding:4px}
    .sdrop{position:absolute;top:calc(100% + 8px);right:0;background:#fff;border-radius:10px;box-shadow:0 8px 30px rgba(0,0,0,.12);min-width:155px;display:none;z-index:9999;border:1px solid #f0f0f0}
    .sdrop.open{display:block;animation:fd .18s ease}
    @keyframes fd{from{opacity:0;transform:translateY(-6px)}to{opacity:1;transform:translateY(0)}}
    .sdrop a{display:block;padding:12px 20px;font-size:13.5px;font-weight:500;color:#333;text-decoration:none}
    .sdrop a:hover{background:#f5eaff;color:var(--purple)}
    .mob-nav{display:none;flex-direction:column;background:#fff;padding:14px 20px;border-bottom:1px solid #eee;gap:0}
    .mob-nav.open{display:flex}
    .mob-nav a{font-size:14px;font-weight:500;color:var(--text);text-decoration:none;padding:12px 0;border-bottom:1px solid #f0f0f5}
    .mob-nav a:last-child{border-bottom:none;color:var(--purple);font-weight:700}

    /* ── HERO ── */
    .hero{background:linear-gradient(135deg,#7a18c0 0%,#5c0d9c 22%,#420080 50%,#280058 75%,#160035 100%);padding:44px 40px;overflow:hidden;position:relative}
    .hero::before{content:'';position:absolute;left:-60px;top:0;bottom:0;width:340px;background:radial-gradient(ellipse at left center,rgba(130,40,200,.35) 0%,transparent 70%);pointer-events:none}
    .hero-top{display:flex;align-items:center;justify-content:space-between;gap:24px;margin-bottom:40px;position:relative;z-index:2}
    .hero-txt{flex:1;max-width:500px}
    .hero-h1{font-size:clamp(26px,3.6vw,46px);font-weight:900;color:#fff;line-height:1.15;text-transform:uppercase;margin-bottom:18px;letter-spacing:.3px}
    .hero-p{font-size:14px;color:rgba(255,255,255,.82);line-height:1.75;margin:0}
    .hero-img-wrap{flex-shrink:0;display:flex;align-items:center}
    .hero-img{width:clamp(140px,17vw,250px);animation:float 4s ease-in-out infinite;filter:drop-shadow(0 12px 28px rgba(0,0,0,.22));display:block}
    @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
    .hero-search{display:flex;justify-content:center;position:relative;z-index:2}
    .sbar{background:#fff;border-radius:50px;display:flex;align-items:center;box-shadow:0 6px 28px rgba(0,0,0,.22);padding:6px 6px 6px 22px;width:100%;max-width:580px}
    .sf,.sl{display:flex;align-items:center;gap:10px;flex:1;min-width:0}
    .sf i,.sl i{color:#bbb;font-size:15px;flex-shrink:0}
    .sf input,.sl input{border:none;outline:none;font-family:'Poppins',sans-serif;font-size:13px;color:#333;width:100%;background:transparent}
    .sf input::placeholder,.sl input::placeholder{color:#bbb}
    .sdiv{width:1px;height:24px;background:#e0e0e0;margin:0 12px;flex-shrink:0}
    .btn-fj{background:var(--purple);color:#fff;font-size:13.5px;font-weight:600;padding:11px 26px;border:none;border-radius:50px;cursor:pointer;white-space:nowrap;font-family:'Poppins',sans-serif;flex-shrink:0;transition:background .2s;letter-spacing:.2px}
    .btn-fj:hover{background:#5a0b90}

    /* ── UNLOCK ── */
    .unlock{background:#fff;padding:56px 60px 48px;text-align:center;border-bottom:1px solid #f0f0f0}
    .ulabel{font-size:13px;font-weight:600;color:var(--purple);letter-spacing:1px;text-transform:uppercase;margin-bottom:14px;font-style:italic}
    .unlock p{font-size:14px;color:var(--muted);max-width:440px;margin:0 auto 26px;line-height:1.7}
    .btn-gs{background:var(--purple);color:#fff;font-size:14px;font-weight:600;padding:12px 36px;border:none;border-radius:8px;cursor:pointer;font-family:'Poppins',sans-serif;text-decoration:none;display:inline-block;transition:background .2s}
    .btn-gs:hover{background:#5a0b90;color:#fff}
    .umeta{margin-top:18px;font-size:13px;color:var(--muted)}
    .umeta a,.tlink a{color:var(--purple);font-weight:600;text-decoration:none}
    .tlink{margin-top:10px;font-size:13px}

    /* ══════════════════════════════════════════════
       DREAM JOB — IMAGE 2 EXACT LAYOUT
       
       Structure (Image 2):
       ┌─────────────────┬──────────────────────────┐
       │ "Your"          │ desc text (top right)     │
       │ [Dream box]     ├──────────────────────────┤
       │ [Job] Awaits    │ Find the Perfect Fit card │
       └─────────────────┴──────────────────────────┘
       ┌──────────┬──────────────┬───────────────────┐
       │ Build    │ You Control  │ Set Your          │
       │ Resume   │ Your Privacy │ Availability      │
       └──────────┴──────────────┴───────────────────┘
    ══════════════════════════════════════════════ */
    .dream {
      background: #fff;
      padding: 52px 60px 52px;
    }

    /* 2-col top layout */
    .dream-top-grid {
      display: grid;
      grid-template-columns: 320px 1fr;
      gap: 24px 48px;
      align-items: start;
      margin-bottom: 28px;
    }

    /* ── LEFT: CSS L-shape title ── */
    .dream-left-col {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    /* "Your" */
    .d-your {
      font-size: 26px;
      font-weight: 700;
      color: var(--purple);
      margin-bottom: 2px;
      padding-left: 2px;
    }

    /* Purple L-shape: "Dream" wide box on top, "Job" narrow box bottom-left */
    .d-shape {
      display: inline-flex;
      flex-direction: column;
      align-items: flex-start;
    }

    /* "Dream" — full width purple rounded-top box */
    .d-dream-row {
      background: var(--purple);
      border-radius: 14px 14px 14px 0;
      padding: 8px 24px 8px 20px;
      display: block;
      width: 100%;
    }
    .d-dream-text {
      font-size: clamp(44px,6vw,66px);
      font-weight: 900;
      color: #fff;
      line-height: 1.08;
      letter-spacing: -1.5px;
      display: block;
    }

    /* "Job" — narrower purple box, bottom-left, no top-left radius */
    .d-job-row {
      display: flex;
      align-items: center;
      gap: 0;
    }
    .d-job-box {
      background: var(--purple);
      border-radius: 0 0 14px 14px;
      padding: 6px 24px 12px 20px;
    }
    .d-job-text {
      font-size: clamp(44px,6vw,66px);
      font-weight: 900;
      color: #fff;
      line-height: 1.08;
      letter-spacing: -1.5px;
      display: block;
    }
    /* "Awaits" — outside the purple box */
    .d-awaits {
      font-size: clamp(24px,3vw,34px);
      font-weight: 700;
      color: var(--purple);
      margin-left: 16px;
      white-space: nowrap;
    }

    /* ── RIGHT: desc text on top + fpc card below ── */
    .dream-right-col {
      display: flex;
      flex-direction: column;
      gap: 18px;
      padding-top: 2px;
    }
    .dream-desc-text {
      font-size: 13.5px;
      color: var(--muted);
      line-height: 1.75;
    }
    .dream-desc-text strong { color: var(--text); }

    /* Find the Perfect Fit card */
    .fpc {
      background: linear-gradient(135deg,#1a1a2e 0%,#2d0050 60%,#4a1060 100%);
      border-radius: 15px;
      padding: 20px 26px;
      color: #fff;
      position: relative;
      overflow: hidden;
    }
    .fpc::after {
      content: '';
      position: absolute;
      right: -30px;
      bottom: -30px;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background: radial-gradient(circle,rgba(180,60,60,.5),transparent 70%);
    }
    .fpc-head {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 10px;
      position: relative;
      z-index: 1;
    }
    .fpc-head i { font-size: 20px; color: #c084fc; }
    .fpc h4 { font-size: 16px; font-weight: 700; margin: 0; }
    .fpc p {
      font-size: 13px;
      color: rgba(255,255,255,.78);
      line-height: 1.65;
      margin: 0;
      position: relative;
      z-index: 1;
    }

    /* ── Bottom 3 dark cards ── */
    .dream-cards-row {
      display: grid;
      grid-template-columns: repeat(3,1fr);
      gap: 16px;
    }
    .fc { border-radius: 12px; padding: 22px 20px; color: #fff; position: relative; overflow: hidden; }
    .fc.c1{background:linear-gradient(135deg,#1a1a1a 0%,#2d1010 60%,#4a1a0a 100%)}
    .fc.c2{background:linear-gradient(135deg,#0a1a1a 0%,#0d2d2d 60%,#0a3a3a 100%)}
    .fc.c3{background:linear-gradient(135deg,#0a0a2a 0%,#0d1a3a 60%,#1a2a4a 100%)}
    .fc.c1::after{content:'';position:absolute;right:-20px;bottom:-20px;width:120px;height:120px;border-radius:50%;background:radial-gradient(circle,rgba(220,80,30,.55),transparent 70%)}
    .fc.c2::after{content:'';position:absolute;right:-20px;bottom:-20px;width:120px;height:120px;border-radius:50%;background:radial-gradient(circle,rgba(0,180,160,.45),transparent 70%)}
    .fc.c3::after{content:'';position:absolute;right:-20px;bottom:-20px;width:120px;height:120px;border-radius:50%;background:radial-gradient(circle,rgba(30,120,220,.45),transparent 70%)}
    .fc .fci{font-size:22px;margin-bottom:12px;position:relative;z-index:1}
    .fc h5{font-size:14px;font-weight:700;margin-bottom:8px;position:relative;z-index:1}
    .fc p{font-size:12.5px;color:rgba(255,255,255,.75);line-height:1.65;margin:0;position:relative;z-index:1}

    /* ── HIRE SMARTER ── */
    .hire-section{position:relative;width:100%;min-height:460px;overflow:hidden;display:flex;flex-direction:column}
    .hire-bg{position:absolute;inset:0;z-index:0}
    .hire-bg img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 18%;z-index:0}
    .hire-bg-tint{position:absolute;inset:0;background:linear-gradient(to right,rgba(162,188,210,0.88) 0%,rgba(148,176,200,0.68) 34%,rgba(128,158,185,0.28) 56%,rgba(100,135,165,0.06) 74%,transparent 88%);z-index:1}
    .hire-content{position:relative;z-index:2;display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);grid-template-rows:auto auto;gap:20px 28px;padding:44px 60px 50px;align-items:start}
    .hire-headline{grid-column:2/3;grid-row:1/2;text-align:right;padding-top:6px;animation:hireUp .45s ease .05s both}
    .hire-headline .hl-hire{display:block;font-size:22px;font-weight:600;color:#18293c;margin-bottom:-2px;letter-spacing:.2px}
    .hire-headline h2{font-size:clamp(40px,5.6vw,64px);font-weight:900;color:#0c1b2a;line-height:1.02;letter-spacing:-1.6px;margin-bottom:12px}
    .hire-headline .hl-sub{font-size:12.5px;color:#253344;line-height:1.68;max-width:290px;margin-left:auto;opacity:.88}
    .hcard{background:rgba(255,255,255,0.92);border-radius:15px;padding:20px 22px 18px;box-shadow:0 2px 10px rgba(0,0,0,.08),0 6px 28px rgba(0,0,0,.07);backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);border:1px solid rgba(255,255,255,0.96);transition:transform .22s ease,box-shadow .22s ease;animation:hireUp .45s ease both}
    .hcard:hover{transform:translateY(-3px);box-shadow:0 4px 18px rgba(0,0,0,.12),0 12px 38px rgba(0,0,0,.09)}
    .card-kyc{grid-column:1/2;grid-row:1/2;animation-delay:.10s}
    .hcard-head{display:flex;align-items:center;gap:11px;margin-bottom:10px}
    .hcard-icon{width:30px;height:30px;flex-shrink:0;display:flex;align-items:center;justify-content:center}
    .hcard-icon svg{width:26px;height:26px;fill:none;stroke:#1b3252;stroke-width:1.65;stroke-linecap:round;stroke-linejoin:round}
    .hcard-title{font-size:14.5px;font-weight:700;color:#1a202c;line-height:1.2}
    .hcard-body{font-size:12.8px;color:#55606e;line-height:1.70;margin:0}
    .hire-bottom{grid-column:1/3;grid-row:2/3;display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .hire-bottom .hcard:nth-child(1){animation-delay:.20s}
    .hire-bottom .hcard:nth-child(2){animation-delay:.28s}
    .hire-bottom .hcard:nth-child(3){animation-delay:.36s}
    @keyframes hireUp{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:translateY(0)}}

    /* ── HOW IT WORKS ── */
    .how{background:#fff;padding:64px 80px 72px}
    .how-title{font-size:clamp(26px,3.2vw,38px);font-weight:800;text-align:center;color:#1a1a2e;margin-bottom:48px;letter-spacing:-.5px}
    .how-group{margin-bottom:52px}
    .how-group:last-child{margin-bottom:0}
    .how-group-label{font-size:14px;font-weight:700;color:#1a1a2e;letter-spacing:.3px;margin-bottom:32px;display:flex;align-items:center}
    .how-group-label span{border-bottom:2.5px solid #1a1a2e;padding-bottom:2px}
    .how-steps-row{display:grid;grid-template-columns:repeat(3,1fr);gap:0;position:relative}
    .how-step-col{display:flex;flex-direction:column;align-items:center;position:relative}
    .how-step-box{width:160px;height:110px;background:linear-gradient(145deg,#3a9e4a 0%,#2e8b3a 50%,#1f6b2a 100%);border-radius:18px;display:flex;align-items:center;justify-content:center;text-align:center;padding:16px 14px;color:#fff;font-size:15px;font-weight:700;line-height:1.35;box-shadow:4px 4px 0px rgba(0,0,0,0.18),0 8px 24px rgba(46,139,58,0.3);position:relative;z-index:2;transition:transform .2s ease,box-shadow .2s ease;transform:perspective(600px) rotateY(-4deg) rotateX(2deg)}
    .how-step-box:hover{transform:perspective(600px) rotateY(-2deg) rotateX(1deg) translateY(-3px);box-shadow:6px 8px 0px rgba(0,0,0,0.18),0 12px 32px rgba(46,139,58,0.38)}
    .how-step-col:not(:last-child)::after{content:'';position:absolute;top:55px;right:-2px;width:calc(50% + 2px);height:2px;border-top:2.5px dashed #2e8b3a;z-index:1}
    .how-step-col:not(:first-child)::before{content:'';position:absolute;top:55px;left:-2px;width:calc(50% - 18px);height:2px;border-top:2.5px dashed #2e8b3a;z-index:1}
    .how-arrow{position:absolute;top:42px;right:calc(50% - 52px);z-index:3;color:#2e8b3a;font-size:18px;line-height:1}
    .how-step-col:last-child .how-arrow{display:none}
    .how-step-desc{margin-top:20px;font-size:12.5px;color:#555;line-height:1.70;text-align:center;max-width:210px;padding:0 8px}

    /* ── PRICING ── */
    .pricing{background:#f2f4f7;padding:72px 80px 80px}
    .pricing-title{font-size:clamp(26px,3.2vw,38px);font-weight:800;text-align:center;color:#1a1a2e;margin-bottom:10px;letter-spacing:-.5px}
    .pricing-sub{font-size:15px;color:#666;text-align:center;margin-bottom:48px}
    .pricing-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px;max-width:920px;margin:0 auto}
    .pc-left{background:#fff;border:1.5px solid #e2e6ec;border-radius:16px;padding:0;display:flex;flex-direction:column;overflow:hidden;box-shadow:0 2px 16px rgba(0,0,0,.06)}
    .pc-left-header{padding:20px 28px 16px;border-bottom:1px solid #eef0f4}
    .pc-left-header .pc-label{font-size:11px;font-weight:700;letter-spacing:1.4px;text-transform:uppercase;color:#888}
    .plan-row{padding:18px 28px 16px;display:grid;grid-template-columns:1fr auto;gap:0 20px;align-items:start;border-bottom:1px solid #f0f2f5}
    .plan-row:last-of-type{border-bottom:none}
    .plan-row.grey{background:#f8f9fb}
    .plan-row.white{background:#fff}
    .plan-name{font-size:15px;font-weight:700;color:var(--purple);margin-bottom:6px}
    .plan-price{font-size:26px;font-weight:800;color:#1a1a2e;line-height:1;margin-bottom:0}
    .plan-price .plan-per{font-size:13px;font-weight:400;color:#888}
    .plan-features{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:5px;padding-top:4px}
    .plan-features li{font-size:12.5px;color:#444;display:flex;align-items:center;gap:8px;line-height:1.4}
    .plan-features li .fi-check{color:#2e8b3a;font-size:13px;flex-shrink:0}
    .plan-features li .fi-x{color:#aaa;font-size:13px;flex-shrink:0}
    .pc-left-btn{margin:0;padding:20px 28px 24px}
    .btn-view-dark{width:100%;padding:14px;background:#1a1a2e;color:#fff;border:none;border-radius:8px;font-family:'Poppins',sans-serif;font-size:14px;font-weight:600;cursor:pointer;transition:background .2s;text-align:center;display:block;text-decoration:none}
    .btn-view-dark:hover{background:#2d2d4a;color:#fff}
    .pc-right{background:#1a2236;border-radius:16px;padding:28px 30px;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 2px 16px rgba(0,0,0,.18)}
    .pc-right .pc-label{font-size:11px;font-weight:700;letter-spacing:1.4px;text-transform:uppercase;color:#a0aec0;margin-bottom:8px}
    .pc-right .pc-tagline{font-size:13px;color:#94a3b8;margin-bottom:26px;line-height:1.55}
    .pc-right-block h4{font-size:16px;font-weight:700;color:#f1f5f9;margin-bottom:8px}
    .pc-right-block p{font-size:13px;color:#94a3b8;line-height:1.65;margin:0}
    .pc-right-divider{border:none;border-top:1px solid rgba(255,255,255,.10);margin:20px 0}
    .btn-view-outline{width:100%;padding:13px;background:transparent;color:#f1f5f9;border:1.5px solid rgba(255,255,255,.35);border-radius:8px;font-family:'Poppins',sans-serif;font-size:14px;font-weight:600;cursor:pointer;transition:all .2s;margin-top:32px;display:block;text-align:center;text-decoration:none}
    .btn-view-outline:hover{background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.6)}

    /* ── FOR EVERYONE ── */
    .everyone{background:linear-gradient(rgba(15,15,32,.82),rgba(15,15,32,.88)),url('images/Truejob\Frame 1035 (1).png' alt="professional" onerror="this.style.display='none'") center/cover no-repeat;padding:80px 60px;display:flex;align-items:center;gap:60px}
    .ev-left{flex-shrink:0}
    .ev-left h2{font-size:clamp(28px,4vw,54px);font-weight:900;color:#fff;line-height:1.2}
    .ev-left h2 span{color:#c084fc}
    .ev-right p{font-size:14px;color:rgba(255,255,255,.78);line-height:1.85;margin:0;max-width:440px}

    /* ── CTA ── */
    .cta{background:var(--light);padding:56px 60px;text-align:center;border-top:1px solid #eee}
    .cta h3{font-size:clamp(16px,2vw,22px);font-weight:700;margin-bottom:28px}
    .cta-btns{display:flex;justify-content:center;gap:16px;flex-wrap:wrap}
    .btn-cf{background:var(--purple);color:#fff;font-size:14px;font-weight:600;padding:13px 36px;border:none;border-radius:8px;cursor:pointer;font-family:'Poppins',sans-serif;text-decoration:none;transition:background .2s}
    .btn-cf:hover{background:#5a0b90;color:#fff}
    .btn-ch{background:transparent;color:var(--purple);font-size:14px;font-weight:600;padding:13px 36px;border:2px solid var(--purple);border-radius:8px;cursor:pointer;font-family:'Poppins',sans-serif;text-decoration:none;transition:all .2s}
    .btn-ch:hover{background:var(--purple);color:#fff}

    /* ════ RESPONSIVE ════ */
    @media(min-width:1400px){
      .navbar-wrap,.hero,.unlock,.dream,.hire-content,.how,.pricing,.everyone,.cta{padding-left:max(60px,calc((100vw - 1300px)/2));padding-right:max(60px,calc((100vw - 1300px)/2))}
    }
    @media(max-width:1199px){
      .navbar-wrap{padding:0 32px}
      .hero,.unlock,.everyone,.cta{padding:44px 40px}
      .dream{padding:44px 40px}
      .how{padding:52px 40px 60px}
      .hire-content{padding:40px 40px 44px}
      .pricing{padding:56px 40px 64px}
    }
    @media(max-width:991px){
      .navbar-wrap{padding:0 20px}
      .nav-ul,.btn-hire,.nav-signin-desktop{display:none}
      .nav-tog{display:block}
      .hero{padding:36px 28px 32px}
      .hero-img{width:160px}
      .unlock,.cta{padding:44px 28px}
      .dream{padding:40px 28px}
      .dream-top-grid{grid-template-columns:1fr;gap:20px}
      .hire-content{grid-template-columns:1fr;padding:32px 28px 36px;gap:16px}
      .card-kyc{grid-column:1;grid-row:1}
      .hire-headline{grid-column:1;grid-row:2;text-align:left}
      .hire-headline .hl-sub{margin-left:0;max-width:100%}
      .hire-bottom{grid-column:1;grid-row:3;grid-template-columns:1fr 1fr}
      .how{padding:48px 28px 56px}
      .how-steps-row{gap:16px}
      .how-step-box{width:130px;height:95px;font-size:13px}
      .pricing{padding:48px 28px 56px}
      .pricing-grid{grid-template-columns:1fr;max-width:500px}
      .everyone{padding:56px 28px;flex-direction:column;gap:28px}
      .dream-cards-row{grid-template-columns:1fr 1fr}
    }
    @media(max-width:767px){
      .navbar-wrap{padding:0 16px;height:58px}
      .hero{padding:28px 18px 26px}
      .hero-top{flex-direction:column;align-items:flex-start;margin-bottom:28px;gap:0}
      .hero-img-wrap{display:none}
      .hero-h1{font-size:26px}.hero-p{font-size:13px}
      .sbar{flex-direction:column;border-radius:14px;padding:14px 16px;gap:12px;align-items:stretch;max-width:100%}
      .sf,.sl{width:100%}
      .sdiv{display:none}
      .btn-fj{width:100%;border-radius:8px;padding:12px;text-align:center}
      .unlock{padding:36px 18px}
      .dream{padding:32px 18px 36px}
      .dream-top-grid{grid-template-columns:1fr;gap:20px}
      .d-dream-text,.d-job-text{font-size:44px}
      .d-awaits{font-size:26px}
      .dream-cards-row{grid-template-columns:1fr}
      .hire-content{padding:24px 16px 28px;gap:14px}
      .hire-headline h2{font-size:38px;letter-spacing:-1px}
      .hire-bottom{grid-template-columns:1fr}
      .how{padding:40px 18px 48px}
      .how-steps-row{grid-template-columns:1fr;gap:32px}
      .how-step-col::after,.how-step-col::before{display:none}
      .how-arrow{display:none}
      .how-step-col{flex-direction:row;align-items:flex-start;gap:20px}
      .how-step-box{width:100px;height:80px;font-size:12px;flex-shrink:0;transform:none}
      .how-step-desc{text-align:left;margin-top:0;padding:0}
      .pricing{padding:36px 18px 44px}
      .pricing-grid{max-width:100%}
      .plan-row{grid-template-columns:1fr}
      .plan-features{margin-top:12px}
      .everyone{padding:48px 18px;flex-direction:column;gap:20px}
      .ev-left h2{font-size:32px}
      .cta{padding:36px 18px}
      .cta h3{font-size:17px}
      .cta-btns{flex-direction:column;align-items:center}
      .btn-cf,.btn-ch{width:100%;max-width:320px;text-align:center}
    }
    @media(max-width:480px){
      .navbar-wrap{padding:0 12px}
      .hero{padding:22px 14px 20px}
      .hero-h1{font-size:21px}
      .unlock,.how,.everyone,.cta{padding-left:14px;padding-right:14px}
      .dream{padding:28px 14px 32px}
      .hire-content{padding:20px 14px 24px}
      .pricing{padding:32px 14px 40px}
      .d-dream-text,.d-job-text{font-size:38px}
      .d-awaits{font-size:22px}
      .hire-headline h2{font-size:32px}
      .ev-left h2{font-size:26px}
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar-wrap">
    <a href="#" class="nav-logo">
      <i class="bi bi-check-circle-fill li"></i>
      <span class="lt">True Jobs</span>
    </a>
    <ul class="nav-ul">
      <li><a href="#">Pricing Plans</a></li>
      <li class="nav-signin-wrap nav-signin-desktop">
        <a href="#" class="nav-signin" onclick="toggleSignin(event)">
          Sign In As <i class="bi bi-chevron-down ms-1"></i>
        </a>
        <div class="sdrop" id="sdrop">
          <a href="#">Job Seeker</a>
          <a href="#">Employer</a>
          <a href="#">Admin</a>
        </div>
      </li>
      <li><a href="#" class="btn-hire">Start Hiring</a></li>
    </ul>
    <button class="nav-tog" onclick="toggleMob()"><i class="bi bi-list" id="togIcon"></i></button>
  </nav>
  <div class="mob-nav" id="mobNav">
    <a href="#">Pricing Plans</a>
    <a href="#">Sign In As Job Seeker</a>
    <a href="#">Sign In As Employer</a>
    <a href="#">Start Hiring</a>
  </div>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-top">
      <div class="hero-txt">
        <h1 class="hero-h1">Your Next Chapter,<br/>Starts Here.</h1>
        <p class="hero-p">Discover Thousands Of Job Opportunities And Find<br class="d-none d-md-block"/>The One That's Right For You.</p>
      </div>
      <div class="hero-img-wrap">
        <img class="hero-img" alt="illustration"
          src="https://cdn3d.iconscout.com/3d/premium/thumb/man-analyzing-business-report-3d-illustration-download-in-png-blend-fbx-gltf-file-formats--analysis-graph-analytics-pack-business-illustrations-4637918.png"
          onerror="this.src='https://cdn-icons-png.flaticon.com/512/3281/3281307.png';this.style.width='130px';"/>
      </div>
    </div>
    <div class="hero-search">
      <div class="sbar">
        <div class="sf"><i class="bi bi-search"></i><input type="text" placeholder="Job title or keywords"/></div>
        <div class="sdiv"></div>
        <div class="sl"><i class="bi bi-geo-alt"></i><input type="text" placeholder="City or pincode"/></div>
        <button class="btn-fj">Find Jobs</button>
      </div>
    </div>
  </section>

  <!-- UNLOCK -->
  <section class="unlock">
    <div class="ulabel">Unlock Your Potential</div>
    <p>Join our platform to connect with innovative companies and find a career you'll love</p>
    <a href="#" class="btn-gs">Get Started</a>
    <div class="umeta mt-3">Are you an employer? &nbsp;<a href="#">Post a Job Free</a></div>
    <div class="tlink mt-2"><a href="#">Explore trending roles →</a></div>
  </section>

  <!-- ══════════════════════════════════════════════
       DREAM JOB — IMAGE 2 EXACT LAYOUT
  ══════════════════════════════════════════════ -->
  <section class="dream">

    <!-- TOP: 2 columns — Left title shape | Right desc+card -->
    <div class="dream-top-grid">

      <!-- LEFT: "Your / Dream / Job Awaits" CSS L-shape -->
      <div class="dream-left-col">
        <span class="d-your">Your</span>
        <div class="d-shape">
          <!-- "Dream" — wide purple box, rounded top + bottom-right -->
          <div class="d-dream-row">
            <span class="d-dream-text">Dream</span>
          </div>
          <!-- "Job" narrow purple box + "Awaits" outside -->
          <div class="d-job-row">
            <div class="d-job-box">
              <span class="d-job-text">Job</span>
            </div>
            <span class="d-awaits">Awaits</span>
          </div>
        </div>
      </div>

      <!-- RIGHT: desc text on top, Find Perfect Fit card below -->
      <div class="dream-right-col">
        <p class="dream-desc-text">
          We provide the tools you need to <strong>find a job you love</strong>, with a focus on privacy and ease of use.
        </p>
        <div class="fpc">
          <div class="fpc-head">
            <i class="bi bi-funnel-fill"></i>
            <h4>Find the Perfect Fit</h4>
          </div>
          <p>Find jobs by role, domain &amp; location — inclusive filters for differently-abled professionals.</p>
        </div>
      </div>

    </div>

    <!-- BOTTOM: 3 dark feature cards -->
    <div class="dream-cards-row">
      <div class="fc c1">
        <div class="fci"><i class="bi bi-file-earmark-person-fill"></i></div>
        <h5>Build Perfect Resume</h5>
        <p>Build your CV with ready-made templates or upload your own resume to apply instantly.</p>
      </div>
      <div class="fc c2">
        <div class="fci"><i class="bi bi-eye-slash-fill"></i></div>
        <h5>You Control Your Privacy</h5>
        <p>Simply mask your contact details from profile settings anytime.</p>
      </div>
      <div class="fc c3">
        <div class="fci"><i class="bi bi-calendar-check-fill"></i></div>
        <h5>Set Your Availability</h5>
        <p>You're in control: Actively job hunting or open to offers.</p>
      </div>
    </div>

  </section>

  <!-- HIRE SMARTER -->
  <section class="hire-section">
    <div class="hire-bg">
      <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=1600&q=85&fit=crop&crop=center&auto=format" alt="Professional" onerror="this.style.display='none'"/>
    </div>
    <div class="hire-bg-tint"></div>
    <div class="hire-content">
      <div class="hcard card-kyc">
        <div class="hcard-head">
          <div class="hcard-icon"><svg viewBox="0 0 24 24"><path d="M12 2.5L4.5 6V11.5C4.5 15.6 7.7 19.6 12 20.9C16.3 19.6 19.5 15.6 19.5 11.5V6Z"/><circle cx="12" cy="11.5" r="3.8"/><polyline points="10.2,11.5 11.4,12.7 13.8,10.3"/></svg></div>
          <span class="hcard-title">KYC Verified Hirers</span>
        </div>
        <p class="hcard-body">We ensure a high-quality, trusted platform. Mandatory KYC keeps our employer base trustworthy.</p>
      </div>
      <div class="hire-headline">
        <span class="hl-hire">Hire</span>
        <h2>Smarter,<br/>Not Harder</h2>
        <p class="hl-sub">Access a pool of verified talent and use powerful tools to streamline your hiring process.</p>
      </div>
      <div class="hire-bottom">
        <div class="hcard">
          <div class="hcard-head"><div class="hcard-icon"><svg viewBox="0 0 24 24"><path d="M12 2.5L4.5 6V11.5C4.5 15.6 7.7 19.6 12 20.9C16.3 19.6 19.5 15.6 19.5 11.5V6Z"/><circle cx="12" cy="11.5" r="3.8"/><polyline points="10.2,11.5 11.4,12.7 13.8,10.3"/></svg></div><span class="hcard-title">Discover Top Talent</span></div>
          <p class="hcard-body">Got a subscription? Spend your credits to view untapped talent.</p>
        </div>
        <div class="hcard">
          <div class="hcard-head"><div class="hcard-icon"><svg viewBox="0 0 24 24"><path d="M12 2.5L4.5 6V11.5C4.5 15.6 7.7 19.6 12 20.9C16.3 19.6 19.5 15.6 19.5 11.5V6Z"/><circle cx="12" cy="11.5" r="3.8"/><polyline points="10.2,11.5 11.4,12.7 13.8,10.3"/></svg></div><span class="hcard-title">Collaborate With Team</span></div>
          <p class="hcard-body">Keep your team in sync with Notes. Add comments directly on profiles.</p>
        </div>
        <div class="hcard">
          <div class="hcard-head"><div class="hcard-icon"><svg viewBox="0 0 24 24"><path d="M12 2.5L4.5 6V11.5C4.5 15.6 7.7 19.6 12 20.9C16.3 19.6 19.5 15.6 19.5 11.5V6Z"/><circle cx="12" cy="11.5" r="3.8"/><polyline points="10.2,11.5 11.4,12.7 13.8,10.3"/></svg></div><span class="hcard-title">Streamline Workflow</span></div>
          <p class="hcard-body">Shortlist, download resumes, or export applicants to Excel—effortlessly.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="how">
    <h2 class="how-title">How TrueJob Works</h2>
    <div class="how-group">
      <div class="how-group-label"><span>For Job Seekers</span></div>
      <div class="how-steps-row">
        <div class="how-step-col">
          <div class="how-step-box">1. Create<br/>Profile</div>
          <span class="how-arrow">&#8250;</span>
          <p class="how-step-desc">Complete your profile with basic details, education, work experience, and upload your resume.</p>
        </div>
        <div class="how-step-col">
          <div class="how-step-box">2. Set Your<br/>Preferences</div>
          <span class="how-arrow">&#8250;</span>
          <p class="how-step-desc">Choose your preferred job roles, locations, and set your profile status (actively searching, available after some days, etc.).</p>
        </div>
        <div class="how-step-col">
          <div class="how-step-box">3. Apply for<br/>Jobs</div>
          <p class="how-step-desc">Browse thousands of jobs and explore with smart filters. View applications freely, and apply to all jobs with a one-time ₹100 fee for lifetime access.</p>
        </div>
      </div>
    </div>
    <div class="how-group">
      <div class="how-group-label"><span>For Employers</span></div>
      <div class="how-steps-row">
        <div class="how-step-col">
          <div class="how-step-box">1. Complete<br/>KYC<br/>Verification</div>
          <span class="how-arrow">&#8250;</span>
          <p class="how-step-desc">Submit your company details and complete KYC to start posting jobs and accessing candidate profiles.</p>
        </div>
        <div class="how-step-col">
          <div class="how-step-box">2. Choose a<br/>Subscription<br/>Plan</div>
          <span class="how-arrow">&#8250;</span>
          <p class="how-step-desc">Select a plan that fits your hiring needs and get credits to post jobs and view candidate profiles.</p>
        </div>
        <div class="how-step-col">
          <div class="how-step-box">3. Find the<br/>Right<br/>Candidates</div>
          <p class="how-step-desc">Use our advanced filters to find perfect candidates, shortlist, download resumes, and collaborate with your team.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section class="pricing">
    <h2 class="pricing-title">Simple &amp; Transparent Pricing</h2>
    <p class="pricing-sub">No hidden fees. Choose a plan that works for you.</p>
    <div class="pricing-grid">
      <div class="pc-left">
        <div class="pc-left-header"><div class="pc-label">FOR CANDIDATES</div></div>
        <div class="plan-row grey">
          <div>
            <div class="plan-name">Basic Job Seeker</div>
            <div class="plan-price">₹0 <span class="plan-per">/ forever</span></div>
          </div>
          <ul class="plan-features">
            <li><i class="bi bi-check2 fi-check"></i>Free job browsing</li>
            <li><i class="bi bi-check2 fi-check"></i>Create profile</li>
            <li><i class="bi bi-check2 fi-check"></i>Save job listings</li>
            <li><i class="bi bi-x fi-x"></i>CV templates</li>
            <li><i class="bi bi-x fi-x"></i>Apply for jobs</li>
          </ul>
        </div>
        <div class="plan-row white">
          <div>
            <div class="plan-name">Pro Job Seeker</div>
            <div class="plan-price">₹100 <span class="plan-per">/ one-time</span></div>
          </div>
          <ul class="plan-features">
            <li><i class="bi bi-check2 fi-check"></i>Everything in Basic</li>
            <li><i class="bi bi-check2 fi-check"></i>Unlimited job applications</li>
            <li><i class="bi bi-check2 fi-check"></i>Premium CV templates</li>
            <li><i class="bi bi-check2 fi-check"></i>Profile visibility control</li>
            <li><i class="bi bi-check2 fi-check"></i>Contact privacy options</li>
          </ul>
        </div>
        <div class="pc-left-btn"><a href="#" class="btn-view-dark">View Plans</a></div>
      </div>
      <div class="pc-right">
        <div>
          <div class="pc-label">FOR EMPLOYERS</div>
          <p class="pc-tagline">Flexible plans to suit your hiring needs.</p>
          <div class="pc-right-block">
            <h4>Subscription Plans</h4>
            <p>Get credits for posting jobs and unlocking profiles. 'Urgent Hiring' tag available on premium plans.</p>
          </div>
          <hr class="pc-right-divider"/>
          <div class="pc-right-block">
            <h4>Credit Packs</h4>
            <p>Need more? Buy credits separately as you go to unlock more candidate profiles.</p>
          </div>
        </div>
        <a href="#" class="btn-view-outline">View Plans</a>
      </div>
    </div>
  </section>

  <!-- FOR EVERYONE -->
  <section class="everyone">
    <div class="ev-left"><h2>A Job Portal For<br/><span>Everyone</span></h2></div>
    <div class="ev-right"><p>We believe opportunity should have no barriers. Our platform is designed from the ground up to be accessible for all, including professionals with physical disabilities. From local artisans to tech experts, we are building a community where every talent can find its place.</p></div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <h3>Ready to Transform Your Career or Hiring Process?</h3>
    <div class="cta-btns">
      <a href="#" class="btn-cf">Find My Job</a>
      <a href="#" class="btn-ch">Start Hiring</a>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function toggleSignin(e){
      e.preventDefault();
      document.getElementById('sdrop').classList.toggle('open');
    }
    document.addEventListener('click',function(e){
      const d=document.getElementById('sdrop');
      if(d&&!d.contains(e.target)&&!e.target.closest('.nav-signin-desktop'))d.classList.remove('open');
    });
    function toggleMob(){
      const n=document.getElementById('mobNav');
      const i=document.getElementById('togIcon');
      n.classList.toggle('open');
      i.className=n.classList.contains('open')?'bi bi-x-lg':'bi bi-list';
    }
  </script>
</body>
</html>
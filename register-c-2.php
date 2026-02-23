<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>True Jobs – Education</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --purple-dark:  #1a0035;
      --purple-mid:   #3b005e;
      --purple-top:   #4a0070;
      --purple-act:   #6A0DAD;
      --green-main:   #28a745;
      --input-border: #d0d0d8;
      --label-color:  #999;
      --text-dark:    #1a1a1a;
      --text-muted:   #666;
      --white:        #ffffff;
    }

    html, body {
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(175deg, #4a0070 0%, #2e0050 40%, #1a0035 100%);
      overflow-x: hidden;
    }

    /* ══════════════ NAVBAR ══════════════ */
    .top-navbar {
      display: flex;
      align-items: center;
      gap: 20px;
      padding: 16px 36px;
    }
    .logo-pill {
      display: flex;
      align-items: center;
      gap: 7px;
      border: 2px solid #fff;
      border-radius: 50px;
      padding: 5px 14px;
      text-decoration: none;
    }
    .logo-pill .lp-icon { color: var(--green-main); font-size: 16px; }
    .logo-pill .lp-text {
      font-size: 11.5px;
      font-weight: 700;
      color: #fff;
      letter-spacing: 1.2px;
      text-transform: uppercase;
    }
    .nav-title {
      font-size: 20px;
      font-weight: 700;
      color: #fff;
    }

    /* ══════════════ STEPPER ══════════════ */
    .stepper-area {
      padding: 4px 36px 28px;
    }
    .steps-list {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 0;
      row-gap: 6px;
      margin-bottom: 12px;
    }
    .s-item {
      font-size: 12px;
      font-weight: 500;
      color: rgba(255,255,255,0.45);
      white-space: nowrap;
      padding: 3px 10px 3px 0;
      cursor: default;
      position: relative;
    }
    .s-item.done  { color: rgba(255,255,255,0.6); }
    .s-item.active {
      color: #fff;
      font-weight: 700;
      text-decoration: underline;
      text-underline-offset: 3px;
    }
    .s-item + .s-item::before {
      content: '';
      display: inline-block;
      width: 1px;
      height: 11px;
      background: rgba(255,255,255,0.22);
      margin-right: 10px;
      vertical-align: middle;
    }

    /* Progress bar */
    .prog-track {
      height: 5px;
      background: rgba(255,255,255,0.15);
      border-radius: 10px;
      overflow: hidden;
    }
    .prog-fill {
      height: 100%;
      width: 33.33%;           /* Step 2 of 6 */
      background: linear-gradient(90deg, #b36ef0, #6A0DAD);
      border-radius: 10px;
      transition: width 0.5s ease;
    }

    /* ══════════════ FORM CARD ══════════════ */
    .form-card {
      background: #fff;
      border-radius: 14px;
      margin: 0 36px 48px;
      padding: 36px 40px 36px;
      box-shadow: 0 20px 60px rgba(0,0,0,0.22);
      min-height: 420px;
      display: flex;
      flex-direction: column;
      animation: fadeUp 0.4s ease both;
    }
    @keyframes fadeUp {
      from { opacity:0; transform:translateY(18px); }
      to   { opacity:1; transform:translateY(0); }
    }

    .card-title {
      font-size: 19px;
      font-weight: 700;
      color: var(--purple-act);
      margin-bottom: 28px;
    }

    .form-body { flex: 1; }

    /* ══════════════ FIELD GROUP ══════════════ */
    .field-group {
      position: relative;
      margin-bottom: 0;
    }
    .field-group label {
      position: absolute;
      top: -9px;
      left: 13px;
      font-size: 11px;
      font-weight: 500;
      color: var(--label-color);
      background: #fff;
      padding: 0 4px;
      z-index: 2;
      white-space: nowrap;
    }
    .field-group .fc,
    .field-group .fs {
      width: 100%;
      border: 1.5px solid var(--input-border);
      border-radius: 8px;
      padding: 13px 16px;
      font-size: 13.5px;
      font-family: 'Poppins', sans-serif;
      color: var(--text-dark);
      outline: none;
      background: #fff;
      transition: border-color 0.2s, box-shadow 0.2s;
      appearance: none;
      -webkit-appearance: none;
    }
    .field-group .fc:focus,
    .field-group .fs:focus {
      border-color: var(--purple-act);
      box-shadow: 0 0 0 3px rgba(106,13,173,0.07);
    }
    .field-group .fc::placeholder { color: #bbb; }
    .field-group .fs             { color: #bbb; }
    .field-group .fs.has-val     { color: var(--text-dark); }

    /* Select wrapper */
    .sel-wrap { position: relative; }
    .sel-wrap .caret {
      position: absolute;
      right: 13px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--purple-act);
      font-size: 13px;
      pointer-events: none;
    }

    /* ══════════════ DYNAMIC EXTRA FIELDS ══════════════ */
    .edu-reveal {
      overflow: hidden;
      max-height: 0;
      opacity: 0;
      transition: max-height 0.5s cubic-bezier(0.4,0,0.2,1),
                  opacity    0.4s ease,
                  padding    0.4s ease;
      padding-top: 0;
    }
    .edu-reveal.open {
      max-height: 600px;
      opacity: 1;
      padding-top: 28px;
    }

    /* ══════════════ FIELD ERROR ══════════════ */
    .f-err {
      font-size: 10.5px;
      color: #dc3545;
      margin-top: 4px;
      display: none;
    }
    .has-error .fc,
    .has-error .fs  { border-color: #dc3545 !important; }
    .has-error .f-err { display: block; }

    /* ══════════════ FOOTER BUTTONS ══════════════ */
    .card-footer-bar {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      gap: 14px;
      margin-top: auto;
      padding-top: 28px;
      border-top: 1px solid #f0f0f5;
    }

    .btn-back {
      background: #fff;
      color: #444;
      font-size: 14px;
      font-weight: 500;
      padding: 11px 34px;
      border: 1.5px solid #d0d0d8;
      border-radius: 8px;
      cursor: pointer;
      font-family: 'Poppins', sans-serif;
      transition: border-color 0.2s, color 0.2s;
    }
    .btn-back:hover { border-color: var(--purple-act); color: var(--purple-act); }

    .btn-next {
      background: var(--purple-act);
      color: #fff;
      font-size: 14px;
      font-weight: 600;
      padding: 11px 42px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-family: 'Poppins', sans-serif;
      letter-spacing: 0.2px;
      transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
    }
    .btn-next:hover {
      background: #5a0b90;
      transform: translateY(-1px);
      box-shadow: 0 6px 18px rgba(106,13,173,0.28);
    }
    .btn-next:active { transform: translateY(0); }

    /* ══════════════ RESPONSIVE ══════════════ */
    @media (max-width: 991px) {
      .top-navbar  { padding: 14px 24px; }
      .stepper-area{ padding: 4px 24px 24px; }
      .form-card   { margin: 0 24px 40px; padding: 28px 24px 28px; }
    }
    @media (max-width: 767px) {
      .top-navbar  { padding: 12px 18px; gap: 12px; }
      .nav-title   { font-size: 16px; }
      .stepper-area{ padding: 4px 18px 20px; }
      .s-item      { font-size: 10.5px; }
      .form-card   { margin: 0 14px 32px; padding: 22px 16px 22px; min-height: unset; }
      .card-title  { font-size: 16px; margin-bottom: 20px; }
    }
    @media (max-width: 575px) {
      .s-item + .s-item::before { display: none; }
      .steps-list { gap: 4px; }
    }
  </style>
</head>
<body>

  <!-- ══════ NAVBAR ══════ -->
  <nav class="top-navbar">
    <a href="#" class="logo-pill">
      <i class="bi bi-check-circle-fill lp-icon"></i>
      <span class="lp-text">True Jobs</span>
    </a>
    <span class="nav-title">Let's Get You Started!</span>
  </nav>

  <!-- ══════ STEPPER ══════ -->
  <div class="stepper-area">
    <div class="steps-list">
      <div class="s-item done">1. Basic Details</div>
      <div class="s-item active">2. Education</div>
      <div class="s-item">3. Preferred Job Role</div>
      <div class="s-item">4. Skills/Expertise</div>
      <div class="s-item">5. Job Type &amp; Language</div>
      <div class="s-item">6. Social Links &amp; Resume</div>
    </div>
    <div class="prog-track">
      <div class="prog-fill" id="progFill"></div>
    </div>
  </div>

  <!-- ══════ FORM CARD ══════ -->
  <div class="form-card">
    <div class="card-title">Education</div>

    <div class="form-body">

      <!-- ── Qualification dropdown (always visible) ── -->
      <div class="row">
        <div class="col-md-5 col-lg-4">
          <div class="field-group" id="fg-qual">
            <label>Your Highest Qualification*</label>
            <div class="sel-wrap">
              <select class="fs" id="inp-qual" onchange="onQualChange(this.value)">
                <option value="" disabled selected>Select</option>
                <option value="10th">10th / SSLC</option>
                <option value="12th">12th / HSC</option>
                <option value="diploma">Diploma</option>
                <option value="ug">Bachelor's Degree (UG)</option>
                <option value="pg">Master's Degree (PG)</option>
                <option value="phd">PhD / Doctorate</option>
              </select>
              <i class="bi bi-chevron-down caret"></i>
            </div>
            <div class="f-err">Please select your qualification</div>
          </div>
        </div>
      </div>

      <!-- ── Dynamic reveal: 10th / 12th ── -->
      <div class="edu-reveal" id="revSchool">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="field-group" id="fg-sname">
              <label>School Name*</label>
              <input type="text" class="fc" id="inp-sname" placeholder="Enter your school name"/>
              <div class="f-err">Please enter school name</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="field-group" id="fg-board">
              <label>Board*</label>
              <div class="sel-wrap">
                <select class="fs" id="inp-board">
                  <option value="" disabled selected>Select board</option>
                  <option>State Board</option>
                  <option>CBSE</option>
                  <option>ICSE</option>
                  <option>Matriculation</option>
                  <option>Other</option>
                </select>
                <i class="bi bi-chevron-down caret"></i>
              </div>
              <div class="f-err">Please select board</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="field-group" id="fg-syear">
              <label>Year of Passing*</label>
              <div class="sel-wrap">
                <select class="fs" id="inp-syear">
                  <option value="" disabled selected>Select year</option>
                </select>
                <i class="bi bi-chevron-down caret"></i>
              </div>
              <div class="f-err">Please select year</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="field-group">
              <label>Percentage / Grade</label>
              <input type="text" class="fc" id="inp-spct" placeholder="e.g. 88% or A+"/>
            </div>
          </div>
        </div>
      </div>

      <!-- ── Dynamic reveal: Diploma / UG / PG / PhD ── -->
      <div class="edu-reveal" id="revCollege">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="field-group" id="fg-course">
              <label>Course / Degree Name*</label>
              <input type="text" class="fc" id="inp-course" placeholder="e.g. B.E, B.Tech, MBA, M.Sc"/>
              <div class="f-err">Please enter course name</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="field-group" id="fg-spec">
              <label>Specialization / Branch*</label>
              <input type="text" class="fc" id="inp-spec" placeholder="e.g. Computer Science, Finance"/>
              <div class="f-err">Please enter specialization</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="field-group" id="fg-college">
              <label>College / University Name*</label>
              <input type="text" class="fc" id="inp-college" placeholder="Enter institution name"/>
              <div class="f-err">Please enter institution</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="field-group" id="fg-cyear">
              <label>Year of Passing*</label>
              <div class="sel-wrap">
                <select class="fs" id="inp-cyear">
                  <option value="" disabled selected>Select year</option>
                </select>
                <i class="bi bi-chevron-down caret"></i>
              </div>
              <div class="f-err">Please select year</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="field-group">
              <label>CGPA / Percentage</label>
              <input type="text" class="fc" id="inp-cgpa" placeholder="e.g. 8.5 or 85%"/>
            </div>
          </div>
          <!-- PhD only -->
          <div class="col-md-6" id="phd-wrap" style="display:none;">
            <div class="field-group">
              <label>Research Topic / Thesis</label>
              <input type="text" class="fc" id="inp-phd" placeholder="Enter your research area"/>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /form-body -->

    <!-- ── Footer buttons ── -->
    <div class="card-footer-bar">
      <button class="btn-back" onclick="goBack()">Go back</button>
      <button class="btn-next" onclick="doNext()">Next</button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>

    /* ── Populate year dropdowns ── */
    function fillYears(id) {
      const sel = document.getElementById(id);
      if (!sel || sel.options.length > 1) return;
      const cy = new Date().getFullYear();
      for (let y = cy; y >= 1975; y--) {
        const o = document.createElement('option');
        o.value = y; o.textContent = y;
        sel.appendChild(o);
      }
    }

    /* ── Qualification change ── */
    function onQualChange(val) {
      const school  = document.getElementById('revSchool');
      const college = document.getElementById('revCollege');
      const phdWrap = document.getElementById('phd-wrap');

      // close both first
      school.classList.remove('open');
      college.classList.remove('open');
      phdWrap.style.display = 'none';

      // clear errors
      ['fg-sname','fg-board','fg-syear','fg-course','fg-spec','fg-college','fg-cyear'].forEach(id => {
        const el = document.getElementById(id);
        if (el) el.classList.remove('has-error');
      });

      if (!val) return;

      if (val === '10th' || val === '12th') {
        school.classList.add('open');
        fillYears('inp-syear');
      } else {
        college.classList.add('open');
        fillYears('inp-cyear');
        if (val === 'phd') phdWrap.style.display = 'block';
      }

      // mark select as has value
      document.getElementById('inp-qual').classList.add('has-val');
    }

    /* ── Validation ── */
    function validate() {
      let ok = true;
      const qual = document.getElementById('inp-qual').value;

      // always check qual
      setErr('fg-qual', !qual);
      if (!qual) { ok = false; }

      if (qual === '10th' || qual === '12th') {
        ok = chkText('fg-sname', 'inp-sname') && ok;
        ok = chkSel('fg-board',  'inp-board')  && ok;
        ok = chkSel('fg-syear',  'inp-syear')  && ok;
      } else if (qual) {
        ok = chkText('fg-course',  'inp-course')  && ok;
        ok = chkText('fg-spec',    'inp-spec')    && ok;
        ok = chkText('fg-college', 'inp-college') && ok;
        ok = chkSel('fg-cyear',   'inp-cyear')   && ok;
      }
      return ok;
    }

    function setErr(fgId, isErr) {
      const el = document.getElementById(fgId);
      if (!el) return;
      isErr ? el.classList.add('has-error') : el.classList.remove('has-error');
    }
    function chkText(fgId, inpId) {
      const val = (document.getElementById(inpId)?.value || '').trim();
      setErr(fgId, !val);
      return !!val;
    }
    function chkSel(fgId, inpId) {
      const val = document.getElementById(inpId)?.value || '';
      setErr(fgId, !val);
      return !!val;
    }

    /* ── Navigation ── */
    function doNext() {
      if (!validate()) return;
      // Navigate to step 3 page or show alert
      alert('Education saved! Proceeding to Preferred Job Role...');
    }
    function goBack() {
      history.back();
    }

    /* ── select colour fix ── */
    document.querySelectorAll('.fs').forEach(s => {
      s.addEventListener('change', function() {
        this.classList.add('has-val');
        this.style.color = '#1a1a1a';
      });
    });

  </script>
</body>
</html>
/**
 * Blue Education Wireframe — site.js
 * Restructures the dual-canvas layout into a three-panel view (TOC + canvases),
 * injects nav/footer partials, and handles mobile menu + dropdown interactions.
 */
(function () {
  'use strict';

  /* ── Zoom state ────────────────────────────────────────────────────────── */
  let zoomLevel = 0.8;
  const ZOOM_STEP = 0.1;
  const ZOOM_MIN  = 0.3;
  const ZOOM_MAX  = 1.5;

  function applyZoom() {
    const canvasArea = document.getElementById('canvas-area');
    if (!canvasArea) { return; }
    canvasArea.style.zoom = String(zoomLevel);
    const label  = document.getElementById('wf-zoom-label');
    const btnOut = document.getElementById('wf-zoom-out');
    const btnIn  = document.getElementById('wf-zoom-in');
    if (label)  { label.textContent = Math.round(zoomLevel * 100) + '%'; }
    if (btnOut) { btnOut.disabled = zoomLevel <= ZOOM_MIN; btnOut.style.opacity = zoomLevel <= ZOOM_MIN ? '0.35' : '1'; }
    if (btnIn)  { btnIn.disabled  = zoomLevel >= ZOOM_MAX; btnIn.style.opacity  = zoomLevel >= ZOOM_MAX ? '0.35' : '1'; }
  }

  /* ── WF-bar visibility ─────────────────────────────────────────────────── */
  let wfBarsVisible = true;

  function applyWfBars() {
    document.body.classList.toggle('wf-bars-hidden', !wfBarsVisible);
    const btn = document.getElementById('wf-bars-toggle');
    if (btn) { btn.textContent = wfBarsVisible ? 'Hide labels' : 'Show labels'; }
  }

  /* ── Theme state ───────────────────────────────────────────────────────── */
  let isDarkMode = false;

  function applyTheme() {
    const html = document.documentElement;
    if (isDarkMode) {
      html.classList.add('dark');          /* Tailwind darkMode: 'class' trigger */
      html.classList.remove('wf-theme-light');
      html.classList.add('wf-theme-dark'); /* CSS var override for var(--base) elements */
    } else {
      html.classList.remove('dark');
      html.classList.remove('wf-theme-dark');
      html.classList.add('wf-theme-light');
    }
    const btn = document.getElementById('wf-theme-toggle');
    if (btn) { btn.textContent = isDarkMode ? '☀ Light' : '🌙 Dark'; }
  }

  /* ── Partial injection ─────────────────────────────────────────────────── */
  async function injectPartial(url, selectors) {
    try {
      const res = await fetch(url);
      if (!res.ok) { return; }
      const html = await res.text();
      selectors.forEach((sel) => {
        const el = document.querySelector(sel);
        if (el) { el.innerHTML = html; }
      });
    } catch (e) {
      /* file:// protocol blocks fetch — serve via HTTP for partials to load */
    }
  }

  /* ── Nav interactions ──────────────────────────────────────────────────── */
  function initMobileMenu(nav) {
    const btn    = nav.querySelector('[data-mobile-toggle]');
    const drawer = nav.querySelector('[data-mobile-drawer]');
    if (!btn || !drawer) { return; }

    btn.addEventListener('click', () => {
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!expanded));
      drawer.hidden = expanded;
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && btn.getAttribute('aria-expanded') === 'true') {
        btn.setAttribute('aria-expanded', 'false');
        drawer.hidden = true;
        btn.focus();
      }
    });
  }

  function initDropdowns(nav) {
    nav.querySelectorAll('[data-dropdown]').forEach((wrapper) => {
      const trigger = wrapper.querySelector('[data-dropdown-trigger]');
      const menu    = wrapper.querySelector('[data-dropdown-menu]');
      if (!trigger || !menu) { return; }

      const open  = () => { trigger.setAttribute('aria-expanded', 'true');  menu.hidden = false; };
      const close = () => { trigger.setAttribute('aria-expanded', 'false'); menu.hidden = true;  };

      wrapper.addEventListener('mouseenter', open);
      wrapper.addEventListener('mouseleave', close);

      trigger.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); trigger.getAttribute('aria-expanded') === 'true' ? close() : open(); }
        if (e.key === 'Escape') { close(); trigger.focus(); }
      });

      menu.querySelectorAll('a').forEach((link, i, all) => {
        link.addEventListener('keydown', (e) => {
          if (e.key === 'Escape')    { close(); trigger.focus(); }
          if (e.key === 'ArrowDown') { e.preventDefault(); all[Math.min(i + 1, all.length - 1)].focus(); }
          if (e.key === 'ArrowUp')   { e.preventDefault(); all[Math.max(i - 1, 0)].focus(); }
        });
      });

      wrapper.addEventListener('focusout', (e) => { if (!wrapper.contains(e.relatedTarget)) { close(); } });
    });
  }

  function markActiveLink(nav) {
    const page = location.pathname.split('/').pop() || 'index.html';
    nav.querySelectorAll('a[href]').forEach((a) => {
      if (a.getAttribute('href') === page || a.getAttribute('href') === './' + page) {
        a.setAttribute('aria-current', 'page');
        a.classList.add('text-primary', 'font-semibold');
      }
    });
  }

  /* ── Layout restructure ────────────────────────────────────────────────── */
  function restructureLayout() {
    const body = document.body;
    body.style.cssText = 'margin:0; height:100vh; overflow:hidden; background:#d4d4d4;';
    body.className = 'font-sans';

    const outerDiv = Array.from(body.children).find((el) => el.tagName === 'DIV');
    if (!outerDiv) { return; }

    const canvasChildren = Array.from(outerDiv.children).filter((el) => el.tagName === 'DIV');
    const [desktopCanvas, mobileCanvas] = canvasChildren;
    if (!desktopCanvas || !mobileCanvas) { return; }

    /* Shell: full-viewport flex row */
    const shell = document.createElement('div');
    shell.id = 'wf-shell';
    shell.style.cssText = 'height:100vh; display:flex; overflow:hidden;';

    /* TOC sidebar — populated by buildToc() */
    const toc = document.createElement('div');
    toc.id = 'toc-sidebar';
    toc.style.cssText = 'width:220px; flex-shrink:0; background:#0f172a; height:100%; overflow-y:auto;';
    shell.appendChild(toc);

    /* Canvas area — horizontal scroll, default align-items:stretch so wrappers fill height */
    const canvasArea = document.createElement('div');
    canvasArea.id = 'canvas-area';
    canvasArea.style.cssText = 'flex:1; display:flex; gap:32px; padding:32px; overflow-x:auto; overflow-y:hidden;';
    shell.appendChild(canvasArea);

    /* Desktop wrapper — fills canvasArea height, scrolls vertically */
    const dw = document.createElement('div');
    dw.style.cssText = 'overflow-y:auto; flex-shrink:0;';
    dw.appendChild(desktopCanvas);
    canvasArea.appendChild(dw);

    /* Mobile wrapper — ditto, sticky class removed */
    const mw = document.createElement('div');
    mw.id = 'wf-mobile-wrapper';
    mw.style.cssText = 'overflow-y:auto; flex-shrink:0;';
    mobileCanvas.classList.remove('sticky', 'top-8');
    mobileCanvas.style.position = '';
    mw.appendChild(mobileCanvas);
    canvasArea.appendChild(mw);

    body.replaceChild(shell, outerDiv);
  }

  /* ── TOC pages list ────────────────────────────────────────────────────── */
  const PAGES = [
    { label: 'Home', href: './index.html' },
    { type: 'group', label: 'Services' },
    { label: 'Services Overview',      href: './services.html',                          indent: 1 },
    { label: 'Education Services',     href: './services-education.html',                indent: 1 },
    { label: 'School Programs',        href: './services-education-school.html',          indent: 2 },
    { label: 'English & Foundation',   href: './services-education-english.html',         indent: 2 },
    { label: 'VET & TAFE',             href: './services-education-vet.html',             indent: 2 },
    { label: 'University Degrees',     href: './services-education-university.html',      indent: 2 },
    { label: 'Migration & Visas',      href: './services-migration.html',                indent: 1 },
    { label: 'Student Visas',          href: './services-migration-student-visas.html',  indent: 2 },
    { label: 'Graduate & Work Visas',  href: './services-migration-graduate-work.html',  indent: 2 },
    { label: 'Permanent Residence',    href: './services-migration-permanent.html',       indent: 2 },
    { label: 'Career Services',        href: './services-career.html',                   indent: 1 },
    { label: 'Student Support',        href: './services-student-support.html',          indent: 1 },
    { type: 'group', label: 'Programs' },
    { label: 'Programs Overview',      href: './programs.html',                           indent: 1 },
    { label: 'Buddy Programme',        href: './programs-buddy.html',                    indent: 1 },
    { label: 'Study Tours',            href: './programs-study-tours.html',              indent: 1 },
    { label: 'SCSA Associate',         href: './programs-scsa.html',                     indent: 1 },
    { label: 'Executive Internship',   href: './programs-executive-internship.html',     indent: 1 },
    { type: 'group', label: 'About' },
    { label: 'Why Australia',          href: './why-australia.html',                     indent: 1 },
    { label: 'About Us',               href: './about.html',                             indent: 1 },
    { label: 'Our Team',               href: './about-team.html',                        indent: 2 },
    { label: 'Our Partners',           href: './about-partners.html',                    indent: 2 },
    { type: 'group', label: 'Resources' },
    { label: 'Blog',                   href: './blog.html',                              indent: 1 },
    { label: 'FAQ',                    href: './resources-faq.html',                     indent: 1 },
    { label: 'Admission Requirements', href: './resources-admission.html',               indent: 1 },
    { label: 'Fees',                   href: './fees.html',                              indent: 1 },
    { label: 'Contact',                href: './contact.html',                           indent: 1 },
  ];

  /* ── TOC build ─────────────────────────────────────────────────────────── */
  function buildToc() {
    const toc = document.getElementById('toc-sidebar');
    if (!toc) { return; }

    const style = document.createElement('style');
    style.textContent = `
      /* TOC link styles */
      #toc-sidebar a { display:block; text-decoration:none; color:#94a3b8; font-size:11px; line-height:1.4; padding:5px 12px; border-radius:3px; transition:background 0.1s, color 0.1s; }
      #toc-sidebar a:hover { color:#e2e8f0; background:rgba(255,255,255,0.07); }
      #toc-sidebar a[aria-current="page"] { background:#1d4ed8; color:#fff; font-weight:600; }
      #wf-zoom-out:hover:not(:disabled), #wf-zoom-in:hover:not(:disabled),
      #wf-theme-toggle:hover { background:rgba(255,255,255,0.14) !important; color:#e2e8f0 !important; }

      /* WF-bar hide/show */
      body.wf-bars-hidden .wf-bar { display: none !important; }

      /* Forced light/dark theme via CSS custom properties */
      html.wf-theme-light { --base:#ffffff !important; --base-foreground:#0f172a !important; --muted:#f3f4f6 !important; --muted-foreground:#6b7280 !important; }
      html.wf-theme-dark  { --base:#0f172a !important; --base-foreground:#f1f5f9 !important; --muted:#1e293b !important; --muted-foreground:#94a3b8 !important; }

      /* Force mobile breakpoint behaviour inside the 390px canvas */
      #wf-mobile-wrapper .lg\\:flex                    { display: none  !important; }
      #wf-mobile-wrapper .lg\\:inline-flex             { display: none  !important; }
      #wf-mobile-wrapper .lg\\:grid                    { display: none  !important; }
      #wf-mobile-wrapper .lg\\:block                   { display: none  !important; }
      /* :not([hidden]) so the drawer is only shown when the hidden attr is absent */
      #wf-mobile-wrapper .lg\\:hidden:not([hidden])    { display: block !important; }

      /* Mobile footer: collapse 5-col grid to single column */
      #wf-mobile-wrapper footer [class*="px-16"]       { padding-left: 1rem   !important; padding-right: 1rem   !important; }
      #wf-mobile-wrapper footer .grid                  { display: flex !important; flex-direction: column !important; gap: 1.5rem !important; }
      #wf-mobile-wrapper footer .mt-10                 { margin-top: 1.5rem !important; }
      #wf-mobile-wrapper footer .border-t.flex         { flex-direction: column !important; align-items: flex-start !important; gap: 0.5rem !important; }
      #wf-mobile-wrapper footer .flex.gap-8            { flex-wrap: wrap !important; gap: 0.5rem !important; }
    `;
    document.head.appendChild(style);

    /* ── Header ── */
    const header = document.createElement('div');
    header.style.cssText = 'padding:14px 12px 10px; border-bottom:1px solid rgba(255,255,255,0.08);';
    header.innerHTML = `
      <div style="font-size:9px; font-weight:700; color:#64748b; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:2px;">BLUE EDUCATION</div>
      <div style="font-size:11px; color:#475569;">Wireframes · 25 pages</div>
    `;
    toc.appendChild(header);

    /* ── Controls: zoom + theme ── */
    const BTN = 'background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.14);border-radius:3px;color:#94a3b8;cursor:pointer;transition:background 0.1s,color 0.1s;';
    const ICON_BTN = `${BTN}width:22px;height:22px;font-size:16px;line-height:1;display:flex;align-items:center;justify-content:center;padding:0;`;
    const WIDE_BTN = `${BTN}font-size:10px;font-weight:600;letter-spacing:0.05em;padding:3px 8px;`;

    const controls = document.createElement('div');
    controls.style.cssText = 'border-bottom:1px solid rgba(255,255,255,0.08);';

    /* Zoom row */
    const zoomRow = document.createElement('div');
    zoomRow.style.cssText = 'padding:8px 12px; display:flex; align-items:center; justify-content:space-between;';
    zoomRow.innerHTML = `
      <span style="font-size:9px;font-weight:700;color:#475569;text-transform:uppercase;letter-spacing:0.1em;">Zoom</span>
      <div style="display:flex;align-items:center;gap:5px;">
        <button id="wf-zoom-out" title="Zoom out" style="${ICON_BTN}">−</button>
        <span id="wf-zoom-label" style="font-size:11px;color:#94a3b8;min-width:32px;text-align:center;cursor:default;" title="Click to reset">80%</span>
        <button id="wf-zoom-in"  title="Zoom in"  style="${ICON_BTN}">+</button>
      </div>
    `;
    controls.appendChild(zoomRow);

    /* Theme row */
    const themeRow = document.createElement('div');
    themeRow.style.cssText = 'padding:6px 12px 6px; display:flex; align-items:center; justify-content:space-between;';
    themeRow.innerHTML = `
      <span style="font-size:9px;font-weight:700;color:#475569;text-transform:uppercase;letter-spacing:0.1em;">Theme</span>
      <button id="wf-theme-toggle" title="Toggle dark/light mode" style="${WIDE_BTN}">🌙 Dark</button>
    `;
    controls.appendChild(themeRow);

    /* Labels row */
    const labelsRow = document.createElement('div');
    labelsRow.style.cssText = 'padding:6px 12px 8px; display:flex; align-items:center; justify-content:space-between;';
    labelsRow.innerHTML = `
      <span style="font-size:9px;font-weight:700;color:#475569;text-transform:uppercase;letter-spacing:0.1em;">Labels</span>
      <button id="wf-bars-toggle" title="Toggle wf-bar section labels" style="${WIDE_BTN}">Hide labels</button>
    `;
    controls.appendChild(labelsRow);
    toc.appendChild(controls);

    /* ── Control events ── */
    document.getElementById('wf-zoom-out').addEventListener('click', () => {
      zoomLevel = Math.max(ZOOM_MIN, Math.round((zoomLevel - ZOOM_STEP) * 10) / 10);
      applyZoom();
    });
    document.getElementById('wf-zoom-in').addEventListener('click', () => {
      zoomLevel = Math.min(ZOOM_MAX, Math.round((zoomLevel + ZOOM_STEP) * 10) / 10);
      applyZoom();
    });
    document.getElementById('wf-zoom-label').addEventListener('click', () => {
      zoomLevel = 1.0;
      applyZoom();
    });
    document.getElementById('wf-theme-toggle').addEventListener('click', () => {
      isDarkMode = !isDarkMode;
      applyTheme();
    });
    document.getElementById('wf-bars-toggle').addEventListener('click', () => {
      wfBarsVisible = !wfBarsVisible;
      applyWfBars();
    });

    /* ── Page nav list ── */
    const currentFile = location.pathname.split('/').pop() || 'index.html';
    const nav = document.createElement('nav');
    nav.setAttribute('aria-label', 'Wireframe pages');
    nav.style.cssText = 'padding:8px 0;';

    PAGES.forEach((item) => {
      if (item.type === 'group') {
        const group = document.createElement('div');
        group.style.cssText = 'font-size:9px;font-weight:700;color:#475569;text-transform:uppercase;letter-spacing:0.1em;padding:12px 12px 4px;border-top:1px solid rgba(255,255,255,0.06);margin-top:4px;';
        group.textContent = item.label;
        nav.appendChild(group);
      } else {
        const a = document.createElement('a');
        a.href = item.href;
        a.textContent = item.label;
        a.style.paddingLeft = item.indent === 2 ? '28px' : item.indent === 1 ? '16px' : '12px';
        const hrefFile = item.href.replace('./', '');
        if (hrefFile === currentFile || (currentFile === '' && hrefFile === 'index.html')) {
          a.setAttribute('aria-current', 'page');
        }
        nav.appendChild(a);
      }
    });

    toc.appendChild(nav);
  }

  /* ── Boot ─────────────────────────────────────────────────────────────── */
  document.addEventListener('DOMContentLoaded', async () => {
    try {
      restructureLayout();
      buildToc();
      applyZoom();
      applyTheme();   /* start forced-light so system dark-mode users see light wireframes */
    } catch (e) {
      /* Layout setup failed — nav/footer injection continues regardless */
    }

    await injectPartial('./_inc/nav.html',    ['#nav-placeholder', '#nav-placeholder-m']);
    await injectPartial('./_inc/footer.html', ['#footer-placeholder', '#footer-placeholder-m']);

    document.querySelectorAll('nav[aria-label="Main navigation"]').forEach((nav) => {
      initMobileMenu(nav.closest('header') || nav.parentElement);
      initDropdowns(nav.closest('header') || nav.parentElement);
      markActiveLink(nav);
    });
  });
})();

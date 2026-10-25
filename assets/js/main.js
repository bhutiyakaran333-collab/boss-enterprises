'use strict';
(function(){

  /* --- Splash screen --- */
  const splash = document.getElementById('splash-screen');
  if (splash) {
    // Hide splash once page is fully loaded (images, fonts, etc.)
    const hideSplash = () => {
      splash.classList.add('hidden');
      // Remove from DOM after transition ends to free resources
      splash.addEventListener('transitionend', () => splash.remove(), { once: true });
    };

    if (document.readyState === 'complete') {
      // Already loaded (e.g. cached page) — short delay so logo is visible briefly
      setTimeout(hideSplash, 600);
    } else {
      window.addEventListener('load', () => setTimeout(hideSplash, 400));
      // Safety fallback: never block the page for more than 3.5s
      setTimeout(hideSplash, 3500);
    }
  }

  /* --- Sticky header --- */
  const header = document.getElementById('site-header');
  if(header){
    const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 30);
    window.addEventListener('scroll', onScroll, {passive:true});
    onScroll();
  }

  /* --- Hamburger --- */
  const burger = document.getElementById('hamburger');
  const mNav   = document.getElementById('mobile-nav');
  if(burger && mNav){
    burger.addEventListener('click', () => {
      const open = burger.classList.toggle('open');
      mNav.classList.toggle('open', open);
      burger.setAttribute('aria-expanded', String(open));
      mNav.setAttribute('aria-hidden', String(!open));
    });
    mNav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
      burger.classList.remove('open');
      mNav.classList.remove('open');
      burger.setAttribute('aria-expanded','false');
      mNav.setAttribute('aria-hidden','true');
    }));
    document.addEventListener('click', e => {
      if(header && !header.contains(e.target)){
        burger.classList.remove('open');
        mNav.classList.remove('open');
        burger.setAttribute('aria-expanded','false');
        mNav.setAttribute('aria-hidden','true');
      }
    });
  }

  /* --- Smooth scroll --- */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const t = document.querySelector(a.getAttribute('href'));
      if(t){
        e.preventDefault();
        const hh = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--header-h'))||68;
        window.scrollTo({top: t.getBoundingClientRect().top + window.scrollY - hh - 16, behavior:'smooth'});
      }
    });
  });

  /* --- Fade-up on scroll --- */
  const fades = document.querySelectorAll('.fade-up');
  if(fades.length){
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => { if(e.isIntersecting){e.target.classList.add('visible');obs.unobserve(e.target);} });
    },{threshold:0.1});
    fades.forEach(el => obs.observe(el));
  }

  /* --- Manufacturing process tab highlight --- */
  const tabs = document.querySelectorAll('.process-tab, .process-step-tab');
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const parent = tab.closest('.process-tabs,.process-bar-inner');
      if(parent) parent.querySelectorAll('.process-tab,.process-step-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
    });
  });

  /* =====================================================
     CONTACT FORM — WhatsApp submission with full validation
     ===================================================== */
  const form = document.getElementById('contact-form');
  if(form){
    const btn        = form.querySelector('#submit-btn');
    const btnLabel   = btn ? btn.querySelector('.btn-label') : null;
    const WA_NUMBER  = form.dataset.wa || '';

    /* ---------- helpers ---------- */
    function getField(id){ return document.getElementById(id); }

    function showErr(el, msg){
      if(!el) return;
      el.classList.add('has-error');
      const fe = el.closest('.form-group')?.querySelector('.field-error');
      if(fe){ fe.textContent = msg; fe.classList.add('visible'); }
    }

    function clearErr(el){
      if(!el) return;
      el.classList.remove('has-error');
      const fe = el.closest('.form-group')?.querySelector('.field-error');
      if(fe){ fe.textContent = ''; fe.classList.remove('visible'); }
    }

    function clearAllErrors(){
      form.querySelectorAll('.form-control').forEach(el => clearErr(el));
    }

    /* ---------- live validation on blur & input ---------- */
    form.querySelectorAll('.form-control').forEach(el => {
      // Clear error as soon as user types
      el.addEventListener('input',  () => clearErr(el));
      // Validate on blur (when user leaves the field)
      el.addEventListener('blur',   () => validateField(el));
    });

    /* ---------- per-field validation rules ---------- */
    function validateField(el){
      if(!el) return true;
      const id  = el.id;
      const val = el.value.trim();

      switch(id){

        case 'f-name':
          if(!val){
            showErr(el, 'Name is required.'); return false;
          }
          if(val.length < 2){
            showErr(el, 'Name must be at least 2 characters.'); return false;
          }
          if(val.length > 100){
            showErr(el, 'Name must be under 100 characters.'); return false;
          }
          if(!/^[a-zA-Z\s'\-\.]+$/.test(val)){
            showErr(el, 'Name can only contain letters, spaces and hyphens.'); return false;
          }
          break;

        case 'f-phone':
          if(!val){
            showErr(el, 'Phone or email is required.'); return false;
          }
          // Accept phone numbers (7–15 digits, spaces, +, -, brackets)
          // OR a valid email
          const isPhone = /^[+]?[\d\s\-().]{7,15}$/.test(val);
          const isEmail = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(val);
          if(!isPhone && !isEmail){
            showErr(el, 'Enter a valid phone number (e.g. +91 99999 99999) or email.'); return false;
          }
          break;

        case 'f-details':
          if(!val){
            showErr(el, 'Please describe your requirement.'); return false;
          }
          if(val.length < 10){
            showErr(el, 'Please provide at least 10 characters of detail.'); return false;
          }
          if(val.length > 1000){
            showErr(el, 'Please keep your message under 1000 characters.'); return false;
          }
          break;

        default:
          break;
      }

      clearErr(el);
      return true;
    }

    /* ---------- validate entire form ---------- */
    function validateAll(){
      const fields = ['f-name','f-phone','f-details'];
      let ok = true;
      fields.forEach(id => {
        const el = getField(id);
        if(!validateField(el)) ok = false;
      });
      // Scroll to first error
      if(!ok){
        const firstErr = form.querySelector('.form-control.has-error');
        if(firstErr) firstErr.scrollIntoView({behavior:'smooth', block:'center'});
      }
      return ok;
    }

    /* ---------- form submit — build WhatsApp URL ---------- */
    form.addEventListener('submit', e => {
      e.preventDefault();
      clearAllErrors();

      if(!validateAll()) return;

      const name     = getField('f-name').value.trim();
      const company  = getField('f-company')?.value.trim() || '';
      const phone    = getField('f-phone').value.trim();
      const interest = getField('f-interest')?.value.trim() || '';
      const details  = getField('f-details').value.trim();

      // Build formatted WhatsApp message
      let msg = `Hello BOSS Enterprise,\n\n`;
      msg    += `I would like to enquire about your biomass pellets.\n\n`;
      msg    += `*Name:* ${name}\n`;
      if(company)  msg += `*Company:* ${company}\n`;
      msg    += `*Contact:* ${phone}\n`;
      if(interest) msg += `*Product Interest:* ${interest}\n`;
      msg    += `\n*Requirement Details:*\n${details}`;
      msg    += `\n\n_Message sent from BOSS Enterprise website_`;

      const waURL = `https://wa.me/${WA_NUMBER}?text=${encodeURIComponent(msg)}`;

      // Button feedback
      if(btn){
        btn.disabled = true;
        if(btnLabel) btnLabel.textContent = 'Opening WhatsApp...';
      }

      setTimeout(() => {
        window.open(waURL, '_blank', 'noopener,noreferrer');
        if(btn){
          btn.disabled = false;
          if(btnLabel) btnLabel.textContent = 'Discuss Your Requirements on WhatsApp';
        }
        form.reset();
        clearAllErrors();
      }, 350);
    });

    /* ---------- char counter for details textarea ---------- */
    const detailsEl = getField('f-details');
    if(detailsEl){
      // Create counter element
      const counter = document.createElement('div');
      counter.className = 'char-counter';
      counter.textContent = '0 / 1000';
      detailsEl.closest('.form-group')?.appendChild(counter);

      detailsEl.addEventListener('input', () => {
        const len = detailsEl.value.length;
        counter.textContent = `${len} / 1000`;
        counter.style.color = len > 900 ? '#dc2626' : 'var(--text-muted)';
      });
    }

  } /* end contact form */

})();

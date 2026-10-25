<?php
define('BOSS_ENTERPRISE',true);
require_once __DIR__.'/includes/config.php';
$page_title='Contact';
$page_desc ='Discuss your biomass pellet requirements with BOSS Enterprise. Send us a WhatsApp message — we respond quickly.';
require_once __DIR__.'/includes/header.php';
?>

<section class="page-intro">
  <div class="container">
    <span class="section-label">CONTACT</span>
    <h1>Discuss Your<br>Requirements</h1>
    <p>Call, message or send an enquiry — we respond quickly with details on availability, specifications and pricing.</p>
  </div>
</section>

<section class="contact-page">
  <div class="container contact-grid">

    <!-- Left: info cards -->
    <div>
      <div class="contact-info-cards">

        <div class="contact-info-card fade-up">
          <div class="contact-icon">
            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8a19.79 19.79 0 01-3.07-8.68A2 2 0 012 1h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 8.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
          </div>
          <div>
            <div class="contact-card-label">PHONE</div>
            <div class="contact-card-value"><a href="tel:<?= h(COMPANY_PHONE) ?>"><?= h(COMPANY_PHONE) ?></a></div>
          </div>
        </div>

        <div class="contact-info-card fade-up">
          <div class="contact-icon">
            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div>
            <div class="contact-card-label">BUSINESS EMAIL</div>
            <div class="contact-card-value"><a href="mailto:<?= h(COMPANY_EMAIL) ?>"><?= h(COMPANY_EMAIL) ?></a></div>
          </div>
        </div>

        <div class="contact-info-card fade-up">
          <div class="contact-icon">
            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <div class="contact-card-label">ADDRESS</div>
            <div class="contact-card-value"><?= h(COMPANY_ADDRESS) ?></div>
          </div>
        </div>

      </div>

      <!-- WhatsApp direct link card -->
      <a href="https://wa.me/<?= h(COMPANY_WHATSAPP) ?>" class="contact-whatsapp-card fade-up" target="_blank" rel="noopener">
        <div class="wa-left">
          <div class="wa-icon">
            <svg viewBox="0 0 24 24" fill="#fff"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          </div>
          <div>
            <span class="wa-label">WHATSAPP</span>
            <span class="wa-text">Chat with our team</span>
          </div>
        </div>
        <span class="wa-arrow">→</span>
      </a>

    </div>

    <!-- Right: WhatsApp form -->
    <div class="contact-form-box fade-up">

      <div class="wa-form-header">
        <div class="wa-form-icon">
          <svg viewBox="0 0 24 24" fill="#fff" width="28" height="28"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <div>
          <h2>Send an Enquiry</h2>
          <p class="form-sub">Fill this in and we'll open WhatsApp with your message ready to send.</p>
        </div>
      </div>

      <form id="contact-form" novalidate data-wa="<?= h(COMPANY_WHATSAPP) ?>">

        <div class="form-row">
          <div class="form-group">
            <input type="text" id="f-name" name="name" class="form-control"
                   placeholder="Your name *" required autocomplete="name">
            <div class="field-error"></div>
          </div>
          <div class="form-group">
            <input type="text" id="f-company" name="company" class="form-control"
                   placeholder="Company" autocomplete="organization">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <input type="text" id="f-phone" name="phone" class="form-control"
                   placeholder="Phone or email *" required autocomplete="tel">
            <div class="field-error"></div>
          </div>
          <div class="form-group">
            <select id="f-interest" name="interest" class="form-control">
              <option value="" disabled selected>Product interest</option>
              <option>Biomass Wood Pellets</option>
              <option>Industrial Biomass Pellets</option>
              <option>General Enquiry</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <textarea id="f-details" name="details" class="form-control"
                    placeholder="Quantity, application, delivery location..." required></textarea>
          <div class="field-error"></div>
        </div>

        <button type="submit" id="submit-btn" class="btn-enquire">
          <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" style="flex-shrink:0"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          <span class="btn-label">Discuss Your Requirements on WhatsApp</span>
        </button>

        <p class="prefer-email">Prefer email?
          <a href="mailto:<?= h(COMPANY_EMAIL) ?>">Write to us directly.</a>
        </p>

      </form>
    </div>

  </div>
</section>


<?php require_once __DIR__.'/includes/footer.php'; ?>

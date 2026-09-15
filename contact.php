<?php include('include/header.php'); ?>
<style>
    /* ---------------------------------------------------------
          1. CONTACT INFO
    --------------------------------------------------------- */
    .contact_info_section {
        padding-block: clamp(70px, 9vw, 110px);
    }

    .contact_info_grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
    }

    .contact_info_card {
        background: rgba(243, 243, 243, 0.7);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(15, 139, 95, 0.12);
        border-radius: var(--radius-md);
        padding: 34px 28px;
        box-shadow: var(--shadow-card);
        transition: transform 0.4s var(--vg-ease), border-color 0.4s var(--vg-ease), box-shadow 0.4s var(--vg-ease);
    }

    .contact_info_card:hover {
        transform: translateY(-8px);
        border-color: var(--green-bright);
        box-shadow: 0 26px 50px -20px rgba(15, 139, 95, 0.4);
    }

    .contact_info_icon {
        width: 52px;
        height: 52px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(15, 139, 95, 0.1);
        color: var(--green-bright);
        font-size: 1.2rem;
        margin-bottom: 20px;
        transition: transform 0.4s var(--vg-ease), background 0.4s var(--vg-ease);
    }

    .contact_info_card:hover .contact_info_icon {
        transform: rotate(-8deg) scale(1.08);
        background: var(--green-bright);
        color: var(--white);
    }

    .contact_info_card h3 {
        font-size: 1.15rem;
        margin-bottom: 10px;
        color: var(--black);
    }

    .contact_info_card p {
        color: var(--c-grey);
        font-size: 0.94rem;
        line-height: 1.6;
    }

/* =====================================================================
   RESPONSIVE MEDIA QUERIES
===================================================================== */

    /* ----- Large desktops / wide screens (≤1440px) ----- */
    @media (max-width: 1440px) {
        .contact_info_grid {
            gap: 20px;
        }

        .contact_info_card {
            padding: 30px 24px;
        }
    }

    /* ----- Small laptops / large tablets (≤1200px) ----- */
    @media (max-width: 1200px) {
        .contact_info_grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }
    }

    /* ----- Tablets (≤992px) ----- */
    @media (max-width: 992px) {
        .contact_info_section {
            padding-block: clamp(56px, 8vw, 90px);
        }

        .contact_info_card {
            padding: 28px 22px;
        }

        .contact_info_icon {
            width: 48px;
            height: 48px;
            font-size: 1.1rem;
            margin-bottom: 16px;
        }
    }

    /* ----- Small tablets / large phones (≤768px) ----- */
    @media (max-width: 768px) {
        .contact_info_grid {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .contact_info_card {
            text-align: center;
        }

        .contact_info_icon {
            margin-inline: auto;
        }

        .contact_info_card h3 {
            font-size: 1.05rem;
        }

        .contact_info_card p {
            font-size: .9rem;
        }
    }

    /* ----- Mobile phones (≤576px) ----- */
    @media (max-width: 576px) {
        .contact_info_section {
            padding-block: 48px;
        }

        .contact_info_card {
            padding: 24px 18px;
            border-radius: 12px;
        }

        .contact_info_icon {
            width: 44px;
            height: 44px;
            font-size: 1rem;
            border-radius: 12px;
        }
    }

    /* ----- Extra small phones (≤400px) ----- */
    @media (max-width: 400px) {
        .contact_info_card {
            padding: 20px 14px;
        }

        .contact_info_card h3 {
            font-size: 1rem;
        }

        .contact_info_card p {
            font-size: .85rem;
        }
    }

    /* ---------------------------------------------------------
          2.CONTACT FORM + MAP
    --------------------------------------------------------- */
    .contact_form_map_section {
        background: linear-gradient(10deg, rgb(145, 151, 151), #feffff);
        padding-block: clamp(80px, 10vw, 130px);
    }
    .contact_form_map_grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: clamp(40px, 6vw, 80px);
        align-items: stretch;
    }

    .contact_form_col .home_section_title {
        margin-bottom: 30px;
        max-width: none;
    }

    .contact_form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .contact_form_field {
        position: relative;
    }

    .contact_form_field_row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .contact_form_field input,
    .contact_form_field select,
    .contact_form_field textarea {
        width: 100%;
        background: rgba(255, 248, 248, 0.46);
        border: 1.5px solid rgba(255, 255, 255, 0.14);
        border-radius: var(--radius-sm);
        padding: 20px 18px 10px;
        color: var(--white);
        font-size: 0.98rem;
        transition: border-color 0.3s var(--vg-ease), background 0.3s var(--vg-ease), box-shadow 0.3s var(--vg-ease);
        resize: none;
    }

    .contact_form_field select {
        appearance: none;
        -webkit-appearance: none;
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='9' viewBox='0 0 14 9'><path d='M1 1l6 6 6-6' stroke='%2317B378' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round'/></svg>");
        background-repeat: no-repeat;
        background-position: right 18px center;
        cursor: pointer;
    }

    .contact_form_field select option {
        background: var(--black);
        color: var(--white);
    }

    .contact_form_field textarea {
        min-height: 120px;
        padding-top: 26px;
    }

    .contact_form_field label {
        position: absolute;
        left: 18px;
        top: 18px;
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.98rem;
        pointer-events: none;
        transition: top 0.25s var(--vg-ease), font-size 0.25s var(--vg-ease), color 0.25s var(--vg-ease);
    }

    .contact_form_field input:focus,
    .contact_form_field select:focus,
    .contact_form_field textarea:focus {
        outline: none;
        border-color: var(--green-bright);
        background: rgba(23, 179, 120, 0.06);
        box-shadow: 0 0 0 4px rgba(23, 179, 120, 0.14);
    }

    .contact_form_field input:focus~label,
    .contact_form_field input:not(:placeholder-shown)~label,
    .contact_form_field textarea:focus~label,
    .contact_form_field textarea:not(:placeholder-shown)~label,
    .contact_form_field select:focus~label,
    .contact_form_field select:valid~label {
        top: 7px;
        font-size: 0.7rem;
        color: var(--green-bright);
    }

    .contact_form_field input[type="date"]~label {
        top: 7px;
        font-size: 0.7rem;
        color: var(--green-bright);
    }

    .contact_form_field_error {
        display: none;
        margin-top: 6px;
        font-size: 0.78rem;
        color: #ff7a7a;
        padding-left: 4px;
    }

    .contact_form_field.is-invalid input,
    .contact_form_field.is-invalid select,
    .contact_form_field.is-invalid textarea {
        border-color: #ff7a7a;
    }

    .contact_form_field.is-invalid .contact_form_field_error {
        display: block;
    }

    .home_header_btn-hero-primary {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--c-emerald);
        color: #0b0f0f;
        font-weight: 700;
        font-size: 0.92rem;
        border: none;
        border-radius: 100px;
        padding: 15px 26px;
        cursor: pointer;
        transition: background 0.25s var(--vg-ease), transform 0.25s var(--vg-ease);
        text-decoration: none;
    }

    .home_header_btn-hero-primary:hover {
        background: var(--green-bright);
        transform: translateY(-2px);
    }

    .home_header_btn-hero-primary:focus-visible,
    .contact_form_field input:focus-visible,
    .contact_form_field select:focus-visible,
    .contact_form_field textarea:focus-visible {
        outline: 2px solid var(--green-bright);
        outline-offset: 3px;
    }

    .contact_form_submit {
        margin-top: 6px;
        align-self: flex-start;
    }

    .contact_form_success {
        display: none;
        align-items: flex-start;
        gap: 14px;
        margin-top: 10px;
        padding: 18px 20px;
        border-radius: var(--radius-sm);
        background: rgba(23, 179, 120, 0.1);
        border: 1px solid rgba(23, 179, 120, 0.35);
        color: var(--white);
    }

    .contact_form_success.is-visible {
        display: flex;
        animation: homeFadeUp 0.5s var(--vg-ease);
    }

    .contact_form_success i {
        color: var(--green-bright);
        font-size: 1.3rem;
        margin-top: 2px;
    }

    .contact_form_success p {
        color: var(--c-surface);
        font-size: 0.9rem;
        margin-top: 4px;
    }

    /* Map */
    .contact_form_map_col {
        display: flex;
    }

    .contact_form_map_frame {
        position: relative;
        width: 100%;
        border-radius: var(--radius-lg);
        overflow: hidden;
        min-height: 420px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: var(--shadow-card);
    }

    .contact_form_map_embed {
        width: 100%;
        height: 100%;
        min-height: 420px;
        border: 0;
        filter: grayscale(0.3) contrast(1.05);
    }

    .contact_form_map_marker {
        position: absolute;
        top: 50%;
        left: 50%;
        translate: -50% -100%;
        color: var(--c-emerald);
        font-size: 2rem;
        filter: drop-shadow(0 6px 10px rgba(0, 0, 0, 0.35));
    }

    .contact_form_map_marker_pulse {
        position: absolute;
        left: 50%;
        bottom: -4px;
        translate: -50% 0;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: rgba(15, 139, 95, 0.5);
        animation: homePulse 2.2s ease-out infinite;
    }

    .contact_form_map_badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: rgba(17, 17, 17, 0.85);
        color: var(--white);
        padding: 8px 16px;
        border-radius: 100px;
        font-size: 0.78rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        border: 1px solid rgba(23, 179, 120, 0.4);
    }

    .contact_form_map_directions {
        position: absolute;
        bottom: 20px;
        left: 20px;
        padding: 12px 22px;
        font-size: 0.85rem;
    }

    @media (prefers-reduced-motion: reduce) {
        .contact_form_success.is-visible {
            animation: none;
        }

        .contact_form_map_marker_pulse {
            animation: none;
        }

        .home_header_btn-hero-primary {
            transition: none;
        }
    }

    /* ---------------------------------------------------------
        MEDIA QUERIES — all breakpoints
    --------------------------------------------------------- */

    /* Large desktops / wide screens */
    @media (min-width: 1440px) {
        .container {
            width: min(1320px, 90%);
        }

        .contact_form_map_frame,
        .contact_form_map_embed {
            min-height: 480px;
        }
    }

    /* Small desktops / laptops */
    @media (max-width: 1199px) {
        .contact_form_map_grid {
            gap: clamp(32px, 5vw, 56px);
        }
    }

    /* Tablets */
    @media (max-width: 991px) {
        .contact_form_map_grid {
            grid-template-columns: 1fr;
        }

        .contact_form_map_col {
            order: -1;
        }

        .contact_form_map_frame,
        .contact_form_map_embed {
            min-height: 340px;
        }
    }

    /* Large phones / small tablets */
    @media (max-width: 767px) {
        .contact_form_map_section {
            padding-block: clamp(56px, 12vw, 90px);
        }

        .contact_form_field_row {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .home_section_title {
            margin-bottom: 20px;
        }

        .contact_form_submit {
            align-self: stretch;
        }

        .contact_form_submit.home_header_btn-hero-primary {
            width: 100%;
            justify-content: center;
        }

        .contact_form_map_directions {
            left: 16px;
            bottom: 16px;
            padding: 11px 18px;
            font-size: 0.8rem;
        }

        .contact_form_map_badge {
            top: 16px;
            left: 16px;
            padding: 7px 14px;
            font-size: 0.72rem;
        }
    }

    /* Phones */
    @media (max-width: 479px) {
        .container {
            width: 94%;
        }

        .contact_form_field input,
        .contact_form_field select,
        .contact_form_field textarea {
            padding: 18px 14px 9px;
            font-size: 0.92rem;
        }

        .contact_form_field label {
            left: 14px;
        }

        .contact_form_map_frame,
        .contact_form_map_embed {
            min-height: 260px;
        }

        .contact_form_success {
            flex-direction: column;
            gap: 8px;
            padding: 16px;
        }
    }

    /* Very small phones */
    @media (max-width: 360px) {
        .home_section_title {
            font-size: 1.5rem;
        }

        .home_header_btn-hero-primary {
            padding: 13px 20px;
            font-size: 0.86rem;
        }
    }

    /*---------------------  3.FINAL CTA ------------------------ */
    .contact_final_cta_section {
        position: relative;
        overflow: hidden;
        padding-block: clamp(90px, 12vw, 150px);
        color: var(--white);
    }

    .contact_final_cta_bg {
        position: absolute;
        inset: 0;
        background: linear-gradient(120deg, #081310 0%, #0F8B5F 55%, #081310 100%);
        background-size: 220% 220%;
        animation: homeBgPan 18s ease-in-out infinite;
    }

    .contact_final_cta_overlay {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 50% 30%, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.65) 80%);
    }

    .contact_final_line_art {
        position: absolute;
        width: 140px;
        color: rgba(255, 255, 255, 0.14);
        z-index: 1;
    }

    .contact_final_line_art--1 {
        top: 8%;
        left: 4%;
        animation: homeDriftSlow 12s ease-in-out infinite;
    }

    .contact_final_line_art--2 {
        bottom: 10%;
        right: 5%;
        width: 200px;
        animation: homeDriftSlow 14s ease-in-out infinite reverse;
    }

    .contact_final_cta_content {
        position: relative;
        z-index: 2;
        display: flex;
        justify-content: center;
    }

    .contact_final_glow_border {
        position: relative;
        max-width: 720px;
        text-align: center;
        padding: clamp(40px, 6vw, 64px);
        border-radius: var(--radius-lg);
        background: rgba(255, 255, 255, 0.06);
        backdrop-filter: blur(14px);
        border: 1px solid rgba(255, 255, 255, 0.14);
    }

    .contact_final_glow_border::before {
        content: "";
        position: absolute;
        inset: -1.5px;
        border-radius: inherit;
        padding: 1.5px;
        background: conic-gradient(from 0deg, var(--green-bright), transparent 30%, transparent 70%, var(--green-bright));
        -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        animation: homeSpin 6s linear infinite;
        z-index: -1;
    }

    .contact_final_cta_title {
        font-size: clamp(2rem, 4vw, 2.9rem);
        line-height: 1.15;
        margin: 0;
    }

    .contact_final_cta_text {
        margin-top: 18px;
        color: var(--c-surface);
        font-size: 1.05rem;
        line-height: 1.7;
        max-width: 46ch;
        margin-inline: auto;
    }
    /* ---------------------------------------------------------
        MEDIA QUERIES — all breakpoints
    --------------------------------------------------------- */

    /* Large desktops / wide screens */
    @media (min-width: 1440px) {
        .container {
            width: min(1320px, 90%);
        }

        .contact_final_glow_border {
            max-width: 800px;
        }
    }

    /* Small desktops / laptops */
    @media (max-width: 1199px) {
        .contact_final_line_art--1 {
            width: 110px;
        }

        .contact_final_line_art--2 {
            width: 160px;
        }
    }

    /* Tablets */
    @media (max-width: 991px) {
        .contact_final_glow_border {
            max-width: 600px;
        }

        .contact_final_line_art--1 {
            top: 5%;
            left: 2%;
        }

        .contact_final_line_art--2 {
            bottom: 6%;
            right: 2%;
        }
    }

    /* Large phones / small tablets */
    @media (max-width: 767px) {
        .contact_final_cta_section {
            padding-block: clamp(64px, 14vw, 100px);
        }

        .contact_final_glow_border {
            padding: clamp(32px, 8vw, 48px);
            border-radius: calc(var(--vg-radius-lg) - 6px);
        }

        .contact_final_cta_section .home_hero_btn {
            flex-direction: column;
            align-items: stretch;
            gap: 12px;
        }

        .home_header_hero-btns {
            justify-content: center;
            width: 100%;
        }

        /* decorative line art gets in the way of the card on narrow screens */
        .contact_final_line_art {
            opacity: 0.6;
            width: 90px;
        }
    }

    /* Phones */
    @media (max-width: 479px) {
        .container {
            width: 94%;
        }

        .contact_final_cta_title {
            font-size: 1.6rem;
        }

        .contact_final_cta_text {
            font-size: 0.95rem;
        }

        .contact_final_line_art--1,
        .contact_final_line_art--2 {
            display: none;
        }

        .home_header_hero-btns {
            padding: 13px 20px;
            font-size: 0.86rem;
        }
    }

    /* Very small phones */
    @media (max-width: 360px) {
        .contact_final_glow_border {
            padding: 26px 18px;
        }

        .contact_final_cta_title {
            font-size: 1.4rem;
        }
    }
</style>

<!-- ─── Contact Header ─── -->
<section class="saloon-page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(assets/img/contact/contact-header.jpeg);">
    <div class="saloon-page-header-content">
        <h4>GET IN TOUCH</h4>
        <h1>Contact Our Men’s Salon & Beauty Care Team</h1>
    </div>
</section>
<main>
    <!-- ============  1.CONTACT INFORMATION ============ -->
    <section class="contact_info_section" id="info">
        <div class="container">
            <div class="section-head pb-5 text-center contact_reveal" data-aos="fade-up">
                <p class="home_section_eyebrow"style="color: #da9a33">Reach Us</p>
                <h2 class="home_section_title">Every way to find us</h2>
                <p class="home_section_sub"></p>
            </div>
            <div class="contact_info_grid">
                <article class="contact_info_card contact_reveal" data-reveal="fade-up" data-delay="0">
                    <div class="contact_info_icon"><i class="fa-solid fa-location-dot"></i></div>
                    <h3>Visit Us</h3>
                    <p>Visual Green Men Salon &amp; Beauty Parlor</p>
                    <p>Your Address Here</p>
                </article>
                <article class="contact_info_card contact_reveal" data-reveal="fade-up" data-delay="120">
                    <div class="contact_info_icon"><i class="fa-solid fa-phone"></i></div>
                    <h3>Call Us</h3>
                    <p>+91 XXXXX XXXXX</p>
                    <p>Available during salon hours</p>
                </article>
                <article class="contact_info_card contact_reveal" data-reveal="fade-up" data-delay="240">
                    <div class="contact_info_icon"><i class="fa-solid fa-envelope"></i></div>
                    <h3>Email Us</h3>
                    <p>info@visualgreen.com</p>
                    <p>We reply as soon as possible</p>
                </article>
                <article class="contact_info_card contact_reveal" data-reveal="fade-up" data-delay="360">
                    <div class="contact_info_icon"><i class="fa-solid fa-clock"></i></div>
                    <h3>Opening Hours</h3>
                    <p>Monday &ndash; Sunday</p>
                    <p>9:00 AM &ndash; 9:00 PM</p>
                </article>
            </div>
        </div>
    </section>
    <!-- ============ 2.CONTACT FORM + MAP ============ -->
    <section class="contact_form_map_section" id="form">
        <div class="container">
            <div class="contact_form_map_grid">
                <div class="contact_form_col contact_reveal" data-reveal="fade-right">
                    <div class="section-head pb-5 text-center contact_reveal" data-aos="fade-up">
                        <p class="home_section_eyebrow"style="color: #da9a33">Send a Message</p>
                        <h2 class="home_section_title">Tell us what you need</h2>
                        <p class="home_section_sub">Fill in your details and preferred service, and our team will reach out to confirm your booking.</p>
                    </div>
                    <form class="contact_form" id="contactForm" novalidate>
                        <div class="contact_form_field">
                            <input type="text" id="fullName" name="fullName" placeholder=" " required>
                            <label for="fullName">Full Name</label>
                            <span class="contact_form_field_error">Please enter your name</span>
                        </div>
                        <div class="contact_form_field_row">
                            <div class="contact_form_field">
                                <input type="tel" id="phone" name="phone" placeholder=" " required
                                    pattern="[0-9+\-\s]{7,15}">
                                <label for="phone">Phone Number</label>
                                <span class="contact_form_field_error">Enter a valid phone number</span>
                            </div>
                            <div class="contact_form_field">
                                <input type="email" id="email" name="email" placeholder=" " required>
                                <label for="email">Email Address</label>
                                <span class="contact_form_field_error">Enter a valid email</span>
                            </div>
                        </div>
                        <div class="contact_form_field_row">
                            <div class="contact_form_field contact_form_field_select">
                                <select id="service" name="service" required>
                                    <option value="" disabled selected hidden></option>
                                    <option value="Haircut">Haircut</option>
                                    <option value="Hair Styling">Hair Styling</option>
                                    <option value="Beard Grooming">Beard Grooming</option>
                                    <option value="Facial">Facial</option>
                                    <option value="Hair Spa">Hair Spa</option>
                                    <option value="Complete Grooming">Complete Grooming</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="service">Select Service</label>
                                <span class="contact_form_field_error">Please choose a service</span>
                            </div>
                            <div class="contact_form_field">
                                <input type="date" id="prefDate" name="prefDate" placeholder=" " required>
                                <label for="prefDate">Preferred Date</label>
                                <span class="contact_form_field_error">Please choose a date</span>
                            </div>
                        </div>
                        <div class="contact_form_field">
                            <textarea id="message" name="message" rows="4" placeholder=" " required></textarea>
                            <label for="message">Message</label>
                            <span class="contact_form_field_error">Tell us a little about what you need</span>
                        </div>
                        <div class="home_header_hero-btns">
                            <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                                <span class="btn-text">Send Message</span>
                                 <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!--
                        <button type="submit" class="home_header_btn-hero-primary contact_form_submit">
                            <span class="btn-text">Send Message</span>
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        </button>--->
                        <div class="contact_form_success" id="contactFormSuccess" role="status" aria-live="polite">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <strong>Message sent</strong>
                                <p>Thanks &mdash; our team will get back to you shortly.</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contact_form_map_col contact_reveal" data-reveal="fade-left">
                    <div class="contact_form_map_frame">
                        <iframe class="contact_form_map_embed" title="Visual Green location map"
                            src="https://www.google.com/maps?q=salon&output=embed" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="contact_form_map_marker" aria-hidden="true">
                            <span class="contact_form_map_marker_pulse"></span>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact_form_map_badge">Visual Green</div>
                        <a href="https://www.google.com/maps" target="_blank" rel="noopener" class="home_header_btn-hero-primary contact_form_map_directions">
                            <i class="fa-solid fa-diamond-turn-right"></i> Get Directions
                              <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Get Directions</span>
                        </a>
                    </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============ 3.FINAL CTA / BOOKING ============ -->
    <section class="contact_final_cta_section" id="cta">
        <div class="contact_final_cta_bg" aria-hidden="true"></div>
        <div class="contact_final_cta_overlay" aria-hidden="true"></div>
        <svg class="contact_final_line_art contact_final_line_art--1" viewBox="0 0 200 200" aria-hidden="true">
            <path d="M40 20 L120 100 M120 20 L40 100" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                fill="none" />
            <circle cx="40" cy="20" r="10" stroke="currentColor" stroke-width="4" fill="none" />
            <circle cx="40" cy="100" r="10" stroke="currentColor" stroke-width="4" fill="none" />
        </svg>
        <svg class="contact_final_line_art contact_final_line_art--2" viewBox="0 0 220 60" aria-hidden="true">
            <path d="M5 30 H180 M180 30 A10 10 0 1 0 200 30 A10 10 0 1 0 180 30 Z" stroke="currentColor"
                stroke-width="3" fill="none" stroke-linecap="round" />
            <path d="M5 20 V40 M35 20 V40 M65 20 V40 M95 20 V40 M125 20 V40 M155 20 V40" stroke="currentColor"
                stroke-width="3" stroke-linecap="round" />
        </svg>
        <div class="container contact_final_cta_content">
            <div class="contact_final_glow_border contact_reveal" data-reveal="scale-in">
                <h2 class="contact_final_cta_title">Ready for your next look?</h2>
                <p class="contact_final_cta_text">Step into Visual Green and experience premium grooming, modern styling
                    and personalized service.</p>
                <div class="home_header_hero-btns">
                    <a href="#form" class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                        <span class="btn-text">Book Appointment</span>
                        <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
                    </a>              
                    <a href="https://wa.me/91XXXXXXXXXX" target="_blank" rel="noopener" class="home_header_btn-hero-primary salon-cut-btn">
                        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> <span class="btn-text">WhatsApp Us</span>
                    </a>
                   
                </div>
       <!---         <div class="home_heder_hero-btns">
                    <a href="#form" class="home_header_btn-hero-primary  salon-cut-btn">
                        <i class="fa-solid fa-calendar-check" aria-hidden="true"></i> <span class="btn-text">Book Appointment</span>
                    </a>
                    <a href="https://wa.me/91XXXXXXXXXX" target="_blank" rel="noopener" class="home_header_btn-hero-primary salon-cut-btn">
                        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> <span class="btn-text">WhatsApp Us</span>
                    </a>
                </div>---->
            </div>
        </div>
    </section>
    <!-- ============ HELP / CONTACT SECTION ============ -->
    <section class="home_contact_section py-5 px-2" id="contact">
        <div class="container">
            <div class="section-head pb-5 text-center" data-aos="fade-up">
                <p class="home_section_eyebrow"style="color: #da9a33">get in touch</p>
                <h2 class="home_section_title">Need a help? <em>Let's talk.</em></h2>
                <p class="home_section_sub pb-4">Schedule a meeting for discussion</p>
                <p class="home_section_sub">Have a question about our services, pricing or booking a slot? Our
                    team is just a call or click away and typically responds within a few hours. Reach out and
                    we'll help you find the right treatment for your needs.</p>

                <div class="home_header_hero-btns justify-content-center mt-4" data-aos="fade-up" data-aos-delay="200">

                    <a href="#contact" class="home_header_btn-hero-primary salon-cut-btn">
                        <span class="btn-text">Click Here</span>
                        <span class="scissor-line"></span>
                        <span class="cut-spark">✂</span>
                    </a>

                    <a href="#services" class="home_header_btn-hero-outline salon-cut-btn">
                        <span class="btn-text" style="color: #694f01;">Call Us Now</span>
                        <span class="scissor-line"></span>
                        <span class="cut-spark">✂</span>
                    </a>

                </div>
            </div>
        </div>
    </section>

</main>
<script>
    /* ---------- 5. Contact form validation ---------- */
    const form = document.getElementById('contactForm');
    const successBox = document.getElementById('contactFormSuccess');

    if (form) {
        const fields = Array.from(form.querySelectorAll('.contact_form_field'));

        const validateField = (fieldEl) => {
            const input = fieldEl.querySelector('input, select, textarea');
            if (!input) return true;
            let valid = input.checkValidity();

            // Extra light phone check: digits length
            if (input.id === 'phone' && input.value.trim()) {
                const digits = input.value.replace(/\D/g, '');
                valid = valid && digits.length >= 7 && digits.length <= 15;
            }

            fieldEl.classList.toggle('is-invalid', !valid);
            return valid;
        };

        fields.forEach(fieldEl => {
            const input = fieldEl.querySelector('input, select, textarea');
            if (!input) return;
            input.addEventListener('blur', () => validateField(fieldEl));
            input.addEventListener('input', () => {
                if (fieldEl.classList.contains('is-invalid')) validateField(fieldEl);
            });
        });

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            let allValid = true;
            fields.forEach(fieldEl => {
                const ok = validateField(fieldEl);
                if (!ok) allValid = false;
            });

            if (!allValid) {
                const firstInvalid = form.querySelector('.is-invalid input, .is-invalid select, .is-invalid textarea');
                if (firstInvalid) firstInvalid.focus();
                if (successBox) successBox.classList.remove('is-visible');
                return;
            }

            // Simulate successful submission
            if (successBox) successBox.classList.add('is-visible');
            form.reset();
            fields.forEach(fieldEl => fieldEl.classList.remove('is-invalid'));

            window.setTimeout(() => {
                if (successBox) {
                    successBox.scrollIntoView({
                        behavior: prefersReducedMotion ? 'auto' : 'smooth',
                        block: 'nearest'
                    });
                }
            }, 50);
        });
    }
</script>


<?php include('include/footer.php'); ?>
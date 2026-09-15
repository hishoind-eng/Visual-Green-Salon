<?php include('include/header.php'); ?>
<style>
    /* =============================================================
                             1.DATE & TIME
   ============================================================= */
    .booking_section {
        margin-top: 20px;
        background-color: whitesmoke;
    }

    .booking_datetime_grid {
        display: grid;
        align-items: center;
        justify-content: space-around;
    }

    .booking_datetime_col_title {
        font-size: 1.2rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 0 22px;
        color: var(--black);
    }

    .booking_datetime_col_title i {
        color: var(--c-emerald);
    }

    .booking_datetime_scroller {
        display: flex;
        gap: 14px;
        overflow-x: auto;
        padding-bottom: 8px;
    }

    .booking_datetime_card {
        flex: 0 0 auto;
        width: 84px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
        padding: 18px 0 16px;
        border-radius: var(--radius-md);
        background: var(--white);
        border: 1px solid var(--black);
        cursor: pointer;
        box-shadow: var(--shadow-card);
        transition: transform .3s var(--vg-ease), background .3s var(--vg-ease), color .3s var(--vg-ease), box-shadow .3s var(--vg-ease);
        position: relative;
    }

    .booking_datetime_card:hover {
        transform: translateY(-4px);
    }

    .booking_date_day {
        font-size: 0.72rem;
        font-weight: 700;
        color: #8a8f89;
        letter-spacing: .05em;
    }

    .booking_date_num {
        font-size: 1.7rem;
        font-weight: 600;
        color: var(--black);
    }

    .booking_date_month {
        font-size: 0.72rem;
        font-weight: 700;
        color: #8a8f89;
        letter-spacing: .05em;
    }

    .booking_date_check {
        position: absolute;
        top: -8px;
        right: -8px;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: var(--white);
        color: var(--c-emerald);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.7rem;
        opacity: 0;
        transform: scale(.5);
        transition: opacity .3s var(--vg-ease), transform .3s var(--vg-ease);
        box-shadow: 0 4px 10px rgba(0, 0, 0, .15);
    }

    .booking_datetime_card.is-selected {
        background: var(--c-emerald);
        border-color: var(--c-emerald);
        transform: scale(1.04);
    }

    .booking_datetime_card.is-selected .booking_date_day,
    .booking_datetime_card.is-selected .booking_date_num,
    .booking_datetime_card.is-selected .booking_date_month {
        color: var(--white);
    }

    .booking_datetime_card.is-selected .booking_date_check {
        opacity: 1;
        transform: scale(1);
    }

    .booking_time_grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
    }

    .booking_datetime_slot {
        padding: 13px 10px;
        border-radius: 100px;
        border: 1px solid var(--black);
        background: var(--white);
        font-weight: 700;
        font-size: 0.88rem;
        color: var(--black);
        cursor: pointer;
        transition: transform .25s var(--vg-ease), background .25s var(--vg-ease), color .25s var(--vg-ease), box-shadow .25s var(--vg-ease), border-color .25s var(--vg-ease);
    }

    .booking_datetime_slot:hover:not(.is-unavailable) {
        transform: translateY(-3px);
        border-color: var(--c-emerald);
        box-shadow: 0 10px 20px -12px rgba(15, 139, 95, 0.45);
    }

    .booking_datetime_slot.is-selected {
        background: var(--c-emerald);
        border-color: var(--c-emerald);
        color: var(--white);
        box-shadow: 0 0 0 6px var(--c-emerald-bright);
    }

    .booking_datetime_slot.is-unavailable {
        opacity: 0.42;
        text-decoration: line-through;
        cursor: not-allowed;
        color: #8a8f89;
    }

    .booking_validation_msg {
        max-width: 620px;
        margin: 30px auto 0;
        text-align: center;
        color: #B3261E;
        font-weight: 700;
        font-size: 0.92rem;
        background: #FBE9E7;
        border-radius: var(--radius-sm);
        padding: 0;
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition: all .35s var(--vg-ease);
    }

    .booking_validation_msg.is-shown {
        padding: 14px 20px;
        max-height: 80px;
        opacity: 1;
        margin-top: 30px;
    }

    .booking_step_actions {
        display: flex;
        justify-content: center;
        margin-top: 46px;
    }

    /* =====================================================================
   RESPONSIVE MEDIA QUERIES
===================================================================== */

    /* ----- Large desktops / wide screens (≤1440px) ----- */
    @media (max-width: 1440px) {
        .booking_datetime_grid {
            gap: 38px;
        }
    }

    /* ----- Small laptops / large tablets (≤1200px) ----- */
    @media (max-width: 1200px) {
        .booking_datetime_grid {
            gap: 30px;
        }

        .booking_datetime_card {
            width: 74px;
            padding: 15px 0 13px;
        }

        .booking_time_grid {
            gap: 10px;
        }
    }

    /* ----- Tablets (≤992px) ----- */
    @media (max-width: 992px) {
        .booking_datetime_grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .booking_time_grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    /* ----- Small tablets / large phones (≤768px) ----- */
    @media (max-width: 768px) {
        .booking_datetime_col_title {
            font-size: 1.05rem;
            margin-bottom: 16px;
        }

        .booking_datetime_card {
            width: 68px;
            padding: 14px 0 12px;
        }

        .booking_date_num {
            font-size: 1.4rem;
        }

        .booking_time_grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .booking_datetime_slot {
            padding: 11px 8px;
            font-size: 0.82rem;
        }

        .booking_step_actions {
            margin-top: 34px;
        }
    }

    /* ----- Mobile phones (≤576px) ----- */
    @media (max-width: 576px) {
        .booking_datetime_grid {
            gap: 30px;
        }

        .booking_datetime_scroller {
            gap: 10px;
        }

        .booking_datetime_card {
            width: 62px;
            padding: 12px 0 10px;
        }

        .booking_date_day,
        .booking_date_month {
            font-size: 0.64rem;
        }

        .booking_date_num {
            font-size: 1.2rem;
        }

        .booking_time_grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
        }

        .booking_datetime_slot {
            padding: 10px 6px;
            font-size: 0.78rem;
        }

        .booking_validation_msg {
            font-size: 0.84rem;
        }
    }

    /* ----- Extra small phones (≤400px) ----- */
    @media (max-width: 400px) {
        .booking_datetime_card {
            width: 56px;
        }

        .booking_date_num {
            font-size: 1.05rem;
        }

        .booking_time_grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 6px;
        }

        .booking_datetime_slot {
            padding: 9px 4px;
            font-size: 0.72rem;
        }

        .booking_step_actions {
            margin-top: 26px;
        }
    }

    /* =============================================================
     2. CUSTOMER DETAILS + BOOKING SUMMARY
============================================================= */
    .booking_form_section {
        margin-top: 30px;
        
    }

    .booking_details_grid {
        display: grid;
        grid-template-columns: 0.25fr 0.40fr;
        gap: 40px;
        align-items: center;
        justify-content: space-around;
    }

    .booking_form_field {
        position: relative;
        margin-bottom: 26px;
    }

    .booking_form_field input,
    .booking_form_field select,
    .booking_form_field textarea {
        width: 100%;
        border: 1.5px solid var(--black);
        border-radius: var(--radius-sm);
        background: var(--white);
        padding: 20px 18px 8px;
        font-size: 1rem;
        font-family: inherit;
        color: var(--black);
        transition: border-color .3s var(--vg-ease), box-shadow .3s var(--vg-ease);
        resize: vertical;
    }

    .booking_form_field textarea {
        padding-top: 22px;
    }

    .booking_form_field input:focus,
    .booking_form_field select:focus,
    .booking_form_field textarea:focus {
        outline: none;
        border-color: var(--c-emerald);
        box-shadow: 0 0 0 4px var(--c-emerald-bright);
    }

    .booking_form_field label {
        position: absolute;
        left: 18px;
        top: 18px;
        font-size: 1rem;
        color: #8a8f89;
        pointer-events: none;
        transition: all .22s var(--vg-ease);
        background: var(--white);
        padding: 0 4px;
    }

    .booking_form_field input:focus+label,
    .booking_form_field input:not(:placeholder-shown)+label,
    .booking_form_field textarea:focus+label,
    .booking_form_field textarea:not(:placeholder-shown)+label,
    .booking_form_field_select label {
        top: -9px;
        left: 14px;
        font-size: 0.72rem;
        font-weight: 700;
        color: var(--c-emerald-deep);
    }

    .booking_form_field_select select {
        padding-top: 14px;
        padding-bottom: 14px;
        cursor: pointer;
    }

    .booking_form_field_select label {
        top: -9px;
        left: 14px;
        font-size: 0.72rem;
        font-weight: 700;
        color: var(--c-emerald-deep);
    }

    .booking_form_field.has-error input,
    .booking_form_field.has-error select,
    .booking_form_field.has-error textarea {
        border-color: #B3261E;
    }

    .booking_form_field_error {
        display: none;
        color: #B3261E;
        font-size: 0.8rem;
        font-weight: 600;
        margin-top: 6px;
        padding-left: 4px;
    }

    .booking_form_field.has-error .booking_form_field_error {
        display: block;
    }

    #err-terms {
        display: none;
        margin-top: 8px;
    }

    #err-terms.is-shown {
        display: block;
    }

    .booking_form_checkbox {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        cursor: pointer;
        margin-top: 6px;
    }

    .booking_form_checkbox input {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    .booking_form_checkbox_box {
        width: 22px;
        height: 22px;
        flex: 0 0 auto;
        border-radius: 6px;
        border: 1.5px solid var(--black);
        background: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        color: transparent;
        font-size: 0.75rem;
        transition: all .25s var(--vg-ease);
        margin-top: 1px;
    }

    .booking_form_checkbox input:checked+.booking_form_checkbox_box {
        background: var(--c-emerald);
        border-color: var(--c-emerald);
        color: #fff;
    }

    .booking_form_checkbox_text {
        font-size: 0.92rem;
        color: #4b4f4b;
    }

    /* Summary */

    .booking_form_summary_card {
        background: var(--black);
        border-radius: var(--radius-lg);
        padding: 38px 34px;
        color: var(--white);
        position: sticky;
        top: 110px;
        box-shadow: var(--shadow-card);
        margin-bottom: 30px;
    }

    .booking_form_summary_title {
        font-family: var(--font-head);
        font-size: 1.4rem;
        font-weight: 600;
        margin: 0 0 26px;
    }

    .booking_form_summary_list {
        margin: 0 0 26px;
    }

    .booking_form_summary_row {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        padding: 14px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
    }

    .booking_form_summary_row dt {
        color: rgba(255, 255, 255, 0.55);
        font-size: 0.88rem;
        font-weight: 600;
    }

    .booking_form_summary_row dd {
        margin: 0;
        font-weight: 700;
        text-align: right;
    }

    .booking_form_summary_total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 0 26px;
        font-family: var(--font-head);
    }

    .booking_form_summary_total span:first-child {
        color: rgba(255, 255, 255, 0.6);
        font-size: 1rem;
    }

    .booking_form_summary_total span:last-child {
        font-size: 1.9rem;
        font-weight: 600;
        color: var(--c-emerald);
    }

    .home_hero_confirm_btn {
        width: 100%;
    }

    /* =============================================================
   SUCCESS POPUP
   ============================================================= */

    .booking_modal_backdrop {
        position: fixed;
        inset: 0;
        background: rgba(10, 12, 10, 0.55);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2000;
        opacity: 0;
        pointer-events: none;
        transition: opacity .35s var(--vg-ease);
        padding: 20px;
    }

    .booking_modal_backdrop.is-open {
        opacity: 1;
        pointer-events: auto;
    }

    .booking_modal {
        background: var(--white);
        border-radius: var(--radius-lg);
        max-width: 460px;
        width: 100%;
        padding: 44px 36px 36px;
        text-align: center;
        box-shadow: var(--shadow-card);
        transform: scale(.85);
        transition: transform .4s var(--vg-ease);
    }

    .booking_modal_backdrop.is-open .booking_modal {
        transform: scale(1);
    }

    .booking_modal_check {
        width: 74px;
        height: 74px;
        border-radius: 50%;
        background: var(--c-emerald-bright);
        color: var(--c-emerald);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 22px;
        animation: bookingCheckPop .5s var(--vg-ease) .15s both;
    }

    @keyframes bookingCheckPop {
        0% {
            transform: scale(0);
        }

        70% {
            transform: scale(1.12);
        }

        100% {
            transform: scale(1);
        }
    }

    .booking_modal_title {
        font-family: var(--font-head);
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0 0 10px;
    }

    .booking_modal_text {
        color: #5b5f5a;
        margin: 0 0 26px;
        font-size: 0.96rem;
    }

    .booking_modal_summary {
        text-align: left;
        background: var(--white);
        border-radius: var(--radius-md);
        padding: 18px 20px;
        margin: 0 0 28px;
    }

    .booking_modal_summary div {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid var(--black);
        font-size: 0.9rem;
    }

    .booking_modal_summary div:last-child {
        border-bottom: none;
    }

    .booking_modal_summary dt {
        color: #7a7f7a;
        font-weight: 600;
    }

    .booking_modal_summary dd {
        margin: 0;
        font-weight: 700;
    }

    .booking_modal_actions {
        display: flex;
        gap: 12px;
    }

    .booking_modal_actions .home_hero_btns {
        flex: 1;
    }

    /* =============================================================
   RESPONSIVE — ALL SCREEN SIZES
============================================================= */
    /* Large desktop / wide screens */
    @media (min-width: 1440px) {
        .booking_details_grid {
            gap: 72px;
        }

        .booking_form_summary_card {
            padding: 44px 40px;
        }
    }

    /* Small laptops / large tablets */
    @media (max-width: 1024px) {
        .booking_details_grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .booking_form_summary_card {
            position: static;
            top: auto;
        }
    }

    /* Tablets */
    @media (max-width: 768px) {
        .booking_form_summary_card {
            padding: 30px 24px;
        }

        .booking_form_summary_title {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }

        .booking_modal {
            max-width: 90%;
            padding: 36px 26px 28px;
        }

        .booking_modal_actions {
            flex-direction: column;
        }
    }

    /* Mobile landscape */
    @media (max-width: 600px) {

        .booking_form_field input,
        .booking_form_field select,
        .booking_form_field textarea {
            padding: 18px 14px 6px;
            font-size: 0.95rem;
        }

        .booking_form_summary_row {
            padding: 12px 0;
        }

        .booking_form_summary_total span:last-child {
            font-size: 1.6rem;
        }
    }

    /* Mobile portrait / small phones */
    @media (max-width: 480px) {
        .booking_form_summary_card {
            padding: 26px 20px;
            border-radius: var(--radius-md, 16px);
        }

        .booking_form_checkbox_text {
            font-size: 0.86rem;
        }

        .booking_modal {
            padding: 30px 18px 22px;
        }

        .booking_modal_check {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
            margin-bottom: 16px;
        }

        .booking_modal_title {
            font-size: 1.2rem;
        }

        .booking_modal_text {
            font-size: 0.88rem;
            margin-bottom: 20px;
        }

        .booking_modal_summary {
            padding: 14px 16px;
        }
    }

    /* Very small phones */
    @media (max-width: 360px) {
        .booking_form_field_error {
            font-size: 0.72rem;
        }

        .booking_form_summary_total span:last-child {
            font-size: 1.4rem;
        }
    }
</style>
<!-- ─── Booking Header ─── -->
<section class="saloon-page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(assets/img/booking/booking-header.jpeg);">
    <div class="saloon-page-header-content">
        <h4>BOOK YOUR APPOINTMENT</h4>
        <h1>Reserve Your Time for Premium Grooming & Care</h1>
    </div>
</section>
<main>
    <!-- ============================================= 
                 1.CHOOSE DATE & TIME 
     ============================================= -->
    <section class="booking_section booking_section_alt" id="booking-datetime">
        <div class="booking-container">
            <div class="section-head pb-5 text-center booking-reveal" data-aos="fade-up">
                <p class="home_section_eyebrow" style="color: #da9a33">Time For A Fresh Look</p>
                <h2 class="home_section_title">Choose Your Date &amp; Time</h2>
                <p class="home_section_sub">Pick a convenient time for your appointment.</p>
            </div>

            <div class="booking_datetime_grid">
                <div class="booking_datetime_col booking-reveal" data-reveal="left">
                    <h3 class="booking_datetime_col_title"><i class="bi bi-calendar3"></i> Select Date</h3>
                    <div class="booking_datetime_scroller" id="dateScroller" role="radiogroup" aria-label="Choose a date">
                        <button class="booking_datetime_card" role="radio" aria-checked="false" data-date="2026-09-02">
                            <span class="booking_date_day">MON</span>
                            <span class="booking_date_num">02</span>
                            <span class="booking_date_month">SEP</span>
                            <span class="booking_date_check"><i class="bi bi-check-lg"></i></span>
                        </button>
                        <button class="booking_datetime_card" role="radio" aria-checked="false" data-date="2026-09-03">
                            <span class="booking_date_day">TUE</span>
                            <span class="booking_date_num">03</span>
                            <span class="booking_date_month">SEP</span>
                            <span class="booking_date_check"><i class="bi bi-check-lg"></i></span>
                        </button>
                        <button class="booking_datetime_card" role="radio" aria-checked="false" data-date="2026-09-04">
                            <span class="booking_date_day">WED</span>
                            <span class="booking_date_num">04</span>
                            <span class="booking_date_month">SEP</span>
                            <span class="booking_date_check"><i class="bi bi-check-lg"></i></span>
                        </button>
                        <button class="booking_datetime_card" role="radio" aria-checked="false" data-date="2026-09-05">
                            <span class="booking_date_day">THU</span>
                            <span class="booking_date_num">05</span>
                            <span class="booking_date_month">SEP</span>
                            <span class="booking_date_check"><i class="bi bi-check-lg"></i></span>
                        </button>
                        <button class="booking_datetime_card" role="radio" aria-checked="false" data-date="2026-09-06">
                            <span class="booking_date_day">FRI</span>
                            <span class="booking_date_num">06</span>
                            <span class="booking_date_month">SEP</span>
                            <span class="booking_date_check"><i class="bi bi-check-lg"></i></span>
                        </button>
                        <button class="booking_datetime_card" role="radio" aria-checked="false" data-date="2026-09-07">
                            <span class="booking_date_day">SAT</span>
                            <span class="booking_date_num">07</span>
                            <span class="booking_date_month">SEP</span>
                            <span class="booking_date_check"><i class="bi bi-check-lg"></i></span>
                        </button>
                    </div>
                </div>

                <div class="booking_datetime_col booking-reveal" data-reveal="right">
                    <h3 class="booking_datetime_col_title"><i class="bi bi-clock"></i> Available Time</h3>
                    <div class="booking_time_grid" id="timeGrid" role="radiogroup" aria-label="Choose a time slot">
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="09:00 AM">09:00
                            AM</button>
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="09:30 AM">09:30
                            AM</button>
                        <button class="booking_datetime_slot is-unavailable" role="radio" aria-checked="false"
                            aria-disabled="true" data-time="10:00 AM" disabled>10:00 AM</button>
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="10:30 AM">10:30
                            AM</button>
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="11:00 AM">11:00
                            AM</button>
                        <button class="booking_datetime_slot is-unavailable" role="radio" aria-checked="false"
                            aria-disabled="true" data-time="11:30 AM" disabled>11:30 AM</button>
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="12:00 PM">12:00
                            PM</button>
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="02:00 PM">02:00
                            PM</button>
                        <button class="booking_datetime_slot is-unavailable" role="radio" aria-checked="false"
                            aria-disabled="true" data-time="02:30 PM" disabled>02:30 PM</button>
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="03:00 PM">03:00
                            PM</button>
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="04:00 PM">04:00
                            PM</button>
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="05:00 PM">05:00
                            PM</button>
                        <button class="booking_datetime_slot is-unavailable" role="radio" aria-checked="false"
                            aria-disabled="true" data-time="06:00 PM" disabled>06:00 PM</button>
                        <button class="booking_datetime_slot" role="radio" aria-checked="false" data-time="07:00 PM">07:00
                            PM</button>
                    </div>
                </div>
            </div>
            <div class="booking_validation_msg" id="step3Validation" role="alert" aria-live="assertive"></div>
            <div class="home_header_hero-btns">
                <a href="#form" class="home_header_btn-hero-primary salon-cut-btn" id="continueBtn" data-reveal="up">
                    <span class="btn-text">Continue</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>
    <!-- =============================================
                2. CUSTOMER DETAILS + BOOKING SUMMARY
     ============================================= -->
    <section class="booking_form_section" id="booking_details">
        <div class="booking_container">
            <div class="section-head pb-5 text-center booking-reveal" data-aos="fade-up">
                <p class="home_section_eyebrow" style="color: #da9a33">Book Your Experience</p>
                <h2 class="home_section_title">Your Details</h2>
                <p class="home_section_sub">Just a few details and your chair is reserved.</p>
            </div>
            <div class="booking_details_grid">
                <div class="booking_form_col booking-reveal" data-reveal="left">
                    <form id="bookingForm" novalidate>

                        <div class="booking_form_field">
                            <input type="text" id="fullName" name="fullName" placeholder=" " autocomplete="name"
                                required>
                            <label for="fullName">Full Name</label>
                            <span class="booking_form_field_error" id="err-fullName">Please enter your name.</span>
                        </div>

                        <div class="booking_form_field">
                            <input type="tel" id="mobile" name="mobile" placeholder=" " autocomplete="tel"
                                inputmode="numeric" maxlength="10" required>
                            <label for="mobile">Mobile Number</label>
                            <span class="booking_form_field_error" id="err-mobile">Enter a valid 10-digit mobile number.</span>
                        </div>

                        <div class="booking_form_field">
                            <input type="email" id="email" name="email" placeholder=" " autocomplete="email" required>
                            <label for="email">Email Address</label>
                            <span class="booking_form_field_error" id="err-email">Enter a valid email address.</span>
                        </div>

                        <div class="booking_form_field booking_form_field_select">
                            <select id="gender" name="gender" required>
                                <option value="" disabled selected hidden> </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                            </select>
                            <label for="gender">Select Gender</label>
                            <span class="booking_form_field_error" id="err-gender">Please select a gender.</span>
                        </div>
                        <div class="booking_form_field">
                            <textarea id="specialRequest" name="specialRequest" placeholder=" " rows="3"></textarea>
                            <label for="specialRequest">Special Request (optional)</label>
                        </div>
                        <label class="booking_form_checkbox">
                            <input type="checkbox" id="terms" name="terms" required>
                            <span class="booking_form_checkbox_box"><i class="bi bi-check-lg"></i></span>
                            <span class="booking_form_checkbox_text">I agree to the salon booking terms.</span>
                        </label>
                        <span class="booking_form_field_error" id="err-terms">Please accept the booking terms to continue.</span>

                    </form>
                </div>
                <div class="booking_form_summary_col booking-reveal" data-reveal="right">
                    <div class="booking_form_summary_card">
                        <h3 class="booking_form_summary_title">Booking Summary</h3>
                        <dl class="booking_form_summary_list">
                            <div class="booking_form_summary_row">
                                <dt>Service</dt>
                                <dd id="sumService">Not selected</dd>
                            </div>
                            <div class="booking_form_summary_row">
                                <dt>Date</dt>
                                <dd id="sumDate">Not selected</dd>
                            </div>
                            <div class="booking_form_summary_row">
                                <dt>Time</dt>
                                <dd id="sumTime">Not selected</dd>
                            </div>
                            <div class="booking_form_summary_row">
                                <dt>Customer</dt>
                                <dd id="sumCustomer">—</dd>
                            </div>
                        </dl>
                        <div class="booking_form_summary_total">
                            <span>Total</span>
                            <span id="sumPrice">₹0</span>
                        </div>
                        <div class="home_header_hero-btns">
                            <a href="#form" class="home_header_btn-hero-primary salon-cut-btn" href="#book" aria-hidden="true">
                                <span class="btn-text">Confirm Booking</span>
                            </a>
                        </div>
                        <!--    <button type="submit" form="bookingForm"
                            class="home_hero_btns home_hero_btn_primary home_hero_btn_lg home_hero_btn_shine home_hero_confirm_btn" id="confirmBtn">
                            <span class="home_hero_btn_label">Confirm Booking</span>
                            <span class="home_hero_btn_spinner" aria-hidden="true"></span>
                        </button>--->
                    </div>
                </div>

            </div>
        </div>


        <!-- Success Popup -->
        <div class="booking_modal_backdrop" id="successBackdrop">
            <div class="booking_modal" role="dialog" aria-modal="true" aria-labelledby="successTitle">
                <div class="booking_modal_check">
                    <i class="bi bi-check-lg"></i>
                </div>
                <h3 class="booking_modal_title" id="successTitle">Appointment Confirmed!</h3>
                <p class="booking_modal_text">Your VGS salon appointment has been successfully reserved.</p>

                <dl class="booking_modal_summary">
                    <div>
                        <dt>Booking ID</dt>
                        <dd id="popBookingId">—</dd>
                    </div>
                    <div>
                        <dt>Service</dt>
                        <dd id="popService">—</dd>
                    </div>
                    <div>
                        <dt>Date</dt>
                        <dd id="popDate">—</dd>
                    </div>
                    <div>
                        <dt>Time</dt>
                        <dd id="popTime">—</dd>
                    </div>
                    <div>
                        <dt>Customer</dt>
                        <dd id="popCustomer">—</dd>
                    </div>
                </dl>
                <div class="booking_modal_actions">
                    <button class="home_hero_btns home_hero_btn_outline" id="addToCalendarBtn"><i class="bi bi-calendar-plus"></i> Add to
                        Calendar</button>
                    <button class="home_hero_btns home_hero_btn_primary" id="backToHomeBtn">Back to Home</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ HELP / CONTACT SECTION ============ -->
    <section class="home_contact_section py-5 px-2" id="contact">
        <div class="container">
            <div class="section-head pb-5 text-center" data-aos="fade-up">
                <p class="home_section_eyebrow" style="color: #da9a33">get in touch</p>
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
    /* =========================================================
               DATE SELECTION
               ========================================================= */
    const dateCards = document.querySelectorAll(".booking_datetime_card");

    dateCards.forEach((card) => {
        card.addEventListener("click", () => {
            dateCards.forEach((c) => {
                c.classList.remove("is-selected");
                c.setAttribute("aria-checked", "false");
            });
            card.classList.add("is-selected");
            card.setAttribute("aria-checked", "true");

            const day = card.querySelector(".booking_date_day").textContent;
            const num = card.querySelector(".booking_date_num").textContent;
            const month = card.querySelector(".booking_date_month").textContent;

            state.date = {
                label: `${day} ${num} ${month}`,
                iso: card.dataset.date
            };
            updateSummary();
        });
    });

    /* =========================================================
       TIME SELECTION
    ========================================================= */
    const timeSlots = document.querySelectorAll(".booking_datetime_slot");

    timeSlots.forEach((slot) => {
        if (slot.classList.contains("is-unavailable")) return;
        slot.addEventListener("click", () => {
            timeSlots.forEach((s) => {
                s.classList.remove("is-selected");
                s.setAttribute("aria-checked", "false");
            });
            slot.classList.add("is-selected");
            slot.setAttribute("aria-checked", "true");

            state.time = slot.dataset.time;
            updateSummary();
        });
    });

    /* =========================================================
       STEP 3 -> CONTINUE VALIDATION
     ========================================================= */
    const continueBtn = document.getElementById("continueBtn");
    const step3Validation = document.getElementById("step3Validation");

    continueBtn.addEventListener("click", () => {
        const missing = [];
        if (!state.service) missing.push("a service");
        if (!state.date) missing.push("a date");
        if (!state.time) missing.push("a time slot");

        if (missing.length) {
            step3Validation.textContent = `Please select ${missing.join(", ")} before continuing.`;
            step3Validation.classList.add("is-shown");
            window.setTimeout(() => step3Validation.classList.remove("is-shown"), 3800);

            const target = !state.service ? "booking-service" : "booking-datetime";
            document.getElementById(target).scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
            return;
        }

        step3Validation.classList.remove("is-shown");
        document.getElementById("booking-details").scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    });
    /* =========================================================
   BOOKING SUMMARY
   ========================================================= */
    const sumService = document.getElementById("sumService");
    const sumDate = document.getElementById("sumDate");
    const sumTime = document.getElementById("sumTime");
    const sumCustomer = document.getElementById("sumCustomer");
    const sumPrice = document.getElementById("sumPrice");
    const fullNameInput = document.getElementById("fullName");

    function updateSummary() {
        sumService.textContent = state.service || "Not selected";
        sumDate.textContent = state.date ? state.date.label : "Not selected";
        sumTime.textContent = state.time || "Not selected";
        sumCustomer.textContent = fullNameInput.value.trim() || "—";
        sumPrice.textContent = `₹${state.price ? state.price.toLocaleString("en-IN") : 0}`;
    }

    fullNameInput.addEventListener("input", updateSummary);

    /* =========================================================
       FORM VALIDATION + SUBMISSION
    ========================================================= */
    const form = document.getElementById("bookingForm");
    const mobileInput = document.getElementById("mobile");
    const emailInput = document.getElementById("email");
    const genderInput = document.getElementById("gender");
    const termsInput = document.getElementById("terms");
    const errTerms = document.getElementById("err-terms");
    const confirmBtn = document.getElementById("confirmBtn");

    function setFieldError(input, hasError) {
        // Matches the "booking_form_field" wrapper class used in the HTML,
        // which the CSS uses to reveal the matching ".booking_form_field_error" span.
        const field = input.closest(".booking_form_field");
        if (field) field.classList.toggle("has-error", hasError);
    }

    function validateMobile(value) {
        return /^[6-9]\d{9}$/.test(value.trim());
    }

    function validateEmail(value) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value.trim());
    }

    mobileInput.addEventListener("input", () => {
        mobileInput.value = mobileInput.value.replace(/\D/g, "").slice(0, 10);
    });

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        let valid = true;

        // Step-level guard: booking flow must be complete
        if (!state.service || !state.date || !state.time) {
            step3Validation.textContent = "Please complete the service, date and time selection first.";
            step3Validation.classList.add("is-shown");
            window.setTimeout(() => step3Validation.classList.remove("is-shown"), 3800);
            document.getElementById("booking-service").scrollIntoView({
                behavior: "smooth"
            });
            return;
        }

        if (!fullNameInput.value.trim()) {
            setFieldError(fullNameInput, true);
            valid = false;
        } else {
            setFieldError(fullNameInput, false);
        }

        if (!validateMobile(mobileInput.value)) {
            setFieldError(mobileInput, true);
            valid = false;
        } else {
            setFieldError(mobileInput, false);
        }

        if (!validateEmail(emailInput.value)) {
            setFieldError(emailInput, true);
            valid = false;
        } else {
            setFieldError(emailInput, false);
        }

        if (!genderInput.value) {
            setFieldError(genderInput, true);
            valid = false;
        } else {
            setFieldError(genderInput, false);
        }

        if (!termsInput.checked) {
            errTerms.classList.add("is-shown");
            valid = false;
        } else {
            errTerms.classList.remove("is-shown");
        }

        if (!valid) {
            const firstError = form.querySelector(".has-error, #err-terms.is-shown");
            if (firstError) firstError.scrollIntoView({
                behavior: "smooth",
                block: "center"
            });
            return;
        }

        // Button loading animation
        confirmBtn.classList.add("is-loading");
        confirmBtn.disabled = true;

        window.setTimeout(() => {
            confirmBtn.classList.remove("is-loading");
            confirmBtn.disabled = false;
            showSuccessPopup();
        }, 900);
    });

    /* =========================================================
       SUCCESS POPUP
    ========================================================= */
    const successBackdrop = document.getElementById("successBackdrop");
    const popBookingId = document.getElementById("popBookingId");
    const popService = document.getElementById("popService");
    const popDate = document.getElementById("popDate");
    const popTime = document.getElementById("popTime");
    const popCustomer = document.getElementById("popCustomer");
    const backToHomeBtn = document.getElementById("backToHomeBtn");
    const addToCalendarBtn = document.getElementById("addToCalendarBtn");

    let lastBookingId = "";

    function generateBookingId() {
        const rand = Math.floor(1000 + Math.random() * 9000);
        return `VGS-${new Date().getFullYear()}-${rand}`;
    }

    function showSuccessPopup() {
        lastBookingId = generateBookingId();
        popBookingId.textContent = lastBookingId;
        popService.textContent = state.service;
        popDate.textContent = state.date.label;
        popTime.textContent = state.time;
        popCustomer.textContent = fullNameInput.value.trim();

        successBackdrop.classList.add("is-open");
        document.body.style.overflow = "hidden";
    }

    function closeSuccessPopup() {
        successBackdrop.classList.remove("is-open");
        document.body.style.overflow = "";
    }

    successBackdrop.addEventListener("click", (e) => {
        if (e.target === successBackdrop) closeSuccessPopup();
    });

    backToHomeBtn.addEventListener("click", () => {
        closeSuccessPopup();
        resetBooking();
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    addToCalendarBtn.addEventListener("click", () => {
        if (!state.date || !state.time) return;

        const dateObj = new Date(`${state.date.iso}T00:00:00`);
        const [time, meridiem] = state.time.split(" ");
        let [hh, mm] = time.split(":").map(Number);
        if (meridiem === "PM" && hh !== 12) hh += 12;
        if (meridiem === "AM" && hh === 12) hh = 0;
        dateObj.setHours(hh, mm, 0, 0);

        const start = dateObj.toISOString().replace(/[-:]/g, "").split(".")[0] + "Z";
        const endObj = new Date(dateObj.getTime() + 45 * 60000);
        const end = endObj.toISOString().replace(/[-:]/g, "").split(".")[0] + "Z";

        const details = encodeURIComponent(
            `VGS Visual Green Men's Salon appointment.\nService: ${state.service}\nBooking ID: ${lastBookingId}`
        );
        const title = encodeURIComponent(`VGS Salon — ${state.service}`);
        const url = `https://calendar.google.com/calendar/render?action=TEMPLATE&text=${title}&dates=${start}/${end}&details=${details}&location=VGS%20Visual%20Green%20Men%27s%20Salon`;

        window.open(url, "_blank", "noopener");
    });

    /* =========================================================
       RESET BOOKING
       ========================================================= */
    function resetBooking() {
        state.service = null;
        state.price = 0;
        state.date = null;
        state.time = null;

        serviceCards.forEach((c) => {
            c.classList.remove("is-selected");
            c.querySelector(".booking_service_select").setAttribute("aria-checked", "false");
        });
        serviceIndicator.classList.remove("is-shown");
        serviceIndicator.textContent = "";

        dateCards.forEach((c) => {
            c.classList.remove("is-selected");
            c.setAttribute("aria-checked", "false");
        });

        timeSlots.forEach((s) => {
            s.classList.remove("is-selected");
            s.setAttribute("aria-checked", "false");
        });

        form.reset();
        [fullNameInput, mobileInput, emailInput, genderInput].forEach((el) => setFieldError(el, false));
        errTerms.classList.remove("is-shown");

        updateSummary();
    }

    /* Initial summary render */
    updateSummary();
</script>
<?php include('include/footer.php'); ?>
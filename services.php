<?php include('include/header.php'); ?>
<style>
    /* =====================================================================
   1. SERVICES + PRICE MENU 
===================================================================== */
    .services_menu_section {
        position: relative;
        overflow: hidden;
        padding: 7rem 6vw 6rem;

    }

    .services_menu_section::before,
    .services_menu_section::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        opacity: .55;
        pointer-events: none;
    }

    .services_menu_section::before {
        width: 420px;
        height: 420px;
        background: radial-gradient(circle, var(--c-emerald-light), transparent 70%);
        top: -160px;
        right: -120px;
    }

    .services_menu_section::after {
        width: 340px;
        height: 340px;
        background: radial-gradient(circle, #f1e6d0, transparent 70%);
        bottom: -140px;
        left: -100px;
    }

    .services_menu_inner {
        position: relative;
        z-index: 2;
        max-width: 1280px;
        margin: 0 auto;
    }

    .services_menu_grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 1.75rem;
    }

    .services_menu_card {
        position: relative;
        background: #fff;
        border: 1px solid var(--black);
        border-radius: 6px;
        padding: 2.2rem 2.1rem 2rem;
        transition: transform .5s var(--vg-ease), box-shadow .5s var(--ease), border-color .5s var(--ease);
    }

    .services_menu_card:hover {
        transform: translateY(-4px);
        border-color: var(--c-emerald);
        box-shadow: 0 30px 60px -30px rgba(15, 139, 95, .35);
    }

    .services_menu_card::before {
        content: "";
        position: absolute;
        left: 0;
        top: 1.6rem;
        bottom: 1.6rem;
        width: 3px;
        border-radius: 0 3px 3px 0;
        background: var(--c-emerald);
    }

    .services_menu_card--haircut,
    .services_menu_card--beard,
    .services_menu_card--haircare,
    .services_menu_card--face,
    .services_menu_card--combo {
        grid-column: span 4;
    }

    .services_menu_card_head {
        display: flex;
        align-items: center;
        gap: .9rem;
        margin-bottom: 1.5rem;
    }

    .services_menu_icon {
        flex: 0 0 auto;
        width: 38px;
        height: 38px;
        color: var(--c-emerald);
    }

    .services_menu_icon svg {
        width: 100%;
        height: 100%;
    }

    .services_menu_card_head h3 {

        font-weight: 600;
        font-size: 1.55rem;
        color: var(--black);
    }

    .services_menu_list {
        margin: 0 0 1.7rem;
    }

    .services_menu_list h3,
    .services_menu_list h4 {

        font-size: 1rem;
        color: var(--c-emerald-deep);
        margin: 1rem 0 .4rem;
    }

    .services_menu_row {
        display: flex;
        align-items: baseline;
        gap: .6rem;
        padding: .68rem 0;
        border-bottom: 1px solid var(--black);
    }

    .services_menu_row:last-child {
        border-bottom: none;
    }

    .services_menu_row .name {
        font-size: .98rem;
        color: var(--black);
        white-space: nowrap;
    }

    .services_menu_row .leader {
        flex: 1 1 auto;
        border-bottom: 1px dotted var(--black);
        height: 0;
        transform: translateY(-.3em);
    }

    .services_menu_row .price {
        font-family: var(--font-mono);
        font-size: .92rem;
        font-weight: 500;
        color: var(--c-emerald-deep);
        white-space: nowrap;
    }

    .services_menu_row:hover .leader {
        border-color: var(--c-emerald-deep);
    }

    .services_menu_row:hover .price {
        color: var(--c-emerald);
    }

    .services_menu_card--combo {
        background: #fff;
        border-color: var(--c-emerald-deep);
        color: var(--green);
    }

    .services_menu_card--combo::before {
        background: var(--c-emerald);
    }

    .services_menu_card--combo:hover {
        box-shadow: 0 30px 60px -28px rgba(10, 93, 64, .55);
        border-color: var(--c-emerald);
    }

    .services_menu_banner {
        grid-column: 1 / -1;
        position: relative;
        min-height: 220px;
        border-radius: 6px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: #0c1c17 url("https://picsum.photos/seed/visualgreen-poster/1600/700") center/cover no-repeat;
        isolation: isolate;
    }

    .services_menu_banner .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(120deg, rgba(6, 20, 15, .86) 10%, rgba(15, 139, 95, .55) 100%);
        z-index: 1;
    }

    .services_menu_banner h3 {
        position: relative;
        z-index: 2;
        color: var(--c-surface-alt);
        font-style: italic;
        font-weight: 500;
        font-size: clamp(1.9rem, 3.4vw, 3rem);
        line-height: 1.15;
    }

    /* =====================================================================
   RESPONSIVE MEDIA QUERIES
   Cards go from a 3-per-row (span 4 of 12) layout down to 2-per-row,
   then a single column, adjusting padding/type scale along the way.
===================================================================== */

    /* ----- Large desktops / wide screens (≤1440px) ----- */
    @media (max-width: 1440px) {
        .services_menu_section {
            padding: 6rem 5vw 5rem;
        }

        .services_menu_grid {
            gap: 1.5rem;
        }
    }

    /* ----- Small laptops / large tablets (≤1200px) ----- */
    @media (max-width: 1200px) {

        .services_menu_card--haircut,
        .services_menu_card--beard,
        .services_menu_card--haircare,
        .services_menu_card--face,
        .services_menu_card--combo {
            grid-column: span 6;
        }

        .services_menu_card {
            padding: 2rem 1.8rem 1.8rem;
        }

        .services_menu_card_head h3 {
            font-size: 1.4rem;
        }
    }

    /* ----- Tablets (≤992px) ----- */
    @media (max-width: 992px) {
        .services_menu_section {
            padding: 5rem 5vw 4.5rem;
        }

        .services_menu_grid {
            gap: 1.25rem;
        }

        .services_menu_row .name {
            white-space: normal;
        }

        .services_menu_banner {
            min-height: 180px;
        }
    }

    /* ----- Small tablets / large phones (≤768px) ----- */
    @media (max-width: 768px) {

        .services_menu_card--haircut,
        .services_menu_card--beard,
        .services_menu_card--haircare,
        .services_menu_card--face,
        .services_menu_card--combo {
            grid-column: span 12;
        }

        .services_menu_card {
            padding: 1.8rem 1.5rem 1.6rem;
        }

        .services_menu_card_head {
            gap: .7rem;
            margin-bottom: 1.2rem;
        }

        .services_menu_icon {
            width: 32px;
            height: 32px;
        }

        .services_menu_card_head h3 {
            font-size: 1.25rem;
        }

        .services_menu_row .name {
            font-size: .92rem;
        }

        .services_menu_row .price {
            font-size: .88rem;
        }

        .services_menu_banner {
            min-height: 160px;
        }
    }

    /* ----- Mobile phones (≤576px) ----- */
    @media (max-width: 576px) {
        .services_menu_section {
            padding: 4rem 5vw 3.5rem;
        }

        .services_menu_section::before,
        .services_menu_section::after {
            width: 220px;
            height: 220px;
        }

        .services_menu_card {
            padding: 1.5rem 1.25rem 1.4rem;
            border-radius: 4px;
        }

        .services_menu_row {
            flex-wrap: wrap;
            gap: .3rem;
        }

        .services_menu_row .leader {
            display: none;
        }

        .services_menu_row .price {
            margin-left: auto;
        }

        .services_menu_banner {
            min-height: 140px;
            border-radius: 4px;
        }

        .services_menu_banner h3 {
            font-size: clamp(1.4rem, 6vw, 2rem);
            padding: 0 1rem;
        }
    }

    /* ----- Extra small phones (≤400px) ----- */
    @media (max-width: 400px) {
        .services_menu_card {
            padding: 1.25rem 1rem 1.2rem;
        }

        .services_menu_card_head h3 {
            font-size: 1.1rem;
        }

        .services_menu_row .name {
            font-size: .85rem;
        }

        .services_menu_row .price {
            font-size: .8rem;
        }

        .home_header_hero-btns {
            font-size: .8rem;
        }
    }

    /* =====================================================================
   2. TRANSFORMATION / STYLE SHOWCASE
===================================================================== */

    .services_transformation_section {
        position: relative;
        overflow: hidden;
        padding: 7rem 6vw;

    }

    .services_transformation_glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(70px);
        opacity: .5;
        pointer-events: none;
    }

    .services_transformation_glow--1 {
        width: 520px;
        height: 520px;
        background: radial-gradient(circle, rgba(15, 139, 95, .45), transparent 70%);
        top: -160px;
        left: -120px;
    }

    .services_transformation_glow--2 {
        width: 420px;
        height: 420px;
        background: radial-gradient(circle, rgba(185, 151, 90, .28), transparent 70%);
        bottom: -140px;
        right: -80px;
    }

    .services_transformation_inner {
        position: relative;
        z-index: 2;
        max-width: 1280px;
        margin: 0 auto;
    }

    /* ---- Before / After grid ---- */
    .services_before_after {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 50px 35px;
    }

    .services_ba_item {
        width: 100%;
        opacity: 0;
        transform: translateY(24px);
        transition: opacity .7s var(--vg-ease), transform .7s var(--vg-ease);
    }

    .services_ba_item.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .services_before_after_label {
        text-align: center;
        margin: 0 0 15px;
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--c-grey);
    }

    .services_before_after_label span {
        margin: 0 8px;
        font-size: 20px;
        color: var(--gold);
    }

    .services_ba_frame {
        position: relative;
        width: 100%;
        aspect-ratio: 16/10;
        overflow: hidden;
        border-radius: 22px;
        background: #111;
        box-shadow: 0 20px 50px rgba(0, 0, 0, .35);
        transition: box-shadow .4s var(--vg-ease);
    }

    .services_ba_frame:hover {
        box-shadow: 0 26px 60px rgba(15, 139, 95, .28);
    }

    .services_ba_before,
    .services_ba_after {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        -webkit-user-select: none;
        user-select: none;
        pointer-events: none;
    }

    .services_ba_after_wrap {
        position: absolute;
        inset: 0;
        width: 50%;
        overflow: hidden;
        z-index: 2;
        transition: width .35s var(--vg-ease);
    }

    .services_ba_frame.is-dragging .services_ba_after_wrap,
    .services_ba_frame.is-dragging .services_ba_handle {
        transition: none;
    }

    .services_ba_after {
        width: 100%;
        max-width: none;
    }

    .services_ba_handle {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 3px;
        background: #fff;
        transform: translateX(-50%);
        z-index: 5;
        pointer-events: none;
        transition: left .35s var(--vg-ease);
    }

    .services_ba_handle::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--c-emerald);
        border: 3px solid #fff;
        transform: translate(-50%, -50%);
        box-shadow: 0 5px 20px rgba(0, 0, 0, .3);
        transition: transform .25s var(--vg-ease), background .25s var(--vg-ease);
    }

    .services_ba_frame:hover .services_ba_handle::before,
    .services_ba_frame.is-dragging .services_ba_handle::before {
        transform: translate(-50%, -50%) scale(1.1);
        background: var(--c-emerald-light);
    }

    .services_ba_handle i {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        color: #fff;
        font-size: 20px;
        transform: translate(-50%, -50%);
    }

    .services_ba_range {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        opacity: 0;
        cursor: ew-resize;
        z-index: 10;
    }

    .services_ba_title {
        text-align: center;
        margin-top: 18px;
    }

    .services_ba_title h3 {
        margin: 0;
        font-size: 22px;
        font-weight: 800;
        color: var(--c-surface);
    }

    .services_ba_title p {
        margin: 6px 0 0;
        color: var(--c-gray);
    }

    .services_ba_item:last-child {
        grid-column: 1 / -1;
        max-width: calc(50% - 17.5px);
        margin: 0 auto;
    }

    /* =====================================================================
   RESPONSIVE MEDIA QUERIES
===================================================================== */

    /* ----- Large desktops / wide screens (≤1440px) ----- */
    @media (max-width: 1440px) {
        .services_transformation_section {
            padding: 6rem 5vw;
        }

        .services_before_after {
            gap: 45px 30px;
        }
    }

    /* ----- Small laptops / large tablets (≤1200px) ----- */
    @media (max-width: 1200px) {
        .services_ba_handle::before {
            width: 42px;
            height: 42px;
        }

        .services_ba_title h3 {
            font-size: 20px;
        }
    }

    /* ----- Tablets (≤992px) ----- */
    @media (max-width: 992px) {
        .services_transformation_section {
            padding: 5rem 5vw;
        }

        .services_before_after {
            gap: 40px 24px;
        }

        .services_transformation_glow--1,
        .services_transformation_glow--2 {
            width: 320px;
            height: 320px;
        }
    }

    /* ----- Small tablets / large phones (≤768px) ----- */
    @media (max-width: 768px) {
        .services_transformation_section {
            padding: 4.5rem 6vw;
        }

        /* Single column - the "last child spans full width" rule from
       desktop no longer makes sense once everything is one column */
        .services_before_after {
            grid-template-columns: 1fr;
            gap: 36px;
        }

        .services_ba_item:last-child {
            max-width: 100%;
        }

        .services_ba_frame {
            border-radius: 16px;
        }

        .services_ba_handle::before {
            width: 38px;
            height: 38px;
        }

        .services_ba_handle i {
            font-size: 16px;
        }

        .services_before_after_label {
            font-size: 13px;
            margin-bottom: 10px;
        }

        .services_ba_title h3 {
            font-size: 19px;
        }

        .services_ba_title p {
            font-size: 14px;
        }
    }

    /* ----- Mobile phones (≤576px) ----- */
    @media (max-width: 576px) {
        .services_transformation_section {
            padding: 3.5rem 6vw;
        }

        .services_transformation_glow--1,
        .services_transformation_glow--2 {
            width: 220px;
            height: 220px;
            filter: blur(50px);
        }

        .services_before_after {
            gap: 28px;
        }

        .services_ba_frame {
            border-radius: 12px;
            aspect-ratio: 4/3;
        }

        .services_ba_handle {
            width: 2px;
        }

        .services_ba_handle::before {
            width: 32px;
            height: 32px;
            border-width: 2px;
        }

        .services_ba_handle i {
            font-size: 14px;
        }

        .services_ba_title {
            margin-top: 12px;
        }

        .services_ba_title h3 {
            font-size: 17px;
        }
    }

    /* ----- Extra small phones (≤400px) ----- */
    @media (max-width: 400px) {
        .services_ba_frame {
            aspect-ratio: 1/1;
        }

        .services_before_after_label {
            font-size: 12px;
        }

        .services_before_after_label span {
            font-size: 16px;
            margin: 0 5px;
        }

        .services_ba_title h3 {
            font-size: 16px;
        }

        .services_ba_title p {
            font-size: 13px;
        }
    }
</style>


<!-- ─── Service Header ─── -->
<section class="saloon-page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(assets/img/service/service-header.jpeg);">
    <div class="saloon-page-header-content">
        <h4>OUR SERVICES</h4>
        <h1>Professional Men’s Grooming & Beauty Services</h1>
    </div>
</section>
<main>
    <!-- =========================================================
             1. SERVICES + PRICE MENU
    ========================================================= -->
    <section class="services_menu_section" id="services">
        <div class="services_menu_inner">
            <div class="section-head pb-5 text-center" data-aos="fade-up">
                <p class="home_section_eyebrow"style="color: #da9a33">service menu</p>
                <h2 class="home_section_title">Our <em>Services</em></h2>
                <p class="home_section_sub">Precision grooming. Premium experience.</p>
            </div>
            <div class="services_menu_grid">
                <article class="services_menu_card services_menu_card--haircut" data-reveal>
                    <div class="services_menu_card_head">
                        <span class="services_menu_icon" aria-hidden="true">
                            <svg viewBox="0 0 40 40" fill="none">
                                <circle cx="10" cy="10" r="4.5" stroke="currentColor" stroke-width="1.6" />
                                <circle cx="10" cy="30" r="4.5" stroke="currentColor" stroke-width="1.6" />
                                <path d="M13.5 12.5L32 27M32 13L13.5 27.5" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                        <h3>The Art of the Perfect Cut</h3>
                    </div>
                    <ul class="services_menu_list">
                        <li class="services_menu_row"><span class="name">Hair Cut</span><span class="leader"></span><span
                                class="price">₹300 ₹250</span></li>
                        <li class="services_menu_row"><span class="name">Kids Hair Cut</span><span
                                class="leader"></span><span class="price">₹250 ₹200</span></li>
                        <li class="services_menu_row"><span class="name">Head Shave </span><span
                                class="leader"></span><span class="price">₹500 -</span></li>
                        <li class="services_menu_row"><span class="name">Shaving</span><span class="leader"></span><span
                                class="price">₹150 ₹100</span></li>
                        <li class="services_menu_row"><span class="name">(Hair Styling, Beard Styling,<br>
                                Hair Wash,Face Washing)</span><span class="leader"></span><span class="price">₹700
                                ₹650</span></li>
                        <li class="services_menu_row"><span class="name">Trimming</span><span class="leader"></span><span
                                class="price">₹200 ₹150</span></li>
                    </ul>
                    <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Book Now</span>
                        </a>
                    </div>
                </article>
                <article class="services_menu_card services_menu_card--beard" data-reveal>
                    <div class="services_menu_card_head">
                        <span class="services_menu_icon" aria-hidden="true">
                            <svg viewBox="0 0 40 40" fill="none">
                                <path d="M12 10c0 6-3 8-3 14 0 6 5 9 11 9s11-3 11-9c0-6-3-8-3-14"
                                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M15 10c0 3 1.5 4 5 4s5-1 5-4" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                        <h3>Hair Texture Matters</h3>
                    </div>
                    <ul class="services_menu_list">
                        <li class="services_menu_row"><span class="name">Smoothening</span><span
                                class="leader"></span><span class="price">₹6000 ₹5000</span></li>
                        <li class="services_menu_row"><span class="name">Strightening</span><span
                                class="leader"></span><span class="price">₹6000 ₹5000</span></li>
                        <li class="services_menu_row"><span class="name">Keratin</span><span class="leader"></span><span
                                class="price">₹6000 ₹5000</span></li>
                        <li class="services_menu_row"><span class="name">Botox</span><span class="leader"></span><span
                                class="price">₹6000 ₹5500</span></li>
                        <h4>Women's:</h4>
                        <li class="services_menu_row"><span class="name">Botox</span><span class="leader"></span><span
                                class="price">₹7999</span></li>
                    </ul>
                    <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Book Now</span>
                        </a>
                    </div>

                </article>
                <article class="services_menu_card services_menu_card--combo" data-reveal>
                    <div class="services_menu_card_head">
                        <span class="services_menu_icon" aria-hidden="true">
                            <svg viewBox="0 0 40 40" fill="none">
                                <rect x="7" y="15" width="26" height="18" rx="1.5" stroke="currentColor"
                                    stroke-width="1.6" />
                                <path d="M7 20h26M20 15v18" stroke="currentColor" stroke-width="1.6" />
                                <path d="M20 15c-3-6-10-6-10 0M20 15c3-6 10-6 10 0" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </span>
                        <h3>World of Colors</h3>
                    </div>
                    <ul class="services_menu_list">
                        <li class="services_menu_row"><span class="name">Gray Coverage (Ammonia)</span><span
                                class="leader"></span><span class="price">₹1000 ₹900 </span></li>
                        <li class="services_menu_row"><span class="name">Express Color</span><span
                                class="leader"></span><span class="price">₹1000 ₹900</span></li>
                        <li class="services_menu_row"><span class="name">Grey Coverage (Ammonia Free)</span><span
                                class="leader"></span><span class="price">₹1500 ₹1300</span></li>
                        <li class="services_menu_row"><span class="name">Global Fashion Color</span><span
                                class="leader"></span><span class="price">₹2000 ₹1600</span></li>
                        <li class="services_menu_row"><span class="name">Highlights (1 per)</span><span
                                class="leader"></span><span class="price">₹500 ₹300</span></li>
                        <li class="services_menu_row"><span class="name">Moustache Color</span><span
                                class="leader"></span><span class="price">₹200 ₹150</span></li>
                        <li class="services_menu_row"><span class="name">Beard Color</span><span
                                class="leader"></span><span class="price">₹600 ₹500</span></li>
                    </ul>
                    <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Book Now</span>
                        </a>
                    </div>
                </article>
                <div class="services_menu_banner" data-reveal>
                    <div class="overlay"></div>
                    <h3>Look good. Feel confident.</h3>
                </div>
                <article class="services_menu_card services_menu_card--haircare" data-reveal>
                    <div class="services_menu_card_head">
                        <span class="services_menu_icon" aria-hidden="true">
                            <svg viewBox="0 0 40 40" fill="none">
                                <path d="M20 6c5 8 9 13.5 9 19a9 9 0 1 1-18 0c0-5.5 4-11 9-19Z"
                                    stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <h3>Hair &amp; Scalp Rituals</h3>
                    </div>
                    <ul class="services_menu_list">
                        <li class="services_menu_row"><span class="name">Head Massage / Hero Massage</span><span
                                class="leader"></span><span class="price">₹600 ₹500</span></li>
                        <li class="services_menu_row"><span class="name">Color Shave</span><span
                                class="leader"></span><span class="price">₹1400 ₹1100</span></li>
                        <li class="services_menu_row"><span class="name">Repair / Rejuvenate</span><span
                                class="leader"></span><span class="price">₹1400 ₹1100</span></li>
                        <li class="services_menu_row"><span class="name">Hair Strengthening Treatment</span><span
                                class="leader"></span><span class="price">₹1500 ₹1300 </span></li>
                        <li class="services_menu_row"><span class="name">Botox Hair Treatment</span><span
                                class="leader"></span><span class="price">₹2000 ₹1700</span></li>
                        <li class="services_menu_row"><span class="name">Stress Relief Hair</span><span
                                class="leader"></span><span class="price">₹2500 ₹2300</span></li>
                    </ul>
                    <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Book Now</span>
                        </a>
                    </div>
                </article>
                <article class="services_menu_card services_menu_card--face" data-reveal>
                    <div class="services_menu_card_head">
                        <span class="services_menu_icon" aria-hidden="true">
                            <svg viewBox="0 0 40 40" fill="none">
                                <path d="M20 6l2.6 7.8L30 16l-7.4 2.2L20 26l-2.6-7.8L10 16l7.4-2.2L20 6Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                <circle cx="30" cy="30" r="3" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </span>
                        <h3>Scalp Treatment</h3>
                    </div>
                    <ul class="services_menu_list">
                        <li class="services_menu_row"><span class="name">Dandruff Control Treatment</span><span
                                class="leader"></span><span class="price">₹2000 ₹1700</span></li>
                        <li class="services_menu_row"><span class="name">Hair Fall Control Treatment</span><span
                                class="leader"></span><span class="price">₹2500 ₹2200</span></li>
                    </ul>
                    <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Book Now</span>
                        </a>
                    </div>
                </article>
                <article class="services_menu_card services_menu_card--combo" data-reveal>
                    <div class="services_menu_card_head">
                        <span class="services_menu_icon" aria-hidden="true">
                            <svg viewBox="0 0 40 40" fill="none">
                                <rect x="7" y="15" width="26" height="18" rx="1.5" stroke="currentColor"
                                    stroke-width="1.6" />
                                <path d="M7 20h26M20 15v18" stroke="currentColor" stroke-width="1.6" />
                                <path d="M20 15c-3-6-10-6-10 0M20 15c3-6 10-6 10 0" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </span>
                        <h3>Skin Basics</h3>
                    </div>
                    <ul class="services_menu_list">
                        <li class="services_menu_row"><span class="name">Fruit Glow</span><span
                                class="leader"></span><span class="price">₹900 ₹800</span></li>
                        <li class="services_menu_row"><span class="name">No Tan</span><span class="leader"></span><span
                                class="price">₹1500 ₹1400</span></li>
                        <h4>Senses Suite:</h4>
                        <li class="services_menu_row"><span class="name">Skin Lighting</span><span
                                class="leader"></span><span class="price">₹1500 ₹1300</span></li>
                        <li class="services_menu_row"><span class="name">Acne Care Treatment</span><span
                                class="leader"></span><span class="price">₹1800 ₹1650 </span></li>
                        <li class="services_menu_row"><span class="name">Dead Sea Hydration</span><span
                                class="leader"></span><span class="price">₹2000 ₹1800</span></li>
                        <li class="services_menu_row"><span class="name">Signature Glow (03)</span><span
                                class="leader"></span><span class="price">₹2200 ₹2000</span></li>
                    </ul>
                    <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Book Now</span>
                        </a>
                    </div>
                </article>
                <div class="services_menu_banner" data-reveal>
                    <div class="overlay"></div>
                    <h3>Look good. Feel confident.</h3>
                </div>
                <article class="services_menu_card services_menu_card--combo" data-reveal>
                    <div class="services_menu_card_head">
                        <span class="services_menu_icon" aria-hidden="true">
                            <svg viewBox="0 0 40 40" fill="none">
                                <rect x="7" y="15" width="26" height="18" rx="1.5" stroke="currentColor"
                                    stroke-width="1.6" />
                                <path d="M7 20h26M20 15v18" stroke="currentColor" stroke-width="1.6" />
                                <path d="M20 15c-3-6-10-6-10 0M20 15c3-6 10-6 10 0" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </span>
                        <h3>Advanced Cosmetology Facial</h3>
                    </div>
                    <ul class="services_menu_list">
                        <li class="services_menu_row"><span class="name">Skin
                                Brightening<br>[Brighten, Clarity, Illuminate]</span><span
                                class="leader"></span><span class="price">₹6000 ₹5000</span></li>
                        <li class="services_menu_row"><span class="name">Age-Defying<br>[Revive, Replenish,
                                Renew]</span><span class="leader"></span><span class="price">₹6000 ₹5000</span></li>
                        <li class="services_menu_row"><span class="name">Hydration
                                Therapy<br>[Hydrate, Restore, Replenish]</span><span class="leader"></span><span
                                class="price">₹6000 ₹5000</span></li>
                        <li class="services_menu_row"><span class="name">Acne Care<br>[Cleanse, Clear, Calm, Confidence]
                            </span><span class="leader"></span><span class="price">₹6000 ₹5000</span></li>
                    </ul>
                    <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Book Now</span>
                        </a>
                    </div>
                </article>
                <article class="services_menu_card services_menu_card--combo" data-reveal>
                    <div class="services_menu_card_head">
                        <span class="services_menu_icon" aria-hidden="true">
                            <svg viewBox="0 0 40 40" fill="none">
                                <rect x="7" y="15" width="26" height="18" rx="1.5" stroke="currentColor"
                                    stroke-width="1.6" />
                                <path d="M7 20h26M20 15v18" stroke="currentColor" stroke-width="1.6" />
                                <path d="M20 15c-3-6-10-6-10 0M20 15c3-6 10-6 10 0" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </span>
                        <h3>Add-On Basics</h3>
                    </div>
                    <ul class="services_menu_list">
                        <li class="services_menu_row"><span class="name">De-Tan (Face and Neck)</span><span
                                class="leader"></span><span class="price">₹600 ₹550</span></li>
                        <h4>Add-On Bright Care:</h4>
                        <li class="services_menu_row"><span class="name">Neck and Elbow</span><span
                                class="leader"></span><span class="price">₹700 ₹600</span></li>
                        <li class="services_menu_row"><span class="name">Under Eye Treatment </span><span
                                class="leader"></span><span class="price">₹1000 ₹800</span></li>
                        <h4>Brightening Mask (Face):</h4>
                        <li class="services_menu_row"><span class="name">Rejuvenate Repeat</span><span
                                class="leader"></span><span class="price">₹800 ₹700 </span></li>
                        <li class="services_menu_row"><span class="name">Peel Off Mask (Bright)</span><span
                                class="leader"></span><span class="price">₹800 ₹700</span></li>
                    </ul>
                    <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Book Now</span>
                        </a>
                    </div>
                </article>
                <article class="services_menu_card services_menu_card--combo" data-reveal>
                    <div class="services_menu_card_head">
                        <span class="services_menu_icon" aria-hidden="true">
                            <svg viewBox="0 0 40 40" fill="none">
                                <rect x="7" y="15" width="26" height="18" rx="1.5" stroke="currentColor"
                                    stroke-width="1.6" />
                                <path d="M7 20h26M20 15v18" stroke="currentColor" stroke-width="1.6" />
                                <path d="M20 15c-3-6-10-6-10 0M20 15c3-6 10-6 10 0" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </span>
                        <h3>Groom Package</h3>
                    </div>
                    <ul class="services_menu_list">
                        <li class="services_menu_row"><span class="name">Matte Finish</span><span
                                class="leader"></span><span class="price">₹6000 </span></li>
                        <li class="services_menu_row"><span class="name">HD Makeup</span><span class="leader"></span><span
                                class="price">₹8000</span></li>
                        <li class="services_menu_row"><span class="name">Skin Finish Due</span><span
                                class="leader"></span><span class="price">₹9000</span></li>
                        <li class="services_menu_row"><span class="name">Glassy Makeup</span><span
                                class="leader"></span><span class="price">₹10,000 </span></li>
                        <li class="services_menu_row"><span class="name">Air Brush Makeup</span><span
                                class="leader"></span><span class="price">₹12,000</span></li>
                    </ul>
                    <div class="home_header_hero-btns">
                        <a class="home_header_btn-hero-primary salon-cut-btn" href="#book">
                            <span class="btn-text">Book Now</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- =========================================================
             2. TRANSFORMATION / STYLE SHOWCASE
    ========================================================= -->
    <section class="services_transformation_section" id="transformation">
        <div class="services_transformation_glow services_transformation_glow--1"></div>
        <div class="services_transformation_glow services_transformation_glow--2"></div>
        <div class="services_transformation_inner">
            <div class="section-head pb-5 text-center" data-aos="fade-up">
                <p class="home-eyebrow"style="color: #da9a33"> Transformation</p>
                <h2 class="home-title">Your style. <em>Your signature.</em></h2>
                <p class="home-sub">Drag any slider to see the transformation.</p>
            </div>
            <div class="services_before_after" id="baGrid">
                <div class="services_ba_item">
                    <p class="services_before_after_label">Before <span>→</span> After</p>
                    <div class="services_ba_frame">
                        <img class="services_ba_before" src="assets/img/service/t-hc-before.png" alt="Before the grooming session">
                        <div class="services_ba_after_wrap">
                            <img class="services_ba_after" src="assets/img/service/t-hc-after.png"
                                alt="After the grooming session">
                        </div>
                        <div class="services_ba_handle"><i class="bi bi-arrows-expand"></i></div>
                        <input type="range" class="services_ba_range" min="0" max="100" value="50"
                            aria-label="Reveal before and after: Haircut Transformation">
                    </div>
                    <div class="services_ba_title">
                        <h3>Haircut Transformation</h3>
                        <p>A sharper cut. A stronger look.</p>
                    </div>
                </div>
                <div class="services_ba_item">
                    <p class="services_before_after_label">Before <span>→</span> After</p>
                    <div class="services_ba_frame">
                        <img class="services_ba_before" src="assets/img/service/t-skin-before.png" alt="Before the skin treatment">
                        <div class="services_ba_after_wrap">
                            <img class="services_ba_after" src="assets/img/service/t-skin-after.png"
                                alt="After the skin treatment">
                        </div>
                        <div class="services_ba_handle"><i class="bi bi-arrows-expand"></i></div>
                        <input type="range" class="services_ba_range" min="0" max="100" value="50"
                            aria-label="Reveal before and after: Skin">
                    </div>
                    <div class="services_ba_title">
                        <h3>Skin</h3>
                        <p>Clean and bright skin.</p>
                    </div>
                </div>
                <div class="services_ba_item">
                    <p class="services_before_after_label">Before <span>→</span> After</p>
                    <div class="services_ba_frame">
                        <img class="services_ba_before" src="assets/img/service/t-grooming-before.png"
                            alt="Before the full grooming">
                        <div class="services_ba_after_wrap">
                            <img class="services_ba_after" src="assets/img/service/t-grooming-after.png"
                                alt="After the full grooming">
                        </div>
                        <div class="services_ba_handle"><i class="bi bi-arrows-expand"></i></div>
                        <input type="range" class="services_ba_range" min="0" max="100" value="50"
                            aria-label="Reveal before and after: Full Grooming">
                    </div>
                    <div class="services_ba_title">
                        <h3>Full Grooming</h3>
                        <p>Head to jaw, fully refreshed.</p>
                    </div>
                </div>
                <div class="services_ba_item">
                    <p class="services_before_after_label">Before <span>→</span> After</p>
                    <div class="services_ba_frame">
                        <img class="services_ba_before" src="assets/img/service/t-hcr-before.png" alt="Before the hair color">
                        <div class="services_ba_after_wrap">
                            <img class="services_ba_after" src="assets/img/service/t-hcr-after.png" alt="After the hair color">
                        </div>
                        <div class="services_ba_handle"><i class="bi bi-arrows-expand"></i></div>
                        <input type="range" class="services_ba_range" min="0" max="100" value="50"
                            aria-label="Reveal before and after: Hair Color">
                    </div>
                    <div class="services_ba_title">
                        <h3>Hair Color</h3>
                        <p>The last touch that pulls it together.</p>
                    </div>
                </div>
                <div class="services_ba_item">
                    <p class="services_before_after_label">Before <span>→</span> After</p>
                    <div class="services_ba_frame">
                        <img class="services_ba_before" src="assets/img/service/t-scalp-before.png"
                            alt="Before the scalp treatment">
                        <div class="services_ba_after_wrap">
                            <img class="services_ba_after" src="assets/img/service/t-scalp-after.png"
                                alt="After the scalp treatment">
                        </div>
                        <div class="services_ba_handle"><i class="bi bi-arrows-expand"></i></div>
                        <input type="range" class="services_ba_range" min="0" max="100" value="50"
                            aria-label="Reveal before and after: Scalp Treatment">
                    </div>
                    <div class="services_ba_title">
                        <h3>Scalp Treatment</h3>
                        <p>Healthier roots, visibly refreshed.</p>
                    </div>
                </div>

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
    /*-- =========================================================
         1. SERVICES + PRICE MENU
    ========================================================= --*/
    /* 1. Scroll-reveal engine */
    var revealTargets = document.querySelectorAll("[data-reveal]");
    if ("IntersectionObserver" in window) {
        var revealObserver = new IntersectionObserver(function(entries, obs) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: "0px 0px -6% 0px"
        });
        revealTargets.forEach(function(el) {
            revealObserver.observe(el);
        });
    } else {
        revealTargets.forEach(function(el) {
            el.classList.add("is-visible");
        });
    }
    /*-- =========================================================
          2. Before / after slider 
     ========================================================= --*/
    function setPosition(frame, value) {
        var afterWrap = frame.querySelector(".services_ba_after_wrap");
        var afterImg = frame.querySelector(".services_ba_after");
        var handle = frame.querySelector(".services_ba_handle");
        afterWrap.style.width = value + "%";
        handle.style.left = value + "%";
        afterImg.style.width = frame.offsetWidth + "px";
    }

    var frames = document.querySelectorAll(".services_ba_frame");
    frames.forEach(function(frame) {
        var range = frame.querySelector(".services_ba_range");
        if (!range) return;
        setPosition(frame, range.value);
        range.addEventListener("input", function() {
            frame.classList.add("is-dragging");
            setPosition(frame, range.value);
        });
        ["change", "mouseup", "touchend"].forEach(function(evt) {
            range.addEventListener(evt, function() {
                frame.classList.remove("is-dragging");
            });
        });
    });

    window.addEventListener("resize", function() {
        frames.forEach(function(frame) {
            var range = frame.querySelector(".services_ba_range");
            if (range) setPosition(frame, range.value);
        });
    });

    var items = document.querySelectorAll(".services_ba_item");
    if ("IntersectionObserver" in window) {
        var baObserver = new IntersectionObserver(function(entries, obs) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });
        items.forEach(function(item) {
            baObserver.observe(item);
        });
    } else {
        items.forEach(function(item) {
            item.classList.add("is-visible");
        });
    }
</script>
<?php include('include/footer.php'); ?>
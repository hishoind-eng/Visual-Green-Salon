<?php include('include/header.php'); ?>

<style>
/* ===================================================================== 
   1. OUR STORY 
===================================================================== */
    .about_story_section {
        padding: 80px 0;
       
        overflow: hidden;

        /* Diagonal green → white split *
    background: linear-gradient(
        130deg, 
        #225552 0%, 
        #225552 60%, 
        #c9e6df 48.2%, 
        #c3e2e1 100%
    ); ---*/
    }

    .about_story_media {
        position: relative;
        overflow: hidden;
        border-radius: 990px;
    }

    .about_story_media img {
        width: 100%;
        height: 80%;
        object-fit: cover;
        aspect-ratio: 4 / 4;
        transition: transform 0.5s ease;
    }

    .about_story_media:hover img {
        transform: scale(1.05);
    }

    .about_story_media_frame {
        position: absolute;
        inset: 14px;
        pointer-events: none;
        border: 1px solid rgba(255, 255, 255, 0.8);
        border-radius: 900px;
        z-index: 2;
    }

    .about_story_tag {
        position: absolute;
        bottom: 22px;
        left: 22px;
        background: rgb(214, 131, 21);
        backdrop-filter: blur(8px);
        border: 1px solid var(--white);
        border-radius: var(--radius-sm);
        padding: 0.7rem 1.1rem;
        display: flex;
        flex-direction: column;
        gap: 0;
        line-height: 1.1;
    }

    .about_story_tag .about_story_mono {
        font-size: 0.62rem;
        color: var(--black-3);
        text-transform: uppercase;
        letter-spacing: 0.12em;
    }

    .about_story_tag-year {
        font-size: 1.3rem;
        color: var(--brass-bright);
    }

    .about_story_meta {
        display: flex;
        flex-direction: column;
        gap: 1.1rem;
        margin-top: 2rem;
        border-top: 1px solid var(--black);
        padding-top: 1.8rem;
    }

    .about_story_meta_item {
        display: flex;
        gap: 1.1rem;
        align-items: baseline;
    }

    .about_story_meta_item .about_story_mono {
        color: var(--brass);
        font-size: 0.85rem;
    }

    .about_story_meta_item p {
        margin: 0;
        color: var(--stone);
        font-size: 0.95rem;
    }

    /* =====================================================================
   RESPONSIVE MEDIA QUERIES
===================================================================== */
    /* === Large Desktop - 1400px and above === */
    @media (min-width: 1400px) {
        .about_story_section {
            padding: 100px 0;
        }

        .about_story_media {
            max-width: 560px;
        }

        .about_story_meta {
            margin-top: 2.5rem;
        }
    }

    /* === Desktop / Laptop - 1200px to 1399px === */
    @media (max-width: 1399px) {
        .about_story_section {
            padding: 80px 0;
        }

        .about_story_media img {
            height: auto;
        }
    }

    /* === Small Laptop - 992px to 1199px === */
    @media (max-width: 1199px) {

        .about_story_section {
            padding: 70px 0;
        }

        .about_story_media {
            border-radius: 700px;
        }

        .about_story_media_frame {
            inset: 12px;
        }

        .about_story_tag {
            bottom: 18px;
            left: 18px;
            padding: 0.65rem 1rem;
        }

        .about_story_tag-year {
            font-size: 1.2rem;
        }

        .about_story_meta {
            margin-top: 1.5rem;
            padding-top: 1.5rem;
        }

        .about_story_meta_item {
            gap: 0.9rem;
        }
    }

    /* ================================================================
   Tablet - 768px to 991px
================================================================ */
    @media (max-width: 991px) {

        .about_story_section {
            padding: 65px 0;

        }

        .about_story_media {
            max-width: 500px;
            margin: 0 auto 45px;
        }

        .about_story_media img {
            width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
        }

        .about_story_meta {
            margin-top: 1.5rem;
            padding-top: 1.4rem;
            gap: 1rem;
        }

        .about_story_meta_item p {
            font-size: 0.92rem;
        }
    }

    /* ================================================================
   Mobile Landscape / Large Mobile - 576px to 767px
================================================================ */
    @media (max-width: 767px) {

        .about_story_section {
            padding: 55px 0;

        }

        .about_story_media {
            max-width: 420px;
            margin: 0 auto 35px;
            border-radius: 500px;
        }

        .about_story_media_frame {
            inset: 10px;
        }

        .about_story_tag {
            bottom: 15px;
            left: 15px;
            padding: 0.6rem 0.9rem;
        }

        .about_story_tag .about_story_mono {
            font-size: 0.58rem;
        }

        .about_story_tag-year {
            font-size: 1.1rem;
        }

        .about_story_meta {
            margin-top: 1.4rem;
            padding-top: 1.2rem;
            gap: 0.9rem;
        }

        .about_story_meta_item {
            gap: 0.8rem;
        }

        .about_story_meta_item .about_story_mono {
            font-size: 0.8rem;
            flex-shrink: 0;
        }

        .about_story_meta_item p {
            font-size: 0.9rem;
            line-height: 1.7;
        }
    }

    /* ================================================================
   Mobile - 480px to 575px
================================================================ */
    @media (max-width: 575px) {

        .about_story_section {
            padding: 50px 0;
        }

        .about_story_media {
            width: 100%;
            max-width: 360px;
            margin: 0 auto 30px;
        }

        .about_story_media_frame {
            inset: 9px;
        }

        .about_story_tag {
            bottom: 13px;
            left: 13px;
            padding: 0.55rem 0.8rem;
        }

        .about_story_tag-year {
            font-size: 1rem;
        }

        .about_story_meta {
            margin-top: 1.2rem;
            padding-top: 1rem;
        }

        .about_story_meta_item {
            gap: 0.7rem;
        }

        .about_story_meta_item .about_story_mono {
            font-size: 0.75rem;
        }

        .about_story_meta_item p {
            font-size: 0.88rem;
            line-height: 1.65;
        }
    }

    /* ================================================================
   Small Mobile - 375px to 479px
================================================================ */
    @media (max-width: 479px) {

        .about_story_section {
            padding: 45px 0;
        }

        .about_story_media {
            max-width: 310px;
            border-radius: 400px;
        }

        .about_story_media_frame {
            inset: 8px;
        }

        .about_story_tag {
            bottom: 10px;
            left: 10px;
            padding: 0.5rem 0.7rem;
        }

        .about_story_tag .about_story_mono {
            font-size: 0.52rem;
            letter-spacing: 0.08em;
        }

        .about_story_tag-year {
            font-size: 0.9rem;
        }

        .about_story_meta {
            gap: 0.8rem;
        }

        .about_story_meta_item {
            flex-direction: column;
            gap: 0.25rem;
            align-items: flex-start;
        }

        .about_story_meta_item .about_story_mono {
            font-size: 0.72rem;
        }

        .about_story_meta_item p {
            font-size: 0.85rem;
            line-height: 1.6;
        }
    }

    /* ================================================================
   Extra Small Devices - Below 375px
================================================================ */
    @media (max-width: 374px) {

        .about_story_section {
            padding: 40px 0;
        }

        .about_story_media {
            max-width: 270px;
        }

        .about_story_media_frame {
            inset: 7px;
        }

        .about_story_tag {
            bottom: 8px;
            left: 8px;
            padding: 0.45rem 0.65rem;
        }

        .about_story_tag-year {
            font-size: 0.85rem;
        }

        .about_story_meta_item p {
            font-size: 0.82rem;
        }
    }

    /* =====================================================================
             2. PHILOSOPHY
===================================================================== */

    .about_philosophy_section {
        position: relative;
        overflow: hidden;
        background: linear-gradient(10deg, rgb(0, 0, 0), #000000);
        margin: -90px 0;
        margin-top: -90px;
    }

    .about_philosophy_right {
        position: relative;
        padding: 70px 8% 70px 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
    }

    /* ========== ZIG-ZAG ITEM ========== */

    .about_philosophy_zig_item {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
    }

    /* LEFT POSITION */

    .about_philosophy_zig_left {
        align-self: flex-start;
    }

    /* RIGHT POSITION */

    .about_philosophy_zig_right {
        align-self: flex-end;
    }

    /* =========== ROUND CIRCLE ========== */

    .about_philosophy_zig_circle {
        flex-shrink: 0;
        width: 150px;
        height: 150px;
        overflow: hidden;
        border-radius: 50%;
        border: 1px solid #107e64;
        background:
            radial-gradient(circle at center,
                rgba(16, 126, 100, .08),
                rgba(16, 126, 100, .01) 65%);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        transition:
            transform .5s ease,
            background .5s ease,
            border-color .5s ease;
    }

    /* INNER CIRCLE */

    .about_philosophy_zig_circle::before {
        content: "";
        position: absolute;
        inset: 10px;
        border-radius: 50%;
        border: 1px dashed rgb(234, 240, 238);
        transition: transform .5s ease;
    }

    /* NUMBER */

    .about_philosophy_zig_circle span {
        position: relative;
        z-index: 2;
        color: #107e64;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 2px;
    }

    /* HOVER */

    .about_philosophy_zig_item:hover .about_philosophy_zig_circle {
        transform: scale(1.08);
        background: #107e64;
        border-color: #c8a45d;
    }

    .about_philosophy_zig_item:hover .about_philosophy_zig_circle::before {
        transform: rotate(180deg);
    }

    .about_philosophy_zig_item:hover .about_philosophy_zig_circle span {
        color: #ffffff;
    }

    /* ========== CONTENT NEXT TO CIRCLE ========== */
    .about_philosophy_zig_circle img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .about_philosophy_zig_label {
        display: block;
        margin-bottom: 7px;
        color: #c8a45d;
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .about_philosophy_zig_content h3 {
        margin: 0 0 8px;
        color: #123c32;
        font-size: 28px;
        font-weight: 600;
        letter-spacing: -1px;
    }

    .about_philosophy_zig_content p {
        margin: 0;
        color: #6c7772;
        font-size: 13px;
        line-height: 1.7;
    }

    .about_philosophy_zig-zag {
        margin-left: 200px;
    }

    /* ========== ZIG-ZAG CONNECTING LINE ============ */

    .about_philosophy_zig_line {
        position: absolute;
        top: 150px;
        bottom: 150px;
        left: 50%;
        width: 1px;
    }

    /* ===== LEFT GREEN AREA ======= */

    .about_philosophy_content {
        position: relative;
        z-index: 2;
        height: 100%;
        padding: 90px 13% 90px 10%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #f7f7f7;
        background: #107e64;

        clip-path: polygon(0 0,
                100% 0,
                100% 50%,
                100% 100%,
                0 100%);

        background-image:
            linear-gradient(to right,
                rgba(5, 43, 34, 0.85) 0%,
                rgba(8, 65, 52, 0.85) 100%,
                rgba(253, 246, 246, 0.9) 100%,
                rgba(253, 246, 246, 0.9) 100%),
            url("image/philosophy-bg-img.jpeg");

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    /* ===== SMALL HEADING ===== */

    .about_philosophy_heading {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 25px;
        color: #c8a45d;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 4px;
    }

    .about_philosophy_line {
        width: 38px;
        height: 1px;
        background: #c8a45d;
    }

    /* ===== PHILOSOPHY ITEMS ===== */

    .about_philosophy_items {
        max-width: 600px;
        border-top: 1px solid rgba(255, 255, 255, .2);
    }

    .about_philosophy_item {
        display: flex;
        gap: 20px;
        padding: 22px 0;
        border-bottom: 1px solid rgba(255, 255, 255, .2);
        transition: .4s ease;
    }

    .about_philosophy_item:hover {
        padding-left: 12px;
    }

    /* NUMBER */

    .about_philosophy_number {
        min-width: 35px;
        color: #c8a45d;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
    }

    /* TITLE */

    .about_philosophy_item h3 {
        margin: 0 0 5px;
        font-size: 20px;
        font-weight: 600;
    }

    /* TEXT */

    .about_philosophy_item p {
        margin: 0;
        max-width: 450px;
        color: rgba(255, 255, 255, .62);
        font-size: 13px;
        line-height: 1.7;
    }


    /* =====================================================================
   RESPONSIVE MEDIA QUERIES
===================================================================== */


    /* ================================================================
   LARGE DESKTOP - 1400px+
================================================================ */

    @media (min-width: 1400px) {

        .about_philosophy_right {
            min-height: 760px;
            padding: 80px 9% 80px 6%;
        }

        .about_philosophy_zig_item {
            width: 72%;
            gap: 35px;
            margin: 28px 0;
        }

        .about_philosophy_zig_circle {
            width: 160px;
            height: 160px;
        }

        .about_philosophy_zig_content {
            max-width: 320px;
        }

        .about_philosophy_zig_content h3 {
            font-size: 30px;
        }

        .about_philosophy_content {
            padding: 100px 14% 100px 11%;
        }
    }


    /* ================================================================
   DESKTOP - 1200px to 1399px
================================================================ */

    @media (max-width: 1399px) {

        .about_philosophy_right {
            min-height: 700px;
            padding: 70px 7% 70px 4%;
        }

        .about_philosophy_zig_item {
            width: 78%;
            gap: 25px;
        }

        .about_philosophy_zig_circle {
            width: 140px;
            height: 140px;
        }

        .about_philosophy_zig_content {
            max-width: 270px;
        }

        .about_philosophy_zig_content h3 {
            font-size: 26px;
        }

        .about_philosophy_content {
            padding: 80px 12% 80px 9%;
        }
    }


    /* ================================================================
   LAPTOP - 992px to 1199px
================================================================ */

    @media (max-width: 1199px) {

        .about_philosophy_section {
            margin: -60px 0;
            margin-top: -60px;
        }

        .about_philosophy_right {
            min-height: 650px;
            padding: 60px 5% 60px 3%;
        }

        .about_philosophy_zig_item {
            width: 82%;
            gap: 20px;
            margin: 20px 0;
        }

        .about_philosophy_zig_circle {
            width: 125px;
            height: 125px;
        }

        .about_philosophy_zig_circle::before {
            inset: 8px;
        }

        .about_philosophy_zig_circle span {
            font-size: 22px;
        }

        .about_philosophy_zig_content {
            max-width: 240px;
        }

        .about_philosophy_zig_label {
            font-size: 8px;
            letter-spacing: 1.5px;
        }

        .about_philosophy_zig_content h3 {
            font-size: 23px;
            letter-spacing: -.5px;
        }

        .about_philosophy_zig_content p {
            font-size: 12px;
            line-height: 1.6;
        }

        .about_philosophy_zig-zag {
            margin-left: 100px;
        }

        .about_philosophy_zig_line {
            top: 120px;
            bottom: 120px;
        }

        .about_philosophy_content {
            padding: 70px 10% 70px 8%;
        }

        .about_philosophy_heading {
            margin-bottom: 20px;
            letter-spacing: 3px;
        }

        .about_philosophy_item {
            gap: 15px;
            padding: 19px 0;
        }

        .about_philosophy_item h3 {
            font-size: 18px;
        }

        .about_philosophy_item p {
            font-size: 12px;
        }
    }


    /* ================================================================
   TABLET - 768px to 991px
================================================================ */

    @media (max-width: 991px) {

        .about_philosophy_section {
            margin: -40px 0;
            margin-top: -40px;
        }

        .about_philosophy_right {
            min-height: auto;
            padding: 60px 6% 70px;
        }

        .about_philosophy_zig_item {
            width: 80%;
            margin: 20px 0;
            gap: 22px;
        }

        .about_philosophy_zig_circle {
            width: 115px;
            height: 115px;
        }

        .about_philosophy_zig_circle::before {
            inset: 8px;
        }

        .about_philosophy_zig_circle span {
            font-size: 20px;
        }

        .about_philosophy_zig_content {
            max-width: 250px;
        }

        .about_philosophy_zig_content h3 {
            font-size: 22px;
        }

        .about_philosophy_zig_content p {
            font-size: 12px;
        }

        .about_philosophy_zig-zag {
            margin-left: 60px;
        }

        .about_philosophy_zig_line {
            display: none;
        }

        .about_philosophy_content {
            padding: 70px 10%;
            clip-path: none;
            background-position: center;
        }

        .about_philosophy_heading {
            margin-bottom: 22px;
        }

        .about_philosophy_items {
            max-width: 100%;
        }

        .about_philosophy_item {
            gap: 18px;
            padding: 20px 0;
        }

        .about_philosophy_item h3 {
            font-size: 19px;
        }

        .about_philosophy_item p {
            max-width: 100%;
            font-size: 13px;
        }
    }

    /* ================================================================
               LARGE MOBILE - 576px to 767px
        ================================================================ */

    @media (max-width: 767px) {

        .about_philosophy_section {
            margin: 0;
            margin-top: 0;
        }

        .about_philosophy_right {
            min-height: auto;
            padding: 50px 25px 55px;
        }

        /* Stack zig-zag items cleanly */

        .about_philosophy_zig_item,
        .about_philosophy_zig_left,
        .about_philosophy_zig_right {
            align-self: center;
            width: 100%;
            max-width: 500px;
        }

        .about_philosophy_zig_item {
            gap: 20px;
            margin: 18px 0;
        }

        .about_philosophy_zig_circle {
            width: 105px;
            height: 105px;
        }

        .about_philosophy_zig_circle::before {
            inset: 7px;
        }

        .about_philosophy_zig_circle span {
            font-size: 19px;
        }

        .about_philosophy_zig_content {
            max-width: none;
            flex: 1;
        }

        .about_philosophy_zig_content h3 {
            font-size: 21px;
            margin-bottom: 6px;
        }

        .about_philosophy_zig_content p {
            font-size: 12px;
            line-height: 1.65;
        }

        .about_philosophy_zig_label {
            font-size: 8px;
            margin-bottom: 5px;
        }

        .about_philosophy_zig-zag {
            margin-left: 0;
        }

        .about_philosophy_content {
            padding: 55px 25px 60px;
            clip-path: none;
        }

        .about_philosophy_heading {
            font-size: 11px;
            letter-spacing: 3px;
            gap: 10px;
            margin-bottom: 20px;
        }

        .about_philosophy_line {
            width: 30px;
        }

        .about_philosophy_item {
            gap: 14px;
            padding: 18px 0;
        }

        .about_philosophy_number {
            min-width: 30px;
            font-size: 11px;
        }

        .about_philosophy_item h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .about_philosophy_item p {
            font-size: 12px;
            line-height: 1.65;
        }

        .about_philosophy_item:hover {
            padding-left: 6px;
        }
    }


    /* ================================================================
   MOBILE - 480px to 575px
================================================================ */

    @media (max-width: 575px) {

        .about_philosophy_right {
            padding: 45px 20px 50px;
        }

        .about_philosophy_zig_item {
            max-width: 100%;
            gap: 16px;
            margin: 16px 0;
        }

        .about_philosophy_zig_circle {
            width: 90px;
            height: 90px;
        }

        .about_philosophy_zig_circle::before {
            inset: 6px;
        }

        .about_philosophy_zig_circle span {
            font-size: 17px;
            letter-spacing: 1px;
        }

        .about_philosophy_zig_content h3 {
            font-size: 19px;
        }

        .about_philosophy_zig_content p {
            font-size: 11.5px;
            line-height: 1.6;
        }

        .about_philosophy_zig_label {
            font-size: 7px;
            letter-spacing: 1.3px;
        }

        .about_philosophy_content {
            padding: 50px 20px 55px;
        }

        .about_philosophy_heading {
            font-size: 10px;
            letter-spacing: 2.5px;
            margin-bottom: 18px;
        }

        .about_philosophy_line {
            width: 25px;
        }

        .about_philosophy_item {
            gap: 12px;
            padding: 16px 0;
        }

        .about_philosophy_number {
            min-width: 28px;
            font-size: 10px;
            letter-spacing: 1.5px;
        }

        .about_philosophy_item h3 {
            font-size: 17px;
        }

        .about_philosophy_item p {
            font-size: 11.5px;
            line-height: 1.6;
        }
    }


    /* ================================================================
   SMALL MOBILE - 375px to 479px
================================================================ */

    @media (max-width: 479px) {

        .about_philosophy_right {
            padding: 40px 15px 45px;
        }

        .about_philosophy_zig_item {
            gap: 13px;
            margin: 14px 0;
        }

        .about_philosophy_zig_circle {
            width: 78px;
            height: 78px;
        }

        .about_philosophy_zig_circle::before {
            inset: 5px;
        }

        .about_philosophy_zig_circle span {
            font-size: 15px;
        }

        .about_philosophy_zig_content h3 {
            font-size: 17px;
            margin-bottom: 4px;
        }

        .about_philosophy_zig_content p {
            font-size: 10.5px;
            line-height: 1.55;
        }

        .about_philosophy_zig_label {
            font-size: 6.5px;
            letter-spacing: 1px;
        }

        .about_philosophy_content {
            padding: 45px 15px 50px;
        }

        .about_philosophy_heading {
            font-size: 9px;
            letter-spacing: 2px;
            gap: 8px;
        }

        .about_philosophy_line {
            width: 22px;
        }

        .about_philosophy_item {
            gap: 10px;
            padding: 15px 0;
        }

        .about_philosophy_number {
            min-width: 25px;
            font-size: 9px;
        }

        .about_philosophy_item h3 {
            font-size: 16px;
        }

        .about_philosophy_item p {
            font-size: 10.5px;
            line-height: 1.55;
        }

        .about_philosophy_item:hover {
            padding-left: 3px;
        }
    }


    /* ================================================================
   EXTRA SMALL - BELOW 375px
================================================================ */

    @media (max-width: 374px) {

        .about_philosophy_right {
            padding: 35px 12px 40px;
        }

        .about_philosophy_zig_item {
            gap: 10px;
            margin: 12px 0;
        }

        .about_philosophy_zig_circle {
            width: 68px;
            height: 68px;
        }

        .about_philosophy_zig_circle::before {
            inset: 5px;
        }

        .about_philosophy_zig_circle span {
            font-size: 14px;
        }

        .about_philosophy_zig_content h3 {
            font-size: 15px;
        }

        .about_philosophy_zig_content p {
            font-size: 10px;
            line-height: 1.5;
        }

        .about_philosophy_zig_label {
            font-size: 6px;
            letter-spacing: .8px;
        }

        .about_philosophy_content {
            padding: 40px 12px 45px;
        }

        .about_philosophy_heading {
            font-size: 8px;
            letter-spacing: 1.5px;
        }

        .about_philosophy_item {
            gap: 8px;
            padding: 13px 0;
        }

        .about_philosophy_number {
            min-width: 22px;
            font-size: 8px;
        }

        .about_philosophy_item h3 {
            font-size: 15px;
        }

        .about_philosophy_item p {
            font-size: 10px;
        }
    }

    /* ================================================================
   TOUCH DEVICES
   Remove hover movement on touch screens
================================================================ */

    @media (hover: none) and (pointer: coarse) {

        .about_philosophy_zig_item:hover .about_philosophy_zig_circle {
            transform: none;
        }

        .about_philosophy_item:hover {
            padding-left: 0;
        }
    }

/* =====================================================================
   3. WHY CHOOSE US
===================================================================== */
    .about_why_section {
        position: relative;
        width: 100%;
        padding: 130px 6%;
        overflow: hidden;
    }

    .about_why_section::before {
        content: "WHY";
        position: absolute;
        right: -40px;
        top: 30px;
        font-weight: 700;
        color: rgba(15, 139, 96, 0.281);
        pointer-events: none;
    }

    /* ======= container======= */
    .about_why_container {
        max-width: 1400px;
        margin: auto;
        display: grid;
        grid-template-columns: 0.85fr 1.15fr 1fr;
        gap: 70px;
        align-items: center;
    }

    /* ========INTRO======== */
    .about_why_intro {
        position: relative;
        z-index: 3;
    }

    .about_why_section_tag {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 28px;
        color: #c49a52;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 3px;
    }

    .about_why_section_tag span {
        width: 35px;
        height: 1px;
        background: #c49a52;
    }

    /* ===== BUTTON ========= */
    .home_hero_btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 22px;
        padding: 15px 18px 15px 24px;
        border-radius: 30px;
        color: #ffffff;
        background: var(--gold);
        text-decoration: none;
        font-size: 11px;
        letter-spacing: 1.5px;
        overflow: hidden;
        transition: .45s ease;
    }

    .home_hero_btn span,
    .home_hero_btn img {
        position: relative;
        z-index: 2;
    }

    .home_hero_btn img {
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-style: normal;
        transition: .4s ease;
    }

    .home_hero_btn::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 0;
        height: 100%;
        background: var(--gold-dark);
        transition: .45s ease;
    }

    .home_hero_btn:hover::before {
        width: 100%;
    }

    .home_hero_btn:hover img {
        transform: rotate(45deg);
    }

    /* ===== VISUAL IMAGE AREA ======== */
    .about_why_visual {
        position: relative;
        min-height: 650px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* ======== MAIN PHOTO ======== */
    .about_why_main_photo {
        position: relative;
        width: 72%;
        height: 560px;
        overflow: hidden;
        z-index: 2;
        border: 1px dashed white;
    }

    .about_why_main_photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 1.2s cubic-bezier(.2, .7, .2, 1);
    }

    .about_why_main_photo:hover img {
        transform: scale(1.08);
    }

    /* Dark overlay */
    .about_why_photo_overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent 45%, rgba(0, 0, 0, .55));
        pointer-events: none;
    }

    /* Image label */
    .about_why_photo_label {
        position: absolute;
        left: 28px;
        bottom: 25px;
        display: flex;
        flex-direction: column;
        color: #ffffff;
        z-index: 3;
    }

    .about_why_label small {
        font-size: 9px;
        letter-spacing: 3px;
        color: #d3ad68;
    }

    .about_why_photo_label strong {
        margin-top: 5px;
        font-family: Georgia, serif;
        font-size: 28px;
        font-weight: 400;
    }

    /* ===== FLOATING PHOTO ======== */
    .about_why_floating_photo {
        position: absolute;
        width: 180px;
        height: 220px;
        right: 0;
        bottom: 50px;
        z-index: 4;
        border: 8px solid #f7f8f5;
        overflow: hidden;
        box-shadow: 0 25px 60px rgba(0, 0, 0, .18);
        animation: vgFloat 5s ease-in-out infinite;
    }

    .about_why_floating_photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .8s ease;
    }

    .about_why_floating_photo:hover img {
        transform: scale(1.12);
    }

    .about_why_floating_photo span {
        position: absolute;
        right: 10px;
        top: 10px;
        color: #ffffff;
        font-size: 11px;
        letter-spacing: 2px;
    }

    @keyframes vgFloat {

        0%,
        100% {
            transform: translateY(0) rotate(2deg);
        }

        50% {
            transform: translateY(-18px) rotate(-2deg);
        }
    }

    /* ====== GOLD CIRCLE ========= */
    .about_why_gold_circle {
        position: absolute;
        width: 105px;
        height: 105px;
        left: 5%;
        top: 10%;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #c49a52;
        color: #ffffff;
        z-index: 5;
        transform: rotate(-10deg);
        box-shadow: 0 15px 40px rgba(196, 154, 82, .25);
        animation: vgRotate 12s linear infinite;
    }

    .about_why_gold_circle span,
    .about_why_gold_circle small {
        font-size: 8px;
        letter-spacing: 2px;
    }

    .about_why_gold_circle strong {
        font-family: Georgia, serif;
        font-size: 28px;
        font-weight: 400;
        margin: 3px 0;
    }

    @keyframes vgRotate {
        0% {
            transform: rotate(-10deg);
        }

        50% {
            transform: rotate(5deg);
        }

        100% {
            transform: rotate(-10deg);
        }
    }

    /* ====== VERTICAL TEXT ============ */
    .about_why_vertical_text {
        position: absolute;
        left: -5px;
        top: 50%;
        transform: translateY(-50%) rotate(-90deg);
        color: #0b9162;
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 4px;
        opacity: .65;
        white-space: nowrap;
    }

    /* ==== BENEFITS========= */
    .about_why_benefits {
        position: relative;
        z-index: 3;
    }

    .about_why_benefit {
        position: relative;
        display: grid;
        grid-template-columns: 35px 45px 1fr 30px;
        align-items: center;
        gap: 15px;
        padding: 27px 0;
        border-bottom: 1px solid rgba(16, 60, 48, .14);
        cursor: pointer;
        transition: .45s ease;
    }

    .about_why_benefit:first-child {
        border-top: 1px solid rgba(16, 60, 48, .14);
    }

    .about_why_benefit::before {
        content: "";
        position: absolute;
        left: -20px;
        top: 0;
        width: 3px;
        height: 0;
        background: #0f8b5f;
        transition: .4s ease;
    }

    .about_why_benefit:hover::before {
        height: 100%;
    }

    .about_why_benefit:hover {
        padding-left: 15px;
    }

    /* Number */
    .about_why_benefit_number {
        color: #c49a52;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    /* Icon */
    .about_why_benefit_icon {
        width: 40px;
        height: 40px;
        border: 1px solid rgba(15, 139, 95, .35);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0f8b5f;
        font-size: 18px;
        transition: .5s ease;
    }

    .about_why_benefit_icon img {
        width: 20px;
        height: 20px;
    }

    .about_why_benefit:hover .about_why_benefit_icon {
        background: #0f8b5f;
        color: #ffffff;
        transform: rotate(45deg) scale(1.08);
    }

    /* Content */
    .about_why_benefit_content h3 {
        margin: 0 0 7px;
        color: #102f27;
        font-family: Georgia, serif;
        font-size: 22px;
        font-weight: 500;
    }

    .about_why_benefit_content p {
        margin: 0;
        color: #7a8581;
        font-size: 12px;
        line-height: 1.7;
    }

    /* Arrow */
    .about_why_benefit_arrow {
        color: #c49a52;
        font-size: 20px;
        transition: .4s ease;
    }

    .about_why_benefit:hover .about_why_benefit_arrow {
        transform: translate(5px, -5px) rotate(10deg);
    }

    /* =====================================================================
   RESPONSIVE MEDIA QUERIES
===================================================================== */

    /* ----- Large desktops / wide screens (≤1440px) ----- */
    @media (max-width: 1440px) {
        .about_why_container {
            gap: 45px;
        }

        .about_why_floating_photo {
            width: 160px;
            height: 200px;
        }
    }

    /* ----- Small laptops / large tablets (≤1200px) ----- */
    @media (max-width: 1200px) {
        .about_why_section {
            padding: 100px 5%;
        }

        .about_why_container {
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        /* Move benefits list under intro/visual since 3rd column collapses */
        .about_why_benefits {
            grid-column: 1 / -1;
            margin-top: 40px;
        }

        .about_why_visual {
            min-height: 550px;
        }

        .about_why_main_photo {
            height: 480px;
        }
    }

    /* ----- Tablets (≤992px) ----- */
    @media (max-width: 992px) {
        .about_why_container {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .about_why_intro,
        .about_why_visual,
        .about_why_benefits {
            grid-column: auto;
        }

        .vg-why-description {
            max-width: 100%;
        }

        .about_why_visual {
            min-height: 500px;
            order: 2;
        }

        .about_why_benefits {
            order: 3;
            margin-top: 0;
        }

        .about_why_main_photo {
            width: 85%;
            height: 460px;
            margin: 0 auto;
        }

        .about_why_vertical_text {
            display: none;
        }

        .about_why_section::before {
            font-size: clamp(120px, 22vw, 260px);
            right: -30px;
            top: 15px;
        }
    }

    /* ----- Small tablets / large phones (≤768px) ----- */
    @media (max-width: 768px) {
        .about_why_section {
            padding: 80px 5%;
        }

        .about_why_intro h2 {
            font-size: clamp(38px, 8vw, 56px);
            letter-spacing: -2px;
        }

        .about_why_main_photo {
            width: 100%;
            height: 400px;
        }

        .about_why_floating_photo {
            width: 130px;
            height: 160px;
            bottom: 25px;
        }

        .about_why_gold_circle {
            width: 85px;
            height: 85px;
            left: 3%;
            top: 6%;
        }

        .about_why_gold_circle strong {
            font-size: 22px;
        }

        .about_why_benefit {
            grid-template-columns: 28px 38px 1fr 24px;
            gap: 10px;
            padding: 20px 0;
        }

        .about_why_benefit_content h3 {
            font-size: 19px;
        }

        .about_why_benefit_icon {
            width: 34px;
            height: 34px;
            font-size: 15px;
        }
    }

    /* ----- Mobile phones (≤576px) ----- */
    @media (max-width: 576px) {
        .about_why_section {
            padding: 60px 5%;
        }

        .about_why_section::before {
            font-size: clamp(80px, 26vw, 160px);
            right: -15px;
            top: 8px;
        }

        .about_why_intro h2 {
            font-size: clamp(32px, 9vw, 44px);
            letter-spacing: -1px;
        }

        .about_why_visual {
            min-height: 380px;
        }

        .about_why_main_photo {
            height: 300px;
            border-width: 1px;
        }

        .about_why_floating_photo {
            width: 100px;
            height: 130px;
            border-width: 5px;
            right: 5%;
            bottom: 15px;
        }

        .about_why_photo_label strong {
            font-size: 20px;
        }

        .about_why_gold_circle {
            width: 70px;
            height: 70px;
        }

        .about_why_gold_circle strong {
            font-size: 18px;
        }

        .home_hero_btn {
            padding: 12px 14px 12px 18px;
            font-size: 10px;
            gap: 14px;
        }

        .home_hero_btn img {
            width: 28px;
            height: 28px;
        }

        .about_why_benefit {
            grid-template-columns: 1fr;
            text-align: left;
            gap: 8px;
            padding: 18px 0;
        }

        .about_why_benefit_number {
            order: -1;
        }

        .about_why_benefit_arrow {
            display: none;
        }
    }

    /* ----- Extra small phones (≤400px) ----- */
    @media (max-width: 400px) {
        .about_why_section {
            padding: 50px 4%;
        }

        .about_why_intro h2 {
            font-size: clamp(28px, 10vw, 36px);
        }

        .about_why_main_photo {
            height: 240px;
        }

        .about_why_floating_photo {
            width: 85px;
            height: 110px;
        }

        .about_why_gold_circle {
            width: 60px;
            height: 60px;
        }

        .about_why_gold_circle strong {
            font-size: 15px;
            margin: 1px 0;
        }

        .about_why_gold_circle span,
        .about_why_gold_circle small {
            font-size: 7px;
        }

        .about_why_benefit_content h3 {
            font-size: 17px;
        }

        .about_why_benefit_content p {
            font-size: 11px;
        }
    }

    /* =====================================================================
                                4. GALLERY
    ===================================================================== */

    .about_gallary {
        position: relative;
        width: 100%;
        min-height: 70vh;
        height: auto;
        margin: 0;
        
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        overflow: hidden;

        /* Base carousel sizing tokens - overridden per breakpoint below */
        --card-width: 300px;
        --card-height: 400px;
        --card-gap: 260px;
        --nav-bottom-offset: 40px;
    }
    .about_gallary_track {
        position: relative;
        width: 100%;
        min-height: 70vh;
        height: 70vh;
    }

    .about_gallary_slide {
        width: var(--card-width);
        height: var(--card-height);
        position: absolute;
        top: 50%;
        transform: translate(0, -50%);
        border-radius: 22px;
        background-position: 50% 50%;
        background-size: cover;
        display: inline-block;
        overflow: hidden;
        transition: left 0.6s cubic-bezier(0.65, 0, 0.35, 1),
            width 0.6s cubic-bezier(0.65, 0, 0.35, 1),
            height 0.6s cubic-bezier(0.65, 0, 0.35, 1),
            border-radius 0.6s ease,
            opacity 0.6s ease;
    }

    /* Dark overlay for readability, on every slide */
    .about_gallary_slide_overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg,
                var(--color-overlay-soft) 0%,
                var(--color-overlay-soft) 45%,
                var(--color-overlay-strong) 100%);
        pointer-events: none;
    }

    /* Slots 1 & 2: full-bleed featured background (slot 2 is the active, visible one) */
    .about_gallary_slide:nth-child(1),
    .about_gallary_slide:nth-child(2) {
        top: 0;
        left: 0;
        transform: translate(0, 0);
        border-radius: 0;
        width: 100%;
        height: 100%;
    }

    .about_gallary_slide:nth-child(2) .about_gallary_slide_overlay {
        background: linear-gradient(90deg,
                var(--color-overlay-strong) 0%,
                rgba(10, 8, 6, 0.35) 45%,
                rgba(10, 8, 6, 0.15) 100%);
    }

    /* Slots 3-6: four preview cards visible at once, cascading to the right */
    .about_gallary_slide:nth-child(3) {
        left: 50%;
    }

    .about_gallary_slide:nth-child(4) {
        left: calc(50% + var(--card-gap));
    }

    .about_gallary_slide:nth-child(5) {
        left: calc(50% + (var(--card-gap) * 2));
    }

    .about_gallary_slide:nth-child(6) {
        left: calc(50% + (var(--card-gap) * 3));
    }

    .about_gallary_slide:nth-child(n + 7) {
        left: calc(50% + (var(--card-gap) * 4));
        opacity: 0;
    }

    /* ==========================================================
   SLIDE CONTENT (title / description / CTA)
   ========================================================== */

    .about_gallary_slide_content {
        position: absolute;
        top: 50%;
        left: 100px;
        width: 340px;
        max-width: calc(100% - 60px);
        text-align: left;
        color: var(--color-text);
        transform: translate(0, -50%);
        display: none;
        z-index: 2;
    }

    .about_gallary_slide:nth-child(2) .about_gallary_slide_content {
        display: block;
    }

    .about_gallary_slide_eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--gold);
        opacity: 0;
        animation: slide-content-in 0.8s ease-in-out 1 forwards;
    }

    .about_gallary_slide_eyebrow::before {
        content: "";
        width: 26px;
        height: 2px;
        background: var(--gold);
        display: inline-block;
    }

    .about_gallary_slide_title {
        font-size: 44px;
        text-transform: uppercase;
        font-weight: 700;
        color:white;
        letter-spacing: 0.01em;
        margin-top: 10px;
        opacity: 0;
        line-height: 1.15;
        animation: slide-content-in 0.9s ease-in-out 0.12s 1 forwards;
    }

    .about_gallary_slide_description {
        font-size: 16px;
        line-height: 1.6;
        color: var(--cream);
        margin-top: 14px;
        margin-bottom: 26px;
        opacity: 0;
        animation: slide-content-in 0.9s ease-in-out 0.3s 1 forwards;
    }

    .about_gallary_slide_cta {
        padding: 13px 28px;
        border: none;
        border-radius: 999px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.03em;
        text-transform: uppercase;
        color: var(--white);
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
        box-shadow: 0 10px 24px rgba(255, 106, 26, 0.35);
        opacity: 0;
        animation: slide-content-in 0.9s ease-in-out 0.48s 1 forwards;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .about_gallary_slide_cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 14px 30px rgba(255, 106, 26, 0.48);
    }

    @keyframes slide-content-in {
        from {
            opacity: 0;
            transform: translate(0, 40px);
            filter: blur(14px);
        }

        to {
            opacity: 1;
            transform: translate(0);
            filter: blur(0);
        }
    }

    /* ==========================================================
   NAVIGATION — bottom center, orange themed
   ========================================================== */

    .about_gallary_slider_nav {
        position: absolute;
        bottom: var(--nav-bottom-offset);
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        align-items: center;
        gap: 22px;
        z-index: 10;
    }

    .about_gallary_nav_btn {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.25);
        cursor: pointer;
        background: var(--gold);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        position: relative;
        transition: background 0.3s ease, border-color 0.3s ease,
            transform 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
    }

    .about_gallary_nav_btn::after {
        content: "";
        position: absolute;
        inset: -6px;
        border-radius: 50%;
        border: 1.5px solid var(--gold);
        opacity: 0;
        transform: scale(0.85);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .about_gallary_nav_btn:hover {
        background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
        border-color: transparent;
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 12px 26px rgba(255, 106, 26, 0.45);
    }

    .about_gallary_nav_btn:hover::after {
        opacity: 1;
        transform: scale(1);
    }

    .about_gallary_nav_btn:active {
        transform: translateY(-1px) scale(0.95);
    }

    .about_gallary_nav_btn i {
        transition: transform 0.3s ease;
    }

    .about_gallary_nav_btn.about_gallary_nav_prev:hover i {
        transform: translateX(-3px);
    }

    .about_gallary_nav_btn.about_gallary_nav_next:hover i {
        transform: translateX(3px);
    }

    /* gentle idle pulse so the controls read as interactive */
    .about_gallary_nav_btn {
        animation: nav-pulse 3.2s ease-in-out infinite;
    }

    .about_gallary_nav_btn.about_gallary_nav_next {
        animation-delay: 0.4s;
    }

    @keyframes nav-pulse {

        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(255, 106, 26, 0);
        }

        50% {
            box-shadow: 0 0 0 8px rgba(255, 106, 26, 0.08);
        }
    }
/* =====================================================================
                  RESPONSIVE MEDIA QUERIES
===================================================================== */

    /* ----- Large desktops / wide screens (≤1440px) ----- */
    @media (max-width: 1440px) {
        .about_gallary {
            --card-width: 260px;
            --card-height: 360px;
            --card-gap: 220px;
        }

        .about_gallary_slide_title {
            font-size: 38px;
        }
    }

    /* ----- Small laptops / large tablets (≤1200px) ----- */
    @media (max-width: 1200px) {
        .about_gallary {
            --card-width: 220px;
            --card-height: 320px;
            --card-gap: 180px;
        }

        .about_gallary_slide_content {
            left: 60px;
            width: 300px;
        }

        .about_gallary_slide_title {
            font-size: 32px;
        }

        .about_gallary_slide_description {
            font-size: 15px;
            margin-bottom: 20px;
        }
    }

    /* ----- Tablets (≤992px) ----- */
    @media (max-width: 992px) {
        .about_gallary_track {
            height: 60vh;
            min-height: 60vh;
        }

        /* Not enough room for four cascading preview cards - keep just one
       peeking in so the carousel still reads as a slider */
        .about_gallary {
            --card-width: 160px;
            --card-height: 240px;
            --card-gap: 130px;
        }

        .about_gallary_slide:nth-child(n + 5) {
            opacity: 0;
        }

        .about_gallary_slide_content {
            left: 40px;
            width: 280px;
            max-width: calc(100% - 80px);
        }

        .about_gallary_slide_title {
            font-size: 28px;
        }

        .about_gallary_nav_btn {
            width: 48px;
            height: 48px;
            font-size: 18px;
        }
    }

    /* ----- Small tablets / large phones (≤768px) ----- */
    @media (max-width: 768px) {
        .about_gallary_text {
            margin-top: -60px;
            padding: 0 5%;
            text-align: center;
        }

        .about_gallary_track {
            height: 55vh;
            min-height: 55vh;
        }

        /* Hide the cascading preview cards entirely - only the active
       full-bleed slide (slot 2) remains visible on small screens */
        .about_gallary {
            --card-width: 0px;
            --card-height: 0px;
            --card-gap: 0px;
        }

        .about_gallary_slide:nth-child(n + 3) {
            opacity: 0;
            pointer-events: none;
        }

        .about_gallary_slide_content {
            left: 24px;
            right: 24px;
            width: auto;
            max-width: none;
        }

        .about_gallary_slide_title {
            font-size: 24px;
        }

        .about_gallary_slide_description {
            font-size: 14px;
            margin-top: 10px;
            margin-bottom: 18px;
        }

        .about_gallary_slide_cta {
            padding: 11px 22px;
            font-size: 13px;
        }

        .about_gallary_slider_nav {
            gap: 16px;
            bottom: 24px;
        }
    }

    /* ----- Mobile phones (≤576px) ----- */
    @media (max-width: 576px) {
        .about_gallary_track {
            height: 50vh;
            min-height: 420px;
        }

        .about_gallary_slide_eyebrow {
            font-size: 10px;
        }

        .about_gallary_slide_title {
            font-size: 20px;
            margin-top: 6px;
        }

        .about_gallary_slide_description {
            font-size: 13px;
            line-height: 1.5;
        }

        .about_gallary_nav_btn {
            width: 42px;
            height: 42px;
            font-size: 16px;
        }

        .about_gallary_slider_nav {
            gap: 12px;
            bottom: 16px;
        }
    }

    /* ----- Extra small phones (≤400px) ----- */
    @media (max-width: 400px) {
        .about_gallary_track {
            min-height: 380px;
        }

        .about_gallary_slide_content {
            left: 16px;
            right: 16px;
        }

        .about_gallary_slide_title {
            font-size: 18px;
        }

        .about_gallary_slide_description {
            font-size: 12px;
            margin-bottom: 14px;
        }

        .about_gallary_slide_cta {
            padding: 9px 18px;
            font-size: 12px;
        }
    }
</style>



<!-- ─── About Header ─── -->
<section class="saloon-page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(assets/img/about/about-header.jpeg);">
    <div class="saloon-page-header-content">
        <h4>OUR SALON</h4>
        <h1>Premium Men’s Salon & Beauty Care Experts</h1>
    </div>
</section>
<main>
    <!-- =========================================================
                             1. OUR STORY
    ========================================================= -->
    <section class="about_story_section" id="story">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="about_story_media" data-reveal="scale">
                        <img src="assets/img/about/about img 1.png" alt="salon img">
                        <div class="about_story_media_frame"></div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="section-head">
                        <p class="home_section_eyebrow"style="color: #da9a33"> Our Story</p>
                        <h2 class="home_section_title">The Studio Behind <em>the Craft</em></h2>
                        <p class="home_section_sub">Visual Green Studio was created with a simple vision — to redefine the modern men's salon </p>
                    </div>
                    <p class="about_Story_body-text" data-reveal data-reveal-delay="2">
                        We believe grooming is more than a haircut; it is an expression of confidence,
                        personality, and individuality.
                        From precision haircuts and beard styling to complete grooming experiences, our approach
                        combines professional techniques with a relaxed and sophisticated atmosphere.
                    </p>
                    <div class="about_story_meta" data-reveal data-reveal-delay="3">
                        <div class="about_story_meta_item">
                            <span class="about_story_mono">01</span>
                            <p>Precision technique, refined over thousands of cuts.</p>
                        </div>
                        <div class="about_story_meta_item">
                            <span class="about_story_mono">02</span>
                            <p>An atmosphere built for focus, comfort and calm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
     2. OUR PHILOSOPHY
    ========================================================= -->
    <section class="about_philosophy_section">
        <div class="container_fluid">
            <div class="container_philosopy">
                <div class="row">
                    <div class="col-6">
                        <div class="about_philosophy_content">
                            <div class="section-head">
                                <p class="home_section_eyebrow"style="color: #da9a33"> OUR PHILOSOPHY</p>
                                <h2 class="home_section_title">Grooming with<em>Purpose</em></h2>
                                <p class="home_section_sub">At Visual Green Studio, we believe grooming
                                    is more than simply looking good. It is about
                                    confidence, individuality and feeling your best</p>
                            </div>
                            <!-- PHILOSOPHY ITEMS -->
                            <div class="about_philosophy_items">
                                <div class="about_philosophy_item">
                                    <div class="about_philosophy_number"> 01</div>
                                    <div>
                                        <h3>Precision</h3>
                                        <p>
                                            Every detail matters. Our approach
                                            combines professional technique,
                                            patience and attention to detail.
                                        </p>
                                    </div>
                                </div>
                                <div class="about_philosophy_item">
                                    <div class="about_philosophy_number">02</div>
                                    <div>
                                        <h3>Individuality</h3>
                                        <p>
                                            Your style should be yours. We create
                                            grooming experiences that reflect your
                                            personality and lifestyle.
                                        </p>
                                    </div>
                                </div>
                                <div class="about_philosophy_item">
                                    <div class="about_philosophy_number">03</div>
                                    <div>
                                        <h3>Confidence</h3>
                                        <p>
                                            Our goal is simple — help you leave
                                            feeling refreshed, confident and ready.
                                        </p>
                                    </div>
                                </div>
                                <div class="about_philosophy_item">
                                    <div class="about_philosophy_number">04</div>
                                    <div>
                                        <h3>care</h3>
                                        <p>
                                            we care for you and you hair.
                                            hygiene comfort and premium
                                            products are always our priority
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RIGHT WHITE AREA -->
                    <div class="col-6">
                        <div class="about_philosophy_right">
                            <!-- 01 -->
                            <div class="about_philosophy_zig_item about_philosophy_zig_left">
                                <div class="about_philosophy_zig_circle">
                                    <img src="assets/img/about/about-product-img.jpeg" alt="">
                                </div>
                                <div class="about_philosophy_zig_content">
                                    <span class="about_philosophy_zig_label">THE FIRST PRINCIPLE</span>
                                    <h3>Precision</h3>
                                    <p>
                                        Every detail matters. We combine professional
                                        technique with patience and attention to detail.
                                    </p>
                                </div>
                            </div>
                            <!-- 02 -->
                            <div class="about_philosophy_zig_item about_philosophy_zig_right">
                                <div class="about_philosophy_zig_circle">
                                    <img src="assets/img/about/about-philosophy-bg-img.jpeg" alt="">
                                </div>
                                <div class="about_philosophy_zig_content">
                                    <span class="about_philosophy_zig_label">THE SECOND PRINCIPLE</span>
                                    <h3>Individuality</h3>
                                    <p>
                                        Your style should be yours. Every grooming
                                        experience is designed around you.
                                    </p>
                                </div>
                            </div>
                            <!-- 03 -->
                            <div class="about_philosophy_zig_item about_philosophy_zig_left">
                                <div class="about_philosophy_zig_circle">
                                    <img src="assets/img/about/about-philosophy-confident.jpeg" alt="">
                                </div>
                                <div class="about_philosophy_zig_content">
                                    <span class="about_philosophy_zig_label">THE THIRD PRINCIPLE</span>
                                    <h3>Confidence</h3>
                                    <p>
                                        Great grooming is about more than appearance.
                                        It is about leaving confident and refreshed.
                                    </p>
                                </div>
                            </div>
                            <!-- 04 -->
                            <div class="about_philosophy_zig_item about_philosophy_zig_right">
                                <div class="about_philosophy_zig_circle">
                                    <img src="assets/img/about/about-product-img.jpeg" alt="">
                                </div>
                                <div class="about_philosophy_zig_content">
                                    <span class="about_philosophy_zig_label">THE FOURTH PRINCIPLE</span>
                                    <h3>Care</h3>
                                    <p>
                                        We focus on cleanliness, quality products and
                                        gentle attention to ensure every visit feels fresh.
                                    </p>
                                </div>
                            </div>
                            <!-- CONNECTING LINE -->
                            <div class="about_philosophy_zig_line"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- =========================================================
     3. WHY CHOOSE VISUAL GREEN STUDIO
    ========================================================= -->
    <section class="about_why_section">
        <div class="about_why_container">
            <!-- ================= LEFT CONTENT ================= -->
            <div class="section-head">
                <div class="home_section_eyebrow"style="color: #da9a33"> WHY CHOOSE US </div>
                <h2 class="home_section_title">More Than<em>Grooming.</em></h2>
                <p class="home_section_sub">
                    At Visual Green Studio, every visit is designed around
                    precision, personality and confidence. We combine modern
                    grooming techniques with a premium experience that makes
                    you feel your best.
                </p>
                <a href="#contact" class="home_hero_btn">
                    <span>Experience The Difference</span>
                    <img src="assets/img/about/about-icon-scissor.png" alt="scisor">
                </a>
            </div>
            <!-- ================= IMAGE AREA ================= -->
            <div class="about_why_visual">
                <!-- Decorative vertical text -->
                <div class="about_why_vertical_text">VISUAL GREEN STUDIO</div>
                <!-- Main Image -->
                <div class="about_why_main_photo">
                    <img src="assets/img/about/about-why.jpeg" alt="Visual Green Studio Grooming">
                    <div class="about_why_photo_overlay"></div>
                    <div class="about_why_photo_label">
                        <small>THE VISUAL GREEN</small>
                        <strong>EXPERIENCE</strong>
                    </div>
                </div>
                <!-- Floating Image -->
                <div class="about_why_floating_photo">
                    <img src="assets/img/about/Artboard 1@4x (1).png" alt="Premium grooming experience">
                    <span>01</span>
                </div>
                <!-- Gold Circle -->
                <div class="about_why_gold_circle">
                    <span>EST.</span>
                    <strong>VG</strong>
                    <small>STUDIO</small>
                </div>
            </div>
            <!-- ================= BENEFITS ================= -->
            <div class="about_why_benefits">
                <!-- Benefit 01 -->
                <div class="about_why_benefit">
                    <div class="about_why_benefit_number">01</div>
                    <div class="about_why_benefit_icon">
                        <img src="assets/img/about/about-icon-scissor.png" alt="scissor">
                    </div>
                    <div class="about_why_benefit_content">
                        <h3>Expert Precision</h3>
                        <p>
                            Every cut, trim and finish is handled with
                            professional technique and attention to detail.
                        </p>
                    </div>
                    <div class="about_why_benefit_arrow">↗</div>
                </div>
                <!-- Benefit 02 -->
                <div class="about_why_benefit">
                    <div class="about_why_benefit_number">02</div>
                    <div class="about_why_benefit_icon">
                        <img src="assets/img/about/about-icon-drimmer.png" alt="hair drimmer">
                    </div>
                    <div class="about_why_benefit_content">
                        <h3>Personal Style</h3>
                        <p>
                            We understand that your style is unique.
                            Every grooming experience is tailored to you.
                        </p>
                    </div>
                    <div class="about_why_benefit_arrow">↗</div>
                </div>
                <!-- Benefit 03 -->
                <div class="about_why_benefit">
                    <div class="about_why_benefit_number">03</div>
                    <div class="about_why_benefit_icon">
                        <img src="assets/img/about/about-icon-chair.png" alt="salon chair">
                    </div>
                    <div class="about_why_benefit_content">
                        <h3>Premium Comfort</h3>
                        <p>
                            Enjoy a clean, relaxing and sophisticated
                            environment where every detail matters.
                        </p>
                    </div>
                    <div class="about_why_benefit_arrow">↗</div>
                </div>
                <!-- Benefit 04 -->
                <div class="about_why_benefit">
                    <div class="about_why_benefit_number">04</div>
                    <div class="about_why_benefit_icon">
                        <img src="assets/img/about/about-icon-hair-dryer.png" alt="hair dryer">
                    </div>
                    <div class="about_why_benefit_content">
                        <h3>Quality Products</h3>
                        <p>
                            We carefully select professional grooming
                            products to deliver a refined finish.
                        </p>
                    </div>
                    <div class="about_why_benefit_arrow">↗</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
     4. GALLERY CAROUSEL
    ========================================================= -->
    <section class="about_gallary">
        <div class="about_gallary_text"></div>
        <div class="about_gallary_track">
            <article class="about_gallary_slide" style="background-image: url(assets/img/about/about-gallary1.jpg);">
                <div class="about_gallary_slide_overlay"></div>
                <div class="about_gallary_slide_content">
                    <span class="about_gallary_slide_eyebrow" style="color: #da9a33">Modern Haircuts, Made for You</span>
                    <h2 class="about_gallary_slide_title">Cut with Precision. Styled with Confidence.</h2>
                    <p class="about_gallary_slide_description">Your hairstyle is more than just a haircut — it is part
                        of
                        your personality and confidence. At Visual Green, we create modern, stylish, and
                        personalized
                        haircuts designed to complement your face shape, lifestyle, and individual style.
                    </p>
                    <button class="about_gallary_slide_cta" type="button">See More</button>
                </div>
            </article>
            <article class="about_gallary_slide" style="background-image: url(assets/img/about/about-gallaray6.jpg);">
                <div class="about_gallary_slide_overlay"></div>
                <div class="about_gallary_slide_content">
                    <span class="about_gallary_slide_eyebrow">Beard Styles Crafted for You </span>
                    <h2 class="about_gallary_slide_title">Shape Your Style. Define Your Confidence.</h2>
                    <p class="about_gallary_slide_description">A well-groomed beard can transform your entire look. At
                        Visual Green, our professional stylists shape and style your beard with precision, creating
                        a
                        clean and confident appearance that complements your face shape and personal style.</p>
                    <button class="about_gallary_slide_cta" type="button">See More</button>
                </div>
            </article>
            <article class="about_gallary_slide" style="background-image: url(assets/img/about/about-gallary-interior.jpeg);">
                <div class="about_gallary_slide_overlay"></div>
                <div class="about_gallary_slide_content">
                    <span class="about_gallary_slide_eyebrow">A Space Designed for Your Style</span>
                    <h2 class="about_gallary_slide_title">Relax. Refresh. Look Your Best.</h2>
                    <p class="about_gallary_slide_description">Step into a salon where comfort meets modern luxury.
                        Our
                        thoughtfully designed interior creates a relaxing atmosphere with stylish details, premium
                        seating, and a clean, welcoming environment. Every corner of Visual Green is designed to
                        make
                        your grooming experience comfortable, refreshing, and memorable.</p>
                    <button class="about_gallary_slide_cta" type="button">See More</button>
                </div>
            </article>
            <article class="about_gallary_slide" style="background-image: url(assets/img/about/about-gallary3.jpg);">
                <div class="about_gallary_slide_overlay"></div>
                <div class="about_gallary_slide_content">
                    <span class="about_gallary_slide_eyebrow">The Art of Styling</span>
                    <h2 class="about_gallary_slide_title">Your Vision. Our Expertise. One Perfect Style.</h2>
                    <p class="about_gallary_slide_description">Great style begins with understanding you. Our stylists
                        take the time to understand your preferences, face shape, hair type, and desired look before
                        creating your style. From the first consultation to the final finishing touch, every step is
                        handled with precision and creativity.</p>
                    <button class="about_gallary_slide_cta" type="button">See More</button>
                </div>
            </article>
            <article class="about_gallary_slide" style="background-image: url(assets/img/about/about-gallary7.jpg);">
                <div class="about_gallary_slide_overlay"></div>
                <div class="about_gallary_slide_content">
                    <span class="about_gallary_slide_eyebrow">Grooming with Precision </span>
                    <h2 class="about_gallary_slide_title">Precision in Every Detail. Confidence in Every Look.</h2>
                    <p class="about_gallary_slide_description">Professional grooming is all about the details. From a
                        clean haircut and precise beard shaping to finishing and styling, our experienced team
                        focuses
                        on creating a polished look that suits your personality. We combine modern techniques with
                        attention to detail for a fresh and confident appearance.</p>
                    <button class="about_gallary_slide_cta" type="button">See More</button>
                </div>
            </article>
            <article class="about_gallary_slide" style="background-image: url(assets/img/about/gallary-transformation-img.jpeg);">
                <div class="about_gallary_slide_overlay"></div>
                <div class="about_gallary_slide_content">
                    <span class="about_gallary_slide_eyebrow">Your Transformation Starts Here</span>
                    <h2 class="about_gallary_slide_title">New Look. New Energy. New You.</h2>
                    <p class="about_gallary_slide_description">A great transformation is more than simply changing
                        your
                        hairstyle — it's about discovering a look that makes you feel confident. Whether you're
                        looking
                        for a subtle refresh or a complete makeover, our team works with you to create a style that
                        feels natural, modern, and uniquely yours. Walk in with your everyday look and walk out with
                        renewed confidence.
                    </p>
                    <button class="about_gallary_slide_cta" type="button">See More</button>
                </div>
            </article>
        </div>
        <nav class="about_gallary_slider_nav" aria-label="about_gallary_Slide_navigation">
            <button class="about_gallary_nav_btn about_gallary_nav_prev" type="button" aria-label="Previous slide">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="about_gallary_nav_btn about_gallary_nav_next" type="button" aria-label="Next slide">
                <i class="bi bi-chevron-right"></i>
            </button>
        </nav>
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
    /*=============================
              Gallary Section
        =============================*/
    const nextBtn = document.querySelector('.about_gallary_nav_next');
    const prevBtn = document.querySelector('.about_gallary_nav_prev');
    const sliderTrack = document.querySelector('.about_gallary_track');

    if (!nextBtn || !prevBtn || !sliderTrack) {
        throw new Error('Gallery slider elements were not found.');
    }
    const slidesCount = sliderTrack.querySelectorAll('.about_gallary_slide').length;

    function refreshSlider() {
        const slides = sliderTrack.querySelectorAll('.about_gallary_slide');
        slides.forEach((slide, index) => {
            const content = slide.querySelector('.about_gallary_slide_content');
            if (content) {
                content.style.display = index === 1 ? 'block' : 'none';
            }
        });
    }
    nextBtn.addEventListener('click', function() {
        const slides = sliderTrack.querySelectorAll('.about_gallary_slide');
        if (slides.length > 1) {
            sliderTrack.appendChild(slides[0]);
            refreshSlider();
        }
    });

    prevBtn.addEventListener('click', function() {
        const slides = sliderTrack.querySelectorAll('.about_gallary_slide');
        if (slides.length > 1) {
            sliderTrack.prepend(slides[slides.length - 1]);
            refreshSlider();
        }
    });

    refreshSlider();
</script>
<?php include('include/footer.php'); ?>
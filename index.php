<?php include('include/header.php'); ?>

<style>
    /*================================================
        Home page Area CSS
    =================================================*/

    :root {
        --black: #14140f;
        --black-2: #f8f5ec;
        --black-3: #f4efe0;
        --gold: #a9782b;
        --gold-bright: #d9b370;
        --gold-dark: #7c5920;
        --gold-vibrant: #ffc94d;
        --green: #0e3d2c;
        --green-2: #145c3f;
        --green-bright: #1f9d68;
        --ivory: #14140f;
        --cream: #f8f5ec;
        --white: #ffffff;

        --text-muted: rgba(20, 20, 15, 0.62);

        --font-head: 'Playfair Display', serif;
        --font-body: 'Josefin Sans', sans-serif;

        --c-surface: #ffffff;
        --c-surface-alt: #f8f5ec;
        --c-track: #f0e9da;
        --c-emerald: #1f9d68;
        --c-emerald-light: #3fc088;
        --c-emerald-deep: #0a6244;
        --c-gold: #d9b370;
        --c-gold-light: #f0cd7e;
        --c-gold-dark: #b3872a;
        --c-heading: #182a22;
        --c-gray: #5c6b63;
        --c-card: #ffffff;

        --c-card-border: rgba(217, 179, 112, 0.35);
        --c-card-border-em: rgba(31, 157, 104, 0.3);
        --shadow-card: 0 16px 40px -26px rgba(20, 30, 24, 0.28);
        --vg-ease: cubic-bezier(0.22, 1, 0.36, 1);

        /* ---- Layout ---- */
        --container-w: 1240px;
        --radius-sm: 6px;
        --radius-md: 14px;
        --radius-lg: 28px;
        --transition: 0.45s cubic-bezier(.22, .61, .36, 1);
    }

    /* Animation Header Section */

    .home_header_animation-header {
        position: relative;
        width: 100%;
        height: auto;
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: url("assets/img/home/header-img.jpeg") center center/cover no-repeat;
    }

    .home_header_animation-header::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(125deg,
                rgba(14, 20, 15, 0.82),
                rgba(14, 61, 44, 0.72),
                rgba(20, 92, 63, 0.68),
                rgba(10, 15, 12, 0.85));
        z-index: 1;
    }

    .home_header_animation-header::after {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(transparent 25%, rgba(8, 12, 9, 0.55) 100%);
        z-index: 1;
        pointer-events: none;
    }

    .home_header_animation-header>* {
        position: relative;
        z-index: 2;
    }

    .home_header_content-container {
        position: relative;
        z-index: 10;
        text-align: center;
        padding: 2rem;
    }

    .home_header_animation-header h5 span {
        position: relative;
        display: inline-block;
        color: transparent;
        -webkit-text-stroke: .7px var(--gold-vibrant);
        animation: display-text 16s linear infinite;
        animation-delay: calc(-4s * var(--i));
        letter-spacing: 2px;
    }

    @keyframes display-text {

        25%,
        100% {
            display: none;
        }
    }

    .home_header_animation-header h5 span::before {
        content: attr(data-text);
        position: absolute;
        width: 0;
        border-right: 2px solid var(--green-bright);
        color: var(--green-bright);
        white-space: nowrap;
        overflow: hidden;
        animation: fill-text 4s linear infinite;
    }

    @keyframes fill-text {

        0%,
        10% {
            width: 0;
        }

        40%,
        70% {
            width: 100%;
        }

        100% {
            width: 0;
        }
    }

    .home_header_animation-header button {
        margin-top: 50px;
        border: 2px solid var(--gold-bright);
        padding: 8px 30px;
        border-radius: 10px;
        background-color: transparent;
        color: #fff;
        font-weight: 500;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .home_header_animation-header button:hover {
        border: 2px solid #fff;
        color: var(--green-bright);
    }

    @media screen and (max-width: 1261px) {
        .home_header_animation-header .container h1 {
            font-size: 32px;
        }

        .home_header_gradient-background {
            height: 100% !important;
        }
    }

    @media screen and (max-width: 768px) {
        .home_header_animation-header {
            min-height: auto;
            height: auto;
            padding: 40px 0;
        }

        .home_header_gradient-background {
            height: 100% !important;
        }

        .home_header_animation-header button {
            margin-top: 20px;
        }
    }

    @media screen and (max-width: 360px) {
        .home_header_animation-header .container h1 {
            font-size: 28px;
        }
    }

    /* Modern Mesh Glow Orbs Overlay */
    .home_header_gradient-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        overflow: hidden;
        pointer-events: none;
    }

    .home_header_gradient-sphere {
        position: absolute;
        border-radius: 50%;
        filter: blur(90px);
        mix-blend-mode: screen;
        opacity: 0.6;
    }

    .home_header_sphere-1 {
        width: 40vw;
        height: 40vw;
        background: radial-gradient(circle, rgba(217, 179, 112, 0.35) 0%, transparent 70%);
        top: -10%;
        left: -5%;
        animation: float-1 20s ease-in-out infinite alternate;
    }

    .home_header_sphere-2 {
        width: 45vw;
        height: 45vw;
        background: radial-gradient(circle, rgba(31, 157, 104, 0.3) 0%, transparent 70%);
        bottom: -15%;
        right: -5%;
        animation: float-2 22s ease-in-out infinite alternate;
    }

    .home_header_sphere-3 {
        width: 30vw;
        height: 30vw;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.14) 0%, transparent 70%);
        top: 40%;
        left: 30%;
        animation: float-3 25s ease-in-out infinite alternate;
    }

    .home_header_noise-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.02;
        z-index: 5;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
    }

    @keyframes float-1 {
        0% {
            transform: translate(0, 0) scale(1);
        }

        100% {
            transform: translate(12%, 8%) scale(1.15);
        }
    }

    @keyframes float-2 {
        0% {
            transform: translate(0, 0) scale(1);
        }

        100% {
            transform: translate(-10%, -12%) scale(1.1);
        }
    }

    @keyframes float-3 {
        0% {
            transform: translate(0, 0) scale(1);
            opacity: 0.4;
        }

        100% {
            transform: translate(-15%, 15%) scale(1.2);
            opacity: 0.8;
        }
    }

    .home_header_particles-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 3;
        pointer-events: none;
    }

    .home_header_particle {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        mix-blend-mode: screen;
    }

    @keyframes cursorSparkle {
        0% {
            transform: scale(1) rotate(0deg);
            opacity: 1;
        }

        100% {
            transform: scale(0) rotate(180deg);
            opacity: 0;
        }
    }

    /* ── Rotating circular (left & right) ── */
    .home_header_side-rotator {
        position: absolute;
        top: 50%;
        left: auto;
        right: auto;
        margin: 0;
        transform: translateY(-50%);
        width: 400px;
        height: 400px;
        z-index: 3;
        display: flex;
        align-items: center;
        justify-content: center;
        pointer-events: none;
    }

    .home_header_side-rotator-left {
        left: -225px;
    }

    .home_header_side-rotator-right {
        right: -225px;
    }

    .home_header_rotator-glow {
        position: absolute;
        top: 0;
        left: 0;
        inset: -14px;
        border-radius: 50%;
    }

    .home_header_rotator-outer {
        position: absolute;
        inset: 0;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: 0;
        border-radius: 50%;
        overflow: hidden;
        transform-origin: 50% 50%;
        backface-visibility: hidden;
        will-change: transform;
        animation: rotate-ring 32s linear infinite;
    }

    .home_header_side-rotator-right .home_header_rotator-outer {
        animation-direction: reverse;
    }

    @keyframes rotate-ring {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .home_header_rotator-outer .home_header_rotator-text-svg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden;
    }

    .home_header_rotator-text-svg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .home_header_rotator-center {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 85px;
        height: 85px;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        z-index: 2;
    }

    .home_header_rotator-center img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        display: block;
        padding: 10px;
    }

    @media screen and (max-width: 1800px) {
        .home_header_side-rotator {
            display: none;
        }
    }

    /* ── Content layout ── */

    .home_header_hero-content-wrapper {
        position: relative;
        z-index: 5;
        width: 100%;
        padding: 60px 0;
    }

    .home_header_hero-content-wrapper>.row {
        align-items: center;
    }

    .home_header_hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: rgba(217, 179, 112, 0.15);
        border: 1px solid rgba(217, 179, 112, 0.4);
        border-radius: 20px;
        padding: 15px 16px 10px;
        font-size: 11px;
        color: #f4efe0;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 20px;
        opacity: 0;
        transform: translateY(12px);
        animation: fadeUp 0.6s 0.15s forwards;
    }

    .home_header_badge-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--gold-bright);
        animation: blink 1.4s ease-in-out infinite;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1
        }

        50% {
            opacity: .3
        }
    }

    .home_header_title {
        font-size: 38px !important;
        font-weight: 700 !important;
        color: #fff !important;
        line-height: 1.25 !important;
        text-shadow: 0 2px 15px rgba(0, 0, 0, 0.6) !important;
        margin-bottom: 18px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 0.65s 0.35s forwards;
    }

    .home_header_title .home_header_accent-word {
        background: linear-gradient(90deg, #ffffff, var(--gold-vibrant), var(--green-bright));
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: shineText 5s linear infinite;
    }

    @keyframes shineText {
        to {
            background-position: 200% center;
        }
    }

    .home_header_hero-subtitle {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.75;
        max-width: 440px;
        margin-bottom: 22px;
        opacity: 0;
        transform: translateY(14px);
        animation: fadeUp 0.65s 0.55s forwards;
    }

    .home_header_hero-typed-line {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 26px;
        min-height: 22px;
        opacity: 0;
        transform: translateY(12px);
        animation: fadeUp 0.65s 0.7s forwards;
    }

    .home_header_hero-typed-line .home_header_typed-cursor {
        color: var(--gold-vibrant);
        font-weight: 700;
        border-right: 2px solid var(--green-bright);
        padding-right: 2px;
        animation: cursor-blink 0.8s step-end infinite;
    }

    @keyframes cursor-blink {

        0%,
        100% {
            border-color: var(--green-bright);
        }

        50% {
            border-color: transparent;
        }
    }

    /* ── USP / Highlights Group ── */

    .home_header_flag-container {
        display: flex !important;
        align-items: center;
        gap: 26px;
        margin-bottom: 28px;
        opacity: 0;
        transform: translateY(12px);
        animation: fadeUp 0.65s 0.85s forwards;
    }

    .home_header_flag-container a {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .home_header_flag-container a .home_header_usp-icon {
        width: 62px;
        height: 62px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, 0.55);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.35);
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), border-color 0.4s;
        z-index: 2;
        position: relative;
        background: linear-gradient(135deg, var(--gold), var(--gold-dark));
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .home_header_flag-container a span.home_header_usp-label {
        display: block;
        font-size: 10px;
        color: rgba(255, 255, 255, 0.85);
        text-align: center;
        margin-top: 6px;
        letter-spacing: 0.4px;
    }

    .home_header_flag-container a {
        flex-direction: column;
    }

    .home_header_flag-container a .home_header_usp-icon::before {
        content: '';
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        aspect-ratio: 1 / 1;
        border-radius: 50%;
        box-shadow: 0 0 0 0 rgba(31, 157, 104, 0.55);
        animation: flagPulse 2.5s infinite cubic-bezier(0.25, 0, 0, 1);
        z-index: 1;
        pointer-events: none;
    }

    .home_header_flag-container a:nth-child(2) .home_header_usp-icon::before {
        animation-delay: 0.8s;
    }

    .home_header_flag-container a:nth-child(3) .home_header_usp-icon::before {
        animation-delay: 1.6s;
    }

    @keyframes flagPulse {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(31, 157, 104, 0.55);
        }

        70% {
            transform: scale(1.3);
            box-shadow: 0 0 0 12px rgba(217, 179, 112, 0);
        }

        100% {
            transform: scale(1.4);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        }
    }

    .home_header_flag-container a .home_header_usp-icon:hover {
        transform: scale(1.15) rotate(4deg);
        border-color: var(--green-bright) !important;
        box-shadow: 0 8px 25px rgba(31, 157, 104, 0.55);
    }

    /* ── Image Section With Additive Glow/Float Animations ── */
    .home_header_hero-image-section {
        flex-shrink: 0;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transform: translateX(40px);
        animation: fadeRight 0.9s 0.9s forwards, hero-float-ui 6s ease-in-out infinite alternate;
    }

    @keyframes fadeRight {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes hero-float-ui {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(1deg);
        }
    }

    .home_header_img-scene {
        position: relative;
        width: 420px;
        height: 540px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .home_header_img-aura {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 380px;
        height: 500px;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(ellipse at center, rgba(217, 179, 112, 0.28) 0%, rgba(31, 157, 104, 0.14) 50%, transparent 75%);
        filter: blur(34px);
        z-index: 2;
        animation: aura-pulse 4s ease-in-out infinite alternate;
    }

    @keyframes aura-pulse {
        from {
            opacity: 0.45;
            transform: translate(-50%, -50%) scale(0.9);
        }

        to {
            opacity: 0.85;
            transform: translate(-50%, -50%) scale(1.1);
        }
    }

    .home_header_img-blob {
        position: absolute;
        border-radius: 60% 40% 55% 45% / 50% 60% 40% 50%;
        filter: blur(1px);
        pointer-events: none;
    }

    .home_header_img-blob-1 {
        width: 200px;
        height: 200px;
        top: -30px;
        left: -40px;
        background: linear-gradient(135deg, rgba(217, 179, 112, 0.14), rgba(255, 255, 255, 0.05));
        border: 1px solid rgba(217, 179, 112, 0.2);
        animation: blob-drift-1 9s ease-in-out infinite alternate;
    }

    .home_header_img-blob-2 {
        width: 160px;
        height: 160px;
        bottom: -20px;
        right: -30px;
        background: linear-gradient(225deg, rgba(31, 157, 104, 0.16), rgba(255, 255, 255, 0.04));
        border: 1px solid rgba(31, 157, 104, 0.2);
        border-radius: 45% 55% 40% 60% / 55% 45% 60% 40%;
        animation: blob-drift-2 11s ease-in-out infinite alternate;
    }

    @keyframes blob-drift-1 {
        0% {
            transform: translate(0, 0) rotate(0deg) scale(1);
        }

        100% {
            transform: translate(12px, 16px) rotate(18deg) scale(1.07);
        }
    }

    @keyframes blob-drift-2 {
        0% {
            transform: translate(0, 0) rotate(0deg) scale(1);
        }

        100% {
            transform: translate(-10px, -14px) rotate(-22deg) scale(1.05);
        }
    }

    .home_header_img-particles-host {
        position: absolute;
        inset: 0;
        z-index: 3;
        overflow: visible;
        pointer-events: none;
    }

    .home_header_salon-fx {
        position: absolute;
        bottom: -10%;
        opacity: 0;
        will-change: transform, opacity;
        animation-name: salon-fx-rise;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
    }

    @keyframes salon-fx-rise {
        0% {
            opacity: 0;
            transform: translate(0, 0) rotate(0deg) scale(0.7);
        }

        12% {
            opacity: 1;
        }

        50% {
            transform: translate(var(--fx-drift, 14px), -160px) rotate(var(--fx-rot, 90deg)) scale(1);
        }

        85% {
            opacity: 0.65;
        }

        100% {
            opacity: 0;
            transform: translate(calc(var(--fx-drift, 14px) * 1.6), -300px) rotate(var(--fx-rot-end, 180deg)) scale(0.6);
        }
    }

    .home_header_salon-fx.home_header_fx-glow {
        width: var(--fx-size, 6px);
        height: var(--fx-size, 6px);
        border-radius: 50%;
        background: radial-gradient(circle, var(--fx-color, #f0cd7e) 0%, transparent 72%);
        box-shadow: 0 0 8px 2px var(--fx-color, rgba(217, 179, 112, 0.7));
        filter: blur(0.2px);
    }

    .home_header_salon-fx.home_header_fx-bubble {
        width: var(--fx-size, 16px);
        height: var(--fx-size, 16px);
        border-radius: 50%;
        background: radial-gradient(circle at 32% 28%, rgba(255, 255, 255, 0.55), rgba(217, 179, 112, 0.12) 55%, transparent 78%);
        border: 1px solid rgba(217, 179, 112, 0.35);
        box-shadow: inset 0 0 6px rgba(255, 255, 255, 0.25), 0 0 10px rgba(31, 157, 104, 0.15);
    }

    .home_header_salon-fx.home_header_fx-icon {
        font-size: var(--fx-size, 15px);
        color: var(--fx-color, rgba(217, 179, 112, 0.55));
        text-shadow: 0 0 10px rgba(217, 179, 112, 0.45);
    }

    .home_header_salon-fx.home_header_fx-icon.home_header_fx-icon-green {
        color: rgba(31, 157, 104, 0.55);
        text-shadow: 0 0 10px rgba(31, 157, 104, 0.4);
    }

    @media (prefers-reduced-motion: reduce) {
        .home_header_salon-fx {
            animation: none !important;
            opacity: 0 !important;
        }
    }

    .home_header_img-ring {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    .home_header_img-ring-1 {
        width: 460px;
        height: 460px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 1.5px dashed rgba(217, 179, 112, 0.3);
        animation: ring-spin-cw 22s linear infinite;
    }

    .home_header_img-ring-2 {
        width: 400px;
        height: 400px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-top: 2px solid rgba(31, 157, 104, 0.35);
        border-right: 2px solid transparent;
        border-bottom: 2px solid rgba(217, 179, 112, 0.25);
        border-left: 2px solid transparent;
        animation: ring-spin-ccw 16s linear infinite;
    }

    @keyframes ring-spin-cw {
        from {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        to {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    @keyframes ring-spin-ccw {
        from {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        to {
            transform: translate(-50%, -50%) rotate(-360deg);
        }
    }

    .home_header_img-geo {
        position: absolute;
        pointer-events: none;
    }

    .home_header_img-geo-hex {
        width: 52px;
        height: 52px;
        top: 8px;
        right: -10px;
        opacity: 0.45;
        animation: geo-float-a 6s ease-in-out infinite;
    }

    .home_header_img-geo-diamond {
        width: 28px;
        height: 28px;
        bottom: 40px;
        left: -14px;
        background: transparent;
        border: 1.5px solid rgba(31, 157, 104, 0.45);
        transform: rotate(45deg);
        animation: geo-float-b 8s ease-in-out infinite;
    }

    @keyframes geo-float-a {

        0%,
        100% {
            transform: translateY(0) rotate(0deg)
        }

        50% {
            transform: translateY(-10px) rotate(15deg)
        }
    }

    @keyframes geo-float-b {

        0%,
        100% {
            transform: rotate(45deg) translateY(0)
        }

        50% {
            transform: rotate(45deg) translateY(-8px)
        }
    }

    .home_header_img-glass-frame {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100% !important;
        height: 100%;
        transform: translate(-50%, -50%);
        border-radius: 24px;
        background: transparent;
        border: none;
        backdrop-filter: none;
        -webkit-backdrop-filter: none;
        overflow: visible;
        z-index: 4;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .home_header_img-glass-frame img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: bottom center;
        display: block;
        -webkit-mask-image: linear-gradient(to bottom, black 70%, transparent 100%);
        mask-image: linear-gradient(to bottom, black 70%, transparent 100%);
    }

    @keyframes micro-float {
        0% {
            transform: translateY(0) scale(1);
            opacity: 0;
        }

        15% {
            opacity: 1;
        }

        85% {
            opacity: 0.6;
        }

        100% {
            transform: translateY(-100px) scale(0.4);
            opacity: 0;
        }
    }

    .home_header_glow-bottom-line {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(217, 179, 112, 0.5), transparent);
    }

    .home_header_hero-marquee-strip {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 52px;
        overflow: hidden;
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.05);
        border-top: 1px solid rgba(217, 179, 112, 0.25);
        z-index: 6;
    }

    .home_header_hero-marquee-track {
        display: flex;
        align-items: center;
        gap: 0;
        white-space: nowrap;
        animation: marquee-rtl 30s linear infinite;
        will-change: transform;
    }

    .home_header_hero-marquee-strip:hover .home_header_hero-marquee-track {
        animation-play-state: paused;
    }

    @keyframes marquee-rtl {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .home_header_marquee-item {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 0 28px;
        font-size: 11px;
        font-weight: 600;
        color: rgba(203, 213, 225, 0.8);
        letter-spacing: 0.8px;
        text-transform: uppercase;
    }

    .home_header_marquee-dot {
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: var(--gold-bright);
        flex-shrink: 0;
    }

    .home_header_marquee-item span {
        color: #b8dfca;
    }

    @media(max-width:1199.98px) and (min-width:993px) {
        .home_header_img-scene {
            width: 340px;
            height: 440px;
        }

        .home_header_img-ring-1 {
            width: 370px;
            height: 370px;
        }

        .home_header_img-ring-2 {
            width: 320px;
            height: 320px;
        }

        .home_header_img-aura {
            width: 300px;
            height: 400px;
        }
    }

    @media(max-width:992px) {
        .home_header_hero-content-wrapper {
            padding: 40px 15px;
        }

        .home_header_title {
            font-size: 28px !important;
        }

        .home_header_img-scene {
            width: 280px;
            height: 370px;
            margin: 0 auto;
        }

        .home_header_img-glass-frame {
            width: 100% !important;
            height: 100%;
        }

        .home_header_img-float-label {
            font-size: 10px;
            padding: 5px 10px 5px 7px;
        }

        .home_header_img-float-label .home_header_label-icon {
            width: 20px;
            height: 20px;
            font-size: 9px;
        }

        .home_header_lbl-tds {
            top: 2%;
            left: -16%;
        }

        .home_header_lbl-tax-credit {
            top: 22%;
            right: -18%;
        }

        .home_header_lbl-gst {
            top: 48%;
            left: -18%;
        }

        .home_header_lbl-business {
            bottom: 22%;
            right: -18%;
        }

        .home_header_lbl-trademark {
            bottom: 3%;
            left: -14%;
        }
    }

    @media(max-width:768px) {

        .home_header_animation-header {
            min-height: auto;
            padding-bottom: 48px;
        }

        .home_header_hero-content-wrapper {
            padding: 28px 16px 10px;
        }

        .home_header_hero-content-wrapper>.row {
            flex-direction: column;
        }

        .col-12.col-lg-7 {
            order: 1;
        }

        .home_header_hero-text {
            text-align: left !important;
        }

        .home_header_title {
            font-size: 22px !important;
            line-height: 1.3 !important;
            margin-bottom: 12px;
        }

        .home_header_hero-subtitle {
            font-size: 13px;
            line-height: 1.65;
            max-width: 100%;
            margin-bottom: 14px;
        }

        .home_header_hero-typed-line {
            font-size: 13px;
            margin-bottom: 18px;
        }

        .home_header_flag-container {
            gap: 18px;
            margin-bottom: 18px;
        }

        .home_header_flag-container a img {
            width: 52px !important;
            height: 52px !important;
        }

        .home_header_animation-header .home_header_btn-hero-primary,
        .home_header_animation-header .home_header_btn-hero-outline {
            padding: 10px 20px;
            font-size: 13px;
            border-radius: 8px;
        }

        .col-12.col-lg-5 {
            order: 2;
        }

        .home_header_hero-image-section {
            width: 100%;
            justify-content: center;
            margin-top: 10px;
        }

        .home_header_img-scene {
            width: 240px;
            height: 320px;
            margin: 0 auto;
        }

        .home_header_img-glass-frame {
            width: 100% !important;
            height: 100%;
            overflow: visible;
        }

        .home_header_img-ring-1 {
            width: 280px;
            height: 280px;
        }

        .home_header_img-ring-2 {
            width: 240px;
            height: 240px;
        }

        .home_header_img-aura {
            width: 220px;
            height: 300px;
        }

        .home_header_img-float-label {
            display: none;
        }

        .home_header_scroll-hint {
            display: none;
        }

        .home_header_marquee-item {
            font-size: 10px;
            padding: 0 18px;
        }
    }

    @media(max-width:480px) {
        .home_header_title {
            font-size: 20px !important;
        }

        .home_header_hero-subtitle {
            font-size: 12.5px;
        }

        .home_header_flag-container a img {
            width: 46px !important;
            height: 46px !important;
        }

        .home_header_animation-header .home_header_btn-hero-primary,
        .home_header_animation-header .home_header_btn-hero-outline {
            padding: 9px 16px;
            font-size: 12.5px;
        }

        .home_header_img-scene {
            width: 200px;
            height: 275px;
            margin: 0 auto;
        }

        .home_header_img-ring-1 {
            width: 240px;
            height: 240px;
        }

        .home_header_img-ring-2 {
            width: 200px;
            height: 200px;
        }
    }

    @media(max-width:360px) {
        .home_header_title {
            font-size: 18px !important;
        }

        .home_header_flag-container a img {
            width: 40px !important;
            height: 40px !important;
        }

        .home_header_flag-container {
            gap: 14px;
        }

        .home_header_animation-header .home_header_btn-hero-primary,
        .home_header_animation-header .home_header_btn-hero-outline {
            font-size: 12px;
        }

        .home_header_img-scene {
            width: 175px;
            height: 245px;
            margin: 0 auto;
        }
    }

    /* Custom Cursor Particle Effect CSS */

    .home_header_cursor-particle {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 99999;
        pointer-events: none;
        user-select: none;
        will-change: transform, opacity;
        animation-name: cursorParticleFloat;
        animation-timing-function: ease-out;
        animation-fill-mode: forwards;
    }

    @keyframes cursorParticleFloat {
        0% {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1) translate(0, 0);
        }

        100% {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.25) translate(var(--dx), var(--dy));
        }
    }

    @media (hover: none),
    (pointer: coarse) {
        .home_header_cursor-particle {
            display: none !important;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .home_header_cursor-particle {
            display: none !important;
        }
    }

    /* Home Page Section */

    #main-content {
        width: 100%;
        max-width: 100%;
        overflow-x: hidden;
        position: relative;
    }

    /*================================================
        Main Content Area CSS
    =================================================*/

    .main-content {
        background-image: url(assets/img/home/main-content.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        overflow-x: hidden;
        position: relative;
    }

    .main-content::before {
        content: '';
        position: absolute;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.6);
        pointer-events: none;
        z-index: 0;
    }

    .main-content>* {
        position: relative;
        z-index: 1;
    }

    .home_section_eyebrow {
        letter-spacing: .22rem;
        font-size: .74rem;
        color: var(--c-emerald);
        display: inline-flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 1.2rem;
        text-transform: uppercase;
    }

    .home_section_eyebrow::before {
        content: '';
        width: 32px;
        height: 1px;
        background: var(--c-gold);
        display: inline-block;
    }

    .home_section_title {
        font-size: clamp(1rem, 3vw, 2rem);
        margin-bottom: 10px;
        color: var(--c-heading);
    }

    .home_section_title em {
        font-style: italic;
        color: transparent;
        background: linear-gradient(90deg, var(--c-gold-dark), var(--c-emerald), var(--c-gold-dark));
        background-size: 200% auto;
        -webkit-background-clip: text;
        background-clip: text;
        animation: home_shineText 5s linear infinite;
    }

    @keyframes home_shineText {
        to {
            background-position: 200% center;
        }
    }

    .home_section_sub {
        color: var(--c-gray);
        font-size: 1.02rem;
    }

    .text-center {
        text-align: center;
        margin-inline: auto;
    }

    /* ---- Click/activate: smooth left-to-right wipe effect ---- */
    .vg-wipe-btn {
        position: relative;
    }

    .vg-wipe-btn::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(255, 255, 255, 0.4);
        transform: scaleX(0);
        transform-origin: left center;
        pointer-events: none;
        z-index: 1;
        will-change: transform, opacity;
    }

    .vg-wipe-btn.is-wiping::after {
        animation: vgBtnWipe 0.55s var(--vg-ease);
    }

    @keyframes vgBtnWipe {
        0% {
            transform: scaleX(0);
            opacity: 1;
        }

        65% {
            transform: scaleX(1);
            opacity: 1;
        }

        100% {
            transform: scaleX(1);
            opacity: 0;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .vg-wipe-btn.is-wiping::after {
            animation: none;
        }
    }

    /* ============ ABOUT SECTION ============ */
    .home_about_section {
        position: relative;
        background:
            radial-gradient(circle at 15% 20%, rgba(217, 179, 112, 0.12) 0%, transparent 45%),
            radial-gradient(circle at 85% 80%, rgba(31, 157, 104, 0.14) 0%, transparent 50%),
            var(--c-surface);
        overflow: hidden;
    }

    .home_about_grid {
        display: grid;
        grid-template-columns: .9fr 1.1fr;
        gap: 60px;
        align-items: center;
    }

    .home_about_media {
        position: relative;
    }

    .home_about_media img {
        width: 100%;
        max-width: 420px;
        height: 560px;
        object-fit: cover;
        border-radius: var(--radius-lg);
        border: 1px solid rgba(217, 179, 112, 0.35);
        padding: 8px;
        margin-inline: auto;
        box-shadow: 0 25px 60px -20px rgba(20, 30, 24, 0.35);
        transition: transform var(--transition);
    }

    .home_about_media img:hover {
        transform: translateY(-4px);
    }

    .home_about_info p {
        margin-bottom: 18px;
    }

    .home_about_stats_grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 30px;
    }

    .home_about_stat_box {
        padding: 22px 16px;
        text-align: center;
        border-radius: var(--radius-md);
        border: 1px solid var(--c-card-border);
        background: var(--c-card);
        box-shadow: var(--shadow-card);
        transition: transform var(--transition), border-color var(--transition);
    }

    .home_about_stat_box:hover {
        transform: translateY(-4px);
        border-color: var(--c-gold);
    }

    .home_about_stat_box .home_about_stat_num {
        font-size: 2.1rem;
        color: var(--c-gold-dark);
        font-weight: 700;
    }

    .home_about_stat_box .home_about_stat_label {
        font-size: .76rem;
        letter-spacing: .6px;
        color: var(--c-gray);
        text-transform: uppercase;
        margin-top: 6px;
    }

    /* ============ WHY CHOOSE US ============ */
    .home_why_section {
        background: transparent;
    }

    .home_why_section .home_section_eyebrow {
        color: var(--c-gold-light);
    }

    .home_why_section .home_section_title {
        color: var(--white);
    }

    .home_why_section .home_section_sub {
        color: var(--black-2);
    }

    .home_why_grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 26px;
    }

    .home_why_card {
        padding: 38px 28px;
        border-radius: var(--radius-md);
        border: 1px solid var(--c-card-border);
        background: var(--c-card);
        box-shadow: var(--shadow-card);
        transition: transform var(--transition), border-color var(--transition), box-shadow var(--transition);
    }

    .home_why_card:hover {
        transform: translateY(-6px);
        border-color: var(--c-gold);
        box-shadow: 0 20px 45px -25px rgba(217, 179, 112, 0.5);
    }

    .home_why_icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        margin-bottom: 20px;
        background: linear-gradient(135deg, rgba(31, 157, 104, .16), rgba(217, 179, 112, .18));
        color: var(--c-emerald-deep);
        transition: transform var(--transition);
    }

    .home_why_card:hover .home_why_icon {
        transform: scale(1.1) rotate(4deg);
    }

    .home_why_card h4 {
        font-size: 1.25rem;
        margin-bottom: 10px;
        color: var(--c-heading);
    }

    .home_why_card p {
        font-size: .92rem;
        color: var(--c-gray);
    }

    /* ============ SERVICES SECTION (menu-list layout) ============ */
    .home_service_section {
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(circle at 80% 10%, rgba(217, 179, 112, 0.14) 0%, transparent 45%),
            radial-gradient(circle at 10% 90%, rgba(31, 157, 104, 0.12) 0%, transparent 50%),
            var(--c-surface);
    }

    .home_service_list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0 56px;
        border-top: 1px solid var(--c-card-border);
    }

    .home_service_row {
        display: flex;
        align-items: flex-start;
        gap: 18px;
        padding: 24px 14px;
        border-bottom: 1px solid var(--c-card-border);
        border-radius: var(--radius-sm);
        transition: background var(--transition), padding-inline var(--transition);
    }

    .home_service_row:hover {
        background: var(--c-surface-alt);
        padding-inline: 22px;
    }

    .home_service_index {
        font-style: italic;
        font-size: 1.6rem;
        color: var(--c-gold);
        min-width: 40px;
        line-height: 1;
        flex-shrink: 0;
    }

    .home_service_row_main {
        flex: 1;
        min-width: 0;
    }

    .home_service_row_top {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
    }

    .home_service_row_top h4 {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.08rem;
        color: var(--c-heading);
    }

    .home_service_row_top h4 i {
        color: var(--c-emerald-deep);
        font-size: 1rem;
    }

    .home_service_price {
        letter-spacing: 1px;
        color: var(--c-gold-dark);
        font-size: 1rem;
        white-space: nowrap;
    }

    .home_service_row p {
        margin-top: 6px;
        font-size: .88rem;
        color: var(--c-gray);
    }

    /* ============ GALLERY SECTION ============ */
    .home_gallery_section {
        position: relative;
        background: transparent;
    }

    .home_gallery_section .home_section_eyebrow {
        color: var(--c-gold-light);
    }

    .home_gallery_section .home_section_title {
        color: var(--white);
    }

    .home_gallery_section .home_section_sub {
        color: var(--black-2);
    }

    .home_gallery_note h4 {
        color: var(--white);
    }

    .home_gallery_note p {
        color: var(--black-2);
    }

    /*---------- 3D rotating gallery ----------*/
    .home_gallery_img_container {
        justify-content: center;
        align-items: center;
        display: flex;
        margin-top: 24px;
        margin-bottom: 50px;
        overflow: hidden;
    }

    .home_gallery_image {
        position: relative;
        width: 250px;
        height: 250px;
        transform-style: preserve-3d;
        animation: rotate 30s linear infinite;
    }

    @keyframes rotate {
        0% {
            transform: perspective(1000px) rotateY(0deg);
        }

        100% {
            transform: perspective(1000px) rotateY(360deg);
        }
    }

    .home_gallery_image span {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform-origin: center;
        transform-style: preserve-3d;
        transform: rotateY(calc(var(--i)*45deg)) translateZ(350px);
        overflow: hidden;
        border-radius: var(--radius-md);
        border: 1px solid var(--c-card-border);
        box-shadow: 0 12px 30px -14px rgba(20, 30, 24, 0.35);
        transition: box-shadow .5s var(--vg-ease);
    }

    .home_gallery_image span img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: inherit;
        object-fit: cover;
        transition: transform .6s var(--vg-ease);
        cursor: pointer;
        will-change: transform;
    }

    .home_gallery_image span:hover {
        box-shadow: 0 22px 40px -16px rgba(20, 30, 24, 0.4);
    }

    .home_gallery_image span:hover img {
        transform: scale(1.15);
    }

    .home_gallery_note {
        text-align: center;
    }

    .home_gallery_note h4 {
        color: var(--c-heading);
        margin-bottom: 8px;
    }

    .home_gallery_note p {
        max-width: 560px;
        margin-inline: auto;
    }

    @media (max-width: 1199px) {
        .home_about_grid {
            gap: 40px;
        }

        .home_why_grid {
            gap: 20px;
        }
    }

    @media (max-width: 991px) {
        .home_about_grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .home_about_info {
            order: 1;
        }

        .home_about_media {
            order: 2;
        }

        .home_about_media img {
            max-width: 360px;
            height: 460px;
        }

        .home_why_grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .home_service_list {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 767px) {
        .container {
            padding-inline: 20px;
        }

        .home_about_info {
            text-align: center;
        }

        .home_about_stats_grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }

        .home_why_grid {
            grid-template-columns: 1fr;
        }

        .home_why_card {
            text-align: center;
        }

        .home_why_icon {
            margin-inline: auto;
        }

        .home_service_row {
            padding: 20px 10px;
            gap: 14px;
        }

        .home_gallery_img_container {
            margin-top: 16px;
            margin-bottom: 30px;
        }

        .home_gallery_image {
            width: 210px;
            height: 210px;
        }

        .home_gallery_image span {
            transform: rotateY(calc(var(--i)*45deg)) translateZ(250px);
        }
    }

    @media (max-width: 575px) {
        .container {
            padding-inline: 16px;
        }

        .home_section_title {
            font-size: clamp(1.6rem, 7vw, 2.2rem);
        }

        .home_section_sub {
            font-size: .92rem;
        }

        .home_about_media img {
            max-width: 100%;
            width: 100%;
            height: 380px;
        }

        .home_about_stat_box {
            padding: 16px 8px;
        }

        .home_about_stat_box .home_about_stat_num {
            font-size: 1.5rem;
        }

        .home_about_stat_box .home_about_stat_label {
            font-size: .68rem;
        }

        .home_service_row {
            padding: 16px 8px;
            gap: 10px;
        }

        .home_service_index {
            font-size: 1.3rem;
            min-width: 32px;
        }

        .home_service_row_top h4 {
            font-size: .98rem;
        }

        .home_gallery_image {
            width: 170px;
            height: 170px;
        }

        .home_gallery_image span {
            transform: rotateY(calc(var(--i)*45deg)) translateZ(190px);
        }

        .home_contact_actions {
            flex-direction: column;
            width: 100%;
            gap: 14px;
        }
    }

    @media (max-width: 420px) {
        .home_why_card {
            padding: 26px 18px;
        }

        .home_gallery_image {
            width: 140px;
            height: 140px;
        }

        .home_gallery_image span {
            transform: rotateY(calc(var(--i)*45deg)) translateZ(150px);
        }
    }
</style>

<!-- Header -->
<div class="home_header_animation-header px-2" id="hero-interactive-section">

    <div class="home_header_gradient-background">
        <div class="home_header_gradient-sphere home_header_sphere-1"></div>
        <div class="home_header_gradient-sphere home_header_sphere-2"></div>
        <div class="home_header_gradient-sphere home_header_sphere-3"></div>
        <div class="home_header_noise-overlay"></div>
        <div class="home_header_particles-container" id="particles-container"></div>
    </div>

    <!-- Left Rotating Circular Medallion -->
    <div class="home_header_side-rotator home_header_side-rotator-left">
        <div class="home_header_rotator-glow"></div>
        <div class="home_header_rotator-outer">
            <div class="home_header_rotator-text-svg">
                <img src="assets/img/home/rotate-logo2.png" alt="img">
            </div>
        </div>

        <div class="home_header_rotator-center">
            <img src="assets/img/common/visual-green-logo-icon.png" alt="Visual Green Salon">
        </div>
    </div>

    <!-- Right Rotating Circular Medallion -->
    <div class="home_header_side-rotator home_header_side-rotator-right">
        <div class="home_header_rotator-glow"></div>
        <div class="home_header_rotator-outer">
            <div class="home_header_rotator-text-svg">
                <img src="assets/img/home/rotate-logo2.png" alt="img">
            </div>
        </div>

        <div class="home_header_rotator-center">
            <img src="assets/img/common/visual-green-logo-icon.png" alt="Visual Green Salon">
        </div>
    </div>

    <!-- Layout gap resolved using clean center-align bounds -->
    <div class="home_header_hero-content-wrapper container">
        <div class="row align-items-center justify-content-center">

            <div class="col-12 col-lg-7">
                <div class="home_header_hero-text text-start">

                    <div class="home_header_hero-badge">
                        <span class="home_header_badge-dot"></span>
                        Premium Men's Grooming Studio
                    </div>

                    <h1 class="home_header_title">
                        Where Sharp Style Meets
                        <span class="home_header_accent-word">Timeless Grooming</span>
                    </h1>

                    <p class="home_header_hero-subtitle">
                        From precision haircuts and beard artistry to rejuvenating spa treatments —
                        experience grooming crafted for the modern gentleman in an elegant, premium setting.
                    </p>

                    <div class="home_header_hero-typed-line">
                        Book your session for
                        <span class="home_header_typed-cursor" id="typed-word">Haircuts.</span>
                    </div>

                    <div class="home_header_flag-container py-3">
                        <a href="#services" class="text-decoration-none" title="Haircuts &amp; Styling">
                            <span class="home_header_usp-icon"><i class="fa-solid fa-scissors"></i></span>
                            <span class="home_header_usp-label">Haircuts</span>
                        </a>
                        <a href="#services" class="text-decoration-none" title="Beard Grooming">
                            <span class="home_header_usp-icon"><i class="fa-solid fa-user-tie"></i></span>
                            <span class="home_header_usp-label">Beard Care</span>
                        </a>
                        <a href="#services" class="text-decoration-none" title="Spa &amp; Skincare">
                            <span class="home_header_usp-icon"><i class="fa-solid fa-spa"></i></span>
                            <span class="home_header_usp-label">Spa &amp; Skin</span>
                        </a>
                    </div>

                    <div class="home_header_hero-btns">

                        <a href="#contact" class="home_header_btn-hero-primary salon-cut-btn">
                            <span class="btn-text">Book an Appointment</span>
                            <span class="scissor-line"></span>
                            <span class="cut-spark">✂</span>
                        </a>

                        <a href="#services" class="home_header_btn-hero-outline salon-cut-btn">
                            <span class="btn-text">Our Services →</span>
                            <span class="scissor-line"></span>
                            <span class="cut-spark">✂</span>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 d-flex align-items-center justify-content-center">
                <div class="home_header_hero-image-section">
                    <div class="home_header_img-scene">

                        <div class="home_header_img-aura"></div>
                        <!-- <div class="home_header_img-blob home_header_img-blob-1"></div>
                            <div class="home_header_img-blob home_header_img-blob-2"></div> -->

                        <div class="home_header_img-ring home_header_img-ring-1"></div>
                        <div class="home_header_img-ring home_header_img-ring-2"></div>
                        <div class="home_header_img-geo home_header_img-geo-diamond"></div>

                        <svg class="home_header_img-geo home_header_img-geo-hex" viewBox="0 0 52 52" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <polygon points="26,2 49,14.5 49,37.5 26,50 3,37.5 3,14.5" stroke="rgba(217,179,112,0.6)"
                                stroke-width="1.5" fill="rgba(217,179,112,0.03)" />
                        </svg>

                        <div class="home_header_img-glass-frame">
                            <img src="assets/img/home/design-img3.png" alt="Visual Green Premium Men's Salon Stylist">
                        </div>

                        <!-- <div class="home_header_img-particles-host" id="img-particles-host"></div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Animated Marquee Ticker -->
    <div class="home_header_hero-marquee-strip">
        <div class="home_header_hero-marquee-track">
            <!-- Set 1 -->
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Haircut</span> &amp; Styling</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Beard</span> Grooming</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Hair</span> Spa</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Facials</span> &amp; Skincare</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Hair</span> Coloring</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Bridal</span> Grooming</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Head</span> Massage</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Threading</span> &amp; Waxing</span>
            <!-- Set 2 (duplicate for seamless loop) -->
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Haircut</span> &amp; Styling</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Beard</span> Grooming</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Hair</span> Spa</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Facials</span> &amp; Skincare</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Hair</span> Coloring</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Bridal</span> Grooming</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Head</span> Massage</span>
            <span class="home_header_marquee-item"><span class="home_header_marquee-dot"></span> <span>Threading</span> &amp; Waxing</span>
        </div>
    </div>

    <div class="home_header_glow-bottom-line"></div>

</div>

<main class="main-content">

    <!-- ============ ABOUT SECTION ============ -->
    <section class="home_about_section py-5 px-2" id="about">
        <div class="container">
            <div class="home_about_grid">
                <div class="home_about_media" data-aos="fade-right">
                    <img src="assets/img/home/vg mobile view.png" alt="Visual Green salon interior">

                </div>

                <div class="home_about_info" data-aos="fade-left">
                    <p class="home_section_eyebrow">our story</p>
                    <h2 class="home_section_title pb-4">Crafting Confidence, <em>One Style</em> at a Time</h2>

                    <p>Visual Green was born from a simple idea — every gentleman deserves a grooming
                        experience that feels personal, precise and premium. From classic fades to royal
                        beard rituals, our master stylists blend timeless technique with modern trend.</p>
                    <p>Step into our lounge and trade the rush of the day for warm lighting, curated
                        playlists and a chair that feels like it was made for you.</p>

                    <div class="home_about_stats_grid">
                        <div class="home_about_stat_box" data-aos="fade-up" data-aos-delay="0">
                            <div class="home_about_stat_num">12+</div>
                            <div class="home_about_stat_label">Years Experience</div>
                        </div>
                        <div class="home_about_stat_box" data-aos="fade-up" data-aos-delay="100">
                            <div class="home_about_stat_num">8k+</div>
                            <div class="home_about_stat_label">Happy Clients</div>
                        </div>
                        <div class="home_about_stat_box" data-aos="fade-up" data-aos-delay="200">
                            <div class="home_about_stat_num">15</div>
                            <div class="home_about_stat_label">Expert Stylists</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ WHY CHOOSE US ============ -->
    <section class="home_why_section py-5 px-2" id="why-us">
        <div class="container">
            
            <div class="section-head pb-5 text-center" data-aos="fade-up">
                <p class="home_section_eyebrow">the visual green edge</p>
                <h2 class="home_section_title">Why Gentlemen <em>Choose</em> Us</h2>
                <p class="home_section_sub">Six reasons our chairs stay full and our clients keep coming back.</p>
            </div>

            <div class="home_why_grid">
                <div class="home_why_card" data-aos="fade-up" data-aos-delay="0">
                    <div class="home_why_icon"><i class="fa-solid fa-user-tie"></i></div>
                    <h4>Expert Stylists</h4>
                    <p>Trained, certified professionals who treat every cut as a craft, not a routine.</p>
                </div>
                <div class="home_why_card" data-aos="fade-up" data-aos-delay="100">
                    <div class="home_why_icon"><i class="fa-solid fa-leaf"></i></div>
                    <h4>Premium Products</h4>
                    <p>Only dermatologically safe, imported grooming products touch your skin and hair.</p>
                </div>
                <div class="home_why_card" data-aos="fade-up" data-aos-delay="200">
                    <div class="home_why_icon"><i class="fa-solid fa-pump-soap"></i></div>
                    <h4>Hygienic Environment</h4>
                    <p>Sanitized tools and single-use essentials for every client, every single time.</p>
                </div>
                <div class="home_why_card" data-aos="fade-up" data-aos-delay="0">
                    <div class="home_why_icon"><i class="fa-solid fa-crown"></i></div>
                    <h4>Luxury Ambience</h4>
                    <p>Warm lighting, curated music and a lounge built for relaxation.</p>
                </div>
                <div class="home_why_card" data-aos="fade-up" data-aos-delay="100">
                    <div class="home_why_icon"><i class="fa-solid fa-calendar-check"></i></div>
                    <h4>Flexible Booking</h4>
                    <p>Walk in or reserve your slot online — your time matters to us.</p>
                </div>
                <div class="home_why_card" data-aos="fade-up" data-aos-delay="200">
                    <div class="home_why_icon"><i class="fa-solid fa-tags"></i></div>
                    <h4>Honest Pricing</h4>
                    <p>Transparent, upfront pricing with zero hidden charges — always.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SERVICES SECTION ============ -->
    <section class="home_service_section py-5 px-2" id="services">
        <div class="container">
            <div class="section-head pb-5 text-center" data-aos="fade-up">
                <p class="home_section_eyebrow">what we offer</p>
                <h2 class="home_section_title">Our Signature <em>Services</em></h2>
                <p class="home_section_sub">A complete grooming menu designed for the modern gentleman.</p>
            </div>
            <div class="home_service_list">
                <div class="home_service_row" data-aos="fade-up" data-aos-delay="0">
                    <span class="home_service_index">01</span>
                    <div class="home_service_row_main">
                        <div class="home_service_row_top">
                            <h4><i class="fa-solid fa-scissors"></i> Precision Haircut</h4>
                            <span class="home_service_price">From ₹299</span>
                        </div>
                        <p>Classic, fade or trend cuts tailored to your face shape.</p>
                    </div>
                </div>
                <div class="home_service_row" data-aos="fade-up" data-aos-delay="50">
                    <span class="home_service_index">02</span>
                    <div class="home_service_row_main">
                        <div class="home_service_row_top">
                            <h4><i class="fa-solid fa-mask"></i> Royal Beard Styling</h4>
                            <span class="home_service_price">From ₹249</span>
                        </div>
                        <p>Sharp shaping, hot towel and precision beard sculpting.</p>
                    </div>
                </div>
                <div class="home_service_row" data-aos="fade-up" data-aos-delay="100">
                    <span class="home_service_index">03</span>
                    <div class="home_service_row_main">
                        <div class="home_service_row_top">
                            <h4><i class="fa-solid fa-fire"></i> Royal Shaving</h4>
                            <span class="home_service_price">From ₹199</span>
                        </div>
                        <p>Traditional straight-razor shave with a hot towel finish.</p>
                    </div>
                </div>
                <div class="home_service_row" data-aos="fade-up" data-aos-delay="150">
                    <span class="home_service_index">04</span>
                    <div class="home_service_row_main">
                        <div class="home_service_row_top">
                            <h4><i class="fa-solid fa-face-smile"></i> Signature Facial</h4>
                            <span class="home_service_price">From ₹599</span>
                        </div>
                        <p>Deep cleanse, exfoliation and hydration for glowing skin.</p>
                    </div>
                </div>
                <div class="home_service_row" data-aos="fade-up" data-aos-delay="0">
                    <span class="home_service_index">05</span>
                    <div class="home_service_row_main">
                        <div class="home_service_row_top">
                            <h4><i class="fa-solid fa-hand-sparkles"></i> Skin Treatment</h4>
                            <span class="home_service_price">From ₹699</span>
                        </div>
                        <p>Targeted therapies for brightening, anti-tan and glow.</p>
                    </div>
                </div>
                <div class="home_service_row" data-aos="fade-up" data-aos-delay="50">
                    <span class="home_service_index">06</span>
                    <div class="home_service_row_main">
                        <div class="home_service_row_top">
                            <h4><i class="fa-solid fa-hand"></i> Head Massage</h4>
                            <span class="home_service_price">From ₹349</span>
                        </div>
                        <p>Relaxing therapeutic massage to relieve stress and tension.</p>
                    </div>
                </div>
                <div class="home_service_row" data-aos="fade-up" data-aos-delay="100">
                    <span class="home_service_index">07</span>
                    <div class="home_service_row_main">
                        <div class="home_service_row_top">
                            <h4><i class="fa-solid fa-droplet"></i> Keratin Treatment</h4>
                            <span class="home_service_price">From ₹1999</span>
                        </div>
                        <p>Smooth, frizz-free hair that lasts for months.</p>
                    </div>
                </div>
                <div class="home_service_row" data-aos="fade-up" data-aos-delay="150">
                    <span class="home_service_index">08</span>
                    <div class="home_service_row_main">
                        <div class="home_service_row_top">
                            <h4><i class="fa-solid fa-ring"></i> Bridal Groom Package</h4>
                            <span class="home_service_price">From ₹4999</span>
                        </div>
                        <p>Complete head-to-toe grooming for your big day.</p>
                    </div>
                </div>
            </div>

            <div class="home_header_hero-btns d-flex justify-content-center mt-5" data-aos="fade-up" data-aos-delay="200">

                <a href="#contact" class="home_header_btn-hero-primary salon-cut-btn">
                    <span class="btn-text">View More</span>
                    <span class="scissor-line"></span>
                    <span class="cut-spark">✂</span>
                </a>

            </div>
        </div>
    </section>

    <!-- ============ GALLERY SECTION ============-->
    <section class="home_gallery_section py-5 px-2" id="gallery">
        <div class="container">
            <div class="section-head pb-5 text-center" data-aos="fade-up">
                <p class="home_section_eyebrow">inside the salon</p>
                <h2 class="home_section_title">A Glimpse of <em>Visual Green</em></h2>
                <p class="home_section_sub">Moments of style, precision and transformation from our chairs.</p>
            </div>

            <div class="home_gallery_img_container" data-aos="zoom-in">
                <div class="home_gallery_image">
                    <span style="--i:1;"> <img src="assets/img/home/gallary1.jpg" alt="hair cut "> </span>
                    <span style="--i:2;"> <img src="assets/img/home/gallary2.jpg" alt="shave "> </span>
                    <span style="--i:3;"> <img src="assets/img/home/gallary3.jpg" alt="facial treatment"> </span>
                    <span style="--i:4;"> <img src="assets/img/home/gallary4.avif" alt="grooming tool"> </span>
                    <span style="--i:5;"> <img src="assets/img/home/gallary5.avif" alt="beard styling"> </span>
                    <span style="--i:6;"> <img src="assets/img/home/gallary6.jpg" alt="towel shave"> </span>
                    <span style="--i:7;"> <img src="assets/img/home/gallary7.jpg" alt="hair color"> </span>
                    <span style="--i:8;"> <img src="assets/img/home/gallary8.jpg" alt="hair styling"> </span>
                </div>
            </div>
            <div class="home_gallery_note">
                <h4 class="text-white">Note:</h4>
                <p>Every corner of Visual Green is designed to make your grooming experience comfortable,
                    refreshing, and memorable.</p>
            </div>
        </div>
    </section>

    <!-- ============ HELP / CONTACT SECTION ============ -->
    <section class="home_contact_section py-5 px-2" id="contact">
        <div class="container">
            <div class="section-head pb-5 text-center" data-aos="fade-up">
                <p class="home_section_eyebrow">get in touch</p>
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
    AOS.init({
        duration: 700,
        once: true,
        offset: 60
    });
</script>

<script>
    AOS.init();

    /*======================================
        Hero Typed Word JS (Salon Services)
    =======================================*/

    (function() {
        const el = document.getElementById("typed-word");
        if (!el) return;

        const words = ["Haircuts.", "Beard Grooming.", "Hair Spa.", "Facials & Skincare.", "Bridal Styling."];
        let wordIndex = 0;
        let charIndex = 0;
        let deleting = false;

        function tick() {
            const current = words[wordIndex];

            if (!deleting) {
                charIndex++;
                el.textContent = current.substring(0, charIndex);
                if (charIndex === current.length) {
                    deleting = true;
                    setTimeout(tick, 1400);
                    return;
                }
            } else {
                charIndex--;
                el.textContent = current.substring(0, charIndex);
                if (charIndex === 0) {
                    deleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                }
            }

            setTimeout(tick, deleting ? 40 : 90);
        }

        setTimeout(tick, 800);
    })();

    /*======================================
        Premium Salon-Themed Floating Background
    =======================================*/

    (function() {
        const host = document.getElementById("img-particles-host");
        if (!host) return;

        const goldColors = ["#f0cd7e", "#d9b370", "#e9c98c"];
        const greenColors = ["#3fc088", "#1f9d68"];
        const icons = ["fa-scissors", "fa-spray-can-sparkles", "fa-soap", "fa-wand-magic-sparkles", "fa-gem", "fa-leaf"];

        function rand(min, max) {
            return Math.random() * (max - min) + min;
        }

        function buildParticles() {
            host.innerHTML = "";
            const count = window.innerWidth < 576 ? 8 : (window.innerWidth < 992 ? 12 : 18);

            for (let i = 0; i < count; i++) {
                const roll = Math.random();
                const el = document.createElement(roll < 0.55 ? "span" : "i");
                const isIcon = roll >= 0.55 && roll < 0.8;
                const isBubble = roll >= 0.8;

                let type = "home_header_fx-glow";
                if (isIcon) type = "home_header_fx-icon";
                if (isBubble) type = "home_header_fx-bubble";

                el.className = "home_header_salon-fx " + type;

                if (isIcon) {
                    const greenTone = Math.random() < 0.35;
                    el.classList.add("fa-solid", icons[Math.floor(Math.random() * icons.length)]);
                    if (greenTone) el.classList.add("home_header_fx-icon-green");
                    el.style.setProperty("--fx-size", rand(13, 20).toFixed(0) + "px");
                } else if (isBubble) {
                    el.style.setProperty("--fx-size", rand(10, 22).toFixed(0) + "px");
                } else {
                    el.style.setProperty("--fx-size", rand(3, 7).toFixed(0) + "px");
                    const palette = Math.random() < 0.7 ? goldColors : greenColors;
                    el.style.setProperty("--fx-color", palette[Math.floor(Math.random() * palette.length)]);
                }

                el.style.left = rand(2, 92).toFixed(1) + "%";
                el.style.setProperty("--fx-drift", rand(-26, 26).toFixed(0) + "px");
                el.style.setProperty("--fx-rot", rand(-40, 40).toFixed(0) + "deg");
                el.style.setProperty("--fx-rot-end", rand(60, 160).toFixed(0) + "deg");

                const duration = rand(7, 13).toFixed(2) + "s";
                el.style.animationDuration = duration;
                el.style.animationDelay = "-" + rand(0, 12).toFixed(2) + "s";

                host.appendChild(el);
            }
        }

        buildParticles();

        let resizeTimer;
        window.addEventListener("resize", () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(buildParticles, 400);
        });
    })();

    /*======================================
        Hero Particle Background JS
    =======================================*/

    (function() {
        const canvas = document.getElementById("hero-canvas");
        if (!canvas) return;
        const ctx = canvas.getContext("2d");
        const heroSection = document.getElementById("hero");
        let particles = [];
        const colors = ["rgba(205,164,94,0.7)", "rgba(240,205,126,0.6)", "rgba(31,157,104,0.6)"];

        function resize() {
            canvas.width = heroSection.offsetWidth;
            canvas.height = heroSection.offsetHeight;
        }

        function createParticles() {
            const count = window.innerWidth < 768 ? 35 : 70;
            particles = Array.from({
                length: count
            }, () => ({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                r: Math.random() * 2 + 1,
                dx: (Math.random() - 0.5) * 0.4,
                dy: (Math.random() - 0.5) * 0.4,
                color: colors[Math.floor(Math.random() * colors.length)]
            }));
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach((p) => {
                p.x += p.dx;
                p.y += p.dy;

                if (p.x < 0 || p.x > canvas.width) p.dx *= -1;
                if (p.y < 0 || p.y > canvas.height) p.dy *= -1;

                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = p.color;
                ctx.shadowBlur = 6;
                ctx.shadowColor = p.color;
                ctx.fill();
            });
            requestAnimationFrame(animate);
        }

        window.addEventListener("resize", () => {
            resize();
            createParticles();
        });

        resize();
        createParticles();
        animate();
    })();

    /* Custom Cursor Particle Effect (stars / hearts / sparkles) */
    (function() {
        // Only run on real desktop-style pointers; never on touch devices
        var isFinePointer = window.matchMedia &&
            window.matchMedia("(hover: hover) and (pointer: fine)").matches;
        var prefersReducedMotion = window.matchMedia &&
            window.matchMedia("(prefers-reduced-motion: reduce)").matches;

        if (!isFinePointer || prefersReducedMotion) return;

        var symbols = ["★", "✦", "✧", "♥", "✩"];
        var colors = ["#ffffff", "#f4efe0", "#d9b370", "#a9782b"];

        var lastSpawn = 0;
        var minInterval = 45; // ms between particles — keeps it light on performance
        var activeParticles = 0;
        var maxActiveParticles = 40; // hard cap so rapid mouse movement can't flood the DOM

        function spawnParticle(x, y) {
            if (activeParticles >= maxActiveParticles) return;

            var el = document.createElement("span");
            el.className = "home_header_cursor-particle";
            el.textContent = symbols[(Math.random() * symbols.length) | 0];

            var size = 10 + Math.random() * 9;
            var duration = 700 + Math.random() * 500;
            var driftX = (Math.random() - 0.5) * 46;
            var driftY = -18 - Math.random() * 34;

            el.style.left = x + "px";
            el.style.top = y + "px";
            el.style.fontSize = size + "px";
            el.style.color = colors[(Math.random() * colors.length) | 0];
            el.style.textShadow = "0 0 6px rgba(217, 179, 112, 0.55)";
            el.style.setProperty("--dx", driftX + "px");
            el.style.setProperty("--dy", driftY + "px");
            el.style.animationDuration = duration + "ms";

            document.body.appendChild(el);
            activeParticles++;

            el.addEventListener("animationend", function() {
                el.remove();
                activeParticles--;
            });
        }

        document.addEventListener("mousemove", function(e) {
            var now = performance.now();
            if (now - lastSpawn < minInterval) return;
            lastSpawn = now;
            spawnParticle(e.clientX, e.clientY);
        }, {
            passive: true
        });
    })();
</script>

<?php include('include/footer.php'); ?>
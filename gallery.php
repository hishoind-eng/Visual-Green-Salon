<?php include('include/header.php'); ?>

<style>
    .gallery-container {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .gallery-img {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 350px;
        margin-bottom: 30px;
        cursor: pointer;
        border-radius: 15px;
        border: 2px solid goldenrod;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .gallery-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: auto;
        background: rgba(0, 0, 0, 0.6);
        color: #fff;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.5s ease;
        padding: 10px;
        text-align: center;
    }

    .gallery-img:hover img {
        transform: scale(1.1);
    }

    .gallery-img:hover .overlay {
        opacity: 1;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .gallery-img {
            height: 200px;
        }
    }

    @media (max-width: 768px) {
        .gallery-img {
            margin-bottom: 10px;
        }
    }
</style>

<!-- ─── Gallery Header ─── -->
<section class="saloon-page-header" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(assets/img/gallery/gallery-header.jpeg);">
    <div class="saloon-page-header-content">
        <h4>OUR GALLERY</h4>
        <h1>Explore Our Grooming, Styling & Salon Experience</h1>
    </div>
</section>

<main class="main-content">

    <div class="gallery-container py-5">
        <div class="container">

            <div class="section-head pb-5 text-center" data-aos="fade-up">
                <p class="home_section_eyebrow" style="color: #da9a33">the visual green edge</p>
                <h2 class="home_section_title text-white">Why Gentlemen <em>Choose</em> Us</h2>
                <p class="home_section_sub text-white">Six reasons our chairs stay full and our clients keep coming back.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-hair-cut.jpg" alt="hair cut">
                        <div class="overlay"> Precision Haircut — Barber creating a clean modern fade.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-beard-grooming.jpeg" alt="beard grooming">
                        <div class="overlay">Beard Grooming — Detailed beard shaping with professional tools.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallery-hair-colour-men-100kb.jpeg" alt="Food 2">
                        <div class="overlay">World Of Colors — Premium men’s hair coloring with rich, natural tones and a clean modern finish. </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-interior.jpg" alt="Food 4">
                        <div class="overlay">Premium Salon Interior — Luxury black chair, mirror, green ambient lighting.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-hair-style.jpeg" alt="Food 3">
                        <div class="overlay">Hair Styling — Professional styling with blow dryer and brush.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-clasic-shave.jpg" alt="Food 4">
                        <div class="overlay"> Classic Shave — Traditional hot towel shave experience.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-hair-wash.jpg" alt="Food 1">
                        <div class="overlay">Hair Wash Experience — Relaxing shampoo and hair treatment.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-grooming-products.jpg" alt="Food 2">
                        <div class="overlay">Grooming Tools — Clippers, scissors, combs and premium barber tools arranged neatly.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-wrk-exp.jpg" alt="Food 3">
                        <div class="overlay">Barber at Work — Close-up of skilled hands during precision cutting.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-luxury.jpg" alt="Food 4">
                        <div class="overlay">Luxury Details — Salon mirror, leather chair, towels and grooming products.</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-hair-tex.webp" alt="Food 1">
                        <div class="overlay">Hair Texture Detail — Close-up of a finished fade or textured hairstyle.</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-img">
                        <img src="assets/img/gallery/gallary-relaxation.jpeg" alt="Food 2">
                        <div class="overlay">Relaxation Moment — Client enjoying a premium grooming treatment.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

<?php include('include/footer.php'); ?>
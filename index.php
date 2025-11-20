<?php get_header(); ?>

<main id="primary" class="site-main">

    <!-- DESIGN 1: FEATURED LISTINGS -->
    <section id="featured" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold featured-heading text-uppercase text-secondary">
                Our Featured Listing
            </h2>

            <div class="row g-4">
                <!-- CARD 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 property-card h-100">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/image.webp' ); ?>" class="card-img-top" alt="Modern living room">
                        <div class="card-body">
                            <h4 class="fw-bold">
                                £1,600 PCM
                                <span class="badge bg-danger ms-2">Let Agreed</span>
                            </h4>
                            <p class="text-muted mb-1">17 Carter Villas, Brockenhurst</p>
                            <p class="small text-secondary mb-0">
                                2 Bedrooms | 0 Bathrooms | Other
                            </p>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between align-items-center small text-muted">
                            <span>
                                <i class="fa-regular fa-heart me-1"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-clock me-1"></i> Available Now
                            </span>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 property-card h-100">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/image.webp' ); ?>" class="card-img-top" alt="Family house with garden">
                        <div class="card-body">
                            <h4 class="fw-bold">
                                £1,400 PCM
                                <span class="badge bg-warning text-dark ms-2">To Let</span>
                            </h4>
                            <p class="text-muted mb-1">56 Dumpton Cross, Exeter</p>
                            <p class="small text-secondary mb-0">
                                4 Bedrooms | 4 Bathrooms | House
                            </p>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between align-items-center small text-muted">
                            <span>
                                <i class="fa-regular fa-heart me-1"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-clock me-1"></i> Available Nov 6, 2022
                            </span>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 property-card h-100">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/image.webp' ); ?>" class="card-img-top" alt="Modern bedroom interior">
                        <div class="card-body">
                            <h4 class="fw-bold">
                                £290,000
                                <span class="badge bg-success ms-2">For Sale</span>
                            </h4>
                            <p class="text-muted mb-1">118 Kingsdale Ford, Sherborne</p>
                            <p class="small text-secondary mb-0">
                                5 Bedrooms | 1 Bathroom | House
                            </p>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between align-items-center small text-muted">
                            <span>
                                <i class="fa-regular fa-heart me-1"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-clock me-1"></i> Available for Sale
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DESIGN 2: GOOGLE REVIEWS SLIDER -->
    <section id="reviews" class="py-5" style="background:#d39500;">
        <div class="container text-center text-white">
            <h1 class="fw-bold mb-2">Google</h1>
            <h4 class="mb-5">Reviews <span aria-hidden="true">★★★★★</span></h4>

            <div id="reviewSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- SLIDE 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="p-4 bg-dark text-white rounded shadow-sm review-card">
                                    <p class="mb-2">★★★★★</p>
                                    <p class="mb-4 small">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam cursus nulla. Morbi aliquet accumsan est ac mollis.
                                    </p>
                                    <p class="small text-warning mb-0">G Phil Mitchel</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 bg-dark text-white rounded shadow-sm review-card">
                                    <p class="mb-2">★★★★★</p>
                                    <p class="mb-4 small">
                                        Nunc in quam orci. Quisque risus metus, aliquet nec metus sed, bibendum eleifend turpis. Quisque imperdiet ligula ante.
                                    </p>
                                    <p class="small text-warning mb-0">G Karl Pilkington</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 bg-dark text-white rounded shadow-sm review-card">
                                    <p class="mb-2">★★★★★</p>
                                    <p class="mb-4 small">
                                        Sed vel metus lobortis, tempor purus vel, iaculis dui. Integer malesuada enim at iaculis semper.
                                    </p>
                                    <p class="small text-warning mb-0">G Simon Pegg</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 2 -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="p-4 bg-dark text-white rounded shadow-sm review-card">
                                    <p class="mb-2">★★★★★</p>
                                    <p class="mb-4 small">
                                        Mauris posuere, lorem quis malesuada convallis, metus libero iaculis mi, quis scelerisque nulla arcu id arcu.
                                    </p>
                                    <p class="small text-warning mb-0">G Daniel Harris</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 bg-dark text-white rounded shadow-sm review-card">
                                    <p class="mb-2">★★★★★</p>
                                    <p class="mb-4 small">
                                        Nullam sodales mi nec orci euismod, nec tincidunt justo fermentum. Suspendisse et lacus at sapien ultricies iaculis.
                                    </p>
                                    <p class="small text-warning mb-0">G Maria Scott</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 bg-dark text-white rounded shadow-sm review-card">
                                    <p class="mb-2">★★★★★</p>
                                    <p class="mb-4 small">
                                        Cras dignissim, nisl sed faucibus suscipit, lorem libero pretium dui, vitae hendrerit magna urna a velit.
                                    </p>
                                    <p class="small text-warning mb-0">G Ryan Bishop</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#reviewSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#reviewSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <div class="carousel-indicators mt-4">
                    <button type="button" data-bs-target="#reviewSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#reviewSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

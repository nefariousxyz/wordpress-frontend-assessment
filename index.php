<?php get_header(); ?>

<main id="primary" class="site-main">

	 <!-- HERO SECTION -->
    <section class="hero-section d-flex align-items-center text-white"
        style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/image.webp' ); ?>');">
        <div class="hero-overlay"></div>

        <!-- Slider arrows (static for now, just visual like reference) -->
        <button class="hero-arrow hero-arrow-left d-none d-md-flex">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button class="hero-arrow hero-arrow-right d-none d-md-flex">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

        <div class="container position-relative">
            <div class="col-md-8 col-lg-6">
                <p class="hero-kicker text-uppercase mb-3">With Franz Abiva Multipurpose Template</p>
                <h1 class="hero-title mb-3">Book Your Listing</h1>
                <p class="hero-subtitle mb-4">
                    Contact us for more information
                </p>
                <a href="#featured" class="btn btn-hero-outline">
                    Book Now
                </a>
            </div>
        </div>
    </section>
	
    <!-- DESIGN 1: FEATURED LISTINGS -->
    <section id="featured" class="py-5 featured-section">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-4 gap-3">
                <div>
                    <p class="text-uppercase text-muted small mb-1 tracking-wide">Handpicked for you</p>
                    <h2 class="section-title mb-0">
                        Our Featured Listing
                    </h2>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge rounded-pill bg-light text-muted border">All</span>
                    <span class="badge rounded-pill bg-primary-subtle text-primary fw-semibold">To Let</span>
                    <span class="badge rounded-pill bg-success-subtle text-success fw-semibold">For Sale</span>
                </div>
            </div>

            <div class="row g-4">
                <!-- CARD 1 -->
                <div class="col-md-4">
                    <div class="card property-card h-100 border-0 shadow-sm">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/image.webp' ); ?>" class="card-img-top" alt="Modern living room">
                            <span class="badge badge-status bg-danger position-absolute top-0 start-0 m-3">
                                Let Agreed
                            </span>
                            <button class="favorite-btn position-absolute top-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow-sm">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="text-muted text-uppercase small mb-1">Apartment · Brockenhurst</p>
                            <h4 class="fw-bold mb-2 text-dark">£1,600 PCM</h4>
                            <p class="mb-3 text-secondary">17 Carter Villas, Brockenhurst</p>
                            <div class="d-flex flex-wrap gap-3 small text-muted property-meta">
                                <span><i class="fa-solid fa-bed me-1"></i>2 Bedrooms</span>
                                <span><i class="fa-solid fa-bath me-1"></i>0 Bathrooms</span>
                                <span><i class="fa-solid fa-building me-1"></i>Other</span>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between align-items-center small text-muted border-0 pt-0">
                            <span class="text-muted">
                                <i class="fa-regular fa-clock me-1"></i>Available Now
                            </span>
                            <a href="#" class="link-primary text-decoration-none fw-semibold small">
                                View details
                                <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-md-4">
                    <div class="card property-card h-100 border-0 shadow-sm">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/image.webp' ); ?>" class="card-img-top" alt="Family house with garden">
                            <span class="badge badge-status bg-warning text-dark position-absolute top-0 start-0 m-3">
                                To Let
                            </span>
                            <button class="favorite-btn position-absolute top-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow-sm">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="text-muted text-uppercase small mb-1">House · Exeter</p>
                            <h4 class="fw-bold mb-2 text-dark">£1,400 PCM</h4>
                            <p class="mb-3 text-secondary">56 Dumpton Cross, Exeter</p>
                            <div class="d-flex flex-wrap gap-3 small text-muted property-meta">
                                <span><i class="fa-solid fa-bed me-1"></i>4 Bedrooms</span>
                                <span><i class="fa-solid fa-bath me-1"></i>4 Bathrooms</span>
                                <span><i class="fa-solid fa-house-chimney me-1"></i>House</span>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between align-items-center small text-muted border-0 pt-0">
                            <span class="text-muted">
                                <i class="fa-regular fa-clock me-1"></i>Available Nov 6, 2022
                            </span>
                            <a href="#" class="link-primary text-decoration-none fw-semibold small">
                                View details
                                <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-md-4">
                    <div class="card property-card h-100 border-0 shadow-sm">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/image.webp' ); ?>" class="card-img-top" alt="Modern bedroom interior">
                            <span class="badge badge-status bg-success position-absolute top-0 start-0 m-3">
                                For Sale
                            </span>
                            <button class="favorite-btn position-absolute top-0 end-0 m-3 btn btn-light btn-sm rounded-circle shadow-sm">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="text-muted text-uppercase small mb-1">House · Sherborne</p>
                            <h4 class="fw-bold mb-2 text-dark">£290,000</h4>
                            <p class="mb-3 text-secondary">118 Kingsdale Ford, Sherborne</p>
                            <div class="d-flex flex-wrap gap-3 small text-muted property-meta">
                                <span><i class="fa-solid fa-bed me-1"></i>5 Bedrooms</span>
                                <span><i class="fa-solid fa-bath me-1"></i>1 Bathroom</span>
                                <span><i class="fa-solid fa-house-chimney me-1"></i>House</span>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between align-items-center small text-muted border-0 pt-0">
                            <span class="text-muted">
                                <i class="fa-regular fa-clock me-1"></i>Available for Sale
                            </span>
                            <a href="#" class="link-primary text-decoration-none fw-semibold small">
                                View details
                                <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DESIGN 2: GOOGLE REVIEWS SLIDER -->
    <section id="reviews" class="py-5 reviews-section">
        <div class="container text-center text-white">
            <div class="mb-4">
                <div class="d-inline-flex align-items-center px-3 py-1 bg-dark bg-opacity-25 rounded-pill small text-uppercase tracking-wide">
                    <span class="me-2">What our clients say</span>
                    <span class="badge bg-light text-dark ms-1">5.0 Rating</span>
                </div>
            </div>

            <h1 class="fw-bold mb-1">Google Reviews</h1>
            <p class="mb-4 opacity-75">Rated 5.0 by our tenants and landlords</p>

            <div class="mb-4 d-flex justify-content-center align-items-center gap-2">
                <span class="display-6 fw-semibold">5.0</span>
                <span class="rating-stars" aria-hidden="true">★★★★★</span>
            </div>

            <div id="reviewSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- SLIDE 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="p-4 review-card h-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="rating-stars small">★★★★★</span>
                                        <span class="small text-uppercase text-warning">Verified</span>
                                    </div>
                                    <p class="mb-4 small">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam cursus nulla. Morbi aliquet accumsan est ac mollis.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="text-start">
                                            <p class="mb-0 small fw-semibold">G Phil Mitchel</p>
                                            <p class="mb-0 small text-muted">Tenant · Google Review</p>
                                        </div>
                                        <i class="fa-brands fa-google fa-lg text-warning"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="p-4 review-card h-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="rating-stars small">★★★★★</span>
                                        <span class="small text-uppercase text-warning">Verified</span>
                                    </div>
                                    <p class="mb-4 small">
                                        Nunc in quam orci. Quisque risus metus, aliquet nec metus sed, bibendum eleifend turpis. Quisque imperdiet ligula ante.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="text-start">
                                            <p class="mb-0 small fw-semibold">G Karl Pilkington</p>
                                            <p class="mb-0 small text-muted">Landlord · Google Review</p>
                                        </div>
                                        <i class="fa-brands fa-google fa-lg text-warning"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="p-4 review-card h-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="rating-stars small">★★★★★</span>
                                        <span class="small text-uppercase text-warning">Verified</span>
                                    </div>
                                    <p class="mb-4 small">
                                        Sed vel metus lobortis, tempor purus vel, iaculis dui. Integer malesuada enim at iaculis semper.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="text-start">
                                            <p class="mb-0 small fw-semibold">G Simon Pegg</p>
                                            <p class="mb-0 small text-muted">Tenant · Google Review</p>
                                        </div>
                                        <i class="fa-brands fa-google fa-lg text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SLIDE 2 -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="p-4 review-card h-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="rating-stars small">★★★★★</span>
                                        <span class="small text-uppercase text-warning">Verified</span>
                                    </div>
                                    <p class="mb-4 small">
                                        Mauris posuere, lorem quis malesuada convallis, metus libero iaculis mi, quis scelerisque nulla arcu id arcu.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="text-start">
                                            <p class="mb-0 small fw-semibold">G Daniel Harris</p>
                                            <p class="mb-0 small text-muted">Tenant · Google Review</p>
                                        </div>
                                        <i class="fa-brands fa-google fa-lg text-warning"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="p-4 review-card h-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="rating-stars small">★★★★★</span>
                                        <span class="small text-uppercase text-warning">Verified</span>
                                    </div>
                                    <p class="mb-4 small">
                                        Nullam sodales mi nec orci euismod, nec tincidunt justo fermentum. Suspendisse et lacus at sapien ultricies iaculis.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="text-start">
                                            <p class="mb-0 small fw-semibold">G Maria Scott</p>
                                            <p class="mb-0 small text-muted">Landlord · Google Review</p>
                                        </div>
                                        <i class="fa-brands fa-google fa-lg text-warning"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="p-4 review-card h-100">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="rating-stars small">★★★★★</span>
                                        <span class="small text-uppercase text-warning">Verified</span>
                                    </div>
                                    <p class="mb-4 small">
                                        Cras dignissim, nisl sed faucibus suscipit, lorem libero pretium dui, vitae hendrerit magna urna a velit.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="text-start">
                                            <p class="mb-0 small fw-semibold">G Ryan Bishop</p>
                                            <p class="mb-0 small text-muted">Tenant · Google Review</p>
                                        </div>
                                        <i class="fa-brands fa-google fa-lg text-warning"></i>
                                    </div>
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

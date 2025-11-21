<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="WordPress front-end assessment page using Bootstrap 5 and a responsive layout." />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <!-- TOP INFO BAR -->
    <div class="topbar d-none d-md-block">
        <div class="container d-flex justify-content-between align-items-center small">
            <div class="d-flex align-items-center gap-3">
                <span><i class="fa-solid fa-location-dot me-1"></i> Davao City, Philippines</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="d-flex align-items-center gap-2 topbar-social">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                </div>
                <span><i class="fa-solid fa-phone me-1"></i> +63 (977) 7157-826</span>
            </div>
        </div>
    </div>

    <!-- MAIN NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark main-nav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                
                <div class="brand-mark d-flex align-items-center justify-content-center me-2">
                    <span class="fw-bold">F</span>
                </div>
                <div class="d-flex flex-column lh-1">
                    <span class="fw-bold">FRANZ</span>
                    <span class="fw-normal small">ASSESSMENT</span>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'wp-frontend-assessment' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'navbar-nav ms-lg-4 mb-2 mb-lg-0',
                            'fallback_cb'    => 'wfa_fallback_menu',
                        )
                    );
                ?>

                <ul class="navbar-nav ms-lg-4 align-items-lg-center navbar-icons">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link position-relative" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="badge rounded-pill bg-light text-dark cart-count">2</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php
function wfa_fallback_menu() {
    echo '<ul class="navbar-nav ms-lg-4 mb-2 mb-lg-0">';
    echo '<li class="nav-item"><a class="nav-link active" href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( home_url( '/jobs/' ) ) . '">Jobs</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#reviews">Testimonials</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#news">News</a></li>';
    echo '</ul>';
}
?>

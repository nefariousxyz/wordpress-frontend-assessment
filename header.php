<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="WordPress front-end assessment page using Bootstrap 5 and a responsive layout." />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="border-bottom">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <i class="fa-solid fa-house-chimney text-primary me-2"></i>
                <span>Franz<span class="text-primary"> Assessment</span></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'wp-frontend-assessment' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
                            'fallback_cb'    => 'wfa_fallback_menu',
                        )
                    );
                ?>
            </div>
        </div>
    </nav>
</header>

<?php

function wfa_fallback_menu() {
    echo '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">';
    echo '<li class="nav-item"><a class="nav-link active" href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( home_url( '/jobs/' ) ) . '">Jobs</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#reviews">Reviews</a></li>';
    echo '</ul>';
}
?>

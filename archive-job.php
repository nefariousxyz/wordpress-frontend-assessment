<?php get_header(); ?>

<main class="job-list-page py-5">
    <div class="container">

        <?php global $wp_query; ?>
        <!-- HERO HEADER FOR LIST PAGE -->
        <section class="job-list-hero mb-4">
            <div class="row align-items-center g-3">
                <div class="col-md-8">
                    <p class="job-breadcrumb text-uppercase mb-1">
                        Careers
                    </p>
                    <h1 class="job-list-title mb-2">Job Listings</h1>
                    <p class="job-list-subtitle mb-0">
                        Explore current opportunities and join our growing team.
                    </p>
                </div>
                <div class="col-md-4 text-md-end">
                    <span class="jobs-count-pill">
                        <?php echo esc_html( $wp_query->found_posts ); ?> open
                        <?php echo ( $wp_query->found_posts === 1 ) ? 'position' : 'positions'; ?>
                    </span>
                </div>
            </div>
        </section>

        <?php if ( have_posts() ) : ?>
            <div class="row g-4">
                <?php while ( have_posts() ) : the_post();
                    $job_title = get_post_meta( get_the_ID(), '_wfa_job_title', true );
                    $salary    = get_post_meta( get_the_ID(), '_wfa_job_salary', true );
                    $location  = get_post_meta( get_the_ID(), '_wfa_job_location', true );
                ?>
                    <div class="col-md-6 col-lg-4">
                        <article <?php post_class( 'card job-card border-0 shadow-sm h-100' ); ?>>
                            <div class="card-body d-flex flex-column">
                                <h2 class="h5 job-card-title mb-2">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo $job_title ? esc_html( $job_title ) : get_the_title(); ?>
                                    </a>
                                </h2>

                                <div class="d-flex flex-wrap gap-2 mb-3 job-card-meta">
                                    <?php if ( $location ) : ?>
                                        <span class="badge job-chip job-chip-location">
                                            <i class="fa-solid fa-location-dot me-1"></i>
                                            <?php echo esc_html( $location ); ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if ( $salary ) : ?>
                                        <span class="badge job-chip job-chip-salary">
                                            <i class="fa-solid fa-sterling-sign me-1"></i>
                                            <?php echo esc_html( $salary ); ?>
                                        </span>
                                    <?php endif; ?>

                                    <span class="badge job-chip job-chip-type">
                                        <i class="fa-regular fa-clock me-1"></i>
                                        Full-time
                                    </span>
                                </div>

                                <div class="job-card-excerpt small text-muted mb-3">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div class="mt-auto d-flex justify-content-between align-items-center small text-muted job-card-footer">
                                    <span>
                                        Posted <?php echo get_the_date(); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>" class="job-card-link text-decoration-none">
                                        View role <i class="fa-solid fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="mt-4 job-pagination">
                <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '&laquo;',
                    'next_text' => '&raquo;',
                ) ); ?>
            </div>

        <?php else : ?>
            <p>No jobs found.</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>

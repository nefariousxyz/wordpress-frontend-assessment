<?php get_header(); ?>

<main class="job-detail-page py-5">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $job_title = get_post_meta( get_the_ID(), '_wfa_job_title', true );
            $salary    = get_post_meta( get_the_ID(), '_wfa_job_salary', true );
            $location  = get_post_meta( get_the_ID(), '_wfa_job_location', true );
        ?>
            <article <?php post_class(); ?>>

                <!-- HERO CARD -->
                <div class="card job-hero-card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
                            <div>
                                <p class="job-breadcrumb text-uppercase mb-1">
                                    Careers / <?php echo esc_html( $job_title ? $job_title : get_the_title() ); ?>
                                </p>
                                <h1 class="job-title mb-2">
                                    <?php echo $job_title ? esc_html( $job_title ) : get_the_title(); ?>
                                </h1>
                            </div>
                            <div class="text-md-end">
                                <a href="#job-description" class="btn btn-hero-outline job-apply-btn">
                                    Apply Now
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-2 job-meta-chips">
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

                            <span class="job-posted small text-muted ms-md-2">
                                Posted on <?php echo get_the_date(); ?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- MAIN DESCRIPTION -->
                    <div class="col-lg-8">
                        <div class="card job-content-card border-0 shadow-sm mb-4">
                            <div class="card-body" id="job-description">
                                <h2 class="h5 mb-3">Job Description</h2>
                                <div class="job-description-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SIDEBAR SUMMARY -->
                    <div class="col-lg-4">
                        <div class="card job-sidebar-card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <h3 class="h6 text-uppercase text-muted mb-3">Role Summary</h3>

                                <ul class="list-unstyled small mb-4 job-sidebar-list">
                                    <?php if ( $salary ) : ?>
                                        <li>
                                            <span class="label">Salary</span>
                                            <span class="value"><?php echo esc_html( $salary ); ?></span>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ( $location ) : ?>
                                        <li>
                                            <span class="label">Location</span>
                                            <span class="value"><?php echo esc_html( $location ); ?></span>
                                        </li>
                                    <?php endif; ?>

                                    <li>
                                        <span class="label">Employment Type</span>
                                        <span class="value">Full-time</span>
                                    </li>

                                    <li>
                                        <span class="label">Posted</span>
                                        <span class="value"><?php echo get_the_date(); ?></span>
                                    </li>
                                </ul>

                                <a href="#job-description" class="btn btn-primary w-100 mb-2">
                                    Apply for this role
                                </a>
                                <a href="<?php echo esc_url( get_post_type_archive_link( 'job' ) ); ?>" class="btn btn-outline-secondary w-100">
                                    ← Back to all jobs
                                </a>
                            </div>
                        </div>

                        <div class="card job-sidebar-card border-0 shadow-sm">
                            <div class="card-body">
                                <h3 class="h6 text-uppercase text-muted mb-3">Share this job</h3>
                                <div class="d-flex gap-2">
                                    <a href="#" class="btn btn-sm btn-outline-secondary flex-fill">
                                        <i class="fa-brands fa-linkedin me-1"></i> LinkedIn
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary flex-fill">
                                        <i class="fa-brands fa-facebook-f me-1"></i> Facebook
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </article>

        <?php endwhile; else : ?>
            <p>Job not found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

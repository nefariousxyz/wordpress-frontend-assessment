<?php get_header(); ?>

<main class="container py-5">
    <h1 class="mb-4">Job Listings</h1>

    <?php if ( have_posts() ) : ?>
        <div class="row g-4">
            <?php while ( have_posts() ) : the_post(); 
                $job_title = get_post_meta( get_the_ID(), '_wfa_job_title', true );
                $salary    = get_post_meta( get_the_ID(), '_wfa_job_salary', true );
                $location  = get_post_meta( get_the_ID(), '_wfa_job_location', true );
            ?>
                <div class="col-md-6">
                    <article <?php post_class('border rounded p-3 h-100'); ?>>
                        <h2 class="h5">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo $job_title ? esc_html( $job_title ) : get_the_title(); ?>
                            </a>
                        </h2>

                        <ul class="list-unstyled small mb-2">
                            <?php if ( $salary ) : ?>
                                <li><strong>Salary:</strong> <?php echo esc_html( $salary ); ?></li>
                            <?php endif; ?>
                            <?php if ( $location ) : ?>
                                <li><strong>Location:</strong> <?php echo esc_html( $location ); ?></li>
                            <?php endif; ?>
                        </ul>

                        <div class="small text-muted">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="mt-4">
            <?php the_posts_pagination(); ?>
        </div>

    <?php else : ?>
        <p>No jobs found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
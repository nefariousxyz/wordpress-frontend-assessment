<?php get_header(); ?>

<main class="container py-5">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        $job_title = get_post_meta( get_the_ID(), '_wfa_job_title', true );
        $salary    = get_post_meta( get_the_ID(), '_wfa_job_salary', true );
        $location  = get_post_meta( get_the_ID(), '_wfa_job_location', true );
    ?>
        <article <?php post_class(); ?>>
            <h1 class="mb-3">
                <?php echo $job_title ? esc_html( $job_title ) : get_the_title(); ?>
            </h1>

            <ul class="list-unstyled mb-4">
                <?php if ( $salary ) : ?>
                    <li><strong>Salary:</strong> <?php echo esc_html( $salary ); ?></li>
                <?php endif; ?>
                <?php if ( $location ) : ?>
                    <li><strong>Location:</strong> <?php echo esc_html( $location ); ?></li>
                <?php endif; ?>
            </ul>

            <div class="mb-4">
                <?php the_content(); ?>
            </div>

            <a href="<?php echo esc_url( get_post_type_archive_link( 'job' ) ); ?>" class="btn btn-outline-secondary">
                ← Back to all jobs
            </a>
        </article>

    <?php endwhile; else : ?>
        <p>Job not found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
<?php
/**
 * Assessment Theme - Franz Abiva
 * Wordpress Developer Assessment ;)
 */

if ( ! function_exists( 'wfa_setup' ) ) {
    function wfa_setup() {

        // Let WordPress manage the document title
        add_theme_support( 'title-tag' );

        // Featured images / thumbnails
        add_theme_support( 'post-thumbnails' );

        // Register main menu
        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'wp-frontend-assessment' ),
            )
        );
    }
}
add_action( 'after_setup_theme', 'wfa_setup' );

/**
 * Enqueue scripts and styles
 */
function wfa_enqueue_assets() {
    // Google Font
    wp_enqueue_style(
        'wfa-google-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap',
        array(),
        null
    );

    // Bootstrap 5 CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // Theme stylesheet
    wp_enqueue_style(
        'wfa-style',
        get_stylesheet_uri(),
        array( 'bootstrap-css', 'wfa-google-fonts', 'font-awesome' ),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    // Bootstrap JS bundle
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'wfa_enqueue_assets' );

/**
 * To register "Jobs" custom post type
 */
function wfa_register_jobs_cpt() {

    $labels = array(
        'name'               => __( 'Jobs', 'wp-frontend-assessment' ),
        'singular_name'      => __( 'Job', 'wp-frontend-assessment' ),
        'add_new'            => __( 'Add New Job', 'wp-frontend-assessment' ),
        'add_new_item'       => __( 'Add New Job', 'wp-frontend-assessment' ),
        'edit_item'          => __( 'Edit Job', 'wp-frontend-assessment' ),
        'new_item'           => __( 'New Job', 'wp-frontend-assessment' ),
        'view_item'          => __( 'View Job', 'wp-frontend-assessment' ),
        'search_items'       => __( 'Search Jobs', 'wp-frontend-assessment' ),
        'not_found'          => __( 'No jobs found', 'wp-frontend-assessment' ),
        'not_found_in_trash' => __( 'No jobs found in Trash', 'wp-frontend-assessment' ),
        'all_items'          => __( 'All Jobs', 'wp-frontend-assessment' ),
        'menu_name'          => __( 'Jobs', 'wp-frontend-assessment' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array( 'slug' => 'jobs' ),
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-id-alt',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'job', $args );
}
add_action( 'init', 'wfa_register_jobs_cpt' );

/**
 * Add meta box for Job custom fields
 */
function wfa_add_job_meta_boxes() {
    add_meta_box(
        'wfa_job_details',
        __( 'Job Details', 'wp-frontend-assessment' ),
        'wfa_job_details_meta_box_callback',
        'job',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'wfa_add_job_meta_boxes' );

/**
 * Meta box HTML
 */
function wfa_job_details_meta_box_callback( $post ) {
   
    wp_nonce_field( 'wfa_save_job_details', 'wfa_job_details_nonce' );

    $job_title = get_post_meta( $post->ID, '_wfa_job_title', true );
    $salary    = get_post_meta( $post->ID, '_wfa_job_salary', true );
    $location  = get_post_meta( $post->ID, '_wfa_job_location', true );
    ?>
    <p>
        <label for="wfa_job_title"><strong><?php _e( 'Job Title', 'wp-frontend-assessment' ); ?></strong></label><br>
        <input type="text" id="wfa_job_title" name="wfa_job_title" value="<?php echo esc_attr( $job_title ); ?>" class="widefat">
    </p>
    <p>
        <label for="wfa_job_salary"><strong><?php _e( 'Salary', 'wp-frontend-assessment' ); ?></strong></label><br>
        <input type="text" id="wfa_job_salary" name="wfa_job_salary" value="<?php echo esc_attr( $salary ); ?>" class="widefat">
    </p>
    <p>
        <label for="wfa_job_location"><strong><?php _e( 'Location', 'wp-frontend-assessment' ); ?></strong></label><br>
        <input type="text" id="wfa_job_location" name="wfa_job_location" value="<?php echo esc_attr( $location ); ?>" class="widefat">
    </p>
    <?php
}

/**
 * Save meta box values
 */
function wfa_save_job_details( $post_id ) {
    // Check nonce
    if ( ! isset( $_POST['wfa_job_details_nonce'] ) ||
         ! wp_verify_nonce( $_POST['wfa_job_details_nonce'], 'wfa_save_job_details' ) ) {
        return;
    }

    // Autosave??
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check permissions
    if ( isset( $_POST['post_type'] ) && 'job' === $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    // Save Job Title
    if ( isset( $_POST['wfa_job_title'] ) ) {
        update_post_meta( $post_id, '_wfa_job_title', sanitize_text_field( $_POST['wfa_job_title'] ) );
    }

    // Save Salary
    if ( isset( $_POST['wfa_job_salary'] ) ) {
        update_post_meta( $post_id, '_wfa_job_salary', sanitize_text_field( $_POST['wfa_job_salary'] ) );
    }

    // Save Location
    if ( isset( $_POST['wfa_job_location'] ) ) {
        update_post_meta( $post_id, '_wfa_job_location', sanitize_text_field( $_POST['wfa_job_location'] ) );
    }
}
add_action( 'save_post_job', 'wfa_save_job_details' );
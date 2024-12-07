<?php

/*
Template Name: My Custom Job Listing Page Template
*/
?>
<?php
get_header();

$message = '';
if (function_exists('jobster_activate_user_account')) {
    $message = jobster_activate_user_account();
    
} 
if (is_user_logged_in()) {
    global $current_user;
}
?>
<br><br><br><br><br>
<div class="container">
    <div class="row">
    <?php
$args = array(
    'post_type' => 'job',
    'posts_per_page' => -1, // To fetch all posts
    'order' => 'DESC', // Order by descending date
    'orderby' => 'date' // Sort by date
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>
    <div class="row">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-6">
                <div class="card border-dark mb-4"> <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else : ?>
    <p>No jobs found.</p>
<?php endif; 
wp_reset_postdata();
?>
    </div>
</div>
<?php get_footer(); ?>
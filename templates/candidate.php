<?php


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
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Candidate Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $args = array(
                        'post_type' => 'candidate',
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                        'orderby' => 'date'
                    );

                    $the_query = new WP_Query($args);
                
            
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <tr>
                                <td><?php the_title(); ?></td>
                                <td><?php the_content(); ?></td>
                                <td><a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                <i class="fa fa-eye" aria-hidden="true"></i> 
                                </a></td>
                            </tr>
                        <?php endwhile;
                    else : ?>
                        <tr>
                            <td colspan="3">No candidates found.</td>
                        </tr>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

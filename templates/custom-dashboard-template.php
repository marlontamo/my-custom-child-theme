<?php
/*
Template Name: My Custom Dashboard Template
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
$candidate= wp_count_posts('candidate')->publish;
$jobs= wp_count_posts('job')->publish;
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-primary text-white order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Candidates</h6>
                    <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span><?php echo (int)$candidate; ?></span></h2>
                    <p class="m-b-0">On-Progress Applications<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-warning text-white order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Available Jobs</h6>
                    <h2 class="text-right"><i class="fa fa fa-suitcase f-left"></i><span><?php echo (int)$jobs;?></span></h2>
                    <p class="m-b-0">Completed Orders<span class="f-right">61</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-success text-white order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Interviews</h6>
                    <h2 class="text-right"><i class="fa fa-users f-left"></i><span>5</span></h2>
                    <p class="m-b-0">Completed Interviews<span class="f-right">11</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-warning text-white order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Suggestions</h6>
                    <h2 class="text-right"><i class="fa fa-bullhorn f-left"></i><span>6</span></h2>
                    <p class="m-b-0">Completed Suggestions<span class="f-right">14</span></p>
                </div>
            </div>
        </div>
	</div>
</div>
<?php get_footer(); ?>
<?php
/*
Template Name: My Custom Profile Page Template
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
    $current_user_id = get_current_user_id();
    $avatar_url = get_avatar_url( $current_user_id );



}
?>
<br><br><br><br><br>
<div class=" mt-5 container">
    <div class="main-body">
    
          
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $avatar_url;?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $current_user->user_nicename; ?></h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="mb-0" href="http://localhost/wp-test/dashboard/">Dashboard</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="mb-0" href="http://localhost/wp-test/candidate/">Candidate</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="mb-0" href="http://localhost/wp-test/job-lists">Jobs</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="http://localhost/wp-test/home">Profile</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="#">Test</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
            <?php if(is_page('dashboard')){
                get_template_part('templates/dashboard');
              }elseif(is_page('job-lists')){
                get_template_part('templates/job-lists');
              }elseif(is_page('candidate')){
                get_template_part('templates/candidate');
              }else{
                get_template_part('templates/template1');
              }
            ?>

            </div>
          </div>

        </div>
    </div>

<?php get_footer(); ?>
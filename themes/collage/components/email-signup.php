<!-- Signup Form Section -->
<section id="learn-more">
  <div class="container">
    <div class="clearfix relative">
      <div class="signup-form-copy md-col md-col-6 sm-col sm-col-12 px3 py3 m0">
        <h2 class="h3 pt3 mb0 center"><?php echo the_field('signup_form_heading'); ?></h2>
        <p class="h6 black pb4 mt1 center"><?php echo the_field('signup_form_subheading'); ?></p>
      </div>
      <div class="signup-form-container md-col md-col-6 sm-col sm-col-12 px3 py3">
        <!-- Ninja Form -->
        <?php  if( function_exists( 'ninja_forms_display_form' ) ) { ninja_forms_display_form( 1 ); 
        } ?>
      </div>
    </div>
  </div>
</section>

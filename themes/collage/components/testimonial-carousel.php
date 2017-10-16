<?php
/**
 * Testimonial Carousel Component
 **/
?>

<!-- Testimonial Section -->
<div class="container my4 py4">
  <section id="testimonials">
    <div class="tesimonials-heading-copy center mb4">
      <h2 class="h3 mb1 black"><?php echo the_field('testimonial_heading'); ?></h2>
      <p class="h6 grey m0"><?php echo the_field('testimonial_subheading'); ?></p>
    </div>
    <div class="slides">
    <?php
    $args = array(
      'post_type' => array( 'testimonial' )
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="slide" style="background-image: url('<?php echo the_field('background_image'); ?>')">
        <div class="testimonial-copy pb1 align-middle inline">
          <p class="h7 m0">"<?php echo the_field('testimonial') ?>"</p>
        </div><!--/.testimonial-copy-->
        <div class="client-info">
          <div class="client-photo pt1">
            <img src="<?php echo the_field('avatar'); ?>" class="fit">     
          </div>
          <div class="client-info-copy">
            <p class="client-name h10 m0"><?php echo the_field('name'); ?></p>
            <p class="client-company-info h10 m0"><?php echo the_field('title'); ?>, <?php echo the_field('company'); ?></p>
          </div>
        </div><!--/.client-info-->
      </div><!--/.slide-->
    <?php endwhile;
    ?>
    </div>
  </section>
</div>

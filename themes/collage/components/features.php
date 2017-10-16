<?php
/**
* Features Component - repeated throughout site
**/
?>

<!-- Features Section -->
<section id="features" class="clearfix py4 px3">
  <div class="features-top-copy container pb3">
    <h2 class="h3 black center mb1"><?php echo the_field('features_heading'); ?></h2>
    <p class="h7 grey center m0 col-sm-10"><?php echo the_field('features_subheading'); ?></p>
  </div>
  <div class="features-container clearfix">
    <div class="features-img-container col lg-col-7 md-col-12 inline-block">
      <img src="<?php echo the_field('features_image') ?>" alt="" class="fit">
    </div>
    <div class="features-copy-container col lg-col-5 md-col-12 inline-block">
      <ul class="features-list list-reset mt3">
      <?php
      if (have_rows('feature')) :
        while (have_rows('feature')) : the_row();
        ?>
        <li class="mt3">
          <p class="black h7 medium mb0"><?php echo the_sub_field('feature_name'); ?></p>
          <p class="grey h8 light mt1"><?php echo the_sub_field('feature_description'); ?></p>
        </li>
        <?php  
        endwhile;
      endif;
      ?>
      </ul>
    </div>
  </div>
</section>

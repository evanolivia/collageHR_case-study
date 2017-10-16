<?php
/**
 * Hero Component - repeated throughout site
 **/
?>

<!-- Hero -->
<div class="container">
  <section id="hero" class="clearfix">

    <?php
    /** Hero - Desktop**/
    ?>

    <div class="hero-copy-container desktop col col-6 py3">
      <div class="hero-logo sm-col-3">
        <img src="/wp-content/themes/collage/assets/img/logo-nav@2x.png" alt="" class="fit">
      </div>
      <h1 class="h3 black mb1 mr3 hero-heading sm-col-10"><?php echo the_field('hero_heading'); ?></h1>
      <p class="h6 grey light mb3 mr3"><?php echo the_field('hero_subheading'); ?></p>
      <a href="#learn-more" class="btn-primary"><?php echo the_field('hero_button_text'); ?></a>
      <div class="hero-features-list my4">
        <ul class="list-reset clearfix m0">
        <?php
        if (have_rows('hero_features_list')) :
          while (have_rows('hero_features_list')) : the_row();
          ?>
          <li class="col col-6 py1 px1">
            <img src="<?php echo the_sub_field('feature_icon'); ?>" class="feature-icon col-1">
            <p class="grey h9 light m0"><?php echo the_sub_field('feature_name'); ?></p>
          </li>
          <?php  
          endwhile;
        endif;
        ?>
      </ul>
      </div>
    </div><!--/.hero-copy-container .desktop-->
    <div class="hero-img-container desktop absolute top-0 right-0 col col-6" style="background-image: url('<?php echo the_field('hero_image'); ?>')">
    </div><!--/.hero-img-container .desktop-->

    <?php
    /** Hero - Mobile**/
    ?>
    <div class="hero-mobile pb4" style="background-image: url('<?php echo the_field('hero_image'); ?>')">
      <div class="hero-logo pt2">
        <img src="/wp-content/themes/collage/assets/img/logo-white@2x.png" alt="">
      </div>
      <div class="hero-mobile-copy mt4 py4 max-width-1">
        <p class="h2 white mt3 hero-heading"><?php echo the_field('hero_heading'); ?></p>
        <p class="h6 white light mb3 mr3"><?php echo the_field('hero_subheading'); ?></p>
        <a href="#learn-more" class="btn-primary mb4"><?php echo the_field('hero_button_text'); ?></a>
      </div>
    </div> 
  </section>
</div>

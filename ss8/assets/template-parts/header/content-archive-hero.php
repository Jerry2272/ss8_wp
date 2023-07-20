<!-- <div  class="div_section mb-0 pb-0 inner-hero-section-page"   style="background-image:linear-gradient(rgba(1, 64, 59, 0), rgba(1, 64, 59, 1)), url('https://8.startupsouth.org/sandbox/wp-content/uploads/2023/06/hero-section-bg.png');" >
    <div class="container-fluid hero-overlay">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 text-hero">
        
        </div>
      </div>
    </div>
  </div> -->

  <?php
 if (is_category('tickets') ):
?>
<!-- hero_section-->
<div class="div_section mb-0 pb-0 inner-hero-section-page container-fluid"  style="background-image:linear-gradient( rgba(10, 30, 54, 0.8), rgba(10, 30, 54, 0.8)), url(' <?php if (has_post_thumbnail()) {echo get_the_post_thumbnail_url();} else { echo get_template_directory_uri() . '/assets/images/hero-section-bg.png';} ?>'); background-size: cover; background-position: top; background-repeat: no-repeat;" >
<div class="row">
  <div class="col-lg-12  col-md-12 text-hero">
  <div class="text">
          <?php   single_cat_title( '<h1 class="text-white">', '</h1>' ); ?>
        </div>
  </div>
</div>
  </div>

<?php else: ?>

<!-- hero_section-->
<div class="div_section mb-0 pb-0 inner-hero-section-page container-fluid"  style="background-image:linear-gradient( rgba(10, 30, 54, 0.8), rgba(10, 30, 54, 0.8)), url(' <?php if (has_post_thumbnail()) {echo get_the_post_thumbnail_url();} else { echo get_template_directory_uri() . '/assets/images/hero-section-bg.png';} ?>'); background-size: cover; background-position: top; background-repeat: no-repeat;" >
<div class="row">
  <div class="col-lg-12  col-md-12 text-hero">
  <div class="text">
          <?php   single_cat_title( '<h1 class="text-white">', '</h1>' ); ?>
        </div>
  </div>
</div>
  </div>

<?php endif; ?>
 
 
 


  


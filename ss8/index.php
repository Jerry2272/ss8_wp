<?php
/* *
 * The main template file. */


get_header();
?>
  <?php 
        get_template_part( 'assets/template-parts/header/content', 'home-hero' ); 
        get_template_part( 'assets/template-parts/misc/content', 'about' ); 
        get_template_part( 'assets/template-parts/misc/content', 'expect' ); 
        get_template_part( 'assets/template-parts/misc/content', 'preview' ); 
        get_template_part( 'assets/template-parts/misc/content', 'sponsors' ); 
        get_template_part( 'assets/template-parts/misc/content', 'attend' ); 
        get_template_part( 'assets/template-parts/misc/content', 'community' ); 
        get_template_part( 'assets/template-parts/misc/content', 'newsletter' ); 
  ?>

<?php get_footer(); ?>
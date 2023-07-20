

<?php
/**
 * Single page template.
 */
echo get_post_format();
get_header();
?>
   <div class="container-fluid div_sections single-page">
      <div class="row justify-content-center">
        <?php
          while ( have_posts() ) :
              the_post();
              get_template_part( 'assets/template-parts/posts/content', 'single' );
          endwhile;
          ?>
        </div>
  </div>

  <?php get_template_part( 'assets/template-parts/misc/content', 'sponsors' ); ?>
<?php get_template_part( 'assets/template-parts/misc/content', 'newsletter' ); ?>

<?php get_footer(); ?>
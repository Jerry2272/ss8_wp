<?php
/**
 * Template for dispalying all the pages.
 */
get_header();
?>
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'assets/template-parts/pages/content', 'page' );
        endwhile;
        ?>
<?php
get_footer(); 
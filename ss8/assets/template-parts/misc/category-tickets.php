<?php
/**
 * The template for displaying Tickets archive.
 */
get_header();
?>
    <?php  if ( have_posts() ) :  ?>
    <?php get_template_part( 'assets/template-parts/header/content', 'archive-hero' ); ?>
        
    <div class="container">
        <div class="row">
            <?php
                // Start the loop.
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'assets/template-parts/posts/content', 'category-tickets' );
                endwhile;

                echo paginate_links( [
                    'prev_text' => esc_html__( 'Prev', 'ss8' ),
                    'next_text' => esc_html__( 'Next', 'ss8' ),
                ] );

        else :
            get_template_part( 'assets/template-parts/page/content', 'none' );
        ?>
        <?php endif; ?>
    </div>
</div>
<?php get_template_part( 'assets/template-parts/misc/content', 'sponsors' ); ?>
    <?php get_template_part( 'assets/template-parts/misc/content', 'newsletter' ); ?>
<?php
get_footer();

?>
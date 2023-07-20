<?php
/**
 * The template for displaying archive pages.
 */
get_header();
?>  

      <?php get_template_part( 'assets/template-parts/header/content', 'archive-hero' ); ?>
<?php  if ( have_posts() ) :  ?>



        <div class="container div_sections recent_news" id="scrolldown">

                  
                <div class="row justify-content-center gy-5 mt-4">
                            <?php
                                // Start the loop.
                                while ( have_posts() ) :
                                    the_post();
                                    
                                    get_template_part( 'assets/template-parts/posts/content', 'archive' );
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

<?php get_footer(); 
?>

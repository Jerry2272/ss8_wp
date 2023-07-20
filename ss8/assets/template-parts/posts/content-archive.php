        <?php
        /**
         * Template part to display archive content in archive.php.
         */
        ?>
            
                
            <?php
                        if (is_category('tickets') ):
                    ?>
                    <div class="entry-content col-lg-4">
                    <div class="card">
            <?php 
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail( 'medium', array('class' => 'card-img-top') ); // full, large, medium, custom size
                endif;
            ?>
                <div class="card-body">
                <h4 class="entry-title card-title"><?php echo get_post_meta($post->ID, 'ticket-cost', true); ?></h4>
                    <p class="card-text">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Posts:', 'ninestars' ),
                        'after'  => '</div>',
                    ) );
                ?>
                    </p>
                <a href="<?php echo get_post_meta($post->ID, 'ticket-link', true); ?>" target="_blank"  class="card-link text-left">Buy Now</a>
                </div>
            
            </div>
            </div>
            
            <?php else: ?>


            <div class="entry-content col-lg-4">
            <div class="card">
            <?php if ( has_post_thumbnail() ) :
                    the_post_thumbnail( 'medium', 'class="card-img-top"' ); // full, large, medium, custom size
                endif;
                ?>
                <div class="card-body">
            <div class="div-h">
            <?php the_title( '<h4 class="entry-title"><a class="card-title" href="'.esc_url( get_permalink() ).'">', '</a></h4>' ); ?>
            </div>
                <div class="div">
                <p class="card-text">
                    <?php
                    the_excerpt();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Posts:', 'ninestars' ),
                        'after'  => '</div>',
                    ) );
                ?>
                    </p>
                </div>
                <a href="<?php echo esc_url( get_permalink() ); ?>" class="card-link text-left">Read More</a>
                </div>
            
            </div>
            </div>

            
            <?php endif; ?>
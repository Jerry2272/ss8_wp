<?php
/**
 * Contains footer
 */
?>


<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 logo">
          <img src="<?php echo get_template_directory_uri (); ?>/assets/images/startupsouth-white-logo.png" alt="" class="mb-3">
          <p>
            #StartupSouth brings together policy makers, business leaders, professionals and Investors from around the
            world to a city in the South-South and Sout-East of Nigeria annually.
          </p>
        </div>
        <div class="col-lg-3">
          <h5 class="mb-3">Explore</h5>
                <?php
                    if (has_nav_menu('explore')) :
                        wp_nav_menu(array(
                            'theme_location' => 'explore',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    else :
                        printf(
                            '<a class="btn-getstarted scrollto" href="%1$s">%2$s</a>',
                            esc_url(admin_url('/nav-menus.php')),
                            esc_html__('Assign a menu', 'ss8')
                        );
                    endif;
                    ?>

        </div>
        <div class="col-lg-3">
          <h5 class="mb-3">Resources</h5>
                <?php
                    if (has_nav_menu('resources')) :
                        wp_nav_menu(array(
                            'theme_location' => 'resources',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    else :
                        printf(
                            '<a class="btn-getstarted scrollto" href="%1$s">%2$s</a>',
                            esc_url(admin_url('/nav-menus.php')),
                            esc_html__('Assign a menu', 'ss8')
                        );
                    endif;
                    ?>

        </div>

     <div class="col-lg-3 get-in-touch">
        <h5 class="mb-3">Get In Touch</h5>
    <div class="footer-icons-social d-flex">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="ms-3"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="ms-3"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="ms-3"><i class="fa-brands fa-youtube"></i></a>
          </div>
    <span><a href="mailto:hello@startupsouth.org">hello@startupsouth.org</a></span>
    <p>
        Floor 2, Matoris Place, G.U. Ake Road, Eliozu, Port Harcourt, Rivers, Nigeria
    </p>
    </div>
    
</div>

      </div>
    </div>
  </footer>



  <?php wp_footer(); ?>
</body>

</html>
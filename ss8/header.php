<?php
/**
 * Contains the header.
 */
?>

<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar">
  <!-- header-navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

            if (has_custom_logo()) {
                printf(
                    '<a href="%1$s" class="navbar-brand"><img src="%2$s"/></a>',
                    esc_url(home_url()),
                    esc_url($logo[0])
                );
            } else {
                echo bloginfo('name');
            }
            ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa fa-bars" onclick="changeIcon(this)"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="primary">
                <?php
                if (has_nav_menu('primary')) :
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                else :
                    printf(
                        '<a href="%1$s">%2$s</a>',
                        esc_url(admin_url('/nav-menus.php')),
                        esc_html__('Assign a menu', 'ss8')
                    );
                endif;
                ?>
                <form class="d-flex justify-content-center">
                    <?php
                    if (has_nav_menu('header_action')) :
                        wp_nav_menu(array(
                            'theme_location' => 'header_action',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    else :
                        printf(
                            '<a class="btn-getstarted scrollto" href="%1$s">%2$s</a>',
                            esc_url(admin_url('/nav-menus.php')),
                            esc_html__('Action Menu', 'ss8')
                        );
                    endif;
                    ?>
                </form>
            </div>
        </div>
    </nav>
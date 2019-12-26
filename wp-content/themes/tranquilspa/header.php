<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand"><?php bloginfo('name'); ?></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse justify-content-end',
                    'container_id'      => 'navbar-nav',
                    'menu_class'        => 'navbar-nav',
                    'fallback'          => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                )); ?>
            </nav>
        </header>

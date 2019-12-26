<?php

    if (!isset($content_width)) {
        $content_width = 660;
    }

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function setup_theme() {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');

        register_nav_menus(array(
            'primary'   => __('Primary Menu', 'tranquil')
        ));
    }

    add_action('after_setup_theme', 'setup_theme');

    function setup_scripts() {
        // Add styles
        wp_enqueue_style('googlefonts-core', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900&display=swap');
        wp_enqueue_style('fontawesone-core', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css');
        wp_enqueue_style('bootstrap-core', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
        wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');

        wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.4.1.min.js');
        wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
        wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
    }

    add_action('wp_enqueue_scripts', 'setup_scripts');
?>

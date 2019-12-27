<?php

    if (!isset($content_width)) {
        $content_width = 660;
    }

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    function setup_theme() {
        load_theme_textdomain('tranquilwp', get_template_directory_uri().'/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'primary'   => __('Primary Menu', 'tranquil'),
            'footer'    => __('Footer Menu', 'tranquil')
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

        // Enable javascript reply form for nested comments
        // get_option('thread_comments') indicate that nested comment is enabled
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    add_action('wp_enqueue_scripts', 'setup_scripts');

    function new_excerpt_text() {
        return '...';
    }

    add_filter('excerpt_more', 'new_excerpt_text');

    function feature_text() {
        if (is_front_page()) {
//            _e('FULL RESPONSIVE <br /> PREMIUM SPA THEME <br /> FOR WORDPRESS', 'tranquilwp');
            the_field('header_text_front_page');
        } else if (is_home()) {
            esc_html_e(_e('TRANQUIL SPA <br /> OFFICIAL BLOG', 'tranquilwp'));
        } else if (is_archive()) {
            _e('Archives', 'tranquilwp');
        } else if (is_search()) {
            printf(
                __('Search results for: %s', 'tranquilwp'),
                get_search_query()
            );
        } else if (is_404()) {
            _e('Whoops, were a litle lost <br /> <em>Let\'s get back on track</em>', 'tranquilwp');
//        } else if (is_page()) {
        } else {
            the_title();
        }
    }

    function init_widgets() {
        register_sidebar(array(
            'name'      => 'Home right sidebar',
            'id'        => 'home_right_1',
            'before_widget' => '<div class="py-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="font-italic">',
            'after_title'   => '</h4>'
        ));
    }

    add_action('widgets_init', 'init_widgets');

    function add_footer_menu_class($classes, $item, $args) {
        if ($args->theme_location == 'footer') {
            $classes[] = 'list-group-item';
        }

        return $classes;
    }

    add_filter('nav_menu_css_class', 'add_footer_menu_class', 10, 3);

    $args = array(
        'width'         => 2600,
        'height'        => 650,
        'default-image' => get_template_directory_uri() . '/images/pic1.jpg',
        'uploads'       => true
    );

    add_theme_support('custom-header', $args);

    register_default_headers(array(
       'lake1'  => array(
           'url'            => get_template_directory_uri() . '/images/pic1.jpg',
           'thumbnail_url'  => get_template_directory_uri() . '/images/pic1.jpg',
           'description'    => __('Lake 1')
       ),
        'lake2'  => array(
            'url'            => get_template_directory_uri() . '/images/pic2.jpg',
            'thumbnail_url'  => get_template_directory_uri() . '/images/pic2.jpg',
            'description'    => __('Lake 1')
        )
    ));
?>

<?php
define('THEME_URL', get_stylesheet_directory());
define('THEME_URI', get_template_directory_uri());
define('CORE', THEME_URL . '/core');

/**
 * Link feature files.
 */
require_once(CORE . '/init.php');


// if (!isset($content_width)) {
//     $content_width = 620;
// }

/*==========================
 *        SETUP THEME
 * 
 ===========================*/
if (!function_exists('theme_setup')) {
    function theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('automactic-feed-links');
        add_theme_support('post-thumbnails');

        register_nav_menu('primary-menu', 'Primary Menu');


        $sidebar = [
            'name' => 'Main Sidebar',
            'id' => 'main-sidebar',
            'description' => 'Default sidebar.',
            'class' => 'main-sidebar',
        ];
    }
    add_action('init', 'theme_setup');



    /*-----------------------------
     *      link CSS - JS 
     -----------------------------*/
    function enqueue_scripts()
    {
        //CSS
        wp_enqueue_style('bootstrap-style', THEME_URI . '/assets/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome-style', THEME_URI . '/assets/css/fontawesome.css');
        wp_enqueue_style('templatemo-style', THEME_URI . '/assets/css/templatemo-stand-blog.css');
        wp_enqueue_style('owl-style', THEME_URI . '/assets/css/owl.css');
        wp_enqueue_style('search-style', THEME_URI . '/assets/css/search.css');

        //JS
        wp_enqueue_script('jquery-script', THEME_URI . '/assets/vendor/jquery/jquery.min.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrap-script', THEME_URI . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
        //JS: additional
        wp_enqueue_script('owl-script', THEME_URI . '/assets/js/owl.js', array('jquery'), null, true);
        wp_enqueue_script('slick-script', THEME_URI . '/assets/js/slick.js', array('jquery'), null, true);
        wp_enqueue_script('isotope-script', THEME_URI . '/assets/js/isotope.js', array('jquery'), null, true);
        wp_enqueue_script('accordions-script', THEME_URI . '/assets/js/accordions.js', array('jquery'), null, true);
        wp_enqueue_script('custom-script', THEME_URI . '/assets/js/custom.js', array('jquery'), null, true);

    }
    add_action('wp_enqueue_scripts', 'enqueue_scripts');


    function exclude_pages_from_search( $query ) {
        if ( $query->is_search && !is_admin() ) {
            // Chỉ tìm kiếm bài viết (post), không tìm kiếm trang (page)
            $query->set( 'post_type', 'post' );
        }
        return $query;
    }
    add_filter( 'pre_get_posts', 'exclude_pages_from_search' );
    
    function use_home_template_for_page_all_posts($template) {
        if (is_page('all-posts')) {
            $template = locate_template('home.php');
        }
        return $template;
    }
    add_filter('template_include', 'use_home_template_for_page_all_posts');

    function logo_setup() {
        add_theme_support('custom-logo', array(
            'width' => 200,
            'height' => 100,
            'flex-height' => true,
            'flex-width' => true,
        ));
    }
    add_action('after_setup_theme', 'logo_setup');
    

}
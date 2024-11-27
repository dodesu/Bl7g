<?php
function my_theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('mediumish', get_stylesheet_directory_uri() . '/assets/css/mediumish.css');
    wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css');
    //  Font Awesome
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    //  Google Font
    wp_enqueue_style('righteous-font', 'https://fonts.googleapis.com/css?family=Righteous');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
function my_theme_enqueue_scripts() {
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('ie10-viewport-bug-workaround', get_template_directory_uri() . 'assets/js/ie10-viewport-bug-workaround.js', array('jquery'), null, true);
    wp_enqueue_script('jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('mediumish', get_template_directory_uri() . '/assets/js/mediumish.js', array('jquery'), null, true);

    wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array(), '1.4.0', true);
}

function my_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'explore_footer' => __('Explore Footer Menu'),
        'learn_footer' => __('Learn Footer Menu')
    ));
}
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_action('after_setup_theme', 'my_theme_setup');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');



function wpdocs_admin_title_filter( $admin_title, $title ) {
    if ( is_admin() && 'Dashboard' === $title ) {
        $admin_title =  'welcome to Dashboard';
    }

    if ( is_admin() && isset( $_GET['post_type'] ) && 'product' === $_GET['post_type'] ) {
        $admin_title =  'Editing Products' . ' - ' . $title;
    }

    if ( is_admin() && current_user_can( 'administrator' ) ) {
        $admin_title =  'Admin:' . ' ' . $admin_title;
    }

    return $admin_title;
}

add_filter( 'admin_title', 'wpdocs_admin_title_filter', 10, 2 );

// Thêm shortcode hiển thị 
function my_shortcode() {
    $html = '
    <div class="custom-html-box">
        <h2>Welcome to My Website</h2>
        <p>This is a custom HTML content block displayed using a shortcode.</p>
        <button class="btn-primary">Click Me</button>
    </div>
    ';
    return $html;
}
// Đăng ký shortcode
add_shortcode('click_me', 'my_shortcode');


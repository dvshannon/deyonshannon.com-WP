<?php
function deyonshannon_theme_spport(){
    // adds dynamic title support
    add_theme_support('title-tag');
    // custom brand logo
    add_theme_support('custom-logo');
    // post thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'deyonshannon_theme_spport');


// add_shortcode('fun-stuff', 'fun_stuff');
// function fun_stuff($atts, $content) {
//      //make it return
//      $content = str_replace('{name}', 'Deyon Shannon', $content);
//      return $content;
// }


// dynamic navigation
function deyonshannon_navigation() {
    $locations = array(
        'primary' => "Desktop Primary Top",
        'footer' => "Footer Desktop Bottom"
    );

    register_nav_menus($locations);
}

add_action('init','deyonshannon_navigation');

// adds css files/dependencies
function deyonshannon_head_setup(){
    // dynamic versions
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('deyonshannon-style', get_template_directory_uri() . "/style.css", array('deyonshannon-bootstrap'), $version, 'all');
    wp_enqueue_style('deyonshannon-bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('deyonshannon-fontawesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
    wp_enqueue_style('deyonshannon-googlefonts', '//fonts.googleapis.com/css2?family=Roboto&family=Roboto+Condensed&display=swap');
}
add_action('wp_enqueue_scripts', 'deyonshannon_head_setup');

// adds css and JS files/dependencies
function deyonshannon_scripts_setup(){
    wp_enqueue_script('deyonshanon-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('deyonshanon-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('deyonshanon-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('deyonshanon-bootstrap', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('deyonshanon-main', get_template_directory_uri()."/js/main.js", array(), '1.0', true);
    wp_enqueue_script('deyonshanon-particles', 'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js', array(), '2.2.0', true);
}
add_action('wp_enqueue_scripts', 'deyonshannon_scripts_setup');
?>
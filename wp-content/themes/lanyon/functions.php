<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');

    // Css Styles
    wp_enqueue_style( 'normalize',  get_stylesheet_directory_uri() . '/css/normalize.min.css' );
    wp_enqueue_style( 'blueimp-gallery',  get_stylesheet_directory_uri() . '/css/plugin/blueimp-gallery.min.css' );
    wp_enqueue_style( 'component',  get_stylesheet_directory_uri() . '/css/plugin/component.css' );
    wp_enqueue_style( 'animations',  get_stylesheet_directory_uri() . '/css/plugin/animations.css' );
    wp_enqueue_style( 'main',  get_stylesheet_directory_uri() . '/css/main.css' );

    // Js Scripts
    wp_enqueue_script( 'transition',  get_stylesheet_directory_uri() . '/js/bootstrap/transition.js' , array( 'jquery' ), '20140616', true);
    wp_enqueue_script( 'modal',  get_stylesheet_directory_uri() . '/js/bootstrap/modal.js' , array( 'jquery' ), '20140616', true);
    wp_enqueue_script( 'carousel',  get_stylesheet_directory_uri() . '/js/bootstrap/carousel.js' , array( 'jquery' ), '20140616', true);
    wp_enqueue_script( 'collapse',  get_stylesheet_directory_uri() . '/js/bootstrap/collapse.js', array( 'jquery' ), '20140616', true );
    wp_enqueue_script( 'blueimp-gallery',  get_stylesheet_directory_uri() . '/js/plugin/blueimp-gallery.min.js', array( 'jquery' ), '20140616', true );
    wp_enqueue_script( 'css3-animate-it',  get_stylesheet_directory_uri() . '/js/plugin/css3-animate-it.js' , array( 'jquery' ), '20140616', true);
    wp_enqueue_script( 'main',  get_stylesheet_directory_uri() . '/js/main.js' , array( 'jquery' ), '20140616', true);

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_theme_support( 'title-tag' );

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).' ...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function my_custom_post_faqs() {
    $labels = array(
            'name'               => _x( 'FAQs', 'post type general name' ),
            'singular_name'      => _x( 'FAQs', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'faqs' ),
            'add_new_item'       => __( 'Add New FAQs' ),
            'edit_item'          => __( 'Edit FAQs' ),
            'new_item'           => __( 'New FAQs' ),
            'all_items'          => __( 'All FAQs' ),
            'view_item'          => __( 'View FAQs' ),
            'search_items'       => __( 'Search FAQs' ),
            'not_found'          => __( 'No FAQs found' ),
            'not_found_in_trash' => __( 'No FAQs found in the Trash' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'FAQs'
    );
    $args = array(
            'labels'        => $labels,
            'description'   => 'Holds our FAQs and FAQs specific data',
            'public'        => true,
            'menu_position' => 5,
            'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
            'has_archive'   => true,
    );
    register_post_type( 'faqs', $args );
}
add_action( 'init', 'my_custom_post_faqs' );
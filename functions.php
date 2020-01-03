<?php


function custom_theme_enqueue_scripts(){
     // all styles
     wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), 20200101 );
     wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), 20200101 );

    // all scripts
     wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20200101', true );
     wp_enqueue_script( 'theme-script-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20200101', true );
}
add_action('wp_enqueue_scripts','custom_theme_enqueue_scripts');


function currentYear(){
    return date('Y');
}


function register_main_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_main_menu' );


/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar'),
        'id'            => 'sidebar-1',
        'description'   => 'This is a description for Primary Sidebar.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'name'          => __( 'Second Sidebar'),
        'id'            => 'sidebar-2',
        'description'   => 'This is a description for Secondary Sidebar.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action('widgets_init','themename_widgets_init');

?>
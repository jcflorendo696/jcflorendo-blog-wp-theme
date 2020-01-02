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



?>
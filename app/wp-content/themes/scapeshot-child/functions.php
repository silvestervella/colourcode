<?php
// register enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'colourcode_enqueue_parent_styles' );

function colourcode_enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

    function colourcode_styles_child()
    {
    // Register Child Styles
    wp_register_style('child-all', get_stylesheet_directory_uri() . '/css/all.css', array(), '1.0', 'all');

    // Enqueue Child Styles
    wp_enqueue_style('child-all');

    //Register Child Scripts
    //wp_register_script( 'theme-script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ) );
    
    // Enqueue Child Scripts
    //wp_enqueue_script( 'theme-script' );   
}
add_action('wp_enqueue_scripts', 'colourcode_styles_child', 20); // Add Theme Child Stylesheet


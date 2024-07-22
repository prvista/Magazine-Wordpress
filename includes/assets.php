<?php

function magazine_assets(){
    
    wp_enqueue_style('magazine-style', get_template_directory_uri() . "/style/style.css", microtime());
    wp_enqueue_script('magazine-script', get_template_directory_uri() . "/script/script.js", microtime(), [], true );
    wp_enqueue_style('magazine-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);
}
// Hook that will run this function    
add_action('wp_enqueue_scripts', 'magazine_assets');

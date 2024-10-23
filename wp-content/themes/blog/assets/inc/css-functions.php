<?php
function blog(){
    
    wp_register_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', 'all');
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&display=swap', 'all');
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');
    
    

    
    wp_enqueue_style('swiper'); 
    wp_enqueue_style('bootstrap'); 
    wp_enqueue_style('fuentes');
    wp_enqueue_style('estilos');
    
    
}

add_action('wp_enqueue_scripts', 'blog');


/*assets styles*/

<?php
/*assets scripts*/

function comercio_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer

        // Register the script like this for a theme:
     wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true ); 
    wp_register_script('swiper-js',  'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', true);
    wp_register_script('bootstrap-js',  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', true);
    wp_register_script('archivo-js', get_template_directory_uri(). '/assets/librerias/js/archivo.js', array('jquery'), '1', true);    
    
    
    

        /*encolamos los JS*/
        wp_enqueue_script('jquery');
        wp_enqueue_script('swiper-js');
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('archivo-js', array(), true);
        
        
        
        
    }
} 
add_action("wp_enqueue_scripts", "comercio_script", 1);

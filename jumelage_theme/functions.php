<?php 

// Menus de navigation
register_nav_menus(array(
    'header' => 'Menu principal (header)'
));

//activation jquery et scripts



function cjm_enqueue_scripts() {
  $js_directory = get_template_directory_uri() . '/js/';
  wp_register_script( 'lightbox', $js_directory . 'lightbox.js', 'jquery', '1.0'); 
  wp_register_script( 'lbx-inscription', $js_directory . 'lbx-inscription.js', 'jquery', '1.0');
  wp_register_script( 'lbx-contact', $js_directory . 'lbx-contact.js', 'jquery', '1.0');  
  wp_register_script( 'parallax', $js_directory . 'parallax.js', 'jquery', '1.0');
  wp_register_script( 'menuparallax', $js_directory . 'menuparallax.js', 'jquery', '1.0');
  wp_register_script( 'jquery', $js_directory . 'jquery.js', 'jquery', '1.0');
  
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array( 'jquery' ),'', false);
  wp_enqueue_script( 'lightbox' );
  wp_enqueue_script( 'lbx-inscription' );
  wp_enqueue_script( 'lbx-contact' );
  wp_enqueue_script( 'parallax' );
  wp_enqueue_script( 'menuparallax' );
  

}
add_action( 'wp_enqueue_scripts', 'cjm_enqueue_scripts' );







 

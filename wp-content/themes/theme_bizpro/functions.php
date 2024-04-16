<?php
//activer les images à la une sur tout les types de contenu
add_theme_support('post-thumbnails');

// Enlever la hauteur et la largeur des images injectées dans WordPress qdon utilise the_post_thumbnail()
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


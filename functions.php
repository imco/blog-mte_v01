<?php 
function custom_excerpt_length( $length ) {
	return 40;
}
add_theme_support( 'post-thumbnails' );
add_filter( 'excerpt_length','custom_excerpt_length',999);
add_image_size('home-size',260,9999,false);
?>

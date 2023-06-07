<?php
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 40 );

function wpdocs_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			// 'extra-menu' => __( 'Extra Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );


?>
<?php
// Featured image in Admin Panel
function my_theme_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

// Custom length for excerpt
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 40 );

// Custom excerpt "read more" text
function wpdocs_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Register menus
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			// 'extra-menu' => __( 'Extra Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

// Display the latest post
function latest_post() {

    $args = array(
        'posts_per_page' => 1, /* how many post you need to display */
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post', /* your post type name */
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php echo get_the_post_thumbnail(
				$query -> ID,
				'thumbnail',
				array( 'class' => '' )
				);
			?>
            <p><?php the_excerpt(); ?></p>

            <?php
        endwhile;
    endif;
}

add_shortcode('lastest-post', 'latest_post');

?>
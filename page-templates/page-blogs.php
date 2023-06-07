<?php /* Template Name: Blogs */ ?>
<?php get_header(); ?>

<!-- Latest Blog -->
<?php echo do_shortcode('[lastest-post]'); ?>

<!-- Blogs -->
<div class="post-list">
    <?php
    $myposts = get_posts( 'numberposts=-1&offset=$debut' );
    $categories = get_categories( array ('orderby' => 'name', 'order' => 'asc' ) );

    foreach ($categories as $category) {
        
        $catPosts = new WP_Query( array ( 'category_name' => $category->slug, 'orderby' => 'title' ) ); 
        
        if ( $catPosts->have_posts() ) {
        
            echo "<a href='../category/$category->slug'>$category->name</a> | ";
        
        }  
    }
    

    foreach( $myposts as $post) : setup_postdata( $post ) ?>
        
        <h1><?php the_title(); ?></h1>
        <?php echo get_the_post_thumbnail(
            $post -> ID,
            'thumbnail',
            array( 'class' => 'alignleft' )
            );
        ?>
        <?php the_excerpt(); ?>

        <a href="<?php the_permalink(); ?>">More!</a>
    <?php endforeach; ?>
</div>

<?php get_footer(); ?>
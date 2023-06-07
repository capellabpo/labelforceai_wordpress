<?php get_header(); ?>

    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
    ?>

        <h1> <?php the_title()?> </h1>
        <p> <?php the_excerpt()?> </p>
        <p><a href="<?php the_permalink()?>">Read more</a></p>
        <hr>
        
    <?php
            }
        }
    ?>

<?php get_footer(); ?>
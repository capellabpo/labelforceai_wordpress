<nav>
    <ul>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container_class' => 'header_menu',
                'link_before' => '<span class="header_menu_link">',
                'link_after' => '</span>',
            ));
        ?>
    </ul>
</nav>



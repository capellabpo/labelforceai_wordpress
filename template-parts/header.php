<div class="head_nav_container">
    <div class="head_limit">
        <div class="head_divide_1">
            <div class="company_logo" onclick="gohome();"></div>
        </div>
        <div class="head_divide_2">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container_class' => 'header_menu',
                'link_before' => '<span class="head_menu_text">',
                'link_after' => '</span>',
            ));
            ?>

            <div class="head_extra_buttons">
                <div class="head_login_signup">
                    <button class="head_login_btn">
                        Login
                    </button>
                    <button class="head_signup_btn">
                        Sign Up
                    </button>
                </div>
                <button class="head_free_trial_btn">
                    Start Free Trial
                </button>
            </div>
        </div>
    </div>
</div>



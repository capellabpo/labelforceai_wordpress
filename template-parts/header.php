<div class="main_header_container_fixed">

<div class="main_header_center">

<div class="head_nav_container">
    <div class="head_limit">
        <div class="head_divide_1">
            <div class="company_logo" onclick="gohome();"></div>
        </div>
        <div class="head_divide_2">
            <div class="header_menu">
                <div class="menu">
                    <div class="menu-item" onmouseover="showSubMenu()">
                        <a href="">
                            <span class="head_menu_text">Services</span>
                        </a>
                    </div>
                </div>
            </div>
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

<div class="sub_menu" id="submenu">
    <div class="sub_services" id="close_menu">
        <div class="sub_section_1">
            <div class="sub_menu_content">
                <div class="sub_icon_dedicated"></div>
                <div class="sub_menu_title">
                    <p>
                        Dedicated Team
                    </p>
                </div>
                <div class="sub_button">
                    <button class="head_free_trial_btn" onclick="services(1)">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
        <div class="sub_section_2">
            <div class="sub_menu_content">
                <div class="sub_icon_shared"></div>
                <div class="sub_menu_title">
                    <p>
                        Shared Team
                    </p>
                </div>
                <div class="sub_button">
                    <button class="head_free_trial_btn" onclick="services(2)"> 
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>



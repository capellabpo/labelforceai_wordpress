<?php /* Template Name: Pricing */ ?>
<?php get_header(); ?>

<div class="body_container">

    <div class="body_block">

        <div class="section_container">
            <div class="section_box">
                <div class="section_title">
                    <p>
                        Discover our <span class="gradient_text_title_1">Flexible Pricing</span> Options
                    </p>
                </div>
                <div class="section_sub">
                    <p>
                        Get accurate and scalable data labeling services with Labelforce AI's flexible pricing plans. Choose from our Starter, Growth, and Scale plans to find the best fit for your machine learning project.
                    </p>
                </div>

                <div class="section_buttons ">
                    <button class="btn_main btn_fit add_margin" id="btn_shared" onclick="pricing(1)">
                        Shared Team
                    </button>
                    <button class="btn_3rd btn_fit add_margin" id="btn_dedicated" onclick="pricing(2)">
                        Dedicated Team
                    </button>
                </div>
            </div>
        </div>
        
        <div class="section_box" id="dediacted_service">
            <?php get_template_part('template-parts/pricing-dedicated'); ?>
        </div>

        <div class="section_box" id="shared_service">
            <?php get_template_part('template-parts/pricing-shared'); ?>
        </div>

    </div>

    <div class="section_box">
        <?php get_template_part('template-parts/faqs'); ?>
    </div>

</div>

<?php get_footer(); ?>
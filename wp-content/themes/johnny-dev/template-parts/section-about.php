<section class="about section" id="about">
    <div class="container">

        <div class="section-heading">
            <span class="section-label">01 / About</span>

            <h2>
                <?php echo esc_html(get_field('about_title')); ?><br>

                <span>
                    <?php echo esc_html(get_field('about_title_accent')); ?>
                </span>
            </h2>
        </div>

        <div class="about-grid">

            <div class="about-intro">

                <p class="about-lead">
                    <?php echo esc_html(get_field('about_intro')); ?>
                </p>

            </div>

            <div class="about-content">

                <?php echo wp_kses_post(get_field('about_description')); ?>

                <div class="about-meta">

                    <div>
                        <span class="about-meta-value">
                            <?php echo esc_html(get_field('about_experience_value')); ?>
                        </span>

                        <span class="about-meta-label">
                            <?php echo esc_html(get_field('about_experience_label')); ?>
                        </span>
                    </div>

                    <div>
                        <span class="about-meta-value">
                            <?php echo esc_html(get_field('about_focus_value')); ?>
                        </span>

                        <span class="about-meta-label">
                            <?php echo esc_html(get_field('about_focus_label')); ?>
                        </span>
                    </div>

                    <div>
                        <span class="about-meta-value">
                            <?php echo esc_html(get_field('about_work_style_value')); ?>
                        </span>

                        <span class="about-meta-label">
                            <?php echo esc_html(get_field('about_work_style_label')); ?>
                        </span>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
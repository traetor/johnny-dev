<?php

$experience_query = new WP_Query([
        'post_type'      => 'experience',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => [
                'menu_order' => 'ASC',
                'date'       => 'ASC',
        ],
]);

?>

<section class="experience section" id="experience">
    <div class="container">

        <div class="section-heading">
            <span class="section-label">02 / Experience</span>

            <h2>
                Commercial experience.<br>
                <span>Real-world development.</span>
            </h2>
        </div>

        <?php if ($experience_query->have_posts()) : ?>

            <div class="experience-list">

                <?php while ($experience_query->have_posts()) : ?>
                    <?php
                    $experience_query->the_post();

                    $technologies = array_filter(
                            array_map(
                                    'trim',
                                    explode(',', (string) get_field('experience_technologies'))
                            )
                    );
                    ?>

                    <article class="experience-item">

                        <div class="experience-period">
                            <span>
                                <?php echo esc_html(get_field('experience_period')); ?>
                            </span>
                        </div>

                        <div class="experience-main">

                            <div class="experience-title">

                                <div>
                                    <h3>
                                        <?php echo esc_html(get_the_title()); ?>
                                    </h3>

                                    <p>
                                        <?php echo esc_html(get_field('experience_company')); ?>
                                    </p>
                                </div>

                                <span class="experience-type">
                                    <?php echo esc_html(get_field('experience_type')); ?>
                                </span>

                            </div>

                            <p class="experience-description">
                                <?php echo esc_html(get_field('experience_description')); ?>
                            </p>

                            <?php if ($technologies) : ?>

                                <div class="experience-tags">

                                    <?php foreach ($technologies as $technology) : ?>

                                        <span>
                                            <?php echo esc_html($technology); ?>
                                        </span>

                                    <?php endforeach; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

    </div>
</section>
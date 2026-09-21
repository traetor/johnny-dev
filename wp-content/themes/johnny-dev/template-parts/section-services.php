<?php

$services_query = new WP_Query([
        'post_type'      => 'service',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => [
                'menu_order' => 'ASC',
                'date'       => 'ASC',
        ],
]);

?>

<section class="services section" id="services">
    <div class="container">

        <div class="section-heading">
            <span class="section-label">03 / Services</span>

            <h2>
                From design to deployment.<br>
                <span>Web development that solves real problems.</span>
            </h2>
        </div>

        <?php if ($services_query->have_posts()) : ?>

            <div class="services-grid">

                <?php $service_number = 1; ?>

                <?php while ($services_query->have_posts()) : ?>
                    <?php
                    $services_query->the_post();

                    $technologies = array_filter(
                            array_map(
                                    'trim',
                                    explode(',', (string) get_field('service_technologies'))
                            )
                    );
                    ?>

                    <article class="service-card">

                        <span class="service-number">
                            <?php echo esc_html(sprintf('%02d', $service_number)); ?>
                        </span>

                        <h3>
                            <?php echo esc_html(get_the_title()); ?>
                        </h3>

                        <p>
                            <?php echo esc_html(get_field('service_description')); ?>
                        </p>

                        <?php if ($technologies) : ?>

                            <div class="service-tags">

                                <?php foreach ($technologies as $technology) : ?>

                                    <span>
                                        <?php echo esc_html($technology); ?>
                                    </span>

                                <?php endforeach; ?>

                            </div>

                        <?php endif; ?>

                    </article>

                    <?php $service_number++; ?>

                <?php endwhile; ?>

            </div>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

    </div>
</section>
<?php

$tech_groups_query = new WP_Query([
        'post_type'      => 'tech_group',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => [
                'menu_order' => 'ASC',
                'date'       => 'ASC',
        ],
]);
?>

    <section class="tech-stack section" id="tech-stack">
        <div class="container">

            <div class="section-heading">
                <span class="section-label">04 / Tech Stack</span>

                <h2>
                    Tools I work with.<br>
                    <span>Across the full web stack.</span>
                </h2>
            </div>

            <?php if ($tech_groups_query->have_posts()) : ?>

                <div class="tech-grid">

                    <?php
                    $tech_group_number = 1;

                    while ($tech_groups_query->have_posts()) :
                        $tech_groups_query->the_post();

                        $tech_category = get_field('tech_category');
                        $tech_description = get_field('tech_description');
                        $tech_technologies = get_field('tech_technologies');

                        $technologies = $tech_technologies
                                ? array_filter(array_map('trim', explode(',', $tech_technologies)))
                                : [];

                        $tech_group_classes = ['tech-group'];

                        if ($tech_group_number === 1) {
                            $tech_group_classes[] = 'tech-group-featured';
                        }
                        ?>

                        <article class="<?php echo esc_attr(implode(' ', $tech_group_classes)); ?>">

                        <span class="tech-category">
                            <?php echo esc_html($tech_category); ?>
                        </span>

                            <h3>
                                <?php the_title(); ?>
                            </h3>

                            <p>
                                <?php echo esc_html($tech_description); ?>
                            </p>

                            <?php if ($technologies) : ?>

                                <div class="tech-items">

                                    <?php foreach ($technologies as $technology) : ?>
                                        <span>
                                        <?php echo esc_html($technology); ?>
                                    </span>
                                    <?php endforeach; ?>

                                </div>

                            <?php endif; ?>

                        </article>

                        <?php
                        $tech_group_number++;
                    endwhile;
                    ?>

                </div>

            <?php endif; ?>

        </div>
    </section>

<?php wp_reset_postdata(); ?>
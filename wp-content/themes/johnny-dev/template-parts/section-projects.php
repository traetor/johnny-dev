<?php

$projects_query = new WP_Query([
        'post_type'      => 'project',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => [
                'menu_order' => 'ASC',
                'date'       => 'ASC',
        ],
]);
?>

    <section class="projects section" id="projects">
        <div class="container">

            <div class="section-heading projects-heading">
                <div>
                    <span class="section-label">05 / Projects</span>

                    <h2>
                        Selected work.<br>
                        <span>Built from frontend to backend.</span>
                    </h2>
                </div>

                <p class="projects-intro">
                    A selection of projects demonstrating practical development
                    across WordPress, frontend and backend technologies.
                </p>
            </div>

            <?php if ($projects_query->have_posts()) : ?>

                <div class="projects-list">

                    <?php
                    $project_number = 1;

                    while ($projects_query->have_posts()) :
                        $projects_query->the_post();

                        $project_type = get_field('project_type');
                        $project_description = get_field('project_description');
                        $project_features = get_field('project_features');
                        $project_technologies = get_field('project_technologies');
                        $project_visual_type = get_field('project_visual_type');

                        $primary_link_label = get_field('project_primary_link_label');
                        $primary_link_url = get_field('project_primary_link_url');

                        $secondary_link_label = get_field('project_secondary_link_label');
                        $secondary_link_url = get_field('project_secondary_link_url');

                        $project_status = get_field('project_status');

                        $features = $project_features
                                ? array_filter(array_map('trim', explode(',', $project_features)))
                                : [];

                        $technologies = $project_technologies
                                ? array_filter(array_map('trim', explode(',', $project_technologies)))
                                : [];

                        $project_classes = ['project-card'];

                        if ($project_number === 1) {
                            $project_classes[] = 'project-card-featured';
                        }
                        ?>

                        <article class="<?php echo esc_attr(implode(' ', $project_classes)); ?>">

                            <?php if ($project_visual_type === 'systems') : ?>

                                <div class="project-visual project-visual-systems">

                                    <div class="project-browser">

                                        <div class="project-browser-header">
                                            <div class="project-browser-dots">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>

                                            <span class="project-browser-url">
                                            johnny-systems
                                        </span>
                                        </div>

                                        <div class="systems-preview">

                                            <div class="systems-sidebar">
                                                <div class="systems-logo">
                                                    JS
                                                </div>

                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>

                                            <div class="systems-content">

                                                <div class="systems-topbar">
                                                    <span></span>
                                                    <span></span>
                                                </div>

                                                <div class="systems-title">
                                                    <span></span>
                                                    <span></span>
                                                </div>

                                                <div class="systems-cards">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>

                                                <div class="systems-table">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            <?php elseif ($project_visual_type === 'portfolio') : ?>

                                <div class="project-visual project-visual-portfolio">

                                    <div class="portfolio-preview">

                                        <div class="portfolio-preview-nav">
                                            <strong>
                                                Johnny<span>Dev</span>
                                            </strong>

                                            <div>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>

                                        <div class="portfolio-preview-content">

                                            <div class="portfolio-preview-copy">
                                                <span class="portfolio-preview-status"></span>

                                                <div class="portfolio-preview-heading">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>

                                                <div class="portfolio-preview-text">
                                                    <span></span>
                                                    <span></span>
                                                </div>

                                                <div class="portfolio-preview-buttons">
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </div>

                                            <div class="portfolio-preview-code">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            <?php endif; ?>


                            <div class="project-content">

                                <div class="project-meta">
                                <span>
                                    <?php echo esc_html(sprintf('%02d', $project_number)); ?>
                                </span>

                                    <span>
                                    <?php echo esc_html($project_type); ?>
                                </span>
                                </div>

                                <h3>
                                    <?php the_title(); ?>
                                </h3>

                                <p class="project-description">
                                    <?php echo esc_html($project_description); ?>
                                </p>

                                <?php if ($features) : ?>

                                    <div class="project-features">

                                        <?php foreach ($features as $feature) : ?>
                                            <span>
                                            <?php echo esc_html($feature); ?>
                                        </span>
                                        <?php endforeach; ?>

                                    </div>

                                <?php endif; ?>


                                <?php if ($technologies) : ?>

                                    <div class="project-stack">

                                        <?php foreach ($technologies as $technology) : ?>
                                            <span>
                                            <?php echo esc_html($technology); ?>
                                        </span>
                                        <?php endforeach; ?>

                                    </div>

                                <?php endif; ?>


                                <?php if (
                                        ($primary_link_label && $primary_link_url)
                                        || ($secondary_link_label && $secondary_link_url)
                                ) : ?>

                                    <div class="project-links">

                                        <?php if ($primary_link_label && $primary_link_url) : ?>

                                            <a
                                                    href="<?php echo esc_url($primary_link_url); ?>"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                            >
                                                <?php echo esc_html($primary_link_label); ?>
                                                <span aria-hidden="true">↗</span>
                                            </a>

                                        <?php endif; ?>


                                        <?php if ($secondary_link_label && $secondary_link_url) : ?>

                                            <a
                                                    href="<?php echo esc_url($secondary_link_url); ?>"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                            >
                                                <?php echo esc_html($secondary_link_label); ?>
                                                <span aria-hidden="true">↗</span>
                                            </a>

                                        <?php endif; ?>

                                    </div>

                                <?php endif; ?>


                                <?php if ($project_status) : ?>

                                    <div class="project-status">
                                    <span
                                            class="status-dot"
                                            aria-hidden="true"
                                    ></span>

                                        <?php echo esc_html($project_status); ?>
                                    </div>

                                <?php endif; ?>

                            </div>

                        </article>

                        <?php
                        $project_number++;
                    endwhile;
                    ?>

                </div>

            <?php endif; ?>


            <div class="projects-footer">
                <p>
                    More projects and client work will be added as they
                    become available for public presentation.
                </p>

                <a
                        href="https://github.com/traetor"
                        target="_blank"
                        rel="noopener noreferrer"
                >
                    View GitHub profile
                    <span aria-hidden="true">↗</span>
                </a>
            </div>

        </div>
    </section>

<?php wp_reset_postdata(); ?>
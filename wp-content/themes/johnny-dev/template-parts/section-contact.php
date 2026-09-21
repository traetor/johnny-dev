<?php

$contact_email = get_field('contact_email');

?>

<section class="contact section" id="contact">
    <div class="container">

        <div class="contact-grid">

            <div class="contact-heading">
                <span class="section-label">06 / Contact</span>

                <h2>
                    <?php echo esc_html(get_field('contact_title')); ?><br>

                    <span>
                        <?php echo esc_html(get_field('contact_title_accent')); ?>
                    </span>
                </h2>

                <p>
                    <?php echo esc_html(get_field('contact_description')); ?>
                </p>
            </div>

            <div class="contact-content">

                <div class="contact-status">
                    <span class="status-dot" aria-hidden="true"></span>

                    <div>
                        <strong>
                            <?php echo esc_html(get_field('contact_status')); ?>
                        </strong>

                        <span>
                            <?php echo esc_html(get_field('contact_status_description')); ?>
                        </span>
                    </div>
                </div>

                <a
                        class="contact-email"
                        href="mailto:<?php echo esc_attr($contact_email); ?>"
                >
                    <span class="contact-email-label">
                        Email
                    </span>

                    <span class="contact-email-address">
                        <?php echo esc_html($contact_email); ?>
                    </span>

                    <span
                            class="contact-email-arrow"
                            aria-hidden="true"
                    >
                        ↗
                    </span>
                </a>

                <div class="contact-links">

                    <a
                            href="<?php echo esc_url(get_field('contact_github_url')); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                    >
                        <span>GitHub</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a href="#projects">
                        <span>Projects</span>
                        <span aria-hidden="true">↑</span>
                    </a>

                </div>

                <p class="contact-note">
                    <?php echo esc_html(get_field('contact_note')); ?>
                </p>

            </div>

        </div>

        <div class="contact-cta">

            <div>
                <span>
                    <?php echo esc_html(get_field('contact_cta_eyebrow')); ?>
                </span>

                <h3>
                    <?php echo esc_html(get_field('contact_cta_title')); ?><br>

                    <?php echo esc_html(get_field('contact_cta_title_accent')); ?>
                </h3>
            </div>

            <a
                    class="button button-primary contact-cta-button"
                    href="mailto:<?php echo esc_attr($contact_email); ?>"
            >
                <?php echo esc_html(get_field('contact_cta_button_text')); ?>

                <span aria-hidden="true">↗</span>
            </a>

        </div>

    </div>
</section>
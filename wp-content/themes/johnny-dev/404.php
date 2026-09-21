<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

    <main id="main-content" class="error-page">
        <section class="error-404" aria-labelledby="error-404-title">
            <div class="container">
                <div class="error-404-content">
                    <span class="error-404-code" aria-hidden="true">404</span>

                    <p class="error-404-eyebrow">Page not found</p>

                    <h1 id="error-404-title">
                        Looks like this page
                        <span>doesn't exist.</span>
                    </h1>

                    <p class="error-404-description">
                        The page you're looking for may have been moved, deleted,
                        or never existed in the first place.
                    </p>

                    <a class="button button-primary" href="<?php echo esc_url(home_url('/')); ?>">
                        Back to homepage
                    </a>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
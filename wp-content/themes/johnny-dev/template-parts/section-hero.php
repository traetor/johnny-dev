<section class="hero">

    <div class="container hero-inner">

        <div class="hero-content">

            <div class="hero-status">
                <span class="status-dot" aria-hidden="true"></span>

                <?php echo esc_html(get_field('hero_status')); ?>
            </div>

            <h1>
                <?php echo esc_html(get_field('hero_title')); ?>

                <span>
                    <?php echo esc_html(get_field('hero_title_accent')); ?>
                </span>
            </h1>

            <p class="hero-description">
                <?php echo esc_html(get_field('hero_description')); ?>
            </p>

            <div class="hero-actions">

                <a
                        class="button button-primary"
                        href="<?php echo esc_url(get_field('hero_primary_cta_url')); ?>"
                >
                    <?php echo esc_html(get_field('hero_primary_cta_text')); ?>
                </a>

                <a
                        class="button button-secondary"
                        href="<?php echo esc_url(get_field('hero_secondary_cta_url')); ?>"
                >
                    <?php echo esc_html(get_field('hero_secondary_cta_text')); ?>
                </a>

            </div>

            <div class="hero-stack">
                <span>WordPress</span>
                <span>PHP</span>
                <span>React</span>
                <span>TypeScript</span>
                <span>Node.js</span>
                <span>Symfony</span>
            </div>

        </div>

        <div class="hero-code" aria-hidden="true">

            <div class="code-window">

                <div class="code-header">

                    <div class="code-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <span>developer.php</span>

                </div>

                <pre><code><span class="code-purple">&lt;?php</span>

<span class="code-purple">class</span> <span class="code-green">Developer</span>
{
    <span class="code-purple">public string</span> $name =
        <span class="code-yellow">'Jan Król'</span>;

    <span class="code-purple">public array</span> $stack = [
        <span class="code-yellow">'WordPress'</span>,
        <span class="code-yellow">'PHP'</span>,
        <span class="code-yellow">'React'</span>,
        <span class="code-yellow">'Node.js'</span>
    ];

    <span class="code-purple">public function</span>
    <span class="code-blue">build</span>(): string
    {
        <span class="code-purple">return</span>
            <span class="code-yellow">'Something useful.'</span>;
    }
}</code></pre>

            </div>

        </div>

    </div>

</section>
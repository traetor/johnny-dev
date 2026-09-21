</main>

<footer class="site-footer">
    <div class="container">

        <div class="footer-inner">

            <div class="footer-brand">
                <a
                        class="footer-logo"
                        href="<?php echo esc_url(home_url('/')); ?>"
                >
                    Johnny<span>Dev</span>
                </a>

                <p>
                    Full-Stack Web Developer<br>
                    WordPress &amp; modern web development.
                </p>
            </div>


            <nav
                    class="footer-nav"
                    aria-label="Footer navigation"
            >
                <a href="#about">About</a>
                <a href="#experience">Experience</a>
                <a href="#services">Services</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>


            <div class="footer-social">
                <a
                        href="https://github.com/traetor"
                        target="_blank"
                        rel="noopener noreferrer"
                >
                    GitHub
                    <span aria-hidden="true">↗</span>
                </a>
            </div>

        </div>


        <div class="footer-bottom">

            <p>
                &copy; <?php echo esc_html(wp_date('Y')); ?>
                Johnny Dev. All rights reserved.
            </p>

            <a href="#">
                Back to top
                <span aria-hidden="true">↑</span>
            </a>

        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
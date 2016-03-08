<div class="container">
        <footer class="site-footer clearfix">






            <nav class="footer-nav">
                <?php
                $args = array(
                    'theme_location' => 'footer'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </nav>


            <?php if (is_active_sidebar('social-footer')) :?>
                <div class="footer-widget-area ">
                    <?php dynamic_sidebar('social-footer'); ?>
                </div>
            <?php endif; ?>

            <div class="copyright ">
                <span>&copy; Copyright <?php echo the_date('Y')?></span> <a href="https://www.DesignerFirst.com">DesignerFirst.com </a>
            </div>


        </footer>
  </div> <!-- container-->
<?php wp_footer(); ?>
</body>
</html>

            
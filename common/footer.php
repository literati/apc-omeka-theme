        </div><!-- end content -->

        <div id="footer">

            <?php if (get_theme_option('Display Footer Navigation') !== '0'): ?>
            <ul class="navigation">
                <?php echo public_nav_main(array(__('Home') => uri(''), __('Browse Items') => uri('items'), __('Browse Collections') => uri('collections'))); ?>
            </ul>
            <?php endif; ?>

            <div id="footer-text">
                <?php echo get_theme_option('Footer Text'); ?>
                <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = settings('copyright')): ?>
                    <p><?php echo $copyright; ?></p>
                <?php endif; ?>
                <p><?php echo link_to_advanced_search(); ?> | <?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
            </div>

            <?php plugin_footer(); ?>

        </div><!-- end footer -->
    </div><!-- end wrap -->

</body>
</html>

        </div><!-- end div id content -->

        <div class="row footer">
            <div class="twelve columns">
                <div class="panel">
                    <?php if (get_theme_option('Display Footer Navigation') !== '0'): ?>
                    <ul class="navigation">
                        <?php echo public_nav_main(array(__('Home') => uri(''), __('Browse Items') => uri('items'), __('Browse Collections') => uri('collections'))); ?>
                    </ul>
                    <?php endif; ?>

                    <div id="footer-text">
                        <p><?php echo get_theme_option('Footer Text'); ?></p>
                        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = settings('copyright')): ?>
                            <p><?php echo $copyright; ?></p>
                        <?php endif; ?>
                    </div>

                    <?php plugin_footer(); ?>
                </div>
            </div>
        </div><!-- end footer -->
    </div><!-- end wrap -->

    <div class="bottomImg"></div>

    <script>
$(window).load(function(){
  $("#featured").orbit();
});
</script> 

</body>
</html>

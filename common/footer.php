</div>
<!-- end div id content -->
<div id="footer">
<div class="row">
    <div class="twelve columns">
        <div class="panel">
            <?php if (get_theme_option('Display Footer Navigation') !== '0'): ?>
            <ul class="navigation">
                <?php echo public_nav_main(array(__('Home') =>
                uri(''), __('Browse Items') => uri('items'), __('Browse Collections') => uri('collections'))); ?>
            </ul>
            <?php endif; ?>

            <div id="footer-text">
                <p>
                    <?php echo get_theme_option('Footer Text'); ?></p>
                <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = settings('copyright')): ?>
                <p>
                    <?php echo $copyright; ?></p>
                <?php endif; ?></div>

            <?php plugin_footer(); ?></div>
    </div>
</div>
<div class="bottomImg"></div>
</div>
<!-- end div id footer -->

<div id="scripts">
<script>
$(window).load(function(){
  $("#featured").orbit();
});
</script>
</div>
<!-- end div id scripts -->

</div>
<!-- end div id wrap -->
</body>
</html>
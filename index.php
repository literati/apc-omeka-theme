
<?php head(array('bodyid'=>'home')); ?>

<?php if (get_theme_option('Display Featured Items') !== '0'): ?>

<div class="row">
    <div class="twelve columns">
        <div class="panel">
            <h2>Featured Items</h2>
            <div id="featured">
<?php

    // is cURL installed yet?
    if (!function_exists('curl_init')){
        die('Sorry cURL is not installed!');
    }
 
    // OK cool - then let's create a new cURL resource handle
    $ch = curl_init();
 
    $Url = 'http://literati.cct.lsu.edu/omeka/images/full';

    // Now set some options (most are optional)
 
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
 
 
 
    // Include header in result? (0 = yes, 1 = no)
    curl_setopt($ch, CURLOPT_HEADER, 0);
 
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
 
    // Download the given URL, and return output
    $output = curl_exec($ch);
 
    // Close the cURL resource, and free system resources
    curl_close($ch);
 
    echo $output;


?>                <img src="javascripts/holder.js/1200x250/text:Slide_1" alt="slide image">
                <img src="javascripts/holder.js/1200x250/text:Slide_2" alt="slide image">
                <img src="javascripts/holder.js/1200x250/text:Slide_3" alt="slide image">
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="row">
    <div class="twelve columns">
        <div class="panel">
            <h2>ABOUT</h2>
            <p><?php echo settings('description'); ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="twelve columns">
        <div class="panel">
            <h2>TIMELINE</h2>
            <div id="my-timeline"></div>
        </div>
    </div>
</div>

<!-- Featured Collection -->
<?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
<div class="row">
    <div class="twelve columns">
        <div class="panel featured-collection">
            <h2>Featured Collection</h2>
            <div class="panel whiteout radius">

<?php



 
$collection = random_featured_collection();
set_current_collection($collection);
echo '<h3>'.link_to_collection().'</h3>';

                    $items = get_items(array('collection' => 'Tales'), 20);
                    set_items_for_loop($items);
                    while(loop_items()):
                ?>

                <hr />
                <h4><?php echo link_to_item(); ?></h4>
                <p><?php echo item('Dublin Core', 'Description'); ?></p>

                <?php endwhile; ?>

                <p class="view-collections-link">
                    <a href="<?php echo html_escape(uri('collections')); ?>">
                        <?php echo __('View All Collections'); ?>
                    </a>
                </p>

            </div>
        </div> <!-- end featured collection panel --> 
    </div>
</div>
<?php endif; ?> <!-- End Featured Collection -->

<!--begin recent items-->
<?php if (get_theme_option('Homepage Recent Items') !== '0'): ?>
<div class="row">
    <div class="twelve columns">
        <div class="panel recent-items">

            <h2><?php echo __('Recently Added Items'); ?></h2>

            <div class="panel whiteout radius">
                <h3><a href="#">Five Most Recent</a></h3>
                <?php
                    $homepageRecentItems = (int)get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : '3';
                    set_items_for_loop(recent_items($homepageRecentItems));
                    if (has_items_for_loop()):
                ?>

                <div class="items-list">
                    <?php while (loop_items()): ?>
                    <hr />
                    <div class="item">

                        <h4>
                            <?php echo link_to_item(); ?></h4>

                        <?php if(item_has_thumbnail()): ?>
                        <div class="item-img">
                            <?php echo link_to_item(item_square_thumbnail()); ?></div>
                        <?php endif; ?>

                        <?php if($desc = item('Dublin Core', 'Description', array('snippet'=>
                        150))): ?>
                        <div class="item-description">
                            <p>
                                <?php echo $desc; ?>
                                <?php echo link_to_item('see more',(array('class'=>'show'))) ?></p>

                        </div>

                        <?php endif; ?></div>
                    <?php endwhile; ?></div>

                <?php else: ?>

                <p>
                    <?php echo __('No recent items available.'); ?></p>

                <?php endif; ?>
                <p class="view-items-link">
                    <a href="<?php echo html_escape(uri('items')); ?>">
                        <?php echo __('View All Items'); ?>
                    </a>
                </p>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!--end recent items -->

<?php foot(); ?>
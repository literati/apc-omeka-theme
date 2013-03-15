<?php head(array('title' =>
item('Dublin Core', 'Title'), 'bodyid'=>'items','bodyclass' => 'show')); ?>
<div class="row">
    <div class="twelve columns">
        <div class="panel">

            <div class="eight columns">
                <div class="panel whiteout radius storyrow">
                    <h3><?php echo item('Dublin Core', 'Title'); ?></h3>

                    <?php

    // is cURL installed yet?
    if (!function_exists('curl_init')){
        die('Sorry cURL is not installed!');
    }
 
    // OK cool - then let's create a new cURL resource handle
    $ch = curl_init();
 
    $Url = 'http://literati.cct.lsu.edu/omeka/tales/oblong-box/text';

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


?>

</div>

            </div>
            <div class="four columns">

                

<ul class="accordion">
    <li class="active">

                    <div class="title">
                        <h3><?php echo ('Images'); ?></h3>
                    </div>
                        <div class="content">

                    <?php

    // is cURL installed yet?
    if (!function_exists('curl_init')){
        die('Sorry cURL is not installed!');
    }
 
    // OK cool - then let's create a new cURL resource handle
    $ch = curl_init();
 
    $Url = 'http://literati.cct.lsu.edu/omeka/images/full/200/0';

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


?>


                        </div>
                    </div>
                </li>
            </ul>
            <div class="panel whiteout radius storyrow">

                    <div id="annotations" class="element">
                        <h3>
                            <?php echo ('Annotations'); ?></h3>
                        <div class="element-text">
                            <p>
                                <?php echo display_files_for_item(); ?></p>
                        </div>
                    </div>

                    <div id="events" class="element">
                        <h3>
                            <?php echo ('Events'); ?></h3>
                        <div class="element-text">
                            <p>
                                <?php echo display_files_for_item(); ?></p>
                        </div>
                    </div>

                </div>
            </div>

            <?php echo plugin_append_to_items_show(); ?>

            <ul class="item-pagination navigation">
                <li id="previous-item" class="previous">
                    <?php echo link_to_previous_item(); ?></li>
                <li id="next-item" class="next">
                    <?php echo link_to_next_item(); ?></li>
            </ul>
        </div>

    <!-- end primary -->
</div>
</div>

<div class="row">
    <div class="twelve columns">
        <div class="panel">
            <div class="panel whiteout radius">
                <iframe seamless width="100%" height="500px" src=" http://literati.cct.lsu.edu/timeline/timeline.php"></iframe>
            </div>
        </div>
    </div>
</div>

<?php foot(); ?>
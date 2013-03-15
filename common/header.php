<!DOCTYPE html>
<html class="no-js" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

    <?php if ( $description = settings('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title><?php echo settings('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php plugin_header(); ?>

    <!-- Stylesheets -->
    <?php
    queue_css(array('style', 'foundation.min', 'app'));
    display_css();
    ?>

    <!-- Load fonts -->
    <link href='http://fonts.googleapis.com/css?family=Abel|Alice' rel='stylesheet' type='text/css'>

    <!-- JavaScripts -->
    <?php 
    queue_js(array('modernizr.foundation', 'foundation.min', 'jquery', 'app', 'jquery.foundation.orbit'));
    display_js(); 
    ?>
</head>
    <?php echo body_tag(array('id' =>
    @$bodyid, 'class' => @$bodyclass)); ?>
    <?php plugin_body(); ?>
    <div id="wrap">
    <div id="header">
        <?php plugin_page_header();?>

        <div class="row">
            <div class="twelve columns">

                <nav class="top-bar contain-to-grid">
                    <ul>
                        <li class="name">
                            <h1>
                                <?php echo link_to_home_page(custom_display_logo()); ?></h1>
                        </li>
                        <li class="toggle-topbar">
                            <a href="#"></a>
                        </li>
                    </ul>
                    <section>
                        <ul class="left">
                            <li class="has-dropdown">
                                <a href="<?php echo uri('collections'); ?>">COLLECTIONS</a>
                                <ul class="dropdown">
                                


                     <?php

    // is cURL installed yet?
    if (!function_exists('curl_init')){
        die('Sorry cURL is not installed!');
    }
 
    // OK cool - then let's create a new cURL resource handle
    $ch = curl_init();
 
    $Url = 'http://literati.cct.lsu.edu/omeka/prlcollections';

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







                                </ul>
                            </li>
                        </ul>
                        <ul class="right">
                            <li class="search">
                                <div id="search-container">
                                    <form class="collapse" action="/omeka/items/browse" method="get">
                                        <input type="text" name="search" id="search" value="" class="textinput">
                                        <button type="submit" name="submit_search" value="Search" class="secondary radius button">Search</button>
                                    </form>
                                </div>
                                <!-- end search -->
                            </li>
                        </ul>
                    </section>
                </nav>

            </div>
        </div>

    </div>
    <!-- end div id header -->

    <?php echo custom_header_image(); ?>

    <div id="content">
        <?php plugin_page_content(); ?>
<!DOCTYPE html>
<html class="no-js" lang="<?php echo get_html_lang(); ?>
    ">
<head>
    <meta charset="utf-8">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

    <?php if ( $description = settings('description')): ?>
    <meta name="description" content="<?php echo $description; ?>
    " />
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
    ?></head>
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
                                    <?php set_collections_for_loop(recent_collections(10)); ?>
                                    <?php if (has_collections_for_loop()): ?>
                                    <ul class="collections-list">
                                        <?php while (loop_collections()): ?>
                                        <li class="collection">
                                            <?php echo link_to_collection(); ?></li>
                                        <?php endwhile; ?></ul>
                                    <?php else: ?>
                                    <p>No recent collections available.</p>
                                    <?php endif; ?></ul>
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
                                <!-- end search --> </li>
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
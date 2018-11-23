<?php

// Clean up WordPress <head>
remove_action( 'wp_head', 'rsd_link' ); // Remove really simple discovery link
remove_action( 'wp_head', 'wp_generator' ); // Remove WordPress version
remove_action( 'wp_head', 'feed_links', 2 ); // Remove rss feed links (make sure you add them in yourself if you're using feedblitz or an rss service)
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Removes all extra rss feed links
remove_action( 'wp_head', 'index_rel_link' ); // Remove link to index page
remove_action( 'wp_head', 'wlwmanifest_link' ); // Remove wlwmanifest.xml (needed to support windows live writer)
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // Remove random post link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // Remove parent post link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Remove the next and previous post links
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Remove relational links for the posts adjacent to the current post for single post pages
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // Remove rel=shortlink from the head if a shortlink is defined for the current page

// Theme assets
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/style.css', false, null );
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/script.js', [ 'jquery' ], null, true );
}, 100);

add_action( 'after_setup_theme', function () {
    add_theme_support( 'post-thumbnails' );
});
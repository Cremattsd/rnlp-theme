<?php
// RealNex Listings Pro Theme — functions.php

function rnlp_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);
    register_nav_menus([
        'primary' => 'Primary Navigation',
        'footer'  => 'Footer Navigation',
    ]);
}
add_action('after_setup_theme', 'rnlp_theme_setup');

function rnlp_theme_scripts() {
    wp_enqueue_style('rnlp-theme-style', get_stylesheet_uri(), [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'rnlp_theme_scripts');

// Make sure shortcodes work in page content
add_filter('the_content', 'do_shortcode');

// Page hero data per page
function rnlp_get_page_hero() {
    $heroes = [
        'listings' => [
            'breadcrumb' => 'Brokerage',
            'title'      => 'Property Listings',
            'desc'       => 'Browse all available listings. Office, industrial, retail, land and investment opportunities.',
        ],
        'featured-properties' => [
            'breadcrumb' => 'Listings',
            'title'      => 'Featured Properties',
            'desc'       => 'Hand-picked featured listings from our portfolio.',
        ],
        'price-reduced' => [
            'breadcrumb' => 'Listings',
            'title'      => 'Price Reduced',
            'desc'       => 'Recently reduced listings — motivated sellers and motivated deals.',
        ],
        'agent-listing' => [
            'breadcrumb' => 'Team',
            'title'      => 'Our Brokers',
            'desc'       => 'Meet the team behind every deal.',
        ],
        'single-property' => [
            'breadcrumb' => 'Listings',
            'title'      => '',
            'desc'       => '',
        ],
    ];
    $slug = get_post_field('post_name', get_the_ID());
    return $heroes[$slug] ?? [
        'breadcrumb' => 'Pages',
        'title'      => get_the_title(),
        'desc'       => '',
    ];
}

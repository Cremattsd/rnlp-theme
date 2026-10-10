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

// 3.10.19: theme strings use the RealNex Listings Pro text domain, so they follow the
// visitor's language (switcher / auto-detect) together with the plugin.
function rnlp_tt( $s ) {
    return __( $s, 'realnex-listings-pro' ); // phpcs:ignore WordPress.WP.I18n.NonSingularStringLiteralText
}

// Page hero data per page
function rnlp_get_page_hero() {
    $heroes = [
        'listings' => [
            'breadcrumb' => rnlp_tt('Brokerage'),
            'title'      => rnlp_tt('Property Listings'),
            'desc'       => rnlp_tt('Browse all available listings. Office, industrial, retail, land and investment opportunities.'),
        ],
        'featured-properties' => [
            'breadcrumb' => rnlp_tt('Listings'),
            'title'      => rnlp_tt('Featured Properties'),
            'desc'       => rnlp_tt('Hand-picked featured listings from our portfolio.'),
        ],
        'price-reduced' => [
            'breadcrumb' => rnlp_tt('Listings'),
            'title'      => rnlp_tt('Price Reduced'),
            'desc'       => rnlp_tt('Recently reduced listings — motivated sellers and motivated deals.'),
        ],
        'agent-listing' => [
            'breadcrumb' => rnlp_tt('Team'),
            'title'      => rnlp_tt('Our Brokers'),
            'desc'       => rnlp_tt('Meet the team behind every deal.'),
        ],
        'single-property' => [
            'breadcrumb' => rnlp_tt('Listings'),
            'title'      => '',
            'desc'       => '',
        ],
    ];
    $slug = get_post_field('post_name', get_the_ID());
    return $heroes[$slug] ?? [
        'breadcrumb' => rnlp_tt('Pages'),
        'title'      => get_the_title(),
        'desc'       => '',
    ];
}

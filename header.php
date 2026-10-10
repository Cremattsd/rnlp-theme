<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- TOP BAR -->
<div class="site-topbar">
  <div>Las Vegas, NV &middot; <a href="tel:7023881800">702.388.1800</a> &middot; <a href="mailto:info@mdlgroup.com">info@mdlgroup.com</a></div>
  <div class="topbar-social">
    <a href="https://www.facebook.com/MDLGroupLV/" target="_blank" rel="noopener">
      <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
    </a>
    <a href="https://www.linkedin.com/company/mdl-group/" target="_blank" rel="noopener">
      <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
    </a>
    <a href="https://www.instagram.com/mdlgroup/" target="_blank" rel="noopener">
      <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
    </a>
  </div>
</div>

<!-- NAV -->
<nav class="site-nav">
  <a class="site-logo" href="<?php echo home_url(); ?>">
    <div class="logo-mark">M</div>
    <div>
      <div class="logo-text"><?php bloginfo('name'); ?></div>
      <div class="logo-sub"><?php echo esc_html( rnlp_tt( 'Commercial Real Estate' ) ); ?></div>
    </div>
  </a>
  <?php wp_nav_menu([
    'theme_location' => 'primary',
    'container'      => false,
    'menu_class'     => 'nav-menu',
    'fallback_cb'    => function() {
      echo '<ul class="nav-menu">';
      echo '<li><a href="' . home_url('/listings/') . '">' . esc_html( rnlp_tt( 'Listings' ) ) . '</a></li>';
      echo '<li><a href="' . home_url('/featured-properties/') . '">' . esc_html( rnlp_tt( 'Featured' ) ) . '</a></li>';
      echo '<li><a href="' . home_url('/price-reduced/') . '">' . esc_html( rnlp_tt( 'Price Reduced' ) ) . '</a></li>';
      echo '<li><a href="' . home_url('/agent-listing/') . '">' . esc_html( rnlp_tt( 'Team' ) ) . '</a></li>';
      echo '<li><a class="nav-cta" href="' . home_url('/contact/') . '">' . esc_html( rnlp_tt( 'Contact' ) ) . '</a></li>';
      echo '</ul>';
    }
  ]); ?>
</nav>

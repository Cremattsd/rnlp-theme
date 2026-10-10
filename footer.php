<!-- CONSULTATION BAR -->
<div class="consult-bar">
  <div>
    <h2><?php echo esc_html( rnlp_tt( 'Schedule a Consultation' ) ); ?></h2>
    <p><?php echo esc_html( rnlp_tt( 'Everything starts with a conversation. Contact us today for a free needs assessment.' ) ); ?></p>
  </div>
  <a class="consult-btn" href="<?php echo home_url('/contact/'); ?>"><?php echo esc_html( rnlp_tt( 'Contact Us' ) ); ?></a>
</div>

<!-- FOOTER -->
<footer class="site-footer">
  <div>
    <div class="footer-brand"><?php bloginfo('name'); ?></div>
    <div class="footer-sub"><?php echo esc_html( rnlp_tt( 'Commercial Real Estate' ) ); ?> &middot; Las Vegas, NV &middot; 702.388.1800</div>
  </div>
  <div class="footer-links">
    <a href="<?php echo home_url('/listings/'); ?>"><?php echo esc_html( rnlp_tt( 'Listings' ) ); ?></a>
    <a href="<?php echo home_url('/featured-properties/'); ?>"><?php echo esc_html( rnlp_tt( 'Featured' ) ); ?></a>
    <a href="<?php echo home_url('/price-reduced/'); ?>"><?php echo esc_html( rnlp_tt( 'Price Reduced' ) ); ?></a>
    <a href="<?php echo home_url('/agent-listing/'); ?>"><?php echo esc_html( rnlp_tt( 'Team' ) ); ?></a>
  </div>
  <div class="footer-power"><?php echo esc_html( sprintf( rnlp_tt( 'Powered by %s' ), 'RealNex Listings Pro' ) ); ?> &middot; Initial3 Development</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

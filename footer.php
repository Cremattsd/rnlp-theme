<!-- CONSULTATION BAR -->
<div class="consult-bar">
  <div>
    <h2>Schedule a Consultation</h2>
    <p>Everything starts with a conversation. Contact us today for a free needs assessment.</p>
  </div>
  <a class="consult-btn" href="<?php echo home_url('/contact/'); ?>">Contact Us</a>
</div>

<!-- FOOTER -->
<footer class="site-footer">
  <div>
    <div class="footer-brand"><?php bloginfo('name'); ?></div>
    <div class="footer-sub">Commercial Real Estate &middot; Las Vegas, NV &middot; 702.388.1800</div>
  </div>
  <div class="footer-links">
    <a href="<?php echo home_url('/listings/'); ?>">Listings</a>
    <a href="<?php echo home_url('/featured-properties/'); ?>">Featured</a>
    <a href="<?php echo home_url('/price-reduced/'); ?>">Price Reduced</a>
    <a href="<?php echo home_url('/agent-listing/'); ?>">Team</a>
  </div>
  <div class="footer-power">Powered by RealNex Listings Pro &middot; Initial3 Development</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

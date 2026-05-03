<?php get_header(); ?>

<main class="site-main">
  <!-- HERO -->
  <div class="site-hero">
    <div class="hero-breadcrumb" style="font-size:10px;font-weight:700;letter-spacing:.28em;text-transform:uppercase;color:var(--gold);margin-bottom:16px">Commercial Real Estate &middot; Las Vegas, Nevada</div>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <a class="hero-btn" href="<?php echo home_url('/listings/'); ?>">View All Listings</a>
  </div>

  <!-- CONTENT -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div style="padding:48px;max-width:1200px;margin:0 auto">
      <?php the_content(); ?>
    </div>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

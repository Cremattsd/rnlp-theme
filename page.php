<?php get_header(); ?>

<?php
$hero = rnlp_get_page_hero();
$slug = get_post_field('post_name', get_the_ID());
?>

<main class="site-main">

  <?php if ( $slug !== 'single-property' ) : ?>
  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-breadcrumb"><?php echo esc_html( $hero['breadcrumb'] ); ?> &rarr; <span><?php echo esc_html( $hero['title'] ?: get_the_title() ); ?></span></div>
    <h1><?php echo esc_html( $hero['title'] ?: get_the_title() ); ?></h1>
    <?php if ( $hero['desc'] ) : ?>
    <p><?php echo esc_html( $hero['desc'] ); ?></p>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <!-- PAGE CONTENT (shortcodes render here) -->
  <div class="page-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>

</main>

<?php get_footer(); ?>

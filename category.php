<div class="container">

<div id="search-title">
	<h1>Viewing <strong><?php single_cat_title( '', true ); ?>
</strong></h1>
	<span><strong><?php echo $wp_query->found_posts; ?></strong> <?php _e( 'Total Results Found', 'locale' ); ?></span>
	<?php Roots\Sage\Extras\custom_pagination() ;?>


</div>

<?php if (!have_posts()) : ?>
  <div class="row" style="margin-bottom:2em;">
  <?php get_search_form(); ?>
  </div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>

<?php Roots\Sage\Extras\custom_pagination() ;?>

</div>

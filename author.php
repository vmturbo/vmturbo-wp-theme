<?php get_template_part('templates/page', 'header-authors'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

  <div class="row">
	<div class="col-sm-4">
		<?php if (get_the_author_meta('description')) {?>
		  <div id="author-box">
			  <div class="row">
				  <div class="col-sm-12">
				  <?php if ( get_the_author_meta( 'authorimg' ) ) { ?>
				  <img src="<?php the_author_meta( 'authorimg' ); ?>" class="img-responsive" alt="<?php echo get_the_author_meta('display_name'); ?>" title="<?php echo get_the_author_meta('display_name'); ?>">
				  <?php } ?>
				  </div>
				  <div class="col-sm-12">
					  <h1><?php echo get_the_author_meta('display_name'); ?></h1>
					  <p><?php echo get_the_author_meta('description'); ?></p>
					  	<!-- <?php if (get_the_author_meta('linkedin_url')) { ?>
					  		<img style="height:30px; width:30px;" src="http://localhost:8888/vmturbo/wp-content/uploads/2016/04/linkedin.png"/> <?php echo get_the_author_meta('linkedin_url'); ?>
					  	<?php } ?> -->
				  </div>
			  </div>
			  <div class="row">
			  	<?php if (get_the_author_meta('linkedin_url')) { ?>
				  	<div class="col-sm-6">
				  		<img class="linkedin-img" style="height:30px; width:30px;" src="http://localhost:8888/vmturbo/wp-content/uploads/2016/04/linkedin.png"/>
				  	</div>
				  	<div class="col-sm-6">
				  		<p class="linkedin-url"><?php echo get_the_author_meta('linkedin_url'); ?></p>
				  	</div>
				  <?php } ?>
			  </div>
		  </div>
		  <?php } else { ?>
		  <?php } ?>
	</div>
	<div class="col-sm-8">
			<?php $paged = get_query_var('paged');
			if ($paged < 2) { ?>
			<div class="alert alert-warning" style="margin-top:1em;">
				You are viewing all posts by <strong><?php echo get_the_author_meta('display_name'); ?></strong>.
			</div>
			<?php
			} ?>
<?php while (have_posts()) : the_post(); ?>
		<div style="background:#fff;border:1px solid #eee;padding:1em 2em;margin:1em 0;"><?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?></div>
<?php endwhile; ?>
	</div>
  </div>
<!-- <?php the_posts_navigation(); ?> -->

<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-8">
  	<?php the_posts_navigation(); ?>
  </div>
</div>



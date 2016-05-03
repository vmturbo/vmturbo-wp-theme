<?php while (have_posts()) : the_post(); ?>
  <div class="col-md-3 hidden-xs hidden-sm">
  <?php get_template_part('templates/sidebar-blog', get_post_type()); ?>
  </div>
<div class="col-md-9">
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
	   <div class="blog-meta-container clearfix">
		   <p class="date pull-left"><span style="font-weight:bold;text-transform:uppercase;"><?php the_time('F jS, Y') ?></span> by <?php the_author_posts_link() ?> </p>
		   <span class="hidden-xs pull-right"><?php echo do_shortcode('[ssba]'); ?></span>
		   <div class="meta-clear"></div>
	   </div>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
	
	<?php if(get_field('collateral_cta_box')) { ?>
	
		<?php $posts = get_field('collateral_cta_box');
			if( $posts ): ?>
			<div id="blog-end-cta-box">
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
				<?php 
				$field = get_field_object('type');
				$value = get_field('type');
				$label = $field['choices'][ $value ]; ?>
					<span class="cta-label">Recommended <?php echo $label; ?></span>
					<div>
						<a class="cta-title-link" href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
						<p class="cta-description"><?php the_field('description'); ?></p>
						<a href="<?php the_permalink(); ?>" target="_blank" class="btn btn-vmt-slim">Download Now</a>
					</div>
			<?php endforeach; ?>
			</div>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>

	<?php } ?>
	<?php if (get_the_author_meta('description')) {?>
	  <div id="author-box">
		  <div class="row">
		  <div class="col-sm-3">
		  <?php if ( get_the_author_meta( 'authorimg' ) ) { ?>
		  <img src="<?php the_author_meta( 'authorimg' ); ?>" class="img-responsive" alt="<?php echo get_the_author_meta('display_name'); ?>" title="<?php echo get_the_author_meta('display_name'); ?>">
		  <?php } ?>
		  <span class="author-box-name"><?php echo get_the_author_meta('display_name'); ?></span>
		  </div>
		  <div class="col-sm-9">
		  <p><?php echo get_the_author_meta('description'); ?></p>
		  </div>
		  <div class="clearfix"></div>
		  </div>
	  </div>
	  <?php } ?>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
  
  <div id="related-posts-container" class="hidden-sm hidden-xs">
	<?php wp_related_posts()?>
  </div>
  </div>
  
  <div id="next-post" class="row hidden-xs">
	<div class="col-sm-6">
		<?php previous_post_link( '<strong>&laquo; Older Post</strong> %link', '%title', TRUE ); ?>
	</div>
	<div class="col-sm-6 text-right">
		<?php next_post_link( '<strong>Newer Post &raquo;</strong> %link', '%title', TRUE ); ?> 
	</div>
  </div>
<?php endwhile; ?>

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
		  <?php echo get_the_author_meta('description'); ?>
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
  
  <div id="next-post" class="col-md-12">
	<div class="pull-left">
		<?php previous_post_link( '<strong>&laquo; Older Post</strong> %link', '%title', TRUE ); ?>
	</div>
	<div class="pull-right">
		<?php next_post_link( '<strong>Newer Post &raquo;</strong> %link', '%title', TRUE ); ?> 
	</div>
  </div>
<?php endwhile; ?>

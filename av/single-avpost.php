<?php
/**
 * Template Name: About Virtualization Single Post
 */
?>

<?php get_template_part( 'av/inc/part', 'header' ); ?>
  <div id="av-blog-inner" class="container">
  <section id="primary" class="content-area">
        <div class="blog-data" role="main">
		<div class="row" style="margin-left:0;margin-right:0;">
		<div class="col-sm-3">
			
			<div class="sidebar-av">
			<?php get_template_part( 'av/side', 'logo' ); ?>
			<?php get_template_part( 'av/side', 'main' ); ?>
			</div>	
		</div>
		<div class="col-sm-9">
		
		<div class="row" style="padding:15px 0">
		<div class="col-sm-8">
			<h1 style="font-size: 1.2em;margin: 0;line-height: 34px;padding: 0 5px;text-align: center;"><strong>About:Virtualization</strong> features the latest news in Virtualization and Cloud Computing.</h1>
		</div>
        <div class="col-sm-4">
			<?php get_template_part( 'av/inc/part', 'search' ); ?>
        </div>
		</div>
		<?php get_template_part( 'av/inc/part', 'categories' ); ?>
			
		<article class="av-post">
		<div class="post-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
				<header>
				  <h1 class="title-blog">
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a>
				  </h1>
				  <span class="author-meta clearfix" style="display:block;width:100%;line-height:35px;"><span style="float:left"><strong><?php the_time('F jS, Y') ?></strong> by <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" rel="author"><?php the_author() ?></a></span><span style="float:right;"><?php echo do_shortcode('[ssba]'); ?></span></span>
				</header>
			
				  <div class="content">
					<?php
					   the_content();
					?>
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
					  </div>
				  </div>
				  <?php } ?>
				  <?php  endwhile; endif; ?>
			</div>	
		</article>
		<div id="related-post-container" class="clearfix">
		<?php // wp_related_posts()?>
		</div>
		<?php comments_template( '', true ); ?>

		<ul id="custom-pagination" class="pager">
		<?php// if (get_vmt_adjacent_post(false, '', true)): // if there are older posts ?>
			<?php// vmt_prev_post('%link', 'Prev Post', TRUE,'125'); ?>
		<?php// endif; ?>
		<?php// if (get_vmt_adjacent_post(false, '', false)): // if there are newer posts ?>
			<?php// vmt_next_post('%link', 'Next Post', TRUE,'125'); ?>
		<?php// endif; ?>
		</ul>

			  <!-- end columns -->
              <!-- list content -->
			 
        </div><!-- end row-->
		</div>
		</section>
		
	</div>
<?php wp_footer();?>
</body>
</html>
<?php
/**
 * Template Name: About Virtualization
 */
?>

<?php get_template_part( 'av/inc/part', 'header' ); ?>
  <div id="av-blog-main" class="container">
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
			query_posts(array(
				'category_name'=> 'About: Virtualization',
				'paged' => $paged,
				'posts_per_page' => 10
			)); 
			$temp_query = $wp_query; ?>
		<section id="primary" class="content-area">
        <div class="blog-data" role="main">
	    <!-- list content -->
		<div class="row" style="margin-left:0;margin-right:0;">
		<div class="col-sm-4 col-md-3">
			
			<div class="sidebar-av" style="width:100%;float:none;">
			
			<?php get_template_part( 'av/side', 'logo' ); ?>
			
			<h1 style="font-size: .9em;margin: 2em 0 0 0;line-height: 1.5em;padding: 0 5px;text-align: center;display:block"><strong>About:Virtualization</strong> features the latest news in Virtualization and Cloud Computing.</h1>
			
			<?php get_template_part( 'av/side', 'main' ); ?>

			</div>	
		</div>
		<div class="col-sm-8 col-md-9">
		
		<div class="row" style="padding:15px 0">
        <div class="col-sm-4 col-sm-push-8">
			<?php get_template_part( 'av/inc/part', 'search' ); ?>
        </div>
		</div>
		
		<?php get_template_part( 'av/inc/part', 'categories' ); ?>

			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <article class="av-post">
              <div class="blog-content-detail row">
			  <div class="col-sm-4">
				  <?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive blog-featured-img')); ?></a><?php } else { ?>
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/about-virtualization-logo-greywash.png" class="img-responsive blog-featured-img"/>
				  <?php } ?>
			  </div>
			  <div class="col-sm-8">
				<header>
				  <h3 class="title-blog">
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a>
				  </h3>
				  <span class="author-meta clearfix" style="display:block;width:100%;line-height:35px;"><span style="float:left"><strong><?php the_time('F jS, Y') ?></strong> by <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" rel="author"><?php the_author() ?></a></span><span style="float:right"><?php echo do_shortcode('[ssba url="' . get_permalink($post->ID) . '" title="' . get_the_title($post->ID) . '"]'); ?></span></span>
				</header>
				  <div class="blog-detail">
					<p class="detail-overview"><?php  echo(get_the_excerpt()); ?></p>
				  </div>
				  <div class="clear"></div>
              </div>
			  </div>
			  </article>
			  <?php endwhile; ?>
			  <?php else : ?>
			  <p>Sorry, no posts are in Blog</p>
			  <?php endif; ?>
			  <?php Roots\Sage\Extras\custom_pagination() ;?>
		</div> <!-- end columns -->
              <!-- list content -->
			 
        </div><!-- end row-->
		</div>
		</section>
		 <div>
				
		<?php $wp_query = $temp_query; ?>
      </div>	 
	</div>
<?php wp_footer();?>
</body>
</html>
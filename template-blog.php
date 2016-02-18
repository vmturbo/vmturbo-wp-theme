<?php
/**
 * Template Name: Blog
 */
?>

<div id="blog-head" class="row">
	<div class="container">
		<h1>VMTurbo Cloud and Virtualization Blog</h1>
	</div>
</div>
	
	<div class="container">
<?php query_posts( array(
      'posts_per_page' => 10,
      'category_name' => 'blog',
      'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
 ));
?>
<div class="row">

<div class="col-md-3 hidden-xs hidden-sm">
<?php get_template_part('templates/sidebar-blog', get_post_type()); ?>
</div>
<div class="col-md-9">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="blog-item">
	<div class="blog-content-detail">
		<div class="blog-content-main">
		
	   <div class="blog-detail row">
		<div class="blog-thumb col-md-4">
			<?php if ( has_post_thumbnail() ) { ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive blog-featured-img')); ?></a><?php } else { ?>
			<img src="//cdn.vmturbo.com/wp-content/uploads/2015/09/vmturbo-logo-circle.png" class="img-responsive blog-featured-img" />
			<?php } ?>		
		</div>
		<div class="col-md-8">
		<a href="<?php the_permalink(); ?>">
		  <h3 class="title-blog">
			<?php the_title(); ?>
		  </h3>
		</a>
		 <p class="date"><span style="font-weight:bold;text-transform:uppercase;"><?php the_time('F jS, Y') ?></span> <?php the_author_posts_link() ?> </p>
		 <p class="detail-overview">
		   <?php echo(get_the_excerpt()); ?> 
		 </p>
		</div>
	   </div>
	  </div>
	</div>
	<div class="blog-after-meta clearfix">
		<div class="pull-left"><?php echo do_shortcode('[ssba url="' . get_permalink($post->ID) . '" title="' . get_the_title($post->ID) . '"]'); ?></div>
		<a href="<?php comments_link(); ?>" class="pull-right comment-link"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a>
	</div>
</div>
<?php endwhile; endif; ?>
</div>
</div>
<div id="paginate">
<?php Roots\Sage\Extras\custom_pagination(); ?>
</div>
</div>
<?php
/**
 * Template Name: Press Room
 */
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="main-block">
					<div id="header-block">
					<h1><?php the_title() ; ?></h1>
					</div>
					<div><img src="http://cdn.vmturbo.com/wp-content/uploads/2016/04/home-awards.png" class="img-responsive" /></div>
					<div id="content-block">
						<div id="content-about" class="row">
							<div class="col-md-6">
							
							<?php query_posts('cat=565&showposts=5'); ?>
							  <h3>Press Releases</h3>
							  <?php while (have_posts()) : the_post(); ?>
								<div class="post" id="post-<?php the_ID(); ?>">
								  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
								</div>
							<?php endwhile; ?>
							<a href="<?= esc_url(home_url('/')); ?>category/press-releases" class="btn btn-vmt">More Press Releases &raquo;</a>
							</div>
							<div class="col-md-6">
							
							<?php query_posts('cat=567&showposts=5'); ?>
							  <h3>Recent Media Coverage</h3>
							  <?php while (have_posts()) : the_post(); ?>
								<div class="post" id="post-<?php the_ID(); ?>">
								  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
								</div>
							<?php endwhile; ?>
							<a href="<?= esc_url(home_url('/')); ?>category/recent-coverage" class="btn btn-vmt">More Media Coverage &raquo;</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	// validate form inputs
	jQuery(document).ready(function($){

		$.backstretch("//cdn.vmturbo.com/wp-content/uploads/2014/04/home-hero-place.jpg");


	});

	</script>
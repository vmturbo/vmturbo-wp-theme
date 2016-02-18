  <div id="av-blog-inner" class="container av-search">
  <section id="primary" class="content-area">
        <div class="blog-data" role="main">
		<div class="row">
		<div class="col-sm-3">
			
			<div class="sidebar">
			<?php get_template_part( 'av/side', 'logo' ); ?>
			<?php get_template_part( 'av/side', 'main' ); ?>
			</div>	
		</div>
		<div class="col-sm-9">
		
		<div class="row" style="padding:15px 0">
		<div class="col-sm-8">
			<h1 style="font-size: 1em;margin: 0;line-height: 34px;padding: 0 5px;text-align: center;"><strong>About:Virtualization</strong> features the latest news in Virtualization and Cloud Computing.</h1>
		</div>
        <div class="col-sm-4">
			<?php get_template_part( 'av/inc/part', 'search' ); ?>
        </div>
		</div>
		<?php get_template_part( 'av/inc/part', 'categories' ); ?>
		
		<h2 id="search-result-heading">Search results for: "<strong><?php the_search_query(); ?></strong>"</h2>
		  
		
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <article class="av-post">
              <div class="blog-content-detail row">
			  <div class="col-sm-4">
				  <?php if ( has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a><?php } else { ?>
					<img src="http://i.imgur.com/XR1g4D2.png" class="img-responsive"/>
				  <?php } ?>
			  </div>
			  <div class="col-sm-8">
				<header>
				  <h3 class="title-blog">
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a>
				  </h3>
				  <span class="author-meta"><strong><?php the_time('F jS, Y') ?></strong> by <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" rel="author"><?php the_author() ?></a></span>
				</header>
				  <div class="blog-detail">
					<p class="detail-overview"><?php  echo(get_the_excerpt()); ?></p>
				  </div>
				  <div class="clear"></div>
              </div>
			  </div>
			  </article>
			  <?php endwhile; ?>
				<?php $links = posts_pagination(); ?>
			  <?php else : ?>
			  
             <article class="av-post">
              <div class="blog-content-detail row">
				<p id="search-nomatch">Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
			  </div>
			  </article>
			  <?php endif; ?>
			  
			<ul class="pagination"><?php if($paged == 1) { } else { ?><li><?php previous_posts_link('<span>&laquo; &nbsp;Newer</span>'); ?></li><?php } ?>
				<?php
					$count = count($links);
					for ($i = 0; $i < $count; $i++) 
					{
						if($paged != 1 && $i == 0)
						{
						}
						else
						{
							echo '<li>';
							if(!strpos($links[$i], "Older"))
								echo $links[$i];
							echo '</li>';
						}
					}
				?>
				<li><?php next_posts_link('<span>Older&nbsp;&raquo;</span>'); ?></li>
                </ul>
			 
        </div><!-- end row-->
		</div>
		</div>
		</section>
		
	</div>
<?php wp_footer();?>
</body>
</html>


	<div id="blog-sidebar-container">
		
	<h2>Sign Up for Updates</h2>
	<div id="mc_embed_signup">
	<form action="//vmturbo.us11.list-manage.com/subscribe/post?u=52f5cf7f3c2494426b9ca0bff&amp;id=24642c0a8f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll" class="form-group">
		<input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="E-Mail Address" required>
		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_52f5cf7f3c2494426b9ca0bff_24642c0a8f" tabindex="-1" value=""></div>
		<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-vmt"></div>
		</div>
	</form>
	<span>Your e-mail address is never sold, shared or distributed to any third-parties and is only used for blog notifications.</span>
	</div>
		
		
		<h2>Featured Posts</h2>
		<?php $posts = get_field('recommended_posts', 'option');
		if( $posts ): ?>
			<ul class="list-group">
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				<?php setup_postdata($post); ?>
					<a href="<?php the_permalink(); ?>" class="list-group-item"><strong><?php the_title(); ?></strong> by <?php the_author(); ?></a>
			<?php endforeach; ?>
			</ul>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
		
		
		<a class="twitter-timeline" href="https://twitter.com/VMTurbo" data-widget-id="653943093952167936">Tweets by @VMTurbo</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	</div>
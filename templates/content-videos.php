<div style="background:#222;">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
				<div class="row">
					<div class="col-sm-9 col-xs-12">
						<h1 style="color:#fff;font-weight:600;font-size: 1.5em;font-weight: 700;margin: 1em 0;"><?php the_title(); ?></h1>
					</div>
					<div class="col-sm-3 hidden-xs">
						<span style="line-height:4em"><?php echo do_shortcode('[ssba]'); ?></span>
					</div>
				</div>
				<div class="embed-responsive embed-responsive-16by9" style="box-shadow: 0 0 20px #111;border: 1px solid #000;"><iframe class="embed-responsive-item" src="<?php the_field('video_link'); ?>?showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
			</div>
		</div>
	</div>
</div>

<?php if( get_field('cta_area') ) { ?>
<div class="dark-cta-bar hidden-xs" style="padding: 2.5em 0;background: #333;color: #fff;position: relative;">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
				<h3 style="margin-top:0;font-weight:600;"><?php the_field('cta_title'); ?></h3>
				<?php the_field('cta_copy'); ?>
				<a class="btn btn-vmt" href="<?php the_field('cta_button_text'); ?>"><?php the_field('cta_button_url'); ?></a>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<?php $thecontent = get_the_content(); if(!empty($thecontent)) { ?>
<div style="background: url('http://vmturbo.com/wp-content/uploads/2016/03/hex-bg.png') no-repeat center center scroll;background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
					<h3 style="margin: 0;letter-spacing: 1px;text-transform: uppercase;font-size: 1em;font-weight: 600;padding: 1em;color: #fff;background: #888;border-bottom: 2px solid #515151;">Video Transcript</h3>
					<div style="max-height: 275px;overflow-y: scroll;padding: 1em;background: #fff;"><?php the_content(); ?></div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php $collateral_posts = get_field( 'recommended_resources' );
		if( $collateral_posts ): ?>
		
<div style="padding:0 0 1.5em;border-top: 5px solid #f1f1f1;">
	<div class="container">
		<h4 style="color: #555;text-align: center;font-size: 1em;text-transform: uppercase;font-weight: 600;letter-spacing: 1px;padding: 1.5em 0;border-bottom: 1px solid #ddd;margin: 0;">Recommended Resources</h4>
		<div class="row">
		<?php 
			$count = count(get_field("recommended_resources"));
			
			foreach( $collateral_posts as $post ): ?>
			
			<div class="collateral-item col-md-4">
			<?php 
			$field = get_field_object('type');
			$value = get_field('type');
			$label = $field['choices'][ $value ]; ?>
			<span class="collateral-label"><?php echo $label; ?></span>
			<a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a><?php the_field('description'); ?>
			<?php // echo wp_trim_words( get_field('description'), 20, ' ... &raquo;' ); ?>
			</div> 
		<?php endforeach; wp_reset_postdata(); endif; ?>
		
		</div>
	</div>
</div>
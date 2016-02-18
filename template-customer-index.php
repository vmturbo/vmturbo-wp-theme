<?php
/**
 * Template Name: Customer Index
 */
?>
<div class="custom-landing">
	<div id="customer-head">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1 text-center">
					<h1 style="text-align:center">VMTurbo Customers</h1>
					<p>VMTurbo is trusted by over 1,200 enterprises, providing Application Performance Control for virtualized and cloud environments of every shape and size. Customers feel the impact across industries, from financial services, healthcare and government organizations, to service providers, telecommunications and non-profits.</p>
					<a href="https://www.trustradius.com/products/vmturbo/reviews" class="btn btn-secondary btn-sm" style="font-weight: 600;letter-spacing: 1px;margin-top:1em;">See TrustRadius reviews &raquo;</a>
				</div>
			</div>
			
		</div>
	</div>
	<div id="industry-subnav" style="padding: 2em 0;height: auto;">
		<div class="container"><div class="row">
			<div class="col-sm-12">
					<h3 style="margin:0;display:inline;line-height:44px;color: #fff;">VMTurbo is trusted by
						<select id="jobs-select" class="form-control" style="width:auto;display:inline;font-size:.9em;margin:0 .3em;height:auto">
						  <option value="industry-education">Education & Non-Profit</option>
						  <option value="industry-govt">Government</option>
						  <option value="industry-utilities">Energy & Utilities</option>
						  <option value="industry-healthcare">Healthcare</option>
						  <option value="industry-financial">Financial</option>
						  <option value="industry-industrial">Industrial</option>
						  <option value="industry-professional">Professional Services</option>
						  <option value="industry-retail">Retail</option>
						  <option value="industry-service">Service Providers</option>
						  <option value="industry-technology">Technology</option>
						  <option value="industry-media">Media</option>
						</select>
  					customers worldwide.</h3>
						<div class="pull-right"><a href="#industry-education" id="jobs-btn" type="button" class="btn btn-vmt btn-sm" style="text-align:center;">View Customers »</a></div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="industry-education" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Education and Non-Profit</h2>
				<span class="industry-quote">"VMTurbo quickly remediated the resource contention issues we were seeing [due to our growth] and is an integral part of our VMware environment management. We no longer waste valuable time firefighting. It's intuitive, easy to install and can scale seamlessly." <strong>Ron Nicholson, Georgetown University</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-education" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Education and Non Profit',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Education and Non Profit',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#education-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Education &amp; Non-Profit</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="education-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Education and Non Profit',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	
	<div id="industry-govt" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Government</h2>
				<span class="industry-quote">"VMTurbo reduced the overhead of managing our VMware environment by automating changes and adjusting resource allocation. Our users aren't complaining about performance problems anymore. It has helped us reach our goal of becoming a proactive IT team instead of a reactive IT team." <strong>Eric Scott, City of Lewiston</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-govt" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Government',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Government',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#govt-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Government</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="govt-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Government',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	
	<div id="industry-utilities" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Energy &amp; Utilities</h2>
				<span class="industry-quote">"We have pretty stringent PCI and licensing requirements, and we are now able to build all of that in to remain compliant while maximizing resource pools." <strong>Adam Gilbert, NWP Services Corp</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-utilities" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Utilities',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Utilities',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#utilities-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Energy &amp; Utilities</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="utilities-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Utilities',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	<div id="industry-healthcare" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Healthcare and Pharmaceuticals</h2>
				<span class="industry-quote">"In an environment as complex as ours, we found that monitoring and manually taking vMotions alone were not enough. Since we automated, VMTurbo has enabled us to scale with confidence. It's eliminated alerts, particularly in regards to storage performance, and the break-fix loop from our operations, helping us to work smarter." <strong>Brian Simon, Houston Methodist</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-healthcare" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Healthcare and Pharmaceuticals',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Healthcare and Pharmaceuticals',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#healthcare-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Healthcare and Pharmaceuticals</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="healthcare-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Healthcare and Pharmaceuticals',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	
	<div id="industry-financial" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Insurance and Financial Services</h2>
				<span class="industry-quote">"There was a huge increase in CapEx and OpEx managing our sprawling virtual infrastructure of 5,000+ VMs, it wasn't sustainable. After implementing VMTurbo, we successfully consolidated our SQL workloads onto the fewest number of hosts possible, lowering TOC dramatically. I'd say by year's end we will have saved north of seven figures in licensing alone." <strong>Mike Campbell, ACI Worldwide</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-insurance" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Insurance and Financial Services',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Insurance and Financial Services',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#financial-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Insurance and Financial Services</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="financial-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Insurance and Financial Services',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	
	<div id="industry-industrial" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Manufacturing and Industrial</h2>
				<span class="industry-quote">"Our day-to-day management was very labor intensive. We would receive alerts that hosts were low on memory or data stores were full and would have to dig down and move workloads around manually. Now, instead of spending four hours a day on vSphere, I can use that time to improve the environment and prepare for growth. I can keep my environment healthy without too much effort or without wasting valuable resources." <strong>Ryan Hinkamper, Titan International</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-manufacturing" class="grid"><?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Manufacturing and Industrial',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Manufacturing and Industrial',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#industrial-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Manufacturing and Industrial Services</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="industrial-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Manufacturing and Industrial',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	
	
	<div id="industry-professional" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Professional Services</h2>
				<span class="industry-quote">"We've achieved higher density per host thanks to VMTurbo. We could never have been so efficient before and have increased our utilization from 75% to 90%. It took less than 24 hours to start seeing the effects of VMTurbo without our environment. Straight away our application performance improved as workloads were right-sized across our entire system."<strong>Paul Smerkinich, SThree</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-professional" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Professional Services',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Professional Services',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#professional-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Professional Services</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="professional-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Professional Services',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	
	<div id="industry-retail" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Retail and Consumer Products</h2>
				<span class="industry-quote">"VMTurbo allows us to completely automate our vMotions and Storage vMotions. We are utilizing our hardware to the fullest extent possible and have reduced resource contention." <strong>Sean Hendershot, Canon U.S.A.</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-retail" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Retail and Consumer Products',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Retail and Consumer Products',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#retail-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Retail and Consumer Products</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="retail-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Retail and Consumer Products',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	
	
	<div id="industry-technology" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Technology</h2>
				<span class="industry-quote">"Once we hit month-end, all our systems would suddenly stop functioning. The demand skyrocketed and we were blind to the root of the performance problems.  After automating VMTurbo, we no longer hear complaints from end-users are the end of every month." <strong>S&oslash;ren Steenslev, GN ReSound</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-technology" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Technology',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Technology',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#technology-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Technology</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="technology-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Technology',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	
	<div id="industry-service" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Service Providers</h2>
				<span class="industry-quote">"VMTurbo right sizes the environments in a way that makes complete sense and helps us avoid overprovisioning and to maximize efficiency and utilization. Consequentially, all cost savings are passed down to our clients." <strong>Ross Goldstein, All Covered</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-service" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Service Providers',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Service Providers',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#service-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Service Provider</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="service-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Service Providers',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	<div id="industry-media" class="industry-type-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
				<h2>Telecommunications and Media</h2>
				<span class="industry-quote">"Our environment was growing rapidly, we started with one data center and within 12 months we had four other locations. Within the first few weeks we saw the positive impact VMTurbo had on our environment, increasing VM to host density and seeing improvements in both performance and efficiency." <strong>Yanping Zhu, Century Link</strong></span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container customer-content-box">
			<div class="content-block">
				<div class="customer-bounding" style="position:relative;">
				<div id="grid-media" class="grid">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Telecommunications and Media',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
					<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '1',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Telecommunications and Media',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'customer_blurb',
								'value'		=> '',
								'compare'	=> '!='
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="grid-item">
								<div class="customer-item">
									<div class="customer-title"><?php the_title(); ?></div>
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
									
									<div class="customer-blurb">
										<?php the_field('customer_blurb'); ?>
									</div>
									
									<div class="customer-assets">
									<?php
									if( have_rows('featured_collateral') ) :
										while ( have_rows('featured_collateral') ) : the_row();
									?>
									<a class="btn btn-vmt" href="<?php the_sub_field('collateral_url'); ?>"><?php the_sub_field('button_text'); ?></a>
									<?php endwhile; 
									else :
									endif;
									?>
									</div>
									
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<button class="btn customer-drawer" type="button" data-toggle="collapse" data-target="#media-all" aria-expanded="false" aria-controls="collapseExample">See more <strong>Telecommunications and Media</strong> Customers <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>
				<div class="sub-grid row collapse" id="media-all">
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'customer',
						'meta_query'	=> array(
							'relation'		=> 'AND',
							array(
								'key'		=> 'featured',
								'value'		=> '0',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'industry',
								'value'		=> 'Telecommunications and Media',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-sm-15 col-md-4">
								<div class="customer-item">
									<img data-original="<?php the_field('customer_logo'); ?>" src="<?php the_field('customer_logo'); ?>" class="customer-image-featured" />
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			</div>
	</div>
	
	
	<!-- end container -->
</div>

	<script type="text/javascript">
	jQuery(document).ready(function($){
		
	 $('select#jobs-select').on('change',function() {
		$("#jobs-btn").attr("href", "http://vmturbo.com/customers/#" + $(this).val());
      });
	  
	  
		$(".sub-grid img").lazyload();
		$('body').scrollspy({ target: '#industry-subnav', offset: 50, });
		$('#industry-subnav a').on('click', function() {
			event.preventDefault();
			var link = this;
			var target = $(this).attr("data-target")
			
			$(target).collapse("show");
			$.smoothScroll({
			  offset: -50,
			  scrollTarget: link.hash
			});
			return false;
		  });
		
		$("#industry-education").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/education.jpg");
		$("#industry-govt").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/govt.jpg");
		$("#industry-healthcare").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/healthcare.jpg");
		$("#industry-financial").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/financial.jpg");
		$("#industry-industrial").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/industrial.jpg");
		$("#industry-professional").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/professional.jpg");
		$("#industry-retail").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/retail.jpg");
		$("#industry-technology").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/technology.jpg");
		$("#industry-media").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/telecommunications.jpg");
		$("#industry-utilities").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/utilities.jpg");
		$("#industry-service").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/12/serviceproviders.jpg");
		
		$(".grid").each(function() {
			var grid = this;
			$(grid).isotope({
			  itemSelector: '.grid-item',
			  layoutMode: 'masonry'
			});	
			
			$(grid).voila({ method: 'naturalWidth' }, function(instance) {
				$(grid).isotope({
				  itemSelector: '.grid-item',
				  layoutMode: 'masonry'
				});	
			});
		});
		
		
		<?php if ( !wp_is_mobile() ) { ?>
//		var sticky = new Waypoint.Sticky({
//		  element: $('#industry-subnav')[0]
//		})
		<?php } ?>
		
		
  
	}); 
	// end jq
	
//	jQuery(window).load(function(){
//		var $grid = jQuery('.grid').isotope({
//		  itemSelector: '.grid-item',
//		  layoutMode: 'masonry'
//		});
//	});
	</script>
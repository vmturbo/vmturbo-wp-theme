<?php
/**
 * Template Name: Press Kit
 */
?>
	<div class="container" style="padding-top:3em;">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
				<div id="main-block">
					<div id="header-block">
					<h1><?php the_title() ; ?></h1>
						<div id="header-ribbon"><strong>SEPTEMBER</strong> 2015</div>
						<span style="color:#000">Application Performance Control System for the Software-Defined Data Center</span>
					</div>
					
					<div id="content-block">
						<div id="content-about" class="module">
							<h3>About VMTurbo</h3>
							<?php the_content() ; ?>
							<button class="btn btn-vmt btn-copy" data-clipboard-text="<?php the_content() ; ?>" title="Copied!" data-toggle="tooltip" data-placement="top" data-trigger="manual" style="font-size:1em">Copy to Clipboard</button>
							
						</div>
						
						<div class="row">
							
							<div class="col-sm-6">
							<div id="content-datasheet" class="module">
								<h4>Data Sheets</h4>
								<div class="list-group">
									<?php if( have_rows('press_data_sheets') ): ?>
									  <?php while( have_rows('press_data_sheets') ): the_row(); 
												$title = get_sub_field('press_data_sheet_title');
												$content = get_sub_field('press_data_sheet_URL'); ?>
											<a href="<?php echo $content; ?>" class="list-group-item" target="_blank"><?php echo $title; ?></a>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
							<div id="content-supplemental" class="module">
								<h4 style="margin-top:2em">Supplemental Materials</h4>
								<div class="list-group">
									<?php if( have_rows('press_supplemental_materials') ): ?>
									  <?php while( have_rows('press_supplemental_materials') ): the_row(); 
												$type = get_sub_field('press_material_type');
												$title = get_sub_field('press_material_title');
												$content = get_sub_field('press_material_URL'); ?>
											<a href="<?php echo $content; ?>" class="list-group-item" target="_blank"><strong><?php echo $type; ?></strong>: <?php echo $title; ?></a>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
							
							
							<div id="content-mgmt" class="module">
								<h4 style="margin-top:2em">Executive Team</h4>
								<ul class="list-group">
									<li class="list-group-item"><strong>Ben Nye</strong>, Chief Executive Officer</li>
									<li class="list-group-item"><strong>Shmuel Kliger</strong>, President and Founder</li>
									<li class="list-group-item"><strong>Mo Garad</strong>, Chief Financial Officer</li>
									<li class="list-group-item"><strong>Geeta Sachdev</strong>, Chief Marketing Officer</li>
									<li class="list-group-item"><strong>Yuri Rabover</strong>, VP of Product Strategy, Co-Founder</li>
									<li class="list-group-item"><strong>Eric Fischer</strong>, Chief Revenue Officer</li>
									<li class="list-group-item"><strong>Charles Crouchman</strong>, Chief Technology Officer</li>
								</ul>
									<a href="http://vmturbo.com/company/vmturbo-management-team/" target="_blank"><button class="btn btn-vmt" style="width:100%;">Read full biographies &raquo;</button></a>
							</div>
							
							
							</div>
							<div class="col-sm-6">
							<div id="content-videos">
							<h4 style="margin-bottom:0;">Videos</h4>
							<?php if( have_rows('press_videos') ): ?>
							  <?php while( have_rows('press_videos') ): the_row(); 
										$title = get_sub_field('press_video_title');
										$content = get_sub_field('press_video_code'); ?>
										
										<div class="col-sm-12 module">
											<h5 style="margin-top:1.5em;font-weight:600;text-align:center;"><?php echo $title; ?></h5>
											<iframe src="//fast.wistia.net/embed/iframe/<?php echo $content; ?>?videoFoam=true&autoPlay=false" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe>
											
											<!--<pre>&lt;iframe src="//fast.wistia.net/embed/iframe/<?php echo $content; ?>?videoFoam=true&autoPlay=false" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"&gt;&lt;/iframe&gt;
											</pre>-->
											<button class="btn btn-copy" data-clipboard-text="&lt;iframe src=&quot;//fast.wistia.net/embed/iframe/<?php echo $content; ?>?videoFoam=true&autoPlay=false&quot; allowtransparency=&quot;true&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; class=&quot;wistia_embed&quot; name=&quot;wistia_embed&quot; allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width=&quot;640&quot; height=&quot;360&quot;&gt;&lt;/iframe&gt;" title="Copied!" data-toggle="tooltip" data-placement="top" data-trigger="manual" style="width:100%;">Copy Embed Code to Clipboard</button>
										</div>
									
								<?php endwhile; ?>
							<?php endif; ?>
											
						</div>
							</div>
							
						</div>
						
						
						
					</div>
					<div class="expandout">
					
						<h3 style="color:#fff;text-align:center;">Logo / Image Downloads</h3>
						
						<div class="row">
							<div class="col-sm-6 clearfix">
								<img src="//cdn.vmturbo.com/wp-content/uploads/2015/09/press-1.png" class="img-responsive" />
								<h4 style="text-align:center">VMTurbo Logos</h4>
								<a href="http://cdn.vmturbo.com/press/VMTurbo-logos.zip"><button type="button" class="btn btn-success" style="display:block;margin:0 auto">Download</button></a>
							</div>
							<div class="col-sm-6 clearfix">
								<img src="//cdn.vmturbo.com/wp-content/uploads/2015/09/press-2.png" class="img-responsive" />
								<h4 style="text-align:center">VMTurbo User Interface</h4>
								<a href="http://cdn.vmturbo.com/press/VMTurbo-UI.zip"><button type="button" class="btn btn-success" style="display:block;margin:0 auto">Download</button></a>
							</div>
						</div>
						
						<div id="disclaimer">
							<div id="disclaimer-text">
								By downloading any VMTurbo press resources, you agree only to use these files in an authorized manner. VMTurbo reserves all rights to its trademarks, service marks and logos.
							</div>
						</div>
					</div>
					
					
					<div class="quote-block">
						<h3 style="margin-top:0;margin-bottom:30px">Briefing / Media Contacts</h2>
						<div class="row">
							<div class="col-sm-4">
								<p class="quote-contact"><strong>Eric Senunas</strong><br /> VP, Marketing</p>
								<p><a href="mailto:Eric.senunas@vmturbo.com">eric.senunas@vmturbo.com</a></p>
								<p>617.669.3676</p>
							</div>
							<div class="col-sm-4">
								<p class="quote-contact"><strong>Catherine Kellogg</strong><br /> Content Marketing Manager</p>
								<p><a href="mailto:Catherine.kellogg@vmturbo.com">catherine.kellogg@vmturbo.com</a></p>
								<p>781.418.5280</p>
							</div>
							<div class="col-sm-4">
								<p class="quote-contact"><strong>Zoe Nageotte</strong><br /> EMEA Marketing Associate</p>
								<p><a href="mailto:Zoe.nageotte@vmturbo.com">zoe.nageotte@vmturbo.com</a></p>
								<p>+44 (0) 1189 514802</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$.backstretch("//cdn.vmturbo.com/wp-content/uploads/2014/04/home-hero-place.jpg");
		ZeroClipboard.config( { swfPath: "<?php bloginfo('template_url'); ?>/ZeroClipboard.swf" } );
			$('[data-toggle="tooltip"]').tooltip();
			$(".btn-copy").each(function() {
					var client = new ZeroClipboard( this );
					client.on( "ready", function( readyEvent ) {
					  client.on( "aftercopy", function( event ) {
						// `this` === `client`
						// `event.target` === the element that was clicked
						$(event.target).tooltip('show');
						setTimeout(function () {
							$(event.target).tooltip('hide');
						}, 2000);
					  } );
					} );
			});
	});

	</script>
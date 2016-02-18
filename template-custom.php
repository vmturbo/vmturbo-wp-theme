<?php
/**
 * Template Name: Custom Template
 */

?>

<?php
		$i = 0; 
// counter for multiple row backgrounds
?>

<?php if(get_field('custom_header')) { ?>
	
	<?php if(get_field('header_type') == "Video Background") { ?>
	
	<div class="custom-header custom-header-video">
		<div class="container<?php if(get_field('header_size') == "Small") { ?> small<?php } ?><?php if(get_field('header_size') == "Medium") { ?> medium<?php } ?><?php if(get_field('header_size') == "Large") { ?> large<?php } ?>">
			<h1><?php the_title() ; ?></h1>
			<?php if(get_field('header_tagline')) { ?><span id="custom-header-tagline"><?php the_field('header_tagline'); ?></span><?php } ?>
			<?php if(get_field('cta_button')) { ?>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?><span class="wistia_embed wistia_async_<?php the_field('wistia_id'); ?> popover=true popoverContent=link" style="display:inline"><?php } ?>
			<a <?php if(get_field('cta_type') == 'Marketo Form') { ?>id="header-cta-click"<?php } ?><?php if(get_field('new_window')) { ?>target="_blank"<?php } ?>href="<?php if(get_field('cta_type') == 'Link to URL') { the_field('cta_link_url'); } else { ?>#<?php } ?>" class="btn btn-header <?php if(get_field('cta_button_style') == 'clear') { ?>btn-clear<?php } ?><?php if(get_field('cta_button_style') == 'green') { ?>btn-vmt<?php } ?><?php if(get_field('cta_button_style') == 'dark') { ?>btn-secondary<?php } ?>"><?php the_field('cta_button_text'); ?></a>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?></span><?php } ?>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript">
	jQuery(document).ready(function($){
	$('.custom-header-video').vide({
	  mp4: "<?php the_field('header_video_url'); ?>",
	  <?php if(get_field('header_video_cover_image')) { ?>poster: <?php the_field('header_video_cover_image'); ?><?php } ?>
	}, {
		<?php if(get_field('header_video_cover_image')) { ?>
	posterType: 'detect'<?php } else { ?>
	posterType: 'none'
	<?php } ?>
	});
	});

	</script>
	
	<?php } elseif (get_field('header_type') == "Custom Image") { ?>
	<div class="custom-header custom-header-image">
		<div class="container<?php if(get_field('header_size') == "Small") { ?> small<?php } ?><?php if(get_field('header_size') == "Medium") { ?> medium<?php } ?><?php if(get_field('header_size') == "Large") { ?> large<?php } ?>">
			<?php if(get_field('enable_breadcrumbs')) {
				if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="breadcrumbs">','</p>');}} ?>
			<h1><?php the_title() ; ?></h1>
			<?php if(get_field('header_tagline')) { ?><span id="custom-header-tagline"><?php the_field('header_tagline'); ?></span><?php } ?>
			<?php if(get_field('cta_button')) { ?>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?><span class="wistia_embed wistia_async_<?php the_field('wistia_id'); ?> popover=true popoverContent=link" style="display:inline"><?php } ?>
			<a <?php if(get_field('cta_type') == 'Marketo Form') { ?>id="header-cta-click"<?php } ?><?php if(get_field('new_window')) { ?>target="_blank"<?php } ?>href="<?php if(get_field('cta_type') == 'Link to URL') { the_field('cta_link_url'); } else { ?>#<?php } ?>" class="btn btn-header <?php if(get_field('cta_button_style') == 'clear') { ?>btn-clear<?php } ?><?php if(get_field('cta_button_style') == 'green') { ?>btn-vmt<?php } ?><?php if(get_field('cta_button_style') == 'dark') { ?>btn-secondary<?php } ?>"><?php the_field('cta_button_text'); ?></a>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?></span><?php } ?>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$(".custom-header-image").backstretch("<?php the_field('header_image_background'); ?>");
		<?php if(get_field('enable_overlay')) { ?>$(".custom-header-image .backstretch").before( "<div class='overlay-bs'></div>" );<?php } ?>
	})
	</script>
	
	<?php } elseif (get_field('header_type') == "Triangle Fill") { ?>
	<div class="custom-header custom-header-triangle" id="triangle-fill">
		<div class="container<?php if(get_field('header_size') == "Small") { ?> small<?php } ?><?php if(get_field('header_size') == "Medium") { ?> medium<?php } ?><?php if(get_field('header_size') == "Large") { ?> large<?php } ?>">
			<?php if(get_field('enable_breadcrumbs')) {
				if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="breadcrumbs">','</p>');}} ?>
			<h1><?php the_title() ; ?></h1>
			<?php if(get_field('header_tagline')) { ?><span id="custom-header-tagline"><?php the_field('header_tagline'); ?></span><?php } ?>
			
			<?php if(get_field('cta_button')) { ?>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?><span class="wistia_embed wistia_async_<?php the_field('wistia_id'); ?> popover=true popoverContent=link" style="display:inline"><?php } ?>
			<a <?php if(get_field('cta_type') == 'Marketo Form') { ?>id="header-cta-click"<?php } ?><?php if(get_field('new_window')) { ?>target="_blank"<?php } ?>href="<?php if(get_field('cta_type') == 'Link to URL') { the_field('cta_link_url'); } else { ?>#<?php } ?>" class="btn btn-header <?php if(get_field('cta_button_style') == 'clear') { ?>btn-clear<?php } ?><?php if(get_field('cta_button_style') == 'green') { ?>btn-vmt<?php } ?><?php if(get_field('cta_button_style') == 'dark') { ?>btn-secondary<?php } ?>"><?php the_field('cta_button_text'); ?></a>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?></span><?php } ?>
			<?php } ?>
			
		</div>
	</div>
	<script type="text/javascript">
	jQuery(document).ready(function($){
	function addTriangleTo(target) {
		var dimensions = target.getClientRects()[0];
		var pattern = Trianglify({
			<?php if(get_field('triangle_fill_color') == "green") { ?>x_colors: ["#e5f5e0", "#a1d99b","#74c476","#41ab5d","#238b45","#006d2c","#00441b", "#2C9427"],<?php } ?>
			<?php if(get_field('triangle_fill_color') == "grey-black") { ?>x_colors: ["#969696","#737373","#525252","#252525","#000000"],<?php } ?>
			y_colors: 'match_x',
			variance: .75,
			cell_size: 50,
		    palette: Trianglify.colorbrewer,
			width: dimensions.width, 
			height: dimensions.height
		});
		target.style['background-image'] = 'url(' + pattern.png() + ')';
	}
		addTriangleTo(document.getElementById('triangle-fill'));
		$( window ).resize(function() {
			addTriangleTo(document.getElementById('triangle-fill'));
		});
	})
	</script>
	
	<?php } elseif (get_field('header_type') == "Solid Fill") { ?>
	
	<div class="custom-header custom-header-fill<?php if(get_field('solid_fill_color') == "light grey") { ?> light<?php } ?><?php if(get_field('solid_fill_color') == "medium grey") { ?> medium<?php } ?><?php if(get_field('solid_fill_color') == "dark grey") { ?> dark<?php } ?><?php if(get_field('solid_fill_color') == "white") { ?> white<?php } ?>" id="solid-fill">
		<div class="container<?php if(get_field('header_size') == "Small") { ?> small<?php } ?><?php if(get_field('header_size') == "Medium") { ?> medium<?php } ?><?php if(get_field('header_size') == "Large") { ?> large<?php } ?>">
			<?php if(get_field('enable_breadcrumbs')) {
				if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="breadcrumbs">','</p>');}} ?>
			<h1><?php the_title() ; ?></h1>
			<?php if(get_field('header_tagline')) { ?><span id="custom-header-tagline"><?php the_field('header_tagline'); ?></span><?php } ?>
			<?php if(get_field('cta_button')) { ?>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?><span class="wistia_embed wistia_async_<?php the_field('wistia_id'); ?> popover=true popoverContent=link" style="display:inline"><?php } ?>
			<a <?php if(get_field('cta_type') == 'Marketo Form') { ?>id="header-cta-click"<?php } ?><?php if(get_field('new_window')) { ?>target="_blank"<?php } ?>href="<?php if(get_field('cta_type') == 'Link to URL') { the_field('cta_link_url'); } else { ?>#<?php } ?>" class="btn btn-header <?php if(get_field('cta_button_style') == 'clear') { ?>btn-clear<?php } ?><?php if(get_field('cta_button_style') == 'green') { ?>btn-vmt<?php } ?><?php if(get_field('cta_button_style') == 'dark') { ?>btn-secondary<?php } ?>"><?php the_field('cta_button_text'); ?></a>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?></span><?php } ?>
				
			<?php } ?>
		</div>
	</div>
	
	<?php } ?>
	
<?php } else { ?>

	<div class="custom-header custom-header-disabled">
		<div class="container<?php if(get_field('header_size') == "Small") { ?> small<?php } ?><?php if(get_field('header_size') == "Medium") { ?> medium<?php } ?><?php if(get_field('header_size') == "Large") { ?> large<?php } ?>">
			<h1><?php the_title() ; ?></h1>
			<?php if(get_field('header_tagline')) { ?><span id="custom-header-tagline"><?php the_field('header_tagline'); ?></span><?php } ?>
			<?php if(get_field('cta_button')) { ?>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?><span class="wistia_embed wistia_async_<?php the_field('wistia_id'); ?> popover=true popoverContent=link" style="display:inline"><?php } ?>
			<a <?php if(get_field('cta_type') == 'Marketo Form') { ?>id="header-cta-click"<?php } ?><?php if(get_field('new_window')) { ?>target="_blank"<?php } ?>href="<?php if(get_field('cta_type') == 'Link to URL') { the_field('cta_link_url'); } else { ?>#<?php } ?>" class="btn btn-header <?php if(get_field('cta_button_style') == 'clear') { ?>btn-clear<?php } ?><?php if(get_field('cta_button_style') == 'green') { ?>btn-vmt<?php } ?><?php if(get_field('cta_button_style') == 'dark') { ?>btn-secondary<?php } ?>"><?php the_field('cta_button_text'); ?></a>
			<?php if(get_field('cta_type') == 'Wistia Popover') { ?></span><?php } ?>
				
			<?php } ?>
		</div>
	</div>
<?php } ?>

<?php while(the_flexible_field("content")): ?>
	<?php if(get_row_layout() == "text"): $i++; // counter for repeated bg images ?>
	<div id="custom-text-<?php echo $i ?>" class="custom-flexible custom-flexible-text<?php if(get_sub_field('maximize_images')) { ?> maximize-images<?php } ?><?php if(get_sub_field('style') == "image") { ?> layout-image<?php } ?><?php if(get_sub_field('style') == "light") { ?> layout-light<?php } ?><?php if(get_sub_field('style') == "dark") { ?> layout-dark<?php } ?><?php if(get_sub_field('style') == "light gray") { ?> layout-gray<?php } ?>">
	<div class="container">
		<?php if(get_sub_field("columns") == "1") { ?>
			<div class="col-sm-12"><?php the_sub_field("text"); ?></div>
		<?php } elseif(get_sub_field("columns") == "2 (6 / 6)") { ?>
			<div class="col-sm-6"><?php the_sub_field("text"); ?></div>
			<div class="col-sm-6"><?php the_sub_field("text_2"); ?></div>
		<?php } elseif(get_sub_field("columns") == "2 (2 / 6)") { ?>
			<div class="col-sm-2 col-sm-push-2"><?php the_sub_field("text"); ?></div>
			<div class="col-sm-6 col-sm-push-2"><?php the_sub_field("text_2"); ?></div>
		<?php } elseif(get_sub_field("columns") == "2 (6 / 2)") { ?>
			<div class="col-sm-6 col-sm-push-2"><?php the_sub_field("text"); ?></div>
			<div class="col-sm-2 col-sm-push-2"><?php the_sub_field("text_2"); ?></div>
		<?php } elseif(get_sub_field("columns") == "2 (5 / 7)") { ?>
			<div class="col-sm-5"><?php the_sub_field("text"); ?></div>
			<div class="col-sm-7"><?php the_sub_field("text_2"); ?></div>
		<?php } elseif(get_sub_field("columns") == "2 (7 / 5)") { ?>
			<div class="col-sm-7"><?php the_sub_field("text"); ?></div>
			<div class="col-sm-5"><?php the_sub_field("text_2"); ?></div>
		<?php } elseif(get_sub_field("columns") == "3") { ?>
			<div class="col-sm-4"><?php the_sub_field("text"); ?></div>
			<div class="col-sm-4"><?php the_sub_field("text_2"); ?></div>
			<div class="col-sm-4"><?php the_sub_field("text_3"); ?></div>
		<?php } ?>
	</div>
	</div>
	<?php if(get_sub_field('style') == "image") { ?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$("#custom-text-<?php echo $i ?>").backstretch("<?php the_sub_field('background_image'); ?>");
		<?php if(get_sub_field('background_overlay')) { ?>$("#custom-text-<?php echo $i ?> .backstretch").before( "<div class='overlay-bs'></div>" );<?php } ?>
		
		$('.collapse').on('hidden.bs.collapse', function (e) {
			$("#custom-text-<?php echo $i ?>").backstretch("<?php the_sub_field('background_image'); ?>");
		})
		$('.collapse').on('shown.bs.collapse', function (e) {
			$("#custom-text-<?php echo $i ?>").backstretch("<?php the_sub_field('background_image'); ?>");
		})
	})
	</script>
	<?php } ?>
	

	<?php elseif(get_row_layout() == "cta_bar"): ?>
	<div class="custom-flexible-cta<?php if(get_sub_field('cta_style') == "light") { ?> layout-light<?php } ?><?php if(get_sub_field('cta_style') == "dark") { ?> layout-dark<?php } ?><?php if(get_sub_field('cta_buttons') == "2") { ?> dual-buttons<?php } ?>">
		<div class="container">
			<div class="<?php if(get_sub_field('cta_buttons') == "2") { ?>col-md-7<?php } else { ?>col-md-9<?php } ?>">
				<?php if(get_sub_field('cta_subheading')) { ?><h3><?php } else { ?><h3 class="custom-single-line"><?php } ?><?php the_sub_field("cta_heading");?></h3>
				<?php if(get_sub_field('cta_subheading')) { ?><h4><?php the_sub_field("cta_subheading");?></h4><?php } ?>
			</div>
			<?php if(get_sub_field('cta_buttons') == "2") { ?>
			<div class="col-md-5">
				<div class="col-md-6">
					<a class="btn btn-vmt pull-right" href="<?php the_sub_field("cta_button_url");?>"><?php the_sub_field("cta_button_text");?></a>
				</div>
				<div class="col-md-6">
					<a class="btn btn-secondary pull-right" href="<?php the_sub_field("secondary_button_url");?>"><?php the_sub_field("secondary_button_text");?></a>
				</div>
			</div>
			<?php } else { ?>
			<div class="col-md-3">
				<a class="btn btn-vmt pull-right" href="<?php the_sub_field("cta_button_url");?>"><?php the_sub_field("cta_button_text");?></a>
			</div>
			<?php } ?>
		</div>
	</div>
	
	
	<?php elseif(get_row_layout() == "single_line_header"): ?>
	<div class="custom-flexible-heading<?php if(get_sub_field('style') == "light") { ?> white<?php } ?><?php if(get_sub_field('style') == "light gray") { ?> gray<?php } ?><?php if(get_sub_field('style') == "dark") { ?> dark<?php } ?>"<?php if(get_sub_field('remove_bottom_padding') == '1') { ?> style="padding-bottom:0;"<?php } ?>>
		<div class="container">
			<div class="col-md-12">
			<h2><?php the_sub_field("heading_content");?></h2>
			</div>
		</div>
	</div>
	
	
	<?php elseif(get_row_layout() == "quote_row"): $i++; // counter for repeated quotes ?>
	<div id="quote-<?php echo $i ?>" class="custom-flexible-quote<?php if(get_sub_field('quote_background') == "Light") { ?> light<?php } ?><?php if(get_sub_field('quote_background') == "Dark") { ?> dark<?php } ?><?php if(get_sub_field('quote_background') == "Image") { ?> image<?php } ?>">
		<div class="container<?php if(get_sub_field('quote_size') == "Small") { ?> small<?php } ?><?php if(get_sub_field('quote_size') == "Medium") { ?> medium<?php } ?><?php if(get_sub_field('quote_size') == "Large") { ?> large<?php } ?>">
			<div class="col-md-10 col-md-push-1"><?php the_sub_field("quote_body");?>
				<?php if(get_sub_field('quote_author')){ ?><span class="custom-quote-author"><?php the_sub_field("quote_author");?></span><?php } ?>
			</div>
		</div>
	</div>
	<?php if(get_sub_field('quote_background') == "Image") { ?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$("#quote-<?php echo $i ?>").backstretch("<?php the_sub_field('quote_background_image'); ?>");
		<?php if(get_sub_field('background_overlay')) { ?>$("#quote-<?php echo $i ?> .backstretch").before( "<div class='overlay-bs'></div>" );<?php } ?>
	})
	</script>
	<?php } ?>
	<?php elseif(get_row_layout() == "logo_slider"): // layout: Featured Posts ?>
	<div class="custom-flexible-logobar">
		<div class="slick hidden-xs" id="logoslide">
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/autonationlogo.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/akamai.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/02/telstra.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/ING.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/lockheed.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2014/05/bmologobig-copy.min_.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/csc.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/mayo.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/travelport.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/xerox.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/thomson-reuters.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/01/beckman-coulter-logo-copy-min.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2013/10/Covidien.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/02/bbva.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/02/state-street.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2014/04/BT_Logo-copy.min_.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/01/centurylink-logo-copy-min.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/01/canon-copy-min.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/02/carfax.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/08/angies-list-logo-copy-min1.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/08/BMCLogo-min.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/08/honeywell-logo-copy-min1.jpg"></div>
			<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/08/att-logo-702x370-copy-min1.jpg"></div>
		</div>
	</div>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.slick').slick({
		slidesToShow: <?php if(get_sub_field('number_of_logos')) { the_sub_field("number_of_logos") ?><?php } else { ?>6<?php } ?>,
			slidesToScroll: 1,
			autoplay: true,
			arrows: false,
			pauseOnHover: false,
			autoplaySpeed: 1200,
		});
	})
	</script>
	
	<?php elseif(get_row_layout() == "repeater"): ?>
	
	<div class="flexible-repeater <?php the_sub_field('repeater_style'); ?><?php if(get_sub_field('zebra_rows') == '1') { ?> even<?php } ?>">
	<?php 
	$alternate = get_sub_field('alternate_rows');
	$zebra = get_sub_field('zebra_rows');
	$row = 0;
	if( have_rows('repeater_content') ):
		// loop through the rows of data
		while ( have_rows('repeater_content') ) : the_row();
			$image = get_sub_field('image');
			$text = get_sub_field('text'); ?>
			<?php if ($row % 2 === 0) :?>
				<?php if($zebra == '1') { ?><div class="even"><?php } ?>
					<div class="container">
					<div class="row">
						<div class="col-md-4"><img class="img-responsive" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" /></div>
						<div class="col-md-8"><?php echo $text; ?></div>
					</div>
					</div>
				<?php if($zebra == '1') { ?></div><?php } ?>
			 <?php else: ?>
				<?php if($zebra == '1') { ?><div class="odd"><?php } ?>
					<div class="container">
					<div class="row">
						<div class="col-md-4<?php if($alternate == '1') { ?> col-md-push-8<?php } ?>"><img class="img-responsive" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" /></div>
						<div class="col-md-8<?php if($alternate == '1') { ?> col-md-pull-4<?php } ?>"><?php echo $text; ?></div>
					</div>
					</div>
				<?php if($zebra == '1') { ?></div><?php } ?>
			 <?php endif; $row++; ?>
			<?php 
		endwhile;
	endif;
	
	?>
	</div>
	

	<?php elseif(get_row_layout() == "static_customer_row_custom"): ?>

		<div class="custom-flexible custom-flexible-customer<?php if(get_sub_field('visible_on_mobile') == '0') { ?> hidden-xs<?php } ?>">
			<div class="container<?php if(get_sub_field('widescreen') == '1') { ?>-fluid<?php } ?>">
				<div class="row text-center">
					<?php $customer_posts = get_sub_field( 'customer_logo' );
					if( $customer_posts ):
						$count = count(get_sub_field("customer_logo"));
						
						foreach( $customer_posts as $post ): ?>
						
						<div class="col-sm-2">
							<img src="<?php the_field('customer_logo'); ?>" class="img-responsive center-block" />
						</div>
					 
					<?php endforeach; wp_reset_postdata(); endif; ?>
				</div>
			</div>
		</div>
		
	<?php elseif(get_row_layout() == "collateral_list"): // layout: Featured Posts ?>

		<div class="custom-flexible custom-flexible-collateral<?php if(get_sub_field('style') == "light") { ?> layout-light<?php } ?><?php if(get_sub_field('style') == "dark") { ?> layout-dark<?php } ?><?php if(get_sub_field('style') == "white") { ?> layout-white<?php } ?>">
			<div class="container">
			<?php $collateral_posts = get_sub_field( 'collateral' );
			if( $collateral_posts ):
				$count = count(get_sub_field("collateral"));
				
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
		
	<?php elseif(get_row_layout() == "featured_posts"): // layout: Featured Posts ?>

		<div>
			<h2><?php the_sub_field("title"); ?></h2>
			<?php the_sub_field("content"); ?>

			<?php if(get_sub_field("posts")): ?>
				<ul>
				<?php foreach(get_sub_field("posts") as $p): ?>
					<li><a href="<?php echo get_permalink($p->ID); ?>"><?php echo get_the_title($p->ID); ?></a></li>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>

		</div>

	<?php endif; ?>
<?php endwhile; ?>


<?php if(get_field('cta_type') == 'Marketo Form' && get_field('cta_button')) { ?>
	<div class="modal fade in mktoInline" id="header-cta-modal" tabindex="-1" role="dialog" aria-labelledby="header-cta-modal"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title"><?php the_field('marketo_form_title') ?></h4></div><div class="modal-body"><div class="mktoForm_<?php the_field('marketo_id') ?> header-form"><form id="mktoForm_<?php the_field('marketo_id') ?>"></form></div></div></div></div></div>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$("#header-cta-click").click(function() {$("#header-cta-modal").modal();});
			MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", <?php the_field('marketo_id') ?>, function(form){
				$( ".mktoButton" ).addClass( "btn btn-vmt" );
				$( ".mktoButtonWrap.mktoSimple" ).removeClass( "mktoSimple mktoButtonWrap" );
			});	
	});</script>
<?php } ?>


<?php if(get_field('custom_css')) { ?>
<style type="text/css">
<?php the_field('custom_css') ?>
</style>
<?php } ?>
<?php if(get_field('custom_js')) { ?>
<script type="text/javascript">
jQuery(document).ready(function($){
<?php the_field('custom_js') ?>
});
</script>
<?php } ?>
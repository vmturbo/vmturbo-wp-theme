	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/av/redo.css" />
	<style type="text/css">
	 nav.navbar {display:none}
	</style>
	<?php $category = get_the_category(); ?>
	<?php if (!is_category( array( '614' ))){ ?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.blog-cats li a').each(function(){
				var str =  jQuery(this).html();
				<?php if (is_category( array( 'Virtualization', 'Best Practices', 'Cloud', 'DevOps', 'Performance', 'SDx' ))){ ?>
				if(str == '<?php single_cat_title('', true); ?>'){ 
				<?php } else { ?>
				if(str == '<?php echo $category[1]->cat_name; ?>'){
				<?php } ?>	
					jQuery(this).parent().addClass('current');
				}
			});
		});
	</script>
	<?php } ?>	
</head>
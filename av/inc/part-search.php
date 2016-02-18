<form method="get" id="searchform" action="<?php echo get_home_url(); ?>/about-virtualization/page/1/" class="form-group">
<div class="input-group stylish-input-group">
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="form-control" placeholder="Search">
	<span class="input-group-addon">
		<button type="submit"><span class="glyphicon glyphicon-search"></span></button>  
	</span>
</div>
</form>
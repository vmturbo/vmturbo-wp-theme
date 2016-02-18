<?php
/**
 * Template Name: Events Index
 */
?>
<div class="custom-landing">

	<div id="event-header">
		<div class="container">
		<?php // faking breadcrumbs below - not using yoast function ?>
		<p id="breadcrumbs"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="<?= esc_url(home_url('/')); ?>" rel="v:url" property="v:title">Home</a> &raquo; <span rel="v:child" typeof="v:Breadcrumb"><a href="<?php echo esc_url( get_permalink(25) ); ?>" rel="v:url" property="v:title"><?php echo get_the_title(25); ?></a></span> &raquo; <strong class="breadcrumb_last"><?php the_title(); ?></strong></span></span></p>
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	
	<div class="container">
	<div class="row event-content">
		<div class="col-md-5">			
			<h3>All Events</h3>
			<ul class="list-unstyled">
			<script>
			console.log('CURRENT DATE: <?php echo current_time('Ymd'); ?>');
			</script>
			<?php
			$current_date = current_time('Ymd');
			$args = array(
				'numberposts'	=> -1,
				'post_type'		=> 'events',
				'order'			=> 'ASC',
				'orderby'		=> 'meta_value_num',
				'meta_key'		=> 'end_date',
				'meta_query'	=> 
					array(
						'key'		=> 'end_date',
						'compare'	=> '>=',
						'value'		=> $current_date
					)
			);
				$the_query = new WP_Query( $args ); ?>
			<?php if( $the_query->have_posts() ): ?>						
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>				
					<?php 
					$contact_address = get_field('location');
					$address = explode( "," , $contact_address['address']);
					$location = get_field('location');
					
					$originalStart = get_field('start_date');
					$newStart = date("F j, Y", strtotime($originalStart));
					
					$originalEnd = get_field('end_date');
					$newEnd = date("F j, Y", strtotime($originalEnd));
						
					?>
					<li>
						<a href="<?php the_permalink(); ?>" class="event-title"><?php the_title(); ?></a>
						<span class="event-start"><strong>Starts:</strong> <?php echo $newStart; ?></span>
						<span class="event-start"><strong>Ends:</strong> <?php echo $newEnd; ?></span>
						<span class="event-address"><?php echo $address[1].','.$address[2]; ?></span>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			</ul>
		</div>
		<div class="col-md-7">
			<iframe style="border: 0;" src="https://www.google.com/calendar/embed?showTitle=0&amp;showTz=0&amp;showCalendars=0&amp;showTabs=0&amp;src=uu694da6pkqq7nvd64p9bpsr38%40group.calendar.google.com&amp;ctz=America/New_York" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
		</div>
	</div>
	
	</div>
	
	
	<div>
		<span id="event-map">Events Map</span>
		<div class="acf-map">
	<?php
	$args = array(
		'numberposts'	=> -1,
		'post_type'		=> 'events',
		'meta_key'		=> 'end_date',
		'meta_query'	=> 
			array(
				'key'		=> 'end_date',
				'compare'	=> '>=',
				'value'		=> $current_date
			)
	);
		$the_query = new WP_Query( $args ); ?>
	<?php if( $the_query->have_posts() ): ?>						
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>				
			<?php 
			$contact_address = get_field('location');
			$address = explode( "," , $contact_address['address']);
			$location = get_field('location');
			
			$originalStart = get_field('start_date');
			$newStart = date("F j, Y", strtotime($originalStart));
			
			$originalEnd = get_field('end_date');
			$newEnd = date("F j, Y", strtotime($originalEnd));
			?>
			
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<span class="event-start"><strong>Starts:</strong> <?php echo $newStart; ?></span>
					<br />
				<span class="event-start"><strong>Ends:</strong> <?php echo $newEnd; ?></span>
				<p class="address"><?php echo $location['address']; ?></p>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query(); ?>
		</div>
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {
function new_map( $el ) {
	var $markers = $el.find('.marker');
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map( $el[0], args);
	map.markers = [];
	$markers.each(function(){
    	add_marker( $(this), map );
	});
	center_map( map );
	return map;
}
function add_marker( $marker, map ) {
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});
	map.markers.push( marker );
	if( $marker.html() )
	{
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open( map, marker );
		});
	}
}
function center_map( map ) {
	var bounds = new google.maps.LatLngBounds();
	$.each( map.markers, function( i, marker ){
		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
		bounds.extend( latlng );
	});
	if( map.markers.length == 1 )
	{
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		map.fitBounds( bounds );
	}
}
var map = null;
$(document).ready(function(){
	$('.acf-map').each(function(){
		map = new_map( $(this) );
	});
	$("#event-header").backstretch("//cdn.vmturbo.com/wp-content/uploads/2014/04/qos_04.jpg");
});
})(jQuery);
</script>
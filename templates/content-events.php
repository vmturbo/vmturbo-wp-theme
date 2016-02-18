<?php 
$contact_address = get_field('location');
$address = explode( "," , $contact_address['address']);

			$originalStart = get_field('start_date');
			$newStart = date("F j, Y", strtotime($originalStart));
			
			$originalEnd = get_field('end_date');
			$newEnd = date("F j, Y", strtotime($originalEnd));
?>

<div id="event-header">
	<div class="container">
	<?php // faking breadcrumbs below - not using yoast function ?>
	<p id="breadcrumbs"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="<?= esc_url(home_url('/')); ?>" rel="v:url" property="v:title">Home</a> &raquo; <span rel="v:child" typeof="v:Breadcrumb"><a href="<?php echo esc_url( get_permalink(25) ); ?>" rel="v:url" property="v:title"><?php echo get_the_title(25); ?></a></span> &raquo; <span rel="v:child" typeof="v:Breadcrumb"><a href="<?php echo esc_url( get_permalink(16854) ); ?>" rel="v:url" property="v:title"><?php echo get_the_title(16854); ?></a></span> &raquo; <strong class="breadcrumb_last"><?php the_title(); ?></strong></span></span></p>
		<h1><?php the_title(); ?></h1>
		<span id="event-head-meta"><?php echo $address[1].','.$address[2]; ?></span>
	</div>
</div>

<div class="custom-landing events">
	<div class="container">
	<div class="row event-content">
		<div class="col-md-4">
			<h3>Event Details</h3>
			<table class="table table-hover">
				<tr>
					<td><strong>Start Date:</strong></td>
					<td class="text-right"><?php echo $newStart; ?></td>
				</tr>
				<tr>
					<td><strong>End Date:</strong></td>
					<td class="text-right"><?php echo $newEnd; ?></td>
				</tr>
			<?php if(!get_field('all_day')) { ?>
				<tr>
					<td><strong>Start Time:</strong></td>
					<td class="text-right"><?php the_field('start_time'); ?></td>
				</tr>
				<tr>
					<td><strong>End Time:</strong></td>
					<td class="text-right"><?php the_field('end_time'); ?></td>
				</tr>
			<?php } ?>
			<?php if(get_field('all_day')) { ?>
				<tr>
					<td class="text-center all-day" colspan="2"><strong>This is an all day event.</strong></td>
				</tr>
			<?php } ?>
			</table>
		</div>
		<div class="col-md-8">
			<?php the_content(); ?>
		</div>
	</div>
	</div>
	
		<?php if(!get_field('virtual_event')) { ?>
		
		<span id="location"><?php $location = get_field('location'); echo $location['address']; ?></span>
		<span>
		</span>
		
		<?php $location = get_field('location');
			  if( !empty($location) ): ?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
			<?php endif; ?>
		<?php } ?>
	
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
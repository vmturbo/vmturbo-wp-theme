<?php
if ( in_category('blog') ) {
	get_template_part('templates/content-blog', get_post_type());
} elseif ( in_category( 'About: Virtualization' )) {
	include('av/single-avpost.php');
} elseif ( is_singular( 'partners' ) ) {
	get_template_part('templates/content-partners', get_post_type());
} elseif ( is_singular( 'press-releases' ) ) {
	get_template_part('templates/content-single', get_post_type());
} elseif ( is_singular( 'events' ) ) {
	get_template_part('templates/content-events', get_post_type());
} else {
	get_template_part('templates/content-single', get_post_type());
}
?>
<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/** Extra helpers **/

	/** remove toolbar nodes **/
	add_action( 'admin_bar_menu', __NAMESPACE__ . '\\remove_wp_nodes', 999 );

	function remove_wp_nodes( $wp_admin_bar ) {
		$wp_admin_bar->remove_node( 'wp-logo' );
		$wp_admin_bar->remove_node( 'customize' );
		$wp_admin_bar->remove_node( 'themes' );
		$wp_admin_bar->remove_node( 'widgets' );
		$wp_admin_bar->remove_node( 'dashboard' );
		$wp_admin_bar->remove_node( 'menus' );
	}
	
	/** remove post formats altogether **/
	add_action('after_setup_theme', __NAMESPACE__ . '\\remove_post_formats', 11);
	function remove_post_formats() {
		remove_theme_support('post-formats');
	}

// Filtering the wrapper: custom post types
	
add_filter('sage/wrap_base', __NAMESPACE__ . '\sage_wrap_base_cpts'); // Add our function to the sage/wrap_base filter

function sage_wrap_base_cpts($templates) {
    $cpt = get_post_type(); // Get the current post type
    if ($cpt) {
       array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
    }
    return $templates; // Return our modified array with base-$cpt.php at the front of the queue
}

//removing meta boxes from post types that dont need it
add_action( 'admin_head', __NAMESPACE__ . '\\remove_extra_wp_meta', 999 );
function remove_extra_wp_meta() {
   echo '<link rel="stylesheet" href="../wp-content/themes/vmturbo/assets/styles/admin.css" />';
}

// custom pagination for blog

function custom_pagination() {
	
    if (is_singular()) {
        return;
    }
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1) {
        return;
    }
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);
    /** Add current page to the array */
    if ($paged >= 1) {
        $links[] = $paged;
    }
    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="pagination_wrapper"><ul class="pagination">' . "\n";
    /** Previous Post Link */
    if (get_previous_posts_link()) {
        printf('<li>%s</li>' . "\n", get_previous_posts_link("&laquo; Previous"));
    }
    /** Link to first page, plus ellipses if necessary */
	 /*
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="first active"' : ' class="first"';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
        
		 if (!in_array(2, $links)) {
            echo '<li>…</li>';
        }
		
    }
	*/
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="last active"' : ' class="last"';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }
    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li><span class="btn disabled">…</span></li>' . "\n";
        }
        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    /** Next Post Link */
    if (get_next_posts_link()) {
        printf('<li>%s</li>' . "\n", get_next_posts_link("Next &raquo;"));
    }
    echo '</ul></div>' . "\n";
}


// shortcode for button
function button_vmt( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => '',
		), $atts )
	);

	// Code
return '<a class="btn btn-vmt" href="' . $link . '">' . $content . '</a>';

}
add_shortcode( 'button', __NAMESPACE__ . '\\button_vmt' );


// shortcode for wistia button inline
function button_wistia_inline( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'link' => '',
		), $atts )
	);

	// Code
	return '<span class="wistia_embed wistia_async_' . $link . ' popover=true popoverContent=link" style="display:inline"><a href="#" class="btn btn-vmt">' . $content . '</a></span>';


}
add_shortcode( 'button-wistia', __NAMESPACE__ . '\\button_wistia_inline' );



// shortcode for marketo modal popup
function button_marketo_modal( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'form' => '',
			'title' => '',
			'ty' => '',
		), $atts )
	);

	$tyval = html_entity_decode($ty);
	
	STATIC $i = 0; 
	$i++;
	// Code
	return '<a href="#" class="btn btn-vmt mktoPop" id="modal-' . $i . '-click">' . $content . '</a>
	<script type="text/javascript">jQuery(document).ready(function($){
	$(\'body\').append(\'<div class="modal fade in mktoInline" id="modal-' . $i . '" tabindex="-1" role="dialog" aria-labelledby="modal-' . $i . '"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">' . $title . '</h4></div><div class="modal-body"><div class="mktoForm_' . $form . '"><form id="mktoForm_' . $form . '"></form></div></div></div></div></div>\');

	$("#modal-' . $i . '-click").click(function() {$("#modal-' . $i . '").modal();});
		var countForms = $(\'.mktoForm_' . $form . '\').length;
		if (countForms == 1) {
			MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", ' . $form . ', function(form){
				$( ".mktoButton" ).addClass( "btn btn-vmt" );
				$( ".mktoButtonWrap.mktoSimple" ).removeClass( "mktoSimple mktoButtonWrap" );
					form.onSuccess(function(values, followUpUrl) {
						location.href = "' . $tyval . '";
						return false;
					});
			});
		} 
		else if (' . $i . ' == 1) {
			MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", ' . $form . ', function(form){
				$( ".mktoButton" ).addClass( "btn btn-vmt" );
				$( ".mktoButtonWrap.mktoSimple" ).removeClass( "mktoSimple mktoButtonWrap" );
					form.onSuccess(function(values, followUpUrl) {
						location.href = "' . $tyval . '";
						return false;
					});
			});
		} 
	else {}
});</script>';
	
}
add_shortcode( 'button-marketo', __NAMESPACE__ . '\\button_marketo_modal' );

// shortcode for readmore
function collapse_readmore( $atts , $content = null ) {
	
	STATIC $i = 0;
	$i++;
	
	// Attributes
	extract( shortcode_atts(
		array(
		), $atts )
	);

	// Code
	return '<button id="collapse-toggle-' . $i . '" data-toggle="collapse" data-target="#collapse-' . $i . '" class="readmore">Read More &raquo;</button><div class="collapse" id="collapse-' . $i . '" aria-expanded="false"><p>' . $content . '</p></div><script type="text/javascript">jQuery("#collapse-toggle-' . $i . '").click(function(){jQuery(this).fadeOut("fast");})</script>';

}
add_shortcode( 'more', __NAMESPACE__ . '\\collapse_readmore' );


// shortcode for popup
function image_popover( $atts , $content = null ) {
	
	// Attributes
	extract( shortcode_atts(
		array(
		), $atts )
	);

	// Code
	return '<a href="' . $content . '" class="image-links"><img src="' . $content . '" class="img-responsive" /></a>';

}
add_shortcode( 'popover', __NAMESPACE__ . '\\image_popover' );



// shortcode for wistia inline
function wistia_inline( $atts , $content = null ) {
	// Attributes
	extract( shortcode_atts(
		array(
		), $atts )
	);

	// Code
	return '<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_' . $content. ' videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>';

}
add_shortcode( 'wistia', __NAMESPACE__ . '\\wistia_inline' );




// shortcode for wistia popover
function wistia_popover( $atts , $content = null ) {
	// Attributes
	extract( shortcode_atts(
		array(
			'id' => ''
		), $atts )
	);

	// Code
	return '<span class="wistia_embed wistia_async_' . $id . ' popover=true popoverContent=link" style="display:inline"><a href="#" class="btn btn-vmt">' . $content. '</a></span>';

}
add_shortcode( 'wistia_pop', __NAMESPACE__ . '\\wistia_popover' );

// shortcode for techvalidate
function techvalidate_inline( $atts , $content = null ) {
	// Attributes
	extract( shortcode_atts(
		array(
		), $atts )
	);
	return '<script type="text/javascript" src="//www.techvalidate.com/assets/embed.js"></script><div class="resize-tv hidden-xs" id="embed_container_' . $content. '"><div id="iframe_container_' . $content. '"></div><p id="right_linkback_paragraph_' . $content. '"><a id="linkback_' . $content. '" href="http://www.techvalidate.com">Customer Content</a> verified by TechValidate.</p><script type="text/javascript">var tvCollection_' . $content. ' = new TVCollection();tvCollection_' . $content. '.initialize({width: 640, height: 440, "style": "slideshow",  "tvid":' . $content. ',"protocol":document.location.protocol});tvCollection_' . $content. '.display();</script></div>';
}
add_shortcode( 'techvalidate', __NAMESPACE__ . '\\techvalidate_inline' );

// shortcode for trustradius
function trustradius( $atts ) {
	return '<div class="trustradius" style="border-radius:5px;"><div class="tr-widget-container"><div class="tr-header" id="tr-tag"> <a href="https://www.trustradius.com/products/vmturbo/reviews" target="_blank" style="color: #ffffff; text-decoration:none;">Reviews of <strong>VMTurbo Operations Manager</strong> on <img style="height: 16px;" src="http://trustradius-static.s3.amazonaws.com/1.0.0/images/trustradius_logo_tm_240.png" alt="Software Reviews on TrustRadius"></a></div><div class="trustradius-widget" style="min-height:350px;" data-products="vmturbo" data-show-header="false" data-max-reviews="10" data-min-rating="4" data-sort="-rating"><script>(function() {function async_load() {var s = document.createElement("SCRIPT");s.src = "http://d30ia583fbtg8i.cloudfront.net/reviews_list/reviews_list.js";s.async = true;var x = document.getElementsByTagName("script")[0];x.parentNode.insertBefore(s, x);}window.attachEvent ?window.attachEvent("onload", async_load):window.addEventListener("load", async_load, false);})();</script></div></div></div>';
}
add_shortcode( 'trustradius', __NAMESPACE__ . '\\trustradius' );

// shortcode for wistia inline
function youtube_inline( $atts , $content = null ) {
	// Attributes
	extract( shortcode_atts(
		array(
		), $atts )
	);

	// Code
	return '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $content. '?showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>';

}
add_shortcode( 'youtube', __NAMESPACE__ . '\\youtube_inline' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Sidebar Options',
		'menu_title'	=> 'Blog Sidebar',
		'parent_slug'	=> 'edit.php',
	));
	
}
// reduce wp heartbeat 

function vmt_heartbeat_settings( $settings ) {
    $settings['interval'] = 60; 
    return $settings;
}
add_filter('heartbeat_settings', __NAMESPACE__ . '\\vmt_heartbeat_settings');

function remove_page_from_query_string($query_string) { 
    if ( isset($query_string['name'] )) {
        if ($query_string['name'] == 'page' && isset($query_string['page'])) {
            unset($query_string['name']);
            list($delim, $page_index) = preg_split('/[\\/]+/', $query_string['page']);
            $query_string['paged'] = $page_index;
        }      
    }
    return $query_string;
}
add_filter('request', __NAMESPACE__ . '\\remove_page_from_query_string');

function fix_category_pagination($qs) {
	if(isset($qs['category_name']) && isset($qs['paged'])){
		$qs['post_type'] = get_post_types($args = array(
			'public'   => true,
			'_builtin' => false
		));
		array_push($qs['post_type'],'post');
	}
	return $qs;
}
add_filter('request', __NAMESPACE__ . '\\fix_category_pagination');

function new_subcategory_hierarchy() {
    $category = get_queried_object();
 
    $parent_id = $category->category_parent;
 
    $templates = array();
     
    if ( $parent_id == 0 ) {
        // Use default values from get_category_template()
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";
        $templates[] = 'category.php';      
    } else {
        // Create replacement $templates array
        $parent = get_category( $parent_id );
 
        // Current first
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";
 
        // Parent second
        $templates[] = "category-{$parent->slug}.php";
        $templates[] = "category-{$parent->term_id}.php";
        $templates[] = 'category.php';  
    }
    return locate_template( $templates );
}
 
add_filter( 'category_template', __NAMESPACE__ . '\\new_subcategory_hierarchy' );


add_action( 'show_user_profile', __NAMESPACE__ . '\\vmt_author_img' );
add_action( 'edit_user_profile', __NAMESPACE__ . '\\vmt_author_img' );

function vmt_author_img( $user ) { ?>

	<h3>Author Image</h3>

	<table class="form-table">

		<tr>
			<th><label for="authorimg">Image URL</label></th>

			<td>
				<input type="text" name="authorimg" id="authorimg" value="<?php echo esc_attr( get_the_author_meta( 'authorimg', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter the URL to the author image.</span>
			</td>
		</tr>

	</table>
<?php } 
 
add_action( 'personal_options_update', __NAMESPACE__ . '\\vmt_author_img_save' );
add_action( 'edit_user_profile_update', __NAMESPACE__ . '\\vmt_author_img_save' );

function vmt_author_img_save( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;
	// for each field (below)
	update_usermeta( $user_id, 'authorimg', $_POST['authorimg'] );
}

// Revelanassi ACF Support for Repeater Fields
add_filter('relevanssi_excerpt_content',  __NAMESPACE__ . '\\custom_fields_to_excerpts', 10, 3);
function custom_fields_to_excerpts($content, $post, $query) {
	$fields = get_field('content', $post->ID);
	if($fields){
		foreach($fields as $field){
			if ($field['acf_fc_layout'] == "text"){
				$content .= " " . $field['text'];
				if($field['text_2']){
					$content .= " " . $field['text_2'];
				}
				if($field['text_3']){
					$content .= " " . $field['text_3'];
				}
			}
		}
	}
	return $content;
}

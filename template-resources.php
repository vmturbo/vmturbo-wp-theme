<?php
/**
 * Template Name: Resource Center
 */
?>
<div class="custom-landing">
	<div id="resource-head">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<div class="input-group" id="search-container">
				<span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
				<input type="text" class="quicksearch form-control" placeholder="Search all resources" />
			</div>
		</div>
	</div>
	<div id="resource-nav">
		<div class="container">
		<ul class="filters-button-group nav nav-pills nav-justified">
			<li role="presentation" class="active"><button type="button" class="btn btn-default is-checked" data-filter="*">All</button></li>
			<li role="presentation"><button type="button" class="btn btn-default anal-report" data-filter=".analyst-report">Analyst Reports</button></li>
			<li role="presentation"><button type="button" class="btn btn-default case-study" data-filter=".case-study">Case Studies</button></li>
			<li role="presentation"><button type="button" class="btn btn-default webinar" data-filter=".webinar">Webinar</button></li>
			<li role="presentation"><button type="button" class="btn btn-default pro-data" data-filter=".pro-data">Data Sheets</button></li>
			<li role="presentation"><button type="button" class="btn btn-default vid" data-filter=".vid">Videos</button></li>
			<li role="presentation"><button type="button" class="btn btn-default white-paper" data-filter=".white-paper">White Papers</button></li>
			<li role="presentation"><button type="button" class="btn btn-default infographic" data-filter=".infographic">Infographics</button></li>
			<li role="presentation"><button type="button" class="btn btn-default ebook" data-filter=".ebook">eBooks</button></li>
		</ul>
		</div>
	</div>
	<div class="container" id="resource-content-box">
			<div class="content-block">
				<div id="resource-bounding" style="display:relative;">
				
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'collateral',
						'meta_query'	=> array(
							'relation'		=> 'OR',
							array(
								'key'		=> 'type',
								'value'		=> 'case-study',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'type',
								'value'		=> 'analyst-report',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'type',
								'value'		=> 'ebook',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'type',
								'value'		=> 'webinar',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'type',
								'value'		=> 'pro-data',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'type',
								'value'		=> 'vid',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'type',
								'value'		=> 'white-paper',
								'compare'	=> 'LIKE'
							),
							array(
								'key'		=> 'type',
								'value'		=> 'infographic',
								'compare'	=> 'LIKE'
							)
						)
					);
						$the_query = new WP_Query( $args ); ?>
					<?php if( $the_query->have_posts() ): ?>						
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="resource-item <?php the_field('type'); ?>">
							  <?php if(get_field('type') == 'case-study') { ?><span class="glyphicon glyphicon-file case-study" aria-hidden="true"></span><?php } ?>
							  <?php if(get_field('type') == 'analyst-report') { ?><span class="glyphicon glyphicon-file analyst-report" aria-hidden="true"></span><?php } ?>
							  <?php if(get_field('type') == 'ebook') { ?><span class="glyphicon glyphicon-file ebook" aria-hidden="true"></span><?php } ?>
							  <?php if(get_field('type') == 'webinar') { ?><span class="glyphicon glyphicon-education webinar" aria-hidden="true"></span><?php } ?>
							  <?php if(get_field('type') == 'pro-data') { ?><span class="glyphicon glyphicon-book pro-data" aria-hidden="true"></span><?php } ?>
							  <?php if(get_field('type') == 'vid') { ?><span class="glyphicon glyphicon-facetime-video vid" aria-hidden="true"></span><?php } ?>
							  <?php if(get_field('type') == 'white-paper') { ?><span class="glyphicon glyphicon-duplicate white-paper" aria-hidden="true"></span><?php } ?>
							  <?php if(get_field('type') == 'infographic') { ?><span class="glyphicon glyphicon-stats infographic" aria-hidden="true"></span><?php } ?>
								<div class="resource-meta">
									<h4 class="resource-title"><a href="<?php the_field('link'); ?>"><?php the_title(); ?></a></h4>
									<span class="resource-type"><?php echo get_field_object('type')['choices'][ get_field('type') ]; ?></span>
									


								</div>
								<span class="resource-description"><?php the_field('description'); ?></span>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
			</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="mediaModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		
		$("#resource-head").backstretch("//cdn.vmturbo.com/wp-content/uploads/2015/11/resource-center.jpg");
		// prevent main nav filtering
		$("ul.dropdown-menu a[href*=#filter]").click(function(e) {
			$('.dropdown.open').removeClass('open');
			$('.dropdown-menu').stop(true, true).fadeOut(250);
				if ($(window).width() < 768) {
				$('.navbar-collapse.collapse.in').removeClass('in');
				};
				$.smoothScroll({
				  scrollTarget: '#resource-nav',
				  
				  afterScroll: function() { 
					$('nav.navbar').removeClass('headroom--pinned').addClass('headroom--unpinned');
				  }
			     });
		});  
		$('a[href^="https://www.youtube.com"]').on('click', function(e){
		 
				e.preventDefault();
				var vidWidth = 560; // default
				var vidHeight = 315; // default
				var linkTo = $(this).attr('href');
				var currentText = $(this).text();
				if ( $(this).attr('data-width') ) { vidWidth = parseInt($(this).attr('data-width')); }
				if ( $(this).attr('data-height') ) { vidHeight =  parseInt($(this).attr('data-height')); }
				var iFrameCode = '<div class="row"><div class="col-md-12"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" scrolling="no" allowtransparency="true" allowfullscreen="true" src="'+ linkTo +'" frameborder="0"></iframe></div></div></div>';
		 
				$('#mediaModal .modal-title').html(currentText);
				$('#mediaModal .modal-body').html(iFrameCode);
		 
				$('#mediaModal').modal({
					backdrop: 'static'
				});
		});
		
	// Clear modal contents on close. 
	$('#mediaModal').on('hidden.bs.modal', function () {
		$('#mediaModal .modal-body').html('');
	});
		
		// quick search regex
		var qsRegex;
  
		var $grid = $('#resource-bounding').isotope({
		  itemSelector: '.resource-item',
		  layoutMode: 'masonry'
	});
		
		  // use value of search field to filter
	    var $quicksearch = $('.quicksearch').keyup( debounce( function() {
			
			//remove button active if in middle of search
		  $filterButtonGroup.find('.is-checked').removeClass('is-checked');
		  
			qsRegex = new RegExp( $quicksearch.val(), 'gi' );
			$grid.isotope({
				filter: function() {
					return qsRegex ? $(this).text().match( qsRegex ) : true;
			   }
			 });
			}, 200 ) );
  		
		var filterFns = {
		};

		// filter items on button click
		$('.filters-button-group').on( 'click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			$('.quicksearch').val('');
			// use filter function if value matches
			filterValue = filterFns[ filterValue ] || filterValue;
			$grid.isotope({ filter: filterValue });
		});

		
		// start url hash
		
		  // bind filter button click
		  var $filterButtonGroup = $('.filters-button-group');
		  $filterButtonGroup.on( 'click', 'button', function() {
			var filterAttr = $( this ).attr('data-filter');
			// set filter in hash
			location.hash = 'filter=' + encodeURIComponent( filterAttr );
		//	location.hash = '/' + filterAttr.substr(1); // adding the slash for the url

		  });
  
		function getHashFilter() {
		  var matches = location.hash.match( /filter=([^&]+)/i );
		  var hashFilter = matches && matches[1];
		  return hashFilter && decodeURIComponent( hashFilter );
		};
		
		var isIsotopeInit = false;
		
	  function onHashchange() {
		var hashFilter = getHashFilter();
		if ( !hashFilter && isIsotopeInit ) {
		  return;
		}
		isIsotopeInit = true;
		// filter isotope
		$grid.isotope({
		  itemSelector: '.resource-item',
		  layoutMode: 'masonry',
		  // use filterFns
		  filter: filterFns[ hashFilter ] || hashFilter
		});
		// set selected class on button
		if ( hashFilter ) {
		  $filterButtonGroup.find('.is-checked').removeClass('is-checked');
		  $filterButtonGroup.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
		}
	  };
	  
	$(window).on( 'hashchange', onHashchange );
	onHashchange();
		// end url hash
		
		// debounce so filtering doesn't happen every millisecond
		function debounce( fn, threshold ) {
		  var timeout;
		  return function debounced() {
			if ( timeout ) {
			  clearTimeout( timeout );
			}
			function delayed() {
			  fn();
			  timeout = null;
			}
			timeout = setTimeout( delayed, threshold || 100 );
		  }
		}

	});

	</script>
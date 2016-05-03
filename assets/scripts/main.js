/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
		$("#home-hero-1").backstretch("http://cdn.vmturbo.com/wp-content/uploads/2014/04/mG974Zv1.jpg");
		
		$( ".btn.btn-switch" ).hover(function() {
				$("#btn-dl" ).addClass( "hover" );
				$("#btn-dl").html('<span class="sub-title">GET CONTROL</span><span class="sub-hover">Start For Free</span>');
			});
			
			$( ".btn.btn-switch" ).mouseleave(function() {
				$("#btn-dl" ).removeClass( "hover" );
				$("#btn-dl").html('Downloads');
			});
			  $("#btn-dl" ).on('click', "a", function(e) {
				   window.location.href='http://vmturbo.com';
			});
  
  
		$("#nav-search").click(function() {
			$("#nav-search").stop().toggleClass( "active" );
			$( "#search-redux-container" ).stop().slideToggle( "fast", function() {
				$("#s").focus();
		  });
		});
		
		wistiaEmbeds.onFind(function(video) {
		  video.videoFoam(true);
		});
		
      },
      finalize: function() {
		  
		  $(".image-links").magnificPopup({type:"image"});
		  
		//  $(".navbar").headroom({
		//	   offset : 150,
		//	   onPin : function() {
		//		},
				// callback when unpinned, `this` is headroom object
		//		onUnpin : function() {
		//			$('#nav-search').removeClass('active');
		//			$( "#search-redux-container" ).stop().hide();
					
		//			$('.dropdown.open').removeClass('open');
		//			$('.dropdown-menu').stop(true, true).fadeOut(250);
		//				if ($(window).width() < 768) {
		//				$('.navbar-collapse.collapse.in').removeClass('in');
		//				}
		//		}
		//	});
			  
		  // initialize dropdowns
		  $(".dropdown-toggle").dropdown();
		  
		  // add slide down effects on dropdowns
			$('.dropdown').on('show.bs.dropdown', function(e){
				$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
			});
			
			$('.dropdown').on('hide.bs.dropdown', function(e){
				if ($(window).width() < 768) {
				$(this).find('.dropdown-menu').first().stop(true, true).hide();
				} else {
				$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
				}
			});
		  // stop yamm in-menu pre-mature close
		  $(document).on('click', '.yamm .dropdown-menu', function(e) {
			  e.stopPropagation();
			});
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
		// $('.slick').slick({
			// slidesToShow: 6,
			// slidesToScroll: 1,
			// autoplay: true,
			// arrows: false,
			// pauseOnHover: false,
			// autoplaySpeed: 2500,
		// });
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    'blog': {
      init: function() {
        $("#blog-head").backstretch("//cdn.vmturbo.com/wp-content/uploads/2014/04/home-hero-place.jpg");
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    },
    // About us page, note the change from about-us to about_us.
    'page_template_template_landingpage': {
      init: function() {

      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

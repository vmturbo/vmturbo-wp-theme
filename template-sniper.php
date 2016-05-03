<?php
/**
 * Template Name: Sniper
 */
?>
<style>
body {background:#222}
	#home-jumbo-sub {
		text-align:center;
		padding:100px 0;
		position:relative;
		background: url('http://cdn.vmturbo.com/wp-content/uploads/2016/03/hex-bg.png') no-repeat center center;
		background-size:cover;
		overflow-x:hidden;
	}
			#home-jumbo-sub h3 {
				margin-top:0;
				font-weight:700;
			}
			#home-jumbo-sub p {
				line-height: 1.8em;
				margin-bottom:0;
			}
			#home-jumbo-sub a:last-child {
				font-weight: 600;
				font-size: 1em;
				margin-top: 1em;
				display:inline-block;
			}
			#tech-logo-row {
				display: flex;
				align-items: center;
				justify-content: space-between;
				padding:3em 0;
			}
			#tech-logo-row img {
				max-height:50px;
				max-width:235px;
			}
				#tech-points-container .item {
					background:#fff;
					text-align:center;
					box-shadow:0 0 10px #ddd;
					border-bottom:6px solid #ccc;
					padding:40px 30px 30px 30px;
					min-height:270px;
				}
					#tech-points-container h4 {
						font-size:20px;
						font-weight:700;
					}
					#tech-points-container img {
						margin:1em 0;
						max-height:50px;
					}
					#tech-points-container p {
						font-size:1.1em;
						line-height:1.5em;
					}
	#home-jumbo {
		text-align:center;
		background: #444 url('http://cdn.vmturbo.com/wp-content/uploads/2016/03/home-header-bg2b.jpg') no-repeat center center fixed;
		background-size: cover;
		padding: 80px 0 0 0;
		color: #fff;
		
	}
		#home-jumbo a {
			color:#fff;
			text-decoration:none;
		}
		#home-jumbo img {
			position:relative;
			z-index:1;
		}
		#home-jumbo h1 {
			font-weight:700;
			margin-top:0;
		}
		#home-jumbo span {
			font-weight:600;
		}
		
		/** slick is disgusting **/
		.slick {
			padding: 0 30px;
			
		}
			.slick img {
				max-height: 38px;
				max-width: 200px;
				margin: 1em 2em;
			}
		.slick-prev:before, .slick-next:before {
			font-family: "Glyphicons Halflings", sans-serif;
			font-size: 20px;
			color: #444;
		}

		.slick-prev:before { content: "\e257"; }
		.slick-next:before { content: "\e258"; }
		.slick-slide, .slick-slide *{ outline: none !important; }
	#sniper-content {
		padding:3em 0;
	}	
	#activate {
		display:none;
	}
	footer.main-footer {display:none}
	.main-footer-sub {background:#222 !important;color:#ccc !important;}
	.main-footer-sub a, .main-footer-sub li {color:#ccc !important}
	html, body, .wrap.container-fluid, .content.row, main.main, #home-jumbo {height: 100%}
	#submit-form {
		margin-top:3em;
	}
	#sniper-content {
		color:#fff;
	}
	#sniper-content h3 {
		font-weight:600;
		margin-top:0;
	}
</style>

<div id="home-jumbo" style="overflow:hidden">
<?php
if( have_rows('sniper_content') ):
 	// loop through the rows of data
    while ( have_rows('sniper_content') ) : the_row(); ?>
		<?php if (isset($_GET['n']) && ($_GET['n'] == get_sub_field('target_url_parameter'))) { ?>
			<div class="animated fadeInUp" style="animation-delay: 0.5s;z-index:99;position:relative;"><h1>Put application performance on autopilot.</h1>
				<span style="font-size:1.7em;">Welcome, <?php the_sub_field('target_first_name'); ?>!</span>
			</div>
			<form id="submit-form" class="form-inline animated fadeInUp" style="animation-delay: 1s;position:relative;z-index:9999;">
				<div class="form-group">
					<input type="text" class="form-control input-lg" id="validation" placeholder="Validation Code">
				</div>
				<button id="submit" type="submit" class="btn btn-vmt-slim btn-lg" style="border:2px solid #2c9427">Enter</button>
			</form>
	<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/04/vmt-mac-groupb.png" class="img-responsive handsoff" style="margin:-80px auto 0;bottom: 0;position: absolute;width: 100%;" />
</div>
<div id="activate">
<div class="container" id="sniper-content">
	<div class="row">
		<div class="col-sm-7">
			<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="//fast.wistia.net/embed/iframe/<?php the_sub_field('video_code'); ?>?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div></div>
	<script src="//fast.wistia.net/assets/external/E-v1.js" async></script>
		</div>
		<div class="col-sm-5">
			<h3><?php the_sub_field('target_first_name'); ?>, what can VMTurbo do for you?</h3>
			<?php the_sub_field('main_content'); ?>
			<form id="foo" action="http://vmturbo.com/wp-content/themes/vmturbo/sniper-process.php" method="post">
				<div class="form-group">
					<textarea class="form-control" type="textarea" name="contact_time" id="contact_name" size="30" value="" placeholder="What dates and times work best for you?" required></textarea>
				</div>
				<div class="form-group">
					<textarea class="form-control" type="textarea" name="contact_message" id="contact_message" size="60" placeholder="Message (Optional)" value=""></textarea>
				</div>
				<input type="hidden" name="contact_ae" value="<?php the_sub_field('ae_email_address'); ?>" />
				<input type="hidden" name="contact_user" value="<?php the_sub_field('target_url_parameter'); ?>" />
				<div class="form-group">
					<input class="btn btn-vmt" type="submit" class="btn-vmt" name="submit" value="Submit" style="width:100%;">
				</div>
				</div>
			</form>
		</div>
	</div>

<div id="home-jumbo-sub">
	<h3>Your business and customers depend on increasingly complex applications.</h3>
	<p>VMTurbo's software enables you to guarantee performance regardless of cloud, virtualization, or application architecture.</p>
		<div class="container">
			<div class="row">
			<div class="slick" style="display:flex;align-items: center;justify-content: space-between;margin:3em auto 3.5em;">
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/azureLogo.png" alt="Microsoft Azure" class="img-responsive" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/vmware.png" alt="VMware" class="img-responsive" style="padding:5px 0" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/awsLogo.png" alt="Amazon Web Services" class="img-responsive" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/docker.png" alt="Docker" class="img-responsive" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/openstack1.png" alt="OpenStack" class="img-responsive" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/04/logo-cloudfoundry.png" alt="" class="img-responsive" style="margin-top:1.3em" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/nutanix-2-sm.png" alt="" class="img-responsive" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/arista1.png" alt="" class="img-responsive" style="padding:12px 0 10px" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/03/jboss.png" alt="" class="img-responsive" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/03/weblogic.png" alt="" class="img-responsive" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/03/mesosphere.png" alt="" class="img-responsive" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/03/KubernetesLogo.png" alt="" class="img-responsive" />
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/tomcat.png" alt="" class="img-responsive" />
			</div>
			</div>
		</div>
	<script type="text/javascript">
	(function(d){d.fn.shake=function(a){"function"===typeof a&&(a={callback:a});a=d.extend({direction:"left",distance:20,times:3,speed:140,easing:"swing"},a);return this.each(function(){var b=d(this),k={position:b.css("position"),top:b.css("top"),bottom:b.css("bottom"),left:b.css("left"),right:b.css("right")};b.css("position","relative");var c="up"==a.direction||"down"==a.direction?"top":"left",e="up"==a.direction||"left"==a.direction?"pos":"neg",f={},g={},h={};f[c]=("pos"==e?"-=":"+=")+a.distance;g[c]=("pos"==e?"+=":"-=")+2*a.distance;h[c]=("pos"==e?"-=":"+=")+2*a.distance;b.animate(f,a.speed,a.easing);for(c=1;c<a.times;c++)b.animate(g,a.speed,a.easing).animate(h,a.speed,a.easing);b.animate(g,a.speed,a.easing).animate(f,a.speed/2,a.easing,function(){b.css(k);a.callback&&a.callback.apply(this,arguments)})})}})(jQuery);

	jQuery(document).ready(function($){
		jQuery('.slick').slick({
		  infinite: true,
		  slidesToShow: 5,
		  slidesToScroll: 2,
		  variableWidth: true,
		  draggable:false,
		  adaptiveHeight: true
		});
			
		$("#submit-form").submit(function(e){
			e.preventDefault();
			var p = "mPZawst";
			if($("#validation").val() !== p) {
				  $(this).shake({
						direction: "left",
						distance: 10
					});
			}
			else {
				  $(this).delay(300).fadeOut();
				  $("#home-jumbo img").fadeOut("fast");
				  $("#home-jumbo, .main-footer-sub").delay(400).slideUp();
				  $("#activate").delay(800).fadeIn();
			}
		});
	})
	</script>
		
		<div id="tech-points-container" class="container">
			<div class="col-sm-4">
				<div class="item">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/03/icon-time.png" class="handsoff" />
					<h4>Faster Response</h4>
					<p>30% faster response time for mission critical and distributed applications.</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="item">
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/03/icon-cloud.png" class="handsoff" />
				<h4>Less Infrastructure</h4>
				<p>Run on 30% less infrastructure or cloud without impacting performance.</p>
			</div>
			</div>
			<div class="col-sm-4">
				<div class="item">
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/03/icon-user.png" class="handsoff" />
				<h4>More Productive</h4>
				<p>Manage 10x more workloads with the same team.</p>
			</div>
			</div>
		</div>
</div>
<div style="background:#444;color:#fff;padding:50px 0">
	<div class="container">
		<div class="col-md-9 col-sm-12">
			<h3 style="margin-top:0;font-weight:700;font-size:1.5em;">Gartner Report</h3>
			<h4 style="margin-bottom:0;font-size:1.2em">Innovation Insight for Dynamic Optimization Technology for Infrastructure Resources and Cloud Services</h4>			
		</div>
		<div class="col-md-3 col-sm-12">
			<a class="btn btn-vmt" href="http://vmturbo.com/resources/dynamic-optimization-technology-for-cloud-services/">Download Now</a>
		</div>
	</div>
</div>

		<?php } else { } ?>
		<?php
      
    endwhile;
else :
endif;

?>
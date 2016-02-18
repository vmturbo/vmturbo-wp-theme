<?php
/**
 * Template Name: Temporary - VMTurbo vs. vCops
 */
?>
<style type="text/css">
footer.main-footer {
	display:none;
}
.vs-item {
	background: #fff;
	padding: 25px 30px;
	text-align: center;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
}
.vs-item span {
	letter-spacing: 1px;
	text-transform: uppercase;
	color: #222;
}
.vs-item h3 {
	font-size: 1.2em;
	font-weight: bold;
	margin-top: 10px;
	border-bottom: 1px dashed #ccc;
	padding: 0 0 15px;
	margin-bottom: 15px;
	display: inline-block;
}
#home-hero-1b {
	padding: 30px 0;
	box-shadow: 0 0 5px #DDDDDD;
	z-index: 999;
	position: relative;
}
.vs-label {
	width: 100%;
	text-align: center;
	display: block;
	padding: 12px 0;
	letter-spacing: 1px;
	text-transform: uppercase;
	font-weight:bold;
}
#vs-monitoring {
	color: #0B0B0B;
	background: #CCC;
}
#vs-control {
	color: #fff;
	background: #2C9427;
}
</style>

<div id="home-hero-1">		
	<div class="container">
		<div class="row" style="text-align:center;padding-top:40px;">		
			<h2 style="font-family: Open Sans, sans-serif;text-align:center;color:#fff;display: inline-block;padding:0px 20px 20px 20px;margin-bottom:0px;font-weight:bold;font-size:2em;"><?php the_title() ; ?></h2>
			<h3 style="text-align:center;margin-bottom:.9em;margin-top:0;color:#f1f1f1;font-size:1.5em"><?php the_field( 'slogan' ); ?></h3>
			<p style="line-height:160%;color:#fff;display:block;max-width:800px;margin:0 auto 1em;text-shadow:1px 1px 1px #000;">Many Enterprises use vROps &amp; VMTurbo together to super charge their environment, but there are notable differences. VMware vRealize Operations is diagnostic - forcing you to make all the corrections after something goes wrong. VMTurbo on the other hand is preventative and guarantees application performance from the start by controlling virtual environments in a perpetual state of health all in real time, where degradation doesn't occur and you don't have to fight alerts</p>
			<a href="#" class="btn btn-vmt mktoPop modal-1-click" style="margin-bottom:1em">Free 30-Day Trial</a>
		</div>
		
		<div class="row">
			<div class="hidden-xs">
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/opsman-ui-hero.png" class="img-responsive"/>
			</div>
		</div>
	</div>
</div>
	<div id="home-hero-1b">
		<div class="container">
			
			<div class="row" style="padding:30px 0;">
				<div class="col-sm-7">
					<h2 style="font-weight:600">VMTurbo Solves the Real Problem.</h2>
					<p style="line-height:160%"><strong>VMTurbo</strong> optimally aligns VMs with compute, storage, and network resources to assure application performance while utilizing the infrastructure as efficiency as possible. VMTurbo's algorithms are designed to drive your virtual and cloud environments to a healthy state and keep it there.</p>
					<p style="line-height:160%">Alternative solutions focus on identifying and troubleshooting problems after performance degradation has occurred.</p>
					<a href="#" class="btn btn-vmt mktoPop modal-1-click">Free 30-Day Trial</a>
				</div>
				<div class="col-sm-5">
					<img src="http://vmturbo.com/wp-content/uploads/2014/01/Supply-Chain-JPG1.jpg" class="img-responsive" />
				</div>
			</div>
		</div>
	</div>
	<div style="padding: 100px 0;background: url('http://cdn.vmturbo.com/wp-content/uploads/2014/04/tzkdlNS1.png') repeat;margin: 0;border-top:1px solid #ccc;border-bottom:1px solid #ccc;">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<span id="vs-monitoring" class="vs-label">Monitoring</span>
				<div class="vs-item" style="border-bottom: 3px solid #ccc;">
					<h3 style="color:#666;">vRealize Operations (vROps): Problem Identifier</h3>
					<p>vCOps (vROps) alerts you when you've crossed a threshold, leaving the heavy lifting to operators. You must decide what actions to take.</p>
				</div>
			</div>
			<div class="col-sm-6">
				<span id="vs-control" class="vs-label">Control</span>
				<div class="vs-item" style="border-bottom: 3px solid #2C9427;">
					<h3>VMTurbo Operations Manager: Problem Prevention</h3>
					<p>VMTurbo gives you the specific actions (move, resize, start/stop) that will prevent degradation. <em>And</em> these actions can be automated. </p>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<div class="midlevel-cta-bar" style="background:#222;color:#fff;border-top:0;"><div style="max-width: 1080px;margin: 0 auto;"><span class="midlevel-cta-copy">See how VMTurbo can drive your data center to its <strong>Desired State</strong>.</span><a data-toggle="modal" data-target="#microModal" class="midlevel-cta-btn modal-1-click" href="#">START FOR FREE</a><div style="clear:both"></div></div></div>

	<div id="home-triad">
		<div class="container">
			<div class="row" style="text-align:center;">
				<div class="col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/icon-app2.png" style="margin-bottom:1em;" />
					<h4>Assure Application Performance</h4>
					<span>37% reduction in latency, applications get the exact resources they need to perform.</span>
				</div>
				<div class="col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/icon-db.png" style="margin-bottom:1em;" />
					<h4>Reduce CapEx</h4>
					<span>Increase VM density by 30%+ without risking service disruptions.</span>
				</div>
				<div class="col-sm-4">
					<img src="http://vmturbo.com/wp-content/uploads/2014/04/icon-roi.png" style="margin-bottom:1em;" />
					<h4>3 Month ROI</h4>
					<span>89% of customers see a return in 3 months, improving VM density and reducing operational overhead.</span>
				</div>
			</div>
		</div>
	</div>
		
	
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
			<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/rbc.jpg"></div>
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
	
	
		<div id="ndim-span-wide" style="border-bottom:0;box-shadow:none;padding:70px 0;color:#fff;">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
					<div style="padding:0">
					
					<?php echo do_shortcode('[wistia]03yxaws696[/wistia]'); ?>
					</div>
					</div>
					<div class="col-sm-5">
						<h3 style="margin-top:0;font-size:20px;font-weight:bold;">Don't Take it From Us, See For Yourself </h3>
						<p>"If you are running in a disorganized or inefficient manner, you are going to pay more money. At the core it's about awareness. VMTurbo's actions are helping us run the best, most efficient environment possible, and saves us roughly six figures on a monthly basis. We've gone from about 50% to 85% resource utilization, and I would say we are conservative with that."</p>
						<p style="margin-bottom:0;margin-top:.5em"><strong>Mike Campbell</strong></p>
						<p>VP Shared Services, ACI Worldwide</p>
					</div>
				</div>
			</div>
		</div>
	
	<div style="padding:60px 0">
		<div class="container">
			<div class="row" style="padding:30px 0;">
				<div class="col-sm-5">
					<img src="http://vmturbo.com/wp-content/uploads/2014/04/MarketplaceDiagram_HandDrawn-min.jpg" style="margin-top:1.5em" class="img-responsive" />
				</div>
				<div class="col-sm-7">
					<h2>How VMTurbo Works</h2>
					<p style="line-height:160%">VMTurbo uses algorithms to model the data center after an economic market - workloads are "buyers" and compute, storage, fabric, etc. are "sellers." It abstracts workload (applications, VMs, Containers), compute, storage, fabric, etc. into a common data model. These entities simply follow the Supply and Demand principles of economics to work out placement, sizing, and stop/start decisions among themselves.</p>
					<p style="line-height:160%">Think of VMTurbo as the "Invisible Hand" for your data center. It drives the healthiest, most efficient data center possible. And it does so continuously, in real time, with no configuration. Which means you aren't dealing with alerts - it just works.</p>
			<a href="#" class="btn btn-vmt mktoPop modal-1-click">Free 30-Day Trial</a>
			


				</div>
			</div>
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
		$("#ndim-span-wide").backstretch("http://cdn.vmturbo.com/wp-content/uploads/2014/04/qos_04.jpg");
	});
	</script>
	<script type="text/javascript">
	function tH(str) {
		var rndPre=Math.floor(Math.random()*10)
		var rndPos=Math.floor(Math.random()*10)
		var hex = ''+rndPre.toString();
		for(var i=0;i<str.length;i++) {
			hex += ''+str.charCodeAt(i).toString(16);
		}
		hex += ''+rndPos.toString();
		return hex;
	}
	jQuery(document).ready(function($){
	
	$('body').append('<div class="modal fade in mktoInline" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">DOWNLOAD VMTURBO OPERATIONS MANAGER</h4></div><div class="modal-body"><div class="mktoForm_502"><form id="mktoForm_502"></form></div></div></div></div></div>');
	
	$(".modal-1-click").click(function() {$("#modal-1").modal();});
				
	MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", 502, function(form){
		jQuery( ".mktoButton" ).addClass( "btn btn-vmt" );
		jQuery( ".mktoButtonWrap.mktoSimple" ).removeClass( "mktoSimple mktoButtonWrap" );
		
		form.onSubmit(function(){
			var fi = tH($jQ("#FirstName").val());
			var la = tH($jQ("#LastName").val());
			var em = tH($jQ("#Email").val());
			var co = tH($jQ("#Company").val());
			var ty = tH("trial");
			
	   		var query = "?a=" + encodeURI(em) + "&b=" + encodeURI(fi) + "&c=" + encodeURI(la)+ "&d=" + encodeURI(ty) + "&e=" + encodeURI(co);
	   
	   		var url = "http://license.vmturbo.com/regcomplete.php";

			// post data
			if (window.XMLHttpRequest){
				xmlhttp=new XMLHttpRequest();
			}else{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("POST",url,true);
			xmlhttp.send(query);

		}); // end on submit form
	  
	});
	
			})
	</script>
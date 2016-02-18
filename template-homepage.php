<?php
/**
 * Template Name: Homepage
 */
?>

	<script type="text/javascript">
	jQuery(document).ready(function($){
		 // mixpanel start
			$("#first-slider-cta" ).on('click', function(e) {
				mixpanel.track("Element Interaction", {
					"Interaction": "Clicked on #first-slider-cta"
				});	
			});
			$("#first-midlevel-cta" ).on('click', function(e) {
				mixpanel.track("Element Interaction", {
					"Interaction": "Clicked on #first-midlevel-cta"
				});	
			});
			$("#second-midlevel-cta" ).on('click', function(e) {
				mixpanel.track("Element Interaction", {
					"Interaction": "Clicked on #second-midlevel-cta"
				});	
			});
		 // mixpanel end
	});
	</script>
	
    <div id="hero-carousel" class="carousel slide" data-ride="carousel" data-interval="7000">
      <ol class="carousel-indicators">
        <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#hero-carousel" data-slide-to="1"></li>
        <li data-target="#hero-carousel" data-slide-to="2"></li>
        <li data-target="#hero-carousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active" id="hero-slide-5">
          <div class="container">
            <div class="carousel-caption" style="padding:100px 50px 0;">
				<div class="row animated fadeInRightBig">
					<div class="col-md-4">
						<img src="http://cdn.vmturbo.com/wp-content/uploads/2015/08/mac-uii.png" class="img-responsive hidden-xs hidden-sm" />
					</div>
					<div class="col-md-8">
						<h2 style="text-align:left;font-weight:bold;">Performance Control for Any Infrastructure.</h2>
						<h3 style="text-align:left;font-size:1.2em;" class="hidden-xs">Software that automatically keeps any application healthy. Deploy in 15 minutes.</h3>
						<a id="first-slider-cta" href="http://vmturbo.com/solutions/intelligent-workload-management/" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin-top: 2em">Learn More &raquo;</a>
					</div>
				</div>
            </div>
          </div>
        </div>
        <div class="item" id="hero-slide-1" style="background: url(http://cdn.vmturbo.com/wp-content/uploads/2016/02/aws-loft-turbofest-dark2.png) no-repeat center center;-webkit-background-size: cover;background-size: cover;">
          <div class="container">
            <div class="carousel-caption" style="padding:100px 50px 0;">
				<div class="row animated fadeInRightBig">
					<div class="col-md-3 col-md-push-1 hidden-sm hidden-xs">
						<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/02/Turbowest-Logo3-1.png" class="img-responsive" style="width:100%" />
					</div>
					<div class="col-md-7 col-md-push-1">
						<h2 style="text-align:left;margin-top:0em">Turbofest Silicon Valley</h2>
						<span style="text-align:left;font-weight:bold;display:block;margin-bottom:5px;">03.09.2016</span>
						<p style="text-align:left" class="hidden-xs">Join VMTurbo partners and customers at the AWS Loft in San Francisco for an afternoon of networking and hilarity from Kumail Nanjiani of HBO's smash-hit, <em>Silicon Valley</em>.</p>
						<a href="http://vmturbo.com/turbofest-silicon-valley" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin-top: 2em">Guarantee Your Seat &raquo;</a>
					</div>
				</div>
              
            </div>
          </div>
        </div>
		<div class="item" id="hero-verizon" style="background:#fff;color:#222;">
          <div class="container">
            <div class="carousel-caption" style="padding-top:85px;">
				<div class="row animated fadeInDownBig">
					<div class="col-sm-10 col-sm-push-1">
					<img src="//cdn.vmturbo.com/wp-content/uploads/2015/11/verizon-b.png" class="hidden-xs" />
              <h2 style="font-weight:bold;color:#222;text-shadow:none;">Verizon and VMTurbo Join Forces to Develop Intelligent Cloud Control</h2>
              <h3 style="font-size:1.2em;color:#222;text-shadow:none;" class="hidden-xs">New service to enable Verizon customers to seamlessly move workloads to and among public cloud service providers based on performance, resource requirements.</h3>
              <a href="http://vmturbo.com/press-releases/verizon-vmturbo-develop-intelligent-cloud-control/" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: #2C9427;text-shadow:none;padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin: 2em auto 0;">Learn More &raquo;</a>
					</div>
				  </div>
            </div>
          </div>
        </div>
		<!--
        <div class="item" id="hero-slide-1" style="background: url(//cdn.vmturbo.com/wp-content/uploads/2014/04/qos_02.jpg) no-repeat center center;-webkit-background-size: cover;background-size: cover;">
          <div class="container">
            <div class="carousel-caption" style="padding:60px 50px 0;">
				<div class="row animated fadeInRightBig">
					<div class="col-md-3 col-md-push-1 hidden-sm hidden-xs">
					<img src="http://vmturbo.com/wp-content/uploads/2015/10/stamp-webinar.png" class="img-responsive" style="width:100%" />
					</div>
					<div class="col-md-7 col-md-push-1">
						<h2 style="text-align:left;margin-top:0em">Webinar Series: Cloudistics Turbine &amp; VMTurbo</h2>
						<span style="text-align:left;font-weight:bold;display:block;margin-bottom:5px;">Wednesday, February 10, 2016 | 2:00 – 3:00 EST</span>
						<p style="text-align:left" class="hidden-xs">We are proud to introduce our newest Technology Alliance Ecosystem Partner, Cloudistics. Combined with VMTurbo's Application Performance Control, Cloudistics' flagship product, Turbine, empowers IT professionals to compete with the temptation of migrating to the public cloud and harvest the true potential of their own data center.</p>
						<a href="http://vmturbo.com/resources/vmturbo-cloudistics-webinar/" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin-top: 2em">Register Now &raquo;</a>
					</div>
				</div>
              
            </div>
          </div>
        </div>
        <div class="item" id="hero-slide-4">
          <div class="container">
            <div class="carousel-caption">
				<div class="row animated fadeInDownBig">
					<div class="col-sm-10 col-sm-push-1">
              <h2 style="font-weight:bold;">Is your IT a cost center or a competitive advantage?</h2>
              <h3 style="font-size:1.2em" class="hidden-xs">See how application performance control can help you lead the business.</h3>
              <a href="http://vmturbo.com/solutions/competitive-advantage-IT/" id="cio-page" class="" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin: 2em auto 0;">Learn More &raquo;</a>
					</div>
				  </div>
            </div>
          </div>
        </div>
		-->
		<!--
        <div class="item" id="hero-octurbo">
          <div class="container">
            <div class="carousel-caption" style="padding:55px 50px 0;text-align:center;">
				<div class="row animated fadeInRightBig">
					<div class="col-md-10 col-md-push-1">
						<h2 style="text-align:center;font-weight:bold;">Octurbofest 2015 | 10.21</h2>
						<h3 style="text-align:center;font-size:1.2em;" class="hidden-xs">"Turboworld" was too contrived. "VMT Summit" was too haughty. VMTurbo customers – more than 1,200 strong – control their destinies.<br /><br />They don't world. They don't summit. They party.<br /><br />It's time for Octurbofest.</h3>
						<a href="http://vmturbo.com/blog/oktoberfest-and-the-lesser-known-how/" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin: 2em auto 0;">Learn More &raquo;</a>
					</div>
				</div>
            </div>
          </div>
        </div>-->
		<!--
      
        <div class="item" id="hero-slide-gutcheck">
			<img src="http://vmturbo.com/wp-content/uploads/2015/10/auditors.png" style="position:absolute;bottom:0;left:10%;max-width:480px;" class="hidden-sm hidden-xs animated fadeInUpBig" id="auditor-imgs" />
          <div class="container">
            <div class="carousel-caption" style="padding:60px 50px 0;">
				<div class="row">
					<div class="col-md-7 col-md-push-5" id="dark-box-toggle">
						<h2 style="text-align:left;margin-top:0">Are You Ready For Your Refund?</h2>
						<p style="text-align:left" class="hidden-sm hidden-xs">Device-centric software licensing, like that practiced by Oracle and others, requires organizations to license every CPU socket or core on which an application could potentially run.</p>
						<p style="text-align:left">VMTurbo continuously identifies opportunities to eliminate software licenses and safeguard against unwanted audits. <span class="hidden-xs">The only question that remains is: are you ready for your refund?</span></p>
						<a href="http://vmturbo.com/software-licensing-gut-check/" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin-top: 2em">Learn More &raquo;</a>
					</div>
				</div>
              
            </div>
          </div>
        </div>  -->
        <div class="item" id="hero-slide-3">
          <div class="container">
            <div class="carousel-caption" style="padding-top:80px;">
			
				<div class="row animated fadeInRightBig">
					<div class="col-md-3 col-md-push-1 hidden-xs hidden-sm">
					<img src="http://vmturbo.com/wp-content/uploads/2015/10/inc.png" class="img-responsive" style="width:100%" />
					</div>
					<div class="col-md-7 col-md-push-1">
						<h2 style="text-align:left">VMTurbo Named to Inc. Magazine's List of America's Fastest-Growing Private Companies</h2>
						<p style="text-align:left" class="hidden-sm hidden-xs">VMTurbo, the only application performance control system for the software-defined data center, announced it has earned a place on the Inc. 5000, an exclusive ranking of the nation's fastest-growing private companies</p>
						<a href="http://vmturbo.com/press-releases/vmturbo-named-to-inc-magazines-list-of-americas-fastest-growing-private-companies/" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin-top: 2em">Learn More &raquo;</a>
					</div>
				</div>
            </div>
          </div>
        </div>
		
      </div>
      <a class="left carousel-control" href="#hero-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#hero-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	
	
<span style="display: block;text-align: center;background-color: #222;color: #ccc;font-size:1.3em;padding: 30px;">Trusted by thousands of engineers in enterprises across the world.</span>
 <div class="slick hidden-xs" id="logoslide">
	<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/autonationlogo.jpg"></div>
	<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/akamai.jpg"></div>
	<div><img src="//cdn.vmturbo.com/wp-content/uploads/2015/02/telstra.jpg"></div>
	<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/ING.jpg"></div>
	<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/lockheed.jpg"></div>
	<div><img src="//cdn.vmturbo.com/wp-content/uploads/2014/05/bmologobig-copy.min_.jpg"></div>
	<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/csc.jpg"></div>
	<div><img src="//cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/mayo.jpg"></div>
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
<div id="home-hero-1">

	<div class="container">
		<div style="text-align:center;padding-top:75px;">		
			<h1 style="font-family: Open Sans, sans-serif;text-align:center;color:#fff;display: inline-block;border-bottom: 1px solid #393;padding:0px 20px 20px 20px;margin-bottom:1.5em;font-weight:normal;font-size:1.5em;"><strong>VMTurbo</strong>: Application Performance Control for the Software-Defined Data Center</h1>
			<div class="row">
			<div class="col-sm-10 col-sm-push-1" style="text-align:center;color:#fff;">
				<div style="padding:0 3em 2em;">
					<p style="line-height:160%"><strong>Virtual and cloud environments are complex.</strong> Every decision about application workload demand - what to place where, when, and in what order - impacts every other entity and resource in the data center. It's complex, it's dynamic and it's way beyond human scale.</p>
					<p style="line-height:160%">VMTurbo's Application Performance Control system understands application demands, meeting them with infrastructure supply to assure application performance and let engineers focus on more important decisions.</p>
				</div>
				<a href="//fast.wistia.net/embed/iframe/st33aun7xy?popover=true" class="wistia-popover[height=450,playerColor=7b796a,width=800] btn btn-vmt btn-spacer" style="font-family:Open Sans, sans-serif;">Watch the video &raquo;</a>
			</div>
			</div>
		</div>
		
		<div class="row">
			<div class="hidden-xs">
				<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/opsman-ui-hero.png" class="img-responsive"/>
			</div>
		</div>
	</div>
</div>
<div class="midlevel-cta-bar"><div style="max-width: 1080px;margin: 0 auto;"><span class="midlevel-cta-copy">See <strong>application performance control</strong> in your data center in less than 30 minutes.</span><a href="http://vmturbo.com/downloads/operations-manager-30-day-trial/?t=new-home" class="midlevel-cta-btn" id="first-midlevel-cta">START FOR FREE</a><div style="clear:both"></div></div></div>

	<div id="home-triad">
		<div class="container">
			<div class="row" style="text-align:center;">
				<div class="col-sm-4">
					<a href="http://vmturbo.com/product/operations-management-software/?t=1#assure-app"><img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/icon-app2.png" style="margin-bottom:1em;" /></a>
					<h4>Assure Application Performance</h4>
					<span>37% reduction in latency, applications get the exact resources they need to perform.</span>
					<a href="http://vmturbo.com/product/operations-management-software/?t=1#assure-app" class="triad-link">Learn More &raquo;</a>
				</div>
				<div class="col-sm-4">
					<a href="http://vmturbo.com/product/operations-management-software/?t=1#reduce-capex"><img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/icon-db.png" style="margin-bottom:1em;" /></a>
					<h4>Reduce CapEx</h4>
					<span>Increase VM density by 30%+ without risking service disruptions.</span><a href="http://vmturbo.com/product/operations-management-software/?t=1#reduce-capex" class="triad-link">Learn More &raquo;</a>
				</div>
				<div class="col-sm-4">
					<a href="http://vmturbo.com/product/operations-management-software/?t=1#maximize-opex"><img src="http://vmturbo.com/wp-content/uploads/2014/04/icon-roi.png" style="margin-bottom:1em;" /></a>
					<h4>3 Month ROI</h4>
					<span>89% of customers see a return in 3 months, improving VM density and reducing operational overhead.</span>
					<a href="http://vmturbo.com/product/operations-management-software/?t=1#maximize-opex" class="triad-link">Learn More &raquo;</a>
				</div>
			</div>
		</div>
	</div>
	
	

	<div id="home-hero-2" style="text-align:center;color:#fff;" data-vide-bg="mp4: http://cdn.vmturbo.com/wp-content/themes/vmturbo/images/videos/eng-loop-sm.mp4, poster: http://cdn.vmturbo.com/wp-content/uploads/2014/04/home-hero-poster.jpg" data-vide-options="posterType: jpg,muted: true, position: 0% 50%">
		<div style="padding:120px 60px;">
			<h2 style="font-family:Open Sans, sans-serif;font-size:1.5em;border-bottom:1px solid #2C9427;display:inline-block;padding-bottom:15px;margin-bottom:15px;text-shadow:1px 1px 1px #000;">The Power of Control: Success with Canon USA</h2>
			<span style="display: block;text-shadow: 1px 1px 1px #000;max-width: 900px;line-height: 2em;margin: .5em auto 1em;font-size: 1.1em;">"It saved us money - we were able to better utilize what we had. The planning was really integral to virtualizing these consumer facing applications. This is really where VMTurbo shines. I can't say enough good things about that."</span>
			<span style="display:block;text-shadow:1px 1px 1px #000;font-weight:bold;">Sean Hendershot, Manager of Data Center Operations - Canon USA</span>
			<a href="//fast.wistia.net/embed/iframe/8myockvs82?popover=true" class="wistia-popover[height=450,playerColor=7b796a,width=800] kill-video" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin: 2em auto 0;">Watch the video &raquo;</a>
			<a href="//vmturbo.com/vmturbo-resources/webinar-demand-driven-control-with-canon/" class="secondary-video-cta"><span>Full webinar <span class="glyphicon glyphicon-play" aria-hidden="true"></span></span></a>
		</div>
		<!--<div style="padding:120px 60px;">
			<h2 style="font-family:Open Sans, sans-serif;font-size:1.5em;border-bottom:1px solid #2C9427;display:inline-block;padding-bottom:15px;margin-bottom:15px;text-shadow:1px 1px 1px #000;">The Power of Control: Success with AlphaMaxx</h2>
			<span style="display: block;text-shadow: 1px 1px 1px #000;max-width: 750px;line-height: 2em;margin: .5em auto 1em;font-size: 1.1em;">"It's not preventative, it's prescriptive. It's managing my data center, and in 15 minutes I have learned more about my data center then I have known for the past 5 years."</span>
			<span style="display:block;text-shadow:1px 1px 1px #000;font-weight:bold;">Chuck Green, President - AlphaMaxx</span>
			<a href="//fast.wistia.net/embed/iframe/a3g21h3vgu?popover=true" class="wistia-popover[height=450,playerColor=7b796a,width=800] kill-video" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin: 2em auto 0;">Watch the video &raquo;</a>
		</div>-->
	</div>
	
	<div id="techBlock">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-push-1 col-sm-12">
					<h3 style="font-weight:bold;">Control any workload, anytime, on any infrastructure.</h3>
					<span style="margin-bottom:2em;display:block;line-height: 2em;border-bottom: 1px dashed #AEAEAE;padding-bottom: 2em;">The world's most advanced enterprises rely on Application Performance Control for their mission-critical applications - no matter how they've chosen to design their data center or hybrid cloud. <a href="http://vmturbo.com/company/technology-partners/" style="border-bottom:1px dotted #222;">See our technology partners &raquo;</a></span>
				</div>
			</div>
			
			<div class="row home-tech-logos">
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/openstack1.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/arista.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/nutanix-2-sm.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/redhat.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/purestorage.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/microsoft.png" class="img-responsive">
				</div>
			</div>
			<div class="row home-tech-logos">
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/ibm.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/aws.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/citrix.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/emc.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/cisco.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/vmware.png" class="img-responsive">
				</div>
			</div>
			<div class="row home-tech-logos">
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/01/HPE-logo.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/netapp.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/docker.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/oracle.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/dell.png" class="img-responsive">
				</div>
				<div class="col-xs-6 col-md-2 col-sm-4">
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/tomcat.png" class="img-responsive">
				</div>
			</div>
			
			
		</div>
	</div>
	
<div class="midlevel-cta-bar" style="background:#222;color:#fff;border-top:0;"><div style="max-width: 1080px;margin: 0 auto;"><span class="midlevel-cta-copy">See how VMTurbo can drive your data center to its <strong>Desired State</strong>.</span><a href="http://vmturbo.com/downloads/operations-manager-30-day-trial/?t=new-home" class="midlevel-cta-btn" id="second-midlevel-cta">START FOR FREE</a><div style="clear:both"></div></div></div>
<div id="wide-span" class="gc-experts-box">
	<div class="container">
		<div class="row equal-height-row">
		<div class="col-md-7 col-sm-12 equal-height-panel">
			<h3 style="font-weight:bold;">Green Circle experts here for you.</h3>
			<p style="line-height:160%">The <a href="http://greencircle.vmturbo.com/" style="border-bottom:1px dashed #ccc" target="_blank">Green Circle Community</a> is your virtualization technology connection. Everyone from experts to newbies can participate, contribute and learn from each other in this open community. You can brush up on the basics, or weigh in on the latest virtualization technology trends and practices in Industry Perspectives.</p>
			<p style="line-height:160%">
			If you're already using VMTurbo, you can dig deep to understand and get the most out of controlling your virtual environment. Find out what your peers are doing, ask a VMTurbo expert, or contribute your own ideas for enhancing the technology.</p>
			<p style="line-height:160%">Join the fastest growing online forum in virtualization and connect with some of the best and the brightest in the industry. Membership is completely free. Participating is fun and you can even earn points toward real-life prizes and early access to new technologies. </p>
			<a href="http://greencircle.vmturbo.com/" class="btn btn-vmt btn-spacer" target="_blank">Join Now &raquo;</a>
		</div>
		<div class="col-md-5 hidden-sm hidden-xs equal-height-panel">
		<div class="gc-experts">
			<img src="http://vmturbo.com/wp-content/uploads/2014/04/steve-senecal.png" class="img-responsive" />
		</div>
		</div>
		</div>
	</div>
</div>

 <div id="wide-span-2" class="hidden-sm hidden-xs carousel slide" data-ride="carousel" style="background: #222;color: #fff;padding: 60px 0;text-align:center;"><div class="carousel-inner" role="listbox">
 	<div class="item active">
	<div class="container" id="micro-awards" style="margin-top:0em"><div class="col-md-4"> <img src="http://vmturbo.com/wp-content/uploads/2015/08/Award_Inc5000_2015.png" class="img-responsive"></div><div class="col-md-4"> <img src="http://vmturbo.com/wp-content/uploads/2015/08/Award_JPMC_2015.png" class="img-responsive"></div><div class="col-md-4"> <img src="http://vmturbo.com/wp-content/uploads/2015/08/Award_BostInnoCoolest_2015.png" class="img-responsive"></div></div>
	</div>
	<div class="item">
	<div class="container" id="micro-awards" style="margin-top:0em"><div class="col-md-4"> <img src="http://cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/forbes.png" class="img-responsive"></div><div class="col-md-4"> <img src="http://cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/vmworld.png" class="img-responsive"></div><div class="col-md-4"> <img src="http://cdn.vmturbo.com/wp-content/themes/vmturbo/inc/micro/img/trailblazers.png" class="img-responsive"></div></div>
	</div>
	<div class="item">
	<div class="container" id="micro-awards" style="margin-top:0em"><div class="col-md-4"> <img src="http://vmturbo.com/wp-content/uploads/2014/04/wreath-3.png" class="img-responsive"></div><div class="col-md-4"> <img src="http://vmturbo.com/wp-content/uploads/2014/04/wreath-2.png" class="img-responsive"></div><div class="col-md-4"> <img src="http://vmturbo.com/wp-content/uploads/2014/04/wreath-1.png" class="img-responsive"></div></div>
	</div>
	<a class="left carousel-control" href="#wide-span-2" role="button" data-slide="prev" style="background:none;"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#wide-span-2" role="button" data-slide="next" style="background:none;"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div></div>
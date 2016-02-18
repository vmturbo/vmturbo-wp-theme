<header class="banner">
  <div class="container">
	<div class="row">
	<nav class="navbar yamm navbar-inverse navbar-fixed-top" role="navigation" id="vmtnav">
	<?php if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';?>
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                    <img src="//cdn.vmturbo.com/wp-content/uploads/2014/04/vmturbo-logo-header.png" alt="VMTurbo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown yamm-fw">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product</a>
					 <ul class="dropdown-menu">
					   <li>
				<div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-4 list-unstyled">
                        <li><a href="<?= esc_url(home_url('/')); ?>product/">Product</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>product/why-vmturbo">Why VMTurbo</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>product/how-it-works/">How It Works</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>product/operations-management-software/">Operations Manager</a></li>
                        <li><a data-toggle="collapse" data-parent="#accordion" href="#nav-collapse-1" aria-expanded="true">Control Modules <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                          <div id="nav-collapse-1" class="panel-collapse collapse" aria-expanded="true">
						  
                            <div class="panel-body">
								<ul class="list-unstyled" id="control-modules">
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/application-management-software/">Application Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/network-management-software/">Network Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/container-management-software/">Container Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/storage-resource-management/">Storage Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/ucs-fabric-management-software/">Fabric Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/hybrid-cloud-management-software/">Hybrid Cloud Control Module</a>
									</li>
								</ul>
  						    </div>
                          </div>
						
					  
						</li>
                        <li><a href="<?= esc_url(home_url('/')); ?>product/differentiation/">Differentiation</a></li>
                      </ul>
                      <ul class="col-sm-4 list-unstyled list-multilevel">
                        <li>
                          <p><strong>Free Control</strong></p>
						  <a href="<?= esc_url(home_url('/')); ?>downloads/operations-manager-30-day-trial/">Operations Manager Trial</a>
                        </li>
                        <li>
                          <p><strong>Free Tool</strong></p>
						  <a href="<?= esc_url(home_url('/')); ?>downloads/vmturbo-virtual-health-monitor/">Virtual Health Monitor</a>
						</li>
						<li>
						  <a href="<?= esc_url(home_url('/')); ?>resources/datacenter-stencils/">Datacenter Stencils</a>
                        </li>
                      </ul>
					  <div class="col-xs-6 col-sm-4 hidden-xs">
						<a href="<?= esc_url(home_url('/')); ?>data-center-control/"><img src="http://vmturbo.com/wp-content/uploads/2014/04/opsman-laptop.png" class="img-responsive" /><span id="new-feature"><strong>VMTurbo 5.4</strong>: What's new &raquo;</span></a>
					  </div>
                    </div>
                  </div>
					   </li>
					 </ul>
				   </li>
                    <li class="dropdown yamm-fw">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solutions</a>
					 <ul class="dropdown-menu">
					   <li>
				<div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-5 list-unstyled">
						<li>
						  <a href="<?= esc_url(home_url('/')); ?>solutions/">Solutions</a>
						</li>
                        <li style="margin-top:1em">
                          <p><strong>How We Help</strong></p>
                        </li>
                        <li><a data-toggle="collapse" data-parent="#accordion" href="#nav-collapse-2" aria-expanded="true">Assure Application Performance <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                          <div id="nav-collapse-2" class="panel-collapse collapse" aria-expanded="true">
                            <div class="panel-body">
								<ul class="list-unstyled">
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/qos-assurance/">Guarantee QoS Adherence</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/scale-distributed-applications/">Autoscale Distributed Applications</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/reduce-network-latency/">Minimize Network Latency</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/minimize-storage-latency/">Minimize Storage Latency</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/minimize-container-microservices-latency/">Minimize Containers & Microservices Latency</a>
									</li>
								</ul>
  						    </div>
                          </div>
						</li>
						<li><a data-toggle="collapse" data-parent="#accordion" href="#nav-collapse-3" aria-expanded="true">Control Any Workload on Any Infrastructure <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                          <div id="nav-collapse-3" class="panel-collapse collapse" aria-expanded="true">
						  
                            <div class="panel-body">
								<ul class="list-unstyled">
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/private-cloud-management/">Private Cloud Management</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/public-cloud-management/">Public Cloud Management</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/hybrid-cloud-management/">Hybrid Cloud Management</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/multi-cloud-management/">Multi-Cloud Management</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/hyperv-migration/">Multi-Hypervisor Management</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/openstack/">OpenStack for Enterprise</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/scale-vdi/">Manage Complex VDI Environments</a>
									</li>
								</ul>
  						    </div>
                          </div>
						</li>
						<li><a data-toggle="collapse" data-parent="#accordion" href="#nav-collapse-4" aria-expanded="true">Efficiently Scale Across Any Environment <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                          <div id="nav-collapse-4" class="panel-collapse collapse" aria-expanded="true">
						  
                            <div class="panel-body">
								<ul class="list-unstyled">
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/reduce-licensing-costs/">Reduce Licensing Costs</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/capacity-planning-management/">Capacity Planning</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/build-converged-infrastructure/">Converged Infrastructure</a>
									</li>
								</ul>
  						    </div>
                          </div>
						</li>
                      </ul>
                      <ul class="col-sm-3 list-unstyled">
                        <li>
                          <p><strong>Where We Help</strong></p>
                        </li>
                        
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/education/">Education</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/financial-institutions/">Financial</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/government/">Government</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/healthcare/">Healthcare</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/service-providers/">Service Provider</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/technology/">Technology</a></li>
                      </ul>
                      <ul class="col-sm-4 list-unstyled list-multilevel list-multilevel-stack">
                        <li>
                          <p><strong>Who We Help</strong></p>
                        </li>
						<li>
						  <a href="<?= esc_url(home_url('/')); ?>solutions/competitive-advantage-IT/">Business Decision-Makers</a>
						</li>
						<li>
						  <a href="<?= esc_url(home_url('/')); ?>solutions/intelligent-workload-management/">Tech Decision-Makers</a>
						</li>
                        <li class="stack-end-title">
                          <p><strong>See Savings</strong></p>
						  <a href="<?= esc_url(home_url('/')); ?>solutions/return-on-investment/">ROI Calculator</a>
                        </li>
                      </ul>
                    </div>
                  </div>
					   </li>
					 </ul>
				   </li>
				   
                    <li class="dropdown yamm-fw">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
					 <ul class="dropdown-menu">
					   <li>
				<div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-4 list-unstyled list-multilevel list-multilevel-stack">
                        <li>
                          <p><strong>Explore All Resources</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/">Resource Library</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/vmturbo-quick-start-guide/">Quick Start Guide</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/vmturbo-quick-start-guide/product-documentation/">Product Documentation</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/events/">Events</a></li>
						<li class="stack-end-title">
                          <p><strong>Learn From Customers</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>customer-reviews/">Reviews</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/#filter=.case-study">Case Studies</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>customers/">Customers By Industry</a></li>
                      </ul>
                      <ul class="col-sm-3 list-unstyled list-multilevel list-multilevel-stack">
                        <li>
                          <p><strong>Watch Now</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/#filter=.vid">Videos</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/#filter=.webinar">Webinars</a></li>
                        <li class="stack-end-title">
                          <p><strong>Read Now</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/#filter=.pro-data">Data Sheets</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/#filter=.white-paper">White Papers</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/#filter=.analyst-report">Analyst Reports</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/#filter=.infographic">Infographics</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/#filter=.ebook">eBooks</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>blog/">Blogs</a></li>
                      </ul>
                      <ul class="col-sm-5 list-unstyled list-multilevel list-multilevel-stack">
						<li><span class="video-feature-title">ACI Worldwide &amp; VMTurbo</span><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_03yxaws696 popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div></li>
                        <li class="stack-end-title">
                          <p><strong>Follow Us</strong></p>
                        </li>
						<li>
							<ul class="list-inline">
								<li><a class="btn btn-social-icon" href="https://twitter.com/vmturbo" target="_blank"><span class="fa fa-twitter"></span></a></li>
								<li><a class="btn btn-social-icon" href="https://plus.google.com/+VMTurbo" target="_blank"><span class="fa fa-google"></span></a></li>
								<li><a class="btn btn-social-icon" href="https://www.linkedin.com/company/vmturbo" target="_blank"><span class="fa fa-linkedin"></span></a></li>
								<li><a class="btn btn-social-icon" href="https://www.youtube.com/user/myVMTurboTV" target="_blank"><span class="fa fa-youtube-square"></span></a></li>
								<li><a class="btn btn-social-icon" href="https://www.facebook.com/vmturbo1/" target="_blank"><span class="fa fa-facebook"></span></a></li>
							</ul>
						</li>
                      </ul>
                    </div>
                  </div>
					   </li>
					 </ul>
				   </li>
                    <li class="dropdown">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Partners</a>
					 <ul class="dropdown-menu">
					   <li>
				<div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-12 list-unstyled list-multilevel list-multilevel-stack">
                        <li>
                          <p><strong>Partner Programs</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>company/channel-partners/">Channel Partners</a></li>
						<li><a href="<?= esc_url(home_url('/')); ?>company/service-provider-partners/">Service Providers</a></li>
						<li><a href="<?= esc_url(home_url('/')); ?>company/technology-partners/">Technology Alliances</a></li>
						<li><a href="https://vmturbo.partnerprm.com/">Partner Portal</a></li>
                      </ul>
                    </div>
                  </div>
					   </li>
					 </ul>
				   </li>
                    <li class="dropdown">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Support</a>
					 <ul class="dropdown-menu">
					   <li>
				<div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-12 list-unstyled list-multilevel list-multilevel-stack">
                        <li>
                          <p><strong>Get Green</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/why-vmturbo/customer-success/">Enabling Customer Success</a></li>
						<li><a href="//greencircle.vmturbo.com">Green Circle Community</a></li>
                        <li><a href="https://greencircle.vmturbo.com/community/products/content">Knowledge Base</a></li>
                        <li><a href="https://support.vmturbo.com/hc/en-us">Customer Support Center</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>user-administrator-training/">Training &amp; Education</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/vmturbo-quick-start-guide/">Quick Start Guide</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>resources/vmturbo-quick-start-guide/product-documentation/">Product Documentation</a></li>
                      </ul>
                    </div>
                  </div>
					   </li>
					 </ul>
				   </li>
                </ul>
				<ul class="nav navbar-nav pull-right hidden-sm">	
					<li id="nav-search">
						<a href="#" onclick="return false;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
					</li>
					<!-- pre-vhm button
					<li>
					<a href="#" class="btn btn-success hidden-xs btn-switch" id="btn-dl">Download Now</a>
				   </li>-->
                    <li class="dropdown">
						<a href="<?= esc_url(home_url('/')); ?>downloads/operations-manager-30-day-trial/" class="btn btn-success hidden-xs btn-switch" id="btn-dl">Downloads</a>
					 <ul class="dropdown-menu">
					   <li>
						<a href="<?= esc_url(home_url('/')); ?>downloads/vmturbo-virtual-health-monitor/" class="btn btn-success hidden-xs btn-switch" id="btn-dl-vhm"><span class="sub-title">GET MONITORING</span><span class="sub-hover">Free Forever</span></a>
					   </li>
					 </ul>
				   </li>
				   <li>
					
				   </li>
				   
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
   <!-- <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>-->
  </div></div>
  <div id="search-redux-container" class="clearfix" style="display: none;">
	<div class="container">
		<form role="search" method="get" id="searchform" class="searchform" style="max-width:700px;margin:0 auto" action="<?= esc_url(home_url('/')); ?>"> 
			<i class="fa fa-search" style="float:left;margin-top:10px;text-align:center;color:#fff;width:10%;"></i>
			<label class="screen-reader-text" for="s">Search for:</label> 
			<input required="" id="s" type="text" name="s" placeholder="Type to Search" class="form-control" style="width:90%;border-radius:5px;"> 
		</form>
	</div>
  </div>
</header>

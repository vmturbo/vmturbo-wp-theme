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
                    <img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/vmturbo-logo-header.png" alt="VMTurbo">
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
                        <li>
                          <p><strong>Product</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/why-vmturbo">Why VMTurbo</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/how-it-works/">How It Works</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>product/operations-management-software/">Operations Manager</a></li>
                        <li><a data-toggle="collapse" data-parent="#accordion" href="#nav-collapse-1" aria-expanded="true">Control Modules <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                          <div id="nav-collapse-1" class="panel-collapse collapse" aria-expanded="true">
						  
						  
						  
						  
                            <div class="panel-body">
								<a data-toggle="collapse" data-parent="#accordion" href="#demand-bundle" aria-expanded="true">Demand Bundle <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
								<ul class="list-unstyled panel-collapse collapse" id="demand-bundle">
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/application-management-software/">Application Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/network-management-software/">Network Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/vdi-management-software/">VDI Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/container-management-software/">Container Control Module</a>
									</li>
								</ul>
  						    </div>
                            <div class="panel-body">
								<a data-toggle="collapse" data-parent="#accordion" href="#supply-bundle" aria-expanded="true">Supply Bundle <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
								<ul class="list-unstyled panel-collapse collapse" id="supply-bundle">
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/storage-resource-management/">Storage Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/ucs-fabric-management-software/">Fabric Control Module</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>product/control-modules/hybrid-cloud-management-software/">Hybrid Cloud Control Module</a>
									</li>
								</ul>
  						    </div>
                          </div>
						
					  
						</li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/differentiation/">Differentiation</a></li>
                      </ul>
                      <ul class="col-sm-4 list-unstyled list-multilevel">
                        <li>
                          <p><strong>Free Control</strong></p>
						  <a href="<?= esc_url(home_url('/')); ?>downloads/operations-manager-30-day-trial/">Operations Manager Lite</a>
                        </li>
                        <li>
                          <p><strong>Free Tool</strong></p>
						  <a href="<?= esc_url(home_url('/')); ?>downloads/vmturbo-virtual-health-monitor/">Virtual Health Monitor</a>
						</li>
						<li>
						  <a href="<?= esc_url(home_url('/')); ?>resources/datacenter-stencils/">Datacenter Stencils</a>
                        </li>
                      </ul>
					  <div class="col-xs-6 col-sm-4">
						<a href="#"><img alt="150x190" src="http://dummyimage.com/350x200/000/fff" class="img-responsive"></a>
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
                          <p><strong>Solutions</strong></p>
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
									  <a href="<?= esc_url(home_url('/')); ?>">Minimize Storage Latency</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>">Minimize Containers & Micro-services Latency</a>
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
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/manage-private-hybrid-cloud/">Public, Private, Hybrid, Cloud</a>
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
									  <a href="<?= esc_url(home_url('/')); ?>solutions/usecases/capacity-planning-management/">Capacity Planning</a>
									</li>
									<li>
									  <a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/build-converged-infrastructure/">Converged Infrastructure</a>
									</li>
								</ul>
  						    </div>
                          </div>
						</li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/use-cases/reduce-licensing-costs/">Reduce Licenscing Costs</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>solutions/differentiation/">Differentiation</a></li>
                      </ul>
                      <ul class="col-sm-3 list-unstyled">
                        <li>
                          <p><strong>Industry</strong></p>
                        </li>
                        
                        <li><a href="<?= esc_url(home_url('/')); ?>">Education</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Financial</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Government</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Healthcare</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Service Provider</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Technology</a></li>
                      </ul>
                      <ul class="col-sm-4 list-unstyled list-multilevel list-multilevel-stack">
                        <li>
                          <p><strong>Roles</strong></p>
                        </li>
						<li>
						  <a href="<?= esc_url(home_url('/')); ?>solutions/competitive-advantage-IT/">Business Decision-Makers</a>
						</li>
						<li>
						  <a href="<?= esc_url(home_url('/')); ?>solutions/intelligent-workload-management/">Tech Decision-Makers</a>
						</li>
                        <li class="stack-end-title">
                          <p><strong>Other</strong></p>
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
                        <li><a href="<?= esc_url(home_url('/')); ?>">Resource Library</a></li>
                        <li class="stack-end-title">
                          <p><strong>Watch Now</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Videos</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Webinars</a></li>
						<li><a href="<?= esc_url(home_url('/')); ?>"><img alt="150x190" src="http://dummyimage.com/350x200/000/fff" class="img-responsive"></a></li>
                      </ul>
                      <ul class="col-sm-4 list-unstyled list-multilevel list-multilevel-stack">
                        <li>
                          <p><strong>Read Now</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Data Sheets</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">White Papers</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Analyst Reports</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Infographics</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">eBooks</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Blogs</a></li>
                        <li class="stack-end-title">
                          <p><strong>Customer Stories</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Reviews</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Case Studies</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Customers By Industry</a></li>
                      </ul>
                      <ul class="col-sm-4 list-unstyled list-multilevel list-multilevel-stack">
                        <li>
                          <p><strong>Product Support</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Green Circle Community</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Quick Start Guide</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Product Documentation</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Training & Certification</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Knowledge Base</a></li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Support</a></li>
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
                          <p><strong>Explore All Resources</strong></p>
                        </li>
                        <li><a href="<?= esc_url(home_url('/')); ?>">Channel Partners</a></li>
						<li><a href="<?= esc_url(home_url('/')); ?>">Service Providers</a></li>
						<li><a href="<?= esc_url(home_url('/')); ?>">Technology Alliances</a></li>
						<li><a href="<?= esc_url(home_url('/')); ?>">Partner Portal</a></li>
                      </ul>
                    </div>
                  </div>
					   </li>
					 </ul>
				   </li>
                </ul>
				<ul class="nav navbar-nav pull-right hidden-sm">	
				<!--		
					<li>
						Search
					</li>
				</ul>-->
				   <li>
					<a href="#" class="btn btn-success hidden-xs" id="btn-dl">Download Now</a>
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
</header>

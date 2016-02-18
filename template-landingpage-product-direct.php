<?php
/**
 * Template Name: Landing Page - Product Download (Direct)
 */
?>
<div class="custom-landing">
	<div class="container">
		<div class="col-md-10 col-md-push-1">
			<div class="content-block">
				<h1>VMTurbo Operations Manager</h1>
				<div id="dl-block">
					<span>Operations Manager is a unified control system. The software assures workload performance while utilizing the infrastructure as efficiently as possible.</span>
					<form id="submit-form" class="form-inline">
					  <div class="form-group">
						<input type="text" class="form-control" id="validation" placeholder="Validation Code">
					  </div>
					  <button id="submit" type="submit" class="btn btn-vmt-slim">Download</button>
					</form>
					<div class="list-group col-md-8 col-md-push-2" id="dl-table">
					  <a class="list-group-item" href="http://download.vmturbo.com/appliance/release/vmturbo64-opsmgr-5_3.ova" target="_blank">Download for <strong>VMware ESX/vSphere </strong> &raquo;</a>
					  <a class="list-group-item" href="http://download.vmturbo.com/appliance/release/vmturbo64-opsmgr-5_3.zip" target="_blank">Download for <strong>Microsoft Hyper-V 2012 R2 * </strong> &raquo;</a>
					  <a class="list-group-item" href="http://download.vmturbo.com/appliance/release/vmturbo64-opsmgr-5_3.qcow.gz" target="_blank">Download for <strong>OpenStack </strong> &raquo;</a>
					  <a class="list-group-item" href="http://download.vmturbo.com/appliance/release/vmturbo64-opsmgr-5_3.xva" target="_blank">Download for <strong>Citrix XenServer </strong> &raquo;</a>
					  <a class="list-group-item" href="http://download.vmturbo.com/appliance/release/vmturbo64-opsmgr-5_3.tgz" target="_blank">Download for <strong>Red Hat Enterprise Virtualization </strong> &raquo;</a>
					  <a class="list-group-item" href="http://download.vmturbo.com/appliance/release/vmturbo64-opsmgr-5_3.qcow.gz" target="_blank">Download for <strong>Nutanix Acropolis </strong> &raquo;</a>
					</div>
				</div>
				<div>
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/opsman-ui-hero.png" alt="operations-manager-supply-chain" style="padding:0 15px;width:100%;margin-bottom:-2em;">
				</div>
			</div>
		</div>
	</div>
</div>

			<script type="text/javascript">
			(function(d){d.fn.shake=function(a){"function"===typeof a&&(a={callback:a});a=d.extend({direction:"left",distance:20,times:3,speed:140,easing:"swing"},a);return this.each(function(){var b=d(this),k={position:b.css("position"),top:b.css("top"),bottom:b.css("bottom"),left:b.css("left"),right:b.css("right")};b.css("position","relative");var c="up"==a.direction||"down"==a.direction?"top":"left",e="up"==a.direction||"left"==a.direction?"pos":"neg",f={},g={},h={};f[c]=("pos"==e?"-=":"+=")+a.distance;g[c]=
("pos"==e?"+=":"-=")+2*a.distance;h[c]=("pos"==e?"-=":"+=")+2*a.distance;b.animate(f,a.speed,a.easing);for(c=1;c<a.times;c++)b.animate(g,a.speed,a.easing).animate(h,a.speed,a.easing);b.animate(g,a.speed,a.easing).animate(f,a.speed/2,a.easing,function(){b.css(k);a.callback&&a.callback.apply(this,arguments)})})}})(jQuery);

	jQuery(document).ready(function($){
		$.backstretch("//cdn.vmturbo.com/wp-content/uploads/2014/04/home-hero-place.jpg");	
		$("#submit-form").submit(function(e){
			e.preventDefault();
			var password = "mPZawst";
			if($("#validation").val() !== password) {
				  $(this).shake({
						direction: "left",
						distance: 10
					});
			}
			else {
				  
				  $(this).delay(1000).fadeOut();
				  $("#dl-table").delay(1500).fadeIn();
			}
		});
			})
			</script>
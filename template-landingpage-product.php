<?php
/**
 * Template Name: Landing Page - Product Download
 */
?>
<div class="custom-landing">
	<div class="container">
		<div class="col-md-8">
			<div class="content-block">
				<div id="header-ribbon"><strong>Free</strong> 30-Day Trial</div>
				<h1>VMTurbo Operations Manager</h1>
				<span>Operations Manager is a unified control system. The software assures workload performance while utilizing the infrastructure as efficiently as possible.</span>
				<div>
					<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/opsman-ui-hero.png" alt="operations-manager-supply-chain" style="padding:0 15px;width:100%;">
					<div class="expandout">
						<div class="row">
							<div class="col-sm-6 clearfix">
							<img src="//cdn.vmturbo.com/wp-content/uploads/2015/09/icon-vmt.png" />
							<span><strong>Unified control engine</strong> for capacity planning, workload onboarding, and performance management</span>
							</div>
							<div class="col-sm-6 clearfix">
							<img src="//cdn.vmturbo.com/wp-content/uploads/2015/09/icon-award.png" />
							<span><strong>Maximizes infrastructure efficiency</strong> by managing infrastructure capacity and utilization</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 clearfix">
							<img src="//cdn.vmturbo.com/wp-content/uploads/2015/09/icon-network.png" />
							<span><strong>Continuously assures</strong> workload performance by preventatively reallocating resources (before degradations occur)</span>
							</div>
							<div class="col-sm-6 clearfix">
							<img src="//cdn.vmturbo.com/wp-content/uploads/2015/09/icon-time.png" />
							<span><strong>Easy deployment</strong> – be up and running in less than an hour</span>
							</div>
						</div>
					</div>
					<div class="quote-block">
						<span class="quote-body">"It saved us money - we were able to better utilize what we had. The planning was really integral to virtualizing these consumer facing applications. This is really where VMTurbo shines. I can't say enough good things about that."</span>
						<span class="quote-author">Sean Hendershot, Manager of Data Center Operations - Canon USA</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="content-form">
			<h2>Download Free Trial</h2>
			<form id="mktoForm_<?php if(is_page('21602')) { ?>6<?php } else { ?>502<?php } ?>"></form>
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
				
	var $jQ = jQuery.noConflict();
	MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", <?php if(is_page('21602')) { ?>6<?php } else { ?>502<?php } ?>, function(form){
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
	  form.onSuccess(function(){
		// window.optimizely.push(["trackEvent", "form_success"]);
	  });
	  
	});
	MktoForms2.whenReady(function (form) {
		jQuery.backstretch("//cdn.vmturbo.com/wp-content/uploads/2014/04/home-hero-place.jpg");
	});
	
			})
			</script>
			
			</div>
		</div>
	</div>
</div>
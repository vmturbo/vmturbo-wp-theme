<div class="custom-landing partners">
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
			<?php if(types_render_field('partner-logo', array('raw'=>'true'))){?>
			<div id="partner-img-container">
				<img id="partner-img" src="<?php echo types_render_field( "partner-logo", array( "url" => "true" ) ) ?>" class="img-responsive" />
			</div>
			<?php } ?>   
			
			<form id="mktoForm_367"></form>
			<script type="text/javascript">
			function getParameterByName(name) {
				name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
				var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
				 results = regex.exec(location.search);
				return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
			}
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
			MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", 367, function(form){
				jQuery( ".mktoButton" ).addClass( "btn btn-vmt" );
				jQuery( ".mktoButtonWrap.mktoSimple" ).removeClass( "mktoSimple mktoButtonWrap" );
				
				form.onSubmit(function(){
					var fi = tH($jQ("#FirstName").val());
					var la = tH($jQ("#LastName").val());
					var em = tH($jQ("#Email").val());
					var co = tH($jQ("#Company").val());
					var ty = tH("<?php if(is_single(24051)){ ?>pure<?php } else { ?>trial<?php } ?>");
					
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
				//prefill utm fields when appropriate
				 var utmVal = getParameterByName('utm_source');
				 var prefillFields = { "utmsource" : utmVal };
				 form.vals(prefillFields)
			});
	
			}); // end jq ready
				
			</script>
			
			</div>
		</div>
	</div>
</div>
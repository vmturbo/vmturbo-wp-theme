<?php
/**
 * Template Name: Landing Page
 */
?>
<div class="custom-landing <?php the_field( "page_style" ); ?>">
<div class="container">
	<div class="col-md-8">
		<div class="content-block<?php if (get_field('content_box_color_scheme') == "dark") { echo " dark-scheme"; } ?>">
			<h1><?php the_title(); ?></h1>
			<?php the_content() ; ?>
		</div>
	</div>
	<div class="col-md-4">
		<div class="content-form">
		<?php if(get_field('form_title')) { ?>
		<h3><?php the_field( 'form_title' );   ?></h3>
		<?php } ?>

				<?php if(is_page('30542')){ ?>
					<form id="mktoForm_1124"></form>
				<?php } elseif(is_page('28585')) { ?>
					<form id="mktoForm_1131"></form>
				<?php } else { ?>
					<form id="mktoForm_<?php if(get_field('product_download') && get_field('license_type') == "community") { ?>503<?php } elseif(get_field('product_download') && get_field('license_type') == "trial") { ?>502<?php } elseif(get_field('product_download') && get_field('license_type') == "freemium") { ?>1015<?php } elseif(get_field('product_download') && get_field('license_type') == "freemiumTrial") { ?>1014<?php } elseif(get_field('product_download') && get_field('license_type') == "saas") { ?>1131<?php } else { the_field('marketo_form_code'); } ?>"></form>
				<?php } ?>
		<script type="text/javascript">
		<?php if(get_field('product_download') && !is_page('28585')) { ?>
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

				<?php if(is_page('30542')) { ?>

					MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", 1124, function(form){

				<?php } else { ?>

				MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", <?php if(get_field('license_type') == "community") { ?>503<?php } elseif(get_field('license_type') == "trial") { ?>502<?php } elseif(get_field('license_type') == "freemium") { ?>1015<?php } elseif(get_field('license_type') == "freemiumTrial") { ?>1014<?php } elseif(get_field('license_type') == "saas") { ?>1131<?php } else { the_field('marketo_form_code'); } ?>, function(form){

				<?php } ?>

					jQuery( ".mktoButton" ).addClass( "btn btn-vmt" );
					jQuery( ".mktoButtonWrap.mktoSimple" ).removeClass( "mktoSimple mktoButtonWrap" );

					form.onSubmit(function(){
						
						var fi = tH($jQ("#FirstName").val());
						var la = tH($jQ("#LastName").val());
						var em = tH($jQ("#Email").val());
						var co = tH($jQ("#Company").val());
						var ty = tH("<?php the_field( 'license_type' ) ?>");

						<?php if(is_page('30542')) { ?>
							var query = "?a=" + encodeURI(em) + "&b=" + encodeURI(fi) + "&c=" + encodeURI(la)+ "&d=" + encodeURI(ty) + "&e=" + encodeURI(co) + "&v=" + encodeURI("v4");
						<?php } else { ?>
							var query = "?a=" + encodeURI(em) + "&b=" + encodeURI(fi) + "&c=" + encodeURI(la)+ "&d=" + encodeURI(ty) + "&e=" + encodeURI(co);
						<?php } ?>

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
			})
		<?php } elseif(is_page('28585')) { ?>
			// VMTURBO SAAS
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
			MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", 1131, function(form){
				var sassSuccess = true;
				var $jQ = jQuery.noConflict();
				form.onSubmit(function(){

					
					var fname = $jQ("#FirstName").val();
					var emailaddressVal = $jQ("#Email").val();

				   	// post to saas servlet
					var urlSaas = "http://54.68.88.66/SaaS/vmt_saas?Email="+encodeURI(emailaddressVal)+"&firstName="+encodeURI(fname)+"&type=requestSaaSAccess";

					$jQ.ajax({
						type: "POST",
						url: urlSaas
					}).error(function(){
						sassSuccess = false;
					});

			  	});
				form.onSuccess(function(values, followUpUrl){
					if (sassSuccess==false){
						form.getFormElem().fadeToggle('400', function() {
							$jQ('.content-form').append('<p class="saasErrorMsg" style="padding: 10px 5% !important;font-weight: bold;color: red;display:none;">There was an error during your request. Please try again in a few minutes. If you experience this error more than once, contact <a href="mailto:evalTeam@vmturbo.com">evalTeam@vmturbo.com</a> for further assistance</p>');
							$jQ('.content-form .saasErrorMsg').fadeToggle('400');
						});
						return false;
					}
				});
			});

		<?php } else { ?>

			MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", <?php the_field('marketo_form_code');?>, function(form){
				jQuery( ".mktoButton" ).addClass( "btn btn-vmt" );
				jQuery( ".mktoButtonWrap.mktoSimple" ).removeClass( "mktoSimple mktoButtonWrap" );
			});

		<?php if(is_page('28092')) { ?>

//	wistiaEmbed = document.getElementById("wistiaframe").wistiaApi;wistiaEmbed.bind("end", function() {
//		jQuery( "#fademe" ).fadeOut( "slow", function() {});
//	});
//	wistiaEmbed.bind("secondchange", function (s) {if(s === 180) {
//		jQuery('.mktoButtonRow .alert').hide();jQuery('.mktoButtonRow .btn-vmt').fadeIn();
//	}});
//		jQuery('.mktoButtonRow span').append('<div class="alert">You must watch the video before submitting this form</div>');

		<?php } ?>

		<?php } ?>
		</script>

			<?php if(get_field('page_style') == "image") { ?>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				MktoForms2.whenReady(function (form) {
					jQuery.backstretch("<?php the_field('page_background_image'); ?>");
				});
			});
		</script>
			<?php } ?>

		<?php if(is_page('28092')) { ?>
		<script type="text/javascript">
		jQuery(window).load(function(){
		      MktoForms2.whenReady(function (form) {

				//jQuery('.mktoButtonRow .btn-vmt').hide();
				//jQuery('.mktoButtonRow span').append('<div class="alert" style="background: #860202;text-align: center;padding: 10px;font-size: .9em;font-weight: bold;color: #fff;">You must watch the video before submitting this form</div>');

			});
			/*
			var video = wistiaEmbeds[0];
			video.bind("secondchange", function (s) {
			if(s >= 180) {
				jQuery('.mktoButtonRow .alert').hide();
				jQuery('.mktoButtonRow .btn-vmt').fadeIn();
			}
			});
			*/
			jQuery('.content-block h1').insertAfter('#main-head');
		})
		</script>
		<?php } ?>

		</div>
	</div>
</div>
</div>

<?php if(get_field('custom_css')) { ?>
<style type="text/css">
<?php the_field('custom_css') ?>
</style>
<?php } ?>
<?php if(get_field('custom_js')) { ?>
<script type="text/javascript">
jQuery(document).ready(function($){
<?php the_field('custom_js') ?>
});
</script>
<?php } ?>
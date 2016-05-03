<?php
/**
 * Template Name: Temporary: Turbostack Page
 */
?>
<style>

.page-template-temp-template-turbostack {
	background:#fafafa url('http://cdn.vmturbo.com/wp-content/uploads/2016/03/hex-bg.png') no-repeat fixed center center;
	background-size:cover;
	
}
		#turbo-main-container {
			background: #fff;
			box-shadow: 0 0 30px #ccc;
			border-radius: 5px 5px 0 0;
			margin-top:3.5em;
		}
		#turbo-header {
		    background: #222 url('http://vmturbo.com/wp-content/uploads/2016/04/turbostack-bg.jpg') no-repeat center center;
			background-size: cover;
			border-radius: 5px 5px 0 0;
			position: relative;
			min-height: 235px;
			
		}
		#turbo-header img {
			position:absolute;
			top:-30px;
			left:50%;
			margin-left:-160px;
			max-width:320px;
		}
body {
	overflow-x:hidden;
}
#turbo-content h2 {
	font-weight:700;
	margin-top:0;
}
#turbo-content p {
	line-height:1.7em;
}
#the-content p:last-child {
	margin-bottom:1.5em;
}

th {
	max-width:200px;
	text-align:right;
}
#turbo-content {
	padding:3em;
}
        @media only screen and (min-width: 320px) {
			#page-contain {
				padding:0;
			}
			#turbo-content {
				padding:0;
			}
			#content-contain {
				padding:2em;
			}
        }
        @media only screen and (min-width: 768px) {
			#page-contain {
				padding:0 15px;
			}
			#turbo-content {
				padding:3em;
			}
			#content-contain {
				padding:0;
			}
        }
        @media only screen and (min-width: 980px) {
			#page-contain {
				padding:0 15px;
			}
        }
</style>
<div class="container" id="page-contain">
<div id="turbo-main-container" style="margin:4em 0;border-radius:5px;">
	<div id="turbo-header" style="min-height:200px;z-index:9;">
		<img src="http://vmturbo.com/wp-content/uploads/2016/01/turbostack-active.png" class="img-responsive" style="max-width:326px;margin-left:-163px;top:-50px" />
	</div>
	<div id="turbo-ribbon" style="background:#222;text-align:center;padding:3.5em 1em;border-bottom:3px solid #4f4f4f;">
	<div class="row">
			<div class="col-sm-8 col-sm-push-2">
				<span style="color:#fff;font-size:1.2em;">The <strong>TurboStack Home Lab</strong> is an expertly crafted hardware and software bundle that has been engineered to allow you to easily bring OpenStack to your virtual environment.</span>
			</div>
		</div>
	</div>
		<div id="turbo-content">
	<div class="row">
			<div class="col-md-5 col-md-push-7">
				<div class="content-form" style="box-shadow: 0 0 10px #eee;border: 1px solid #eee;">
				<h3 style="background: #2c9427;color: #fff;padding: 1em 0;text-align: center;font-size: 1.3em;letter-spacing: 1px;font-weight: 600;margin:0;">WATCH VIDEO TO ENTER</h3>
				<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_03qymvzf5s popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div>
				<form id="mktoForm_<?php the_field('marketo_form_code'); ?>"></form>
				<script type="text/javascript">
					MktoForms2.loadForm("//app-sjp.marketo.com", "303-ZIH-630", <?php the_field('marketo_form_code');?>, function(form){
						jQuery( ".mktoButton" ).addClass( "btn btn-vmt" );
						jQuery( ".mktoButtonWrap.mktoSimple" ).removeClass( "mktoSimple mktoButtonWrap" );
					});

				</script>
				<script type="text/javascript"></script>
				</div>
			</div>
			
			<div class="col-md-7 col-md-pull-5">
			<div id="content-contain">
				<div id="the-content">
					<?php the_content(); ?>
				</div>
				
				<div style="border-top:4px solid #bdbdbd;margin-top:1em;">
					<div id="turbo-img">
						<img src="http://cdn.vmturbo.com/wp-content/uploads/2016/04/turbostack.jpg" class="img-responsive" alt="TurboStack HomeLab" title="TurboStack HomeLab" style="width:100%;" />
					</div>
					<div id="turbo-components" style="display:flex">
						<div style="background:#696969;width:30%;display:flex;">
							<img src="http://vmturbo.com/wp-content/uploads/2016/04/processor.png"style="align-self:center;margin:0 auto;padding:1em;" class="img-responsive" />
						</div>
						<div style="background:#595959;width:70%">
							<span style="background:#333333;color:#fff;padding:.8em 2em;display:block;font-weight:600;text-transform:uppercase;letter-spacing:1px;">turbostack components</span>
							<ul style="color:#fff;list-style:none;padding:2em;font-size:1.1em;line-height:1.7em;text-shadow:1px 1px 1px #222;margin-bottom:0;">
							<?php
							if( have_rows('components') ):
								while ( have_rows('components') ) : the_row();
							?>
							<li><?php the_sub_field('quantity'); ?>x <?php if(get_sub_field('brand')) { ?><strong><?php the_sub_field('brand'); ?></strong> <?php } ?><?php the_sub_field('component_name'); ?></li>
							<?php
								endwhile;
							else :
							endif;
							?>
							</ul>
						</div>
					</div>
						<div style="background:#4a4a4a;text-align:center;padding:1.2em 1em;">
							<span style="color:#fff;font-size:1em;">Every <strong>TurboStack HomeLab</strong> is individually assembled by a VMTurbo engineer.</span>
						</div>
				</div>
				<div style="margin:2em 0 1em;text-align:center;">
					<div class="btn-group" role="group" aria-label="Default button group">
						<a class="btn btn-default" href="http://vmturbo.com/vmturbo-turbostack-giveaway-terms-conditions/" target="_blank">Terms & Conditions</a><a class="btn btn-default" href="#collapse" data-toggle="collapse">Past Winners »</a>
					</div>
				</div>
				
					<div id="collapse" class="collapse">
				<div class="table-responsive">
					<table class="table" style="background: #fafafa;">
					<tbody>
					<?php
					if( have_rows('past_winners') ):
						while ( have_rows('past_winners') ) : the_row();
					?>
					
					<tr>
						<th><?php the_sub_field('date'); ?></th>
						<td><?php the_sub_field('name'); ?></td>
					</tr>
					
					<?php
						endwhile;
					else :
					endif;
					?>
					
					</tbody>
					</table>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>



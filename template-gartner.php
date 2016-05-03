<?php
/**
 * Template Name: Temporary: Gartner
 */
?>
<style>
body {
		background: #222 url('http://vmturbo.com/wp-content/uploads/2016/04/multicloud-plex2.jpg') no-repeat center center;
		background-size:cover;
	}
	#home-jumbo-sub {
		text-align:center;
		padding:100px 0;
		position:relative;
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
#home-multi {
	padding:3em 1.5em;
}
#home-multi p {
		color:#eee;
		line-height:1.6em;
}
#home-multi .btn-vmt {
	margin-top:1em;
}
.mktoInline .modal-dialog {
	margin-top:100px !important;
}
#home-multi ul {
	color:#fff;
}
</style>

<div id="home-multi" class="container">
	<div class="row">
		<div class="col-sm-5">
			<img src="http://vmturbo.com/wp-content/uploads/2016/04/gartner-ipad.png" class="img-responsive hidden-xs" />
		</div>
		<div class="col-sm-7">
			<h1 style="text-align:left"><span style="color: #fff;border: 1px solid #595959;letter-spacing: 1px;text-transform: uppercase;padding: 1em 1.5em;background: rgba(255,255,255,.2);display: inline-block;margin-bottom: 1em;"><strong>Gartner</strong> Innovation Insight</span>
			<span style="color: #fff;text-align: left;font-weight: 600;line-height: 1.3em;display: block;font-size: .8em;">Dynamic Optimization Technology for Infrastructure Resources and Cloud Services</span></h1>
			<?php the_content(); ?>
		</div>
	</div>
</div>

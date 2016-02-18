<?php
/**
 * Template Name: Careers
 */
?>
<style type="text/css">

.job {
  display: inline-block;
  vertical-align: top;
  width: 50%;
  padding: 40px 30px;
}


.job-title {
  font-size: 24px;
  text-decoration: none;
  color: #454545;
}

.job-title:hover {
  color: #00A0DF; 
}

.tags span {
  color: #999;
  font-size: 12px;
  color: grayMediumDark;
}
.tags span:after {
  content: ', ';
}
.tags span:last-of-type:after {
  content: '';
}
.description {
  color: #999;
}

.jobs-teams {
  margin-bottom: 40px;
  padding: 0 30px
}
.jobs-teams .btn {
  margin: 0 8px 8px 0;
}
.jobs-teams .btn:first-of-type {
  margin-left: 0;
}
.jobs-teams .btn:last-of-type {
  margin-right: 0;
}
#jobs-container h3 {
	text-align: center;
    margin-bottom: 1em;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 35px;
    font-weight: 600;
}
#jobs-container .jobs-teams {
	text-align:center;
}
#jobs-container {
	padding-top:110px;
}
</style>
<div class="custom-landing">
	<div class="custom-header custom-header-video" data-vide-bg="mp4: //vmturbo.com/wp-content/themes/vmturbo/images/videos/career-loop.mp4" data-vide-options="muted: true, position: 0% 50%">
		<div class="container large">
			<h1 style="color: #fff;font-size: 3em;text-shadow: 1px 1px 1px #000;">Discover your full potential.</h1>
			<h2 style="color:#fff;font-size: 1.5em;text-shadow: 1px 1px 1px #000;margin-top:1.3em;font-weight:normal;">VMTurbo is accelerating the data center - but we need your help.</h2>
			<a href="//fast.wistia.net/embed/iframe/irsm000a0b?popover=true" class="wistia-popover[height=450,playerColor=7b796a,width=800]" style="color: #fff;font-family: 'Open sans', sans-serif;text-decoration: none;max-width: 250px;background: rgba(255,255,255,.2);padding: 15px 50px;border-radius: 5px;border: 1px solid #ccc;text-align: center;display: block;margin: 2em auto 0;">Watch the video &raquo;</a>
		</div>
	</div>
	
	
	<div style="background:#222;color:#fff;width:100%;padding:55px 0;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3 style="margin:0;display:inline;line-height:44px;">VMTurbo is hiring in engineering, marketing, operations and sales.
						<!--<select id="jobs-select" class="form-control" style="width:auto;display:inline;font-size:.9em;margin:0 .3em;height:auto">
						  <option>all</option>
						  <option>marketing</option>
						  <option>sales</option>
						  <option>engineering</option>
						  <option>training</option>
						</select>--></h3>
						<div class="pull-right"><a href="#jobs-container" id="jobs-btn" type="button" class="btn btn-vmt btn-sm" style="text-align:center;">View Jobs &raquo;</a></div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="testimonial-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-push-1">
					<div id="testimonial-box">
						<span class="test-quote">"VMTurbo is not a place where you come and get your hand held. You're given volition from day one to not only come up with your ideas, but then go and execute the ideas - without barriers."</span>
						<span class="test-author">Chris Graham, Marketing</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top:1em;">
			<div class="col-md-6">
				<div style="text-align:center">
				<h3 style="margin-top:1.5em;text-align: center;margin-bottom: 1em;color: #222;font-weight: normal;border-bottom: 1px solid #ccc;display: inline-block;padding:0 .5em .7em .5em;">Our Founder & Mission</h3><div class="flex-video-container">
				<iframe src="//www.youtube.com/embed/W2f8Fx-syfk?modestbranding=1&wmode=transparent&showinfo=0&autohide=1&fs=0&rel=0" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
				</div>
			</div>
			<div class="col-md-6">
				<div style="padding:20px;">
					<p style="margin-top:2em;line-height:1.7em;">As companies of all sizes adopt “cloud infrastructures” they have to think differently about how they operate and control their environment. Migrating physical assets into a virtual environment opens up unique possibilities to automate and control the next generation datacenter. Our solution is simple: VMTurbo delivers service assurance and infrastructure efficiency for cloud and virtualized environments. With an emphasis on prevention, our products provide intelligent and automated control plane for cloud and virtualized datacenters.  Backed by <a href="http://www.baincapitalventures.com/" target="_blank">Bain Capital Ventures</a>, <a href="http://www.globespancapital.com/" target="_blank">Globespan Capital Partners</a>, <a href="http://www.hcp.com/" target="_blank">Highland Capital Partners</a>, <a href="http://www.iconiqcapital.com/" target="_blank">ICONIQ Capital</a> and a number of strategic investors, our team has spent the past four years building a revolutionary product that has already helped hundreds of companies re-think the future of their data center and their journey to "the cloud."</p>

					<p style="line-height:1.7em">Our offering is both unique and dynamic in terms of its compelling capabilities, BUT our success will be dependent on the quality of people we hire. Recruiting the best, retaining them and setting them up for success will allow our business and employees to prosper and thrive.</p>
				</div>
				</div>
			</div>
			
			<section>
			  <div id="jobs-container">
				<h3>Open jobs</h3>
				<div class="jobs-teams">
				</div>
				<div class="jobs-list">
				</div>
			  </div>
			</section>  
			
			<script type="text/javascript">
			
			
	jQuery(document).ready(function($){
		
			url = 'https://api.lever.co/v0/postings/vmturbo?group=team&mode=json'

			function cleanString(string) {
			  if (string) {
				var cleanString = string.replace(/\s+/ig, "");
				return cleanString;
			  }
			  else {
				return "Uncategorized";
			  }
			}

			function nullCheck(string) {
			  if (!string) {
				var result = 'Uncategorized'
				return result;
			  }
			  else { 
				return string;
			  }
			}

			function createJobs(_data) {
			  for(i = 0; i < _data.length; i++) {
				
				var team = nullCheck(_data[i].title)
				var teamCleanString = cleanString(team);
				$('#jobs-container .jobs-teams').append(
					'<a href="#" class="btn btn-secondary btn-sm '+teamCleanString+'">'+team+'</a>'
				  );
			  }

			  for(i = 0; i < _data.length; i++) {
				for (j = 0; j < _data[i].postings.length; j ++) {
				  var posting = _data[i].postings[j] 
				  var title = posting.text
				  var description = posting.description  
				  var shortDescription = $.trim(description).substring(0, 250)
				  .replace('\n', ' ') + "...";
				  var location = nullCheck(posting.categories.location);
				  var locationCleanString = cleanString(location);
				  var commitment = nullCheck(posting.categories.commitment);
				  var commitmentCleanString = cleanString(commitment);
				  var team = nullCheck(posting.categories.team);
				  var teamCleanString = cleanString(team);
				  var link = posting.hostedUrl;
				
					$('#jobs-container .jobs-list').append(
				  '<div class="job '+teamCleanString+' '+locationCleanString+' '+commitmentCleanString+'">' +
					'<a class="job-title" href="'+link+'"">'+title+'</a>' +
					'<p class="tags"><span>'+team+'</span><span>'+location+'</span><span>'+commitment+'</span></p>' +
					'<p class="description">'+shortDescription+'</p>' +
					'<a class="btn btn-default btn-sm" href="'+link+'">Learn more</a>' +
				  '</div>'  
				
				  );
				}
			  }
			}
			
			function activateButtons(_data){
			  $('.jobs-teams').on("click", "a", function(e) {
				e.preventDefault();
				for(i = 0; i < _data.length; i++) {
				  var teamRaw = _data[i].title;
				  var team = cleanString(teamRaw);
				  var jobs = $(".jobs-list");if ($(this).hasClass(team)) {
					if ($(this).hasClass("active")) { 
					  $(this).removeClass("active");
					  jobs.find(".job").fadeIn("fast");
					}
					else {
					  $(".jobs-teams").find("a").removeClass("active");
					  $(this).addClass("active");
					  jobs.find("."+team).fadeIn("fast");
					  jobs.find(".job").not("."+team).fadeOut("fast");
					}
				  } 
				}
			  })
			}

			$.ajax({
			  dataType: "json",
			  url: url,
			  success: function(data){
				createJobs(data);
				activateButtons(data);
			  }
			});
			

			});

			</script>
			
	</div>
	
	
</div>

	<script type="text/javascript">
	jQuery(document).ready(function($){
			
		$("#testimonial-bg").backstretch("http://cdn.vmturbo.com/wp-content/uploads/2015/09/jim-crowd.jpg");	
	});

	</script>
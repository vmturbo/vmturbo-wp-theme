// declare global vars
var referObject = {};
var refUserId;
var inviteCount;
var completedJacket;
var isEmployee = false;
var isJacketPoll;

jQuery(document).ready(function( $ ) {

	// hide no js bar
	$("#nojs").hide();

	var isMobile = jQuery(".j-body-mobilehome-config").length > 0;
	var notMobile = jQuery('.j-body-mobilehome-config').length == 0;
	var isHomepage = jQuery('body').hasClass('j-body-welcome');
	isJacketPoll = (window.location.href.indexOf("polls/1085") > -1);

	// add wrapper to jive header - not currently styled
	jQuery('#j-globalNav').each(function() {
	  var newDiv = jQuery('<div/>').addClass('vmt-custom-nav clearfix');
	  jQuery(this).before(newDiv);
	  var next = jQuery(this).next();
	  newDiv.append(this).append(next);
	});

	// helper to expand twitter width
	$("#twitter-widget-0").each(
		 function(index, elem) {
			 elem.setAttribute("width","270");
		 }
	 );

	jQuery(".featured-mission-toggle").click(function() {
		event.preventDefault()
		jQuery("#gc-awards-more").slideToggle("slow");

		 jQuery(this).toggleClass("active");

		if (jQuery(this).text() == "More missions »")
		   jQuery(this).text("Less missions »")
		else
		   jQuery(this).text("More missions »");

	});

	// if not anonymous
	if (notMobile && isHomepage) {
		jQuery.ajax({
			url: "https://greencircle.vmturbo.com/api/core/v3/people/@me",
			type: 'GET',
			dataType: 'json',
			success: function(json) {

			  refUserId = json['id'];

			  if( json['id'] != -1 ){
				jQuery.ajax({
					url: "https://greencircle.vmturbo.com/api/core/v3/people/@me/securityGroups",
					type: 'GET',
					dataType: 'json',
					success: function(json) {

					  	var arrayLength = json['list'].length;
					  	var idArray = [];

					  	for (var i = 0; i < arrayLength; i++) {
						  idArray.push(json['list'][i]['id']);
					  	}

					  	// adding new menu
					  	if ( jQuery.inArray("1020", idArray) != -1 || jQuery.inArray("1008", idArray) != -1 ) {
							jQuery(".j-body-welcome div#jive-body").before("<div id='new-menu-container'> <ul class='clearfix' id='new-menu'> <li><a href='https://greencircle.vmturbo.com/community/industry-perspectives/content' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-2.png'><div class='new-menu-details'><strong>Industry Perspectives</strong><span>Chat with virtualization experts and enthusiasts.</span></div></a></li><li><a href='https://greencircle.vmturbo.com/community/products/content' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-1.png'><div class='new-menu-details'><strong>Product Forum</strong><span>Share tips and talk about the VMTurbo product.</span></div></a></li><li><a href='https://greencircle.vmturbo.com/community/gc-round-up' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-3.png'><div class='new-menu-details'><strong>GC Roundup</strong><span>Discussion about the Green Circle itself.</span></div></a></li><li><a href='https://greencircle.vmturbo.com/community/video' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-5.png'><div class='new-menu-details'><strong>Videos</strong><span>Product videos & customer interview videos.</span></div></a></li></ul> <ul class='clearfix' id='new-menu-secondary'> <li><a href='https://greencircle.vmturbo.com/community/vip-forum/content'>VIP Forum</a></li><li><a href='https://greencircle.vmturbo.com/community/education'>Education</a></li><li><a href='https://greencircle.vmturbo.com/community/custom-reports'>Custom Reports</a></li><li><a href='https://greencircle.vmturbo.com/store'>GC Store</a></li></ul></div>");
					  	} else {
							jQuery(".j-body-welcome div#jive-body").before("<div id='new-menu-container'> <ul class='clearfix' id='new-menu'> <li><a href='https://greencircle.vmturbo.com/community/industry-perspectives/content' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-2.png'><div class='new-menu-details'><strong>Industry Perspectives</strong><span>Chat with virtualization experts and enthusiasts.</span></div></a></li><li><a href='https://greencircle.vmturbo.com/community/products/content' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-1.png'><div class='new-menu-details'><strong>Product Forum</strong><span>Share tips and talk about the VMTurbo product.</span></div></a></li><li><a href='https://greencircle.vmturbo.com/community/gc-round-up' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-3.png'><div class='new-menu-details'><strong>GC Roundup</strong><span>Discussion about the Green Circle itself.</span></div></a></li><li><a href='https://greencircle.vmturbo.com/community/video' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-5.png'><div class='new-menu-details'><strong>Videos</strong><span>Product videos & customer interview videos.</span></div></a></li></ul> <ul class='clearfix' id='new-menu-secondary'> <li><a href='https://greencircle.vmturbo.com/community/vip-forum/content'>VIP Forum</a></li><li><a href='https://greencircle.vmturbo.com/community/education'>Education</a></li><li><a href='https://greencircle.vmturbo.com/community/custom-reports'>Custom Reports</a></li><li><a href='https://greencircle.vmturbo.com/store'>GC Store</a></li></ul></div>");
							jQuery("#j-main-wrapper").css("position","relative");
							jQuery(".j-body-home #j-main").before("<div id='gc-welcome-box' style='position:absolute;top:0;display:block'></div>");
							jQuery("#gc-welcome-box").backstretch("//cdn.vmturbo.com/wp-content/uploads/2014/04/gc-bg.jpg");
						};

						// pull in sales dash if in employee group
		              	if ( jQuery.inArray("1008", idArray) != -1 ){
		                  	// 1008 = gc employee group
		                  	//  1020 = dev group
		                  	isEmployee = true;

		                  	var xhttp = new XMLHttpRequest();
		                  	xhttp.onreadystatechange = function() {
		                  	  if (xhttp.readyState == 4 && xhttp.status == 200) {
		                  	    var dashContent = xhttp.responseText;
		                  	    jQuery('#j-main-wrapper #j-main').prepend(dashContent);
		                  	    // get ext props
								jQuery.ajax({
									headers: {
								        'Accept': 'application/json',
								        'Content-Type': 'application/json',
								        'X-Client-Id': 'em46ahmkhudvsihf8nyuixhc62w5ozkz.i'
								    },
								    url: "https://greencircle.vmturbo.com/api/core/v3/people/"+refUserId+"/extprops",
								    type: 'GET',
								    dataType: 'json',
								    success: function(json) {
								    	referObject = json;
								    	var countTest = JSON.stringify(referObject).match(/(.Refer\d{9}.)/g);
								    	if (countTest){
								    		inviteCount = countTest.length;
								    	}else{
								    		inviteCount = 0;
								    	}
								    	if (referObject['jacketCheck']){
								    		completedJacket = true;
								    	}
								    	jQuery('#toolbox-nav').append('<div class="referralCount clearfix"><span class="referral-title">Invites Sent</span><span class="referral-count">'+inviteCount+'</span></div>');
								    	jQuery('#toolbox-nav').append('<div class="socialLink">https://greencircle.vmturbo.com/welcome?inviteID='+refUserId+'</div>');
								    	jQuery('#toolbox-nav').append('<ul><li><a href="https://twitter.com/home?status=Join%20the%20GCC%20-%20ask%20questions%20%26%20have%20convos%20on%20%23application%20%26%20%23cloud%20w%20the%20best%20in%20tech%20https%3A//greencircle.vmturbo.com/welcome?inviteID='+refUserId+'" target="_blank">Share on Twitter</a></li><li><a href="https://www.facebook.com/dialog/feed?app_id=134530986736267&link=https%3A%2F%2Fgreencircle.vmturbo.com%2Fwelcome%3FinviteID%3D'+refUserId+'&name=Join+the+Green+Circle+Community&description=The+Green+Circle+is+a+community+where+you+can+ask+questions%2C+join+discussions%2C+and+read+the+latest+on+application+%26+cloud+management+with+the+best+minds+in+the+industry.&redirect_uri=http://facebook.com/" target="_blank">Share on Facebook</a></li><li><a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//greencircle.vmturbo.com/welcome?inviteID='+refUserId+'&title=Join%20the%20Green%20Circle&summary=The%20Green%20Circle%20is%20a%20community%20where%20you%20can%20ask%20questions,%20join%20discussions,%20and%20read%20the%20latest%20on%20application%20%26%20cloud%20management%20with%20the%20best%20minds%20in%20the%20industry.&source=" target="_blank">Share on LinkedIn</a></li></ul>');
								    	//

								    },
								    error: function(e) {
								    	console.log(e);
									}
								})
		                  	  }
		                  	};
		                  	xhttp.open("GET", "https://vmturbo.com/wp-content/themes/vmturbo/gc/salesdash.html", true);
		                  	xhttp.send();
		              	}
					},
					error: function(e) { console.log(e); }
				});
			  }else{
			  		//user is not logged in
      				jQuery("#new-menu-container").css("border-bottom", "2px solid #22791E");
					//jQuery(".j-body-welcome #j-main").before("<div id='gc-welcome-box'><div class='container'><h2>Welcome to the Green Circle!</h2><span class='gc-disclaimer'>Join the fastest growing online forum in virtualization and connect with some of the best and the brightest in the industry. Membership is completely free -  enter your e-mail to get started.</span><div id='gc-home-signup' class='clearfix'><form action='https://greencircle.vmturbo.com/login.jspa' method='post' id='registerform' class='j-form j-form-domaincheck' name='registerform01' autocomplete='off'><input type='email' name='emailAddress' id='emailAddress' value='' class='jive-validate-email' placeholder='E-Mail Address' required><input type='submit' id='register-submit' name='regsubmit' value='Sign Up' class='jive-validate-confirm'><input type='hidden' name='method:register' value='true'><input type='hidden' name='registerOnly' value='true'></form></div><a href='https://greencircle.vmturbo.com/login.jspa' id='gc-login-link'>Already a member? Log in here &raquo;</a></div></div>");
					jQuery(".j-body-welcome #j-main").before("<div id='gc-welcome-box'><div class='container'><h2>Welcome to the Green Circle!</h2><span class='gc-disclaimer'>Join the fastest growing online forum in virtualization and connect with some of the best and the brightest in the industry. Membership is completely free -  enter your e-mail to get started.</span><div id='gc-home-signup' class='clearfix'><a id='register-submit' onclick='registerForm()' style='float:none;display:block;margin:0px auto;cursor:pointer;'>SIGN UP</a></div><a href='https://greencircle.vmturbo.com/login.jspa' id='gc-login-link'>Already a member? Log in here &raquo;</a></div></div>");
					jQuery("#new-menu-secondary").prepend("<li style='background: rgba(29, 29, 29, 0.5);width:100%;height:100%;position:absolute;left: 0;top: 0;cursor: no-drop;'></li>");
					jQuery("#new-menu-secondary").prepend("<div id='popup-bar'><span>These forums are only for registered members. <a href='https://greencircle.vmturbo.com/login.jspa?registerOnly=true'><strong>Register for free</strong></a> to get access!</span></div>");
					jQuery( "#new-menu-secondary" ).hover(
					  function() {
							jQuery("#popup-bar").stop().fadeIn(500);
					  }, function() {
							stop();
							jQuery("#popup-bar").stop().fadeOut(200);
					  }
					);
					jQuery("#gc-welcome-box").backstretch("//cdn.vmturbo.com/wp-content/uploads/2014/04/gc-bg.jpg");
					jQuery("#gc-welcome-box").fadeIn(500);
					jQuery(".j-body-welcome div#jive-body").before("<div id='new-menu-container'> <ul class='clearfix' id='new-menu'> <li><a href='https://greencircle.vmturbo.com/community/industry-perspectives/content' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-2.png'><div class='new-menu-details'><strong>Industry Perspectives</strong><span>Chat with virtualization experts and enthusiasts.</span></div></a></li><li><a href='https://greencircle.vmturbo.com/community/products/content' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-1.png'><div class='new-menu-details'><strong>Product Forum</strong><span>Share tips and talk about the VMTurbo product.</span></div></a></li><li><a href='https://greencircle.vmturbo.com/community/gc-round-up' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-3.png'><div class='new-menu-details'><strong>GC Roundup</strong><span>Discussion about the Green Circle itself.</span></div></a></li><li><a href='https://greencircle.vmturbo.com/community/video' class='clearfix'><img src='//vmturbo.com/wp-content/uploads/2014/04/icon-5.png'><div class='new-menu-details'><strong>Videos</strong><span>Product videos & customer interview videos.</span></div></a></li></ul> <ul class='clearfix' id='new-menu-secondary'> <li><a href='https://greencircle.vmturbo.com/community/vip-forum/content'>VIP Forum</a></li><li><a href='https://greencircle.vmturbo.com/community/education'>Education</a></li><li><a href='https://greencircle.vmturbo.com/community/custom-reports'>Custom Reports</a></li><li><a href='https://greencircle.vmturbo.com/store'>GC Store</a></li></ul></div>");

      				getReferrer();
			  }
			},
			error: function(e) { console.log(e); }
		}); // @me ajax
	} // end if not mobile and homepage

	// comment this out on monday
	//isJacketPoll = false;
	// test poll
	if (isJacketPoll){
		jQuery.ajax({
			url: "https://greencircle.vmturbo.com/api/core/v3/people/@me",
			type: 'GET',
			dataType: 'json',
			success: function(json) {
			  	refUserId = json['id'];
				jQuery.ajax({
					headers: {
				        'Accept': 'application/json',
				        'Content-Type': 'application/json',
				        'X-Client-Id': 'em46ahmkhudvsihf8nyuixhc62w5ozkz.i'
				    },
				    url: "https://greencircle.vmturbo.com/api/core/v3/people/"+refUserId+"/extprops",
				    type: 'GET',
				    dataType: 'json',
				    async: false,
				    success: function(json) {
				    	referObject = json;
				    	if (referObject['jacketCheck']){
				    		completedJacket = true;
				    		console.log('already voted');
				    	}
				    },
				    error: function(e) {
				    	console.log(e);
					}
				})
				if (completedJacket != true){
					jacketCheck();
				}
			},
		    error: function(e) {
		    	console.log(e);
			}
		})
	}

}); // end document ready


// get userID and attribute invite to user based on query string
function getReferrer(){
	var params={};window.location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(str,key,value){params[key] = value;});
	if (params['inviteID']){
		refUserId = params['inviteID'];
		//jQuery('#registerform').attr('onsubmit','checkReferal('+refUserId+')');
		jQuery('#jive-nav-link-reg').attr('href', '/create-account.jspa?inviteID='+refUserId)
		jQuery('#jive-nav-link-reg').click(function(){
			var intA = window.setInterval(function(){
				if(jQuery('#jive-user-registration-form #email').length){
					jQuery('#jive-user-registration-form .jive-form-button-submit').attr('onclick','checkReferal('+refUserId+')');
					clearInterval(intA);
				}
			},200);
		})
	}
}

// on invite: post to bridge servlet
function checkReferal(id){
	//var email = jQuery('#emailAddress').val();
	var email = jQuery('#jive-user-registration-form #email').val();
	var inviteId = id.toString();
	var data = "em="+email+"&userId="+inviteId;
	var url = "https://gcapiext.vmturbo.com/";
	jQuery.ajax({
		headers: {
	        'Accept': 'application/json',
	        'Content-Type': 'application/x-www-form-urlencoded'
	    },
	    url: url,
	    type: 'POST',
	    data: data,
	    async: false,
	    success: function(data) {
	   // 	console.log(data);
	    },
	    error: function(e) {
	    	console.log(e);
		}
	});
}

// on jacket mission: append key value to object and post to /extprops
function jacketCheck(){
	referObject["jacketCheck"] = "true";

	jQuery.ajax({
		headers: {
	        'Accept': 'application/json',
	        'Content-Type': 'application/json',
	        'X-Client-Id': 'em46ahmkhudvsihf8nyuixhc62w5ozkz.i'
	    },
	    url: "https://greencircle.vmturbo.com/api/core/v3/people/"+refUserId+"/extprops",
	    type: 'POST',
	    data: JSON.stringify(referObject),
	    dataType: 'json',
	    success: function(json) {
	    	console.log(json);
	    },
	    error: function(e) {
	    	console.log(e);
		}
	});
}

// get 10 of member's followers
function getFollowers(){
	jQuery.ajax({
		headers: {
	        'Accept': 'application/json',
	        'Content-Type': 'application/json',
	        'X-Client-Id': 'em46ahmkhudvsihf8nyuixhc62w5ozkz.i'
	    },
	    url: "https://greencircle.vmturbo.com/api/core/v3/people/"+refUserId+"/@following?count=10",
	    type: 'GET',
	    dataType: 'json',
	    success: function(json) {
	    	console.log(json);
	    	console.log(json['list'].length)
	    	for (i=0;i<json['list'].length;i++) {
	    		var displayName = json['list'][i]['displayName'];
	    		var id = json['list'][i]['id'];
	    		var url = json['list'][i]['resources']['self']['ref'];
	    		var avatar = json['list'][i]['resources']['avatar']['ref'];
	    		var html = '<img src="'+avatar+'" alt="'+displayName+' avatar" /> <br /> <a href="'+url+'">'+displayName+'</a> <br />';
	    		jQuery('#j-main-wrapper').prepend(html);
	    	}
	    },
	    error: function(e) {
	    	console.log(e);
		}
	})
}

function registerForm(){
	jQuery('#jive-nav-link-reg').trigger('click');
}
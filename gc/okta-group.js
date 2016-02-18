jQuery(document).ready(function($) {
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

					  	// if in employee group
					  	if ( jQuery.inArray("1008", idArray) != -1 ) {
							jQuery('#createGCBtn').click(function(){
								jQuery('#formOptions').fadeOut(500, function(){
									var formHtml = '';
									formHtml += '<h5>Create GC User</h5>';
									formHtml += '<label for="fname">First Name</label>';
									formHtml += '<input type="text" name="fname" placeholder="First Name"/>';
									formHtml += '<label for="lname">Last Name</label>';
									formHtml += '<input type="text" name="lname" placeholder="Last Name"/>';
									formHtml += '<label for="email">Email</label>';
									formHtml += '<input type="text" name="email" placeholder="Email" />';
									formHtml += '<label for="username">Username</label>';
									formHtml += '<input type="text" name="username" placeholder="Username" />';
									formHtml += '<label for="password">Password</label>';
									formHtml += '<input type="text" name="password" placeholder="Password" />';
									formHtml += '<div style="clear:both;margin-bottom: 10px;"></div>';
									formHtml += '<a class="j-btn-global" onclick="createGCUser()">Create</a>';
									formHtml += '<br><br><br><a class="backLink" onclick="backOkta()">Go Back</a>';
									jQuery('#loadForm').html(formHtml);
								})
							})
							jQuery('#createZenBtn').click(function(){
								jQuery('#formOptions').fadeOut(500, function(){
									var formHtml = '';
									formHtml += '<h5>Create Organization in Support Portal</h5>';
									formHtml += '<label for="org">Organization Name</label>';
									formHtml += '<input type="text" name="org" placeholder="Organization Name"/>';
									formHtml += '<div style="clear:both;margin-bottom: 10px;"></div>';
									formHtml += '<a class="j-btn-global" onclick="createZenOrg()">Create</a>';
									formHtml += '<br><br><br><a class="backLink" onclick="backOkta()">Go Back</a>';
									jQuery('#loadForm').html(formHtml);
								})
							})
							jQuery('#createOktaBtn').click(function(){
								jQuery('#formOptions').fadeOut(500, function(){
									var formHtml = '';
									formHtml += '<h5>Create Okta User and Assign To Zendesk</h5>';
									formHtml += '<label for="fname">First Name</label>';
									formHtml += '<input type="text" name="fname" placeholder="First Name"/>';
									formHtml += '<label for="lname">Last Name</label>';
									formHtml += '<input type="text" name="lname" placeholder="Last Name"/>';
									formHtml += '<label for="email">Email</label>';
									formHtml += '<input type="text" name="email" placeholder="Email" />';
									formHtml += '<label for="org">Organization Name</label>';
									formHtml += '<input type="text" name="org" placeholder="Organization Name"/>';
									formHtml += '<div style="clear:both;margin-bottom: 10px;"></div>';
									formHtml += '<a class="j-btn-global" onclick="createOktaUser()">Create</a>';
									formHtml += '<br><br><br><a class="backLink" onclick="backOkta()">Go Back</a>';
									jQuery('#loadForm').html(formHtml);
								})
							})
					  	}
					},
				  	error:function(json){
				  		console.log(json)
				  	}
				});
			}
		},
		error:function(json){
	  		console.log(json)
	  	}
	});
})
function createOktaUser(){
	jQuery('.successMsg, .errorMsg').fadeOut(100);
	var fname = jQuery('input[name=fname').val();
	var lname = jQuery('input[name=lname').val();
	var email = jQuery('input[name=email').val();
	var org = jQuery('input[name=org').val();
	var data = "org="+org+"&email="+email+"&fname="+fname+"&lname="+lname;
	var url = "https://gcapiext.vmturbo.com/okta.php";
	jQuery.ajax({
		headers: {
	        'Accept': 'application/json',
	        'Content-Type': 'application/x-www-form-urlencoded'
	    },
	    url: url,
	    type: 'POST',
	    data: data,
	    async: false,
	    success: function(json) {
	    	console.log(json)
	    	if (!json['id']){
	    		if(json['error']){
	    			jQuery('#loadForm').prepend('<div class="errorMsg"><p>There was an error creating the user in Okta.<br><strong>'+json['error']+'</strong></p></div>');
	    		}else{
	    			jQuery('#loadForm').prepend('<div class="errorMsg"><p>There was an error creating the user in Okta.</p></div>');
	    		}
	    	}else{
	    		jQuery('#loadForm').prepend('<div class="successMsg"><p>User has been created successfully in Okta. User has been added to Okta customer group and assigned to Zendesk.</p></div>');
	    	}
	    },
	    error: function(json) {
	    	console.log(json);
	    	jQuery('#loadForm').prepend('<div class="errorMsg"><p>There was an error creating the user in Okta.</p></div>');
		}
	});
}
function createZenOrg(){
	jQuery('.successMsg, .errorMsg').fadeOut(100);
	var org = jQuery('input[name=org').val();
	var data = "org="+org;
	var url = "https://gcapiext.vmturbo.com/zendeskOrg.php";
	jQuery.ajax({
		headers: {
	        'Accept': 'application/json',
	        'Content-Type': 'application/x-www-form-urlencoded'
	    },
	    url: url,
	    type: 'POST',
	    data: data,
	    async: false,
	    success: function(json) {
	    	var result = JSON.parse(json);
	    	if ( result['error'] ){
	    		var desc = result['details']['name'][0]['description'];
	    		jQuery('#loadForm').prepend('<div class="errorMsg"><p>There was an error creating this organization in Zendesk.<br /><strong>'+desc+'</strong></p></div>');
	    	}else{
	    		jQuery('#loadForm').prepend('<div class="successMsg"><p>Organization has been created successfully!</p></div>');
	    	}
	    },
	    error: function(json) {
	    	console.log(json);
	    	jQuery('#loadForm').prepend('<div class="errorMsg"><p>There was an error creating the Organization in Zendesk.</p></div>');
		}
	});
}
function createGCUser(){
	jQuery('.successMsg, .errorMsg').fadeOut(100);
	var fname = jQuery('input[name=fname').val();
	var lname = jQuery('input[name=lname').val();
	var email = jQuery('input[name=email').val();
	var username = jQuery('input[name=username').val();
	var password = jQuery('input[name=password').val();
	var pass = true;

	if (pass == true) {
		var personObj = {
		    "emails" : [ {
		        "value" : email,
		        "type" : "work",
		        "primary" : true,
		        "jive_label" : "Email"
		    } ],
		    "jive" : {
		        "password" : password,
		        "username" : username
		    },
		    "name" : {
		      	"familyName" : lname,
		      	"givenName" : fname
		    }
		};
		// create user
	  	jQuery.ajax({
			headers: {
	        	'Accept': 'application/json',
	        	'Content-Type': 'application/json'
	    	},
	    	url: "https://greencircle.vmturbo.com/api/core/v3/people?welcome=true",
	    	type: 'POST',
	    	data: JSON.stringify(personObj),
	    	dataType: 'json',
	    	success: function(json) {
	    		// user created, now add to security group
	    		var newUserId = json['id'];
	    		var userURLArray = ["https://greencircle.vmturbo.com/api/core/v3/people/"+newUserId];
	    		console.log(userURLArray);
	    		jQuery.ajax({
					headers: {
			        	'Accept': 'application/json',
			        	'Content-Type': 'application/json'
			    	},
			    	url: "https://greencircle.vmturbo.com/api/core/v3/securityGroups/1003/members",
			    	type: 'POST',
			    	data: JSON.stringify(userURLArray),
			    	dataType: 'json',
		    		success: function(json) {
		    			jQuery('#loadForm').prepend('<div class="successMsg"><p>User has been created successfully!</p></div>');
		    		},
		    		error: function(json) {
		    			jQuery('#loadForm').prepend('<div class="errorMsg"><p>There was an error creating user</p></div>');
						console.log(json);
					}
				});
			},
			error: function(json) {
				jQuery('#loadForm').prepend('<div class="errorMsg"><p>There was an error creating user</p></div>');
				console.log(json);
			}
		});
	}else{
		alert('Please Fill Out All Fields');
	}
}

function backOkta(){
	jQuery('#loadForm').html('');
	jQuery('#formOptions').fadeIn(500);
}
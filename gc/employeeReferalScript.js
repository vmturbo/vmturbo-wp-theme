jQuery(document).ready(function($) {
	jQuery('#jive-body').prepend('<div id="employeeResults"></div>');
	var employees = [];
	var x = 0;
	var more = true;
	while (more == true) {
		var startIndex = x*99;
		var url = "https://greencircle.vmturbo.com/api/core/v3/securityGroups/1008/members?fields=id,-resources,displayName&count=99&startIndex="+startIndex.toString();
		jQuery.ajax({
		    url: url,
		    type: 'GET',
		    dataType: 'json',
		    async: false,
		    success: function(json) {
		    	var nextUrl = json['links']['next'];
		    	if (! nextUrl ) {
		    		more = false;
		    	}
		    	var list = json['list'];
		    	for ( i = 0; i<list.length; i++ ) {
		    		var userId = list[i]['id'];
		    		var name = list[i]['displayName'];
		    		jQuery.ajax({
						headers: {
					        'Accept': 'application/json',
					        'Content-Type': 'application/json',
					        'X-Client-Id': 'em46ahmkhudvsihf8nyuixhc62w5ozkz.i'
					    },
					    url: "https://greencircle.vmturbo.com/api/core/v3/people/"+userId+"/extprops",
					    type: 'GET',
					    dataType: 'json',
					    async: false,
					    success: function(json) {
					    	var attr = [ userId, name, json ];
		    				employees.push(attr);
		    				jQuery('#employeeResults').append(userId+', '+name+', '+JSON.stringify(json)+'<br/>');
					    },
					    error: function(e) {
					    	console.log(e);
						}
					})
		    	}
			},
			error: function(e) {
				more = false;
			}
		});
		console.log(x);
		x++;
	}
	console.log(employees);
});
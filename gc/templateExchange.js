jQuery(document).ready(function($) {

	// navigate to content on button click
	jQuery('#browseTemplates').click(function(){
		window.location.href = "https://greencircle.vmturbo.com/groups/template-exchange/content";
	});

	// show create form on button click
	jQuery('#createTemplate').click(function(){
		jQuery('#createTemplate, #browseTemplates').fadeOut(600, function(){
			jQuery('#formContainter').slideDown(800,function(){});
		});
	});

	// create template details form
	jQuery('#selectTemplate').change(function(event){
		var type = jQuery('#selectTemplate').val();
		jQuery('.errorFields').fadeOut(100);
		var formHtml = '';
		jQuery('#templateForm input[type=submit]').attr('disabled','disabled');
		if (type=="Physical Machine"){
			formHtml += '<h5>'+type+' Details</h5>';
			formHtml += '<label for="vendor">Vendor</label>';
			formHtml += '<input type="text" name="vendor" placeholder="Vendor" class="longInput" required="" />';
			formHtml += '<label for="model">Model</label>';
			formHtml += '<input type="text" name="model" placeholder="Model" class="longInput" required="" />';
			formHtml += '<label for="desc">Description</label>';
			formHtml += '<input type="text" name="desc" placeholder="Description" class="longInput" required="" />';
			formHtml += '<label for="price">Price</label>';
			formHtml += '<input type="text" name="price" placeholder="Price" required="" />';
			formHtml += '<label for="numCores">Number of CPU Cores</label>';
			formHtml += '<input type="text" name="numCores" placeholder="CPU Count" required="" />';
			formHtml += '<label for="cpuCoreSpeed">CPU Core Speed [Mhz]</label>';
			formHtml += '<input type="text" name="cpuCoreSpeed" placeholder="Mhz" required="" />';
			formHtml += '<label for="memSize">Amount of Memory [MB]</label>';
			formHtml += '<input type="text" name="memSize" placeholder="MB" required="" />';
			formHtml += '<label for="networkThroughputSize">Network Throughput [MB/s]</label>';
			formHtml += '<input type="text" name="networkThroughputSize" placeholder="MB/s" required="" />';
			formHtml += '<label for="ioThroughputSize">IO Throughput [MB/s]</label>';
			formHtml += '<input type="text" name="ioThroughputSize" placeholder="MB/s" required="" />';
			formHtml += '<div class="clear"></div>';
			jQuery('#templateForm input[type=submit]').removeAttr('disabled');
		}
		if (type=="Storage"){
			formHtml += '<h5>'+type+' Details</h5>';
			formHtml += '<label for="storageSize">Storage Capacity [GB]</label>';
			formHtml += '<input type="text" name="storageSize" placeholder="GB" required="" />';
			formHtml += '<label for="accessSpeed">IOPS</label>';
			formHtml += '<input type="text" name="accessSpeed" placeholder="IOPS" required="" />';
			formHtml += '<label for="price">Price</label>';
			formHtml += '<input type="text" name="price" placeholder="Price" required="" />';
			jQuery('#templateForm input[type=submit]').removeAttr('disabled');
		}
		formHtml += '<div class="clear"></div>';
		jQuery('.loadTypeForm').html(formHtml);
	})

	// on form submit: validate then create template post
	jQuery('#templateForm').submit(function(event) {
		// prevent submit
		event.preventDefault();

		// declare vars
		var title = jQuery('input[name=templateName').val();
		var type = jQuery('#selectTemplate').val();
		var price = jQuery('input[name=price').val();
		var errorStr = '';
		var submit = true;

		if( title.length < 2 ){
			submit = false;
			errorStr = 'You must title your template to continue';
		}
		if (type=="Physical Machine"){
			var vendor = jQuery('input[name=vendor').val();
			var model = jQuery('input[name=model').val();
			var desc = jQuery('input[name=desc').val();
			var numCores = jQuery('input[name=numCores').val();
			var cpuCoreSpeed = jQuery('input[name=cpuCoreSpeed').val();
			var memSize = jQuery('input[name=memSize').val();
			var networkThroughputSize = jQuery('input[name=networkThroughputSize').val();
			var ioThroughputSize = jQuery('input[name=ioThroughputSize').val();
			if( vendor.length < 1 || model.length < 1 || desc.length < 2 || numCores.length < 1 || cpuCoreSpeed.length < 1 || memSize.length < 1 || networkThroughputSize.length < 1 || price.length < 1 ){
				submit = false;
				errorStr = 'Please complete all the fields to submit your template';
			}
		}
		if (type=="Storage"){
			var storageSize = jQuery('input[name=storageSize').val();
			var accessSpeed = jQuery('input[name=accessSpeed').val();
			if( storageSize.length < 1 || accessSpeed.length < 1 || price.length < 1 ){
				submit = false;
				errorStr = 'Please complete all the fields to submit your template';
			}
		}
		if (submit == true && errorStr == ''){
			// passed validation
			// now create template
			if (type=="Physical Machine"){
				var templateHtml = 'Type: '+type+'<br><br>Display Name: '+title+'<br/><br/>Vendor: '+vendor+'<br/><br/>Model: '+model+'<br/><br/>Description: '+desc+'<br/><br/>Price: '+price+'<br/><br/>CPU Cores: '+numCores+'<br/><br/>CPU Core Speed [Mhz]: '+cpuCoreSpeed+'<br/><br/>Amount of Memory [MB]: '+memSize+'<br/><br/>Network Throughput [MB/s]: '+networkThroughputSize+'<br/><br/>IO Throughput [MB/s]: '+ioThroughputSize;
			    var templateObject = {
			    	"type": type,
			    	"name": title,
			    	"price": price,
			    	"numCores": numCores,
			    	"cpuCoreSpeed": cpuCoreSpeed,
			    	"networkThroughputSize": networkThroughputSize,
			    	"ioThroughputSize": ioThroughputSize,
			    	"memSize": memSize,
			    	"vendor": vendor,
			    	"model": model,
			    	"description": desc
			    };
			}
			if (type=="Storage"){
				var templateHtml = 'Type: '+type+'<br><br>Display Name: '+title+'<br/><br/>Price: '+price+'<br/><br/>Storage Capacity [GB]: '+storageSize+'<br/><br/>IOPS: '+accessSpeed;
			    var templateObject = {
			    	'type': type,
			    	'name': title,
			    	'accessSpeed': accessSpeed,
			    	'storageSize': storageSize,
			    	'price': price
			    };
			}
			var templateDoc =  {
			  	"content":
			      {
			      "type": "text/html",
			      "text": templateHtml,
			      "editable" : "false"
			      },
			  	"subject": title,
			  	"type": "document",
			  	"restrictComments": "true",
			  	"visibility": "place",
			  	"categories": [type]
			}
			var placeId = "13470";
			var createDocURL = "https://greencircle.vmturbo.com/api/core/v3/places/"+placeId+"/contents";
			jQuery.ajax({
				headers: {
			        'Accept': 'application/json',
			        'Content-Type': 'application/json'
			    },
			    url: createDocURL,
			    type: 'POST',
			    data: JSON.stringify(templateDoc),
			    dataType: 'json',
			    success: function(json) {
			    		console.log(json);
			    		var docID = json['id'];
			    		var contentID = json['contentID'];
						var createPropsURL = "https://greencircle.vmturbo.com/api/core/v3/contents/"+contentID+"/extprops";
						jQuery.ajax({
							headers: {
						        'Accept': 'application/json',
						        'Content-Type': 'application/json',
						        'X-Client-Id': 'em46ahmkhudvsihf8nyuixhc62w5ozkz.i'
						    },
						    url: createPropsURL,
						    type: 'POST',
						    data: JSON.stringify(templateObject),
						    dataType: 'json',
						    success: function(json) {
								jQuery('#formContainter').fadeOut(800,function(){
					    			jQuery('#templateExchangeWrapper').append('<div class="successMsg"><h3>Your template has been created successfully!</h3><p>Thank you for contributing to the template exchange! You just earned 50 points by posting your custom template. To view your template <a href="https://greencircle.vmturbo.com/docs/DOC-'+docID+'">click here</a>. Like or rate other templates to help users in the community while gathering some extra points for yourself. To browse all templates <a href="https://greencircle.vmturbo.com/groups/template-exchange/content">visit here</a>. </p></div><br>');
					    		});
						    	console.log(json);
						    },
						    error: function(e) {
								jQuery('#formContainter').fadeOut(800,function(){
						    		jQuery('#templateExchangeWrapper').append('<div class="errorMsg"><h3>There was an error with your  submission</h3><p>Unfortunately your template submission request failed. Please try again in a few minutes.<br> If you see this message more than once, please contact the <a href="mailto:gregory.dunn@vmturbo.com">GC support team</a></p></div><br>');
						    	});
						    	console.log(e);
							}
						});
					},
				error: function() {
						jQuery('#formContainter').fadeOut(800,function(){
				    		jQuery('#templateExchangeWrapper').append('<div class="errorMsg"><h3>There was an error with your  submission</h3><p>Unfortunately your template submission request failed. Please try again in a few minutes.<br> If you see this message more than once, please contact the <a href="mailto:gregory.dunn@vmturbo.com">GC support team</a></p></div><br>');
				    	});
					}
			});
		}else{
			jQuery('.errorFields').fadeIn(400);
			jQuery('.errorFields').html(errorStr);
		}
	});
});
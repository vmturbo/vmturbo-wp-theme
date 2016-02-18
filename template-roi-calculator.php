<?php
/**
 * Template Name: ROI Calculator
 */
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="main-block">
					<div id="header-block">
					<h1><?php the_title() ; ?></h1>
					</div>

					<div id="content-block">
						<div id="content-about" class="row text-center">
							<div class="col-md-10 col-md-push-1">
							<p>We get it. You have a business to support. You’re not here to run science experiments. Any software you bring into your environment must work, and bring value to the business.</p>
							</div>
						</div>
					</div>
					<div id="feature-row">
						<div class="row">
						<div class="col-md-4">
							<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/icon-app2.png" class="img-responsive" />
							<div class="feature-header">
								<h4>Assure Performance</h4>
							<span>37% reduction in latency, applications get the exact resources they need to perform.</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-header">
								<img src="http://cdn.vmturbo.com/wp-content/uploads/2014/04/icon-db.png" class="img-responsive" />
								<h4>Reduce CapEx</h4>
							</div>
							<span>Increase VM density by 30%+ without risking service disruptions.</span>
						</div>
						<div class="col-md-4">
							<div class="feature-header">
								<img src="http://vmturbo.com/wp-content/uploads/2014/04/icon-roi.png" class="img-responsive" />
								<h4>3 Month ROI</h4>
							</div>
							<span>89% of customers see a return in 3 months.</span>
						</div>
						</div>
					</div>
					<div id="break-block">
						<span>What kind of impact can VMTurbo have on your environment?</span>
					</div>

					<div id="form-container">
					<form id="roi-form" name="roi_calc" onsubmit="return validate(event)" action="<?= esc_url(home_url('/')); ?>solutions/return-on-investment/roi-calculator-results/" method="post">
					<div class="roi-input-steps">
					<h4 class="form-title">Environment:</h4>
					<section class="roi-input-block">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="server_count">Current number of hosts</label>
								<input type="text" id="server_count" name="server_count" value="25" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="vm_count">Current number of VMs</label>
								<input type="text" id="vm_count" name="vm_count" value="863" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="cpu_sockets">Total number CPU sockets</label>
								<label class="hint pull-right">If 0, dual socket hosts will be assumed.</label>
								<input type="text" id="cpu_sockets" name="cpu_sockets" value="50" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="growth_rate">Annual growth of VM Count</label>
								<div class="input-group">
									<input type="text" id="growth_rate" name="growth_rate" value="20" class="form-control"/>
									<span class="input-group-addon">%</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="tb_count">Current number of terabytes</label>
								<input type="text" id="tb_count" name="tb_count" value="100" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="st_wasted">Percent of storage capacity available</label>
								<div class="input-group">
									<input type="text" id="st_wasted" name="st_wasted" value="10" class="form-control"/>
									<span class="input-group-addon">%</span>
								</div>
							</div>
							<div class="form-group">
								<label for="st_growth_rate">Annual growth of storage environment</label>
								<div class="input-group">
									<input type="text" id="st_growth_rate" name="st_growth_rate" value="10" class="form-control"/>
									<span class="input-group-addon">%</span>
								</div>
							</div>
							<div class="form-group">
								<label for="tb_cost">Cost per terabyte</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" id="tb_cost" name="tb_cost" value="4500" class="form-control"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="hardserver_cost">Hardware cost per host</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" id="hardserver_cost" name="hardserver_cost" value="20000" class="form-control"/>
									<input type="hidden" name="hwpower_cost" value="10"/>
									<input type="hidden" name="hwmaint_cost" value="10"/>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="softserver_cost">Software cost per host</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" id="softserver_cost" name="softserver_cost" value="7000" class="form-control"/>
									<input type="hidden" name="renewal_cost" value="10"/>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						</div>
					</div>
					</section>
					<h4 class="form-title">Support Staff Costs</h4>
					<section class="roi-input-block">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label for="hrs_cost">Average hourly cost per full time employee</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" id="hrs_cost" name="hrs_cost" value="50" class="form-control"/>
								</div>
								</div>
								<div class="form-group">
									<label for="inc_emps">Number of FTEs working on VM related tickets</label>
									<input type="text" id="inc_emps" name="inc_emps" value="12" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="ticket_hr_count">Monthly hours spent on resolving VM related tickets per FTE</label>
									<input type="text" id="ticket_hr_count" name="ticket_hr_count" value="20" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="maint_emps">Number of FTEs working on performance assurance</label>
									<input type="text" id="maint_emps" name="maint_emps" value="10" class="form-control"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="maint_hr_count">Monthly hours spent on performance assurance per FTE</label>
									<input type="text" id="maint_hr_count" name="maint_hr_count" value="62" class="form-control"/>
									<label class="hint">Considering rightsizing, re-configurations, migrations, upgrades, ect.</label>
								</div>
								<div class="form-group">
									<label for="plan_emps">Number of FTEs working on capacity planning, consolidation, or growth</label>
									<input type="text" id="plan_emps" name="plan_emps" value="12" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="plan_hr_count">Monthly hours spent on capacity planning, consolidation, or growth</label>
									<input type="text" id="plan_hr_count" name="plan_hr_count" value="36" class="form-control"/>
									<label class="hint">Considering the addition of workloads, consolidations, migrations, DR, Hypervisor changes, HA, ect.</label>
								</div>
								<input type="hidden" name="inc_hr_count" value="240" />
								<input type="hidden" name="hrs_maint" value="620" />
								<input type="hidden" name="hrs_plan" value="432" />
							</div>
						</div>
					</section>
					<h4 class="form-title">VMTurbo Inputs</h4>
					<section>
						<div class="row">
							<div class="col-md-6 roi-input-block">
								<div class="form-group">
									<label for="density_imp">Increase in virtualization density</label>
									<label class="hint inline-hint"><a href="http://www.techvalidate.com/tvid/AAE-3F7-507" target="_blank">TechValidate</a></label>
									<div class="input-group">
										<input type="text" id="density_imp" name="density_imp" value="20" class="form-control" disabled />
										<span class="input-group-addon">%</span>
									</div>
								</div>
								<div class="form-group">
									<label for="storage_imp">Increase in storage utilization</label>
									<label class="hint inline-hint"><a href="http://www.techvalidate.com/tvid/AAE-3F7-507" target="_blank">TechValidate</a></label>
									<div class="input-group">
										<input type="text" id="storage_imp" name="storage_imp" value="50" class="form-control" disabled />
										<span class="input-group-addon">%</span>
									</div>
								</div>
								<div class="form-group">
									<label for="maint_imp">Decrease in VM related tickets/planning time</label>
									<label class="hint inline-hint"><a href="http://www.techvalidate.com/tvid/B7B-39A-37F" target="_blank">TechValidate</a></label>
									<div class="input-group">
										<input type="text" id="maint_imp" name="maint_imp" value="50" class="form-control" disabled />
										<span class="input-group-addon">%</span>
									</div>
								</div>
								<div class="form-group">
									<label for="infra_decrease">Decrease in infrastructure related tickets</label>
									<label class="hint inline-hint"><a href="http://www.techvalidate.com/tvid/B7B-39A-37F" target="_blank">TechValidate</a></label>
									<div class="input-group">
										<input type="text" id="infra_decrease" name="infra_decrease" value="20" class="form-control" disabled />
										<span class="input-group-addon">%</span>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<h4 class="form-title">Contact Info</h4>
								<div class="form-group">
									<label for="contact_name">Name</label>
									<input type="text" id="contact_name" name="contact_name" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="contact_email">Email</label>
									<input type="email" id="contact_email" name="contact_email" class="form-control"/>
								</div>
							</div>
						</div>
					</section>
					</div>
				</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	// validate form inputs
function validate(){
		//get inputs
		var vm_count = jQuery('input[name=vm_count]').val();
		var server_count = jQuery('input[name=server_count]').val();
		var cpu_sockets = jQuery('input[name=cpu_sockets]').val();
		var growth_rate = jQuery('input[name=growth_rate]').val();
		var terabyte_count = jQuery('input[name=tb_count]').val();
		var storage_wasted = jQuery('input[name=st_wasted]').val();
		var storage_growth_rate = jQuery('input[name=st_growth_rate]').val();
		var terabyte_cost = jQuery('input[name=tb_cost]').val();
		var hw_cost = jQuery('input[name=hardserver_cost]').val();
		var hwpower_cost = jQuery('input[name=hwpower_cost]').val();
		var hwmaint_cost = jQuery('input[name=hwmaint_cost]').val();
		var sw_cost = jQuery('input[name=softserver_cost]').val();
		var sw_renewal_cost = jQuery('input[name=renewal_cost]').val();
		var hrs_cost = jQuery('input[name=hrs_cost]').val();
		//var ticket_count = jQuery('input[name=ticket_count]').val();
		var ticket_hr_count = jQuery('input[name=ticket_hr_count]').val();
		var inc_hr_count = jQuery('input[name=inc_hr_count]').val();
		var hrs_maint = jQuery('input[name=hrs_maint]').val();
		var hrs_plan = jQuery('input[name=hrs_plan]').val();
		var density_imp = jQuery('input[name=density_imp]').val();
		var storage_imp = jQuery('input[name=storage_imp]').val();
		var maint_imp = jQuery('input[name=maint_imp]').val();
		var infra_decrease = jQuery('input[name=infra_decrease]').val();

		var email = jQuery('input[name=contact_email]').val();
		var name = jQuery('input[name=contact_name]').val();

		var error = '';

		if (vm_count.length < 1){
			error += 'Please provide the number of VMs. \n\n';
		}else{
			if(isNaN(vm_count)){
				error += 'The number of VMs must be a numeric value. \n\n';
			}
			if(vm_count > 1000000){
				error += 'The number of VMs must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(vm_count < 1){
				error += 'The number of VMs must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (server_count.length < 1){
			error += 'Please provide the number of hosts. \n\n';
		}else{
			if(isNaN(server_count)){
				error += 'The number of hosts must be a numeric value. \n\n';
			}
			if(server_count > 1000000){
				error += 'The number of hosts must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(server_count < 1){
				error += 'The number of hosts must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (cpu_sockets.length < 1){
			error += 'Please provide the number of cpu sockets. \n\n';
		}else{
			if(isNaN(cpu_sockets)){
				error += 'The number of cpu sockets must be a numeric value. \n\n';
			}
			if(cpu_sockets > 1000000){
				error += 'The number of cpu sockets must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
		}
		if (growth_rate.length < 1){
			error += 'Please provide the annual growth rate. \n\n';
		}else{
			if(isNaN(growth_rate)){
				error += 'The annual growth rate must be a numeric value. \n\n';
			}
			if(growth_rate > 999){
				error += 'The annual growth rate must be less than 1,000% to get an accurate estimate. \n\n';
			}
			if(growth_rate < 9.9){
				error += 'The annual growth rate must be at least 10% to get an accurate estimate. \n\n';
			}
		}
		if (terabyte_count.length < 1){
			error += 'Please provide the number of terabytes. \n\n';
		}else{
			if(isNaN(terabyte_count)){
				error += 'The  number of terabytes must be a numeric value. \n\n';
			}
			if(terabyte_count > 1000000){
				error += 'The number of terabytes must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(terabyte_count < 1){
				error += 'The number of terabytes must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (storage_wasted.length < 1){
			error += 'Please provide the percent of storage capacity available. \n\n';
		}else{
			if(isNaN(storage_wasted)){
				error += 'The percent of storage capacity available must be a numeric value. \n\n';
			}
			if(storage_wasted > 999){
				error += 'The percent of storage capacity available must be less than 1,000% to get an accurate estimate. \n\n';
			}
			if(storage_wasted < 1){
				error += 'The percent of storage capacity available must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (storage_growth_rate.length < 1){
			error += 'Please provide the annual growth of storage environment. \n\n';
		}else{
			if(isNaN(storage_growth_rate)){
				error += 'The annual growth of storage environment must be a numeric value. \n\n';
			}
			if(storage_growth_rate > 999){
				error += 'The annual growth of storage environment must be less than 1,000% to get an accurate estimate. \n\n';
			}
			if(storage_growth_rate < 1){
				error += 'The annual growth of storage environment must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (terabyte_cost.length < 1){
			error += 'Please provide the cost per terabyte. \n\n';
		}else{
			if(isNaN(terabyte_cost)){
				error += 'The  cost per terabyte must be a numeric value. \n\n';
			}
			if(terabyte_cost > 1000000){
				error += 'The cost per terabyte must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(terabyte_cost < 1){
				error += 'The cost per terabyte must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (hw_cost.length < 1){
			error += 'Please provide the cost per host. \n\n';
		}else{
			if(isNaN(hw_cost)){
				error += 'The cost per host must be a numeric value. \n\n';
			}
			if(hw_cost > 1000000){
				error += 'The cost per host must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(hw_cost < 1){
				error += 'The cost per host must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (hwpower_cost.length < 1){
			error += 'Please provide the power, cooling, space cost. \n\n';
		}else{
			if(isNaN(hwpower_cost)){
				error += 'The power, cooling, space cost must be a numeric value. \n\n';
			}
			if(hwpower_cost > 999){
				error += 'The power, cooling, space cost must be less than 1,000% to get an accurate estimate. \n\n';
			}
			if(hwpower_cost < 1){
				error += 'The power, cooling, space cost must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (hwmaint_cost.length < 1){
			error += 'Please provide the hardware maintenance cost per host. \n\n';
		}else{
			if(isNaN(hwmaint_cost)){
				error += 'The hardware maintenance cost per host must be a numeric value. \n\n';
			}
			if(hwmaint_cost > 999){
				error += 'The hardware maintenance cost per host must be less than 1,000% to get an accurate estimate. \n\n';
			}
			if(hwmaint_cost < 1){
				error += 'The hardware maintenance cost per host must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (sw_cost.length < 1){
			error += 'Please provide the software cost per host. \n\n';
		}else{
			if(isNaN(sw_cost)){
				error += 'The software cost per host must be a numeric value. \n\n';
			}
			if(sw_cost > 1000000){
				error += 'The software cost per host must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(sw_cost < 1){
				error += 'The software cost per host must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (sw_renewal_cost.length < 1){
			error += 'Please provide the annual software renewal cost per host. \n\n';
		}else{
			if(isNaN(sw_renewal_cost)){
				error += 'The annual software renewal cost per host must be a numeric value. \n\n';
			}
			if(sw_renewal_cost > 999){
				error += 'The annual software renewal cost per host must be less than 1,000% to get an accurate estimate. \n\n';
			}
			if(sw_renewal_cost < 1){
				error += 'The annual software renewal cost per host must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (hrs_cost.length < 1){
			error += 'Please provide the hourly cost per full time employee. \n\n';
		}else{
			if(isNaN(hrs_cost)){
				error += 'The hourly cost per full time employee must be a numeric value. \n\n';
			}
			if(hrs_cost > 1000000){
				error += 'The hourly cost per full time employee must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(hrs_cost < 1){
				error += 'The hourly cost per full time employee must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (ticket_hr_count.length < 1){
			error += 'Please provide the hours devoted per ticket. \n\n';
		}else{
			if(isNaN(ticket_hr_count)){
				error += 'The number of hours devoted per ticket must be a numeric value. \n\n';
			}
			if(ticket_hr_count > 1000000){
				error += 'The number of hours devoted per ticket must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(ticket_hr_count < 1){
				error += 'The number of hours devoted per ticket must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (inc_hr_count.length < 1){
			error += 'Please provide the annual hours related to incidents. \n\n';
		}else{
			if(isNaN(inc_hr_count)){
				error += 'The annual hours related to incidents must be a numeric value. \n\n';
			}
			if(inc_hr_count > 1000000){
				error += 'The annual hours related to incidents must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(inc_hr_count < 1){
				error += 'The annual hours related to incidents must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (hrs_maint.length < 1){
			error += 'Please provide the annual hours spent on performance assurance. \n\n';
		}else{
			if(isNaN(hrs_maint)){
				error += 'The annual hours spent on performance assurance must be a numeric value. \n\n';
			}
			if(hrs_maint > 1000000){
				error += 'The annual hours spent on performance assurance must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(hrs_maint < 1){
				error += 'The annual hours spent on performance assurance must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (hrs_plan.length < 1){
			error += 'Please provide the hours spent on capacity planning, consolidation, or growth. \n\n';
		}else{
			if(isNaN(hrs_plan)){
				error += 'The number of hours spent on capacity planning, consolidation, or growth must be a numeric value. \n\n';
			}
			if(hrs_plan > 1000000){
				error += 'The number of hours spent on capacity planning, consolidation, or growth must be less than 1,000,000 to get an accurate estimate. \n\n';
			}
			if(hrs_plan < 1){
				error += 'The number of hours spent on capacity planning, consolidation, or growth must be greater than 0 to get an accurate estimate. \n\n';
			}
		}
		if (email.length < 1){
			error += 'Please provide a valid email address. \n\n';
		}else{
			if (validateEmail(email)) {

			} else {
				error += 'Please provide a valid email address. \n\n';
			}
		}
		if (name.length < 2){
			error += 'Please provide your name. \n\n';
		}

		// check if validation successful
		if(error == ''){
			return true
		}else{
			//swal(error);
			swal("Validation Error", error, "warning");
			return false;
		}

		return false;
	}
	function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
	jQuery(document).ready(function($){

		$('.inc_hr').on('change', function(){
			var a = $('input[name=inc_emps]').val();
			var b = $('input[name=ticket_hr_count]').val();
			//var c = $('input[name=ticket_count]').val();
			var total = a*b;
			$('input[name=inc_hr_count]').val(total);
		});
		$('.hrs_maint').on('change', function(){
			var a1 = $('input[name=maint_emps]').val();
			var b1 = $('input[name=maint_hr_count]').val();
			var total = a1*b1;
			$('input[name=hrs_maint]').val(total);
		});
		$('.hrs_plan').on('change', function(){
			var a2 = $('input[name=plan_emps]').val();
			var b2 = $('input[name=plan_hr_count]').val();
			var total = a2*b2;
			$('input[name=hrs_plan]').val(total);
		});

		$.backstretch("//cdn.vmturbo.com/wp-content/uploads/2014/04/home-hero-place.jpg");

		var form = $("#roi-form");
		form.children(".roi-input-steps").steps({
			headerTag: "h4",
			bodyTag: "section",
			transitionEffect: "fade",
			labels: {
				finish: "Calculate Savings",
			},
			onFinished: function (event, currentIndex)
			{
				if (validate() == true) {
					var form = $('#roi-form');
					form.submit();
				} else {
					return false;
				}
			}
		});
		$(".roi-input-block input").keypress(function(event) {
		  var controlKeys = [8, 9, 13, 35, 36, 37, 39];
		  var isControlKey = controlKeys.join(",").match(new RegExp(event.which));
		  if (!event.which || 
			  (49 <= event.which && event.which <= 57) || 
			  (48 == event.which && $(this).attr("value")) ||
			  isControlKey) { 
			return;
		  } else {
			event.preventDefault();
		  }
		});

	});

	</script>
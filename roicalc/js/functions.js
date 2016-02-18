// validate form inputs
function validate(){
		var vm_count = $('input[name=vm_count]').val();
		var server_count = $('input[name=server_count]').val();
		var cpu_sockets = $('input[name=cpu_sockets]').val();
		var growth_rate = $('input[name=growth_rate]').val();
		var terabyte_count = $('input[name=tb_count]').val();
		var storage_wasted = $('input[name=st_wasted]').val();
		var storage_growth_rate = $('input[name=st_growth_rate]').val();
		var terabyte_cost = $('input[name=tb_cost]').val();
		var hw_cost = $('input[name=hardserver_cost]').val();
		var hwpower_cost = $('input[name=hwpower_cost]').val();
		var hwmaint_cost = $('input[name=hwmaint_cost]').val();
		var sw_cost = $('input[name=softserver_cost]').val();
		var sw_renewal_cost = $('input[name=renewal_cost]').val();
		var hrs_cost = $('input[name=hrs_cost]').val();
		//var ticket_count = $('input[name=ticket_count]').val();
		var ticket_hr_count = $('input[name=ticket_hr_count]').val();
		var inc_hr_count = $('input[name=inc_hr_count]').val();
		var hrs_maint = $('input[name=hrs_maint]').val();
		var hrs_plan = $('input[name=hrs_plan]').val();
		var density_imp = $('input[name=density_imp]').val();
		var storage_imp = $('input[name=storage_imp]').val();
		var maint_imp = $('input[name=maint_imp]').val();
		var infra_decrease = $('input[name=infra_decrease]').val();
		
		var email = $('input[name=contact_email]').val();
		var name = $('input[name=contact_name]').val();
		var country = $('input[name=contact_country]').val();
		
		var error = '';
		
		if (vm_count.length < 1){
			error += 'Please provide the number of VMs \n'; 
		}else{
			if(isNaN(vm_count)){
				error += 'The number of VMs must be a numeric value \n';	
			}
			if(vm_count > 1000000){
				error += 'The number of VMs must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(vm_count < 1){
				error += 'The number of VMs must be greater than 0 to get an accurate estimate \n';
			}
		} 
		if (server_count.length < 1){
			error += 'Please provide the number of hosts \n'; 
		}else{
			if(isNaN(server_count)){
				error += 'The number of hosts must be a numeric value \n';	
			}
			if(server_count > 1000000){
				error += 'The number of hosts must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(server_count < 1){
				error += 'The number of hosts must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (cpu_sockets.length < 1){
			error += 'Please provide the number of cpu sockets \n'; 
		}else{
			if(isNaN(cpu_sockets)){
				error += 'The number of cpu sockets must be a numeric value \n';	
			}
			if(cpu_sockets > 1000000){
				error += 'The number of cpu sockets must be less than 1,000,000 to get an accurate estimate \n';
			}
		}
		if (growth_rate.length < 1){
			error += 'Please provide the annual growth rate \n'; 
		}else{
			if(isNaN(growth_rate)){
				error += 'The annual growth rate must be a numeric value \n';	
			}
			if(growth_rate > 999){
				error += 'The annual growth rate must be less than 1,000% to get an accurate estimate \n';
			}
			if(growth_rate < 9.9){
				error += 'The annual growth rate must be at least 10% to get an accurate estimate \n';
			}
		}
		if (terabyte_count.length < 1){
			error += 'Please provide the number of terabytes \n'; 
		}else{
			if(isNaN(terabyte_count)){
				error += 'The  number of terabytes must be a numeric value \n';	
			}
			if(terabyte_count > 1000000){
				error += 'The number of terabytes must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(terabyte_count < 1){
				error += 'The number of terabytes must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (storage_wasted.length < 1){
			error += 'Please provide the percent of storage capacity available \n'; 
		}else{
			if(isNaN(storage_wasted)){
				error += 'The percent of storage capacity available must be a numeric value \n';	
			}
			if(storage_wasted > 999){
				error += 'The percent of storage capacity available must be less than 1,000% to get an accurate estimate \n';
			}
			if(storage_wasted < 1){
				error += 'The percent of storage capacity available must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (storage_growth_rate.length < 1){
			error += 'Please provide the annual growth of storage environment \n'; 
		}else{
			if(isNaN(storage_growth_rate)){
				error += 'The annual growth of storage environment must be a numeric value \n';	
			}
			if(storage_growth_rate > 999){
				error += 'The annual growth of storage environment must be less than 1,000% to get an accurate estimate \n';
			}
			if(storage_growth_rate < 1){
				error += 'The annual growth of storage environment must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (terabyte_cost.length < 1){
			error += 'Please provide the cost per terabyte \n'; 
		}else{
			if(isNaN(terabyte_cost)){
				error += 'The  cost per terabyte must be a numeric value \n';	
			}
			if(terabyte_cost > 1000000){
				error += 'The cost per terabyte must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(terabyte_cost < 1){
				error += 'The cost per terabyte must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (hw_cost.length < 1){
			error += 'Please provide the cost per host \n'; 
		}else{
			if(isNaN(hw_cost)){
				error += 'The cost per host must be a numeric value \n';	
			}
			if(hw_cost > 1000000){
				error += 'The cost per host must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(hw_cost < 1){
				error += 'The cost per host must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (hwpower_cost.length < 1){
			error += 'Please provide the power, cooling, space cost \n'; 
		}else{
			if(isNaN(hwpower_cost)){
				error += 'The power, cooling, space cost must be a numeric value \n';	
			}
			if(hwpower_cost > 999){
				error += 'The power, cooling, space cost must be less than 1,000% to get an accurate estimate \n';
			}
			if(hwpower_cost < 1){
				error += 'The power, cooling, space cost must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (hwmaint_cost.length < 1){
			error += 'Please provide the hardware maintenance cost per host \n'; 
		}else{
			if(isNaN(hwmaint_cost)){
				error += 'The hardware maintenance cost per host must be a numeric value \n';	
			}
			if(hwmaint_cost > 999){
				error += 'The hardware maintenance cost per host must be less than 1,000% to get an accurate estimate \n';
			}
			if(hwmaint_cost < 1){
				error += 'The hardware maintenance cost per host must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (sw_cost.length < 1){
			error += 'Please provide the software cost per host \n'; 
		}else{
			if(isNaN(sw_cost)){
				error += 'The software cost per host must be a numeric value \n';	
			}
			if(sw_cost > 1000000){
				error += 'The software cost per host must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(sw_cost < 1){
				error += 'The software cost per host must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (sw_renewal_cost.length < 1){
			error += 'Please provide the annual software renewal cost per host \n'; 
		}else{
			if(isNaN(sw_renewal_cost)){
				error += 'The annual software renewal cost per host must be a numeric value \n';	
			}
			if(sw_renewal_cost > 999){
				error += 'The annual software renewal cost per host must be less than 1,000% to get an accurate estimate \n';
			}
			if(sw_renewal_cost < 1){
				error += 'The annual software renewal cost per host must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (hrs_cost.length < 1){
			error += 'Please provide the hourly cost per full time employee \n'; 
		}else{
			if(isNaN(hrs_cost)){
				error += 'The hourly cost per full time employee must be a numeric value \n';	
			}
			if(hrs_cost > 1000000){
				error += 'The hourly cost per full time employee must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(hrs_cost < 1){
				error += 'The hourly cost per full time employee must be greater than 0 to get an accurate estimate \n';
			}
		}
		/*if (ticket_count.length < 1){
			error += 'Please provide the number of monthly tickets \n'; 
		}else{
			if(isNaN(ticket_count)){
				error += 'The number of monthly tickets must be a numeric value \n';	
			}
			if(ticket_count > 1000000){
				error += 'The number of monthly tickets must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(ticket_count < 1){
				error += 'The number of monthly tickets must be greater than 0 to get an accurate estimate \n';
			}
		}*/
		if (ticket_hr_count.length < 1){
			error += 'Please provide the hours devoted per ticket \n'; 
		}else{
			if(isNaN(ticket_hr_count)){
				error += 'The number of hours devoted per ticket must be a numeric value \n';	
			}
			if(ticket_hr_count > 1000000){
				error += 'The number of hours devoted per ticket must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(ticket_hr_count < 1){
				error += 'The number of hours devoted per ticket must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (inc_hr_count.length < 1){
			error += 'Please provide the annual hours related to incidents \n'; 
		}else{
			if(isNaN(inc_hr_count)){
				error += 'The annual hours related to incidents must be a numeric value \n';	
			}
			if(inc_hr_count > 1000000){
				error += 'The annual hours related to incidents must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(inc_hr_count < 1){
				error += 'The annual hours related to incidents must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (hrs_maint.length < 1){
			error += 'Please provide the annual hours spent on performance assurance \n'; 
		}else{
			if(isNaN(hrs_maint)){
				error += 'The annual hours spent on performance assurance must be a numeric value \n';	
			}
			if(hrs_maint > 1000000){
				error += 'The annual hours spent on performance assurance must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(hrs_maint < 1){
				error += 'The annual hours spent on performance assurance must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (hrs_plan.length < 1){
			error += 'Please provide the hours spent on capacity planning, consolidation, or growth \n'; 
		}else{
			if(isNaN(hrs_plan)){
				error += 'The number of hours spent on capacity planning, consolidation, or growth must be a numeric value \n';	
			}
			if(hrs_plan > 1000000){
				error += 'The number of hours spent on capacity planning, consolidation, or growth must be less than 1,000,000 to get an accurate estimate \n';
			}
			if(hrs_plan < 1){
				error += 'The number of hours spent on capacity planning, consolidation, or growth must be greater than 0 to get an accurate estimate \n';
			}
		}
		if (density_imp.length < 1){
			error += 'Please provide the increase in virtualization density \n'; 
		}else{
			if(isNaN(density_imp)){
				error += 'The increase in virtualization density must be a numeric value \n';	
			}
			if(density_imp > 999){
				error += 'The increase in virtualization density must be less than 1,000% to get an accurate estimate \n';
			}
			if(density_imp < 1){
				error += 'The increase in virtualization density must be greater than 0 to get an accurate estimate \n';
			}
			if(density_imp < 10){
				$('input[name=density_imp]').val(10);
			}
		}
		if (storage_imp.length < 1){
			error += 'Please provide the increase in storage utilization \n'; 
		}else{
			if(isNaN(storage_imp)){
				error += 'The increase in storage utilization must be a numeric value \n';	
			}
			if(storage_imp > 999){
				error += 'The increase in storage utilization must be less than 1,000% to get an accurate estimate \n';
			}
			if(storage_imp < 1){
				error += 'The increase in storage utilization must be greater than 0 to get an accurate estimate \n';
			}
			if(storage_imp < 10){
				$('input[name=storage_imp]').val(10);
			}
		}
		if (maint_imp.length < 1){
			error += 'Please provide the decrease in VM related tickets \n'; 
		}else{
			if(isNaN(maint_imp)){
				error += 'The decrease in VM related tickets must be a numeric value \n';	
			}
			if(maint_imp > 999){
				error += 'The decrease in VM related tickets must be less than 1,000% to get an accurate estimate \n';
			}
			if(maint_imp < 1){
				error += 'The decrease in VM related tickets must be greater than 0 to get an accurate estimate \n';
			}
			if(maint_imp < 10){
				$('input[name=maint_imp]').val(10);
			}
		}
		if (infra_decrease.length < 1){
			error += 'Please the decrease in infrastucture related tickets \n'; 
		}else{
			if(isNaN(infra_decrease)){
				error += 'The decrease in infrastucture related tickets must be a numeric value \n';	
			}
			if(infra_decrease > 999){
				error += 'The decrease in infrastucture related tickets must be less than 1,000% to get an accurate estimate \n';
			}
			if(infra_decrease < 1){
				error += 'The decrease in infrastucture related tickets will be greater than 0 to get an accurate estimate \n';
			}
			if(infra_decrease < 10){
				$('input[name=infra_decrease]').val(10);
			}
		}
		if (email.length < 1){
			error += 'Please provide a valid email address \n';
		}else{
			if (validateEmail(email)) {
	
			} else {
				error += 'Please provide a valid email address \n';
			}
		}
		if (name.length < 2){
			error += 'Please provide your name \n';
		}
		if (country.length < 2){
			error += 'Please provide your country \n';
		}
		
		// check if validation successful
		if(error == ''){
			return true;
		}else{
			alert(error);
			return false;
		}
		
		return false;
	}

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
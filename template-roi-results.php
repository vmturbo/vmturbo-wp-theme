<?php
/*
 * Template Name: ROI Results
 */

 $based = get_template_directory_uri();

if (!isset($_POST['server_count']) or !is_numeric($_POST['server_count'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['vm_count']) or !is_numeric($_POST['vm_count']) ){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['cpu_sockets']) or !is_numeric($_POST['cpu_sockets'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['growth_rate']) or !is_numeric($_POST['growth_rate'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['tb_count']) or !is_numeric($_POST['tb_count'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['st_wasted']) or !is_numeric($_POST['st_wasted'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['st_growth_rate']) or !is_numeric($_POST['st_growth_rate'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['hardserver_cost']) or !is_numeric($_POST['hardserver_cost']) ){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['hwpower_cost']) or !is_numeric($_POST['hwpower_cost'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['hwmaint_cost']) or !is_numeric($_POST['hwmaint_cost'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['softserver_cost']) or !is_numeric($_POST['softserver_cost'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['renewal_cost']) or !is_numeric($_POST['renewal_cost'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['hrs_cost']) or !is_numeric($_POST['hrs_cost'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['ticket_hr_count']) or !is_numeric($_POST['ticket_hr_count'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['inc_hr_count']) or !is_numeric($_POST['inc_hr_count'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['hrs_maint']) or !is_numeric($_POST['hrs_maint'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}
if (!isset($_POST['hrs_plan']) or !is_numeric($_POST['hrs_plan'])){
	header('Location: http://vmturbo.com/solutions/return-on-investment/');
}

// Get Form Inputs
$server_count = addslashes($_POST['server_count']);
$vm_count = addslashes($_POST['vm_count']);
$cpu_sockets = $_POST['cpu_sockets'];
$vm_g_rate = addslashes($_POST['growth_rate']);
$terabyte_count = addslashes($_POST['tb_count']);
$storage_wasted = addslashes($_POST['st_wasted']);
$storage_growth_rate = addslashes($_POST['st_growth_rate']);
$terabyte_cost = addslashes($_POST['tb_cost']);
$hw_cost = addslashes($_POST['hardserver_cost']);
$hwpower_cost = addslashes($_POST['hwpower_cost']);
$hwmaint_cost = addslashes($_POST['hwmaint_cost']);
$sw_cost = addslashes($_POST['softserver_cost']);
$sw_renewal_cost = addslashes($_POST['renewal_cost']);
$hrs_cost = addslashes($_POST['hrs_cost']);
$ticket_hr_count = addslashes($_POST['ticket_hr_count']);
$inc_hr_count = addslashes($_POST['inc_hr_count']);
$maint_emps = addslashes($_POST['maint_emps']);
$maint_hr_count = addslashes($_POST['maint_hr_count']);
$plan_emps = addslashes($_POST['plan_emps']);
$plan_hr_count = addslashes($_POST['plan_hr_count']);
$hrs_maint = addslashes($_POST['hrs_maint']);
$hrs_plan = addslashes($_POST['hrs_plan']);
$density_imp = 20;
$storage_imp = 50;
$maint_imp = 50;
$infra_decrease = 20;
$contact_name = addslashes(trim($_POST['contact_name']));
$contact_email = addslashes(trim($_POST['contact_email']));

// Convert to Int
$server_count = intval($server_count);
if($server_count < 1){
	$server_count = 1;
}
$vm_count = intval($vm_count);
if($vm_count < 1){
	$vm_count = 1;
}
$cpu_sockets = intval($cpu_sockets);
if($cpu_sockets < 0){
	$cpu_sockets = 1;
}
$vm_g_rate = intval($vm_g_rate);
if($vm_g_rate < 1){
	$vm_g_rate = 1;
}
$terabyte_count = intval($terabyte_count);
if($terabyte_count < 1){
	$terabyte_count = 1;
}
$storage_wasted = intval($storage_wasted);
if($storage_wasted < 1){
	$storage_wasted = 1;
}
$storage_growth_rate = intval($storage_growth_rate);
if($storage_growth_rate < 1){
	$storage_growth_rate = 1;
}
$terabyte_cost = intval($terabyte_cost);
if($terabyte_cost < 1){
	$terabyte_cost = 1;
}
$hw_cost = intval($hw_cost);
if($hw_cost < 1){
	$hw_cost = 1;
}
$hwpower_cost = intval($hwpower_cost);
if($hwpower_cost < 1){
	$hwpower_cost = 1;
}
$hwmaint_cost = intval($hwmaint_cost);
if($hwmaint_cost < 1){
	$hwmaint_cost = 1;
}
$sw_cost = intval($sw_cost);
if($sw_cost < 1){
	$sw_cost = 1;
}
$sw_renewal_cost = intval($sw_renewal_cost);
if($sw_renewal_cost < 1){
	$sw_renewal_cost = 1;
}
$hrs_cost = intval($hrs_cost);
if($hrs_cost < 1){
	$hrs_cost = 1;
}
$ticket_hr_count = intval($ticket_hr_count);
if($ticket_hr_count < 1){
	$ticket_hr_count = 1;
}
$inc_hr_count = intval($inc_hr_count);
if($inc_hr_count < 1){
	$inc_hr_count = 1;
}
$maint_emps = intval($maint_emps);
if($maint_emps < 1){
	$maint_emps = 1;
}
$maint_hr_count = intval($maint_hr_count);
if($maint_hr_count < 1){
	$maint_hr_count = 1;
}
$plan_emps = intval($plan_emps);
if($plan_emps < 1){
	$plan_emps = 1;
}
$plan_hr_count = intval($plan_hr_count);
if($plan_hr_count < 1){
	$plan_hr_count = 1;
}
$hrs_maint = intval($hrs_maint);
if($hrs_maint < 1){
	$hrs_maint = 1;
}
$hrs_plan = intval($hrs_plan);
if($hrs_plan < 1){
	$hrs_plan = 1;
}

// Rates
$hwpower_cost_rate = ($hwpower_cost/100);
$hwmaint_cost_rate = ($hwmaint_cost/100);
$swrenew_cost_rate = ($sw_renewal_cost/100);
$density_imp_rate = ($density_imp/100) + 1;
$vm_growth_rate = ($vm_g_rate/100) + 1;
$st_growth_rate = ($storage_growth_rate/100);
$storage_wasted_rate = ($storage_wasted/100);
$storage_imp_rate = ($storage_imp/100);
$maint_imp_rate = ($maint_imp/100);

// Ratios
$vm_server_ratio = round($vm_count / $server_count, 2);
$vmt_improved_ratio = round($vm_server_ratio * $density_imp_rate, 2);
$vm_server_ratio = round($vm_count / $server_count, 2);
$vm_admin_ratio ;
$improved_vm_admin_ratio ;

// VMs
$y1_vm_count = round($vm_count * $vm_growth_rate);
$y2_vm_count = round($y1_vm_count * $vm_growth_rate);
$y3_vm_count = round($y2_vm_count * $vm_growth_rate);

// Budgeted Servers
$y1_server_count = round($y1_vm_count / $vm_server_ratio);
$y2_server_count = round($y2_vm_count / $vm_server_ratio);
$y3_server_count = round($y3_vm_count / $vm_server_ratio);
$y1_new_servers = $y1_server_count - $server_count;
$y2_new_servers = $y2_server_count - $y1_server_count;
$y3_new_servers = $y3_server_count - $y2_server_count;

// Total Servers Needed
$servers_needed = round($vm_count/$vmt_improved_ratio);
$y1_servers_needed = round($y1_vm_count/$vmt_improved_ratio);
$y2_servers_needed = round($y2_vm_count/$vmt_improved_ratio);
$y3_servers_needed = round($y3_vm_count/$vmt_improved_ratio);

// Actual New Servers
if ($y1_servers_needed <  $server_count){
	$y1_act_new_servers = 0;
}else {
	$y1_act_new_servers = $y1_servers_needed - $server_count;
}
if ($y2_servers_needed <  $server_count){
	$y2_act_new_servers = 0;
}else {
	if($y1_act_new_servers == 0){
		$y2_act_new_servers = $y2_servers_needed - $server_count;
	}else{
		$y2_act_new_servers = $y2_servers_needed - $y1_servers_needed;
	}
}
if ($y3_servers_needed <  $server_count){
	$y3_act_new_servers = 0;
}else {
	if($y2_act_new_servers == 0){
		$y3_act_new_servers = $y3_servers_needed - $server_count;
	}else{
		$y3_act_new_servers = $y3_servers_needed - $y2_servers_needed;
	}
}

// Total Servers Saved
$servers_saved = $server_count - $servers_needed;
$y1_servers_saved = $y1_server_count - $y1_servers_needed;
$y2_servers_saved = $y2_server_count - $y2_servers_needed;
$y3_servers_saved = $y3_server_count - $y3_servers_needed;

// New Servers Saved
$y1_new_servers_saved = $y1_new_servers - $y1_act_new_servers;
$y2_new_servers_saved = $y2_new_servers - $y2_act_new_servers;
$y3_new_servers_saved = $y3_new_servers - $y3_act_new_servers;

// budgeted storage
$y1_budg_new_stor = $st_growth_rate * $terabyte_count;
$y1_budg_total_stor = $y1_budg_new_stor + $terabyte_count;
$y2_budg_new_stor = $st_growth_rate * $y1_budg_total_stor;
$y2_budg_total_stor = $y2_budg_new_stor + $y1_budg_total_stor;
$y3_budg_new_stor = $st_growth_rate * $y2_budg_total_stor;
$y3_budg_total_stor = $y3_budg_new_stor + $y2_budg_total_stor;

// storage needed
$y1_stor_saved = ($storage_wasted_rate * $terabyte_count) + ($y1_budg_new_stor * $storage_imp_rate);
$y1_stor_needed = $y1_budg_total_stor - $y1_stor_saved;
$y2_stor_needed = $y1_stor_needed * (1 + $st_growth_rate);
$y2_stor_saved = $y2_budg_total_stor - $y2_stor_needed;
$y3_stor_needed = $y2_stor_needed * (1 + $st_growth_rate);
$y3_stor_saved = $y3_budg_total_stor - $y3_stor_needed;

// Capital Savings
$sw_full_cost = $sw_cost + ($sw_cost*$swrenew_cost_rate);
$y1_hw_savings = $y1_new_servers_saved * $hw_cost;
$y2_hw_savings = $y2_new_servers_saved * $hw_cost;
$y3_hw_savings = $y3_new_servers_saved * $hw_cost;
$y1_sw_savings = $y1_new_servers_saved * $sw_cost;
$y2_sw_savings = $y2_new_servers_saved * $sw_cost;
$y3_sw_savings = $y3_new_servers_saved * $sw_cost;
$y1_st_savings = $y1_stor_saved * $terabyte_cost;
$y2_st_savings = $y2_stor_saved * $terabyte_cost;
$y3_st_savings = $y3_stor_saved * $terabyte_cost;
$y1_cap_savings = $y1_st_savings + $y1_hw_savings + $y1_sw_savings;
$y2_cap_savings = $y2_st_savings + $y2_hw_savings + $y2_sw_savings;
$y3_cap_savings = $y3_st_savings + $y3_hw_savings + $y3_sw_savings;

// operational savings
$y1_hw_maint_sav = $y1_servers_saved * (($hw_cost*$hwpower_cost_rate) + ($hw_cost*$hwmaint_cost_rate));
$y2_hw_maint_sav = $y2_servers_saved * (($hw_cost*$hwpower_cost_rate) + ($hw_cost*$hwmaint_cost_rate));
$y3_hw_maint_sav = $y3_servers_saved * (($hw_cost*$hwpower_cost_rate) + ($hw_cost*$hwmaint_cost_rate));
$y1_sw_op_sav = $y1_servers_saved * ($sw_cost*$swrenew_cost_rate);
$y2_sw_op_sav = $y2_servers_saved * ($sw_cost*$swrenew_cost_rate);
$y3_sw_op_sav = $y3_servers_saved * ($sw_cost*$swrenew_cost_rate);
$inc_hrs_saved = $inc_hr_count * (1 - $maint_imp_rate);
$hrs_maint_saved = $hrs_maint * (1 - $maint_imp_rate);
$hrs_plan_saved = $hrs_plan * (1 - $maint_imp_rate);
$y1_support_staff_saved = round(($inc_hrs_saved +$hrs_maint_saved + $hrs_plan_saved) * $hrs_cost, 2);
$y2_support_staff_saved = round($y1_support_staff_saved * $vm_growth_rate, 2);
$y3_support_staff_saved = round($y2_support_staff_saved * $vm_growth_rate, 2);
$y1_op_savings = $y1_hw_maint_sav + $y1_sw_op_sav + $y1_support_staff_saved ;
$y2_op_savings = $y2_hw_maint_sav + $y2_sw_op_sav + $y2_support_staff_saved ;
$y3_op_savings = $y3_hw_maint_sav + $y3_sw_op_sav + $y3_support_staff_saved ;

// VMT Investment
if ($cpu_sockets == 0){
	$cpu_sockets = $server_count * 2;
}
$vmt_ufcost = $cpu_sockets * 899;
$vmt_maint = $cpu_sockets * 180;
$y1_vmt_total_inv = $vmt_maint + $vmt_ufcost;
$y2_vmt_maint = $vmt_maint + ($y1_new_servers*2*180) + ($y2_new_servers*2*899);
$y3_vmt_maint = $vmt_maint + ($y2_new_servers*2*180) + ($y3_new_servers*2*899);

// Cumulative Savings by Year
$y1_savings = ($y1_cap_savings + $y1_op_savings) - $y1_vmt_total_inv;
$y2_savings = ($y1_savings  + $y2_cap_savings + $y2_op_savings) - $y2_vmt_maint;
$y3_savings = ($y2_savings  + $y3_cap_savings + $y3_op_savings) - $y3_vmt_maint;
$m_savings = $y1_savings / 12;

//Cumulative Savings by Month
$m0_sav = 0 - $y1_vmt_total_inv;
$m1_sav = ($m0_sav + $m_savings);
$m2_sav = ($m1_sav + $m_savings);
$m3_sav = ($m2_sav + $m_savings);
$m4_sav = ($m3_sav + $m_savings);
$m5_sav = ($m4_sav + $m_savings);
$m6_sav = ($m5_sav + $m_savings);
$m7_sav = ($m6_sav + $m_savings);
$m8_sav = ($m7_sav + $m_savings);
$m9_sav = ($m8_sav + $m_savings);
$m10_sav = ($m9_sav + $m_savings);
$m11_sav = ($m10_sav + $m_savings);
$m12_sav = ($m11_sav + $m_savings);

//percent saved
$roi = round(($y3_savings / ($y1_vmt_total_inv + $y2_vmt_maint + $y3_vmt_maint)*100));

//calculate break even point
$month_maint = round($vmt_maint / 12);
//$month_maint = 0;
$bep = 0 - $vmt_ufcost;
$month_sav = round(($y1_cap_savings + $y1_op_savings)/12);
$count_months = 0;

while( $bep < 0){

	// if after 1 year
	if($count_months > 12){
		$month_sav = round(($y2_cap_savings + $y2_op_savings)/12);
	}
	// if after 2 year
	if ($count_months > 24){
		$month_sav = round(($y3_cap_savings + $y3_op_savings)/12);
	}

	// increment
	$bp_increment = $month_sav - $month_maint;
	$bep = $bep + $bp_increment;

	// if greater than 3 years
	if($count_months >= 36){
		$count_months = "36+";
		$bep = 0;
		// force exit of loop
	}else{
		$count_months++;
	}
}

$break_even_date = $count_months;

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//send email
$to      = 'websales@vmturbo.com';
// $to      = 'nicky.chu@vmturbo.com';
$subject = 'ROI Calculator Alert';
$message = '
<html>
<head>
  <title>ROI Calculator Alert</title>
</head>
<body>
  <p>Someone just filled out the ROI Calculator with the following values:</p>
  <table width="500" >
  	<tr><td><strong>Contact</strong></td><td></td></tr>
    <tr>
      <td>Name</td><td style="text-align:right;">'.$contact_name.'</td>
    </tr>
    <tr>
      <td>Email</td><td style="text-align:right;">'.$contact_email.'</td>
    </tr>
    <tr>
      <td>Client IP Address</td><td style="text-align:right;">'.$ip.'</td>
    </tr>
    <tr><td><br/><strong>Calculations</strong></td><td></td></tr>
	<tr>
      <td>Cumulative Savings</td><td style="text-align:right;">$'.number_format($y3_savings, 2, '.', ',').'</td>
    </tr>
	<tr>
      <td>Breakeven Date</td><td style="text-align:right;">'.$break_even_date.' months</td>
    </tr>
    <tr>
      <td>Host Count</td><td style="text-align:right;">'.$server_count.'</td>
    </tr>
	<tr>
      <td>VM Count</td><td style="text-align:right;">'.$vm_count.'</td>
    </tr>
	<tr>
      <td>Total CPU Sockets</td><td style="text-align:right;">'.$cpu_sockets.'</td>
    </tr>
	<tr>
      <td>Annual growth of VM Count</td><td style="text-align:right;">'.$vm_g_rate.'%</td>
    </tr>
	<tr>
      <td>Terabyte Count</td><td style="text-align:right;">'.$terabyte_count.'</td>
    </tr>
	<tr>
      <td>Percent of storage capacity available</td><td style="text-align:right;">'.$storage_wasted.'%</td>
    </tr>
	<tr>
      <td>Annual growth of storage environment</td><td style="text-align:right;">'.$storage_growth_rate.'%</td>
    </tr>
	<tr>
      <td>Cost per terabyte</td><td style="text-align:right;">$'.number_format($terabyte_cost, 2, '.', ',').'</td>
    </tr>
	<tr>
      <td>Hardware cost per host</td><td style="text-align:right;">$'.number_format($hw_cost, 2, '.', ',').'</td>
    </tr>
	<tr>
      <td>Software cost per host</td><td style="text-align:right;">$'.number_format($sw_cost, 2, '.', ',').'</td>
    </tr>
	<tr>
      <td>Average hourly cost per FTE</td><td style="text-align:right;">$'.number_format($hrs_cost, 2, '.', ',').'</td>
    </tr>
	<tr>
      <td>Monthly hours spent on resolving VM related tickets per FTE</td><td style="text-align:right;">'.$ticket_hr_count.'</td>
    </tr>
	<tr>
      <td>Number of FTEs working on performance assurance</td><td style="text-align:right;">'.$maint_emps.'</td>
    </tr>
	<tr>
      <td>Monthly hours spent on performance assurance per FTE</td><td style="text-align:right;">'.$maint_hr_count.'</td>
    </tr>
	<tr>
      <td>Number of FTEs working on capacity planning, consolidation, or growth</td><td style="text-align:right;">'.$plan_emps.'</td>
    </tr>
	<tr>
      <td>Monthly hours spent on capacity planning, consolidation, or growth</td><td style="text-align:right;">'.$plan_hr_count.'</td>
    </tr>
	<tr>
      <td>Increase in virtualization density</td><td style="text-align:right;">'.$density_imp.'%</td>
    </tr>
	<tr>
      <td>Increase in storage utilization</td><td style="text-align:right;">'.$storage_imp.'%</td>
    </tr>
	<tr>
      <td>Decrease in VM related tickets/planning time</td><td style="text-align:right;">'.$maint_imp.'%</td>
    </tr>
	<tr>
      <td>Decrease in infrastructure related tickets</td><td style="text-align:right;">'.$infra_decrease.'%</td>
    </tr>
  </table>
</body>
</html>
';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: gregory.dunn@vmturbo.com' . "\r\n" .
    'Reply-To: gregory.dunn@vmturbo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

// Output
$output  =  '<div class="row"><div class="col-md-3"><div class="result-module"><h3>ROI</h3><p>Cumulative Savings: <b>$'.number_format($y3_savings, 2, '.', ',').'</b></p>'.
			'<p>Return On Investment: <b>'.$roi.'%</b></p><p>Payback Period: <b>'.$break_even_date.' months</b></p></div></div>'.
			'<div class="col-md-3"><div class="result-module"><h3>Consolidation</h3><p>Current VM/Host Ratio: <b>'.$vm_server_ratio.'</b></p><p>Improved VM/Host Ratio: <b>'.$vmt_improved_ratio.'</b></p>'.
			'</div></div>'.
			'<div class="col-md-3"><div class="result-module"><h3>Operational Savings</h3><p>Support Staff Savings: <b>$'.number_format($y1_support_staff_saved + $y2_support_staff_saved + $y3_support_staff_saved , 2, '.', ',').'</b></p>'.
			'<p>Host Savings: <b>$'.number_format($y1_hw_maint_sav + $y1_sw_op_sav + $y2_hw_maint_sav + $y2_sw_op_sav + $y3_hw_maint_sav + $y3_sw_op_sav  , 2, '.', ',').'</b></p>'.
			'<p>Total Operational Savings: <b>$'.number_format($y1_op_savings + $y2_op_savings + $y3_op_savings, 2, '.', ',').'</b></p>'.
			'</div></div>'.
			'<div class="col-md-3"><div class="result-module"><h3>Capital Savings</h3>'.
			'<p>Host Hardware Savings: <b>$'.number_format($y1_hw_savings + $y2_hw_savings + $y3_hw_savings, 2, '.', ',').'</b></p>'.
			'<p>Host Software Savings: <b>$'.number_format($y1_sw_savings + $y2_sw_savings + $y3_sw_savings, 2, '.', ',').'</b></p>'.
			'<p>Storage Savings: <b>$'.number_format($y1_st_savings + $y2_st_savings + $y3_st_savings, 2, '.', ',').'</b></p>'.
			'<p>Total Capital Expense Savings: <b>$'.number_format($y1_cap_savings + $y2_cap_savings + $y3_cap_savings, 2, '.', ',').'</b></p>'.
			'</div></div>'.
			'</div>';
$output .=  '<div class="clear"></div><table id="result-table" class="table table-striped table-bordered table-hover"><tr class="blue"><th></th><th>Start</th><th>Year 1</th><th>Year 2</th><th>Year 3</th></tr>'.
			'<tr><td class="blue align-left">Virtual Machines</td><td>'.$vm_count.'</td><td>'.$y1_vm_count.'</td><td>'.$y2_vm_count.'</td><td>'.$y3_vm_count.'</td></tr>'.
			'<tr><td class="blue align-left">Total hosts without VMTurbo</td><td>'.$server_count.'</td><td>'.$y1_server_count.'</td><td>'.$y2_server_count.'</td><td>'.$y3_server_count.'</td></tr>'.
			'<tr><td class="blue align-left">New hosts  without VMTurbo</td><td></td><td>'.$y1_new_servers.'</td><td>'.$y2_new_servers.'</td><td>'.$y3_new_servers.'</td></tr>'.
			'<tr><td class="blue align-left">Total hosts with VMTurbo</td><td>'.$servers_needed.'</td><td>'.$y1_servers_needed.'</td><td>'.$y2_servers_needed.'</td><td>'.$y3_servers_needed.'</td></tr>'.
			'<tr><td class="blue align-left">New hosts with VMTurbo</td><td></td><td>'.$y1_act_new_servers.'</td><td>'.$y2_act_new_servers.'</td><td>'.$y3_act_new_servers.'</td></tr>'.
			'<tr><td class="blue align-left">Total hosts saved</td><td>'.$servers_saved.'</td><td>'.$y1_servers_saved.'</td><td>'.$y2_servers_saved.'</td><td>'.$y3_servers_saved.'</td></tr>'.
			'<tr><td class="blue align-left">New hosts saved</td><td></td><td>'.$y1_new_servers_saved.'</td><td>'.$y2_new_servers_saved.'</td><td>'.$y3_new_servers_saved.'</td></tr>'.
			'<tr><td class="blue align-left">Total storage without VMTurbo</td><td>'.$terabyte_count.'</td><td>'.$y1_budg_total_stor.'</td><td>'.$y2_budg_total_stor.'</td><td>'.$y3_budg_total_stor.'</td></tr>'.
			'<tr><td class="blue align-left">New storage without VMTurbo</td><td></td><td>'.$y1_budg_new_stor.'</td><td>'.$y2_budg_new_stor.'</td><td>'.$y3_budg_new_stor.'</td></tr>'.
			'<tr><td class="blue align-left">Total storage with VMTurbo</td><td></td><td>'.$y1_stor_needed.'</td><td>'.$y2_stor_needed.'</td><td>'.$y3_stor_needed.'</td></tr>'.
			'<tr><td class="blue align-left">Saved storage</td><td></td><td>'.$y1_stor_saved.'</td><td>'.$y2_stor_saved.'</td><td>'.$y3_stor_saved.'</td></tr>'.
			'<tr><td class="blue align-left">Host Hardware savings</td><td></td><td>$'.number_format($y1_hw_savings, 2, '.', ',').'</td><td>$'.number_format($y2_hw_savings, 2, '.', ',').'</td><td>$'.number_format($y3_hw_savings, 2, '.', ',').'</td></tr>'.
			'<tr><td class="blue align-left">Host Software savings</td><td></td><td>$'.number_format($y1_sw_savings, 2, '.', ',').'</td><td>$'.number_format($y2_sw_savings, 2, '.', ',').'</td><td>$'.number_format($y3_sw_savings, 2, '.', ',').'</td></tr>'.
			'<tr><td class="blue align-left">Storage Savings</td><td></td><td>$'.number_format($y1_st_savings, 2, '.', ',').'</td><td>$'.number_format($y2_st_savings, 2, '.', ',').'</td><td>$'.number_format($y3_st_savings, 2, '.', ',').'</td></tr>'.
			'<tr class="success bold cumulative_sav"><td class="align-left">Total CapEx Savings</td><td></td><td>$'.number_format($y1_cap_savings, 2, '.', ',').'</td><td>$'.number_format($y2_cap_savings, 2, '.', ',').'</td><td>$'.number_format($y3_cap_savings, 2, '.', ',').'</td></tr>'.
			'<tr><td class="blue align-left">Operational Hardware savings</td><td></td><td>$'.number_format($y1_hw_maint_sav, 2, '.', ',').'</td><td>$'.number_format($y2_hw_maint_sav, 2, '.', ',').'</td><td>$'.number_format($y3_hw_maint_sav, 2, '.', ',').'</td></tr>'.
			'<tr><td class="blue align-left">Operational Software savings</td><td></td><td>$'.number_format($y1_sw_op_sav, 2, '.', ',').'</td><td>$'.number_format($y2_sw_op_sav, 2, '.', ',').'</td><td>$'.number_format($y3_sw_op_sav, 2, '.', ',').'</td></tr>'.
			'<tr><td class="blue align-left">Support Staff Savings</td><td></td><td>$'.number_format($y1_support_staff_saved, 2, '.', ',').'</td><td>$'.number_format($y2_support_staff_saved, 2, '.', ',').'</td><td>$'.number_format($y3_support_staff_saved, 2, '.', ',').'</td></tr>'.
			'<tr class="success bold cumulative_sav"><td class="align-left">Total OpEx Savings</td><td></td><td>$'.number_format($y1_op_savings, 2, '.', ',').'</td><td>$'.number_format($y2_op_savings, 2, '.', ',').'</td><td>$'.number_format($y3_op_savings, 2, '.', ',').'</td></tr>'.
			'<tr><td class="blue align-left">VMTurbo Investment</td><td></td><td>($'.number_format($y1_vmt_total_inv, 2, '.', ',').')</td><td>($'.number_format($y2_vmt_maint, 2, '.', ',').')</td><td>($'.number_format($y3_vmt_maint, 2, '.', ',').')</td></tr>'.
			'<tr id="total" class="success bold cumulative_sav"><td class="align-left">Cumulative Savings </td><td></td><td>$'.number_format($y1_savings, 2, '.', ',').'</td><td>$'.number_format($y2_savings, 2, '.', ',').'</td><td>$'.number_format($y3_savings, 2, '.', ',').'</td></tr></table>';


?>
  <div class="product-overview">

        <div class="container">
          <div class="title-page">
              <h1 style="text-align:center;margin-bottom:1em;">
                ROI Calculator Results
              </h1>
          </div>
        </div>

        <div class="input-wrapper">
          <div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php //echo '<img class="img-responsive" src="'.$based.'/roicalc/includes/graph_month.php?m0='.$m0_sav.'&m1='.$m1_sav.'&m2='.$m2_sav.'&m3='.$m3_sav.'&m4='.$m4_sav.'&m5='.$m5_sav.'&m6='.$m6_sav.'&m7='.$m7_sav.'&m8='.$m8_sav.'&m9='.$m9_sav.'&m10='.$m10_sav.'&m11='.$m11_sav.'&m12='.$m12_sav.'" />'; ?>
				</div>
				<div class="col-md-6">
					<?php //echo '<img src="'.$based.'/roicalc/includes/graph.php?a='.$y1_savings.'&b='.$y2_savings.'&c='.$y3_savings.'" class="img-responsive" />'; ?>
				</div>
			</div>
			<div id="results"><?php echo $output; ?></div>
          </div>
        </div><!-- /.input-wrapper -->

  </div><!-- /.product-overview -->
  <div class="custom-flexible-cta layout-dark" style="background:#222;color:#fff;padding:42px 0;">
		<div class="container">
			<div class="col-md-9">
				<h3 style="font-weight:600;margin-top:0;">See what Application Performance Control can do for you.</h3>
				<h4 style="margin-bottom:0;">Results in under an hour. Payback in less than 3 months.</h4>			</div>
						<div class="col-md-3">
				<a class="btn btn-vmt pull-right" href="http://vmturbo.com/downloads/operations-manager-30-day-trial/">DOWNLOAD NOW</a>
			</div>
					</div>
	</div>
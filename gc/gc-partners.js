jQuery(document).ready(function( $ ) {
	jQuery('#j-placeMainNav').append('<li><a href="https://vmturbo.okta.com/home/vmturbo_vartopiadealreg_1/0oa4g8dejda2WazEc0x7/aln4g8igjeN7zgVWg0x7" target="_blank"><span class="lnk">Deal Registration</span></a></li>');
	if(jQuery('#jive-error-box')){
		jQuery('#jive-body-intro-content h1').html('Welcome to the new VMTurbo 360° Partner Program!');
		jQuery('#jive-error-box').html('Our Partner Portal is now hosted within the Green Circle Community. Our records currently indicate that you do not have access to this space, please contact <a href="mailto:partnersupport@vmturbo.com">partnersupport@vmturbo.com</a> to get started').removeClass('jive-error-box').addClass('jive-success-box');
		jQuery('#j-main #jive-body').append('<img src="https://vmturbo.com/wp-content/themes/vmturbo/gc/VMT360PartnerProgram.png" style="display:block;margin:20px auto;" width="200"/>')
	}
});
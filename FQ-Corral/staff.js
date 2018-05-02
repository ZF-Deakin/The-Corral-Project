$(document).ready(function(){
	
	$('form #stat').hide();
	$('#submit').click(function(e) {
		
		//e.preventDefault();
		
		var valid = '';
		var required = ' is required';
		var required2 = ' is required, at least 9 digit';
		var required3 = ' is required, at least 8 character';
		var fname1 = $('form #fname1').val();
		var lname1 = $('form #lname1').val();
		var sid1 = $('form #sid1').val();
		var email1 = $('form #email1').val();
		var pass1 = $('form #pass1').val();



// Student Details		

		if (fname1 = '' || fname1.length <= 2){
			valid = '<p>Invalid, your First Name ' + required + '</p>';	
			e.preventDefault();				
		}

		if (lname1 = '' || lname1.length <= 2){
			valid += '<p>Invalid, your Last Name ' + required + '</p>';
			e.preventDefault();					
		}
		
		if(sid1 = '' || sid1.length < 9 || !sid1.match(/[0-9-()+]{9,10}/)){
			valid += '<p>Invalid, your Staff ID ' + required2 + '</p>';
			e.preventDefault();
		}

		if (!email1.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)){
			valid += '<p>Invalid, your email' + required + '</p>';
			e.preventDefault();
		}		
				
		if(pass1 = '' || pass1.length < 8){
			valid += '<p>Invalid, your password ' + required3 + '</p>' ;
			e.preventDefault();
		}		
		
			
		
		
//	
		
		if (valid != '') {
			
			$('form #stat').removeClass().addClass('error')
				
				.html('<strong>Please correct the errors below.</strong> <p>&nbsp;</p>' +  valid ).fadeIn('slow');
				
							
		}else {
			$('form #stat').removeClass().addClass('error')
				
				.html('').fadeIn('slow');
													
			$('#submit').unbind('submit').submit()

		}
	});
});
<?php

if (isset($_POST['btnSubmit'])) { // check if the form is submitted
	#### removing extra white spaces & escaping harmful characters ####
	
	$error = array();

		// Validate First Name 		
		if (empty($_POST['customerfName'])) {
			$eFirstName = '<p class="error">First Name should be filled in</p>';
			$error['firstName'] = $eFirstName;
		}
		
		// Validate Last Name 
		if (empty($_POST['customerlName'])) {
			$eLastName = '<p class="error">Last Name should be filled in</p>';
			$error['lastName'] = $eLastName;
		}
		
				
		// Validate Phone Number
		// if phone is invalid, throw error
		if (empty($_POST['phoneNumber']) || ((!ctype_digit($_POST['phoneNumber']) OR (strlen($_POST['phoneNumber']) != 10)))) {
			$errorPhone = '<p class="error">Enter a valid phone number.</p>';
			$error['errorPhone'] = $errorPhone;
		}
				
		// Validate Email Address
		// if email is invalid, throw error
		if (empty($_POST['emailAddress']) || (!filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL))) { 
			$errorEmail = '<p class="error">Enter a valid email address.</p>';
			$error['errorEmail'] = $errorEmail;
		}

		
		// Validate User Name 
		// if not set, throw error
		if (empty($_POST['username'])) {
			$eUserName = '<p class="error">User Name should be filled in</p>';
			$error['username'] = $eUserName;
		}
		
		// Validate Referral Selection
		// if ot set, throw error
		if (empty($_POST['referral'])) {
			$errorRef = '<p class="error" >Enter your selection.</p>';
			$error['errorRef'] = $errorRef;
		}
		
		
}
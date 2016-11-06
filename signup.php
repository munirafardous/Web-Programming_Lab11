<?php 	
		error_reporting(E_ALL);
		include_once 'validation.php';
		include_once 'header.php';
		
		$conn = new mysqli("localhost","wp_eatery","password", "wp_eatery") or die("Sorry, Not connected");
		
		if (isset($_POST['btnSubmit'])&& (empty($error))) { // if there is no error, then process user inputs			
			
			$firstName 		= trim($_POST['customerfName']);
			$lastName 		= trim($_POST['customerlName']);
			$phoneNumber 	= $_POST['phoneNumber'];
			$emailAddress 	= trim($_POST['emailAddress']);
			$userName 		= trim($_POST['username']);
			$referral 		= $_POST['referral'];
			
			
			$sql = "INSERT INTO mailinglist (firstName, lastName, phoneNumber, emailAddress, username, referrer)
			VALUES ('$firstName','$lastName','$phoneNumber','$emailAddress','$userName','$referral')";

			if ($conn->query($sql) === TRUE) {
				
				$querySuccess = '<p class="success">Thank you for Signing up.</p>'; 
			
			} else {
				
				$queryFail = '<p class="error">Error:'. $sql . "<br>" . $conn->error.'</p>'; 

			}
			
			$conn->close();
				
		}
		
?>
<div id="content" class="clearfix">

	<aside>
                        <h2>Mailing Address</h2>
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3>(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3>(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
    </aside>
    <div class="main">
		<?php if(isset($error['firstName']))
				{
					echo $error['firstName']; 
				}				
			
				if(isset($error['lastName']))
				{
					echo $error['lastName']; 
				}	
			
				if(isset($error['errorPhone'])){
					echo $error['errorPhone']; 
				}
				
				if(isset($error['errorEmail'])){
					echo $error['errorEmail']; 
				}
								
				if(isset($error['username'])){
					echo $error['username']; 
				}
				
				if(isset($error['errorRef'])){
					echo $error['errorRef']; 
				}
		
				if(isset($querySuccess)){
					echo $querySuccess;
				}
				
				if(isset($queryFail)){
					echo $queryFail;
				}
			
		?>
	</div>
</div>
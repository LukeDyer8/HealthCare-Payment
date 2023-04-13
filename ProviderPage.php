<!DOCTYPE html>
<html lang="EN">
  <head> 
	<title>ProviderLogin2</title>
	<link rel="stylesheet" type="text/css" href="ProviderStyle.css" >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
    <p>
	
	<?php

		
		if ((isset($_POST["docUsername"]) && (!empty($_POST["docUsername"]))) &&
			(isset($_POST["docPass"]) && (!empty($_POST["docPass"]))))
		{	

			$docUsername = htmlspecialchars($_POST["docUsername"]);
			$docPass = htmlspecialchars($_POST["docPass"]);

		if((preg_match("/^admin$/", $docUsername)) &&
			(preg_match("/^admin$/", $docPass)))
		{
	?>		
				<h1> Provider Page </h1>

<a href="https://swe.umbc.edu/~ngugssa1/is448/loginReg/"> Back To User Login</a>
	<br>
	<a href="ProviderAppointment.php"> Upcoming Appointments </a>  
	<br>
	<a href="ProviderPresciprion.php"> Prescription Refill Requests </a> 
	<br>
	<a href="ProviderNotes.php"> Previous Patent Visits </a> 
	
		<?php 
		}
		else{

		?>
			Invalid Username and Password <br>
			Please <a href="ProviderLogin.html"> Go Back </a> and Re-enter Your Username and Password.

		<?php
		}

		}
		else{

		?>
			Login Filled Out Incorrectly <br>
			Please <a href="ProviderLogin.html"> Go Back </a> and Complete All Fileds.

			<?php
		}
		?>
		</p>
	</body>
</html>

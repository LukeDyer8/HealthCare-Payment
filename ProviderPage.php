<?php
session_start();
$_SESSION['admin'] = true;
?>
<!DOCTYPE html>
<html lang="EN">
  <head> 
	<title>ProviderLogin2</title>
	<link rel="stylesheet" type="text/css" href="testing.css" >
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
	<img class = "homepageImage" src = "homepage.png" alt = "Homepage image"> <br>
	<h1> Provider Page </h1>
<div class = "homepageBorder" >
	<span class = "menu"> Menu Options </span> <br> <br>
	<a href = "ProviderAppointment.php"> View Upcomming Appointments </a> <br> <br>
	 <a href = "ProviderNotes.php"> Create Patient Notes </a> <br> <br>
	 <a href = "ProviderPresciprion.php"> View Prescription Requests </a> <br> <br>
	 <a href = "ProviderLogin.php"> Log Out </a> <br>		
</div>
		<?php 
		}
		else{

		?>
			Invalid Username and Password <br>
			Please <a href="ProviderLogin.php"> Go Back </a> and Re-enter Your Username and Password.

		<?php
		}

		}
		else{

		?>
			Login Filled Out Incorrectly <br>
			Please <a href="ProviderLogin.php"> Go Back </a> and Complete All Fileds.

			<?php
		}
		?>
		</p>
	</body>
</html>

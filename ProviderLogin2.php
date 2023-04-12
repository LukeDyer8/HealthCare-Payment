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
			Login Complete
			Click <a href="Provider.html">  Here </a> to Continue to Provider Page.
	
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

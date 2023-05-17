<?php
session_start();
if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
    session_destroy();
    header("Location: ProviderLogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="EN">
	<head>
		<title>Provider Login</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="testing.css" />
	</head>
	<body>
	<div class = "blueBorder" >
	<a href="loginReg" > Back To User Login</a>
	</div>
	<h1> Provider Login </h1>
	    <form method="post" action="ProviderPage.php">

	  Username <input type="text" id="docUsername" name="docUsername">

	  <br>
	  <br>

	  Password <input type="password" id="docPass" name="docPass">

	  <br>
	  <br>
	        <input type="submit" value="Submit">

	</body>
</html>

<?php
session_start();
if(!isset( $_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="EN">
	<head>
		<title>Provider Login</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="ProviderStyle.css" />
	</head>
	<body>
	<a href="https://swe.umbc.edu/~ngugssa1/is448/loginReg/"> Back To User Login</a>
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

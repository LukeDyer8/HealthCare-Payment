<?php
/* This Code is written by Luke Dyer*/
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
		<script type = "text/javascript"  src = "ProviderLoginCheck.js"></script>
	</head>
	<body style = "background-color: #72A0C1;">
    <div class="container" style="max-width: 600px; margin: auto;
    padding: 50px;
    box-shadow: rgba(100, 100, 111, .2) 0px 7px 29px 0px;
;">
	<div class = "blueBorder">
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
	        <input type="submit" id="submit" value="Submit">
		</form>
	</body>
</html>

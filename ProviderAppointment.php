<!DOCTYPE html>
<html lang="EN">
<head>
	<title> Upcoming Appointments </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="ProviderStyle.css">
</head>
<body>
<a href="https://swe.umbc.edu/~ngugssa1/is448/loginReg/"> Back To User Login</a>
		<br>
		<a href="ProviderPresciprion.php"> Prescription Refill Requests </a> 
		<br>
	    <a href="ProviderNotes.php"> Previous Patent Visits </a> 
<?php
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","ldyer2","ldyer2","ldyer2");
	$today = date('Y-m-d');
	
	$select_query = "SELECT * FROM `Appointments` WHERE DateNow > '$today'";

	$select = mysqli_query($db, $select_query);

	if(! $select){
		print("Error - query could not be executed");
		$error = mysqli_error($db);
		print "<p> . $error . </p>";
		exit;
	}
		$num_rows = mysqli_num_rows($select);
		if($num_rows != 0){
?>
<h1> Previous Appointments: </h1>
						<table border="1">
					<tr>
						<th> Appointment ID</th>
						<th> Name </th>
						<th> Appointment Reason</th>
						<th> Patient Comments </th>
						<th> Date </th>
						<th> Time </th>
						<th> Notes </th>
					</tr>

<?php

  for($row_num = 0; $row_num < $num_rows; $row_num++){
	print("<tr>");
	$row_array = mysqli_fetch_array($select);
	print("<td>$row_array[apptID]</td>");
	print("<td>$row_array[name]</td>");
	print("<td>$row_array[apptReason]</td>");
	print("<td>$row_array[comments]</td>");
	print("<td>$row_array[DateNow]</td>");
	print("<td>$row_array[Time]</td>");
	print("<td>$row_array[docNotes]</td>");
	print("</tr>");		
}
} else {
	print('<h1> You Have No Upcoming Appointments');
}
	print('</table>');
	print('<br>');

?>
</body>
</html>
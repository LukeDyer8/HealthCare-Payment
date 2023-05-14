<!DOCTYPE html>
<html lang="EN">
<head>
	<title> Upcoming Appointments </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="ProviderStyle.css">
</head>
<body>
<a href="https://swe.umbc.edu/~ngugssa1/is448/loginReg/login.html"> Back To User Login</a>
		<br>
		<a href="ProviderPresciprion.php"> Prescription Refill Requests </a> 
		<br>
	    <a href="ProviderNotes.php"> Previous Patent Visits </a> 
<?php
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","zaman3","zaman3","zaman3");
	$today = date('Y-m-d');
	
	$select_query = "SELECT * FROM `Customer_Info`,`appointment_info` WHERE visit_date > '$today'";

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
						<th> First Name </th>
						<th> Last Name </th>
						<th> Appointment Reason</th>
						<th> Patient Comments </th>
						<th> Date </th>
						<th> Time </th>
						<th> Doctor Notes </th>
					</tr>

<?php

  for($row_num = 0; $row_num < $num_rows; $row_num++){
	print("<tr>");
	$row_array = mysqli_fetch_array($select);
	print("<td>$row_array[appt_ID]</td>");
	print("<td>$row_array[first_name]</td>");
	print("<td>$row_array[last_name]</td>");
	print("<td>$row_array[visit_reason]</td>");
	print("<td>$row_array[comments]</td>");
	print("<td>$row_array[visit_date]</td>");
	print("<td>$row_array[visit_time]</td>");
	print("<td>$row_array[doctor_notes]</td>");
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
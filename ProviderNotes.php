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
		<a href="ProviderAppointment.php"> Upcoming Appointments </a>   <!-- This Page will let the Provider see all user appointment Name, date and time -->
		<br>
	    <a href="ProviderPresciprion.php"> Prescription Refill Requests </a> <!-- This Page will show what refills have been requested and by who -->
<?php
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","zaman3","zaman3","zaman3");
	$today = date('Y-m-d');
	
	$select_query = "SELECT * FROM `Customer_Info`,`appointment_info` WHERE visit_date < '$today'";

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
						<th> Last Name </th>
						<th> First Name </th>
						<th> Appointment Date </th>
						<th> Doctor Notes </th>
					</tr>

<?php

  for($row_num = 0; $row_num < $num_rows; $row_num++){
	print("<tr>");
	$row_array = mysqli_fetch_array($select);
	print("<td>$row_array[appt_ID]</td>");
	print("<td>$row_array[first_name]</td>");
	print("<td>$row_array[last_name]</td>");
	print("<td>$row_array[visit_date]</td>");
	print("<td>$row_array[doctor_notes]</td>");
	print("</tr>");		
}
}


	print('</table>');
	print('<br>');

?>
    <form method="post" action="NotesDone.php">
    Appointment ID:
    <br>
    <input type="text" id="apptID" name="apptID">
    <br>
    Notes:      
    <br>
    <textarea id="notes" name="notes"></textarea>
    <br>
    <input type="submit" value="Submit">
    <br>
    <br>
    </form>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
	header("Location: ProviderLogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="EN">
<head>
	<title> Upcoming Appointments </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="testing.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
	<script type = "text/javascript"  src = "ProviderNotesCheck.js"></script>
</head>
<body>
<div class = "blueBorder" >
<span style="font-weight: bold;">
	<a href = "ProviderAppointment.php"> View Upcomming Appointments </a> 
	 <a href = "ProviderPresciprion.php"> View Prescription Requests </a> 
	 <a href = "ProviderLogin.php"> Log Out </a> <br>		
</span>
</div>
<?php
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","zaman3","zaman3","zaman3");
	$today = date('Y-m-d');
	
	$select_query = "SELECT * FROM Customer_Info LEFT JOIN appointment_info ON Customer_Info.appointment_ID = appointment_info.appt_ID WHERE visit_date < '$today'";

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
	<input type="checkbox" id="enlargeText"> <label for="enlargeText">Enlarge Text</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Typed: <span id="time"></span>
	<br>
	<br>
	<span style = "float: left;">
    <input type="submit" id="submit" value="Submit">
</span>
    </form>
</body>
</html>
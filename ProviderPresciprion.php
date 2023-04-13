<!DOCTYPE html>
<html lang="EN">
<head>
	<title> Refill Requests </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="ProviderStyle.css">
</head>
<body>
<br>
		<a href="https://swe.umbc.edu/~ngugssa1/is448/loginReg/"> Back To User Login</a>
		<br>
	    <a href="ProviderAppointment.php"> Upcoming Appointments </a>
		<br>
	    <a href="ProviderNotes.php"> Previous Patent Visits </a> 
<?php
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","ldyer2","ldyer2","ldyer2");


	$select_query = "SELECT * FROM `RefillPrescription`";

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
<h1> Prescription Refill Requests: </h1>
						<table border="1">
					<tr>
						<th> Patient Name </th>
						<th> Date Of Birth </th>
						<th> Phone Number </th>
						<th> Medication Name </th>
						<th> Medication Dosage </th>
						<th> Pharmacy Name </th>
						<th> Pharmacy Phone Number </th>
					</tr>

<?php

 for($row_num = 0; $row_num < $num_rows; $row_num++){
	print("<tr>");
	$row_array = mysqli_fetch_array($select);
	print("<td>$row_array[PatientName]</td>");
	print("<td>$row_array[DOB]</td>");
	print("<td>$row_array[PhoneNum]</td>");
	print("<td>$row_array[NameOfMed]</td>");
	print("<td>$row_array[DosageOfMed]</td>");
	print("<td>$row_array[PharmacyName]</td>");
	print("<td>$row_array[PharmacyPhoneNum]</td>");
	print("</tr>");		
}
}


	print('</table>');
	print('<br>');

?>
</body>
</html>
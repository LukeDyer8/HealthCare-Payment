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
		<a href="ProviderPresciprion.php"> Prescription Refill Requests </a> <!-- This Page will show what refills have been requested and by who -->
		<br>
	    <a href="ProviderNotes.php"> Previous Patent Visits </a> <!-- THis Page will show a List of the patients and let you write in comments, by putting in Patient ID -->
<?php
	//$db = mysqli_connect("studentdb-maria.gl.umbc.edu","ldyer2","ldyer2","ldyer2");




		#$num_rows = mysqli_num_rows($select);


		#if($num_rows != 0){

			#for all the rows as returned by the query, go through each row
			#and use the mysql_fetch_array function to return an array of the next row
			#field values can be obtained by subscripting the returned aray with the column names
?>
<h1> Upcoming Appointments: </h1>
						<table border="1">
					<tr>
						<th> Appointment ID</th>
						<th> Name </th>
						<th> Phone Number </th>
						<th> Appt. Date </th>
					</tr>

<?php

 /* for($row_num = 0; $row_num < $num_rows; $row_num++){
	print("<tr>");
	$row_array = mysqli_fetch_array($select);
	print("<td>$row_array[title]</td>");
	print("<td>$row_array[content_text]</td>");
	print("<td>$row_array[userFeeling]</td>");
	print("<td>$row_array[userTags]</td>");
	print("</tr>");		
}
}


	print('</table>');
	print('<br>');
	print('<a href="https://swe.umbc.edu/~ldyer2/is448/ChapterSQL/postCreate.html"> Create Post </a>');
	
	} else {
		echo "Please go back and fill out all information";
	}
	*/

?>
</body>
</html>
<!DOCTYPE html>
<html lang="EN">
	<head>
		<title>Provider Page</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="ProviderStyle.css" />
	</head>
	<body>
    <h1> Provider Notes </h1>
    <?php
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","ldyer2","ldyer2","ldyer2");

	if (mysqli_connect_errno())	exit("Error - could not connect to MySQL");

	if ((isset($_POST['apptID'])  && !empty($_POST['apptID'])) &&
		(isset($_POST['notes'])  && !empty($_POST['notes'])))
	{

		$ApptID = htmlspecialchars($_POST['apptID']);
		$ApptID = mysqli_real_escape_string($db,$ApptID);
		$Notes = htmlspecialchars($_POST['notes']);
		$Notes = mysqli_real_escape_string($db,$Notes);

        $update_query = "UPDATE `Appointments` SET `docNotes` = '$Notes' WHERE `Appointments`.`apptID` = $ApptID;";
        print($update_query);

        $update = mysqli_query($db, $update_query);

        if(! $update){
            print("Error - query could not be executed");
            $error = mysqli_error($db);
            print "<p> . $error . </p>";
            exit;
        }

        print('<a href="ProviderNotes.php"> Go Back </a>');
    } else {
        print('Please Go Back and Enter All Information.');
        print('<br>');
        print('<a href="ProviderNotes.php"> Go Back </a>');
    }

        ?>


		


		
	</body>
</html>

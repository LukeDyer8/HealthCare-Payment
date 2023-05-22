<?php
/* This Code is written by Luke Dyer*/
session_start();
if (!isset($_SESSION['admin'])) {
	header("Location: ProviderLogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="EN">
<head>
    <title>Provider Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="testing.css" />
</head>
<body>
    <div class="blueBorder">
        <a href="ProviderAppointment.php">View Upcoming Appointments</a> 
        <a href="ProviderNotes.php">Create Patient Notes</a> 
        <a href="ProviderPrescription.php">View Prescription Requests</a> 
        <a href="ProviderLogin.php">Log Out</a> <br>
    </div>
    <h1>Provider Notes</h1>
    <?php
    $db = mysqli_connect("studentdb-maria.gl.umbc.edu","zaman3","zaman3","zaman3");

    if (mysqli_connect_errno()) {
        exit("Error - could not connect to MySQL");
    }

    if ((isset($_POST['apptID']) && !empty($_POST['apptID'])) &&
        (isset($_POST['notes']) && !empty($_POST['notes'])))
    {

        $ApptID = htmlspecialchars($_POST['apptID']);
        $ApptID = mysqli_real_escape_string($db, $ApptID);
        $Notes = htmlspecialchars($_POST['notes']);
        $Notes = mysqli_real_escape_string($db, $Notes);

        $update_query = "UPDATE `appointment_info` SET `doctor_notes` = '$Notes' WHERE `appointment_info`.`appt_ID` = $ApptID;";

        $update = mysqli_query($db, $update_query);

        if (! $update) {
            echo "Error - query could not be executed";
            $error = mysqli_error($db);
            echo "<p>" . $error . "</p>";
            exit;
        }
        echo "<h3>Your notes have been updated.</h3>";
        echo '<a href="ProviderNotes.php" class="goBackButton">Go Back</a>';
    } else {
    ?>
        <h3>Please Go Back and Enter All Information.</h3>
        <br>
        <a href="ProviderNotes.php" class="goBackButton">Go Back</a>
    <?php
    }
    ?>
</body>
</html>

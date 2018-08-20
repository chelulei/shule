<?php
	include 'connect.php';

	if (isset($_POST['save'])) {

		$Title=$_POST['Title'];
		$Start=$_POST['Start'];
	    $End=$_POST['End'];
	    $Description=$_POST['Description'];
	    $Audience=$_POST['Audience'];
	    $Venue=$_POST['Venue'];
	    

$sql = "INSERT INTO events (Title,Start,End, Description,Audience,Venue) 
    VALUES ('$Title','$Start', '$End', '$Description','$Audience','$Venue')";

        $run= mysqli_query($con,$sql);

        if ($run){

            header("Location:page-events.php?success=successfully added");
        }

        else {
            header("Location:page-events.php?error=Error!!!!!");
        }
	}
?>
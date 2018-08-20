<?php
	include '../connect.php';

	if (isset($_POST['save'])) {

		$Date=$_POST['Date'];
	    $Middlename=$_POST['Middlename'];
	    $Firstname=$_POST['Firstname'];
	    $Surname=$_POST['Surname'];
	    $Remarks=$_POST['Remarks'];
	    $Activities=$_POST['Activities'];
	   
	    

$sql = "INSERT INTO students (Date,Middlename,Firstname,Surname,Remarks, Activities) 
VALUES ('$Date','$Middlename','$Firstname','$Surname','$Remarks','$Activities')";
		
		if ($con->query($sql) === TRUE){
		 header("Location:page-students.php?success=User successfully added");
		exit();}
		else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
		$con->close();
	}
?>Date
<?php
	include '../connect.php';

	if (isset($_POST['save'])) {

		
		$date=$_POST['date'];
	    $item=$_POST['item'];
	    $closing=$_POST['closing'];
	    $description=$_POST['description'];
	    $takenby=$_POST['takenby'];
	  
$sql = "INSERT INTO stock (item, closing, description, takenby, date) 
    VALUES ( '$item','$closing', '$description', '$takenby', '$date')";
		
		if ($con->query($sql) === TRUE){
		 header("Location:page-stocktaking.php?success=User successfully added");
		exit();}
		else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
		$con->close();
	}
?>
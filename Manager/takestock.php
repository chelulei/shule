<?php
	include 'connect.php';

	if (isset($_POST['save'])) {

		$date=$_POST['date'];
	    $item=$_POST['item'];
	    $closing=$_POST['closing'];
	    $description=$_POST['description'];
	    $takenby=$_POST['takenby'];
	  
 $sql = mysqli_query($con,"INSERT INTO stock (item, closing, description, takenby, date) 
    VALUES ( '$item','$closing', '$description', '$takenby', '$date')");
		
		if ($sql){
		 header("Location:page-stocktaking.php?success=User successfully added");
	     }
		else {
            header("Location:page-stocktaking.php?Error=Error!!!!!!");
		}

	}
?>
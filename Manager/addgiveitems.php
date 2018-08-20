<?php
	include '../connect.php';

	if (isset($_POST['save'])) {

		
		$date=$_POST['date'];
	    $item=$_POST['item'];
	     $quanitity=$_POST['quanitity'];
	     $givento=$_POST['givento'];

	    $comment=$_POST['comment'];
	  
$sql = "INSERT INTO giveitems (date,item, quanitity, givento, comment ) 
    VALUES ('$date', '$item',  '$quanitity', '$givento', '$comment' )";
		
		if ($con->query($sql) === TRUE){
		 header("Location:page-giveitems.php?success=User successfully added");
		exit();}
		else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
		$con->close();
	}
?>
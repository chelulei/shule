<?php
	include 'connect.php';

	if (isset($_POST['save'])) {

		
		$date=$_POST['date'];
	    $item=$_POST['item'];
	     $quantity=$_POST['quantity'];
	     $givento=$_POST['givento'];

	    $comment=$_POST['comment'];
	  
$sql =mysqli_query($con, "INSERT INTO giveitems (date,item, quantity, givento, comment ) 
    VALUES ('$date', '$item',  '$quantity', '$givento', '$comment' )");
		
		if ($sql){
		 header("Location:page-giveitems.php?success=Item successfully added");
	    }
		else {
            header("Location:Page-addgiveitems.php?error=Error");
		}

	}
?>
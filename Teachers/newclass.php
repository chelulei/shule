<?php
	include 'connect.php';


	if (isset($_POST['save'])) {

		$Class=$_POST['Class'];
		$Classteacher=$_POST['Classteacher'];
	    $Nostudents=$_POST['Nostudents'];

	  
$sql = "INSERT INTO class (Class,Classteacher,Nostudents) 
    VALUES ('$Class','$Classteacher', '$Nostudents')";

        $run=$db->query($sql);

        if ($run){
            header("Location:page-classes.php?success=Class successfully added");
        }

        else {
            header("Location:Page-addclasses.php?error=Error!!!!!");
        }
	}
?>
<?php
	include 'connect.php';

	if (isset($_POST['save'])) {

		$Name=$_POST['Name'];
	    $Code=$_POST['Code'];
	    $Type=$_POST['Type'];
	    $Description=$_POST['Description'];
	    $Class=$_POST['Class'];
	    $Term=$_POST['Term'];
	    

$sql = "INSERT INTO subject (Name, Code, Type, Description, Class,Term) 
				VALUES ('$Name', '$Code', '$Type', '$Description', '$Class','$Term' )";
		
		$run= mysqli_query($con,$sql);

        if ($run){
            header("Location:page-subjects.php?success=Subject successfully added");
        }

        else {
            header("Location:page-addsubject.php?error=Error!!!!!");
        }
	}
?>
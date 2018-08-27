<?php
	include '../connect.php';

	if (isset($_POST['save'])) {

		$TSC_NO=$_POST['TSC_NO'];
		$Surname=$_POST['Surname'];
	    $Middlename=$_POST['Middlename'];
	    $Firstname=$_POST['Firstname'];
	    $Dateofbirth=$_POST['Dateofbirth'];
	    $Gender=$_POST['Gender'];
	    $Homeaddress=$_POST['Homeaddress'];
	    $Email=$_POST['Email'];
	    $Phone=$_POST['Phone'];
	    $Designation=$_POST['Designation'];
	    $Classes=$_POST['Classes'];
	    $DateEmp=$_POST['DateEmp'];
	    $YearsExp=$_POST['YearsExp'];
	    $Resume=$_POST['Resume'];
	    $Salary=$_POST['Salary'];
	    $Status=$_POST['Status'];

$sql = "INSERT INTO 
   teacher (TSC_NO, Surname,Middlename,Firstname,Dateofbirth,Gender,Homeaddress,Email,Image,Phone, Designation,Classes,DateEmp,YearsExp,Resume,Salary,Status) 
    VALUES 
    ('$TSC_NO','$Surname', '$Middlename', '$Firstname', '$Dateofbirth', '$Gender', '$Homeaddress', '$Email','default.png', '$Phone',
     '$Designation','$Classes', '$DateEmp','$YearsExp', '$Resume', '$Salary', 'Active')";
		
		$run=$db->query($sq);

		if ($run){
		 header("Location:page-students.php?success=User successfully added");
		}

		else {
			 header("Location:page-students.php?error=Error!!!!!");
		}
	}
?>
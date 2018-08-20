<?php
include 'connect.php';

if (isset($_POST['save'])) {
    $Surname=$_POST['Surname'];
    $Middlename=$_POST['Middlename'];
    $Firstname=$_POST['Firstname'];
    $Dateofbirth=$_POST['Dateofbirth'];
    $Gender=$_POST['Gender'];
    $Class=$_POST['Class'];
    $Homeaddress=$_POST['Homeaddress'];
    $Parentname=$_POST['Parentname'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    $Formerschool=$_POST['Formerschool'];
    $Entrymarks=$_POST['Entrymarks'];




    $sql = "INSERT INTO students (Surname,Middlename,Firstname,Dateofbirth,Gender, Class,Homeaddress,Parentname, Phone, Email,Formerschool,Entrymarks,date) 
VALUES ('$Surname','$Middlename','$Firstname','$Dateofbirth','$Gender','$Class', '$Homeaddress','$Parentname', '$Phone', '$Email', '$Formerschool','$Entrymarks',NOW() )";

    /* update class */
    $update= mysqli_query($con,"UPDATE class SET 
	students=students+1 WHERE classId='$Class'");

    $run=mysqli_query($con,$sql);

    if ($run){
        header("Location:page-students.php?success=User successfully added");
    }

    else {
        header("Location:page-students.php?error=Error!!!!!");
    }
}
?>
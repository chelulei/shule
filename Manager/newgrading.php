<?php
include 'connect.php';

if (isset($_POST['save'])) {

    $Title=$_POST['Title'];
    $PassMark=$_POST['PassMark'];
    $Createdby=$_POST['user'];
    $Description=$_POST['Description'];

    $sql = "INSERT INTO gradingsystem (Title, PassMark, Createdby,Createdon, Description) 
				VALUES ('$Title', '$PassMark', '$Createdby',NOW(),'$Description')";

    $run= mysqli_query($con,$sql);

    if ($run){
        header("Location:page-gradingsystem.php?success=successfully added");
    }

    else {
        header("Location:page-gradingsystem.php?error=Error!!!!!");
    }
}
?>
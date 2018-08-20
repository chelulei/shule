<?php
include 'connect.php';
if (isset($_POST['save'])) {

    $Student=$_POST['Student'];
    $Activities=$_POST['Activities'];
    $Remarks=$_POST['Remarks'];
    $date=$_POST['Date'];
    $sql = "INSERT INTO leaving (Student,activities,remarks,lev_date) 
    VALUES ('$Student','$Activities','$Remarks','$date')";

    $run=mysqli_query($con,$sql);

    if ($run){
        header("Location:page-leavingcert.php?success=Successfully added");
    }

    else {
        header("Location:page-leavingcert.php?error=Error!!!!!");
    }
}
?>
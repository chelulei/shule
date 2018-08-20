<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $user=$_POST['user'];
    $Student=$_POST['Student'];
    $Date=$_POST['Date'];
    $Report=$_POST['Report'];
    $Action=$_POST['Action'];
    $Description=$_POST['Description'];


    $sql = "INSERT INTO medical (Student,Date,Report,Action,description,User) 
    VALUES ('$Student','$Date', '$Report','$Action','$Description',$user)";

    $run= mysqli_query($con,$sql);

    if ($run){

        header("Location:page-medical.php?success=successfully added");
    }

    else {
        header("Location:page-medical.php?error=Error!!!!!");
    }
}
?>
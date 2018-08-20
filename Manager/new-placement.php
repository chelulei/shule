<?php
include 'connect.php';
if (isset($_POST['save'])) {

    $Student=$_POST['Student'];
    $Start_date=$_POST['Start_date'];
    $Position=$_POST['Position'];
    $Class=$_POST['Class'];
    $Date_upto=$_POST['Date_upto'];
    $Description=$_POST['Description'];
    $sql = "INSERT INTO placements(Student,Start_date,Position,Class,Date_upto,Description) 
    VALUES ('$Student','$Start_date', '$Position','$Class','$Date_upto','$Description')";

    $run=mysqli_query($con,$sql);

    if ($run){
        header("Location:page-extracuri.php?success=Successfully added");
    }

    else {
        header("Location:page-newleadership.php?error=Error!!!!!");
    }
}
?>
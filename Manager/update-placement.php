<?php
include 'connect.php';

if (isset($_POST['save'])) {
     $id=$_POST['id'];
    $Student=$_POST['Student'];
    $Start_date=$_POST['Start_date'];
    $Position=$_POST['Position'];
    $Class=$_POST['Class'];
    $Date_upto=$_POST['Date_upto'];
    $Description=$_POST['Description'];
    
    $update  = "UPDATE placements SET 
                 Student='$Student',
                 Start_date='$Start_date',
                 Position='$Position',
                 Class='$Class',
                  Date_upto='$Date_upto',
                 Description='$Description'
                  WHERE place_id='$id'";

    $run=mysqli_query($con,$update);

    if ($run){
        header("Location:page-extracuri.php?success=successfully Updated");
    }

    else {
        header("Location:page-extracuri.php?error=There was an Error! please try again");
    }
}


?>
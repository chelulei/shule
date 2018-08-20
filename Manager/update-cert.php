<?php
include 'connect.php';

if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $Student=$_POST['Student'];
    $Activities=$_POST['Activities'];
    $Remarks=$_POST['Remarks'];
    $date=$_POST['Date'];


    $update  = "UPDATE leaving SET 
                Student='$Student',
                activities='$Activities',
                    remarks='$Remarks',
                lev_date='$date'
                  WHERE leavingid='$id'";

    $run=mysqli_query($con,$update);

    if ($run){
        header("Location:page-leavingcert.php?success=Event successfully Updated");
    }

    else {
        header("Location:page-editleaving.php?error=There was an Error! please try again");
    }
}


?>
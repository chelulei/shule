<?php
include 'connect.php';
include 'functions.php';

if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $user=$_POST['user'];
    $subject=$_POST['subject'];
    $low_mark=$_POST['low_mark'];
    $high_mark=$_POST['high_mark'];
    $aggregate=$_POST['aggregate'];
 $update  = "UPDATE gradingsystem SET 
                    user='$user',
                   subject='$subject',
                   low_mark='$low_mark',
                  high_mark='$high_mark',
                  aggregate='$aggregate'
                  WHERE id='$id'";

    $run=mysqli_query($con,$update);

    if ($run){
        header("Location:page-gradingsystem.php?success=Grade successfully Updated");
    }
    else {
       header("Location:page-gradingsystem.php?error=There was an Error! please try again");
    }
}


?>
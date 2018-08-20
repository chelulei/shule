<?php
include 'connect.php';

if (isset($_POST['save'])) {
    $user=$_POST['user'];
    $subject=$_POST['subject'];
    $low_mark=$_POST['low_mark'];
    $high_mark=$_POST['high_mark'];
    $aggregate=$_POST['aggregate'];

    $sql = "INSERT INTO gradingsystem (user,subject,low_mark, high_mark,aggregate) 
				VALUES ('$user','$subject','$low_mark', '$high_mark','$aggregate')";

    $run= mysqli_query($con,$sql);

    if ($run){
        header("Location:page-gradingsystem.php?success=successfully added");
    }

    else {
        header("Location:page-gradingsystem.php?error=Error!!!!!");
    }
}
?>
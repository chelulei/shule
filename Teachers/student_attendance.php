<?php
include 'connect.php';

if (isset($_POST['save'])) {

    $date=$_POST['date'];
    $day=$_POST['day'];
    $student=$_POST['student'];
    $status=$_POST['status'];
    $remarks=$_POST['remarks'];
    $class=$_POST['class'];

    for($i = 0; $i < count($student); $i++)
    {
    $sql = "INSERT INTO attendance (date,day,student,class_id,status,remarks) 
      VALUES ('$date','$day','$student[$i]','$class[$i]','$status[$i]','$remarks[$i]')";

        $run=mysqli_query($con,$sql);
    }


    if ($run){
        header("Location:page-attendanceview.php?success=Records successfully added");
    }

    else {
        header("Location:page-attendancelist.php?error=Error!!!!!");
    }
}
?>
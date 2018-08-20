<?php
include 'connect.php';

if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $exam=$_POST['exam'];
    $term=$_POST['term'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    $date=$_POST['date'];


  $update  = "UPDATE exams SET 
                exam='$exam',
                term='$term',
                class='$class',
                subject='$subject',
                 date='$date'
                  WHERE exam_id='$id'";

    $run=mysqli_query($con,$update);

    if ($run){
        header("Location:page-exams.php?success=Exam successfully Updated");
    }

    else {
        header("Location:page-editexam.php?error=There was an Error! please try again");
    }
}


?>
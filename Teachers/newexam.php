<?php
include 'connect.php';

if (isset($_POST['save'])) {

    $exam=$_POST['exam'];
    $term=$_POST['term'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    $date=$_POST['date'];

    $sql = "INSERT INTO exams(exam,term,class, subject,date) 
    VALUES ('$exam','$term', '$class', '$subject','$date')";

    $run= mysqli_query($con,$sql);

    if ($run){

        header("Location:page-exams.php?success=successfully added");
    }

    else {
        header("Location:page-newexam.php?error=Error!!!!!");
    }
}
?>
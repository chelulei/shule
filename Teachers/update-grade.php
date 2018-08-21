<?php
include 'connect.php';
include 'functions.php';

if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $user=$_POST['user'];
    $student=$_POST['student'];
    $year=$_POST['year'];
    $term=$_POST['term'];
    $subject=$_POST['subject'];
    $exam=$_POST['exam'];
    $score=$_POST['score'];
   $update  = "UPDATE grade SET 
                     user='$user',
                     student='$student',
                     year='$year',
                     term='$term',
                     subject='$subject',
                     exam='$exam',
                      score='$score'
                  WHERE gradeid='$id'";

    $run=mysqli_query($con,$update);

    if ($run){
       header("Location:page-grades.php?success=Grade successfully Updated");
    }
    else {
       header("Location:page-grades.php?error=There was an Error! please try again");
    }
}



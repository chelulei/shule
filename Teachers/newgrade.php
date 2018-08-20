<?php
	include 'connect.php';

	if (isset($_POST['save'])) {

		$user=$_POST['user'];
        $student=$_POST['student'];
        $year=$_POST['year'];
        $term=$_POST['term'];
        $subject=$_POST['subject'];
        $exam=$_POST['exam'];
        $score=$_POST['score'];

$sql = "INSERT INTO grade (user,student,year, term,subject,exam,score) 
    VALUES ('$user','$student', '$year', '$term','$subject','$exam','$score')";

        $run= mysqli_query($con,$sql);

        if ($run){

            header("Location:page-grades.php?success=successfully added");
        }

        else {
            header("Location:page-addgrades.php.php?error=Error!!!!!");
        }
	}
?>
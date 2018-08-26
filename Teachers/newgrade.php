<?php
	include 'connect.php';

	if (isset($_POST['save'])) {

		$user=$_POST['user'];
        $student=$_POST['student'];
        $year=$_POST['year'];
        $term=$_POST['term'];
        $subject=$_POST['subject'];
        $exam=$_POST['exam'];
        $test=$_POST['test'];

$sql = "INSERT INTO grade (user,student,year, term,subject,exam,test) 
    VALUES ('$user','$student', '$year', '$term','$subject','$exam','$test')";

        $run= mysqli_query($con,$sql);

        if ($run){

            header("Location:page-grades.php?success=successfully added");
        }

        else {
            header("Location:page-addgrades.php?error=Error!!!!!");
        }
	}
?>
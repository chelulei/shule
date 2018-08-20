<?php



function totalUsers(){

	global $con;

	$select= mysqli_query($con,"SELECT * FROM user");

	$total= mysqli_num_rows($select);

    echo $total;
	
}

function totalStudents(){

	global $con;

	$select= mysqli_query($con,"SELECT * FROM students");

	$total= mysqli_num_rows($select);

    echo $total;
	
}
?>
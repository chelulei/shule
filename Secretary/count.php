<?php

function totalUsers(){

	global $con;

    $qry=mysqli_query( $con,"SELECT * FROM user");
    $total1=mysqli_num_rows($qry);
    echo $total1;
	
}

function totalStudents(){

	global $con;

	$select=mysqli_query( $con,"SELECT * FROM students");
    $total=mysqli_num_rows($select);

    echo $total;
	
}
?>
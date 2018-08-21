<?php



function totalUsers(){

	global $db;

	$select= "SELECT * FROM user";
    $qry=$db->query($select);
	$total= $qry->num_rows;

    echo $total;
	
}

function totalStudents(){

	global $db;

	$select= "SELECT * FROM students";
    $qry=$db->query($select);
    $total=$qry->num_rows;

    echo $total;
	
}
?>
<?php
include 'connect.php';
if (isset($_POST['update'])) {

    $Id=$_POST['id'];
    $date = $_POST['date'];
    $item = $_POST['item'];
    $closing = $_POST['closing'];
    $description =  $_POST['description']; ;
    $takenby = $_POST['takenby'];

    $sql = "UPDATE stock SET item='$item',
                              closing='$closing',
                              description='$description',
                              date='$date',
                               takenby='$takenby'
        WHERE 	id = '$Id'";

    $run= mysqli_query($con, $sql);

    if ($run){
        header("Location:page-stocktaking.php?success= Record was updated successfully ");
    }

    else {
        header("Location:page-stocktaking.php?error= Error!!! ");

    }
}
?>
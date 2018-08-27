<?php
include 'connect.php';
if (isset($_POST['update'])) {

    $Id=$_POST['id'];
    $date = $_POST['date'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $givento = $_POST['givento'];
    $comment =  $_POST['comment'];

    
  echo   $sql = "UPDATE giveitems SET date='$date',
                                 item='$item',
                                 quantity='$quantity',
                                 givento ='$givento',
                                 comment='$comment'
                             WHERE 	id = '$Id'";
                       $run= mysqli_query($con, $sql);

    if ($run){
        header("Location:page-giveitems.php?success= Record was updated successfully ");
    }

    else {
        header("Location:page-giveitems.php?error= Error!!! ");

    }
}
?>
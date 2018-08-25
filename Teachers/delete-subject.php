
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM subject WHERE SubIdNo=".$id);

    if( $query):
        header("Location:page-subjects.php");
    else:
        header("Location:page-subjects.php?error=Error!!!!!");
    endif;
}?>
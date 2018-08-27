
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM usergroup WHERE groupid=".$id);

    if( $query):
        header("Location:page-usersgroup.php");
    else:
        header("Location:page-usersgroup.php?error=Error!!!!!");
    endif;
}?>

<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM user WHERE id=".$id);

    if( $query):
        header("Location:page-allusers.php?success=successfully Deleted");
    else:
        header("Location:page-allusers.php?error=Error!!!");
    endif;
}?>

<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM leaving WHERE leavingid=".$id);

    if( $query):
        header("Location:page-leavingcert.php?success=successfully delet");
    else:
        header("Location:page-leavingcert.php?error=Successfully deleted");
    endif;
}?>
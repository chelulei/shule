
<?php

include 'connect.php';


if(isset($_GET['delete']))

{

    $id=$_GET['delete'];

    $query= mysqli_query($con, "DELETE FROM stock WHERE id=".$id);

    if( $query):
        header("Location:page-stocktaking.php");
    else:
        header("Location:page-stocktaking.php?success=Error!!!!!");
    endif;
}?>